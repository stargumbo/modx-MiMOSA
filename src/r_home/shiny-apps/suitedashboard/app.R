if (!require("pacman")) install.packages("pacman")
pacman::p_load(shiny, shinydashboard, shinycssloaders, RSiteCatalyst, DT, dplyr, jsonlite)

SCAuth("tkoscinski@rccl.com:RCCI", "3d79ad14cf921df97ef8940ee94478cd")
rs <- GetReportSuites()

ui <- dashboardPage(
  dashboardHeader(
    title = "RCCL Analytics"),
  dashboardSidebar(
    selectInput("rsid", "Report Suite:", 
                choice = c("",split(rs$rsid,rs$site_title,sep="="))),
    sidebarMenu(
      id = "tabs",
      menuItem("Configurations", 
               tabName = "configs", 
               icon = icon("cog")),
      menuItem("Plot Test", 
               tabName = "plots", 
               icon = icon("th")))),
  dashboardBody(
    tabItems(
      tabItem(
        tabName = "configs",
        h2("Report Suite Configurations"),
        p("Select a report suite on the left"),
        selectInput("dataType", "Data Type:",
                    c("", "Evars", "Props", "Events", "Elements", "Metrics", "Segments")),
        div(
          withSpinner(
            DT::dataTableOutput("tbl")),
          style="font-size:85%")),
      tabItem(
        tabName = "plots",
        h2("Plot Testing"),
        p("Takes awhile to load.  Patience..."),
        actionButton('plotit', 'Plot It'),
        div(
          withSpinner(
            plotOutput("plot1", click = "plot_click")))))))

server <- function(input, output, session) {
  v <- reactiveValues(doPlot = FALSE)
  
  observeEvent(input$plotit, {
    v$doPlot <- input$plotit
  })
  
  output$tbl <- DT::renderDataTable({
    if (is.null(input$rsid)) return ()
    if (is.null(input$dataType)) return ()
    if (input$dataType == "Evars") return (GetEvars(input$rsid))
    if (input$dataType == "Props") return (GetProps(input$rsid))
    if (input$dataType == "Events") return (GetSuccessEvents(input$rsid))
    if (input$dataType == "Elements") return (GetElements(input$rsid))
    if (input$dataType == "Metrics") return (GetMetrics(input$rsid))
    if (input$dataType == "Segments") return (GetSegments(input$rsid)) 
  }, options = list(pageLength = 50))
  
  output$plot1 <- renderPlot({
    if (v$doPlot == FALSE) return()
    isolate({
      start_date <- Sys.Date() - 7        # 7 days back from yesterday
      end_date <- Sys.Date() - 1          # Yesterday
      
      aa_data <- QueueTrended(input$rsid,
                              date.from = start_date,
                              date.to = end_date,
                              metrics = c("pageviews", "uniquevisitors"),
                              elements = "evar204",
                              date.granularity = "day")
      
      # Convert the datetime from POSIXlt to Date
      aa_data$datetime <- as.Date(aa_data$datetime)
      
      # Clean up the table a bit
      aa_data <- aa_data %>% 
        mutate(IP = name) %>% 
        select(datetime, IP, uniquevisitors, pageviews) 
      
      # Create the plot.
      gg <- ggplot(aa_data, mapping = aes(x = uniquevisitors, y = pageviews, colour = IP)) +
        geom_point() +
        theme_light()
      
      print(gg)
    })
  })
}

shinyApp(ui, server)