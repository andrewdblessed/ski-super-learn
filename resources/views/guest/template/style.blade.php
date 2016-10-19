<!DOCTYPE html>
  <html ng-app>
    <head>
       <title>SKI-LEARN Shared Notes</title>
          <link rel="shortcut icon" href="/icons/favicon.png">
          <!-- META TAGS -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="author" content="Ski Learn">
          <meta name="description" content="Ski-Learn is a online educational platform the focuses on making learning easy">
            <script src="{{ URL::asset('/src/vendor/new/js/jquery.min.js') }}"></script>

          <link href="/plugins/custombox/css/custombox.min.css" rel="stylesheet">

         <link href="{{ URL::asset('/src/vendor/new/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/src/vendor/new/css/core.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ URL::asset('/src/vendor/new/css/components.css') }}" rel="stylesheet" type="text/css" />
             <link href="{{ URL::asset('/src/vendor/new/css/icons.css') }}" rel="stylesheet" type="text/css" />

<style type="text/css">
.save_shared{
  display: none;
}
header.note_header.text-success {
    font-size: xx-large;
    text-align: center;
    margin-top: 34px;
}
.fixed-top {
    position: fixed;
    width: 65%;
    text-align: center;
    background-color: #fff;
}
.card__body {
    text-align: justify;
    margin-top: 17%;
}
span.text-success {
    font-size: 21px;
    font-weight: 700;
    padding-left: 22%;
}
</style>
   </head>
  <body>

<div> <a href="{{route('home')}}"> <img src="/icons/favicon.png" style="    width: 57px;
   "> </a></div>   
    @yield('content')

    @if (!Auth::check())

   <nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
  <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-lg btn-success"> Sign in to Save Note</a>
 <span class="text-success">Welcome to Skilearn Shared Notes</span>

<div class="button-list pull-right">
<button type="button" class="btn btn-facebook waves-effect waves-light">
   <i class="fa fa-facebook"></i>
</button>

<button type="button" class="btn btn-twitter waves-effect waves-light">
   <i class="fa fa-twitter"></i>
</button>

<button type="button" class="btn btn-linkedin waves-effect waves-light">
   <i class="fa fa-linkedin"></i>
</button>

<button type="button" class="btn btn-googleplus waves-effect waves-light">
   <i class="fa fa-google-plus"></i>
</button>
</div>                                        
  </div>
</nav>

<!-- sample modal content -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="myModalLabel">Log In to save Note</h4>
      </div>
      <div class="modal-body">
         <img src="/icons/favicon.png" style="    width: 57px;
    margin-left: 37%;">
@if($errors->has('email'))
            <div class="alert alert-danger">
              Incorrect email<br>
        </div>
        @endif
      <form action="{{route('auth.signin')}}" method="post" id="signin">
          <label>Username</label>
          <input class="form-control" type="text" name="username"  value="{{ Request::old('username') ?: '' }}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}"/>
         <br>
         <label>Password</label>
          <input class="form-control" type="password" name="password"  value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
          <br>
          <button class="btn btn-success" id="sign_in"  > Sign in </button>
          <a target="_blank" href="{{route('auth.register')}}" class="btn btn-warning ">Register an Account</a>
       
        <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
      </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">
$(function() {

var form = $('#signin');

$("#sign_in").click(function(e) {

e.preventDefault();

    var formData = $(form).serialize();

$.ajax({
type: 'POST',
url: $(form).attr('action'),
data: formData
})
.done(function(response) {
console.log("user signed in")
window.location.reload(true);
})
.fail(function(data) {
  console.log("sign in failed")

    });

  });
// new note ends here


            });
        </script>
    <!-- Modal-Effect -->
        <script src="/plugins/custombox/js/custombox.min.js"></script>
        <script src="/plugins/custombox/js/legacy.min.js"></script>
@endif

@if (Auth::check())
   <nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
  <a href="#?ref=shared+notes" id="save_shared" class="btn btn-lg btn-success"> Save Note</a>

 <span class="text-success">Welcome to Skilearn Shared Notes</span>


<div class="button-list pull-right">
<button type="button" class="btn btn-facebook waves-effect waves-light">
   <i class="fa fa-facebook"></i>
</button>

<button type="button" class="btn btn-twitter waves-effect waves-light">
   <i class="fa fa-twitter"></i>
</button>

<button type="button" class="btn btn-linkedin waves-effect waves-light">
   <i class="fa fa-linkedin"></i>
</button>

<button type="button" class="btn btn-googleplus waves-effect waves-light">
   <i class="fa fa-google-plus"></i>
</button>
</div>     
  </div>
</nav>
@endif
        <script src="{{ URL::asset('/src/vendor/new/js/bootstrap.min.js') }}"></script>

  </body>
</html>
