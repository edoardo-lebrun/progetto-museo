<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Museo Storico dei Pompieri</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bistro-icons.css">
    <link rel="stylesheet" type="text/css" href="/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/css/settings.css">
    <link rel="stylesheet" type="text/css" href="/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="/css/zerogrid.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/loader.css">
    <link rel="shortcut icon" href="images/museo/logo_positivo.png">
    <link href="/css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!--Loader-->
<div class="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<!--Header-->
<header id="main-navigation">
    <div id="navigation" data-spy="affix" data-offset-top="20" class="affix-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar" aria-expanded="false">
                                <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{ route('home') }}"><img src="/images/museo/logo-white.png" alt="logo" class="img-responsive" style="max-width: 210px;"></a>
                        </div>

                        <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right" style="
                 padding-left: 1px;">

                            <ul class="nav navbar-nav">
                                <li class="dropdown active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Scopri il Museo</a>
                                    <ul class="dropdown-menu" style="display: none;">
                                        <li><a href="{{ route('home') }}">La Storia</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                    </ul>
                                </li>



                                <li><a href="#">Gallery</a></li>
                                <li><a href="{{ url('news') }}">News & Eventi</a></li>
                                <li><a href="{{ url('contatto') }}">Contattaci</a></li>
                                <li><a href="#">Prenota il tour</a></li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

