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
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{url('plugins/jquery-ui/themes/base/minified/jquery-ui.min.css')}}" rel="stylesheet" />
    <link href="{{url('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{url('css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{url('css/style.min.css')}}" rel="stylesheet" />
    <link href="{{url('css/custom.css')}}" rel="stylesheet" />
    <link href="{{url('css/style-responsive.min.css')}}" rel="stylesheet" />
    <link href="{{url('css/theme/default.css')}}" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="{{url('plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" />
    <link href="{{url('plugins/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet" />
    <link href="{{url('plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" />
    <link href="{{url('plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{url('plugins/pace/pace.min.js')}}"></script>
    <!-- ================== END BASE JS ================== -->
    <!-- notty notification -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>

    <!-- begin #page-loader -->
    <div id="page-loader" class="fade in"><span class="spinner"></span></div>
    <!-- end #page-loader -->
    
    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        <div id="header" class="header navbar navbar-default navbar-fixed-top">
            <!-- begin container-fluid -->
            <div class="container-fluid">
                <!-- begin mobile sidebar expand / collapse button -->
                <div class="navbar-header">
                    @yield('title')
                    
                    <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- end mobile sidebar expand / collapse button -->
                
                <!-- begin header navigation right -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown navbar-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            @if ($user->profiles)
                           <img src="{{asset('profile_images/'.$user->profiles->photo)}}" />
                            @else
                             <img src="/img/user-13.jpg" alt="" /> 
                            @endif
                            <span class="hidden-xs"> {{ Auth::user()->name }}</span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu animated fadeInLeft">
                            <li class="arrow"></li>
                            <li><a href="{{route('profile_info')}}">Edit Profile</a></li>
                            <!-- <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                            <li><a href="javascript:;">Calendar</a></li> -->
                             @if( (Auth::user() !== null && Auth::user()->role_id == 1))
                                 <li><a href="{{route('profile_info')}}">Setting</a></li>
                            @endif

                            <li class="divider"></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form></li>
                        </ul>

                    </li>
                </ul>
                <!-- end header navigation right -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end #header -->
        
        <!-- begin #sidebar -->
        @include('layouts.partials.flash-message')
        
        @include('sweetalert::alert')
        @include('layouts.sidebar')
        <div class="sidebar-bg">
            
        </div>
        <!-- end #sidebar -->
        
        <!-- begin #content -->

        @yield('content')
        <!-- end #content -->
        
        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
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
    <script src="{{url('plugins/gritter/js/jquery.gritter.js')}}"></script>
    <script src="{{url('plugins/flot/jquery.flot.min.js')}}"></script>
    <script src="{{url('plugins/flot/jquery.flot.time.min.js')}}"></script>
    <script src="{{url('plugins/flot/jquery.flot.resize.min.js')}}"></script>
    <script src="{{url('plugins/flot/jquery.flot.pie.min.js')}}"></script>
    <script src="{{url('plugins/sparkline/jquery.sparkline.js')}}"></script>
    <script src="{{url('plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{url('plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{url('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{url('js/dashboard.min.js')}}"></script>
    <script src="{{url('js/apps.min.js')}}"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
    @yield('extra-script')
    <script>
        $(document).ready(function() {
            App.init();
            Dashboard.init();
        });
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-53034621-1', 'auto');
      ga('send', 'pageview');
    </script>

</body>

</html>
