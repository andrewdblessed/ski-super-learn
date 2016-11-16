<!DOCTYPE html>
<html ng-app="app">
  <head>
    <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <title> SKi LEARN - {{$title}}</title>
        <link rel="shortcut icon" href="/icons/favicon.png">
    <!-- // NOTE:  LOADING CSS-->

 </head>
  <body  id="skisearch" class="fixed-left">
<script src="{{ URL::asset('/src/vendor/jquery/jquery.min.js') }}" ></script>

  <!-- BEGIN CALL JS -->
  <script src="pageloader/pageloader.js" type="text/javascript"></script>
  <!-- END CALL JS -->

    @include('templates.style.dash')

.<style media="screen">
  .loader-text{
    z-index: 1000;
  width: 400px;
  }
</style>
  <!-- BEGIN CALL CSS -->
  <link rel="stylesheet" id="pageloader-css"  href="pageloader/pageloader.css" type="text/css" media="all" />
  <!-- END CALL CSS -->

<!-- BEGIN THE LOADING SCREEN -->
<div id="bonfire-pageloader">

  <!-- BEGIN THE ICON -->
  <div class="bonfire-pageloader-icon">
  <div class="loader-text">
      <h3 class="text-white">#FACTS:  Baby Camels are born without a hump</h3>
  </div>
  <img id="#loader" SRC="pageloader/infinity.gif">
  </div>
  <!-- END THE ICON -->
  <!-- BEGIN PLACE LOADING ICON IN THE MIDDLE OF THE PAGE -->
  <script>
  jQuery(window).resize(function(){
     resizenow();
  });
  function resizenow() {
    var browserwidth = jQuery(window).width();
    var browserheight = jQuery(window).height();
    jQuery('.bonfire-pageloader-icon').css('right', ((browserwidth - jQuery(".bonfire-pageloader-icon").width())/2)).css('top', ((browserheight - jQuery(".bonfire-pageloader-icon").height())/2));
  };
  resizenow();
  </script>
  </div>


        <!-- Begin page -->
        <div id="wrapper ">

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

        <div class="wrapper entry-content">
            <div class="container">

    @yield('content')

        </div> <!-- container -->

    </div> <!-- wrapper -->
    <style type="text/css">
#loader {
    position: fixed;
    top: 80%;
    left: 2%;
    background: #fff;
}
img.loader-img {
    width: 130px;
}
    </style>

<div id="loader">
  <img class="loader-img" SRC="pageloader/hyper.gif">
</div>

   <script type="text/javascript">
$(document).ready(function(){
$("#loader").hide();
    $("a").click(function(){
        $("#loader").fadeIn();
    });
});
    </script>

@include('templates.style.dashscript')

  </body>
</html>
