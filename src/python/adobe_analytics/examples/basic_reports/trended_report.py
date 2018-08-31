from adobe_analytics import Client, ReportDefinition

client = Client.from_json("my_credentials.json")
suites = client.suites()
suite = suites["rcciexcaliburprod"]

report_definition = ReportDefinition(
    dimensions="page",
    metrics="pageviews",
    date_from="2018-01-01",
    date_to="2018-1-31",
    granularity="day"  # only change to basic_report.py
)
dataframe = suite.download(report_definition)
print(dataframe.head())
