<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 2,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Home',
    'longtitle' => 'Home Page',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<h1>Welcome Home!</h1>
<p>Nothing to see here.  Click somewhere in the menu!</p>',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 1,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1476110137,
    'editedby' => 1,
    'editedon' => 1476780111,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1476110160,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!doctype html>
<html lang="en">
<head>    <title>Home - CBSi Datacombs</title>

    <base href="[[!++site_url]]" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/colorbox.css" />
    <style type="text/css">/* -----------------------
Base styles
------------------------*/

body
{
  margin: 0;
  padding: 0;
  color: #333;
  background-color: #eee;
  font: 1em/1.2 "Helvetica Neue", Helvetica, Arial, Geneva, sans-serif;
}

h1,h2,h3,h4,h5,h6
{
  margin: 0 0 .5em;
  font-weight: 500;
  line-height: 1.1;
}

h1 { font-size: 2.25em; } /* 36px */
h2 { font-size: 1.75em; } /* 28px */
h3 { font-size: 1.375em; } /* 22px */
h4 { font-size: 1.125em; } /* 18px */
h5 { font-size: 1em; } /* 16px */
h6 { font-size: .875em; } /* 14px */

p
{
  margin: 0 0 1.5em;
  line-height: 1.5;
}

blockquote
{
  padding: 1em 2em;
  margin: 0 0 2em;
  border-left: 5px solid #eee;
}

hr
{
  height: 0;
  margin-top: 1em;
  margin-bottom: 2em;
  border: 0;
  border-top: 1px solid #ddd;
}

table
{
  background-color: transparent;
  border-spacing: 0;
  border-collapse: collapse;
  border-top: 1px solid #ddd;
}

th, td
{
  padding: .5em 1em;
  vertical-align: top;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:last-child td { border:none; }

a:link { color: royalblue; }
a:visited { color: purple; }
a:focus { color: black; }
a:hover { color: green; }
a:active { color: red; }

*:focus { outline: none; }

/* -----------------------
Layout styles
------------------------*/

.container
{
  max-width: 70em;
  margin: 0 auto;
}

.header
{
  color: #fff;
  background: #ddd;
  padding: 1em 1.25em;
}

.header-heading { margin: 0; }

.nav-bar
{
  background: #000;
  padding: 0;
}

.content
{
  overflow: hidden;
  padding: 1em 1.25em;
  background-color: #fff;
}

.main, .aside
{
  margin-bottom: 1em;
}

.footer
{
  color: #fff;
  background: #000;
  padding: 1em 1.25em;
}

.logo
{
  position:relative;
  background:url(http://static1.squarespace.com/static/55d63b3ce4b07fe20b7883de/55d6dd3ae4b0edf9e2eb3f85/55d6dd3be4b0b9bb4082f18f/1440144700110/CBS_logo-1024x282.png) center no-repeat;
  background-size:contain;
  display:block;
  text-indent:-9999px;
  margin:0 auto;
}
.logo{width:100%;height:48px}

.inner-container { border: 1px solid #ccc; padding:1em; margin:1em auto; }


/* -----------------------
Accordion Custom Styles
------------------------*/

.accordion .inner-container { margin:0 auto; }

.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {
  border:1px solid #3883c9;
  background: #3883c9;
}

.ui-icon { margin-right:8px; }

.ui-helper-reset { font-size:90%; }

/* -----------------------
Nav
------------------------*/

nav {
  margin:0 auto; 
  text-align: center;
}

nav ul ul {
  display: none;
}

nav ul li:hover > ul {
  display: block;
}


nav ul {
  background: #efefef; 
  background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
  background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
  background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
  box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
  padding: 0 20px;
  border-radius: 10px;  
  list-style: none;
  position: relative;
  display: inline-table;
}
  nav ul:after {
    content: ""; clear: both; display: block;
  }

  nav ul li {
    float: left;
  }
    nav ul li:hover {
      background: #4b545f;
      background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
      background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
      background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
    }
      nav ul li:hover a {
        color: #fff;
      }
    
    nav ul li a {
      display: block; padding: 25px 40px;
      color: #757575; text-decoration: none;
      white-space: nowrap;
    }
      
    
  nav ul ul {
    background: #5f6975; border-radius: 0px; padding: 0;
    position: absolute; top: 100%;
  }
    nav ul ul li {
      float: none; 
      border-top: 1px solid #6b727c;
      border-bottom: 1px solid #575f6a; position: relative;
    }
      nav ul ul li a {
        padding: 15px 40px;
        color: #fff;
        white-space: nowrap;
      } 
        nav ul ul li a:hover {
          background: #4b545f;
        }
    
  nav ul ul ul {
    position: absolute; left: 100%; top:0;
  }
    

/* -----------------------
Single styles
------------------------*/

.img-responsive { max-width: 100%; }

.btn
{
  color: #fff !important;
  background-color: royalblue;
  border-color: #222;
  display: inline-block;
  padding: .5em 1em;
  margin-bottom: 0;
  font-weight: 400;
  line-height: 1.2;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: .2em;
  text-decoration: none;
}

.btn:hover
{
  color: #fff !important;
  background-color: green;
}

.btn:focus
{
  color: #fff !important;
  background-color: black;
}

.btn:active
{
  color: #fff !important;
  background-color: red;
}

.table
{
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}

.list-unstyled
{
  padding-left: 0;
  list-style: none;
}

.list-inline
{
  padding-left: 0;
  margin-left: -5px;
  list-style: none;
}

.list-inline > li
{
  display: inline-block;
  padding-right: 5px;
  padding-left: 5px;
}


/* -----------------------
Wide styles
------------------------*/

@media (min-width: 55em)
{
  .header { padding: 1.5em 3em; }
  .nav-bar { padding: 0 3em; }
  .content { padding: 2em 3em; }

  .main
  {
    float: left;
    width: 65%;
    margin-right: 5%;
    margin-bottom: 1em;
  }

  .aside
  {
    float: left;
    width: 30%;
    margin-bottom: 1em;
  }
      .aside li { padding-bottom:10px; }

  .footer { padding: 2em 3em; }
  
  .nav li
  {
    display: inline;
    margin: 0 1em 0 0;
  }
  
  .nav a
  {
    display: inline;
    padding: 0;
    border-bottom: 0;
  }
}

/*----- Tabs -----*/
.tabs {
    width:100%;
    display:inline-block;
}
 
    /*----- Tab Links -----*/
    /* Clearfix */
    .tab-links {
      padding:0;
      margin:0;
    }
    .tab-links:after {
        display:block;
        clear:both;
        content:\'\';
    }
 
    .tab-links li {
        margin:0px 5px;
        float:left;
        list-style:none;
    }
 
        .tab-links a {
          padding: 9px 15px;
          display: inline-block;
          border-radius: 5px 5px 0px 0px;
          background: #3883c9;
          /* font-size: 16px; */
          font-weight: 600;
          color: #EAEAF7;
          transition: all linear .15s;
          text-decoration: none;
          border-width: 1px 1px 1px 1px;
          border-style: solid;
          border-color: #eaeaea #eaeaea #ffffff #eaeaea;
          margin-bottom: -1px;
        }
 
        .tab-links a:hover {
            background:#a7cce5;
            text-decoration:none;
        }
 
    .tabs li.active a, .tabs li.active a:hover {
        background:#fff;
        color:#393939;
    }
 
    /*----- Content of Tabs -----*/
    .tab-content {
      padding: 15px;
      border-radius: 5px;
      box-shadow: -1px 1px 1px rgba(0,0,0,.15);
      background: #fff;
      border-style: solid;
      border-width: 1px;
      border-color: #f0f0f0;
    }
 
        .tab {
            display:none;
        }
 
        .tab.active {
            display:block;
        }

/* http://prismjs.com/download.html?themes=prism-coy&languages=markup+css+clike+javascript+c+java+json+objectivec&plugins=line-highlight+line-numbers+highlight-keywords */
/**
 * prism.js Coy theme for JavaScript, CoffeeScript, CSS and HTML
 * Based on https://github.com/tshedor/workshop-wp-theme (Example: http://workshop.kansan.com/category/sessions/basics or http://workshop.timshedor.com/category/sessions/basics);
 * @author Tim  Shedor
 */

code[class*="language-"],
pre[class*="language-"] {
  color: black;
  background: none;
  font-family: Consolas, Monaco, \'Andale Mono\', \'Ubuntu Mono\', monospace;
  text-align: left;
  white-space: pre;
  word-spacing: normal;
  word-break: normal;
  word-wrap: normal;
  line-height: 1.5;

  -moz-tab-size: 4;
  -o-tab-size: 4;
  tab-size: 4;

  -webkit-hyphens: none;
  -moz-hyphens: none;
  -ms-hyphens: none;
  hyphens: none;
}

/* Code blocks */
pre[class*="language-"] {
  position: relative;
  margin: .5em 0;
  box-shadow: -1px 0px 0px 0px #358ccb, 0px 0px 0px 1px #dfdfdf;
  border-left: 10px solid #358ccb;
  background-color: #fdfdfd;
  background-image: linear-gradient(transparent 50%, rgba(69, 142, 209, 0.04) 50%);
  background-size: 3em 3em;
  background-origin: content-box;
  overflow: visible;
  padding: 0;
}

code[class*="language"] {
  max-height: inherit;
  height: 100%;
  padding: 0 1em;
  display: block;
  overflow: auto;
}

/* Margin bottom to accomodate shadow */
:not(pre) > code[class*="language-"],
pre[class*="language-"] {
  background-color: #fdfdfd;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin-bottom: 1em;
}

/* Inline code */
:not(pre) > code[class*="language-"] {
  position: relative;
  padding: .2em;
  border-radius: 0.3em;
  color: #c92c2c;
  border: 1px solid rgba(0, 0, 0, 0.1);
  display: inline;
  white-space: normal;
}

pre[class*="language-"]:before,
pre[class*="language-"]:after {
  content: \'\';
  z-index: -2;
  display: block;
  position: absolute;
  bottom: 0.75em;
  left: 0.18em;
  width: 40%;
  height: 20%;
  max-height: 13em;
  box-shadow: 0px 13px 8px #979797;
  -webkit-transform: rotate(-2deg);
  -moz-transform: rotate(-2deg);
  -ms-transform: rotate(-2deg);
  -o-transform: rotate(-2deg);
  transform: rotate(-2deg);
}

:not(pre) > code[class*="language-"]:after,
pre[class*="language-"]:after {
  right: 0.75em;
  left: auto;
  -webkit-transform: rotate(2deg);
  -moz-transform: rotate(2deg);
  -ms-transform: rotate(2deg);
  -o-transform: rotate(2deg);
  transform: rotate(2deg);
}

.token.comment,
.token.block-comment,
.token.prolog,
.token.doctype,
.token.cdata {
  color: #7D8B99;
}

.token.punctuation {
  color: #5F6364;
}

.token.property,
.token.tag,
.token.boolean,
.token.number,
.token.function-name,
.token.constant,
.token.symbol,
.token.deleted {
  color: #c92c2c;
}

.token.selector,
.token.attr-name,
.token.string,
.token.char,
.token.function,
.token.builtin,
.token.inserted {
  color: #2f9c0a;
}

.token.operator,
.token.entity,
.token.url,
.token.variable {
  color: #a67f59;
  background: rgba(255, 255, 255, 0.5);
}

.token.atrule,
.token.attr-value,
.token.keyword,
.token.class-name {
  color: #1990b8;
}

.token.regex,
.token.important {
  color: #e90;
}

.language-css .token.string,
.style .token.string {
  color: #a67f59;
  background: rgba(255, 255, 255, 0.5);
}

.token.important {
  font-weight: normal;
}

.token.bold {
  font-weight: bold;
}
.token.italic {
  font-style: italic;
}

.token.entity {
  cursor: help;
}

.namespace {
  opacity: .7;
}

@media screen and (max-width: 767px) {
  pre[class*="language-"]:before,
  pre[class*="language-"]:after {
    bottom: 14px;
    box-shadow: none;
  }

}

/* Plugin styles */
.token.tab:not(:empty):before,
.token.cr:before,
.token.lf:before {
  color: #e0d7d1;
}

/* Plugin styles: Line Numbers */
pre[class*="language-"].line-numbers {
  padding-left: 0;
}

pre[class*="language-"].line-numbers code {
  padding-left: 3.8em;
}

pre[class*="language-"].line-numbers .line-numbers-rows {
  left: 0;
}

/* Plugin styles: Line Highlight */
pre[class*="language-"][data-line] {
  padding-top: 0;
  padding-bottom: 0;
  padding-left: 0;
}
pre[data-line] code {
  position: relative;
  padding-left: 4em;
}
pre .line-highlight {
  margin-top: 0;
}

pre[data-line] {
  position: relative;
  padding: 1em 0 1em 3em;
}

.line-highlight {
  position: absolute;
  left: 0;
  right: 0;
  padding: inherit 0;
  margin-top: 1em; /* Same as .prism’s padding-top */

  background: hsla(24, 20%, 50%,.08);
  background: linear-gradient(to right, hsla(24, 20%, 50%,.1) 70%, hsla(24, 20%, 50%,0));

  pointer-events: none;

  line-height: inherit;
  white-space: pre;
}

  .line-highlight:before,
  .line-highlight[data-end]:after {
    content: attr(data-start);
    position: absolute;
    top: .4em;
    left: .6em;
    min-width: 1em;
    padding: 0 .5em;
    background-color: hsla(24, 20%, 50%,.4);
    color: hsl(24, 20%, 95%);
    font: bold 65%/1.5 sans-serif;
    text-align: center;
    vertical-align: .3em;
    border-radius: 999px;
    text-shadow: none;
    box-shadow: 0 1px white;
  }

  .line-highlight[data-end]:after {
    content: attr(data-end);
    top: auto;
    bottom: .4em;
  }

pre.line-numbers {
  position: relative;
  padding-left: 3.8em;
  counter-reset: linenumber;
}

pre.line-numbers > code {
  position: relative;
}

.line-numbers .line-numbers-rows {
  position: absolute;
  pointer-events: none;
  top: 0;
  font-size: 100%;
  left: -3.8em;
  width: 3em; /* works for line-numbers below 1000 lines */
  letter-spacing: -1px;
  border-right: 1px solid #999;

  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;

}

  .line-numbers-rows > span {
    pointer-events: none;
    display: block;
    counter-increment: linenumber;
  }

    .line-numbers-rows > span:before {
      content: counter(linenumber);
      color: #999;
      display: block;
      padding-right: 0.8em;
      text-align: right;
    }</style>

    <script src="//code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/colorbox.js"></script>
    <script src="assets/js/handlebars.js"></script>
    <script src="assets/js/prism.js"></script>
    <script id="app-code-template" type="text/x-handlebars-template">
    {{#each entry}}
    <div class="accordion2 {{#if this.gsx$articleid.$t}}ontology-article{{/if}} ontology-method-{{this.gsx$trackingmethod.$t}}">
        <h2>{{this.gsx$node.$t}}</h2>
        <div class="inner-container container-{{@index}}">
            <div class="tabs">
                <ul class="tab-links">
                    <li class="active"><a href="#tab-basic-{{@index}}">Basic</a></li>
                    
                    
                </ul>
                <div class="tab-content">
                    <div id="tab-basic-{{@index}}" class="tab active">
                        <pre class="line-numbers"><code class="language-json">siteCode : \'\'
sitePrimaryRsid : \'\'
siteType : \'\'
siteSection : \'{{this.gsx$sitesection.$t}}\'
siteHier : \'{{this.gsx$sitehier.$t}}\'
pageType : \'{{this.gsx$pagename.$t}}\'
screenName : \'{{this.gsx$pagename.$t}}\'{{#if this.gsx$articleid.$t}}
articleId : \'{{this.gsx$articleid.$t}}\'
articleTitle : \'{{this.gsx$articletitle.$t}}\'
articleType : \'{{this.gsx$articletype.$t}}\'
articleAuthorId : \'{{this.gsx$articleauthorid.$t}}\'
articleAuthorName : \'{{this.gsx$articleauthorname.$t}}\'{{/if}}</code></pre>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
    {{/each}}
</script>

<script type="text/javascript">
// JSON feed
var feed = "";
var url = "https://spreadsheets.google.com/feeds/list//od6/public/values?alt=json";

// Accordion Content
var icons = {
  header: "ui-icon-circle-arrow-e",
  activeHeader: "ui-icon-circle-arrow-s"
};

firetabs = function(){
    jQuery(\'.tabs .tab-links a\').on(\'click\', function(e){
        var currentAttrValue = jQuery(this).attr(\'href\');
        jQuery(\'.tabs \' + currentAttrValue).show().siblings().hide();
        jQuery(this).parent(\'li\').addClass(\'active\').siblings().removeClass(\'active\');
        e.preventDefault();
    });
};
fireaccordion = function(i){
    jQuery(i).accordion({
        active: false,
        collapsible:true,
        header:"h2",
        heightStyle:"content",
        icons: icons
    });
};
firehandlebars = function(data, template, destination){
  var theTemplateScript = jQuery(template).html();
  var theTemplate = Handlebars.compile(theTemplateScript);
  var theCompiledHtml = theTemplate(data);
  jQuery(destination).html(theCompiledHtml);
};

jQuery(function(){
    // Kill empty menu clicks
    jQuery(\'.linkdisable\').click(function(e){
        e.preventDefault();
        return false;
    });

    jQuery.getJSON(url, function(data){
        feed = data.feed;
    });

    fireaccordion(".accordion1");
    firetabs();

    jQuery(document).ajaxStart(function(){
        //console.log(\'ajaxStart\');
    }).ajaxStop(function(){
        //console.log(\'ajaxStop\');
        firehandlebars(feed, "#app-code-template", "#tab-ontology-basic");
        fireaccordion(".accordion2");
        firetabs();
        fireprism();
        jQuery(\'.ontology-article\').detach().appendTo(\'#tab-ontology-articles\');
        jQuery(\'.ontology-method-trackAction\').detach().appendTo(\'#ontology-method-trackAction\');
        jQuery("#tab-ontology-basic").sieve({ itemSelector: "h2" });
    });
});

Handlebars.registerHelper(\'trackingMethodPage\', function(trackingmethod){
    if(trackingmethod == \'trackState\'){
        return this.gsx$pagename.$t;
    } else {
        return this.gsx$trackingmethodaction.$t;        
    }
});

/*
$.getJSON(url, function(data) {
    var html = \'\';

    var entry = data.feed.entry;
    var modx_platform = "";

    html += \'<div class="accordion2">\';
    for (var i = 0; i < entry.length; i++) {
        var html_and=\'\',html_ios=\'\',html_list=\'\',page_and=\'\',page_ios=\'\',article_and=\'\',article_ios=\'\';

        var dr = {
            // Tracking Method
            trackingmethod : entry[i][\'gsx$trackingmethod\'][\'$t\'],

            // Basic pageview
            page : {
                node : entry[i][\'gsx$node\'][\'$t\'],
                pagetype : entry[i][\'gsx$pagetype\'][\'$t\'],
                pagename : entry[i][\'gsx$pagename\'][\'$t\'],
                project : entry[i][\'gsx$project\'][\'$t\'],
                channel : entry[i][\'gsx$channel\'][\'$t\'],
                productline : entry[i][\'gsx$productline\'][\'$t\'],
                servicelevel : entry[i][\'gsx$servicelevel\'][\'$t\'],
                feature : entry[i][\'gsx$feature\'][\'$t\'],
                subfeature : entry[i][\'gsx$subfeature\'][\'$t\']
            },

            // Article pageview
            article : {
                articleid : entry[i][\'gsx$articleid\'][\'$t\'],
                articletitle : entry[i][\'gsx$articletitle\'][\'$t\'],
                articletype : entry[i][\'gsx$articletype\'][\'$t\'],
                articleauthorid : entry[i][\'gsx$articleauthorid\'][\'$t\'],
                articleauthorname : entry[i][\'gsx$articleauthorname\'][\'$t\']
            }
        }
        var hiertrim = dr.page.project + \'|\' + dr.page.channel + \'|\' + dr.page.productline + \'|\' + dr.page.servicelevel + \'|\' + dr.page.feature + \'|\' + dr.page.subfeature;
        hiertrim = hiertrim.replace("||"||"|||"||"||||"||"|||||","|");

        html += \'<h2>\' +dr.page.node+ \'</h2><div class="inner-container container-\'+i+\'"><div class="tabs"><ul class="tab-links">\'+html_list+\'</ul><div class="tab-content">\'+page_ios+page_and+\'</div></div></div>\';
    }
    html += "</div>";

    $(\'.ontology-tags\').html(html);
});
*/

</script>



    
    <!-- <script type="text/javascript">      // Your Client ID can be retrieved from your project in the Google
      // Developer Console, https://console.developers.google.com
      var CLIENT_ID = \'1037189624436-sqim1lqho0t3i91554tgkhppc1hoi9ft.apps.googleusercontent.com\';
      var SCOPES = ["https://www.googleapis.com/auth/spreadsheets.readonly"];

      /**
       * Check if current user has authorized this application.
       */
      function checkAuth() {
        gapi.auth.authorize(
          {
            \'client_id\': CLIENT_ID,
            \'scope\': SCOPES.join(\' \'),
            \'immediate\': true
          }, handleAuthResult);
      }

      /**
       * Handle response from authorization server.
       *
       * @param {Object} authResult Authorization result.
       */
      function handleAuthResult(authResult) {
        var authorizeDiv = document.getElementById(\'authorize-div\');
        if (authResult && !authResult.error) {
          // Hide auth UI, then load client library.
          authorizeDiv.style.display = \'none\';
          loadSheetsApi();
        } else {
          // Show auth UI, allowing the user to initiate authorization by
          // clicking authorize button.
          authorizeDiv.style.display = \'inline\';
        }
      }

      /**
       * Initiate auth flow in response to user clicking authorize button.
       *
       * @param {Event} event Button click event.
       */
      function handleAuthClick(event) {
        gapi.auth.authorize(
          {client_id: CLIENT_ID, scope: SCOPES, immediate: false},
          handleAuthResult);
        return false;
      }

      /**
       * Load Sheets API client library.
       */
      function loadSheetsApi() {
        var discoveryUrl = \'https://sheets.googleapis.com/$discovery/rest?version=v4\';
        gapi.client.load(discoveryUrl).then(listMajors);
      }

      /**
       * Print the names and majors of students in a sample spreadsheet:
       * https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
       */
      function listMajors() {
        gapi.client.sheets.spreadsheets.values.get({
          spreadsheetId: \'1HIb5ElOwYoDAglociumlPD7kUyiii8at_ZQI_NTmx7g\',
          range: \'QA!A:E\',
        }).then(function(response) {
            var table = $(\'<table></table>\').addClass(\'newDataTable cell-border\');
            var tablehead = $(\'<thead></thead>\');
            var tablebody = $(\'<tbody></tbody>\');
            var tablefoot = $(\'<tfoot></tfoot>\');
            var tablerow = $(\'<tr></tr>\');

            table.append(tablehead, tablebody, tablefoot);

            $(\'#output\').append(table);
          
            var range = response.result;
            var columnCount = range.values[0].length;
          
            if (range.values.length > 0) {
                for (var i = 0; i < columnCount; i++) {
                    tablehead.append(\'<th>\' + range.values[0][i] + \'</th>\');
                    tablefoot.append(\'<th>\' + range.values[0][i] + \'</th>\');
                }

                for (i = 1; i < range.values.length; i++) {
                    var thisrow = tablebody.append(tablerow);
                    for (j = 0; j < range.values[i].length; j++) {
                        thisrow.append(\'<td>\' + range.values[i][j] + \'</td>\')
                    }
                }

            } else {
                appendPre(\'No data found.\');
            }
            table.DataTable({"ordering": false});
        }, function(response) {
          appendPre(\'Error: \' + response.result.error.message);
        });
      }

      /**
       * Append a pre element to the body containing the given message
       * as its text node.
       *
       * @param {string} message Text to be placed in pre element.
       */
      function appendPre(message) {
        var pre = document.getElementById(\'output\');
        var textContent = document.createTextNode(message + \'\\n\');
        pre.appendChild(textContent);
      }
</script> -->
    <script src="//apis.google.com/js/client.js?onload=checkAuth"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <style type="text/css">/*
 *  File:         demo_table.css
 *  CVS:          $Id$
 *  Description:  CSS descriptions for DataTables demo pages
 *  Author:       Allan Jardine
 *  Created:      Tue May 12 06:47:22 BST 2009
 *  Modified:     $Date$ by $Author$
 *  Language:     CSS
 *  Project:      DataTables
 *
 *  Copyright 2009 Allan Jardine. All Rights Reserved.
 *
 * ***************************************************************************
 * DESCRIPTION
 *
 * The styles given here are suitable for the demos that are used with the standard DataTables
 * distribution (see www.datatables.net). You will most likely wish to modify these styles to
 * meet the layout requirements of your site.
 *
 * Common issues:
 *   \'full_numbers\' pagination - I use an extra selector on the body tag to ensure that there is
 *     no conflict between the two pagination types. If you want to use full_numbers pagination
 *     ensure that you either have "example_alt_pagination" as a body class name, or better yet,
 *     modify that selector.
 *   Note that the path used for Images is relative. All images are by default located in
 *     ../images/ - relative to this CSS file.
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables features
 */

.dataTables_wrapper {
	position: relative;
	clear: both;
	zoom: 1; /* Feeling sorry for IE */
}

.dataTables_processing {
	position: absolute;
	top: 50%;
	left: 50%;
	width: 250px;
	height: 30px;
	margin-left: -125px;
	margin-top: -15px;
	padding: 14px 0 2px 0;
	border: 1px solid #ddd;
	text-align: center;
	color: #999;
	font-size: 14px;
	background-color: white;
}

.dataTables_length {
	width: 40%;
	float: left;
}

.dataTables_filter {
	width: 50%;
	float: right;
	text-align: right;
}

.dataTables_info {
	width: 60%;
	float: left;
}

.dataTables_paginate {
	float: right;
	text-align: right;
}

/* Pagination nested */
.paginate_disabled_previous, .paginate_enabled_previous,
.paginate_disabled_next, .paginate_enabled_next {
	height: 19px;
	float: left;
	cursor: pointer;
	*cursor: hand;
	color: #111 !important;
}
.paginate_disabled_previous:hover, .paginate_enabled_previous:hover,
.paginate_disabled_next:hover, .paginate_enabled_next:hover {
	text-decoration: none !important;
}
.paginate_disabled_previous:active, .paginate_enabled_previous:active,
.paginate_disabled_next:active, .paginate_enabled_next:active {
	outline: none;
}

.paginate_disabled_previous,
.paginate_disabled_next {
	color: #666 !important;
}
.paginate_disabled_previous, .paginate_enabled_previous {
	padding-left: 23px;
}
.paginate_disabled_next, .paginate_enabled_next {
	padding-right: 23px;
	margin-left: 10px;
}

.paginate_disabled_previous {
	background: url(\'../images/back_disabled.png\') no-repeat top left;
}

.paginate_enabled_previous {
	background: url(\'../images/back_enabled.png\') no-repeat top left;
}
.paginate_enabled_previous:hover {
	background: url(\'../images/back_enabled_hover.png\') no-repeat top left;
}

.paginate_disabled_next {
	background: url(\'../images/forward_disabled.png\') no-repeat top right;
}

.paginate_enabled_next {
	background: url(\'../images/forward_enabled.png\') no-repeat top right;
}
.paginate_enabled_next:hover {
	background: url(\'../images/forward_enabled_hover.png\') no-repeat top right;
}



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables display
 */
table.display {
	margin: 0 auto;
	clear: both;
	width: 100%;
	
	/* Note Firefox 3.5 and before have a bug with border-collapse
	 * ( https://bugzilla.mozilla.org/show%5Fbug.cgi?id=155955 ) 
	 * border-spacing: 0; is one possible option. Conditional-css.com is
	 * useful for this kind of thing
	 *
	 * Further note IE 6/7 has problems when calculating widths with border width.
	 * It subtracts one px relative to the other browsers from the first column, and
	 * adds one to the end...
	 *
	 * If you want that effect I\'d suggest setting a border-top/left on th/td\'s and 
	 * then filling in the gaps with other borders.
	 */
}

table.display thead th {
	padding: 3px 18px 3px 10px;
	border-bottom: 1px solid black;
	font-weight: bold;
	cursor: pointer;
	* cursor: hand;
}

table.display tfoot th {
	padding: 3px 18px 3px 10px;
	border-top: 1px solid black;
	font-weight: bold;
}

table.display tr.heading2 td {
	border-bottom: 1px solid #aaa;
}

table.display td {
	padding: 3px 10px;
}

table.display td.center {
	text-align: center;
}



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables sorting
 */

.sorting_asc {
	background: url(\'../images/sort_asc.png\') no-repeat center right;
}

.sorting_desc {
	background: url(\'../images/sort_desc.png\') no-repeat center right;
}

.sorting {
	background: url(\'../images/sort_both.png\') no-repeat center right;
}

.sorting_asc_disabled {
	background: url(\'../images/sort_asc_disabled.png\') no-repeat center right;
}

.sorting_desc_disabled {
	background: url(\'../images/sort_desc_disabled.png\') no-repeat center right;
}
 
table.display thead th:active,
table.display thead td:active {
	outline: none;
}




/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables row classes
 */
table.display tr.odd.gradeA {
	background-color: #ddffdd;
}

table.display tr.even.gradeA {
	background-color: #eeffee;
}

table.display tr.odd.gradeC {
	background-color: #ddddff;
}

table.display tr.even.gradeC {
	background-color: #eeeeff;
}

table.display tr.odd.gradeX {
	background-color: #ffdddd;
}

table.display tr.even.gradeX {
	background-color: #ffeeee;
}

table.display tr.odd.gradeU {
	background-color: #ddd;
}

table.display tr.even.gradeU {
	background-color: #eee;
}


tr.odd {
	background-color: #E2E4FF;
}

tr.even {
	background-color: white;
}





/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Misc
 */
.dataTables_scroll {
	clear: both;
}

.dataTables_scrollBody {
	*margin-top: -1px;
	-webkit-overflow-scrolling: touch;
}

.top, .bottom {
	padding: 15px;
	background-color: #F5F5F5;
	border: 1px solid #CCCCCC;
}

.top .dataTables_info {
	float: none;
}

.clear {
	clear: both;
}

.dataTables_empty {
	text-align: center;
}

tfoot input {
	margin: 0.5em 0;
	width: 100%;
	color: #444;
}

tfoot input.search_init {
	color: #999;
}

td.group {
	background-color: #d1cfd0;
	border-bottom: 2px solid #A19B9E;
	border-top: 2px solid #A19B9E;
}

td.details {
	background-color: #d1cfd0;
	border: 2px solid #A19B9E;
}


.example_alt_pagination div.dataTables_info {
	width: 40%;
}

.paging_full_numbers {
	width: 400px;
	height: 22px;
	line-height: 22px;
}

.paging_full_numbers a:active {
	outline: none
}

.paging_full_numbers a:hover {
	text-decoration: none;
}

.paging_full_numbers a.paginate_button,
 	.paging_full_numbers a.paginate_active {
	border: 1px solid #aaa;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	padding: 2px 5px;
	margin: 0 3px;
	cursor: pointer;
	*cursor: hand;
	color: #333 !important;
}

.paging_full_numbers a.paginate_button {
	background-color: #ddd;
}

.paging_full_numbers a.paginate_button:hover {
	background-color: #ccc;
	text-decoration: none !important;
}

.paging_full_numbers a.paginate_active {
	background-color: #99B3FF;
}

table.display tr.even.row_selected td {
	background-color: #B0BED9;
}

table.display tr.odd.row_selected td {
	background-color: #9FAFD1;
}


/*
 * Sorting classes for columns
 */
/* For the standard odd/even */
tr.odd td.sorting_1 {
	background-color: #D3D6FF;
}

tr.odd td.sorting_2 {
	background-color: #DADCFF;
}

tr.odd td.sorting_3 {
	background-color: #E0E2FF;
}

tr.even td.sorting_1 {
	background-color: #EAEBFF;
}

tr.even td.sorting_2 {
	background-color: #F2F3FF;
}

tr.even td.sorting_3 {
	background-color: #F9F9FF;
}


/* For the Conditional-CSS grading rows */
/*
 	Colour calculations (based off the main row colours)
  Level 1:
		dd > c4
		ee > d5
	Level 2:
	  dd > d1
	  ee > e2
 */
tr.odd.gradeA td.sorting_1 {
	background-color: #c4ffc4;
}

tr.odd.gradeA td.sorting_2 {
	background-color: #d1ffd1;
}

tr.odd.gradeA td.sorting_3 {
	background-color: #d1ffd1;
}

tr.even.gradeA td.sorting_1 {
	background-color: #d5ffd5;
}

tr.even.gradeA td.sorting_2 {
	background-color: #e2ffe2;
}

tr.even.gradeA td.sorting_3 {
	background-color: #e2ffe2;
}

tr.odd.gradeC td.sorting_1 {
	background-color: #c4c4ff;
}

tr.odd.gradeC td.sorting_2 {
	background-color: #d1d1ff;
}

tr.odd.gradeC td.sorting_3 {
	background-color: #d1d1ff;
}

tr.even.gradeC td.sorting_1 {
	background-color: #d5d5ff;
}

tr.even.gradeC td.sorting_2 {
	background-color: #e2e2ff;
}

tr.even.gradeC td.sorting_3 {
	background-color: #e2e2ff;
}

tr.odd.gradeX td.sorting_1 {
	background-color: #ffc4c4;
}

tr.odd.gradeX td.sorting_2 {
	background-color: #ffd1d1;
}

tr.odd.gradeX td.sorting_3 {
	background-color: #ffd1d1;
}

tr.even.gradeX td.sorting_1 {
	background-color: #ffd5d5;
}

tr.even.gradeX td.sorting_2 {
	background-color: #ffe2e2;
}

tr.even.gradeX td.sorting_3 {
	background-color: #ffe2e2;
}

tr.odd.gradeU td.sorting_1 {
	background-color: #c4c4c4;
}

tr.odd.gradeU td.sorting_2 {
	background-color: #d1d1d1;
}

tr.odd.gradeU td.sorting_3 {
	background-color: #d1d1d1;
}

tr.even.gradeU td.sorting_1 {
	background-color: #d5d5d5;
}

tr.even.gradeU td.sorting_2 {
	background-color: #e2e2e2;
}

tr.even.gradeU td.sorting_3 {
	background-color: #e2e2e2;
}


/*
 * Row highlighting example
 */
.ex_highlight #example tbody tr.even:hover, #example tbody tr.even td.highlighted {
	background-color: #ECFFB3;
}

.ex_highlight #example tbody tr.odd:hover, #example tbody tr.odd td.highlighted {
	background-color: #E6FF99;
}

.ex_highlight_row #example tr.even:hover {
	background-color: #ECFFB3;
}

.ex_highlight_row #example tr.even:hover td.sorting_1 {
	background-color: #DDFF75;
}

.ex_highlight_row #example tr.even:hover td.sorting_2 {
	background-color: #E7FF9E;
}

.ex_highlight_row #example tr.even:hover td.sorting_3 {
	background-color: #E2FF89;
}

.ex_highlight_row #example tr.odd:hover {
	background-color: #E6FF99;
}

.ex_highlight_row #example tr.odd:hover td.sorting_1 {
	background-color: #D6FF5C;
}

.ex_highlight_row #example tr.odd:hover td.sorting_2 {
	background-color: #E0FF84;
}

.ex_highlight_row #example tr.odd:hover td.sorting_3 {
	background-color: #DBFF70;
}


/*
 * KeyTable
 */
table.KeyTable td {
	border: 3px solid transparent;
}

table.KeyTable td.focus {
	border: 3px solid #3366FF;
}

table.display tr.gradeA {
	background-color: #eeffee;
}

table.display tr.gradeC {
	background-color: #ddddff;
}

table.display tr.gradeX {
	background-color: #ffdddd;
}

table.display tr.gradeU {
	background-color: #ddd;
}</style>
</head>
<body>
<div class="header">    <div class="container">
        <h1 class="header-heading"><a href="http://localhost/" title="CBSi" class="logo">CBSi</a></h1>
    </div>
</div>

<div class="nav-bar">    <div class="container">
        <nav><ul><li class="first active"><a href="http://localhost/" title="Home" >Home</a></li>
<li><a href="specs/" title="Specs" class=\'linkdisable\'>Specs</a><ul><li class="first"><a href="sports/" title="Sports" class=\'linkdisable\'>Sports</a><ul><li class="first"><a href="apps/" title="Apps" class=\'linkdisable\'>Apps</a><ul><li class="first"><a href="cbs-sports-app.html" title="CBS Sports App" >CBS Sports</a></li>
<li><a href="cbssportsfantasy-app.html" title="CBS Sports Fantasy App" >CBS Sports Fantasy</a></li>
<li><a href="draftmaster-app.html" title="DraftMaster App" >DraftMaster</a></li>
<li><a href="maxpreps.html" title="MaxPreps App" >MaxPreps</a></li>
<li class="last"><a href="test-app.html" title="Test App" >Test App</a></li>
</ul></li>
<li><a href="web.html" title="Web" class=\'linkdisable\'>Web</a></li>
<li class="last"><a href="ott.html" title="OTT" class=\'linkdisable\'>OTT</a></li>
</ul></li>
</ul></li>
<li><a href="docsclasslinkdisable/" title="Docs" class=\'linkdisable\'>Docs</a><ul><li class="first"><a href="https://docs.google.com/spreadsheets/d/1pZrw5CPZixbBxDsSB7ePCecZQm7Hanyg9J3SKJyEybI/edit#gid=3222535" title="CBSi Omniture Variables 2016" target="_blank">CBSi Omniture Variables 2016</a></li>
</ul></li>
<li class="last"><a href="apis.html" title="APIs" class=\'linkdisable\'>APIs</a><ul><li class="first"><a href="googleapi.html" title="Google API" >Google API</a></li>
</ul></li>
</ul></nav>
    </div></div>

<div class="content">
    <div class="container">
        <div class="main">
            <h2>Home Page Overview</h2>
            <div class="inner-container"><h1>Welcome Home!</h1>
<p>Nothing to see here.  Click somewhere in the menu!</p></div>
        </div>
        <div class="aside">
            <h3>Quick Reference</h3>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        &copy; Copyright 2016
    </div>
</div>


<script type="text/javascript">
//Tabletop Feed


// ID of the Google Spreadsheet
 var spreadsheetID = "1vOadugEJE5vkFdFQzocACUHsreqHClNfEMUxMKZreI8";
 
 // Make sure it is public or set to Anyone with link can view 
 var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";
 
// make JSON call to Google Data API
$.getJSON(url, function(data) {

  // set global html variable
  var html = \'\';

  // build table headings
  html += \'<table cellpadding=10 cellspacing=0 border=1>\';
  html += \'<tr>\';
  html += \'<th>Node</th>\';
  html += \'<th>Project</th>\';
  html += \'<th>Channel</th>\';
  html += \'<th>Product Line</th>\';
  html += \'<th>Service Level</th>\';
  html += \'<th>Feature</th>\';
  html += \'</tr>\';
  
  // loop to build html output for each row
  var entry = data.feed.entry;
  /**
  ** Change to descending order
  ** for (var i = entry.length - 1; i >= 0; i -= 1) {
   */
  for (var i = 0; i < entry.length; i++) {
    html += \'<tr>\';
    html += \'<td>\' + entry[i][\'gsx$node\'][\'$t\'] + \'</td>\';
    html += \'<td>\' + entry[i][\'gsx$project\'][\'$t\'] + \'</td>\';
    html += \'<td>\' + entry[i][\'gsx$channel\'][\'$t\'] + \'</td>\';
    html += \'<td>\' + entry[i][\'gsx$productline\'][\'$t\'] + \'</td>\';
    html += \'<td>\' + entry[i][\'gsx$servicelevel\'][\'$t\'] + \'</td>\';
    html += \'<td>\' + entry[i][\'gsx$feature\'][\'$t\'] + \'</td>\';
    html += \'</tr>\';
  }
  html += \'</table>\';

  // output html
  $(\'#api_demo\').html(html);
});

// loading animation
var loading = $(\'.loading\');
loading.hide();
$(document)
  .ajaxStart(function() {
    loading.show();
  })
  .ajaxStop(function() {
    loading.hide();
  });
</script>

</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$mainCSS]]' => '/* -----------------------
Base styles
------------------------*/

body
{
  margin: 0;
  padding: 0;
  color: #333;
  background-color: #eee;
  font: 1em/1.2 "Helvetica Neue", Helvetica, Arial, Geneva, sans-serif;
}

h1,h2,h3,h4,h5,h6
{
  margin: 0 0 .5em;
  font-weight: 500;
  line-height: 1.1;
}

h1 { font-size: 2.25em; } /* 36px */
h2 { font-size: 1.75em; } /* 28px */
h3 { font-size: 1.375em; } /* 22px */
h4 { font-size: 1.125em; } /* 18px */
h5 { font-size: 1em; } /* 16px */
h6 { font-size: .875em; } /* 14px */

p
{
  margin: 0 0 1.5em;
  line-height: 1.5;
}

blockquote
{
  padding: 1em 2em;
  margin: 0 0 2em;
  border-left: 5px solid #eee;
}

hr
{
  height: 0;
  margin-top: 1em;
  margin-bottom: 2em;
  border: 0;
  border-top: 1px solid #ddd;
}

table
{
  background-color: transparent;
  border-spacing: 0;
  border-collapse: collapse;
  border-top: 1px solid #ddd;
}

th, td
{
  padding: .5em 1em;
  vertical-align: top;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:last-child td { border:none; }

a:link { color: royalblue; }
a:visited { color: purple; }
a:focus { color: black; }
a:hover { color: green; }
a:active { color: red; }

*:focus { outline: none; }

/* -----------------------
Layout styles
------------------------*/

.container
{
  max-width: 70em;
  margin: 0 auto;
}

.header
{
  color: #fff;
  background: #ddd;
  padding: 1em 1.25em;
}

.header-heading { margin: 0; }

.nav-bar
{
  background: #000;
  padding: 0;
}

.content
{
  overflow: hidden;
  padding: 1em 1.25em;
  background-color: #fff;
}

.main, .aside
{
  margin-bottom: 1em;
}

.footer
{
  color: #fff;
  background: #000;
  padding: 1em 1.25em;
}

.logo
{
  position:relative;
  background:url(http://static1.squarespace.com/static/55d63b3ce4b07fe20b7883de/55d6dd3ae4b0edf9e2eb3f85/55d6dd3be4b0b9bb4082f18f/1440144700110/CBS_logo-1024x282.png) center no-repeat;
  background-size:contain;
  display:block;
  text-indent:-9999px;
  margin:0 auto;
}
.logo{width:100%;height:48px}

.inner-container { border: 1px solid #ccc; padding:1em; margin:1em auto; }


/* -----------------------
Accordion Custom Styles
------------------------*/

.accordion .inner-container { margin:0 auto; }

.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {
  border:1px solid #3883c9;
  background: #3883c9;
}

.ui-icon { margin-right:8px; }

.ui-helper-reset { font-size:90%; }

/* -----------------------
Nav
------------------------*/

nav {
  margin:0 auto; 
  text-align: center;
}

nav ul ul {
  display: none;
}

nav ul li:hover > ul {
  display: block;
}


nav ul {
  background: #efefef; 
  background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
  background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
  background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
  box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
  padding: 0 20px;
  border-radius: 10px;  
  list-style: none;
  position: relative;
  display: inline-table;
}
  nav ul:after {
    content: ""; clear: both; display: block;
  }

  nav ul li {
    float: left;
  }
    nav ul li:hover {
      background: #4b545f;
      background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
      background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
      background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
    }
      nav ul li:hover a {
        color: #fff;
      }
    
    nav ul li a {
      display: block; padding: 25px 40px;
      color: #757575; text-decoration: none;
      white-space: nowrap;
    }
      
    
  nav ul ul {
    background: #5f6975; border-radius: 0px; padding: 0;
    position: absolute; top: 100%;
  }
    nav ul ul li {
      float: none; 
      border-top: 1px solid #6b727c;
      border-bottom: 1px solid #575f6a; position: relative;
    }
      nav ul ul li a {
        padding: 15px 40px;
        color: #fff;
        white-space: nowrap;
      } 
        nav ul ul li a:hover {
          background: #4b545f;
        }
    
  nav ul ul ul {
    position: absolute; left: 100%; top:0;
  }
    

/* -----------------------
Single styles
------------------------*/

.img-responsive { max-width: 100%; }

.btn
{
  color: #fff !important;
  background-color: royalblue;
  border-color: #222;
  display: inline-block;
  padding: .5em 1em;
  margin-bottom: 0;
  font-weight: 400;
  line-height: 1.2;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: .2em;
  text-decoration: none;
}

.btn:hover
{
  color: #fff !important;
  background-color: green;
}

.btn:focus
{
  color: #fff !important;
  background-color: black;
}

.btn:active
{
  color: #fff !important;
  background-color: red;
}

.table
{
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}

.list-unstyled
{
  padding-left: 0;
  list-style: none;
}

.list-inline
{
  padding-left: 0;
  margin-left: -5px;
  list-style: none;
}

.list-inline > li
{
  display: inline-block;
  padding-right: 5px;
  padding-left: 5px;
}


/* -----------------------
Wide styles
------------------------*/

@media (min-width: 55em)
{
  .header { padding: 1.5em 3em; }
  .nav-bar { padding: 0 3em; }
  .content { padding: 2em 3em; }

  .main
  {
    float: left;
    width: 65%;
    margin-right: 5%;
    margin-bottom: 1em;
  }

  .aside
  {
    float: left;
    width: 30%;
    margin-bottom: 1em;
  }
      .aside li { padding-bottom:10px; }

  .footer { padding: 2em 3em; }
  
  .nav li
  {
    display: inline;
    margin: 0 1em 0 0;
  }
  
  .nav a
  {
    display: inline;
    padding: 0;
    border-bottom: 0;
  }
}

/*----- Tabs -----*/
.tabs {
    width:100%;
    display:inline-block;
}
 
    /*----- Tab Links -----*/
    /* Clearfix */
    .tab-links {
      padding:0;
      margin:0;
    }
    .tab-links:after {
        display:block;
        clear:both;
        content:\'\';
    }
 
    .tab-links li {
        margin:0px 5px;
        float:left;
        list-style:none;
    }
 
        .tab-links a {
          padding: 9px 15px;
          display: inline-block;
          border-radius: 5px 5px 0px 0px;
          background: #3883c9;
          /* font-size: 16px; */
          font-weight: 600;
          color: #EAEAF7;
          transition: all linear .15s;
          text-decoration: none;
          border-width: 1px 1px 1px 1px;
          border-style: solid;
          border-color: #eaeaea #eaeaea #ffffff #eaeaea;
          margin-bottom: -1px;
        }
 
        .tab-links a:hover {
            background:#a7cce5;
            text-decoration:none;
        }
 
    .tabs li.active a, .tabs li.active a:hover {
        background:#fff;
        color:#393939;
    }
 
    /*----- Content of Tabs -----*/
    .tab-content {
      padding: 15px;
      border-radius: 5px;
      box-shadow: -1px 1px 1px rgba(0,0,0,.15);
      background: #fff;
      border-style: solid;
      border-width: 1px;
      border-color: #f0f0f0;
    }
 
        .tab {
            display:none;
        }
 
        .tab.active {
            display:block;
        }

/* http://prismjs.com/download.html?themes=prism-coy&languages=markup+css+clike+javascript+c+java+json+objectivec&plugins=line-highlight+line-numbers+highlight-keywords */
/**
 * prism.js Coy theme for JavaScript, CoffeeScript, CSS and HTML
 * Based on https://github.com/tshedor/workshop-wp-theme (Example: http://workshop.kansan.com/category/sessions/basics or http://workshop.timshedor.com/category/sessions/basics);
 * @author Tim  Shedor
 */

code[class*="language-"],
pre[class*="language-"] {
  color: black;
  background: none;
  font-family: Consolas, Monaco, \'Andale Mono\', \'Ubuntu Mono\', monospace;
  text-align: left;
  white-space: pre;
  word-spacing: normal;
  word-break: normal;
  word-wrap: normal;
  line-height: 1.5;

  -moz-tab-size: 4;
  -o-tab-size: 4;
  tab-size: 4;

  -webkit-hyphens: none;
  -moz-hyphens: none;
  -ms-hyphens: none;
  hyphens: none;
}

/* Code blocks */
pre[class*="language-"] {
  position: relative;
  margin: .5em 0;
  box-shadow: -1px 0px 0px 0px #358ccb, 0px 0px 0px 1px #dfdfdf;
  border-left: 10px solid #358ccb;
  background-color: #fdfdfd;
  background-image: linear-gradient(transparent 50%, rgba(69, 142, 209, 0.04) 50%);
  background-size: 3em 3em;
  background-origin: content-box;
  overflow: visible;
  padding: 0;
}

code[class*="language"] {
  max-height: inherit;
  height: 100%;
  padding: 0 1em;
  display: block;
  overflow: auto;
}

/* Margin bottom to accomodate shadow */
:not(pre) > code[class*="language-"],
pre[class*="language-"] {
  background-color: #fdfdfd;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin-bottom: 1em;
}

/* Inline code */
:not(pre) > code[class*="language-"] {
  position: relative;
  padding: .2em;
  border-radius: 0.3em;
  color: #c92c2c;
  border: 1px solid rgba(0, 0, 0, 0.1);
  display: inline;
  white-space: normal;
}

pre[class*="language-"]:before,
pre[class*="language-"]:after {
  content: \'\';
  z-index: -2;
  display: block;
  position: absolute;
  bottom: 0.75em;
  left: 0.18em;
  width: 40%;
  height: 20%;
  max-height: 13em;
  box-shadow: 0px 13px 8px #979797;
  -webkit-transform: rotate(-2deg);
  -moz-transform: rotate(-2deg);
  -ms-transform: rotate(-2deg);
  -o-transform: rotate(-2deg);
  transform: rotate(-2deg);
}

:not(pre) > code[class*="language-"]:after,
pre[class*="language-"]:after {
  right: 0.75em;
  left: auto;
  -webkit-transform: rotate(2deg);
  -moz-transform: rotate(2deg);
  -ms-transform: rotate(2deg);
  -o-transform: rotate(2deg);
  transform: rotate(2deg);
}

.token.comment,
.token.block-comment,
.token.prolog,
.token.doctype,
.token.cdata {
  color: #7D8B99;
}

.token.punctuation {
  color: #5F6364;
}

.token.property,
.token.tag,
.token.boolean,
.token.number,
.token.function-name,
.token.constant,
.token.symbol,
.token.deleted {
  color: #c92c2c;
}

.token.selector,
.token.attr-name,
.token.string,
.token.char,
.token.function,
.token.builtin,
.token.inserted {
  color: #2f9c0a;
}

.token.operator,
.token.entity,
.token.url,
.token.variable {
  color: #a67f59;
  background: rgba(255, 255, 255, 0.5);
}

.token.atrule,
.token.attr-value,
.token.keyword,
.token.class-name {
  color: #1990b8;
}

.token.regex,
.token.important {
  color: #e90;
}

.language-css .token.string,
.style .token.string {
  color: #a67f59;
  background: rgba(255, 255, 255, 0.5);
}

.token.important {
  font-weight: normal;
}

.token.bold {
  font-weight: bold;
}
.token.italic {
  font-style: italic;
}

.token.entity {
  cursor: help;
}

.namespace {
  opacity: .7;
}

@media screen and (max-width: 767px) {
  pre[class*="language-"]:before,
  pre[class*="language-"]:after {
    bottom: 14px;
    box-shadow: none;
  }

}

/* Plugin styles */
.token.tab:not(:empty):before,
.token.cr:before,
.token.lf:before {
  color: #e0d7d1;
}

/* Plugin styles: Line Numbers */
pre[class*="language-"].line-numbers {
  padding-left: 0;
}

pre[class*="language-"].line-numbers code {
  padding-left: 3.8em;
}

pre[class*="language-"].line-numbers .line-numbers-rows {
  left: 0;
}

/* Plugin styles: Line Highlight */
pre[class*="language-"][data-line] {
  padding-top: 0;
  padding-bottom: 0;
  padding-left: 0;
}
pre[data-line] code {
  position: relative;
  padding-left: 4em;
}
pre .line-highlight {
  margin-top: 0;
}

pre[data-line] {
  position: relative;
  padding: 1em 0 1em 3em;
}

.line-highlight {
  position: absolute;
  left: 0;
  right: 0;
  padding: inherit 0;
  margin-top: 1em; /* Same as .prism’s padding-top */

  background: hsla(24, 20%, 50%,.08);
  background: linear-gradient(to right, hsla(24, 20%, 50%,.1) 70%, hsla(24, 20%, 50%,0));

  pointer-events: none;

  line-height: inherit;
  white-space: pre;
}

  .line-highlight:before,
  .line-highlight[data-end]:after {
    content: attr(data-start);
    position: absolute;
    top: .4em;
    left: .6em;
    min-width: 1em;
    padding: 0 .5em;
    background-color: hsla(24, 20%, 50%,.4);
    color: hsl(24, 20%, 95%);
    font: bold 65%/1.5 sans-serif;
    text-align: center;
    vertical-align: .3em;
    border-radius: 999px;
    text-shadow: none;
    box-shadow: 0 1px white;
  }

  .line-highlight[data-end]:after {
    content: attr(data-end);
    top: auto;
    bottom: .4em;
  }

pre.line-numbers {
  position: relative;
  padding-left: 3.8em;
  counter-reset: linenumber;
}

pre.line-numbers > code {
  position: relative;
}

.line-numbers .line-numbers-rows {
  position: absolute;
  pointer-events: none;
  top: 0;
  font-size: 100%;
  left: -3.8em;
  width: 3em; /* works for line-numbers below 1000 lines */
  letter-spacing: -1px;
  border-right: 1px solid #999;

  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;

}

  .line-numbers-rows > span {
    pointer-events: none;
    display: block;
    counter-increment: linenumber;
  }

    .line-numbers-rows > span:before {
      content: counter(linenumber);
      color: #999;
      display: block;
      padding-right: 0.8em;
      text-align: right;
    }',
    '[[$mainCustomJS]]' => '<script id="app-code-template" type="text/x-handlebars-template">
    {{#each entry}}
    <div class="accordion2 {{#if this.gsx$articleid.$t}}ontology-article{{/if}} ontology-method-{{this.gsx$trackingmethod.$t}}">
        <h2>{{this.gsx$node.$t}}</h2>
        <div class="inner-container container-{{@index}}">
            <div class="tabs">
                <ul class="tab-links">
                    <li class="active"><a href="#tab-basic-{{@index}}">Basic</a></li>
                    
                    
                </ul>
                <div class="tab-content">
                    <div id="tab-basic-{{@index}}" class="tab active">
                        <pre class="line-numbers"><code class="language-json">siteCode : \'\'
sitePrimaryRsid : \'\'
siteType : \'\'
siteSection : \'{{this.gsx$sitesection.$t}}\'
siteHier : \'{{this.gsx$sitehier.$t}}\'
pageType : \'{{this.gsx$pagename.$t}}\'
screenName : \'{{this.gsx$pagename.$t}}\'{{#if this.gsx$articleid.$t}}
articleId : \'{{this.gsx$articleid.$t}}\'
articleTitle : \'{{this.gsx$articletitle.$t}}\'
articleType : \'{{this.gsx$articletype.$t}}\'
articleAuthorId : \'{{this.gsx$articleauthorid.$t}}\'
articleAuthorName : \'{{this.gsx$articleauthorname.$t}}\'{{/if}}</code></pre>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
    {{/each}}
</script>

<script type="text/javascript">
// JSON feed
var feed = "";
var url = "https://spreadsheets.google.com/feeds/list//od6/public/values?alt=json";

// Accordion Content
var icons = {
  header: "ui-icon-circle-arrow-e",
  activeHeader: "ui-icon-circle-arrow-s"
};

firetabs = function(){
    jQuery(\'.tabs .tab-links a\').on(\'click\', function(e){
        var currentAttrValue = jQuery(this).attr(\'href\');
        jQuery(\'.tabs \' + currentAttrValue).show().siblings().hide();
        jQuery(this).parent(\'li\').addClass(\'active\').siblings().removeClass(\'active\');
        e.preventDefault();
    });
};
fireaccordion = function(i){
    jQuery(i).accordion({
        active: false,
        collapsible:true,
        header:"h2",
        heightStyle:"content",
        icons: icons
    });
};
firehandlebars = function(data, template, destination){
  var theTemplateScript = jQuery(template).html();
  var theTemplate = Handlebars.compile(theTemplateScript);
  var theCompiledHtml = theTemplate(data);
  jQuery(destination).html(theCompiledHtml);
};

jQuery(function(){
    // Kill empty menu clicks
    jQuery(\'.linkdisable\').click(function(e){
        e.preventDefault();
        return false;
    });

    jQuery.getJSON(url, function(data){
        feed = data.feed;
    });

    fireaccordion(".accordion1");
    firetabs();

    jQuery(document).ajaxStart(function(){
        //console.log(\'ajaxStart\');
    }).ajaxStop(function(){
        //console.log(\'ajaxStop\');
        firehandlebars(feed, "#app-code-template", "#tab-ontology-basic");
        fireaccordion(".accordion2");
        firetabs();
        fireprism();
        jQuery(\'.ontology-article\').detach().appendTo(\'#tab-ontology-articles\');
        jQuery(\'.ontology-method-trackAction\').detach().appendTo(\'#ontology-method-trackAction\');
        jQuery("#tab-ontology-basic").sieve({ itemSelector: "h2" });
    });
});

Handlebars.registerHelper(\'trackingMethodPage\', function(trackingmethod){
    if(trackingmethod == \'trackState\'){
        return this.gsx$pagename.$t;
    } else {
        return this.gsx$trackingmethodaction.$t;        
    }
});

/*
$.getJSON(url, function(data) {
    var html = \'\';

    var entry = data.feed.entry;
    var modx_platform = "";

    html += \'<div class="accordion2">\';
    for (var i = 0; i < entry.length; i++) {
        var html_and=\'\',html_ios=\'\',html_list=\'\',page_and=\'\',page_ios=\'\',article_and=\'\',article_ios=\'\';

        var dr = {
            // Tracking Method
            trackingmethod : entry[i][\'gsx$trackingmethod\'][\'$t\'],

            // Basic pageview
            page : {
                node : entry[i][\'gsx$node\'][\'$t\'],
                pagetype : entry[i][\'gsx$pagetype\'][\'$t\'],
                pagename : entry[i][\'gsx$pagename\'][\'$t\'],
                project : entry[i][\'gsx$project\'][\'$t\'],
                channel : entry[i][\'gsx$channel\'][\'$t\'],
                productline : entry[i][\'gsx$productline\'][\'$t\'],
                servicelevel : entry[i][\'gsx$servicelevel\'][\'$t\'],
                feature : entry[i][\'gsx$feature\'][\'$t\'],
                subfeature : entry[i][\'gsx$subfeature\'][\'$t\']
            },

            // Article pageview
            article : {
                articleid : entry[i][\'gsx$articleid\'][\'$t\'],
                articletitle : entry[i][\'gsx$articletitle\'][\'$t\'],
                articletype : entry[i][\'gsx$articletype\'][\'$t\'],
                articleauthorid : entry[i][\'gsx$articleauthorid\'][\'$t\'],
                articleauthorname : entry[i][\'gsx$articleauthorname\'][\'$t\']
            }
        }
        var hiertrim = dr.page.project + \'|\' + dr.page.channel + \'|\' + dr.page.productline + \'|\' + dr.page.servicelevel + \'|\' + dr.page.feature + \'|\' + dr.page.subfeature;
        hiertrim = hiertrim.replace("||"||"|||"||"||||"||"|||||","|");

        html += \'<h2>\' +dr.page.node+ \'</h2><div class="inner-container container-\'+i+\'"><div class="tabs"><ul class="tab-links">\'+html_list+\'</ul><div class="tab-content">\'+page_ios+page_and+\'</div></div></div>\';
    }
    html += "</div>";

    $(\'.ontology-tags\').html(html);
});
*/

</script>


',
    '[[$basicHead]]' => '    <title>Home - CBSi Datacombs</title>

    <base href="[[!++site_url]]" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/colorbox.css" />
    <style type="text/css">/* -----------------------
Base styles
------------------------*/

body
{
  margin: 0;
  padding: 0;
  color: #333;
  background-color: #eee;
  font: 1em/1.2 "Helvetica Neue", Helvetica, Arial, Geneva, sans-serif;
}

h1,h2,h3,h4,h5,h6
{
  margin: 0 0 .5em;
  font-weight: 500;
  line-height: 1.1;
}

h1 { font-size: 2.25em; } /* 36px */
h2 { font-size: 1.75em; } /* 28px */
h3 { font-size: 1.375em; } /* 22px */
h4 { font-size: 1.125em; } /* 18px */
h5 { font-size: 1em; } /* 16px */
h6 { font-size: .875em; } /* 14px */

p
{
  margin: 0 0 1.5em;
  line-height: 1.5;
}

blockquote
{
  padding: 1em 2em;
  margin: 0 0 2em;
  border-left: 5px solid #eee;
}

hr
{
  height: 0;
  margin-top: 1em;
  margin-bottom: 2em;
  border: 0;
  border-top: 1px solid #ddd;
}

table
{
  background-color: transparent;
  border-spacing: 0;
  border-collapse: collapse;
  border-top: 1px solid #ddd;
}

th, td
{
  padding: .5em 1em;
  vertical-align: top;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:last-child td { border:none; }

a:link { color: royalblue; }
a:visited { color: purple; }
a:focus { color: black; }
a:hover { color: green; }
a:active { color: red; }

*:focus { outline: none; }

/* -----------------------
Layout styles
------------------------*/

.container
{
  max-width: 70em;
  margin: 0 auto;
}

.header
{
  color: #fff;
  background: #ddd;
  padding: 1em 1.25em;
}

.header-heading { margin: 0; }

.nav-bar
{
  background: #000;
  padding: 0;
}

.content
{
  overflow: hidden;
  padding: 1em 1.25em;
  background-color: #fff;
}

.main, .aside
{
  margin-bottom: 1em;
}

.footer
{
  color: #fff;
  background: #000;
  padding: 1em 1.25em;
}

.logo
{
  position:relative;
  background:url(http://static1.squarespace.com/static/55d63b3ce4b07fe20b7883de/55d6dd3ae4b0edf9e2eb3f85/55d6dd3be4b0b9bb4082f18f/1440144700110/CBS_logo-1024x282.png) center no-repeat;
  background-size:contain;
  display:block;
  text-indent:-9999px;
  margin:0 auto;
}
.logo{width:100%;height:48px}

.inner-container { border: 1px solid #ccc; padding:1em; margin:1em auto; }


/* -----------------------
Accordion Custom Styles
------------------------*/

.accordion .inner-container { margin:0 auto; }

.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {
  border:1px solid #3883c9;
  background: #3883c9;
}

.ui-icon { margin-right:8px; }

.ui-helper-reset { font-size:90%; }

/* -----------------------
Nav
------------------------*/

nav {
  margin:0 auto; 
  text-align: center;
}

nav ul ul {
  display: none;
}

nav ul li:hover > ul {
  display: block;
}


nav ul {
  background: #efefef; 
  background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
  background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
  background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
  box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
  padding: 0 20px;
  border-radius: 10px;  
  list-style: none;
  position: relative;
  display: inline-table;
}
  nav ul:after {
    content: ""; clear: both; display: block;
  }

  nav ul li {
    float: left;
  }
    nav ul li:hover {
      background: #4b545f;
      background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
      background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
      background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
    }
      nav ul li:hover a {
        color: #fff;
      }
    
    nav ul li a {
      display: block; padding: 25px 40px;
      color: #757575; text-decoration: none;
      white-space: nowrap;
    }
      
    
  nav ul ul {
    background: #5f6975; border-radius: 0px; padding: 0;
    position: absolute; top: 100%;
  }
    nav ul ul li {
      float: none; 
      border-top: 1px solid #6b727c;
      border-bottom: 1px solid #575f6a; position: relative;
    }
      nav ul ul li a {
        padding: 15px 40px;
        color: #fff;
        white-space: nowrap;
      } 
        nav ul ul li a:hover {
          background: #4b545f;
        }
    
  nav ul ul ul {
    position: absolute; left: 100%; top:0;
  }
    

/* -----------------------
Single styles
------------------------*/

.img-responsive { max-width: 100%; }

.btn
{
  color: #fff !important;
  background-color: royalblue;
  border-color: #222;
  display: inline-block;
  padding: .5em 1em;
  margin-bottom: 0;
  font-weight: 400;
  line-height: 1.2;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: .2em;
  text-decoration: none;
}

.btn:hover
{
  color: #fff !important;
  background-color: green;
}

.btn:focus
{
  color: #fff !important;
  background-color: black;
}

.btn:active
{
  color: #fff !important;
  background-color: red;
}

.table
{
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}

.list-unstyled
{
  padding-left: 0;
  list-style: none;
}

.list-inline
{
  padding-left: 0;
  margin-left: -5px;
  list-style: none;
}

.list-inline > li
{
  display: inline-block;
  padding-right: 5px;
  padding-left: 5px;
}


/* -----------------------
Wide styles
------------------------*/

@media (min-width: 55em)
{
  .header { padding: 1.5em 3em; }
  .nav-bar { padding: 0 3em; }
  .content { padding: 2em 3em; }

  .main
  {
    float: left;
    width: 65%;
    margin-right: 5%;
    margin-bottom: 1em;
  }

  .aside
  {
    float: left;
    width: 30%;
    margin-bottom: 1em;
  }
      .aside li { padding-bottom:10px; }

  .footer { padding: 2em 3em; }
  
  .nav li
  {
    display: inline;
    margin: 0 1em 0 0;
  }
  
  .nav a
  {
    display: inline;
    padding: 0;
    border-bottom: 0;
  }
}

/*----- Tabs -----*/
.tabs {
    width:100%;
    display:inline-block;
}
 
    /*----- Tab Links -----*/
    /* Clearfix */
    .tab-links {
      padding:0;
      margin:0;
    }
    .tab-links:after {
        display:block;
        clear:both;
        content:\'\';
    }
 
    .tab-links li {
        margin:0px 5px;
        float:left;
        list-style:none;
    }
 
        .tab-links a {
          padding: 9px 15px;
          display: inline-block;
          border-radius: 5px 5px 0px 0px;
          background: #3883c9;
          /* font-size: 16px; */
          font-weight: 600;
          color: #EAEAF7;
          transition: all linear .15s;
          text-decoration: none;
          border-width: 1px 1px 1px 1px;
          border-style: solid;
          border-color: #eaeaea #eaeaea #ffffff #eaeaea;
          margin-bottom: -1px;
        }
 
        .tab-links a:hover {
            background:#a7cce5;
            text-decoration:none;
        }
 
    .tabs li.active a, .tabs li.active a:hover {
        background:#fff;
        color:#393939;
    }
 
    /*----- Content of Tabs -----*/
    .tab-content {
      padding: 15px;
      border-radius: 5px;
      box-shadow: -1px 1px 1px rgba(0,0,0,.15);
      background: #fff;
      border-style: solid;
      border-width: 1px;
      border-color: #f0f0f0;
    }
 
        .tab {
            display:none;
        }
 
        .tab.active {
            display:block;
        }

/* http://prismjs.com/download.html?themes=prism-coy&languages=markup+css+clike+javascript+c+java+json+objectivec&plugins=line-highlight+line-numbers+highlight-keywords */
/**
 * prism.js Coy theme for JavaScript, CoffeeScript, CSS and HTML
 * Based on https://github.com/tshedor/workshop-wp-theme (Example: http://workshop.kansan.com/category/sessions/basics or http://workshop.timshedor.com/category/sessions/basics);
 * @author Tim  Shedor
 */

code[class*="language-"],
pre[class*="language-"] {
  color: black;
  background: none;
  font-family: Consolas, Monaco, \'Andale Mono\', \'Ubuntu Mono\', monospace;
  text-align: left;
  white-space: pre;
  word-spacing: normal;
  word-break: normal;
  word-wrap: normal;
  line-height: 1.5;

  -moz-tab-size: 4;
  -o-tab-size: 4;
  tab-size: 4;

  -webkit-hyphens: none;
  -moz-hyphens: none;
  -ms-hyphens: none;
  hyphens: none;
}

/* Code blocks */
pre[class*="language-"] {
  position: relative;
  margin: .5em 0;
  box-shadow: -1px 0px 0px 0px #358ccb, 0px 0px 0px 1px #dfdfdf;
  border-left: 10px solid #358ccb;
  background-color: #fdfdfd;
  background-image: linear-gradient(transparent 50%, rgba(69, 142, 209, 0.04) 50%);
  background-size: 3em 3em;
  background-origin: content-box;
  overflow: visible;
  padding: 0;
}

code[class*="language"] {
  max-height: inherit;
  height: 100%;
  padding: 0 1em;
  display: block;
  overflow: auto;
}

/* Margin bottom to accomodate shadow */
:not(pre) > code[class*="language-"],
pre[class*="language-"] {
  background-color: #fdfdfd;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin-bottom: 1em;
}

/* Inline code */
:not(pre) > code[class*="language-"] {
  position: relative;
  padding: .2em;
  border-radius: 0.3em;
  color: #c92c2c;
  border: 1px solid rgba(0, 0, 0, 0.1);
  display: inline;
  white-space: normal;
}

pre[class*="language-"]:before,
pre[class*="language-"]:after {
  content: \'\';
  z-index: -2;
  display: block;
  position: absolute;
  bottom: 0.75em;
  left: 0.18em;
  width: 40%;
  height: 20%;
  max-height: 13em;
  box-shadow: 0px 13px 8px #979797;
  -webkit-transform: rotate(-2deg);
  -moz-transform: rotate(-2deg);
  -ms-transform: rotate(-2deg);
  -o-transform: rotate(-2deg);
  transform: rotate(-2deg);
}

:not(pre) > code[class*="language-"]:after,
pre[class*="language-"]:after {
  right: 0.75em;
  left: auto;
  -webkit-transform: rotate(2deg);
  -moz-transform: rotate(2deg);
  -ms-transform: rotate(2deg);
  -o-transform: rotate(2deg);
  transform: rotate(2deg);
}

.token.comment,
.token.block-comment,
.token.prolog,
.token.doctype,
.token.cdata {
  color: #7D8B99;
}

.token.punctuation {
  color: #5F6364;
}

.token.property,
.token.tag,
.token.boolean,
.token.number,
.token.function-name,
.token.constant,
.token.symbol,
.token.deleted {
  color: #c92c2c;
}

.token.selector,
.token.attr-name,
.token.string,
.token.char,
.token.function,
.token.builtin,
.token.inserted {
  color: #2f9c0a;
}

.token.operator,
.token.entity,
.token.url,
.token.variable {
  color: #a67f59;
  background: rgba(255, 255, 255, 0.5);
}

.token.atrule,
.token.attr-value,
.token.keyword,
.token.class-name {
  color: #1990b8;
}

.token.regex,
.token.important {
  color: #e90;
}

.language-css .token.string,
.style .token.string {
  color: #a67f59;
  background: rgba(255, 255, 255, 0.5);
}

.token.important {
  font-weight: normal;
}

.token.bold {
  font-weight: bold;
}
.token.italic {
  font-style: italic;
}

.token.entity {
  cursor: help;
}

.namespace {
  opacity: .7;
}

@media screen and (max-width: 767px) {
  pre[class*="language-"]:before,
  pre[class*="language-"]:after {
    bottom: 14px;
    box-shadow: none;
  }

}

/* Plugin styles */
.token.tab:not(:empty):before,
.token.cr:before,
.token.lf:before {
  color: #e0d7d1;
}

/* Plugin styles: Line Numbers */
pre[class*="language-"].line-numbers {
  padding-left: 0;
}

pre[class*="language-"].line-numbers code {
  padding-left: 3.8em;
}

pre[class*="language-"].line-numbers .line-numbers-rows {
  left: 0;
}

/* Plugin styles: Line Highlight */
pre[class*="language-"][data-line] {
  padding-top: 0;
  padding-bottom: 0;
  padding-left: 0;
}
pre[data-line] code {
  position: relative;
  padding-left: 4em;
}
pre .line-highlight {
  margin-top: 0;
}

pre[data-line] {
  position: relative;
  padding: 1em 0 1em 3em;
}

.line-highlight {
  position: absolute;
  left: 0;
  right: 0;
  padding: inherit 0;
  margin-top: 1em; /* Same as .prism’s padding-top */

  background: hsla(24, 20%, 50%,.08);
  background: linear-gradient(to right, hsla(24, 20%, 50%,.1) 70%, hsla(24, 20%, 50%,0));

  pointer-events: none;

  line-height: inherit;
  white-space: pre;
}

  .line-highlight:before,
  .line-highlight[data-end]:after {
    content: attr(data-start);
    position: absolute;
    top: .4em;
    left: .6em;
    min-width: 1em;
    padding: 0 .5em;
    background-color: hsla(24, 20%, 50%,.4);
    color: hsl(24, 20%, 95%);
    font: bold 65%/1.5 sans-serif;
    text-align: center;
    vertical-align: .3em;
    border-radius: 999px;
    text-shadow: none;
    box-shadow: 0 1px white;
  }

  .line-highlight[data-end]:after {
    content: attr(data-end);
    top: auto;
    bottom: .4em;
  }

pre.line-numbers {
  position: relative;
  padding-left: 3.8em;
  counter-reset: linenumber;
}

pre.line-numbers > code {
  position: relative;
}

.line-numbers .line-numbers-rows {
  position: absolute;
  pointer-events: none;
  top: 0;
  font-size: 100%;
  left: -3.8em;
  width: 3em; /* works for line-numbers below 1000 lines */
  letter-spacing: -1px;
  border-right: 1px solid #999;

  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;

}

  .line-numbers-rows > span {
    pointer-events: none;
    display: block;
    counter-increment: linenumber;
  }

    .line-numbers-rows > span:before {
      content: counter(linenumber);
      color: #999;
      display: block;
      padding-right: 0.8em;
      text-align: right;
    }</style>

    <script src="//code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/colorbox.js"></script>
    <script src="assets/js/handlebars.js"></script>
    <script src="assets/js/prism.js"></script>
    <script id="app-code-template" type="text/x-handlebars-template">
    {{#each entry}}
    <div class="accordion2 {{#if this.gsx$articleid.$t}}ontology-article{{/if}} ontology-method-{{this.gsx$trackingmethod.$t}}">
        <h2>{{this.gsx$node.$t}}</h2>
        <div class="inner-container container-{{@index}}">
            <div class="tabs">
                <ul class="tab-links">
                    <li class="active"><a href="#tab-basic-{{@index}}">Basic</a></li>
                    
                    
                </ul>
                <div class="tab-content">
                    <div id="tab-basic-{{@index}}" class="tab active">
                        <pre class="line-numbers"><code class="language-json">siteCode : \'\'
sitePrimaryRsid : \'\'
siteType : \'\'
siteSection : \'{{this.gsx$sitesection.$t}}\'
siteHier : \'{{this.gsx$sitehier.$t}}\'
pageType : \'{{this.gsx$pagename.$t}}\'
screenName : \'{{this.gsx$pagename.$t}}\'{{#if this.gsx$articleid.$t}}
articleId : \'{{this.gsx$articleid.$t}}\'
articleTitle : \'{{this.gsx$articletitle.$t}}\'
articleType : \'{{this.gsx$articletype.$t}}\'
articleAuthorId : \'{{this.gsx$articleauthorid.$t}}\'
articleAuthorName : \'{{this.gsx$articleauthorname.$t}}\'{{/if}}</code></pre>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
    {{/each}}
</script>

<script type="text/javascript">
// JSON feed
var feed = "";
var url = "https://spreadsheets.google.com/feeds/list//od6/public/values?alt=json";

// Accordion Content
var icons = {
  header: "ui-icon-circle-arrow-e",
  activeHeader: "ui-icon-circle-arrow-s"
};

firetabs = function(){
    jQuery(\'.tabs .tab-links a\').on(\'click\', function(e){
        var currentAttrValue = jQuery(this).attr(\'href\');
        jQuery(\'.tabs \' + currentAttrValue).show().siblings().hide();
        jQuery(this).parent(\'li\').addClass(\'active\').siblings().removeClass(\'active\');
        e.preventDefault();
    });
};
fireaccordion = function(i){
    jQuery(i).accordion({
        active: false,
        collapsible:true,
        header:"h2",
        heightStyle:"content",
        icons: icons
    });
};
firehandlebars = function(data, template, destination){
  var theTemplateScript = jQuery(template).html();
  var theTemplate = Handlebars.compile(theTemplateScript);
  var theCompiledHtml = theTemplate(data);
  jQuery(destination).html(theCompiledHtml);
};

jQuery(function(){
    // Kill empty menu clicks
    jQuery(\'.linkdisable\').click(function(e){
        e.preventDefault();
        return false;
    });

    jQuery.getJSON(url, function(data){
        feed = data.feed;
    });

    fireaccordion(".accordion1");
    firetabs();

    jQuery(document).ajaxStart(function(){
        //console.log(\'ajaxStart\');
    }).ajaxStop(function(){
        //console.log(\'ajaxStop\');
        firehandlebars(feed, "#app-code-template", "#tab-ontology-basic");
        fireaccordion(".accordion2");
        firetabs();
        fireprism();
        jQuery(\'.ontology-article\').detach().appendTo(\'#tab-ontology-articles\');
        jQuery(\'.ontology-method-trackAction\').detach().appendTo(\'#ontology-method-trackAction\');
        jQuery("#tab-ontology-basic").sieve({ itemSelector: "h2" });
    });
});

Handlebars.registerHelper(\'trackingMethodPage\', function(trackingmethod){
    if(trackingmethod == \'trackState\'){
        return this.gsx$pagename.$t;
    } else {
        return this.gsx$trackingmethodaction.$t;        
    }
});

/*
$.getJSON(url, function(data) {
    var html = \'\';

    var entry = data.feed.entry;
    var modx_platform = "";

    html += \'<div class="accordion2">\';
    for (var i = 0; i < entry.length; i++) {
        var html_and=\'\',html_ios=\'\',html_list=\'\',page_and=\'\',page_ios=\'\',article_and=\'\',article_ios=\'\';

        var dr = {
            // Tracking Method
            trackingmethod : entry[i][\'gsx$trackingmethod\'][\'$t\'],

            // Basic pageview
            page : {
                node : entry[i][\'gsx$node\'][\'$t\'],
                pagetype : entry[i][\'gsx$pagetype\'][\'$t\'],
                pagename : entry[i][\'gsx$pagename\'][\'$t\'],
                project : entry[i][\'gsx$project\'][\'$t\'],
                channel : entry[i][\'gsx$channel\'][\'$t\'],
                productline : entry[i][\'gsx$productline\'][\'$t\'],
                servicelevel : entry[i][\'gsx$servicelevel\'][\'$t\'],
                feature : entry[i][\'gsx$feature\'][\'$t\'],
                subfeature : entry[i][\'gsx$subfeature\'][\'$t\']
            },

            // Article pageview
            article : {
                articleid : entry[i][\'gsx$articleid\'][\'$t\'],
                articletitle : entry[i][\'gsx$articletitle\'][\'$t\'],
                articletype : entry[i][\'gsx$articletype\'][\'$t\'],
                articleauthorid : entry[i][\'gsx$articleauthorid\'][\'$t\'],
                articleauthorname : entry[i][\'gsx$articleauthorname\'][\'$t\']
            }
        }
        var hiertrim = dr.page.project + \'|\' + dr.page.channel + \'|\' + dr.page.productline + \'|\' + dr.page.servicelevel + \'|\' + dr.page.feature + \'|\' + dr.page.subfeature;
        hiertrim = hiertrim.replace("||"||"|||"||"||||"||"|||||","|");

        html += \'<h2>\' +dr.page.node+ \'</h2><div class="inner-container container-\'+i+\'"><div class="tabs"><ul class="tab-links">\'+html_list+\'</ul><div class="tab-content">\'+page_ios+page_and+\'</div></div></div>\';
    }
    html += "</div>";

    $(\'.ontology-tags\').html(html);
});
*/

</script>



    
',
    '[[$googleAPIjs]]' => '      // Your Client ID can be retrieved from your project in the Google
      // Developer Console, https://console.developers.google.com
      var CLIENT_ID = \'1037189624436-sqim1lqho0t3i91554tgkhppc1hoi9ft.apps.googleusercontent.com\';
      var SCOPES = ["https://www.googleapis.com/auth/spreadsheets.readonly"];

      /**
       * Check if current user has authorized this application.
       */
      function checkAuth() {
        gapi.auth.authorize(
          {
            \'client_id\': CLIENT_ID,
            \'scope\': SCOPES.join(\' \'),
            \'immediate\': true
          }, handleAuthResult);
      }

      /**
       * Handle response from authorization server.
       *
       * @param {Object} authResult Authorization result.
       */
      function handleAuthResult(authResult) {
        var authorizeDiv = document.getElementById(\'authorize-div\');
        if (authResult && !authResult.error) {
          // Hide auth UI, then load client library.
          authorizeDiv.style.display = \'none\';
          loadSheetsApi();
        } else {
          // Show auth UI, allowing the user to initiate authorization by
          // clicking authorize button.
          authorizeDiv.style.display = \'inline\';
        }
      }

      /**
       * Initiate auth flow in response to user clicking authorize button.
       *
       * @param {Event} event Button click event.
       */
      function handleAuthClick(event) {
        gapi.auth.authorize(
          {client_id: CLIENT_ID, scope: SCOPES, immediate: false},
          handleAuthResult);
        return false;
      }

      /**
       * Load Sheets API client library.
       */
      function loadSheetsApi() {
        var discoveryUrl = \'https://sheets.googleapis.com/$discovery/rest?version=v4\';
        gapi.client.load(discoveryUrl).then(listMajors);
      }

      /**
       * Print the names and majors of students in a sample spreadsheet:
       * https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
       */
      function listMajors() {
        gapi.client.sheets.spreadsheets.values.get({
          spreadsheetId: \'1HIb5ElOwYoDAglociumlPD7kUyiii8at_ZQI_NTmx7g\',
          range: \'QA!A:E\',
        }).then(function(response) {
            var table = $(\'<table></table>\').addClass(\'newDataTable cell-border\');
            var tablehead = $(\'<thead></thead>\');
            var tablebody = $(\'<tbody></tbody>\');
            var tablefoot = $(\'<tfoot></tfoot>\');
            var tablerow = $(\'<tr></tr>\');

            table.append(tablehead, tablebody, tablefoot);

            $(\'#output\').append(table);
          
            var range = response.result;
            var columnCount = range.values[0].length;
          
            if (range.values.length > 0) {
                for (var i = 0; i < columnCount; i++) {
                    tablehead.append(\'<th>\' + range.values[0][i] + \'</th>\');
                    tablefoot.append(\'<th>\' + range.values[0][i] + \'</th>\');
                }

                for (i = 1; i < range.values.length; i++) {
                    var thisrow = tablebody.append(tablerow);
                    for (j = 0; j < range.values[i].length; j++) {
                        thisrow.append(\'<td>\' + range.values[i][j] + \'</td>\')
                    }
                }

            } else {
                appendPre(\'No data found.\');
            }
            table.DataTable({"ordering": false});
        }, function(response) {
          appendPre(\'Error: \' + response.result.error.message);
        });
      }

      /**
       * Append a pre element to the body containing the given message
       * as its text node.
       *
       * @param {string} message Text to be placed in pre element.
       */
      function appendPre(message) {
        var pre = document.getElementById(\'output\');
        var textContent = document.createTextNode(message + \'\\n\');
        pre.appendChild(textContent);
      }
',
    '[[$googleAPIcss]]' => '/*
 *  File:         demo_table.css
 *  CVS:          $Id$
 *  Description:  CSS descriptions for DataTables demo pages
 *  Author:       Allan Jardine
 *  Created:      Tue May 12 06:47:22 BST 2009
 *  Modified:     $Date$ by $Author$
 *  Language:     CSS
 *  Project:      DataTables
 *
 *  Copyright 2009 Allan Jardine. All Rights Reserved.
 *
 * ***************************************************************************
 * DESCRIPTION
 *
 * The styles given here are suitable for the demos that are used with the standard DataTables
 * distribution (see www.datatables.net). You will most likely wish to modify these styles to
 * meet the layout requirements of your site.
 *
 * Common issues:
 *   \'full_numbers\' pagination - I use an extra selector on the body tag to ensure that there is
 *     no conflict between the two pagination types. If you want to use full_numbers pagination
 *     ensure that you either have "example_alt_pagination" as a body class name, or better yet,
 *     modify that selector.
 *   Note that the path used for Images is relative. All images are by default located in
 *     ../images/ - relative to this CSS file.
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables features
 */

.dataTables_wrapper {
	position: relative;
	clear: both;
	zoom: 1; /* Feeling sorry for IE */
}

.dataTables_processing {
	position: absolute;
	top: 50%;
	left: 50%;
	width: 250px;
	height: 30px;
	margin-left: -125px;
	margin-top: -15px;
	padding: 14px 0 2px 0;
	border: 1px solid #ddd;
	text-align: center;
	color: #999;
	font-size: 14px;
	background-color: white;
}

.dataTables_length {
	width: 40%;
	float: left;
}

.dataTables_filter {
	width: 50%;
	float: right;
	text-align: right;
}

.dataTables_info {
	width: 60%;
	float: left;
}

.dataTables_paginate {
	float: right;
	text-align: right;
}

/* Pagination nested */
.paginate_disabled_previous, .paginate_enabled_previous,
.paginate_disabled_next, .paginate_enabled_next {
	height: 19px;
	float: left;
	cursor: pointer;
	*cursor: hand;
	color: #111 !important;
}
.paginate_disabled_previous:hover, .paginate_enabled_previous:hover,
.paginate_disabled_next:hover, .paginate_enabled_next:hover {
	text-decoration: none !important;
}
.paginate_disabled_previous:active, .paginate_enabled_previous:active,
.paginate_disabled_next:active, .paginate_enabled_next:active {
	outline: none;
}

.paginate_disabled_previous,
.paginate_disabled_next {
	color: #666 !important;
}
.paginate_disabled_previous, .paginate_enabled_previous {
	padding-left: 23px;
}
.paginate_disabled_next, .paginate_enabled_next {
	padding-right: 23px;
	margin-left: 10px;
}

.paginate_disabled_previous {
	background: url(\'../images/back_disabled.png\') no-repeat top left;
}

.paginate_enabled_previous {
	background: url(\'../images/back_enabled.png\') no-repeat top left;
}
.paginate_enabled_previous:hover {
	background: url(\'../images/back_enabled_hover.png\') no-repeat top left;
}

.paginate_disabled_next {
	background: url(\'../images/forward_disabled.png\') no-repeat top right;
}

.paginate_enabled_next {
	background: url(\'../images/forward_enabled.png\') no-repeat top right;
}
.paginate_enabled_next:hover {
	background: url(\'../images/forward_enabled_hover.png\') no-repeat top right;
}



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables display
 */
table.display {
	margin: 0 auto;
	clear: both;
	width: 100%;
	
	/* Note Firefox 3.5 and before have a bug with border-collapse
	 * ( https://bugzilla.mozilla.org/show%5Fbug.cgi?id=155955 ) 
	 * border-spacing: 0; is one possible option. Conditional-css.com is
	 * useful for this kind of thing
	 *
	 * Further note IE 6/7 has problems when calculating widths with border width.
	 * It subtracts one px relative to the other browsers from the first column, and
	 * adds one to the end...
	 *
	 * If you want that effect I\'d suggest setting a border-top/left on th/td\'s and 
	 * then filling in the gaps with other borders.
	 */
}

table.display thead th {
	padding: 3px 18px 3px 10px;
	border-bottom: 1px solid black;
	font-weight: bold;
	cursor: pointer;
	* cursor: hand;
}

table.display tfoot th {
	padding: 3px 18px 3px 10px;
	border-top: 1px solid black;
	font-weight: bold;
}

table.display tr.heading2 td {
	border-bottom: 1px solid #aaa;
}

table.display td {
	padding: 3px 10px;
}

table.display td.center {
	text-align: center;
}



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables sorting
 */

.sorting_asc {
	background: url(\'../images/sort_asc.png\') no-repeat center right;
}

.sorting_desc {
	background: url(\'../images/sort_desc.png\') no-repeat center right;
}

.sorting {
	background: url(\'../images/sort_both.png\') no-repeat center right;
}

.sorting_asc_disabled {
	background: url(\'../images/sort_asc_disabled.png\') no-repeat center right;
}

.sorting_desc_disabled {
	background: url(\'../images/sort_desc_disabled.png\') no-repeat center right;
}
 
table.display thead th:active,
table.display thead td:active {
	outline: none;
}




/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables row classes
 */
table.display tr.odd.gradeA {
	background-color: #ddffdd;
}

table.display tr.even.gradeA {
	background-color: #eeffee;
}

table.display tr.odd.gradeC {
	background-color: #ddddff;
}

table.display tr.even.gradeC {
	background-color: #eeeeff;
}

table.display tr.odd.gradeX {
	background-color: #ffdddd;
}

table.display tr.even.gradeX {
	background-color: #ffeeee;
}

table.display tr.odd.gradeU {
	background-color: #ddd;
}

table.display tr.even.gradeU {
	background-color: #eee;
}


tr.odd {
	background-color: #E2E4FF;
}

tr.even {
	background-color: white;
}





/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Misc
 */
.dataTables_scroll {
	clear: both;
}

.dataTables_scrollBody {
	*margin-top: -1px;
	-webkit-overflow-scrolling: touch;
}

.top, .bottom {
	padding: 15px;
	background-color: #F5F5F5;
	border: 1px solid #CCCCCC;
}

.top .dataTables_info {
	float: none;
}

.clear {
	clear: both;
}

.dataTables_empty {
	text-align: center;
}

tfoot input {
	margin: 0.5em 0;
	width: 100%;
	color: #444;
}

tfoot input.search_init {
	color: #999;
}

td.group {
	background-color: #d1cfd0;
	border-bottom: 2px solid #A19B9E;
	border-top: 2px solid #A19B9E;
}

td.details {
	background-color: #d1cfd0;
	border: 2px solid #A19B9E;
}


.example_alt_pagination div.dataTables_info {
	width: 40%;
}

.paging_full_numbers {
	width: 400px;
	height: 22px;
	line-height: 22px;
}

.paging_full_numbers a:active {
	outline: none
}

.paging_full_numbers a:hover {
	text-decoration: none;
}

.paging_full_numbers a.paginate_button,
 	.paging_full_numbers a.paginate_active {
	border: 1px solid #aaa;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	padding: 2px 5px;
	margin: 0 3px;
	cursor: pointer;
	*cursor: hand;
	color: #333 !important;
}

.paging_full_numbers a.paginate_button {
	background-color: #ddd;
}

.paging_full_numbers a.paginate_button:hover {
	background-color: #ccc;
	text-decoration: none !important;
}

.paging_full_numbers a.paginate_active {
	background-color: #99B3FF;
}

table.display tr.even.row_selected td {
	background-color: #B0BED9;
}

table.display tr.odd.row_selected td {
	background-color: #9FAFD1;
}


/*
 * Sorting classes for columns
 */
/* For the standard odd/even */
tr.odd td.sorting_1 {
	background-color: #D3D6FF;
}

tr.odd td.sorting_2 {
	background-color: #DADCFF;
}

tr.odd td.sorting_3 {
	background-color: #E0E2FF;
}

tr.even td.sorting_1 {
	background-color: #EAEBFF;
}

tr.even td.sorting_2 {
	background-color: #F2F3FF;
}

tr.even td.sorting_3 {
	background-color: #F9F9FF;
}


/* For the Conditional-CSS grading rows */
/*
 	Colour calculations (based off the main row colours)
  Level 1:
		dd > c4
		ee > d5
	Level 2:
	  dd > d1
	  ee > e2
 */
tr.odd.gradeA td.sorting_1 {
	background-color: #c4ffc4;
}

tr.odd.gradeA td.sorting_2 {
	background-color: #d1ffd1;
}

tr.odd.gradeA td.sorting_3 {
	background-color: #d1ffd1;
}

tr.even.gradeA td.sorting_1 {
	background-color: #d5ffd5;
}

tr.even.gradeA td.sorting_2 {
	background-color: #e2ffe2;
}

tr.even.gradeA td.sorting_3 {
	background-color: #e2ffe2;
}

tr.odd.gradeC td.sorting_1 {
	background-color: #c4c4ff;
}

tr.odd.gradeC td.sorting_2 {
	background-color: #d1d1ff;
}

tr.odd.gradeC td.sorting_3 {
	background-color: #d1d1ff;
}

tr.even.gradeC td.sorting_1 {
	background-color: #d5d5ff;
}

tr.even.gradeC td.sorting_2 {
	background-color: #e2e2ff;
}

tr.even.gradeC td.sorting_3 {
	background-color: #e2e2ff;
}

tr.odd.gradeX td.sorting_1 {
	background-color: #ffc4c4;
}

tr.odd.gradeX td.sorting_2 {
	background-color: #ffd1d1;
}

tr.odd.gradeX td.sorting_3 {
	background-color: #ffd1d1;
}

tr.even.gradeX td.sorting_1 {
	background-color: #ffd5d5;
}

tr.even.gradeX td.sorting_2 {
	background-color: #ffe2e2;
}

tr.even.gradeX td.sorting_3 {
	background-color: #ffe2e2;
}

tr.odd.gradeU td.sorting_1 {
	background-color: #c4c4c4;
}

tr.odd.gradeU td.sorting_2 {
	background-color: #d1d1d1;
}

tr.odd.gradeU td.sorting_3 {
	background-color: #d1d1d1;
}

tr.even.gradeU td.sorting_1 {
	background-color: #d5d5d5;
}

tr.even.gradeU td.sorting_2 {
	background-color: #e2e2e2;
}

tr.even.gradeU td.sorting_3 {
	background-color: #e2e2e2;
}


/*
 * Row highlighting example
 */
.ex_highlight #example tbody tr.even:hover, #example tbody tr.even td.highlighted {
	background-color: #ECFFB3;
}

.ex_highlight #example tbody tr.odd:hover, #example tbody tr.odd td.highlighted {
	background-color: #E6FF99;
}

.ex_highlight_row #example tr.even:hover {
	background-color: #ECFFB3;
}

.ex_highlight_row #example tr.even:hover td.sorting_1 {
	background-color: #DDFF75;
}

.ex_highlight_row #example tr.even:hover td.sorting_2 {
	background-color: #E7FF9E;
}

.ex_highlight_row #example tr.even:hover td.sorting_3 {
	background-color: #E2FF89;
}

.ex_highlight_row #example tr.odd:hover {
	background-color: #E6FF99;
}

.ex_highlight_row #example tr.odd:hover td.sorting_1 {
	background-color: #D6FF5C;
}

.ex_highlight_row #example tr.odd:hover td.sorting_2 {
	background-color: #E0FF84;
}

.ex_highlight_row #example tr.odd:hover td.sorting_3 {
	background-color: #DBFF70;
}


/*
 * KeyTable
 */
table.KeyTable td {
	border: 3px solid transparent;
}

table.KeyTable td.focus {
	border: 3px solid #3366FF;
}

table.display tr.gradeA {
	background-color: #eeffee;
}

table.display tr.gradeC {
	background-color: #ddddff;
}

table.display tr.gradeX {
	background-color: #ffdddd;
}

table.display tr.gradeU {
	background-color: #ddd;
}',
    '[[$googleAPIhead]]' => '    <!-- <script type="text/javascript">      // Your Client ID can be retrieved from your project in the Google
      // Developer Console, https://console.developers.google.com
      var CLIENT_ID = \'1037189624436-sqim1lqho0t3i91554tgkhppc1hoi9ft.apps.googleusercontent.com\';
      var SCOPES = ["https://www.googleapis.com/auth/spreadsheets.readonly"];

      /**
       * Check if current user has authorized this application.
       */
      function checkAuth() {
        gapi.auth.authorize(
          {
            \'client_id\': CLIENT_ID,
            \'scope\': SCOPES.join(\' \'),
            \'immediate\': true
          }, handleAuthResult);
      }

      /**
       * Handle response from authorization server.
       *
       * @param {Object} authResult Authorization result.
       */
      function handleAuthResult(authResult) {
        var authorizeDiv = document.getElementById(\'authorize-div\');
        if (authResult && !authResult.error) {
          // Hide auth UI, then load client library.
          authorizeDiv.style.display = \'none\';
          loadSheetsApi();
        } else {
          // Show auth UI, allowing the user to initiate authorization by
          // clicking authorize button.
          authorizeDiv.style.display = \'inline\';
        }
      }

      /**
       * Initiate auth flow in response to user clicking authorize button.
       *
       * @param {Event} event Button click event.
       */
      function handleAuthClick(event) {
        gapi.auth.authorize(
          {client_id: CLIENT_ID, scope: SCOPES, immediate: false},
          handleAuthResult);
        return false;
      }

      /**
       * Load Sheets API client library.
       */
      function loadSheetsApi() {
        var discoveryUrl = \'https://sheets.googleapis.com/$discovery/rest?version=v4\';
        gapi.client.load(discoveryUrl).then(listMajors);
      }

      /**
       * Print the names and majors of students in a sample spreadsheet:
       * https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
       */
      function listMajors() {
        gapi.client.sheets.spreadsheets.values.get({
          spreadsheetId: \'1HIb5ElOwYoDAglociumlPD7kUyiii8at_ZQI_NTmx7g\',
          range: \'QA!A:E\',
        }).then(function(response) {
            var table = $(\'<table></table>\').addClass(\'newDataTable cell-border\');
            var tablehead = $(\'<thead></thead>\');
            var tablebody = $(\'<tbody></tbody>\');
            var tablefoot = $(\'<tfoot></tfoot>\');
            var tablerow = $(\'<tr></tr>\');

            table.append(tablehead, tablebody, tablefoot);

            $(\'#output\').append(table);
          
            var range = response.result;
            var columnCount = range.values[0].length;
          
            if (range.values.length > 0) {
                for (var i = 0; i < columnCount; i++) {
                    tablehead.append(\'<th>\' + range.values[0][i] + \'</th>\');
                    tablefoot.append(\'<th>\' + range.values[0][i] + \'</th>\');
                }

                for (i = 1; i < range.values.length; i++) {
                    var thisrow = tablebody.append(tablerow);
                    for (j = 0; j < range.values[i].length; j++) {
                        thisrow.append(\'<td>\' + range.values[i][j] + \'</td>\')
                    }
                }

            } else {
                appendPre(\'No data found.\');
            }
            table.DataTable({"ordering": false});
        }, function(response) {
          appendPre(\'Error: \' + response.result.error.message);
        });
      }

      /**
       * Append a pre element to the body containing the given message
       * as its text node.
       *
       * @param {string} message Text to be placed in pre element.
       */
      function appendPre(message) {
        var pre = document.getElementById(\'output\');
        var textContent = document.createTextNode(message + \'\\n\');
        pre.appendChild(textContent);
      }
</script> -->
    <script src="//apis.google.com/js/client.js?onload=checkAuth"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <style type="text/css">/*
 *  File:         demo_table.css
 *  CVS:          $Id$
 *  Description:  CSS descriptions for DataTables demo pages
 *  Author:       Allan Jardine
 *  Created:      Tue May 12 06:47:22 BST 2009
 *  Modified:     $Date$ by $Author$
 *  Language:     CSS
 *  Project:      DataTables
 *
 *  Copyright 2009 Allan Jardine. All Rights Reserved.
 *
 * ***************************************************************************
 * DESCRIPTION
 *
 * The styles given here are suitable for the demos that are used with the standard DataTables
 * distribution (see www.datatables.net). You will most likely wish to modify these styles to
 * meet the layout requirements of your site.
 *
 * Common issues:
 *   \'full_numbers\' pagination - I use an extra selector on the body tag to ensure that there is
 *     no conflict between the two pagination types. If you want to use full_numbers pagination
 *     ensure that you either have "example_alt_pagination" as a body class name, or better yet,
 *     modify that selector.
 *   Note that the path used for Images is relative. All images are by default located in
 *     ../images/ - relative to this CSS file.
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables features
 */

.dataTables_wrapper {
	position: relative;
	clear: both;
	zoom: 1; /* Feeling sorry for IE */
}

.dataTables_processing {
	position: absolute;
	top: 50%;
	left: 50%;
	width: 250px;
	height: 30px;
	margin-left: -125px;
	margin-top: -15px;
	padding: 14px 0 2px 0;
	border: 1px solid #ddd;
	text-align: center;
	color: #999;
	font-size: 14px;
	background-color: white;
}

.dataTables_length {
	width: 40%;
	float: left;
}

.dataTables_filter {
	width: 50%;
	float: right;
	text-align: right;
}

.dataTables_info {
	width: 60%;
	float: left;
}

.dataTables_paginate {
	float: right;
	text-align: right;
}

/* Pagination nested */
.paginate_disabled_previous, .paginate_enabled_previous,
.paginate_disabled_next, .paginate_enabled_next {
	height: 19px;
	float: left;
	cursor: pointer;
	*cursor: hand;
	color: #111 !important;
}
.paginate_disabled_previous:hover, .paginate_enabled_previous:hover,
.paginate_disabled_next:hover, .paginate_enabled_next:hover {
	text-decoration: none !important;
}
.paginate_disabled_previous:active, .paginate_enabled_previous:active,
.paginate_disabled_next:active, .paginate_enabled_next:active {
	outline: none;
}

.paginate_disabled_previous,
.paginate_disabled_next {
	color: #666 !important;
}
.paginate_disabled_previous, .paginate_enabled_previous {
	padding-left: 23px;
}
.paginate_disabled_next, .paginate_enabled_next {
	padding-right: 23px;
	margin-left: 10px;
}

.paginate_disabled_previous {
	background: url(\'../images/back_disabled.png\') no-repeat top left;
}

.paginate_enabled_previous {
	background: url(\'../images/back_enabled.png\') no-repeat top left;
}
.paginate_enabled_previous:hover {
	background: url(\'../images/back_enabled_hover.png\') no-repeat top left;
}

.paginate_disabled_next {
	background: url(\'../images/forward_disabled.png\') no-repeat top right;
}

.paginate_enabled_next {
	background: url(\'../images/forward_enabled.png\') no-repeat top right;
}
.paginate_enabled_next:hover {
	background: url(\'../images/forward_enabled_hover.png\') no-repeat top right;
}



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables display
 */
table.display {
	margin: 0 auto;
	clear: both;
	width: 100%;
	
	/* Note Firefox 3.5 and before have a bug with border-collapse
	 * ( https://bugzilla.mozilla.org/show%5Fbug.cgi?id=155955 ) 
	 * border-spacing: 0; is one possible option. Conditional-css.com is
	 * useful for this kind of thing
	 *
	 * Further note IE 6/7 has problems when calculating widths with border width.
	 * It subtracts one px relative to the other browsers from the first column, and
	 * adds one to the end...
	 *
	 * If you want that effect I\'d suggest setting a border-top/left on th/td\'s and 
	 * then filling in the gaps with other borders.
	 */
}

table.display thead th {
	padding: 3px 18px 3px 10px;
	border-bottom: 1px solid black;
	font-weight: bold;
	cursor: pointer;
	* cursor: hand;
}

table.display tfoot th {
	padding: 3px 18px 3px 10px;
	border-top: 1px solid black;
	font-weight: bold;
}

table.display tr.heading2 td {
	border-bottom: 1px solid #aaa;
}

table.display td {
	padding: 3px 10px;
}

table.display td.center {
	text-align: center;
}



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables sorting
 */

.sorting_asc {
	background: url(\'../images/sort_asc.png\') no-repeat center right;
}

.sorting_desc {
	background: url(\'../images/sort_desc.png\') no-repeat center right;
}

.sorting {
	background: url(\'../images/sort_both.png\') no-repeat center right;
}

.sorting_asc_disabled {
	background: url(\'../images/sort_asc_disabled.png\') no-repeat center right;
}

.sorting_desc_disabled {
	background: url(\'../images/sort_desc_disabled.png\') no-repeat center right;
}
 
table.display thead th:active,
table.display thead td:active {
	outline: none;
}




/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables row classes
 */
table.display tr.odd.gradeA {
	background-color: #ddffdd;
}

table.display tr.even.gradeA {
	background-color: #eeffee;
}

table.display tr.odd.gradeC {
	background-color: #ddddff;
}

table.display tr.even.gradeC {
	background-color: #eeeeff;
}

table.display tr.odd.gradeX {
	background-color: #ffdddd;
}

table.display tr.even.gradeX {
	background-color: #ffeeee;
}

table.display tr.odd.gradeU {
	background-color: #ddd;
}

table.display tr.even.gradeU {
	background-color: #eee;
}


tr.odd {
	background-color: #E2E4FF;
}

tr.even {
	background-color: white;
}





/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Misc
 */
.dataTables_scroll {
	clear: both;
}

.dataTables_scrollBody {
	*margin-top: -1px;
	-webkit-overflow-scrolling: touch;
}

.top, .bottom {
	padding: 15px;
	background-color: #F5F5F5;
	border: 1px solid #CCCCCC;
}

.top .dataTables_info {
	float: none;
}

.clear {
	clear: both;
}

.dataTables_empty {
	text-align: center;
}

tfoot input {
	margin: 0.5em 0;
	width: 100%;
	color: #444;
}

tfoot input.search_init {
	color: #999;
}

td.group {
	background-color: #d1cfd0;
	border-bottom: 2px solid #A19B9E;
	border-top: 2px solid #A19B9E;
}

td.details {
	background-color: #d1cfd0;
	border: 2px solid #A19B9E;
}


.example_alt_pagination div.dataTables_info {
	width: 40%;
}

.paging_full_numbers {
	width: 400px;
	height: 22px;
	line-height: 22px;
}

.paging_full_numbers a:active {
	outline: none
}

.paging_full_numbers a:hover {
	text-decoration: none;
}

.paging_full_numbers a.paginate_button,
 	.paging_full_numbers a.paginate_active {
	border: 1px solid #aaa;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	padding: 2px 5px;
	margin: 0 3px;
	cursor: pointer;
	*cursor: hand;
	color: #333 !important;
}

.paging_full_numbers a.paginate_button {
	background-color: #ddd;
}

.paging_full_numbers a.paginate_button:hover {
	background-color: #ccc;
	text-decoration: none !important;
}

.paging_full_numbers a.paginate_active {
	background-color: #99B3FF;
}

table.display tr.even.row_selected td {
	background-color: #B0BED9;
}

table.display tr.odd.row_selected td {
	background-color: #9FAFD1;
}


/*
 * Sorting classes for columns
 */
/* For the standard odd/even */
tr.odd td.sorting_1 {
	background-color: #D3D6FF;
}

tr.odd td.sorting_2 {
	background-color: #DADCFF;
}

tr.odd td.sorting_3 {
	background-color: #E0E2FF;
}

tr.even td.sorting_1 {
	background-color: #EAEBFF;
}

tr.even td.sorting_2 {
	background-color: #F2F3FF;
}

tr.even td.sorting_3 {
	background-color: #F9F9FF;
}


/* For the Conditional-CSS grading rows */
/*
 	Colour calculations (based off the main row colours)
  Level 1:
		dd > c4
		ee > d5
	Level 2:
	  dd > d1
	  ee > e2
 */
tr.odd.gradeA td.sorting_1 {
	background-color: #c4ffc4;
}

tr.odd.gradeA td.sorting_2 {
	background-color: #d1ffd1;
}

tr.odd.gradeA td.sorting_3 {
	background-color: #d1ffd1;
}

tr.even.gradeA td.sorting_1 {
	background-color: #d5ffd5;
}

tr.even.gradeA td.sorting_2 {
	background-color: #e2ffe2;
}

tr.even.gradeA td.sorting_3 {
	background-color: #e2ffe2;
}

tr.odd.gradeC td.sorting_1 {
	background-color: #c4c4ff;
}

tr.odd.gradeC td.sorting_2 {
	background-color: #d1d1ff;
}

tr.odd.gradeC td.sorting_3 {
	background-color: #d1d1ff;
}

tr.even.gradeC td.sorting_1 {
	background-color: #d5d5ff;
}

tr.even.gradeC td.sorting_2 {
	background-color: #e2e2ff;
}

tr.even.gradeC td.sorting_3 {
	background-color: #e2e2ff;
}

tr.odd.gradeX td.sorting_1 {
	background-color: #ffc4c4;
}

tr.odd.gradeX td.sorting_2 {
	background-color: #ffd1d1;
}

tr.odd.gradeX td.sorting_3 {
	background-color: #ffd1d1;
}

tr.even.gradeX td.sorting_1 {
	background-color: #ffd5d5;
}

tr.even.gradeX td.sorting_2 {
	background-color: #ffe2e2;
}

tr.even.gradeX td.sorting_3 {
	background-color: #ffe2e2;
}

tr.odd.gradeU td.sorting_1 {
	background-color: #c4c4c4;
}

tr.odd.gradeU td.sorting_2 {
	background-color: #d1d1d1;
}

tr.odd.gradeU td.sorting_3 {
	background-color: #d1d1d1;
}

tr.even.gradeU td.sorting_1 {
	background-color: #d5d5d5;
}

tr.even.gradeU td.sorting_2 {
	background-color: #e2e2e2;
}

tr.even.gradeU td.sorting_3 {
	background-color: #e2e2e2;
}


/*
 * Row highlighting example
 */
.ex_highlight #example tbody tr.even:hover, #example tbody tr.even td.highlighted {
	background-color: #ECFFB3;
}

.ex_highlight #example tbody tr.odd:hover, #example tbody tr.odd td.highlighted {
	background-color: #E6FF99;
}

.ex_highlight_row #example tr.even:hover {
	background-color: #ECFFB3;
}

.ex_highlight_row #example tr.even:hover td.sorting_1 {
	background-color: #DDFF75;
}

.ex_highlight_row #example tr.even:hover td.sorting_2 {
	background-color: #E7FF9E;
}

.ex_highlight_row #example tr.even:hover td.sorting_3 {
	background-color: #E2FF89;
}

.ex_highlight_row #example tr.odd:hover {
	background-color: #E6FF99;
}

.ex_highlight_row #example tr.odd:hover td.sorting_1 {
	background-color: #D6FF5C;
}

.ex_highlight_row #example tr.odd:hover td.sorting_2 {
	background-color: #E0FF84;
}

.ex_highlight_row #example tr.odd:hover td.sorting_3 {
	background-color: #DBFF70;
}


/*
 * KeyTable
 */
table.KeyTable td {
	border: 3px solid transparent;
}

table.KeyTable td.focus {
	border: 3px solid #3366FF;
}

table.display tr.gradeA {
	background-color: #eeffee;
}

table.display tr.gradeC {
	background-color: #ddddff;
}

table.display tr.gradeX {
	background-color: #ffdddd;
}

table.display tr.gradeU {
	background-color: #ddd;
}</style>',
    '[[$mainHeader]]' => '    <div class="container">
        <h1 class="header-heading"><a href="http://localhost/" title="CBSi" class="logo">CBSi</a></h1>
    </div>
',
    '[[Wayfinder? &startId=`0`]]' => '<ul><li class="first active"><a href="http://localhost/" title="Home" >Home</a></li>
<li><a href="specs/" title="Specs" class=\'linkdisable\'>Specs</a><ul><li class="first"><a href="sports/" title="Sports" class=\'linkdisable\'>Sports</a><ul><li class="first"><a href="apps/" title="Apps" class=\'linkdisable\'>Apps</a><ul><li class="first"><a href="cbs-sports-app.html" title="CBS Sports App" >CBS Sports</a></li>
<li><a href="cbssportsfantasy-app.html" title="CBS Sports Fantasy App" >CBS Sports Fantasy</a></li>
<li><a href="draftmaster-app.html" title="DraftMaster App" >DraftMaster</a></li>
<li><a href="maxpreps.html" title="MaxPreps App" >MaxPreps</a></li>
<li class="last"><a href="test-app.html" title="Test App" >Test App</a></li>
</ul></li>
<li><a href="web.html" title="Web" class=\'linkdisable\'>Web</a></li>
<li class="last"><a href="ott.html" title="OTT" class=\'linkdisable\'>OTT</a></li>
</ul></li>
</ul></li>
<li><a href="docsclasslinkdisable/" title="Docs" class=\'linkdisable\'>Docs</a><ul><li class="first"><a href="https://docs.google.com/spreadsheets/d/1pZrw5CPZixbBxDsSB7ePCecZQm7Hanyg9J3SKJyEybI/edit#gid=3222535" title="CBSi Omniture Variables 2016" target="_blank">CBSi Omniture Variables 2016</a></li>
</ul></li>
<li class="last"><a href="apis.html" title="APIs" class=\'linkdisable\'>APIs</a><ul><li class="first"><a href="googleapi.html" title="Google API" >Google API</a></li>
</ul></li>
</ul>',
    '[[$mainNavbar]]' => '    <div class="container">
        <nav><ul><li class="first active"><a href="http://localhost/" title="Home" >Home</a></li>
<li><a href="specs/" title="Specs" class=\'linkdisable\'>Specs</a><ul><li class="first"><a href="sports/" title="Sports" class=\'linkdisable\'>Sports</a><ul><li class="first"><a href="apps/" title="Apps" class=\'linkdisable\'>Apps</a><ul><li class="first"><a href="cbs-sports-app.html" title="CBS Sports App" >CBS Sports</a></li>
<li><a href="cbssportsfantasy-app.html" title="CBS Sports Fantasy App" >CBS Sports Fantasy</a></li>
<li><a href="draftmaster-app.html" title="DraftMaster App" >DraftMaster</a></li>
<li><a href="maxpreps.html" title="MaxPreps App" >MaxPreps</a></li>
<li class="last"><a href="test-app.html" title="Test App" >Test App</a></li>
</ul></li>
<li><a href="web.html" title="Web" class=\'linkdisable\'>Web</a></li>
<li class="last"><a href="ott.html" title="OTT" class=\'linkdisable\'>OTT</a></li>
</ul></li>
</ul></li>
<li><a href="docsclasslinkdisable/" title="Docs" class=\'linkdisable\'>Docs</a><ul><li class="first"><a href="https://docs.google.com/spreadsheets/d/1pZrw5CPZixbBxDsSB7ePCecZQm7Hanyg9J3SKJyEybI/edit#gid=3222535" title="CBSi Omniture Variables 2016" target="_blank">CBSi Omniture Variables 2016</a></li>
</ul></li>
<li class="last"><a href="apis.html" title="APIs" class=\'linkdisable\'>APIs</a><ul><li class="first"><a href="googleapi.html" title="Google API" >Google API</a></li>
</ul></li>
</ul></nav>
    </div>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'basicHead' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'basicHead',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '    <title>[[*pagetitle]] - [[++site_name]]</title>

    <base href="[[!++site_url]]" />

    <meta charset="[[++modx_charset]]" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/colorbox.css" />
    <style type="text/css">[[$mainCSS]]</style>

    <script src="//code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/colorbox.js"></script>
    <script src="assets/js/handlebars.js"></script>
    <script src="assets/js/prism.js"></script>
    [[$mainCustomJS]]
    
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '    <title>[[*pagetitle]] - [[++site_name]]</title>

    <base href="[[!++site_url]]" />

    <meta charset="[[++modx_charset]]" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/colorbox.css" />
    <style type="text/css">[[$mainCSS]]</style>

    <script src="//code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/colorbox.js"></script>
    <script src="assets/js/handlebars.js"></script>
    <script src="assets/js/prism.js"></script>
    [[$mainCustomJS]]
    
',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'mainCSS' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'mainCSS',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '/* -----------------------
Base styles
------------------------*/

body
{
  margin: 0;
  padding: 0;
  color: #333;
  background-color: #eee;
  font: 1em/1.2 "Helvetica Neue", Helvetica, Arial, Geneva, sans-serif;
}

h1,h2,h3,h4,h5,h6
{
  margin: 0 0 .5em;
  font-weight: 500;
  line-height: 1.1;
}

h1 { font-size: 2.25em; } /* 36px */
h2 { font-size: 1.75em; } /* 28px */
h3 { font-size: 1.375em; } /* 22px */
h4 { font-size: 1.125em; } /* 18px */
h5 { font-size: 1em; } /* 16px */
h6 { font-size: .875em; } /* 14px */

p
{
  margin: 0 0 1.5em;
  line-height: 1.5;
}

blockquote
{
  padding: 1em 2em;
  margin: 0 0 2em;
  border-left: 5px solid #eee;
}

hr
{
  height: 0;
  margin-top: 1em;
  margin-bottom: 2em;
  border: 0;
  border-top: 1px solid #ddd;
}

table
{
  background-color: transparent;
  border-spacing: 0;
  border-collapse: collapse;
  border-top: 1px solid #ddd;
}

th, td
{
  padding: .5em 1em;
  vertical-align: top;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:last-child td { border:none; }

a:link { color: royalblue; }
a:visited { color: purple; }
a:focus { color: black; }
a:hover { color: green; }
a:active { color: red; }

*:focus { outline: none; }

/* -----------------------
Layout styles
------------------------*/

.container
{
  max-width: 70em;
  margin: 0 auto;
}

.header
{
  color: #fff;
  background: #ddd;
  padding: 1em 1.25em;
}

.header-heading { margin: 0; }

.nav-bar
{
  background: #000;
  padding: 0;
}

.content
{
  overflow: hidden;
  padding: 1em 1.25em;
  background-color: #fff;
}

.main, .aside
{
  margin-bottom: 1em;
}

.footer
{
  color: #fff;
  background: #000;
  padding: 1em 1.25em;
}

.logo
{
  position:relative;
  background:url(http://static1.squarespace.com/static/55d63b3ce4b07fe20b7883de/55d6dd3ae4b0edf9e2eb3f85/55d6dd3be4b0b9bb4082f18f/1440144700110/CBS_logo-1024x282.png) center no-repeat;
  background-size:contain;
  display:block;
  text-indent:-9999px;
  margin:0 auto;
}
.logo{width:100%;height:48px}

.inner-container { border: 1px solid #ccc; padding:1em; margin:1em auto; }


/* -----------------------
Accordion Custom Styles
------------------------*/

.accordion .inner-container { margin:0 auto; }

.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {
  border:1px solid #3883c9;
  background: #3883c9;
}

.ui-icon { margin-right:8px; }

.ui-helper-reset { font-size:90%; }

/* -----------------------
Nav
------------------------*/

nav {
  margin:0 auto; 
  text-align: center;
}

nav ul ul {
  display: none;
}

nav ul li:hover > ul {
  display: block;
}


nav ul {
  background: #efefef; 
  background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
  background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
  background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
  box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
  padding: 0 20px;
  border-radius: 10px;  
  list-style: none;
  position: relative;
  display: inline-table;
}
  nav ul:after {
    content: ""; clear: both; display: block;
  }

  nav ul li {
    float: left;
  }
    nav ul li:hover {
      background: #4b545f;
      background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
      background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
      background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
    }
      nav ul li:hover a {
        color: #fff;
      }
    
    nav ul li a {
      display: block; padding: 25px 40px;
      color: #757575; text-decoration: none;
      white-space: nowrap;
    }
      
    
  nav ul ul {
    background: #5f6975; border-radius: 0px; padding: 0;
    position: absolute; top: 100%;
  }
    nav ul ul li {
      float: none; 
      border-top: 1px solid #6b727c;
      border-bottom: 1px solid #575f6a; position: relative;
    }
      nav ul ul li a {
        padding: 15px 40px;
        color: #fff;
        white-space: nowrap;
      } 
        nav ul ul li a:hover {
          background: #4b545f;
        }
    
  nav ul ul ul {
    position: absolute; left: 100%; top:0;
  }
    

/* -----------------------
Single styles
------------------------*/

.img-responsive { max-width: 100%; }

.btn
{
  color: #fff !important;
  background-color: royalblue;
  border-color: #222;
  display: inline-block;
  padding: .5em 1em;
  margin-bottom: 0;
  font-weight: 400;
  line-height: 1.2;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: .2em;
  text-decoration: none;
}

.btn:hover
{
  color: #fff !important;
  background-color: green;
}

.btn:focus
{
  color: #fff !important;
  background-color: black;
}

.btn:active
{
  color: #fff !important;
  background-color: red;
}

.table
{
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}

.list-unstyled
{
  padding-left: 0;
  list-style: none;
}

.list-inline
{
  padding-left: 0;
  margin-left: -5px;
  list-style: none;
}

.list-inline > li
{
  display: inline-block;
  padding-right: 5px;
  padding-left: 5px;
}


/* -----------------------
Wide styles
------------------------*/

@media (min-width: 55em)
{
  .header { padding: 1.5em 3em; }
  .nav-bar { padding: 0 3em; }
  .content { padding: 2em 3em; }

  .main
  {
    float: left;
    width: 65%;
    margin-right: 5%;
    margin-bottom: 1em;
  }

  .aside
  {
    float: left;
    width: 30%;
    margin-bottom: 1em;
  }
      .aside li { padding-bottom:10px; }

  .footer { padding: 2em 3em; }
  
  .nav li
  {
    display: inline;
    margin: 0 1em 0 0;
  }
  
  .nav a
  {
    display: inline;
    padding: 0;
    border-bottom: 0;
  }
}

/*----- Tabs -----*/
.tabs {
    width:100%;
    display:inline-block;
}
 
    /*----- Tab Links -----*/
    /* Clearfix */
    .tab-links {
      padding:0;
      margin:0;
    }
    .tab-links:after {
        display:block;
        clear:both;
        content:\'\';
    }
 
    .tab-links li {
        margin:0px 5px;
        float:left;
        list-style:none;
    }
 
        .tab-links a {
          padding: 9px 15px;
          display: inline-block;
          border-radius: 5px 5px 0px 0px;
          background: #3883c9;
          /* font-size: 16px; */
          font-weight: 600;
          color: #EAEAF7;
          transition: all linear .15s;
          text-decoration: none;
          border-width: 1px 1px 1px 1px;
          border-style: solid;
          border-color: #eaeaea #eaeaea #ffffff #eaeaea;
          margin-bottom: -1px;
        }
 
        .tab-links a:hover {
            background:#a7cce5;
            text-decoration:none;
        }
 
    .tabs li.active a, .tabs li.active a:hover {
        background:#fff;
        color:#393939;
    }
 
    /*----- Content of Tabs -----*/
    .tab-content {
      padding: 15px;
      border-radius: 5px;
      box-shadow: -1px 1px 1px rgba(0,0,0,.15);
      background: #fff;
      border-style: solid;
      border-width: 1px;
      border-color: #f0f0f0;
    }
 
        .tab {
            display:none;
        }
 
        .tab.active {
            display:block;
        }

/* http://prismjs.com/download.html?themes=prism-coy&languages=markup+css+clike+javascript+c+java+json+objectivec&plugins=line-highlight+line-numbers+highlight-keywords */
/**
 * prism.js Coy theme for JavaScript, CoffeeScript, CSS and HTML
 * Based on https://github.com/tshedor/workshop-wp-theme (Example: http://workshop.kansan.com/category/sessions/basics or http://workshop.timshedor.com/category/sessions/basics);
 * @author Tim  Shedor
 */

code[class*="language-"],
pre[class*="language-"] {
  color: black;
  background: none;
  font-family: Consolas, Monaco, \'Andale Mono\', \'Ubuntu Mono\', monospace;
  text-align: left;
  white-space: pre;
  word-spacing: normal;
  word-break: normal;
  word-wrap: normal;
  line-height: 1.5;

  -moz-tab-size: 4;
  -o-tab-size: 4;
  tab-size: 4;

  -webkit-hyphens: none;
  -moz-hyphens: none;
  -ms-hyphens: none;
  hyphens: none;
}

/* Code blocks */
pre[class*="language-"] {
  position: relative;
  margin: .5em 0;
  box-shadow: -1px 0px 0px 0px #358ccb, 0px 0px 0px 1px #dfdfdf;
  border-left: 10px solid #358ccb;
  background-color: #fdfdfd;
  background-image: linear-gradient(transparent 50%, rgba(69, 142, 209, 0.04) 50%);
  background-size: 3em 3em;
  background-origin: content-box;
  overflow: visible;
  padding: 0;
}

code[class*="language"] {
  max-height: inherit;
  height: 100%;
  padding: 0 1em;
  display: block;
  overflow: auto;
}

/* Margin bottom to accomodate shadow */
:not(pre) > code[class*="language-"],
pre[class*="language-"] {
  background-color: #fdfdfd;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin-bottom: 1em;
}

/* Inline code */
:not(pre) > code[class*="language-"] {
  position: relative;
  padding: .2em;
  border-radius: 0.3em;
  color: #c92c2c;
  border: 1px solid rgba(0, 0, 0, 0.1);
  display: inline;
  white-space: normal;
}

pre[class*="language-"]:before,
pre[class*="language-"]:after {
  content: \'\';
  z-index: -2;
  display: block;
  position: absolute;
  bottom: 0.75em;
  left: 0.18em;
  width: 40%;
  height: 20%;
  max-height: 13em;
  box-shadow: 0px 13px 8px #979797;
  -webkit-transform: rotate(-2deg);
  -moz-transform: rotate(-2deg);
  -ms-transform: rotate(-2deg);
  -o-transform: rotate(-2deg);
  transform: rotate(-2deg);
}

:not(pre) > code[class*="language-"]:after,
pre[class*="language-"]:after {
  right: 0.75em;
  left: auto;
  -webkit-transform: rotate(2deg);
  -moz-transform: rotate(2deg);
  -ms-transform: rotate(2deg);
  -o-transform: rotate(2deg);
  transform: rotate(2deg);
}

.token.comment,
.token.block-comment,
.token.prolog,
.token.doctype,
.token.cdata {
  color: #7D8B99;
}

.token.punctuation {
  color: #5F6364;
}

.token.property,
.token.tag,
.token.boolean,
.token.number,
.token.function-name,
.token.constant,
.token.symbol,
.token.deleted {
  color: #c92c2c;
}

.token.selector,
.token.attr-name,
.token.string,
.token.char,
.token.function,
.token.builtin,
.token.inserted {
  color: #2f9c0a;
}

.token.operator,
.token.entity,
.token.url,
.token.variable {
  color: #a67f59;
  background: rgba(255, 255, 255, 0.5);
}

.token.atrule,
.token.attr-value,
.token.keyword,
.token.class-name {
  color: #1990b8;
}

.token.regex,
.token.important {
  color: #e90;
}

.language-css .token.string,
.style .token.string {
  color: #a67f59;
  background: rgba(255, 255, 255, 0.5);
}

.token.important {
  font-weight: normal;
}

.token.bold {
  font-weight: bold;
}
.token.italic {
  font-style: italic;
}

.token.entity {
  cursor: help;
}

.namespace {
  opacity: .7;
}

@media screen and (max-width: 767px) {
  pre[class*="language-"]:before,
  pre[class*="language-"]:after {
    bottom: 14px;
    box-shadow: none;
  }

}

/* Plugin styles */
.token.tab:not(:empty):before,
.token.cr:before,
.token.lf:before {
  color: #e0d7d1;
}

/* Plugin styles: Line Numbers */
pre[class*="language-"].line-numbers {
  padding-left: 0;
}

pre[class*="language-"].line-numbers code {
  padding-left: 3.8em;
}

pre[class*="language-"].line-numbers .line-numbers-rows {
  left: 0;
}

/* Plugin styles: Line Highlight */
pre[class*="language-"][data-line] {
  padding-top: 0;
  padding-bottom: 0;
  padding-left: 0;
}
pre[data-line] code {
  position: relative;
  padding-left: 4em;
}
pre .line-highlight {
  margin-top: 0;
}

pre[data-line] {
  position: relative;
  padding: 1em 0 1em 3em;
}

.line-highlight {
  position: absolute;
  left: 0;
  right: 0;
  padding: inherit 0;
  margin-top: 1em; /* Same as .prism’s padding-top */

  background: hsla(24, 20%, 50%,.08);
  background: linear-gradient(to right, hsla(24, 20%, 50%,.1) 70%, hsla(24, 20%, 50%,0));

  pointer-events: none;

  line-height: inherit;
  white-space: pre;
}

  .line-highlight:before,
  .line-highlight[data-end]:after {
    content: attr(data-start);
    position: absolute;
    top: .4em;
    left: .6em;
    min-width: 1em;
    padding: 0 .5em;
    background-color: hsla(24, 20%, 50%,.4);
    color: hsl(24, 20%, 95%);
    font: bold 65%/1.5 sans-serif;
    text-align: center;
    vertical-align: .3em;
    border-radius: 999px;
    text-shadow: none;
    box-shadow: 0 1px white;
  }

  .line-highlight[data-end]:after {
    content: attr(data-end);
    top: auto;
    bottom: .4em;
  }

pre.line-numbers {
  position: relative;
  padding-left: 3.8em;
  counter-reset: linenumber;
}

pre.line-numbers > code {
  position: relative;
}

.line-numbers .line-numbers-rows {
  position: absolute;
  pointer-events: none;
  top: 0;
  font-size: 100%;
  left: -3.8em;
  width: 3em; /* works for line-numbers below 1000 lines */
  letter-spacing: -1px;
  border-right: 1px solid #999;

  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;

}

  .line-numbers-rows > span {
    pointer-events: none;
    display: block;
    counter-increment: linenumber;
  }

    .line-numbers-rows > span:before {
      content: counter(linenumber);
      color: #999;
      display: block;
      padding-right: 0.8em;
      text-align: right;
    }',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '/* -----------------------
Base styles
------------------------*/

body
{
  margin: 0;
  padding: 0;
  color: #333;
  background-color: #eee;
  font: 1em/1.2 "Helvetica Neue", Helvetica, Arial, Geneva, sans-serif;
}

h1,h2,h3,h4,h5,h6
{
  margin: 0 0 .5em;
  font-weight: 500;
  line-height: 1.1;
}

h1 { font-size: 2.25em; } /* 36px */
h2 { font-size: 1.75em; } /* 28px */
h3 { font-size: 1.375em; } /* 22px */
h4 { font-size: 1.125em; } /* 18px */
h5 { font-size: 1em; } /* 16px */
h6 { font-size: .875em; } /* 14px */

p
{
  margin: 0 0 1.5em;
  line-height: 1.5;
}

blockquote
{
  padding: 1em 2em;
  margin: 0 0 2em;
  border-left: 5px solid #eee;
}

hr
{
  height: 0;
  margin-top: 1em;
  margin-bottom: 2em;
  border: 0;
  border-top: 1px solid #ddd;
}

table
{
  background-color: transparent;
  border-spacing: 0;
  border-collapse: collapse;
  border-top: 1px solid #ddd;
}

th, td
{
  padding: .5em 1em;
  vertical-align: top;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:last-child td { border:none; }

a:link { color: royalblue; }
a:visited { color: purple; }
a:focus { color: black; }
a:hover { color: green; }
a:active { color: red; }

*:focus { outline: none; }

/* -----------------------
Layout styles
------------------------*/

.container
{
  max-width: 70em;
  margin: 0 auto;
}

.header
{
  color: #fff;
  background: #ddd;
  padding: 1em 1.25em;
}

.header-heading { margin: 0; }

.nav-bar
{
  background: #000;
  padding: 0;
}

.content
{
  overflow: hidden;
  padding: 1em 1.25em;
  background-color: #fff;
}

.main, .aside
{
  margin-bottom: 1em;
}

.footer
{
  color: #fff;
  background: #000;
  padding: 1em 1.25em;
}

.logo
{
  position:relative;
  background:url(http://static1.squarespace.com/static/55d63b3ce4b07fe20b7883de/55d6dd3ae4b0edf9e2eb3f85/55d6dd3be4b0b9bb4082f18f/1440144700110/CBS_logo-1024x282.png) center no-repeat;
  background-size:contain;
  display:block;
  text-indent:-9999px;
  margin:0 auto;
}
.logo{width:100%;height:48px}

.inner-container { border: 1px solid #ccc; padding:1em; margin:1em auto; }


/* -----------------------
Accordion Custom Styles
------------------------*/

.accordion .inner-container { margin:0 auto; }

.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {
  border:1px solid #3883c9;
  background: #3883c9;
}

.ui-icon { margin-right:8px; }

.ui-helper-reset { font-size:90%; }

/* -----------------------
Nav
------------------------*/

nav {
  margin:0 auto; 
  text-align: center;
}

nav ul ul {
  display: none;
}

nav ul li:hover > ul {
  display: block;
}


nav ul {
  background: #efefef; 
  background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
  background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
  background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
  box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
  padding: 0 20px;
  border-radius: 10px;  
  list-style: none;
  position: relative;
  display: inline-table;
}
  nav ul:after {
    content: ""; clear: both; display: block;
  }

  nav ul li {
    float: left;
  }
    nav ul li:hover {
      background: #4b545f;
      background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
      background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
      background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
    }
      nav ul li:hover a {
        color: #fff;
      }
    
    nav ul li a {
      display: block; padding: 25px 40px;
      color: #757575; text-decoration: none;
      white-space: nowrap;
    }
      
    
  nav ul ul {
    background: #5f6975; border-radius: 0px; padding: 0;
    position: absolute; top: 100%;
  }
    nav ul ul li {
      float: none; 
      border-top: 1px solid #6b727c;
      border-bottom: 1px solid #575f6a; position: relative;
    }
      nav ul ul li a {
        padding: 15px 40px;
        color: #fff;
        white-space: nowrap;
      } 
        nav ul ul li a:hover {
          background: #4b545f;
        }
    
  nav ul ul ul {
    position: absolute; left: 100%; top:0;
  }
    

/* -----------------------
Single styles
------------------------*/

.img-responsive { max-width: 100%; }

.btn
{
  color: #fff !important;
  background-color: royalblue;
  border-color: #222;
  display: inline-block;
  padding: .5em 1em;
  margin-bottom: 0;
  font-weight: 400;
  line-height: 1.2;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: .2em;
  text-decoration: none;
}

.btn:hover
{
  color: #fff !important;
  background-color: green;
}

.btn:focus
{
  color: #fff !important;
  background-color: black;
}

.btn:active
{
  color: #fff !important;
  background-color: red;
}

.table
{
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}

.list-unstyled
{
  padding-left: 0;
  list-style: none;
}

.list-inline
{
  padding-left: 0;
  margin-left: -5px;
  list-style: none;
}

.list-inline > li
{
  display: inline-block;
  padding-right: 5px;
  padding-left: 5px;
}


/* -----------------------
Wide styles
------------------------*/

@media (min-width: 55em)
{
  .header { padding: 1.5em 3em; }
  .nav-bar { padding: 0 3em; }
  .content { padding: 2em 3em; }

  .main
  {
    float: left;
    width: 65%;
    margin-right: 5%;
    margin-bottom: 1em;
  }

  .aside
  {
    float: left;
    width: 30%;
    margin-bottom: 1em;
  }
      .aside li { padding-bottom:10px; }

  .footer { padding: 2em 3em; }
  
  .nav li
  {
    display: inline;
    margin: 0 1em 0 0;
  }
  
  .nav a
  {
    display: inline;
    padding: 0;
    border-bottom: 0;
  }
}

/*----- Tabs -----*/
.tabs {
    width:100%;
    display:inline-block;
}
 
    /*----- Tab Links -----*/
    /* Clearfix */
    .tab-links {
      padding:0;
      margin:0;
    }
    .tab-links:after {
        display:block;
        clear:both;
        content:\'\';
    }
 
    .tab-links li {
        margin:0px 5px;
        float:left;
        list-style:none;
    }
 
        .tab-links a {
          padding: 9px 15px;
          display: inline-block;
          border-radius: 5px 5px 0px 0px;
          background: #3883c9;
          /* font-size: 16px; */
          font-weight: 600;
          color: #EAEAF7;
          transition: all linear .15s;
          text-decoration: none;
          border-width: 1px 1px 1px 1px;
          border-style: solid;
          border-color: #eaeaea #eaeaea #ffffff #eaeaea;
          margin-bottom: -1px;
        }
 
        .tab-links a:hover {
            background:#a7cce5;
            text-decoration:none;
        }
 
    .tabs li.active a, .tabs li.active a:hover {
        background:#fff;
        color:#393939;
    }
 
    /*----- Content of Tabs -----*/
    .tab-content {
      padding: 15px;
      border-radius: 5px;
      box-shadow: -1px 1px 1px rgba(0,0,0,.15);
      background: #fff;
      border-style: solid;
      border-width: 1px;
      border-color: #f0f0f0;
    }
 
        .tab {
            display:none;
        }
 
        .tab.active {
            display:block;
        }

/* http://prismjs.com/download.html?themes=prism-coy&languages=markup+css+clike+javascript+c+java+json+objectivec&plugins=line-highlight+line-numbers+highlight-keywords */
/**
 * prism.js Coy theme for JavaScript, CoffeeScript, CSS and HTML
 * Based on https://github.com/tshedor/workshop-wp-theme (Example: http://workshop.kansan.com/category/sessions/basics or http://workshop.timshedor.com/category/sessions/basics);
 * @author Tim  Shedor
 */

code[class*="language-"],
pre[class*="language-"] {
  color: black;
  background: none;
  font-family: Consolas, Monaco, \'Andale Mono\', \'Ubuntu Mono\', monospace;
  text-align: left;
  white-space: pre;
  word-spacing: normal;
  word-break: normal;
  word-wrap: normal;
  line-height: 1.5;

  -moz-tab-size: 4;
  -o-tab-size: 4;
  tab-size: 4;

  -webkit-hyphens: none;
  -moz-hyphens: none;
  -ms-hyphens: none;
  hyphens: none;
}

/* Code blocks */
pre[class*="language-"] {
  position: relative;
  margin: .5em 0;
  box-shadow: -1px 0px 0px 0px #358ccb, 0px 0px 0px 1px #dfdfdf;
  border-left: 10px solid #358ccb;
  background-color: #fdfdfd;
  background-image: linear-gradient(transparent 50%, rgba(69, 142, 209, 0.04) 50%);
  background-size: 3em 3em;
  background-origin: content-box;
  overflow: visible;
  padding: 0;
}

code[class*="language"] {
  max-height: inherit;
  height: 100%;
  padding: 0 1em;
  display: block;
  overflow: auto;
}

/* Margin bottom to accomodate shadow */
:not(pre) > code[class*="language-"],
pre[class*="language-"] {
  background-color: #fdfdfd;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin-bottom: 1em;
}

/* Inline code */
:not(pre) > code[class*="language-"] {
  position: relative;
  padding: .2em;
  border-radius: 0.3em;
  color: #c92c2c;
  border: 1px solid rgba(0, 0, 0, 0.1);
  display: inline;
  white-space: normal;
}

pre[class*="language-"]:before,
pre[class*="language-"]:after {
  content: \'\';
  z-index: -2;
  display: block;
  position: absolute;
  bottom: 0.75em;
  left: 0.18em;
  width: 40%;
  height: 20%;
  max-height: 13em;
  box-shadow: 0px 13px 8px #979797;
  -webkit-transform: rotate(-2deg);
  -moz-transform: rotate(-2deg);
  -ms-transform: rotate(-2deg);
  -o-transform: rotate(-2deg);
  transform: rotate(-2deg);
}

:not(pre) > code[class*="language-"]:after,
pre[class*="language-"]:after {
  right: 0.75em;
  left: auto;
  -webkit-transform: rotate(2deg);
  -moz-transform: rotate(2deg);
  -ms-transform: rotate(2deg);
  -o-transform: rotate(2deg);
  transform: rotate(2deg);
}

.token.comment,
.token.block-comment,
.token.prolog,
.token.doctype,
.token.cdata {
  color: #7D8B99;
}

.token.punctuation {
  color: #5F6364;
}

.token.property,
.token.tag,
.token.boolean,
.token.number,
.token.function-name,
.token.constant,
.token.symbol,
.token.deleted {
  color: #c92c2c;
}

.token.selector,
.token.attr-name,
.token.string,
.token.char,
.token.function,
.token.builtin,
.token.inserted {
  color: #2f9c0a;
}

.token.operator,
.token.entity,
.token.url,
.token.variable {
  color: #a67f59;
  background: rgba(255, 255, 255, 0.5);
}

.token.atrule,
.token.attr-value,
.token.keyword,
.token.class-name {
  color: #1990b8;
}

.token.regex,
.token.important {
  color: #e90;
}

.language-css .token.string,
.style .token.string {
  color: #a67f59;
  background: rgba(255, 255, 255, 0.5);
}

.token.important {
  font-weight: normal;
}

.token.bold {
  font-weight: bold;
}
.token.italic {
  font-style: italic;
}

.token.entity {
  cursor: help;
}

.namespace {
  opacity: .7;
}

@media screen and (max-width: 767px) {
  pre[class*="language-"]:before,
  pre[class*="language-"]:after {
    bottom: 14px;
    box-shadow: none;
  }

}

/* Plugin styles */
.token.tab:not(:empty):before,
.token.cr:before,
.token.lf:before {
  color: #e0d7d1;
}

/* Plugin styles: Line Numbers */
pre[class*="language-"].line-numbers {
  padding-left: 0;
}

pre[class*="language-"].line-numbers code {
  padding-left: 3.8em;
}

pre[class*="language-"].line-numbers .line-numbers-rows {
  left: 0;
}

/* Plugin styles: Line Highlight */
pre[class*="language-"][data-line] {
  padding-top: 0;
  padding-bottom: 0;
  padding-left: 0;
}
pre[data-line] code {
  position: relative;
  padding-left: 4em;
}
pre .line-highlight {
  margin-top: 0;
}

pre[data-line] {
  position: relative;
  padding: 1em 0 1em 3em;
}

.line-highlight {
  position: absolute;
  left: 0;
  right: 0;
  padding: inherit 0;
  margin-top: 1em; /* Same as .prism’s padding-top */

  background: hsla(24, 20%, 50%,.08);
  background: linear-gradient(to right, hsla(24, 20%, 50%,.1) 70%, hsla(24, 20%, 50%,0));

  pointer-events: none;

  line-height: inherit;
  white-space: pre;
}

  .line-highlight:before,
  .line-highlight[data-end]:after {
    content: attr(data-start);
    position: absolute;
    top: .4em;
    left: .6em;
    min-width: 1em;
    padding: 0 .5em;
    background-color: hsla(24, 20%, 50%,.4);
    color: hsl(24, 20%, 95%);
    font: bold 65%/1.5 sans-serif;
    text-align: center;
    vertical-align: .3em;
    border-radius: 999px;
    text-shadow: none;
    box-shadow: 0 1px white;
  }

  .line-highlight[data-end]:after {
    content: attr(data-end);
    top: auto;
    bottom: .4em;
  }

pre.line-numbers {
  position: relative;
  padding-left: 3.8em;
  counter-reset: linenumber;
}

pre.line-numbers > code {
  position: relative;
}

.line-numbers .line-numbers-rows {
  position: absolute;
  pointer-events: none;
  top: 0;
  font-size: 100%;
  left: -3.8em;
  width: 3em; /* works for line-numbers below 1000 lines */
  letter-spacing: -1px;
  border-right: 1px solid #999;

  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;

}

  .line-numbers-rows > span {
    pointer-events: none;
    display: block;
    counter-increment: linenumber;
  }

    .line-numbers-rows > span:before {
      content: counter(linenumber);
      color: #999;
      display: block;
      padding-right: 0.8em;
      text-align: right;
    }',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'mainCustomJS' => 
      array (
        'fields' => 
        array (
          'id' => 20,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'mainCustomJS',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '<script id="app-code-template" type="text/x-handlebars-template">
    {{#each entry}}
    <div class="accordion2 {{#if this.gsx$articleid.$t}}ontology-article{{/if}} ontology-method-{{this.gsx$trackingmethod.$t}}">
        <h2>{{this.gsx$node.$t}}</h2>
        <div class="inner-container container-{{@index}}">
            <div class="tabs">
                <ul class="tab-links">
                    <li class="active"><a href="#tab-basic-{{@index}}">Basic</a></li>
                    [[*platform:contains=`iOS`:then=`<li><a href="#tab-ios-{{@index}}">iOS</a></li>`]]
                    [[*platform:contains=`Android`:then=`<li><a href="#tab-and-{{@index}}">Android</a></li>`]]
                </ul>
                <div class="tab-content">
                    <div id="tab-basic-{{@index}}" class="tab active">
                        <pre class="line-numbers"><code class="language-json">siteCode : \'[[*siteCode]]\'
sitePrimaryRsid : \'[[*sitePrimaryRsid]]\'
siteType : \'[[*siteType]]\'
siteSection : \'{{this.gsx$sitesection.$t}}\'
siteHier : \'{{this.gsx$sitehier.$t}}\'
pageType : \'{{this.gsx$pagename.$t}}\'
screenName : \'{{this.gsx$pagename.$t}}\'[[*appfeatures:contains=`Interaction (Login)`:then=`
userType : \'{{this.gsx$usertype.$t}}\'
userState : \'{{this.gsx$userstate.$t}}\'
userStateIsAuthenticated : \'1\'`]]{{#if this.gsx$articleid.$t}}
articleId : \'{{this.gsx$articleid.$t}}\'
articleTitle : \'{{this.gsx$articletitle.$t}}\'
articleType : \'{{this.gsx$articletype.$t}}\'
articleAuthorId : \'{{this.gsx$articleauthorid.$t}}\'
articleAuthorName : \'{{this.gsx$articleauthorname.$t}}\'{{/if}}</code></pre>
                    </div>
                    [[*platform:contains=`iOS`:then=`<div id="tab-ios-{{@index}}" class="tab">
                        <pre class="line-numbers"><code class="language-objectivec">NSDictionary *cdata = @{
    @"siteCode": @"[[*siteCode]]",
    @"sitePrimaryRsid": @"[[*sitePrimaryRsid]]",
    @"siteType": @"[[*siteType]]",
    @"siteSection": @"{{this.gsx$sitesection.$t}}",
    @"siteHier": @"{{this.gsx$sitehier.$t}}",
    @"pageType": @"{{this.gsx$pagename.$t}}",
    @"screenName": @"{{this.gsx$pagename.$t}}"[[*appfeatures:contains=`Interaction (Login)`:then=`,
    @"userType": @"{{this.gsx$usertype.$t}}",
    @"userState": @"{{this.gsx$userstate.$t}}",
    @"userStateIsAuthenticated": @"1"`]]{{#if this.gsx$articleid.$t}},
    @"articleId": @"{{this.gsx$articleid.$t}}",
    @"articleTitle": @"{{this.gsx$articletitle.$t}}",
    @"articleType": @"{{this.gsx$articletype.$t}}",
    @"articleAuthorId": @"{{this.gsx$articleauthorid.$t}}",
    @"articleAuthorName": @"{{this.gsx$articleauthorname.$t}}"{{/if}}
};
[ADBMobile {{this.gsx$trackingmethod.$t}}:@"{{trackingMethodPage this.gsx$trackingmethod.$t}}", data:cdata];</code></pre>
                    </div>`]]
                    [[*platform:contains=`Android`:then=`<div id="tab-and-{{@index}}" class="tab">
                        <pre class="line-numbers"><code class="language-java">cdata.put("siteCode", "[[*siteCode]]");
cdata.put("sitePrimaryRsid", "[[*sitePrimaryRsid]]");
cdata.put("siteType", "[[*siteType]]");
cdata.put("siteSection", "{{this.gsx$sitesection.$t}}");
cdata.put("siteHier", "{{this.gsx$sitehier.$t}}");
cdata.put("pageType", "{{this.gsx$pagename.$t}}");[[*appfeatures:contains=`Interaction (Login)`:then=`
cdata.put("userType", "{{this.gsx$usertype.$t}}");
cdata.put("userState", "{{this.gsx$userstate.$t}}");
cdata.put("userStateIsAuthenticated", "1");`]]{{#if this.gsx$articleid.$t}}
cdata.put("articleId", "{{this.gsx$articleid.$t}}");
cdata.put("articleTitle", "{{this.gsx$articletitle.$t}}");
cdata.put("articleType", "{{this.gsx$articletype.$t}}");
cdata.put("articleAuthorId", "{{this.gsx$articleauthorid.$t}}");
cdata.put("articleAuthorName", "{{this.gsx$articleauthorname.$t}}");{{/if}}
Analytics.{{this.gsx$trackingmethod.$t}}("{{trackingMethodPage this.gsx$trackingmethod.$t}}", cdata);</code></pre>
                    </div>`]]
                </div>
            </div>
        </div>
    </div>
    {{/each}}
</script>

<script type="text/javascript">
// JSON feed
var feed = "";
var url = "https://spreadsheets.google.com/feeds/list/[[*gen_ontologyID]]/od6/public/values?alt=json";

// Accordion Content
var icons = {
  header: "ui-icon-circle-arrow-e",
  activeHeader: "ui-icon-circle-arrow-s"
};

firetabs = function(){
    jQuery(\'.tabs .tab-links a\').on(\'click\', function(e){
        var currentAttrValue = jQuery(this).attr(\'href\');
        jQuery(\'.tabs \' + currentAttrValue).show().siblings().hide();
        jQuery(this).parent(\'li\').addClass(\'active\').siblings().removeClass(\'active\');
        e.preventDefault();
    });
};
fireaccordion = function(i){
    jQuery(i).accordion({
        active: false,
        collapsible:true,
        header:"h2",
        heightStyle:"content",
        icons: icons
    });
};
firehandlebars = function(data, template, destination){
  var theTemplateScript = jQuery(template).html();
  var theTemplate = Handlebars.compile(theTemplateScript);
  var theCompiledHtml = theTemplate(data);
  jQuery(destination).html(theCompiledHtml);
};

jQuery(function(){
    // Kill empty menu clicks
    jQuery(\'.linkdisable\').click(function(e){
        e.preventDefault();
        return false;
    });

    jQuery.getJSON(url, function(data){
        feed = data.feed;
    });

    fireaccordion(".accordion1");
    firetabs();

    jQuery(document).ajaxStart(function(){
        //console.log(\'ajaxStart\');
    }).ajaxStop(function(){
        //console.log(\'ajaxStop\');
        firehandlebars(feed, "#app-code-template", "#tab-ontology-basic");
        fireaccordion(".accordion2");
        firetabs();
        fireprism();
        jQuery(\'.ontology-article\').detach().appendTo(\'#tab-ontology-articles\');
        jQuery(\'.ontology-method-trackAction\').detach().appendTo(\'#ontology-method-trackAction\');
        jQuery("#tab-ontology-basic").sieve({ itemSelector: "h2" });
    });
});

Handlebars.registerHelper(\'trackingMethodPage\', function(trackingmethod){
    if(trackingmethod == \'trackState\'){
        return this.gsx$pagename.$t;
    } else {
        return this.gsx$trackingmethodaction.$t;        
    }
});

/*
$.getJSON(url, function(data) {
    var html = \'\';

    var entry = data.feed.entry;
    var modx_platform = "[[*platform]]";

    html += \'<div class="accordion2">\';
    for (var i = 0; i < entry.length; i++) {
        var html_and=\'\',html_ios=\'\',html_list=\'\',page_and=\'\',page_ios=\'\',article_and=\'\',article_ios=\'\';

        var dr = {
            // Tracking Method
            trackingmethod : entry[i][\'gsx$trackingmethod\'][\'$t\'],

            // Basic pageview
            page : {
                node : entry[i][\'gsx$node\'][\'$t\'],
                pagetype : entry[i][\'gsx$pagetype\'][\'$t\'],
                pagename : entry[i][\'gsx$pagename\'][\'$t\'],
                project : entry[i][\'gsx$project\'][\'$t\'],
                channel : entry[i][\'gsx$channel\'][\'$t\'],
                productline : entry[i][\'gsx$productline\'][\'$t\'],
                servicelevel : entry[i][\'gsx$servicelevel\'][\'$t\'],
                feature : entry[i][\'gsx$feature\'][\'$t\'],
                subfeature : entry[i][\'gsx$subfeature\'][\'$t\']
            },

            // Article pageview
            article : {
                articleid : entry[i][\'gsx$articleid\'][\'$t\'],
                articletitle : entry[i][\'gsx$articletitle\'][\'$t\'],
                articletype : entry[i][\'gsx$articletype\'][\'$t\'],
                articleauthorid : entry[i][\'gsx$articleauthorid\'][\'$t\'],
                articleauthorname : entry[i][\'gsx$articleauthorname\'][\'$t\']
            }
        }
        var hiertrim = dr.page.project + \'|\' + dr.page.channel + \'|\' + dr.page.productline + \'|\' + dr.page.servicelevel + \'|\' + dr.page.feature + \'|\' + dr.page.subfeature;
        hiertrim = hiertrim.replace("||"||"|||"||"||||"||"|||||","|");

        html += \'<h2>\' +dr.page.node+ \'</h2><div class="inner-container container-\'+i+\'"><div class="tabs"><ul class="tab-links">\'+html_list+\'</ul><div class="tab-content">\'+page_ios+page_and+\'</div></div></div>\';
    }
    html += "</div>";

    $(\'.ontology-tags\').html(html);
});
*/

</script>


',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<script id="app-code-template" type="text/x-handlebars-template">
    {{#each entry}}
    <div class="accordion2 {{#if this.gsx$articleid.$t}}ontology-article{{/if}} ontology-method-{{this.gsx$trackingmethod.$t}}">
        <h2>{{this.gsx$node.$t}}</h2>
        <div class="inner-container container-{{@index}}">
            <div class="tabs">
                <ul class="tab-links">
                    <li class="active"><a href="#tab-basic-{{@index}}">Basic</a></li>
                    [[*platform:contains=`iOS`:then=`<li><a href="#tab-ios-{{@index}}">iOS</a></li>`]]
                    [[*platform:contains=`Android`:then=`<li><a href="#tab-and-{{@index}}">Android</a></li>`]]
                </ul>
                <div class="tab-content">
                    <div id="tab-basic-{{@index}}" class="tab active">
                        <pre class="line-numbers"><code class="language-json">siteCode : \'[[*siteCode]]\'
sitePrimaryRsid : \'[[*sitePrimaryRsid]]\'
siteType : \'[[*siteType]]\'
siteSection : \'{{this.gsx$sitesection.$t}}\'
siteHier : \'{{this.gsx$sitehier.$t}}\'
pageType : \'{{this.gsx$pagename.$t}}\'
screenName : \'{{this.gsx$pagename.$t}}\'[[*appfeatures:contains=`Interaction (Login)`:then=`
userType : \'{{this.gsx$usertype.$t}}\'
userState : \'{{this.gsx$userstate.$t}}\'
userStateIsAuthenticated : \'1\'`]]{{#if this.gsx$articleid.$t}}
articleId : \'{{this.gsx$articleid.$t}}\'
articleTitle : \'{{this.gsx$articletitle.$t}}\'
articleType : \'{{this.gsx$articletype.$t}}\'
articleAuthorId : \'{{this.gsx$articleauthorid.$t}}\'
articleAuthorName : \'{{this.gsx$articleauthorname.$t}}\'{{/if}}</code></pre>
                    </div>
                    [[*platform:contains=`iOS`:then=`<div id="tab-ios-{{@index}}" class="tab">
                        <pre class="line-numbers"><code class="language-objectivec">NSDictionary *cdata = @{
    @"siteCode": @"[[*siteCode]]",
    @"sitePrimaryRsid": @"[[*sitePrimaryRsid]]",
    @"siteType": @"[[*siteType]]",
    @"siteSection": @"{{this.gsx$sitesection.$t}}",
    @"siteHier": @"{{this.gsx$sitehier.$t}}",
    @"pageType": @"{{this.gsx$pagename.$t}}",
    @"screenName": @"{{this.gsx$pagename.$t}}"[[*appfeatures:contains=`Interaction (Login)`:then=`,
    @"userType": @"{{this.gsx$usertype.$t}}",
    @"userState": @"{{this.gsx$userstate.$t}}",
    @"userStateIsAuthenticated": @"1"`]]{{#if this.gsx$articleid.$t}},
    @"articleId": @"{{this.gsx$articleid.$t}}",
    @"articleTitle": @"{{this.gsx$articletitle.$t}}",
    @"articleType": @"{{this.gsx$articletype.$t}}",
    @"articleAuthorId": @"{{this.gsx$articleauthorid.$t}}",
    @"articleAuthorName": @"{{this.gsx$articleauthorname.$t}}"{{/if}}
};
[ADBMobile {{this.gsx$trackingmethod.$t}}:@"{{trackingMethodPage this.gsx$trackingmethod.$t}}", data:cdata];</code></pre>
                    </div>`]]
                    [[*platform:contains=`Android`:then=`<div id="tab-and-{{@index}}" class="tab">
                        <pre class="line-numbers"><code class="language-java">cdata.put("siteCode", "[[*siteCode]]");
cdata.put("sitePrimaryRsid", "[[*sitePrimaryRsid]]");
cdata.put("siteType", "[[*siteType]]");
cdata.put("siteSection", "{{this.gsx$sitesection.$t}}");
cdata.put("siteHier", "{{this.gsx$sitehier.$t}}");
cdata.put("pageType", "{{this.gsx$pagename.$t}}");[[*appfeatures:contains=`Interaction (Login)`:then=`
cdata.put("userType", "{{this.gsx$usertype.$t}}");
cdata.put("userState", "{{this.gsx$userstate.$t}}");
cdata.put("userStateIsAuthenticated", "1");`]]{{#if this.gsx$articleid.$t}}
cdata.put("articleId", "{{this.gsx$articleid.$t}}");
cdata.put("articleTitle", "{{this.gsx$articletitle.$t}}");
cdata.put("articleType", "{{this.gsx$articletype.$t}}");
cdata.put("articleAuthorId", "{{this.gsx$articleauthorid.$t}}");
cdata.put("articleAuthorName", "{{this.gsx$articleauthorname.$t}}");{{/if}}
Analytics.{{this.gsx$trackingmethod.$t}}("{{trackingMethodPage this.gsx$trackingmethod.$t}}", cdata);</code></pre>
                    </div>`]]
                </div>
            </div>
        </div>
    </div>
    {{/each}}
</script>

<script type="text/javascript">
// JSON feed
var feed = "";
var url = "https://spreadsheets.google.com/feeds/list/[[*gen_ontologyID]]/od6/public/values?alt=json";

// Accordion Content
var icons = {
  header: "ui-icon-circle-arrow-e",
  activeHeader: "ui-icon-circle-arrow-s"
};

firetabs = function(){
    jQuery(\'.tabs .tab-links a\').on(\'click\', function(e){
        var currentAttrValue = jQuery(this).attr(\'href\');
        jQuery(\'.tabs \' + currentAttrValue).show().siblings().hide();
        jQuery(this).parent(\'li\').addClass(\'active\').siblings().removeClass(\'active\');
        e.preventDefault();
    });
};
fireaccordion = function(i){
    jQuery(i).accordion({
        active: false,
        collapsible:true,
        header:"h2",
        heightStyle:"content",
        icons: icons
    });
};
firehandlebars = function(data, template, destination){
  var theTemplateScript = jQuery(template).html();
  var theTemplate = Handlebars.compile(theTemplateScript);
  var theCompiledHtml = theTemplate(data);
  jQuery(destination).html(theCompiledHtml);
};

jQuery(function(){
    // Kill empty menu clicks
    jQuery(\'.linkdisable\').click(function(e){
        e.preventDefault();
        return false;
    });

    jQuery.getJSON(url, function(data){
        feed = data.feed;
    });

    fireaccordion(".accordion1");
    firetabs();

    jQuery(document).ajaxStart(function(){
        //console.log(\'ajaxStart\');
    }).ajaxStop(function(){
        //console.log(\'ajaxStop\');
        firehandlebars(feed, "#app-code-template", "#tab-ontology-basic");
        fireaccordion(".accordion2");
        firetabs();
        fireprism();
        jQuery(\'.ontology-article\').detach().appendTo(\'#tab-ontology-articles\');
        jQuery(\'.ontology-method-trackAction\').detach().appendTo(\'#ontology-method-trackAction\');
        jQuery("#tab-ontology-basic").sieve({ itemSelector: "h2" });
    });
});

Handlebars.registerHelper(\'trackingMethodPage\', function(trackingmethod){
    if(trackingmethod == \'trackState\'){
        return this.gsx$pagename.$t;
    } else {
        return this.gsx$trackingmethodaction.$t;        
    }
});

/*
$.getJSON(url, function(data) {
    var html = \'\';

    var entry = data.feed.entry;
    var modx_platform = "[[*platform]]";

    html += \'<div class="accordion2">\';
    for (var i = 0; i < entry.length; i++) {
        var html_and=\'\',html_ios=\'\',html_list=\'\',page_and=\'\',page_ios=\'\',article_and=\'\',article_ios=\'\';

        var dr = {
            // Tracking Method
            trackingmethod : entry[i][\'gsx$trackingmethod\'][\'$t\'],

            // Basic pageview
            page : {
                node : entry[i][\'gsx$node\'][\'$t\'],
                pagetype : entry[i][\'gsx$pagetype\'][\'$t\'],
                pagename : entry[i][\'gsx$pagename\'][\'$t\'],
                project : entry[i][\'gsx$project\'][\'$t\'],
                channel : entry[i][\'gsx$channel\'][\'$t\'],
                productline : entry[i][\'gsx$productline\'][\'$t\'],
                servicelevel : entry[i][\'gsx$servicelevel\'][\'$t\'],
                feature : entry[i][\'gsx$feature\'][\'$t\'],
                subfeature : entry[i][\'gsx$subfeature\'][\'$t\']
            },

            // Article pageview
            article : {
                articleid : entry[i][\'gsx$articleid\'][\'$t\'],
                articletitle : entry[i][\'gsx$articletitle\'][\'$t\'],
                articletype : entry[i][\'gsx$articletype\'][\'$t\'],
                articleauthorid : entry[i][\'gsx$articleauthorid\'][\'$t\'],
                articleauthorname : entry[i][\'gsx$articleauthorname\'][\'$t\']
            }
        }
        var hiertrim = dr.page.project + \'|\' + dr.page.channel + \'|\' + dr.page.productline + \'|\' + dr.page.servicelevel + \'|\' + dr.page.feature + \'|\' + dr.page.subfeature;
        hiertrim = hiertrim.replace("||"||"|||"||"||||"||"|||||","|");

        html += \'<h2>\' +dr.page.node+ \'</h2><div class="inner-container container-\'+i+\'"><div class="tabs"><ul class="tab-links">\'+html_list+\'</ul><div class="tab-content">\'+page_ios+page_and+\'</div></div></div>\';
    }
    html += "</div>";

    $(\'.ontology-tags\').html(html);
});
*/

</script>


',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'googleAPIhead' => 
      array (
        'fields' => 
        array (
          'id' => 6,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'googleAPIhead',
          'description' => '',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '    <!-- <script type="text/javascript">[[$googleAPIjs]]</script> -->
    <script src="//apis.google.com/js/client.js?onload=checkAuth"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <style type="text/css">[[$googleAPIcss]]</style>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '    <!-- <script type="text/javascript">[[$googleAPIjs]]</script> -->
    <script src="//apis.google.com/js/client.js?onload=checkAuth"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <style type="text/css">[[$googleAPIcss]]</style>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'googleAPIjs' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'googleAPIjs',
          'description' => '',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '      // Your Client ID can be retrieved from your project in the Google
      // Developer Console, https://console.developers.google.com
      var CLIENT_ID = \'1037189624436-sqim1lqho0t3i91554tgkhppc1hoi9ft.apps.googleusercontent.com\';
      var SCOPES = ["https://www.googleapis.com/auth/spreadsheets.readonly"];

      /**
       * Check if current user has authorized this application.
       */
      function checkAuth() {
        gapi.auth.authorize(
          {
            \'client_id\': CLIENT_ID,
            \'scope\': SCOPES.join(\' \'),
            \'immediate\': true
          }, handleAuthResult);
      }

      /**
       * Handle response from authorization server.
       *
       * @param {Object} authResult Authorization result.
       */
      function handleAuthResult(authResult) {
        var authorizeDiv = document.getElementById(\'authorize-div\');
        if (authResult && !authResult.error) {
          // Hide auth UI, then load client library.
          authorizeDiv.style.display = \'none\';
          loadSheetsApi();
        } else {
          // Show auth UI, allowing the user to initiate authorization by
          // clicking authorize button.
          authorizeDiv.style.display = \'inline\';
        }
      }

      /**
       * Initiate auth flow in response to user clicking authorize button.
       *
       * @param {Event} event Button click event.
       */
      function handleAuthClick(event) {
        gapi.auth.authorize(
          {client_id: CLIENT_ID, scope: SCOPES, immediate: false},
          handleAuthResult);
        return false;
      }

      /**
       * Load Sheets API client library.
       */
      function loadSheetsApi() {
        var discoveryUrl = \'https://sheets.googleapis.com/$discovery/rest?version=v4\';
        gapi.client.load(discoveryUrl).then(listMajors);
      }

      /**
       * Print the names and majors of students in a sample spreadsheet:
       * https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
       */
      function listMajors() {
        gapi.client.sheets.spreadsheets.values.get({
          spreadsheetId: \'1HIb5ElOwYoDAglociumlPD7kUyiii8at_ZQI_NTmx7g\',
          range: \'QA!A:E\',
        }).then(function(response) {
            var table = $(\'<table></table>\').addClass(\'newDataTable cell-border\');
            var tablehead = $(\'<thead></thead>\');
            var tablebody = $(\'<tbody></tbody>\');
            var tablefoot = $(\'<tfoot></tfoot>\');
            var tablerow = $(\'<tr></tr>\');

            table.append(tablehead, tablebody, tablefoot);

            $(\'#output\').append(table);
          
            var range = response.result;
            var columnCount = range.values[0].length;
          
            if (range.values.length > 0) {
                for (var i = 0; i < columnCount; i++) {
                    tablehead.append(\'<th>\' + range.values[0][i] + \'</th>\');
                    tablefoot.append(\'<th>\' + range.values[0][i] + \'</th>\');
                }

                for (i = 1; i < range.values.length; i++) {
                    var thisrow = tablebody.append(tablerow);
                    for (j = 0; j < range.values[i].length; j++) {
                        thisrow.append(\'<td>\' + range.values[i][j] + \'</td>\')
                    }
                }

            } else {
                appendPre(\'No data found.\');
            }
            table.DataTable({"ordering": false});
        }, function(response) {
          appendPre(\'Error: \' + response.result.error.message);
        });
      }

      /**
       * Append a pre element to the body containing the given message
       * as its text node.
       *
       * @param {string} message Text to be placed in pre element.
       */
      function appendPre(message) {
        var pre = document.getElementById(\'output\');
        var textContent = document.createTextNode(message + \'\\n\');
        pre.appendChild(textContent);
      }
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '      // Your Client ID can be retrieved from your project in the Google
      // Developer Console, https://console.developers.google.com
      var CLIENT_ID = \'1037189624436-sqim1lqho0t3i91554tgkhppc1hoi9ft.apps.googleusercontent.com\';
      var SCOPES = ["https://www.googleapis.com/auth/spreadsheets.readonly"];

      /**
       * Check if current user has authorized this application.
       */
      function checkAuth() {
        gapi.auth.authorize(
          {
            \'client_id\': CLIENT_ID,
            \'scope\': SCOPES.join(\' \'),
            \'immediate\': true
          }, handleAuthResult);
      }

      /**
       * Handle response from authorization server.
       *
       * @param {Object} authResult Authorization result.
       */
      function handleAuthResult(authResult) {
        var authorizeDiv = document.getElementById(\'authorize-div\');
        if (authResult && !authResult.error) {
          // Hide auth UI, then load client library.
          authorizeDiv.style.display = \'none\';
          loadSheetsApi();
        } else {
          // Show auth UI, allowing the user to initiate authorization by
          // clicking authorize button.
          authorizeDiv.style.display = \'inline\';
        }
      }

      /**
       * Initiate auth flow in response to user clicking authorize button.
       *
       * @param {Event} event Button click event.
       */
      function handleAuthClick(event) {
        gapi.auth.authorize(
          {client_id: CLIENT_ID, scope: SCOPES, immediate: false},
          handleAuthResult);
        return false;
      }

      /**
       * Load Sheets API client library.
       */
      function loadSheetsApi() {
        var discoveryUrl = \'https://sheets.googleapis.com/$discovery/rest?version=v4\';
        gapi.client.load(discoveryUrl).then(listMajors);
      }

      /**
       * Print the names and majors of students in a sample spreadsheet:
       * https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
       */
      function listMajors() {
        gapi.client.sheets.spreadsheets.values.get({
          spreadsheetId: \'1HIb5ElOwYoDAglociumlPD7kUyiii8at_ZQI_NTmx7g\',
          range: \'QA!A:E\',
        }).then(function(response) {
            var table = $(\'<table></table>\').addClass(\'newDataTable cell-border\');
            var tablehead = $(\'<thead></thead>\');
            var tablebody = $(\'<tbody></tbody>\');
            var tablefoot = $(\'<tfoot></tfoot>\');
            var tablerow = $(\'<tr></tr>\');

            table.append(tablehead, tablebody, tablefoot);

            $(\'#output\').append(table);
          
            var range = response.result;
            var columnCount = range.values[0].length;
          
            if (range.values.length > 0) {
                for (var i = 0; i < columnCount; i++) {
                    tablehead.append(\'<th>\' + range.values[0][i] + \'</th>\');
                    tablefoot.append(\'<th>\' + range.values[0][i] + \'</th>\');
                }

                for (i = 1; i < range.values.length; i++) {
                    var thisrow = tablebody.append(tablerow);
                    for (j = 0; j < range.values[i].length; j++) {
                        thisrow.append(\'<td>\' + range.values[i][j] + \'</td>\')
                    }
                }

            } else {
                appendPre(\'No data found.\');
            }
            table.DataTable({"ordering": false});
        }, function(response) {
          appendPre(\'Error: \' + response.result.error.message);
        });
      }

      /**
       * Append a pre element to the body containing the given message
       * as its text node.
       *
       * @param {string} message Text to be placed in pre element.
       */
      function appendPre(message) {
        var pre = document.getElementById(\'output\');
        var textContent = document.createTextNode(message + \'\\n\');
        pre.appendChild(textContent);
      }
',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'googleAPIcss' => 
      array (
        'fields' => 
        array (
          'id' => 13,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'googleAPIcss',
          'description' => '',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/*
 *  File:         demo_table.css
 *  CVS:          $Id$
 *  Description:  CSS descriptions for DataTables demo pages
 *  Author:       Allan Jardine
 *  Created:      Tue May 12 06:47:22 BST 2009
 *  Modified:     $Date$ by $Author$
 *  Language:     CSS
 *  Project:      DataTables
 *
 *  Copyright 2009 Allan Jardine. All Rights Reserved.
 *
 * ***************************************************************************
 * DESCRIPTION
 *
 * The styles given here are suitable for the demos that are used with the standard DataTables
 * distribution (see www.datatables.net). You will most likely wish to modify these styles to
 * meet the layout requirements of your site.
 *
 * Common issues:
 *   \'full_numbers\' pagination - I use an extra selector on the body tag to ensure that there is
 *     no conflict between the two pagination types. If you want to use full_numbers pagination
 *     ensure that you either have "example_alt_pagination" as a body class name, or better yet,
 *     modify that selector.
 *   Note that the path used for Images is relative. All images are by default located in
 *     ../images/ - relative to this CSS file.
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables features
 */

.dataTables_wrapper {
	position: relative;
	clear: both;
	zoom: 1; /* Feeling sorry for IE */
}

.dataTables_processing {
	position: absolute;
	top: 50%;
	left: 50%;
	width: 250px;
	height: 30px;
	margin-left: -125px;
	margin-top: -15px;
	padding: 14px 0 2px 0;
	border: 1px solid #ddd;
	text-align: center;
	color: #999;
	font-size: 14px;
	background-color: white;
}

.dataTables_length {
	width: 40%;
	float: left;
}

.dataTables_filter {
	width: 50%;
	float: right;
	text-align: right;
}

.dataTables_info {
	width: 60%;
	float: left;
}

.dataTables_paginate {
	float: right;
	text-align: right;
}

/* Pagination nested */
.paginate_disabled_previous, .paginate_enabled_previous,
.paginate_disabled_next, .paginate_enabled_next {
	height: 19px;
	float: left;
	cursor: pointer;
	*cursor: hand;
	color: #111 !important;
}
.paginate_disabled_previous:hover, .paginate_enabled_previous:hover,
.paginate_disabled_next:hover, .paginate_enabled_next:hover {
	text-decoration: none !important;
}
.paginate_disabled_previous:active, .paginate_enabled_previous:active,
.paginate_disabled_next:active, .paginate_enabled_next:active {
	outline: none;
}

.paginate_disabled_previous,
.paginate_disabled_next {
	color: #666 !important;
}
.paginate_disabled_previous, .paginate_enabled_previous {
	padding-left: 23px;
}
.paginate_disabled_next, .paginate_enabled_next {
	padding-right: 23px;
	margin-left: 10px;
}

.paginate_disabled_previous {
	background: url(\'../images/back_disabled.png\') no-repeat top left;
}

.paginate_enabled_previous {
	background: url(\'../images/back_enabled.png\') no-repeat top left;
}
.paginate_enabled_previous:hover {
	background: url(\'../images/back_enabled_hover.png\') no-repeat top left;
}

.paginate_disabled_next {
	background: url(\'../images/forward_disabled.png\') no-repeat top right;
}

.paginate_enabled_next {
	background: url(\'../images/forward_enabled.png\') no-repeat top right;
}
.paginate_enabled_next:hover {
	background: url(\'../images/forward_enabled_hover.png\') no-repeat top right;
}



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables display
 */
table.display {
	margin: 0 auto;
	clear: both;
	width: 100%;
	
	/* Note Firefox 3.5 and before have a bug with border-collapse
	 * ( https://bugzilla.mozilla.org/show%5Fbug.cgi?id=155955 ) 
	 * border-spacing: 0; is one possible option. Conditional-css.com is
	 * useful for this kind of thing
	 *
	 * Further note IE 6/7 has problems when calculating widths with border width.
	 * It subtracts one px relative to the other browsers from the first column, and
	 * adds one to the end...
	 *
	 * If you want that effect I\'d suggest setting a border-top/left on th/td\'s and 
	 * then filling in the gaps with other borders.
	 */
}

table.display thead th {
	padding: 3px 18px 3px 10px;
	border-bottom: 1px solid black;
	font-weight: bold;
	cursor: pointer;
	* cursor: hand;
}

table.display tfoot th {
	padding: 3px 18px 3px 10px;
	border-top: 1px solid black;
	font-weight: bold;
}

table.display tr.heading2 td {
	border-bottom: 1px solid #aaa;
}

table.display td {
	padding: 3px 10px;
}

table.display td.center {
	text-align: center;
}



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables sorting
 */

.sorting_asc {
	background: url(\'../images/sort_asc.png\') no-repeat center right;
}

.sorting_desc {
	background: url(\'../images/sort_desc.png\') no-repeat center right;
}

.sorting {
	background: url(\'../images/sort_both.png\') no-repeat center right;
}

.sorting_asc_disabled {
	background: url(\'../images/sort_asc_disabled.png\') no-repeat center right;
}

.sorting_desc_disabled {
	background: url(\'../images/sort_desc_disabled.png\') no-repeat center right;
}
 
table.display thead th:active,
table.display thead td:active {
	outline: none;
}




/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables row classes
 */
table.display tr.odd.gradeA {
	background-color: #ddffdd;
}

table.display tr.even.gradeA {
	background-color: #eeffee;
}

table.display tr.odd.gradeC {
	background-color: #ddddff;
}

table.display tr.even.gradeC {
	background-color: #eeeeff;
}

table.display tr.odd.gradeX {
	background-color: #ffdddd;
}

table.display tr.even.gradeX {
	background-color: #ffeeee;
}

table.display tr.odd.gradeU {
	background-color: #ddd;
}

table.display tr.even.gradeU {
	background-color: #eee;
}


tr.odd {
	background-color: #E2E4FF;
}

tr.even {
	background-color: white;
}





/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Misc
 */
.dataTables_scroll {
	clear: both;
}

.dataTables_scrollBody {
	*margin-top: -1px;
	-webkit-overflow-scrolling: touch;
}

.top, .bottom {
	padding: 15px;
	background-color: #F5F5F5;
	border: 1px solid #CCCCCC;
}

.top .dataTables_info {
	float: none;
}

.clear {
	clear: both;
}

.dataTables_empty {
	text-align: center;
}

tfoot input {
	margin: 0.5em 0;
	width: 100%;
	color: #444;
}

tfoot input.search_init {
	color: #999;
}

td.group {
	background-color: #d1cfd0;
	border-bottom: 2px solid #A19B9E;
	border-top: 2px solid #A19B9E;
}

td.details {
	background-color: #d1cfd0;
	border: 2px solid #A19B9E;
}


.example_alt_pagination div.dataTables_info {
	width: 40%;
}

.paging_full_numbers {
	width: 400px;
	height: 22px;
	line-height: 22px;
}

.paging_full_numbers a:active {
	outline: none
}

.paging_full_numbers a:hover {
	text-decoration: none;
}

.paging_full_numbers a.paginate_button,
 	.paging_full_numbers a.paginate_active {
	border: 1px solid #aaa;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	padding: 2px 5px;
	margin: 0 3px;
	cursor: pointer;
	*cursor: hand;
	color: #333 !important;
}

.paging_full_numbers a.paginate_button {
	background-color: #ddd;
}

.paging_full_numbers a.paginate_button:hover {
	background-color: #ccc;
	text-decoration: none !important;
}

.paging_full_numbers a.paginate_active {
	background-color: #99B3FF;
}

table.display tr.even.row_selected td {
	background-color: #B0BED9;
}

table.display tr.odd.row_selected td {
	background-color: #9FAFD1;
}


/*
 * Sorting classes for columns
 */
/* For the standard odd/even */
tr.odd td.sorting_1 {
	background-color: #D3D6FF;
}

tr.odd td.sorting_2 {
	background-color: #DADCFF;
}

tr.odd td.sorting_3 {
	background-color: #E0E2FF;
}

tr.even td.sorting_1 {
	background-color: #EAEBFF;
}

tr.even td.sorting_2 {
	background-color: #F2F3FF;
}

tr.even td.sorting_3 {
	background-color: #F9F9FF;
}


/* For the Conditional-CSS grading rows */
/*
 	Colour calculations (based off the main row colours)
  Level 1:
		dd > c4
		ee > d5
	Level 2:
	  dd > d1
	  ee > e2
 */
tr.odd.gradeA td.sorting_1 {
	background-color: #c4ffc4;
}

tr.odd.gradeA td.sorting_2 {
	background-color: #d1ffd1;
}

tr.odd.gradeA td.sorting_3 {
	background-color: #d1ffd1;
}

tr.even.gradeA td.sorting_1 {
	background-color: #d5ffd5;
}

tr.even.gradeA td.sorting_2 {
	background-color: #e2ffe2;
}

tr.even.gradeA td.sorting_3 {
	background-color: #e2ffe2;
}

tr.odd.gradeC td.sorting_1 {
	background-color: #c4c4ff;
}

tr.odd.gradeC td.sorting_2 {
	background-color: #d1d1ff;
}

tr.odd.gradeC td.sorting_3 {
	background-color: #d1d1ff;
}

tr.even.gradeC td.sorting_1 {
	background-color: #d5d5ff;
}

tr.even.gradeC td.sorting_2 {
	background-color: #e2e2ff;
}

tr.even.gradeC td.sorting_3 {
	background-color: #e2e2ff;
}

tr.odd.gradeX td.sorting_1 {
	background-color: #ffc4c4;
}

tr.odd.gradeX td.sorting_2 {
	background-color: #ffd1d1;
}

tr.odd.gradeX td.sorting_3 {
	background-color: #ffd1d1;
}

tr.even.gradeX td.sorting_1 {
	background-color: #ffd5d5;
}

tr.even.gradeX td.sorting_2 {
	background-color: #ffe2e2;
}

tr.even.gradeX td.sorting_3 {
	background-color: #ffe2e2;
}

tr.odd.gradeU td.sorting_1 {
	background-color: #c4c4c4;
}

tr.odd.gradeU td.sorting_2 {
	background-color: #d1d1d1;
}

tr.odd.gradeU td.sorting_3 {
	background-color: #d1d1d1;
}

tr.even.gradeU td.sorting_1 {
	background-color: #d5d5d5;
}

tr.even.gradeU td.sorting_2 {
	background-color: #e2e2e2;
}

tr.even.gradeU td.sorting_3 {
	background-color: #e2e2e2;
}


/*
 * Row highlighting example
 */
.ex_highlight #example tbody tr.even:hover, #example tbody tr.even td.highlighted {
	background-color: #ECFFB3;
}

.ex_highlight #example tbody tr.odd:hover, #example tbody tr.odd td.highlighted {
	background-color: #E6FF99;
}

.ex_highlight_row #example tr.even:hover {
	background-color: #ECFFB3;
}

.ex_highlight_row #example tr.even:hover td.sorting_1 {
	background-color: #DDFF75;
}

.ex_highlight_row #example tr.even:hover td.sorting_2 {
	background-color: #E7FF9E;
}

.ex_highlight_row #example tr.even:hover td.sorting_3 {
	background-color: #E2FF89;
}

.ex_highlight_row #example tr.odd:hover {
	background-color: #E6FF99;
}

.ex_highlight_row #example tr.odd:hover td.sorting_1 {
	background-color: #D6FF5C;
}

.ex_highlight_row #example tr.odd:hover td.sorting_2 {
	background-color: #E0FF84;
}

.ex_highlight_row #example tr.odd:hover td.sorting_3 {
	background-color: #DBFF70;
}


/*
 * KeyTable
 */
table.KeyTable td {
	border: 3px solid transparent;
}

table.KeyTable td.focus {
	border: 3px solid #3366FF;
}

table.display tr.gradeA {
	background-color: #eeffee;
}

table.display tr.gradeC {
	background-color: #ddddff;
}

table.display tr.gradeX {
	background-color: #ffdddd;
}

table.display tr.gradeU {
	background-color: #ddd;
}',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '/*
 *  File:         demo_table.css
 *  CVS:          $Id$
 *  Description:  CSS descriptions for DataTables demo pages
 *  Author:       Allan Jardine
 *  Created:      Tue May 12 06:47:22 BST 2009
 *  Modified:     $Date$ by $Author$
 *  Language:     CSS
 *  Project:      DataTables
 *
 *  Copyright 2009 Allan Jardine. All Rights Reserved.
 *
 * ***************************************************************************
 * DESCRIPTION
 *
 * The styles given here are suitable for the demos that are used with the standard DataTables
 * distribution (see www.datatables.net). You will most likely wish to modify these styles to
 * meet the layout requirements of your site.
 *
 * Common issues:
 *   \'full_numbers\' pagination - I use an extra selector on the body tag to ensure that there is
 *     no conflict between the two pagination types. If you want to use full_numbers pagination
 *     ensure that you either have "example_alt_pagination" as a body class name, or better yet,
 *     modify that selector.
 *   Note that the path used for Images is relative. All images are by default located in
 *     ../images/ - relative to this CSS file.
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables features
 */

.dataTables_wrapper {
	position: relative;
	clear: both;
	zoom: 1; /* Feeling sorry for IE */
}

.dataTables_processing {
	position: absolute;
	top: 50%;
	left: 50%;
	width: 250px;
	height: 30px;
	margin-left: -125px;
	margin-top: -15px;
	padding: 14px 0 2px 0;
	border: 1px solid #ddd;
	text-align: center;
	color: #999;
	font-size: 14px;
	background-color: white;
}

.dataTables_length {
	width: 40%;
	float: left;
}

.dataTables_filter {
	width: 50%;
	float: right;
	text-align: right;
}

.dataTables_info {
	width: 60%;
	float: left;
}

.dataTables_paginate {
	float: right;
	text-align: right;
}

/* Pagination nested */
.paginate_disabled_previous, .paginate_enabled_previous,
.paginate_disabled_next, .paginate_enabled_next {
	height: 19px;
	float: left;
	cursor: pointer;
	*cursor: hand;
	color: #111 !important;
}
.paginate_disabled_previous:hover, .paginate_enabled_previous:hover,
.paginate_disabled_next:hover, .paginate_enabled_next:hover {
	text-decoration: none !important;
}
.paginate_disabled_previous:active, .paginate_enabled_previous:active,
.paginate_disabled_next:active, .paginate_enabled_next:active {
	outline: none;
}

.paginate_disabled_previous,
.paginate_disabled_next {
	color: #666 !important;
}
.paginate_disabled_previous, .paginate_enabled_previous {
	padding-left: 23px;
}
.paginate_disabled_next, .paginate_enabled_next {
	padding-right: 23px;
	margin-left: 10px;
}

.paginate_disabled_previous {
	background: url(\'../images/back_disabled.png\') no-repeat top left;
}

.paginate_enabled_previous {
	background: url(\'../images/back_enabled.png\') no-repeat top left;
}
.paginate_enabled_previous:hover {
	background: url(\'../images/back_enabled_hover.png\') no-repeat top left;
}

.paginate_disabled_next {
	background: url(\'../images/forward_disabled.png\') no-repeat top right;
}

.paginate_enabled_next {
	background: url(\'../images/forward_enabled.png\') no-repeat top right;
}
.paginate_enabled_next:hover {
	background: url(\'../images/forward_enabled_hover.png\') no-repeat top right;
}



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables display
 */
table.display {
	margin: 0 auto;
	clear: both;
	width: 100%;
	
	/* Note Firefox 3.5 and before have a bug with border-collapse
	 * ( https://bugzilla.mozilla.org/show%5Fbug.cgi?id=155955 ) 
	 * border-spacing: 0; is one possible option. Conditional-css.com is
	 * useful for this kind of thing
	 *
	 * Further note IE 6/7 has problems when calculating widths with border width.
	 * It subtracts one px relative to the other browsers from the first column, and
	 * adds one to the end...
	 *
	 * If you want that effect I\'d suggest setting a border-top/left on th/td\'s and 
	 * then filling in the gaps with other borders.
	 */
}

table.display thead th {
	padding: 3px 18px 3px 10px;
	border-bottom: 1px solid black;
	font-weight: bold;
	cursor: pointer;
	* cursor: hand;
}

table.display tfoot th {
	padding: 3px 18px 3px 10px;
	border-top: 1px solid black;
	font-weight: bold;
}

table.display tr.heading2 td {
	border-bottom: 1px solid #aaa;
}

table.display td {
	padding: 3px 10px;
}

table.display td.center {
	text-align: center;
}



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables sorting
 */

.sorting_asc {
	background: url(\'../images/sort_asc.png\') no-repeat center right;
}

.sorting_desc {
	background: url(\'../images/sort_desc.png\') no-repeat center right;
}

.sorting {
	background: url(\'../images/sort_both.png\') no-repeat center right;
}

.sorting_asc_disabled {
	background: url(\'../images/sort_asc_disabled.png\') no-repeat center right;
}

.sorting_desc_disabled {
	background: url(\'../images/sort_desc_disabled.png\') no-repeat center right;
}
 
table.display thead th:active,
table.display thead td:active {
	outline: none;
}




/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * DataTables row classes
 */
table.display tr.odd.gradeA {
	background-color: #ddffdd;
}

table.display tr.even.gradeA {
	background-color: #eeffee;
}

table.display tr.odd.gradeC {
	background-color: #ddddff;
}

table.display tr.even.gradeC {
	background-color: #eeeeff;
}

table.display tr.odd.gradeX {
	background-color: #ffdddd;
}

table.display tr.even.gradeX {
	background-color: #ffeeee;
}

table.display tr.odd.gradeU {
	background-color: #ddd;
}

table.display tr.even.gradeU {
	background-color: #eee;
}


tr.odd {
	background-color: #E2E4FF;
}

tr.even {
	background-color: white;
}





/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Misc
 */
.dataTables_scroll {
	clear: both;
}

.dataTables_scrollBody {
	*margin-top: -1px;
	-webkit-overflow-scrolling: touch;
}

.top, .bottom {
	padding: 15px;
	background-color: #F5F5F5;
	border: 1px solid #CCCCCC;
}

.top .dataTables_info {
	float: none;
}

.clear {
	clear: both;
}

.dataTables_empty {
	text-align: center;
}

tfoot input {
	margin: 0.5em 0;
	width: 100%;
	color: #444;
}

tfoot input.search_init {
	color: #999;
}

td.group {
	background-color: #d1cfd0;
	border-bottom: 2px solid #A19B9E;
	border-top: 2px solid #A19B9E;
}

td.details {
	background-color: #d1cfd0;
	border: 2px solid #A19B9E;
}


.example_alt_pagination div.dataTables_info {
	width: 40%;
}

.paging_full_numbers {
	width: 400px;
	height: 22px;
	line-height: 22px;
}

.paging_full_numbers a:active {
	outline: none
}

.paging_full_numbers a:hover {
	text-decoration: none;
}

.paging_full_numbers a.paginate_button,
 	.paging_full_numbers a.paginate_active {
	border: 1px solid #aaa;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	padding: 2px 5px;
	margin: 0 3px;
	cursor: pointer;
	*cursor: hand;
	color: #333 !important;
}

.paging_full_numbers a.paginate_button {
	background-color: #ddd;
}

.paging_full_numbers a.paginate_button:hover {
	background-color: #ccc;
	text-decoration: none !important;
}

.paging_full_numbers a.paginate_active {
	background-color: #99B3FF;
}

table.display tr.even.row_selected td {
	background-color: #B0BED9;
}

table.display tr.odd.row_selected td {
	background-color: #9FAFD1;
}


/*
 * Sorting classes for columns
 */
/* For the standard odd/even */
tr.odd td.sorting_1 {
	background-color: #D3D6FF;
}

tr.odd td.sorting_2 {
	background-color: #DADCFF;
}

tr.odd td.sorting_3 {
	background-color: #E0E2FF;
}

tr.even td.sorting_1 {
	background-color: #EAEBFF;
}

tr.even td.sorting_2 {
	background-color: #F2F3FF;
}

tr.even td.sorting_3 {
	background-color: #F9F9FF;
}


/* For the Conditional-CSS grading rows */
/*
 	Colour calculations (based off the main row colours)
  Level 1:
		dd > c4
		ee > d5
	Level 2:
	  dd > d1
	  ee > e2
 */
tr.odd.gradeA td.sorting_1 {
	background-color: #c4ffc4;
}

tr.odd.gradeA td.sorting_2 {
	background-color: #d1ffd1;
}

tr.odd.gradeA td.sorting_3 {
	background-color: #d1ffd1;
}

tr.even.gradeA td.sorting_1 {
	background-color: #d5ffd5;
}

tr.even.gradeA td.sorting_2 {
	background-color: #e2ffe2;
}

tr.even.gradeA td.sorting_3 {
	background-color: #e2ffe2;
}

tr.odd.gradeC td.sorting_1 {
	background-color: #c4c4ff;
}

tr.odd.gradeC td.sorting_2 {
	background-color: #d1d1ff;
}

tr.odd.gradeC td.sorting_3 {
	background-color: #d1d1ff;
}

tr.even.gradeC td.sorting_1 {
	background-color: #d5d5ff;
}

tr.even.gradeC td.sorting_2 {
	background-color: #e2e2ff;
}

tr.even.gradeC td.sorting_3 {
	background-color: #e2e2ff;
}

tr.odd.gradeX td.sorting_1 {
	background-color: #ffc4c4;
}

tr.odd.gradeX td.sorting_2 {
	background-color: #ffd1d1;
}

tr.odd.gradeX td.sorting_3 {
	background-color: #ffd1d1;
}

tr.even.gradeX td.sorting_1 {
	background-color: #ffd5d5;
}

tr.even.gradeX td.sorting_2 {
	background-color: #ffe2e2;
}

tr.even.gradeX td.sorting_3 {
	background-color: #ffe2e2;
}

tr.odd.gradeU td.sorting_1 {
	background-color: #c4c4c4;
}

tr.odd.gradeU td.sorting_2 {
	background-color: #d1d1d1;
}

tr.odd.gradeU td.sorting_3 {
	background-color: #d1d1d1;
}

tr.even.gradeU td.sorting_1 {
	background-color: #d5d5d5;
}

tr.even.gradeU td.sorting_2 {
	background-color: #e2e2e2;
}

tr.even.gradeU td.sorting_3 {
	background-color: #e2e2e2;
}


/*
 * Row highlighting example
 */
.ex_highlight #example tbody tr.even:hover, #example tbody tr.even td.highlighted {
	background-color: #ECFFB3;
}

.ex_highlight #example tbody tr.odd:hover, #example tbody tr.odd td.highlighted {
	background-color: #E6FF99;
}

.ex_highlight_row #example tr.even:hover {
	background-color: #ECFFB3;
}

.ex_highlight_row #example tr.even:hover td.sorting_1 {
	background-color: #DDFF75;
}

.ex_highlight_row #example tr.even:hover td.sorting_2 {
	background-color: #E7FF9E;
}

.ex_highlight_row #example tr.even:hover td.sorting_3 {
	background-color: #E2FF89;
}

.ex_highlight_row #example tr.odd:hover {
	background-color: #E6FF99;
}

.ex_highlight_row #example tr.odd:hover td.sorting_1 {
	background-color: #D6FF5C;
}

.ex_highlight_row #example tr.odd:hover td.sorting_2 {
	background-color: #E0FF84;
}

.ex_highlight_row #example tr.odd:hover td.sorting_3 {
	background-color: #DBFF70;
}


/*
 * KeyTable
 */
table.KeyTable td {
	border: 3px solid transparent;
}

table.KeyTable td.focus {
	border: 3px solid #3366FF;
}

table.display tr.gradeA {
	background-color: #eeffee;
}

table.display tr.gradeC {
	background-color: #ddddff;
}

table.display tr.gradeX {
	background-color: #ffdddd;
}

table.display tr.gradeU {
	background-color: #ddd;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'mainHeader' => 
      array (
        'fields' => 
        array (
          'id' => 16,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'mainHeader',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '    <div class="container">
        <h1 class="header-heading"><a href="[[~2]]" title="CBSi" class="logo">CBSi</a></h1>
    </div>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '    <div class="container">
        <h1 class="header-heading"><a href="[[~2]]" title="CBSi" class="logo">CBSi</a></h1>
    </div>
',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'mainNavbar' => 
      array (
        'fields' => 
        array (
          'id' => 15,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'mainNavbar',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '    <div class="container">
        <nav>[[Wayfinder? &startId=`0`]]</nav>
    </div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '    <div class="container">
        <nav>[[Wayfinder? &startId=`0`]]</nav>
    </div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'Wayfinder' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Wayfinder',
          'description' => 'Wayfinder for MODx Revolution 2.0.0-beta-5 and later.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'prop_wayfinder.level_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Depth (number of levels) to build the menu from. 0 goes through all levels.',
              'area' => '',
              'area_trans' => '',
            ),
            'includeDocs' => 
            array (
              'name' => 'includeDocs',
              'desc' => 'prop_wayfinder.includeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will limit the output to only the documents specified in this parameter. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'excludeDocs' => 
            array (
              'name' => 'excludeDocs',
              'desc' => 'prop_wayfinder.excludeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will remove the documents specified in this parameter from the output. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'contexts' => 
            array (
              'name' => 'contexts',
              'desc' => 'prop_wayfinder.contexts_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Specify the contexts for the Resources that will be loaded in this menu. Useful when used with startId at 0 to show all first-level items. Note: This will increase load times a bit, but if you set cacheResults to 1, that will offset the load time.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheResults' => 
            array (
              'name' => 'cacheResults',
              'desc' => 'prop_wayfinder.cacheResults_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Cache the generated menu to the MODX Resource cache. Setting this to 1 will speed up the loading of your menus.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'prop_wayfinder.cacheTime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 3600,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The number of seconds to store the cached menu, if cacheResults is 1. Set to 0 to store indefinitely until cache is manually cleared.',
              'area' => '',
              'area_trans' => '',
            ),
            'ph' => 
            array (
              'name' => 'ph',
              'desc' => 'prop_wayfinder.ph_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'To display send the output of Wayfinder to a placeholder set the ph parameter equal to the name of the desired placeholder. All output including the debugging (if on) will be sent to the placeholder specified.',
              'area' => '',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_wayfinder.debug_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'With the debug parameter set to 1, Wayfinder will output information on how each Resource was processed.',
              'area' => '',
              'area_trans' => '',
            ),
            'ignoreHidden' => 
            array (
              'name' => 'ignoreHidden',
              'desc' => 'prop_wayfinder.ignoreHidden_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The ignoreHidden parameter allows Wayfinder to ignore the display in menu flag that can be set for each document. With this parameter set to 1, all Resources will be displayed regardless of the Display in Menu flag.',
              'area' => '',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'prop_wayfinder.hideSubMenus_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The hideSubMenus parameter will remove all non-active submenus from the Wayfinder output if set to 1. This parameter only works if multiple levels are being displayed.',
              'area' => '',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'prop_wayfinder.useWeblinkUrl_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => ' If WebLinks are used in the output, Wayfinder will output the link specified in the WebLink instead of the normal MODx link. To use the standard display of WebLinks (like any other Resource) set this to 0.',
              'area' => '',
              'area_trans' => '',
            ),
            'fullLink' => 
            array (
              'name' => 'fullLink',
              'desc' => 'prop_wayfinder.fullLink_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set to 1, will display the entire, absolute URL in the link. (It is recommended to use scheme instead.)',
              'area' => '',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'prop_wayfinder.scheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.relative',
                  'value' => '',
                  'name' => 'Relative',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.absolute',
                  'value' => 'abs',
                  'name' => 'Absolute',
                ),
                2 => 
                array (
                  'text' => 'prop_wayfinder.full',
                  'value' => 'full',
                  'name' => 'Full',
                ),
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Determines how URLs are generated for each link. Set to "abs" to show the absolute URL, "full" to show the full URL, and blank to use the relative URL. Defaults to relative.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortOrder' => 
            array (
              'name' => 'sortOrder',
              'desc' => 'prop_wayfinder.sortOrder_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.ascending',
                  'value' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Allows the menu to be sorted in either ascending or descending order.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'prop_wayfinder.sortBy_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menuindex',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Sorts the output by any of the Resource fields on a level by level basis. This means that each submenu will be sorted independently of all other submenus at the same level. Random will sort the output differently every time the page is loaded if the snippet is called uncached.',
              'area' => '',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'prop_wayfinder.limit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Causes Wayfinder to only process the number of items specified per level.',
              'area' => '',
              'area_trans' => '',
            ),
            'cssTpl' => 
            array (
              'name' => 'cssTpl',
              'desc' => 'prop_wayfinder.cssTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing a link to a style sheet or style information to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'jsTpl' => 
            array (
              'name' => 'jsTpl',
              'desc' => 'prop_wayfinder.jsTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing some Javascript to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'prop_wayfinder.rowIdPrefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set, Wayfinder will replace the id placeholder with a unique id consisting of the specified prefix plus the Resource id.',
              'area' => '',
              'area_trans' => '',
            ),
            'textOfLinks' => 
            array (
              'name' => 'textOfLinks',
              'desc' => 'prop_wayfinder.textOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menutitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktext placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'titleOfLinks' => 
            array (
              'name' => 'titleOfLinks',
              'desc' => 'prop_wayfinder.titleOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'pagetitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktitle placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'prop_wayfinder.displayStart_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Show the document as referenced by startId in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'prop_wayfinder.firstClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'first',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the first item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'prop_wayfinder.lastClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'last',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the last item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'prop_wayfinder.hereClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'active',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the items showing where you are, all the way up the chain.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'prop_wayfinder.parentClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for menu items that are a container and have children.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'prop_wayfinder.rowClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting each output row.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'prop_wayfinder.outerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the outer template.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'prop_wayfinder.innerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the inner template.',
              'area' => '',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'prop_wayfinder.levelClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting every output row level. The level number will be added to the specified class (level1, level2, level3 etc if you specified "level").',
              'area' => '',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'prop_wayfinder.selfClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the current item.',
              'area' => '',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'prop_wayfinder.webLinkClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for weblink items.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerTpl' => 
            array (
              'name' => 'outerTpl',
              'desc' => 'prop_wayfinder.outerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the outer most container; if not included, a string including "<ul>[[+wf.wrapper]]</ul>" is assumed.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowTpl' => 
            array (
              'name' => 'rowTpl',
              'desc' => 'prop_wayfinder.rowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the regular row items.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowTpl' => 
            array (
              'name' => 'parentRowTpl',
              'desc' => 'prop_wayfinder.parentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for any Resource that is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowHereTpl' => 
            array (
              'name' => 'parentRowHereTpl',
              'desc' => 'prop_wayfinder.parentRowHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereTpl' => 
            array (
              'name' => 'hereTpl',
              'desc' => 'prop_wayfinder.hereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerTpl' => 
            array (
              'name' => 'innerTpl',
              'desc' => 'prop_wayfinder.innerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for each submenu. If no innerTpl is specified the outerTpl is used in its place.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerRowTpl' => 
            array (
              'name' => 'innerRowTpl',
              'desc' => 'prop_wayfinder.innerRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the row items in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerHereTpl' => 
            array (
              'name' => 'innerHereTpl',
              'desc' => 'prop_wayfinder.innerHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'activeParentRowTpl' => 
            array (
              'name' => 'activeParentRowTpl',
              'desc' => 'prop_wayfinder.activeParentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for items that are containers, have children and are currently active in the tree.',
              'area' => '',
              'area_trans' => '',
            ),
            'categoryFoldersTpl' => 
            array (
              'name' => 'categoryFoldersTpl',
              'desc' => 'prop_wayfinder.categoryFoldersTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for category folders. Category folders are determined by setting the template to blank or by setting the link attributes field to rel="category".',
              'area' => '',
              'area_trans' => '',
            ),
            'startItemTpl' => 
            array (
              'name' => 'startItemTpl',
              'desc' => 'prop_wayfinder.startItemTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the start item, if enabled via the &displayStart parameter. Note: the default template shows the start item but does not link it. If you do not need a link, a class can be applied to the default template using the parameter &firstClass=`className`.',
              'area' => '',
              'area_trans' => '',
            ),
            'permissions' => 
            array (
              'name' => 'permissions',
              'desc' => 'prop_wayfinder.permissions_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'list',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Will check for a permission on the Resource. Defaults to "list" - set to blank to skip normal permissions checks.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'prop_wayfinder.hereId_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set, will change the "here" Resource to this ID. Defaults to the currently active Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'prop_wayfinder.where_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A JSON object for where conditions for all items selected in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'prop_wayfinder.templates_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A comma-separated list of Template IDs to restrict selected Resources to.',
              'area' => '',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'prop_wayfinder.previewunpublished_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set to Yes, if you are logged into the mgr and have the view_unpublished permission, it will allow previewing of unpublished resources in your menus in the front-end.',
              'area' => '',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
      'platform' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'checkbox',
          'name' => 'platform',
          'caption' => 'Platform',
          'description' => '',
          'editor_type' => 0,
          'category' => 6,
          'locked' => false,
          'elements' => 'iOS||Android',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'columns' => '1',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'siteCode' => 
      array (
        'fields' => 
        array (
          'id' => 11,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'siteCode',
          'caption' => '',
          'description' => 'This key should always be set to the value defined in the Ontology',
          'editor_type' => 0,
          'category' => 8,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'maxLength' => '',
            'minLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'sitePrimaryRsid' => 
      array (
        'fields' => 
        array (
          'id' => 13,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'sitePrimaryRsid',
          'caption' => '',
          'description' => 'Suggest deriving the value for this based on the rsid key in the ADBMobileConfig.json file.',
          'editor_type' => 0,
          'category' => 8,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'maxLength' => '',
            'minLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'siteType' => 
      array (
        'fields' => 
        array (
          'id' => 14,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'siteType',
          'caption' => '',
          'description' => 'This key should be set to ‘native app’ to indicate that this tracking is occurring within mobile apps',
          'editor_type' => 0,
          'category' => 8,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'maxLength' => '',
            'minLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'appfeatures' => 
      array (
        'fields' => 
        array (
          'id' => 21,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'checkbox',
          'name' => 'appfeatures',
          'caption' => 'App Features',
          'description' => '',
          'editor_type' => 0,
          'category' => 6,
          'locked' => false,
          'elements' => 'Articles||Events||Interaction (Login)||Teams||Click Tracking||Watchlist||Video||MVPD',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'columns' => '1',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'gen_ontologyID' => 
      array (
        'fields' => 
        array (
          'id' => 22,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'gen_ontologyID',
          'caption' => 'Ontology Spreadsheet ID',
          'description' => '',
          'editor_type' => 0,
          'category' => 6,
          'locked' => false,
          'elements' => '',
          'rank' => 10,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'maxLength' => '',
            'minLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
  ),
);