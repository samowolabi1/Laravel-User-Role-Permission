<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>TemplateMi</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link rel="icon" href="{{URL::to('img/WAD.png')}}">
        
        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="{{url('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{url('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{url('css/animate.min.css')}}" rel="stylesheet" />
        <link href="{{url('css/style.min.css')}}" rel="stylesheet" />
        <link href="{{url('css/style-responsive.min.css')}}" rel="stylesheet" />
        <link href="{{url('css/theme/default.css')}}" rel="stylesheet" id="theme" />
        <!-- ================== END BASE CSS STYLE ================== -->
        
        <!-- ================== BEGIN BASE JS ================== -->
        <script src="{{url('plugins/pace/pace.min.js')}}"></script>
        <!-- ================== END BASE JS ================== -->
    </head>
    <body class="pace-top bg-white">
        <!-- begin #page-loader -->
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <!-- end #page-loader -->
        
        <!-- begin #page-container -->
        <div id="page-container" class="fade">
            
            <div id="header" class="header navbar navbar-default navbar-fixed-top">
            <!-- begin container-fluid -->
                <div class="container-fluid">
                    <!-- begin mobile sidebar expand / collapse button -->
                    <div class="navbar-header">
                         <!-- Collapsed Hamburger -->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- Branding Image -->
                            <a class="navbar-brand" alt="" href="#">WAD FINANCIALS</a>
                    </div>
                    <!-- end mobile sidebar expand / collapse button -->
                    
                    <!-- begin header navigation right -->
                    <!-- <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Login</a></li>
                    </ul> -->
                <!-- end header navigation right -->
                </div>            <!-- end container-fluid -->
            </div>

            <!-- begin login -->
            <div class="login login-with-news-feed">
                <!-- begin news-feed -->
                <div class="news-feed">
                    <div class="news-image">
                        <img src="img/login-bg/bg-8.jpg" style="height: 90%" alt="" />
                    </div>
                    <!-- <div class="news-caption">
                        
                    </div> -->
                </div>
                <!-- end news-feed -->
                <!-- begin right-content -->
                <div class="right-content">
                    <!-- begin login-header -->
                    <div class="login-header">
                        <div class="brand">
                            <small> @include('layouts.partials.flash-message')</small>
                            @include('sweetalert::alert')
                        </div>
                        
                    </div>
                    <!-- end login-header -->
                    <!-- begin login-content -->
                    @yield('content')
                    <!-- end login-content -->
                </div>
                <!-- end right-container -->
            </div>
            <!-- end login -->
        
        </div>
        <!-- end page container -->
        
        <!-- ================== BEGIN BASE JS ================== -->
        <script src="{{url('plugins/jquery/jquery-1.9.1.min.js')}}"></script>
        <script src="{{url('plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
        <script src="{{url('plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
        <script src="{{url('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{url('plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{url('plugins/jquery-cookie/jquery.cookie.js')}}"></script>
        <!-- ================== END BASE JS ================== -->
        
        <!-- ================== BEGIN PAGE LEVEL JS ================== -->
        <script src="{{url('js/apps.min.js')}}"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->

        <script>
            $(document).ready(function() {
                App.init();
            });
        </script>
        
    </body>

</html>
