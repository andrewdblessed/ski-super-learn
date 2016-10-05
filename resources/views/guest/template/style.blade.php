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
          
          <script src="//fast.eager.io/LBzI5idRxT.js"></script>
          
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <link href="{{ URL::asset('/src/vendor/new/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/src/vendor/new/css/core.css') }}" rel="stylesheet" type="text/css" />
                       <link href="{{ URL::asset('/src/vendor/new/css/components.css') }}" rel="stylesheet" type="text/css" />

   </head>
  <body>
       <nav class="navbar navbar-default navbar-static-top">
  <div class="container">
  hello
  </div>
</nav>
    @yield('content')
   <nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
    ...
  </div>
</nav>

        <script src="{{ URL::asset('/src/vendor/new/js/bootstrap.min.js') }}"></script>

  </body>
</html>
