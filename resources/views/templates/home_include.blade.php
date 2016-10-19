

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

  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/landing/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/landing/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' rel='stylesheet'>
  </head>
  <body>
        @include('templates.partial.navigation')
    <!-- // NOTE:  LOADING ALERTS-->
        @include('templates.partial.alerts')
    @yield('content')
    <!-- Modal Trigger -->
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

    <!-- Modal Structure -->
    <div id="modal1" class="modal bottom-sheet">
      <div class="modal-content">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
      </div>
    </div>
  <!-- 
  <script src="/landing/js/materialize.js"></script>
  <script src="/landing/js/init.js"></script>  Scripts-->
  </body>
</html>