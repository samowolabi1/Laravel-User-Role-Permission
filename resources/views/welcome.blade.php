<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WAD FINANCIALS</title>

        <link rel="icon" href="{{URL::to('img/WAD.png')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">

 
         <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="{{url('css/ldp/css/animate.css')}}" rel="stylesheet" />
        <link href="{{url('css/ldp/css/icomoon.css')}}" rel="stylesheet" />
        <link href="{{url('css/ldp/css/bootstrap.css')}}" rel="stylesheet" />
        <link href="{{url('css/ldp/css/magnific-popup.css')}}" rel="stylesheet" />
        <link href="{{url('css/ldp/css/owl.carousel.min.css')}}" rel="stylesheet" />
        <link href="{{url('css/ldp/css/owl.theme.default.min.css')}}" rel="stylesheet" />
        <link href="{{url('css/ldp/css/style.css')}}" rel="stylesheet"/>
        <link href="{{url('css/ldp/css/custom.css')}}" rel="stylesheet" />
        <link href="{{url('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <!-- ================== END PAGE LEVEL STYLE ================== -->
        
        <script src="{{url('js/ldp/js/modernizr-2.6.2.min.js')}}" type="text/javascript"></script>
        
        <!-- notty notification -->
        <link href="{{url('lib/noty.css')}}" rel="stylesheet"> 
        <script src="{{url('lib/noty.js')}}" type="text/javascript"></script>

        <style>
            /* Style the navbar */
            #navbar {
              overflow: hidden;
               background:#2396E5;
            }

            /* Navbar links */
            #navbar a {
              float: right;
              display: block;
              color: #f2f2f2;
              text-align: center;
              padding: 12px;
              text-decoration: none;
            }

            #navbar a:hover {
              color: #f2f20f;
              text-decoration: none;
            }

            #navbar a:focus {
              background-color: #2176bd !important;
              text-decoration: none;
            }

            /* Page content */
            .content {
              padding: 16px;
            }

            /* The sticky class is added to the navbar with JS when it reaches its scroll position */
            .sticky {
              position: fixed;
              padding-top:0;
              width: 100%;
            }

        </style>
    </head>
    <body>
        
        <div class="colorlib-loader"></div>

        <div id="page">
            <nav class="colorlib-nav sticky" role="navigation" id="navbar">
                <div class="top-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2">
                                <div id="colorlib-logo"><a href="#">Temp</a></div>
                            </div>
                            <div class="col-md-10 text-right menu-1">
                                <ul>
                                     @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/home') }}">{{ __('Dashboard') }}</a>
                                    </li>
       
                                    @endguest
                                    <!-- <li><a href="#aboutus">About Us</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#pricing">Pricing</a></li>
                                    <li><a href="#contact">Contact</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <section id="home" class="video-hero" style="height:600px; background-color: grey;">
                        <div class="overlay"></div>
                            <a></a> 
                            <div class="display-t text-center">
                                <div>
                                    <div class="container">
                                        <div class="col-md-12 col-md-offset-0">
                                            <div class="animate-box">
                                                <h2>My App Templates</h2>
                                               <!--  <p>Access real-time financial report from all your banks in one place</p>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

              

                <!-- starst new stuff -->       
                            
                       

                      

                     <!--    <footer id="colorlib-footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <p>
                                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Smarf Tech<a href="#" target="_blank"></a>
           
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </footer> -->
                    </div>

                    <div class="gototop js-top">
                        <a href="#" class="js-gotop"><i class="fa fa-angle-double-up"></i></a>
                    </div>
<!-- content ends -->

        <!-- ================== BEGIN BASE JS ================== -->

    <script src="{{url('js/ldp/js/jquery.min.js')}}"></script>
    <script src="{{url('js/ldp/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{url('js/ldp/js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/ldp/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('js/ldp/js/jquery.stellar.min.js')}}"></script>
    <script src="{{url('js/ldp/js/jquery.mb.YTPlayer.min.js')}}"></script>
    <!-- ================== END BASE JS ================== -->
    
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{url('js/ldp/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('js/ldp/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('js/ldp/js/jquery.countTo.js')}}"></script>
    <script src="{{url('js/ldp/js/main.js')}}"></script>
    <!-- <script src="{{url('plugins/flot/jquery.flot.pie.min.js')}}"></script>
    <script src="{{url('plugins/sparkline/jquery.sparkline.js')}}"></script>
    <script src="{{url('plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{url('plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{url('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{url('js/dashboard.min.js')}}"></script>
    <script src="{{url('js/apps.min.js')}}"></script> -->
    <!-- ================== END PAGE LEVEL JS ================== -->
    </body>
</html>
