<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema Autoadministrable</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href={{asset('css/normalize.css')}}>
    <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('css/font-awesome.min.css')}}>
    <link rel="stylesheet" href={{asset('css/themify-icons.css')}}>
    <link rel="stylesheet" href={{asset('css/flag-icon.min.css')}}>
    <link rel="stylesheet" href={{asset('css/cs-skin-elastic.css')}}>
    <!-- <link rel="stylesheet" href={.{asset('css/bootstrap-select.less')}}> -->
    <link rel="stylesheet" href={{asset('scss/style.css')}}>

    <link href={{asset('css/open-sans.css')}} rel='stylesheet' type='text/css'>
    @yield('css')

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src={{asset('images/logo.png')}} alt="Logo"> </a>
                <a class="navbar-brand hidden" href="./"><img src={{asset('images/logo2.png')}} alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="./"> <i class="menu-icon fa fa-home"></i>Dashboard </a>
                    </li>


                    <h3 class="menu-title">Modificaciones</h3><!-- /.menu-title -->
                    <li class="">
                        <a href="{{route('category.index')}}"> <i class="menu-icon fa fa-tags"></i>Categorias</a>
                    </li>
                    <li class="">
                        <a href="{{route('product.index')}}"> <i class="menu-icon fa fa-archive"></i>Productos</a>
                    </li>
                    <!-- <li class="">
                        <a href="Otros.php"> <i class="menu-icon fa fa-spinner"></i>Otros</a>
                    </li> -->


                    <h3 class="menu-title">Otros</h3>
                    <li class="">
                        <a href="{{url('/about')}}"> <i class="menu-icon fa fa-info"></i>Acerca de Redpanda</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">

                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src={{asset('images/admin.jpg')}} alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        {{-- <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div> --}}
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        @yield('body')


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src={{asset("js/vendor/jquery-2.1.4.min.js")}}></script>
    {{-- <script src={{asset("js/jquery.js")}}></script> --}}
    {{-- <script src={{asset("js/jquery-ui-1.10.4.min.js")}}></script>
    <script src={{asset("js/jquery-1.8.3.min.js")}}></script> --}}
    {{-- <script type="text/javascript" src={{asset("js/jquery-ui-1.9.2.custom.min.js")}}></script> --}}
    {{-- <script src={{asset("js/bootstrap.min.js")}}></script> --}}
    {{-- <script src={{asset("js/jquery.scrollTo.min.js")}}></script> --}}
    <script src={{asset("js/jquery.nicescroll.js")}} type="text/javascript"></script>
    <script src={{asset("js/scripts.js")}}></script>
    <script src={{asset("js/popper.min.js")}}></script>
    <script src={{asset("js/plugins.js")}}></script>
    <script src={{asset("js/main.js")}}></script>
    @yield('scripts')

</body>
</html>
