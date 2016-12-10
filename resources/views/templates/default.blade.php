<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <title> SKi LEARN - {{$title}}</title>
        <link rel="shortcut icon" href="/icons/favicon.png">
    <!-- // NOTE:  LOADING CSS-->
    @include('templates.style.dash')

 </head>
  <body  class="fixed-left">
<script src="{{ URL::asset('/src/vendor/jquery/jquery.min.js') }}" ></script>

<script src="{{ URL::asset('/src/vendor/new/js/modernizr.min.js')}}"></script>

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
        <div id="wrapper ">




    <!-- // NOTE:  LOADING NAVIGATION-->
    @include('templates.partial.navigation')
    <!-- // NOTE:  LOADING ALERTS-->
   @include('templates.partial.alerts')
        <!--// NOTE: LOADING PHP JS SCRIPTS  -->
   {{--     @include('vendorjs.routejs')
              @include('vendorjs.phpjs') --}}

        <!-- // NOTE:  LOADING CONTENTS-->
 <!-- ============================================================== -->



    <div class="content-page">
        <!-- Start content -->
        <div class="content">
              @yield('content')


        </div> <!-- content -->

        <footer class="footer text-right">
            2016 © SKI LEARN.
        </footer>

    </div>


    <!-- Right Sidebar -->
    <div class="side-bar right-bar">
        <a href="javascript:void(0);" class="right-bar-toggle">
            <i class="mdi mdi-close-circle-outline"></i>
        </a>
        <h4 class="">Settings</h4>
        <div class="setting-list nicescroll">
            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">Notifications</h5>
                    <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">API Access</h5>
                    <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">Auto Updates</h5>
                    <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">Online Status</h5>
                    <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>
        </div>
    </div>
    <!-- /Right-bar -->

    </div> <!-- wrapper -->


            <script>
                var resizefunc = [];
            </script>




@include('templates.style.dashscript')

  </body>
</html>
