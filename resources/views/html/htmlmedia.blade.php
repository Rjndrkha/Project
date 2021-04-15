

<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Contributing to CodeIgniter &mdash; CodeIgniter 3.1.11 documentation</title>
  

  
  
    <link rel="shortcut icon" href="b/ci-icon.ico"/>
  

  
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700|Inconsolata:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

  
  
    

  

  
  
    <link rel="stylesheet" href="b/css/citheme.css" type="text/css" />
  

  
        <link rel="index" title="Index"
              href="../genindex.html"/>
        <link rel="search" title="Search" href="../search.html"/>
    <link rel="top" title="CodeIgniter 3.1.11 documentation" href="../index.html"/>
        <link rel="next" title="Writing CodeIgniter Documentation" href="../documentation/index.html"/>
        <link rel="prev" title="Conclusion" href="../tutorial/conclusion.html"/> 

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

</head>

<body class="wy-body-for-nav" role="document">

  <div id="nav">
  <div id="nav_inner">
    
    
    
      <div id="pulldown-menu" class="ciNav">
        <ul>
<li class="toctree-l1"><a class="reference internal" href="../general/welcome.html">Welcome to CodeIgniter</a></li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../installation/index.html">Installation Instructions</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../installation/downloads.html">Downloading CodeIgniter</a></li>
<li class="toctree-l2"><a class="reference internal" href="../installation/index.html">Installation Instructions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../installation/upgrading.html">Upgrading From a Previous Version</a></li>
<li class="toctree-l2"><a class="reference internal" href="../installation/troubleshooting.html">Troubleshooting</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../overview/index.html">CodeIgniter Overview</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../overview/getting_started.html">Getting Started</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/at_a_glance.html">CodeIgniter at a Glance</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/features.html">Supported Features</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/appflow.html">Application Flow Chart</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/mvc.html">Model-View-Controller</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/goals.html">Architectural Goals</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../tutorial/index.html">Tutorial</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../tutorial/static_pages.html">Static pages</a></li>
<li class="toctree-l2"><a class="reference internal" href="../tutorial/news_section.html">News section</a></li>
<li class="toctree-l2"><a class="reference internal" href="../tutorial/create_news_items.html">Create news items</a></li>
<li class="toctree-l2"><a class="reference internal" href="../tutorial/conclusion.html">Conclusion</a></li>
</ul>
</li>
</ul>
<ul class="current">
<li class="toctree-l1 current"><a class="current reference internal" href="#">Contributing to CodeIgniter</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../documentation/index.html">Writing CodeIgniter Documentation</a></li>
<li class="toctree-l2"><a class="reference internal" href="../DCO.html">Developer’s Certificate of Origin 1.1</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../general/index.html">General Topics</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../general/urls.html">CodeIgniter URLs</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/controllers.html">Controllers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/reserved_names.html">Reserved Names</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/views.html">Views</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/models.html">Models</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/helpers.html">Helpers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/libraries.html">Using CodeIgniter Libraries</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/creating_libraries.html">Creating Libraries</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/drivers.html">Using CodeIgniter Drivers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/creating_drivers.html">Creating Drivers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/core_classes.html">Creating Core System Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/ancillary_classes.html">Creating Ancillary Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/hooks.html">Hooks - Extending the Framework Core</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/autoloader.html">Auto-loading Resources</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/common_functions.html">Common Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/compatibility_functions.html">Compatibility Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/routing.html">URI Routing</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/errors.html">Error Handling</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/caching.html">Caching</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/profiling.html">Profiling Your Application</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/cli.html">Running via the CLI</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/managing_apps.html">Managing your Applications</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/environments.html">Handling Multiple Environments</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/alternative_php.html">Alternate PHP Syntax for View Files</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/security.html">Security</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/styleguide.html">PHP Style Guide</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../libraries/index.html">Libraries</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../libraries/benchmark.html">Benchmarking Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/caching.html">Caching Driver</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/calendar.html">Calendaring Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/cart.html">Shopping Cart Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/config.html">Config Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/email.html">Email Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/encrypt.html">Encrypt Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/encryption.html">Encryption Library</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/file_uploading.html">File Uploading Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/form_validation.html">Form Validation</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/ftp.html">FTP Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/image_lib.html">Image Manipulation Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/input.html">Input Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/javascript.html">Javascript Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/language.html">Language Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/loader.html">Loader Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/migration.html">Migrations Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/output.html">Output Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/pagination.html">Pagination Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/parser.html">Template Parser Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/security.html">Security Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/sessions.html">Session Library</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/table.html">HTML Table Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/trackback.html">Trackback Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/typography.html">Typography Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/unit_testing.html">Unit Testing Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/uri.html">URI Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/user_agent.html">User Agent Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/xmlrpc.html">XML-RPC and XML-RPC Server Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/zip.html">Zip Encoding Class</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../database/index.html">Database Reference</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../database/examples.html">Quick Start: Usage Examples</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/configuration.html">Database Configuration</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/connecting.html">Connecting to a Database</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/queries.html">Running Queries</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/results.html">Generating Query Results</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/helpers.html">Query Helper Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/query_builder.html">Query Builder Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/transactions.html">Transactions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/metadata.html">Getting MetaData</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/call_function.html">Custom Function Calls</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/caching.html">Query Caching</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/forge.html">Database Manipulation with Database Forge</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/utilities.html">Database Utilities Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/db_driver_reference.html">Database Driver Reference</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../helpers/index.html">Helpers</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../helpers/array_helper.html">Array Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/captcha_helper.html">CAPTCHA Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/cookie_helper.html">Cookie Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/date_helper.html">Date Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/directory_helper.html">Directory Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/download_helper.html">Download Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/email_helper.html">Email Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/file_helper.html">File Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/form_helper.html">Form Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/html_helper.html">HTML Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/inflector_helper.html">Inflector Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/language_helper.html">Language Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/number_helper.html">Number Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/path_helper.html">Path Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/security_helper.html">Security Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/smiley_helper.html">Smiley Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/string_helper.html">String Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/text_helper.html">Text Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/typography_helper.html">Typography Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/url_helper.html">URL Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/xml_helper.html">XML Helper</a></li>
</ul>
</li>
</ul>

      </div>
    
      
  </div>
</div>
<div id="nav2">
  <a href="#" id="openToc">
    <img src="data:image/jpeg;base64,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" title="Toggle Table of Contents" alt="Toggle Table of Contents" />
  </a>
</div>

  <div class="wy-grid-for-nav">

    
    <nav data-toggle="wy-nav-shift" class="wy-nav-side">
      <div class="wy-side-nav-search">
        
          <a href="../index.html" class="fa fa-home"> HTML</a>
        
        
<div role="search">
  <form id="rtd-search-form" class="wy-form" action="../search.html" method="get">
    <input type="text" name="q" placeholder="Search docs" />
    <input type="hidden" name="check_keywords" value="yes" />
    <input type="hidden" name="area" value="default" />
  </form>
</div>
      </div>

      <div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main navigation">
        
          
          
              <ul>
<li class="toctree-l1"><a class="reference internal" href="../general/welcome.html">Welcome to HTML</a></li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../installation/index.html">HTML Tutorial</a><ul>
<li class="toctree-l2"><a class="reference internal" href="">HTML Home</a></li>
<li class="toctree-l2 current"><a class="current reference internal" href="#">HTML Introduction</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTML Editors</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Basic</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Element</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Attribute</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Headings</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Paragraph</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Styles</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Formatting</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Quotations</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Comments</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Colors</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML CSS</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML links</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Images</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Tables</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML List</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Block and Inline</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Id</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Iframes</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Javascript</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML File Paths</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Head</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Layout</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Responsive</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Computer Code</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Semantics</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Style Guide</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Entities</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Symbols</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Emojis</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Charset</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML URL Encode</a></li>
</ul>
</li>
</ul>
<ul class="current">
<li class="toctree-l1"><a class="reference internal" href="#">HTML FORMS</a><ul>
<li class="toctree-l2"><a class="reference internal" href="getting_started.html">HTML Forms</a></li>
<li class="toctree-l2"><a class="reference internal" href="at_a_glance.html">HTML Forms Attribute</a></li>
<li class="toctree-l2"><a class="reference internal" href="features.html">HTML Forms Elements</a></li>
<li class="toctree-l2"><a class="reference internal" href="appflow.html">HTML Input Types</a></li>
<li class="toctree-l2"><a class="reference internal" href="mvc.html">HTML Input Attributes</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">HTML Input Forms Attributes</a></li>
</ul>
</li>
</ul>
<ul class="current">
<li class="toctree-l1"><a class="reference internal" href="#">HTML Graphics</a><ul>
<li class="toctree-l2"><a class="reference internal" href="static_pages.html">HTMl Canva</a></li>
<li class="toctree-l2"><a class="reference internal" href="news_section.html">HTMl SVG</a></li>
</ul>
</li>
</ul>
<ul class="current">
<li class="toctree-l1 current"><a class="current reference internal" href="#">HTML MEDIA</a><ul>
<li class="toctree-l2"><a class="reference internal" href="">HTML Media</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl Video</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl Audio</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl Plug-Ins</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl YouTube</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../general/index.html">HTML APIs</a><ul>
<li class="toctree-l2"><a class="reference internal" href="urls.html">HTMl Geolocation</a></li>
<li class="toctree-l2"><a class="reference internal" href="controllers.html">HTMl Drag/Drop</a></li>
<li class="toctree-l2"><a class="reference internal" href="reserved_names.html">HTML Web Storage</a></li>
<li class="toctree-l2"><a class="reference internal" href="views.html">HTML Web Workers</a></li>
<li class="toctree-l2"><a class="reference internal" href="models.html">HTML SSE</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../libraries/index.html">HTML Examples</a><ul>
<li class="toctree-l2"><a class="reference internal" href="benchmark.html">HTML Examples</a></li>
<li class="toctree-l2"><a class="reference internal" href="caching.html">HTML Quiz</a></li>
<li class="toctree-l2"><a class="reference internal" href="calendar.html">HTML Exercise</a></li>
<li class="toctree-l2"><a class="reference internal" href="cart.html">HTML Certificate</a></li>
<li class="toctree-l2"><a class="reference internal" href="config.html">HTML Summary</a></li>
<li class="toctree-l2"><a class="reference internal" href="email.html">HTML Accessibility</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../database/index.html">HTML Reference</a><ul>
<li class="toctree-l2"><a class="reference internal" href="examples.html">HTML Tag List</a></li>
<li class="toctree-l2"><a class="reference internal" href="configuration.html">HTML Attributes</a></li>
<li class="toctree-l2"><a class="reference internal" href="connecting.html">HTML Global Attributes</a></li>
<li class="toctree-l2"><a class="reference internal" href="queries.html">HTML Browser Support</a></li>
<li class="toctree-l2"><a class="reference internal" href="results.html">HTML Events</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers.html">HTML Colors</a></li>
<li class="toctree-l2"><a class="reference internal" href="query_builder.html">HTML Canvas</a></li>
<li class="toctree-l2"><a class="reference internal" href="transactions.html">HTML Audio/Video</a></li>
<li class="toctree-l2"><a class="reference internal" href="metadata.html">HTML Doctypes</a></li>
<li class="toctree-l2"><a class="reference internal" href="call_function.html">HTML Character Sets</a></li>
<li class="toctree-l2"><a class="reference internal" href="caching.html">HTML URL Encode</a></li>
<li class="toctree-l2"><a class="reference internal" href="forge.html">HTML Lang Codes</a></li>
<li class="toctree-l2"><a class="reference internal" href="utilities.html">HTML Messages</a></li>
<li class="toctree-l2"><a class="reference internal" href="db_driver_reference.html">HTML Methods</a></li>
<li class="toctree-l2"><a class="reference internal" href="db_driver_reference.html">Keyboard Short Cut</a></li>
<li class="toctree-l2"><a class="reference internal" href="db_driver_reference.html">PX to EM Converter</a></li>
</ul>
</li>
</ul>

          
        
      </div>
      &nbsp;
    </nav>

    <section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">

      
      <nav class="wy-nav-top" role="navigation" aria-label="top navigation">
        <i data-toggle="wy-nav-top" class="fa fa-bars"></i>
        <a href="../index.html">CodeIgniter</a>
      </nav>


      
      <div class="wy-nav-content">
        <div class="rst-content">
          <div role="navigation" aria-label="breadcrumbs navigation">
  <ul class="wy-breadcrumbs">
    <li><a href="../index.html">Docs</a> &raquo;</li>
      
    <li>Contributing to CodeIgniter</li>
    <li class="wy-breadcrumbs-aside">
      
    </li>
    <div style="float:right;margin-left:5px;" id="closeMe">
      <img title="Classic Layout" alt="classic layout" src="data:image/gif;base64,R0lGODlhFAAUAJEAAAAAADMzM////wAAACH5BAUUAAIALAAAAAAUABQAAAImlI+py+0PU5gRBRDM3DxbWoXis42X13USOLauUIqnlsaH/eY6UwAAOw==" />
    </div>
  </ul>
  <hr/>
</div>
          <div role="main" class="document">
            
  <div class="section" id="contributing-to-codeigniter">
<h1>Contributing to CodeIgniter<a class="headerlink" href="#contributing-to-codeigniter" title="Permalink to this headline">¶</a></h1>
<div class="toctree-wrapper compound">
<ul>
<li class="toctree-l1"><a class="reference internal" href="../documentation/index.html">Writing CodeIgniter Documentation</a></li>
<li class="toctree-l1"><a class="reference internal" href="../DCO.html">Developer’s Certificate of Origin 1.1</a></li>
</ul>
</div>
<p>CodeIgniter is a community driven project and accepts contributions of code
and documentation from the community. These contributions are made in the form
of Issues or <a class="reference external" href="https://help.github.com/articles/using-pull-requests/">Pull Requests</a>
on the <a class="reference external" href="https://github.com/bcit-ci/CodeIgniter">CodeIgniter repository</a> on GitHub.</p>
<p>Issues are a quick way to point out a bug. If you find a bug or documentation
error in CodeIgniter then please check a few things first:</p>
<ul class="simple">
<li>There is not already an open Issue</li>
<li>The issue has already been fixed (check the develop branch, or look for
closed Issues)</li>
<li>Is it something really obvious that you fix it yourself?</li>
</ul>
<p>Reporting issues is helpful but an even better approach is to send a Pull
Request, which is done by “Forking” the main repository and committing to your
own copy. This will require you to use the version control system called Git.</p>
<div class="section" id="support">
<h2>Support<a class="headerlink" href="#support" title="Permalink to this headline">¶</a></h2>
<p>Please note that GitHub is not for general support questions! If you are
having trouble using a feature of CodeIgniter, ask for help on our
<a class="reference external" href="http://forum.codeigniter.com/">forums</a> instead.</p>
<p>If you are not sure whether you are using something correctly or if you
have found a bug, again - please ask on the forums first.</p>
</div>
<div class="section" id="security">
<h2>Security<a class="headerlink" href="#security" title="Permalink to this headline">¶</a></h2>
<p>Did you find a security issue in CodeIgniter?</p>
<p>Please <em>don’t</em> disclose it publicly, but e-mail us at <a class="reference external" href="mailto:security&#37;&#52;&#48;codeigniter&#46;com">security<span>&#64;</span>codeigniter<span>&#46;</span>com</a>,
or report it via our page on <a class="reference external" href="https://hackerone.com/codeigniter">HackerOne</a>.</p>
<p>If you’ve found a critical vulnerability, we’d be happy to credit you in our
<cite>ChangeLog &lt;../changelog&gt;</cite>.</p>
</div>
<div class="section" id="tips-for-a-good-issue-report">
<h2>Tips for a Good Issue Report<a class="headerlink" href="#tips-for-a-good-issue-report" title="Permalink to this headline">¶</a></h2>
<p>Use a descriptive subject line (eg parser library chokes on commas) rather than a vague one (eg. your code broke).</p>
<p>Address a single issue in a report.</p>
<p>Identify the CodeIgniter version (eg 3.0-develop) and the component if you know it (eg. parser library)</p>
<p>Explain what you expected to happen, and what did happen.
Include error messages and stacktrace, if any.</p>
<p>Include short code segments if they help to explain.
Use a pastebin or dropbox facility to include longer segments of code or screenshots - do not include them in the issue report itself.
This means setting a reasonable expiry for those, until the issue is resolved or closed.</p>
<p>If you know how to fix the issue, you can do so in your own fork &amp; branch, and submit a pull request.
The issue report information above should be part of that.</p>
<p>If your issue report can describe the steps to reproduce the problem, that is great.
If you can include a unit test that reproduces the problem, that is even better, as it gives whoever is fixing
it a clearer target!</p>
</div>
<div class="section" id="guidelines">
<h2>Guidelines<a class="headerlink" href="#guidelines" title="Permalink to this headline">¶</a></h2>
<p>Before we look into how, here are the guidelines. If your Pull Requests fail
to pass these guidelines it will be declined and you will need to re-submit
when you’ve made the changes. This might sound a bit tough, but it is required
for us to maintain quality of the code-base.</p>
<div class="section" id="php-style">
<h3>PHP Style<a class="headerlink" href="#php-style" title="Permalink to this headline">¶</a></h3>
<p>All code must meet the <a class="reference external" href="https://codeigniter.com/userguide3/general/styleguide.html">Style Guide</a>, which is
essentially the <a class="reference external" href="https://en.wikipedia.org/wiki/Indent_style#Allman_style">Allman indent style</a>, underscores and
readable operators. This makes certain that all code is the same format as the
existing code and means it will be as readable as possible.</p>
</div>
<div class="section" id="documentation">
<h3>Documentation<a class="headerlink" href="#documentation" title="Permalink to this headline">¶</a></h3>
<p>If you change anything that requires a change to documentation then you will
need to add it. New classes, methods, parameters, changing default values, etc
are all things that will require a change to documentation. The change-log
must also be updated for every change. Also PHPDoc blocks must be maintained.</p>
</div>
<div class="section" id="compatibility">
<h3>Compatibility<a class="headerlink" href="#compatibility" title="Permalink to this headline">¶</a></h3>
<p>CodeIgniter recommends PHP 5.6 or newer to be used, but it should be
compatible with PHP 5.3.7 so all code supplied must stick to this
requirement. If PHP 5.4 (and above) functions or features are used then
there must be a fallback for PHP 5.3.7.</p>
</div>
<div class="section" id="branching">
<h3>Branching<a class="headerlink" href="#branching" title="Permalink to this headline">¶</a></h3>
<p>CodeIgniter uses the <a class="reference external" href="http://nvie.com/posts/a-successful-git-branching-model/">Git-Flow</a> branching model
which requires all pull requests to be sent to the “develop” branch. This is
where the next planned version will be developed. The “master” branch will
always contain the latest stable version and is kept clean so a “hotfix” (e.g:
an emergency security patch) can be applied to master to create a new version,
without worrying about other features holding it up. For this reason all
commits need to be made to “develop” and any sent to “master” will be closed
automatically. If you have multiple changes to submit, please place all
changes into their own branch on your fork.</p>
<p>One thing at a time: A pull request should only contain one change. That does
not mean only one commit, but one change - however many commits it took. The
reason for this is that if you change X and Y but send a pull request for both
at the same time, we might really want X but disagree with Y, meaning we
cannot merge the request. Using the Git-Flow branching model you can create
new branches for both of these features and send two requests.</p>
</div>
<div class="section" id="signing">
<h3>Signing<a class="headerlink" href="#signing" title="Permalink to this headline">¶</a></h3>
<p>You must sign your work, certifying that you either wrote the work or
otherwise have the right to pass it on to an open source project. git makes
this trivial as you merely have to use <cite>–signoff</cite> on your commits to your
CodeIgniter fork.</p>
<div class="highlight-bash"><div class="highlight"><pre><span></span>git commit --signoff
</pre></div>
</div>
<p>or simply</p>
<div class="highlight-bash"><div class="highlight"><pre><span></span>git commit -s
</pre></div>
</div>
<p>This will sign your commits with the information setup in your git config, e.g.</p>
<blockquote>
<div>Signed-off-by: John Q Public &lt;<a class="reference external" href="mailto:john&#46;public&#37;&#52;&#48;example&#46;com">john<span>&#46;</span>public<span>&#64;</span>example<span>&#46;</span>com</a>&gt;</div></blockquote>
<p>If you are using Tower there is a “Sign-Off” checkbox in the commit window. You
could even alias git commit to use the -s flag so you don’t have to think about
it.</p>
<p>By signing your work in this manner, you certify to a “Developer’s Certificate
of Origin”. The current version of this certificate is in the <a class="reference internal" href="../DCO.html"><span class="doc">Developer’s Certificate of Origin 1.1</span></a> file
in the root of this documentation.</p>
</div>
</div>
</div>


          </div>
          <footer>
  
    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
      
        <a href="../documentation/index.html" class="btn btn-neutral float-right" title="Writing CodeIgniter Documentation">Next <span class="fa fa-arrow-circle-right"></span></a>
      
      
        <a href="../tutorial/conclusion.html" class="btn btn-neutral" title="Conclusion"><span class="fa fa-arrow-circle-left"></span> Previous</a>
      
    </div>
  

  <hr/>

  <div role="contentinfo">
    <p>
        &copy; Copyright 2014 - 2019, British Columbia Institute of Technology.
      Last updated on Sep 19, 2019.
    </p>
  </div>

  Built with <a href="http://sphinx-doc.org/">Sphinx</a> using a <a href="https://github.com/snide/sphinx_rtd_theme">theme</a> provided by <a href="https://readthedocs.org">Read the Docs</a>.
  
</footer>
        </div>
      </div>

    </section>

  </div>
  


  

    <script type="text/javascript">
        var DOCUMENTATION_OPTIONS = {
            URL_ROOT:'../',
            VERSION:'3.1.11',
            COLLAPSE_INDEX:false,
            FILE_SUFFIX:'.html',
            HAS_SOURCE:  false
        };
    </script>
      <script type="text/javascript" src="b/jquery.js"></script>
      <script type="text/javascript" src="b/underscore.js"></script>
      <script type="text/javascript" src="b/doctools.js"></script>

  

  
  
    <script type="text/javascript" src="b/js/theme.js"></script>
  

  
  
  <script type="text/javascript">
      jQuery(function () {
          SphinxRtdTheme.StickyNav.enable();
      });
  </script>
   

</body>
</html>