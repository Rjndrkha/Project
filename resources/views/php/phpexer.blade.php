<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CODING LEARN APPLICATION</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--enable mobile device-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--fontawesome css-->
  <link rel="stylesheet" href="a/css/font-awesome.min.css">
  <!--bootstrap css-->
  <link rel="stylesheet" href="a/css/bootstrap.min.css">
  <!--animate css-->
  <link rel="stylesheet" href="a/css/animate-wow.css">
  <!--main css-->
  <link rel="stylesheet" href="a/css/style.css">
  <link rel="stylesheet" href="a/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="a/css/slick.min.css">
  <link rel="stylesheet" href="a/css/jquery-ui.css">
  <!--responsive css-->
  <link rel="stylesheet" href="a/css/responsive.css">


</head>

<body>
  <header id="header" class="top-head">
    <!-- Static navbar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 col-sm-12 left-rs">
            <div class="navbar-header">
              <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>
            <form class="navbar-form navbar-left web-sh">
              <div class="form">
                <input type="text" class="form-control" placeholder="Search for Code">
              </div>
            </form>
          </div>
          <div class="col-md-8 col-sm-12">
            <div class="right-nav">
              <div class="login-sr">
                <div class="login-signup">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">

                      <a id="navbarDropdown" class="right-arrow pull-right" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="caret"></span>
                        {{ Auth::user()->name }}
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                        </form>
                        <a href="{{url('mahasiswa')}}"> College Data</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="help-r hidden-xs">
                <div class="help-box">
                  <ul>
                    <li> <a data-toggle="modal" data-target="#myModal" href="#"> <span>Material</span> <img alt="" /> </a> </li>
                    <li> <a href="#"><img class="h-i" src="a/images/help-icon.png" alt="" /> Examples </a> </li>
                  </ul>
                </div>
              </div>
              <div class="nav-b hidden-xs">
                <div class="nav-box">
                  <ul>
                    <li><a href={{url('index')}}>BACK CLA</a></li>
                    <li><a href="productpage.html">References</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/.container-fluid -->
    </nav>
  </header>
  <!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
  <!--[if gt IE 8]><!-->
  <html class="no-js" lang="en">
  <!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome to PHP </title>


    <link rel="shortcut icon" href="b/html.png" />

    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700|Inconsolata:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="b/css/citheme.css" type="text/css" />



    <link rel="index" title="Index" href="../genindex.html" />
    <link rel="search" title="Search" href="../search.html" />
    <link rel="top" title="CodeIgniter 3.1.11 documentation" href="../index.html" />
    <link rel="next" title="Installation Instructions" href="../installation/index.html" />
    <link rel="prev" title="CodeIgniter User Guide" href="../index.html" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/w3schools26.css') !!}">
  </head>

  <body class="wy-body-for-nav" role="document">

    <div id="nav">
      <div id="nav_inner">


        <div id="pulldown-menu" class="ciNav">
          <ul class="current">
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.welcomephp')}}">Welcome to PHP</a></li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phptutor')}}">PHP Tutorial</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">Introduction PHP</a></li>
                <li class="toctree-l2 "><a class=" reference internal" href="#">PHP Install</a></li>
                <li class="toctree-l2"><a class="reference internal" href="">PHP Syntax</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Comments</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Variables</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Echo/Print</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Data Types</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP String</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Number</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Math</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Constants</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Sets</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP If...Else...Elseif</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Switch</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Loops</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Array</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Superglobals</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP RegEx</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpform')}}">PHP Form</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form Handling</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form Validation</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form Required</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form URL/E-Mail</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form Complete</a></li>
              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpadv')}}">PHP Advanced</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Date & Time</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Include</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP File Handling</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP File Open/Read</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP File Create/Write</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP File Upload</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Cookies</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Session</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Filters</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Filters Advanced</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Callback Functions</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP JSON</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Exceptions</a></li>


              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpoop')}}">PHP OOP</a>
              <ul>
                <li class="toctree-l2 "><a class=" reference internal" href="{{url('php.phpoop')}}">PHP OOP Get Started</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Classes/Objects</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP constructor</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Destructor</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Access Modifiers</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Inheritance</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Constants</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Abstract Classes</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Interfaces</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Traits</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Static Methods</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Static Properties</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Namespaces</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Iterables</a></li>
              </ul>
            </li>
          </ul>

          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpdtb')}}">PHP Database</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">Getting Startet</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpxml')}}">PHP XML</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP XML Parses</a></li>



              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpexamp')}}">PHP Examples</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Examples</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpexer')}}">PHP Exercise</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Exercise</a></li>

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

          <a href="../index.html" class="fa fa-home"> PHP</a>


          <div role="search">
            <form id="rtd-search-form" class="wy-form" action="../search.html" method="get">
              <input type="text" name="q" placeholder="Search docs" />
              <input type="hidden" name="check_keywords" value="yes" />
              <input type="hidden" name="area" value="default" />
            </form>
          </div>
        </div>

        <div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main navigation">

          <ul class="current">
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.welcomephp')}}">Welcome to PHP</a></li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phptutor')}}">PHP Tutorial</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">Introduction PHP</a></li>
                <li class="toctree-l2 "><a class=" reference internal" href="#">PHP Install</a></li>
                <li class="toctree-l2"><a class="reference internal" href="">PHP Syntax</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Comments</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Variables</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Echo/Print</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Data Types</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP String</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Number</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Math</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Constants</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Sets</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP If...Else...Elseif</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Switch</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Loops</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Array</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Superglobals</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP RegEx</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpform')}}">PHP Form</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form Handling</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form Validation</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form Required</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form URL/E-Mail</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form Complete</a></li>
              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpadv')}}">PHP Advanced</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Date & Time</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Include</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP File Handling</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP File Open/Read</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP File Create/Write</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP File Upload</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Cookies</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Session</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Filters</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Filters Advanced</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Callback Functions</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP JSON</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Exceptions</a></li>


              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpoop')}}">PHP OOP</a>
              <ul>
                <li class="toctree-l2 "><a class=" reference internal" href="{{url('php.phpoop')}}">PHP OOP Get Started</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Classes/Objects</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP constructor</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Destructor</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Access Modifiers</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Inheritance</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Constants</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Abstract Classes</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Interfaces</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Traits</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Static Methods</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Static Properties</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Namespaces</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Iterables</a></li>
              </ul>
            </li>
          </ul>

          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpdtb')}}">PHP Database</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">Getting Startet</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpxml')}}">PHP XML</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP XML Parses</a></li>



              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpexamp')}}">PHP Examples</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Examples</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpexer')}}">PHP Exercise</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Exercise</a></li>

              </ul>
            </li>
          </ul>

        </div>
        &nbsp;
      </nav>

      <section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">


        <nav class="wy-nav-top" role="navigation" aria-label="top navigation">
          <i data-toggle="wy-nav-top" class="fa fa-bars"></i>
          <a href="../index.html">PHP</a>
        </nav>



        <div class="wy-nav-content">
          <div class="rst-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
              <ul class="wy-breadcrumbs">
                <li><a href="../index.html">Docs</a> &raquo;</li>

                <li>Welcome to PHP</li>
                <li class="wy-breadcrumbs-aside">

                </li>
                <div style="float:right;margin-left:5px;" id="closeMe">
                  <img title="Classic Layout" alt="classic layout" src="data:image/gif;base64,R0lGODlhFAAUAJEAAAAAADMzM////wAAACH5BAUUAAIALAAAAAAUABQAAAImlI+py+0PU5gRBRDM3DxbWoXis42X13USOLauUIqnlsaH/eY6UwAAOw==" />
                </div>
              </ul>
              <hr />
            </div>
            <div role="main" class="document">
              <div class="section" id="welcome-to-codeigniter">


              </div>
            </div>

            <footer>

              <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">

                <a href="../installation/index.html" class="btn btn-neutral float-right" title="Installation Instructions">Next <span class="fa fa-arrow-circle-right"></span></a>


                <a href="../index.html" class="btn btn-neutral" title="CodeIgniter User Guide"><span class="fa fa-arrow-circle-left"></span> Previous</a>

              </div>


              <hr />

              &copy; Copyright 2020- 2021, Politeknik Negeri Malang.
              Coding Web Application TI-2H.

            </footer>
          </div>
        </div>

      </section>

    </div>





    <script type="text/javascript">
      var DOCUMENTATION_OPTIONS = {
        URL_ROOT: '../',
        VERSION: '3.1.11',
        COLLAPSE_INDEX: false,
        FILE_SUFFIX: '.html',
        HAS_SOURCE: false
      };
    </script>
    <script type="text/javascript" src="b/jquery.js"></script>
    <script type="text/javascript" src="b/underscore.js"></script>
    <script type="text/javascript" src="b/doctools.js"></script>

    <script type="text/javascript" src="b/js/theme.js"></script>




    <script type="text/javascript">
      jQuery(function() {
        SphinxRtdTheme.StickyNav.enable();
      });
    </script>


  </body>

  </html>