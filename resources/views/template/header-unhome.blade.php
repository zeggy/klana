<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Klana | Authentic Traveling Platform </title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Default Styles -->
    <link href="style.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link href="rs-plugin/css/settings.css" rel="stylesheet">

</head>
<body>

    <div id="loader">
        <div class="loader-container">
            <h3 class="loader-back-text"><img src="images/loader.gif" alt="" class="loader"></h3>
        </div>
    </div>

    <div id="wrapper">
        <header class="header">
            <div class="menu-container">
                <div class="container">
                    <div class="menu-wrapper">
                        <nav id="navigation" class="navbar" role="navigation">
                            <div class="navbar-inner">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <i class="icon-menu27"></i>
                                    </button>
                                    <a id="brand" class="clearfix navbar-brand" href="index.html"><img src="images/black_trans.png"
                                            alt="Trips"></a>
                                </div><!-- end navbar-header -->
                                <div id="navbar-collapse" class="navbar-right navbar-collapse collapse clearfix">
                                    <ul class="nav navbar-nav yamm">
                                        <li><a href="{{route('home')}}" class="active dropdown-toggle">HOME</a></li>
                                        <li><a href="{{route('explore')}}">EXPLORE</a></li>
                                        <li><a href="{{route('featured')}}">FEATURED TRIPS</a></li>
                                        <li><a href="{{route('resources')}}">RESOURCES</a></li>
                                       
                                    </ul><!-- end navbar-right -->
                                </div><!-- end navbar-callopse -->
                            </div><!-- end navbar-inner -->
                        </nav><!-- end navigation -->
                    </div><!-- menu wrapper -->
                </div><!-- end container -->
            </div><!-- end menu-container -->
            <div class="sidebar-menu-container">
                <div class="col-sm-2 col-md-2 sidebar sidebar-right sidebar-animate">
                    <a data-toggle="sidebar" data-target=".sidebar-right" class="text-right" href="#"><i class="icon-wrong6-1"></i></a>
                    <img src="images/logo.png" alt="Trips">
                    <ul class="nav navbar-stacked">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="#">Forums</a></li>
                        <li><a href="page-sidebar.html">Terms Usage</a></li>
                        <li><a href="blog.html">News / Blog</a></li>
                    </ul>
                </div>
            </div><!-- end sidebar menu -->
        </header><!-- end header -->