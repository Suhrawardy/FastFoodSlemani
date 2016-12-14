<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />

    <!-- Page Title -->
    <title>Cozy - HTML5 Template</title>

    <meta name="keywords" content="real estate, responsive, retina ready, modern html5 template, bootstrap, css3" />
    <meta name="description" content="Cozy - Responsive Real Estate HTML5 Template" />
    <meta name="author" content="Wisely Themes - www.wiselythemes.com" />

    @if($post)
    <meta property="og:url"                content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="When Great Minds Don’t Think Alike" />
    <meta property="og:description"        content="How much does culture influence creative thinking?" />
    <meta property="og:image"              content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />
    @endif

    <!-- Mobile Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/fav_touch_icons/favicon.ico') }}" />
    <link rel="apple-touch-icon" href="{{asset('images/fav_touch_icons/apple-touch-icon.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/fav_touch_icons/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/fav_touch_icons/apple-touch-icon-114x114.png') }}" />

    <!-- IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Google Web Font -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic" rel="stylesheet" type="text/css" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <!-- Modernizr -->
    <script src="{{ asset('js/modernizr-2.8.1.min.js') }}"></script>
</head>
<body>
<!-- BEGIN WRAPPER -->
<div id="wrapper">

    <!-- BEGIN HEADER -->
    <header id="header">
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul id="top-info">
                            <li>Phone: 0750 111 05 65</li>
                            <li>Email: <a href="mailto:alan.1993@outlook.com">alan.1993@outlook.com</a></li>
                        </ul>

                        <ul id="top-buttons">

                            <li>
                                <div>
                                    <span>English</span>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="nav-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="{{ url('/') }}" class="nav-logo"><img src="{{ asset('images/logo.png') }}" alt="Cozy Logo"/></a>


                        <!-- BEGIN MAIN MENU -->
                        <nav class="navbar">
                            <button id="nav-mobile-btn"><i class="fa fa-bars"></i></button>

                            <ul class="nav navbar-nav">
                                <li>
                                    <a class="active" href="/" >Home</a>
                                </li>
                            </ul>

                        </nav>
                        <!-- END MAIN MENU -->

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER -->

