<!DOCTYPE html>
<html ng-app="app">
  <head>
    <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <title> SKi LEARN - {{$title}}</title>
        <link rel="shortcut icon" href="/icons/favicon.png">
    <!-- // NOTE:  LOADING CSS-->

    @include('templates.style.dash')
  </head>
  <body  id="skisearch" class="fixed-left">
     <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                      <div class="inner-spin"></div>
                      <div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>


        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="{{route('home')}}" class="logo"><span>Ski<span>-Learn</span></span><i class="mdi mdi-cube"></i></a>
                    <!-- Image logo -->
                    <!--<a href="index.html" class="logo">-->
                        <!--<span>-->
                            <!--<img src="assets/images/logo.png" alt="" height="30">-->
                        <!--</span>-->
                        <!--<i>-->
                            <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
                        <!--</i>-->
                    <!--</a>-->
                </div>


    <!-- // NOTE:  LOADING NAVIGATION-->
    @include('templates.partial.navigation')
    <!-- // NOTE:  LOADING ALERTS-->
     {{--  @include('templates.partial.alerts') --}}
        <!--// NOTE: LOADING PHP JS SCRIPTS  -->
   {{--     @include('vendorjs.routejs')
              @include('vendorjs.phpjs') --}}

        <!-- // NOTE:  LOADING CONTENTS-->
 <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">



    @yield('content')



                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Ski Learn.
                </footer>

            </div>


         
        <script>
            var resizefunc = [];
        </script>

 {{-- @include('adela.content') --}}
<!-- <script type="text/javascript" src="//api.filestackapi.com/filestack.js"></script> -->
@include('templates.style.dashscript')

  </body>
</html>
