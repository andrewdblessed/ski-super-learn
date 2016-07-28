<!DOCTYPE html>
<html ng-app="app">
  <head>
    <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <title> SKi LEARN - {{$title}}</title>
        <link rel="shortcut icon" href="/icons/favicon.png">
    <!-- // NOTE:  LOADING CSS-->

    @include('templates.style.style')
  </head>
  <body  id="skisearch">

    <!-- // NOTE:  LOADING NAVIGATION-->
    @include('templates.partial.navigation')
    <!-- // NOTE:  LOADING ALERTS-->
        @include('templates.partial.alerts')
        <!--// NOTE: LOADING PHP JS SCRIPTS  -->
        @include('vendorjs.routejs')
        @include('vendorjs.phpjs')

        <!-- // NOTE:  LOADING CONTENTS-->
        <div class="more-pad">

    @yield('content')
  </div>
 {{-- @include('adela.content') --}}
<!-- <script type="text/javascript" src="//api.filestackapi.com/filestack.js"></script> -->
@include('templates.style.script')

  </body>
</html>
