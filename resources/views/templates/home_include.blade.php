

<!DOCTYPE html>
  <html ng-app>
    <head>
       <title>SKI-LEARN - Learn More, Think More, Archive More</title>
          <link rel="shortcut icon" href="/icons/favicon.png">
          <!-- META TAGS -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="author" content="Ski Learn">
          <meta name="description" content="Ski-Learn is a online educational platform the focuses on making learning easy">


          <script src="{{ URL::asset('/src/vendor/new/js/jquery.min.js') }}"></script>

        <!--Morris Chart CSS -->
       <link href="{{ URL::asset('/css/animate.css') }}" rel="stylesheet">
               <!-- App css -->

               <link href="{{ URL::asset('/src/vendor/new/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
               <link href="{{ URL::asset('/src/vendor/new/css/core.css') }}" rel="stylesheet" type="text/css" />
                              <link href="{{ URL::asset('/src/vendor/new/css/components.css') }}" rel="stylesheet" type="text/css" />

               <link href="{{ URL::asset('/src/vendor/new/css/icons.css') }}" rel="stylesheet" type="text/css" />
              <link href="{{ URL::asset('/src/vendor/new/css/menu.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ URL::asset('/src/vendor/snackbar/snackbar.min.css')}}" rel="stylesheet" type="text/css" />
                 <!-- Snackbar-->
  <script src="{{ URL::asset('/src/vendor/snackbar/snackbar.min.js')}}"  type="text/javascript" ></script>


     </head>
  <body>
        @include('templates.partial.navigation')
    <!-- // NOTE:  LOADING ALERTS-->
        @include('templates.partial.alerts')

    @yield('content')


    <!-- Footer -->
    <footer class="footer text-right">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center text-white text-bold">
                    © 2016. All rights reserved.  A member of Ski Group.
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

  </div>
<!--  script code-->
    <script src="{{ URL::asset('/src/vendor/new/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('/src/vendor/new/js/jquery.blockUI.js') }}"></script>
    <script src="{{ URL::asset('/src/vendor/new/js/waves.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('/src/vendor/new/js/jquery.core.js') }}"></script>



  </body>
</html>
