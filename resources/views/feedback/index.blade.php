
<!DOCTYPE HTML>
<html>
<head>
<title>Ski Learn For Schools</title>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
<script src="//fast.eager.io/zjA0V0k7lP.js"></script>
  <script src="/src/vendor/jquery/jquery.min.js"></script>

 <link href="/auth-assets/css/bootstrap.css" rel="stylesheet">
  <link href="/css/animate.css" rel="stylesheet">
<link href="{{ URL::asset('/css/material-kit.css') }}" rel="stylesheet">
<link href="{{ URL::asset('/src/vendor/mfb/mfb.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('/css/snackbar.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('/css/material-icons.css') }}" rel="stylesheet">
<link href="{{ URL::asset('/css/style.css') }}" rel="stylesheet">
</head>
<style type="text/css">
body{
  background-color: #fff;
}
img.doc-img-head {
    width: 138px;
}
.doc-jum.jumbotron {
    padding: 20px;
    text-align: center;
}
i.material-icons.doc-help {
    float: right;
    color: #03a9f4;
    cursor: pointer;
}
.jumbotron.start-pad {
    background-image: url('/doc/img/earth.png');
    color: #fff;
}
a.btn.btn-raised.doc-nav-btn {
    background-color: #607d8b;
    color: #fff;
}
a#forum-btn {
    margin-top: 89%;
    margin-right: -12%;
}
button#search-btn {
    position: absolute;
    top: 69%;
    left: 92%;
}
.doc-item.jumbotron {
    position: fixed;
    z-index: 1000;
    background: #fff;
    top: 13%;
    left: 6%;
    height: 100%;
    width: 90%;
    overflow-y: auto;
}
.modal-dialog {
    width: 284px;
    text-align: center;
}
</style>
<body>
<!-- Hero Welcome header -->
  <div class="jumbotron start-pad">
    <div class="container-fluid ">
<div class="nav-doc">
<a href="{{route('home')}}" class="btn btn-raised btn-round doc-nav-btn "><i class="material-icons">dashboard</i> Ski Learn</a>
@if (!Auth::check())
<button data-toggle="modal" data-target="#myAuth" class="btn btn-raised btn-round doc-nav-btn">Doc Login</button>
@else
<button data-toggle="modal" data-target="#myAuth" class="btn btn-raised btn-round doc-nav-btn">Doc Account</button>
@endif
</div>
    <div class="col-md-6 sch-wel-1">

        <h2 class="sch-welcome-2">Welcome to SKI LEARN Documentation</h2>
      <h4 class="sch-welcome-3">Everything You need to know!</h4>

     </div>

     <div class="col-md-6">
       <div class="sch-welcome-get col-md-8 col-md-push-1">
       
          <a class="btn btn-info btn-raised btn-round doc-nav-btn pull-right" id="forum-btn"> <i class="material-icons">group</i> Forum</a>

       </div>

     </div>
<button data-toggle="collapse" data-target="#search" aria-expanded="false"
aria-controls="search" class="btn btn-fab-min btn-fab btn-info btn-raised btn-round" id="search-btn"> <i class="material-icons">search</i> </button>
  </div>
</div>

<div class="container">
  <div class="row">
<div class="more-pad"></div>
 
<div class="col-md-8 col-md-push-2 col-md-pull-2 collapse" id="search">
<div class="jumbotron">
<div class="input-group has-info">
    
    <input type="text" name="label" class="form-control" placeholder="Search Documentation">
    <span class="input-group-addon">
    </span>
  </div>
  </div>
</div>

<script type="text/javascript">
  $(function() {

   $("#search-btn").click(function() {
$('#main-doc').collapse('toggle')
   });


});

</script>

   <!-- collapse toggle start div -->
  <div class="collapse in" id="main-doc">
    <!-- bringing up all help and documentation views -->

         <div class="col-md-4">
    <div class=" jumbotron doc-jum">
      <span> <i class="material-icons doc-help">help</i> </span>
        <img class="doc-img-head" src="/doc/img/id-card-2.png">
        <h3>Having probelm Sign In and managing your Account</h3>
        <a href="/doc/account"

         class="btn btn-raised btn-info btn-lg">Account Doc</a>
      </div>
    </div>

   <div class="col-md-4">
    <div class=" jumbotron doc-jum">
          <span> <i class="material-icons doc-help">help</i> </span>
        <img class="doc-img-head" src="/doc/img/adela.png">
        <h3>Having probelm Sign In and creating an Account</h3>
        <label class="btn btn-raised btn-info btn-lg">Account Doc</label>
      </div>
    </div>

       <div class="col-md-4">
    <div class=" jumbotron doc-jum">
          <span> <i class="material-icons doc-help">help</i> </span>
        <img class="doc-img-head" src="/doc/img/notebook.png">
        <h3>Having probelm Sign In and creating an Account</h3>
        <label class="btn btn-raised btn-info btn-lg">Account Doc</label>
      </div>
    </div>

      <div class="col-md-4">
    <div class=" jumbotron doc-jum">
          <span> <i class="material-icons doc-help">help</i> </span>
        <img class="doc-img-head" src="/doc/img/cloudpack.png">
        <h3>Having probelm Sign In and creating an Account</h3>
        <label class="btn btn-raised btn-info btn-lg">Account Doc</label>
      </div>
    </div>

          <div class="col-md-4">
    <div class=" jumbotron doc-jum">
          <span> <i class="material-icons doc-help">help</i> </span>
        <img class="doc-img-head" src="/doc/img/calendar.png">
        <h3>Having probelm Sign In and creating an Account</h3>
        <label class="btn btn-raised btn-info btn-lg">Account Doc</label>
      </div>
    </div>

          <div class="col-md-4">
    <div class=" jumbotron doc-jum">
          <span> <i class="material-icons doc-help">help</i> </span>
        <img class="doc-img-head" src="/doc/img/settings.png">
        <h3>Having probelm Sign In and creating an Account</h3>
        <label class="btn btn-raised btn-info btn-lg">Account Doc</label>
      </div>
    </div>

          <div class="col-md-4">
    <div class=" jumbotron doc-jum">
          <span> <i class="material-icons doc-help">help</i> </span>
        <img class="doc-img-head" src="/doc/img/deepsearch.png">
        <h3>Having probelm Sign In and creating an Account</h3>
        <label class="btn btn-raised btn-info btn-lg">Account Doc</label>
      </div>
    </div>
<!-- collapse toggle end div -->
      </div>
      <!-- collapse toggle end  -->



  </div>
</div>


<!-- Auth Modal Core -->
<div class="modal fade" id="myAuth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
      <div class="modal-body">
       <img src="/doc/img/auth.png" class="doc-img-head">
       <h4> <strong> Login with Ski learn Account</strong>
        </h4>
       <form action="/doc/signin" method="post">

       <div class="input-group has-info">
    
    <input type="text" name="username"  value="{{ Request::old('username') ?: '' }}" class="form-control" placeholder="Your Ski Learn username">
    <span class="input-group-addon">
    </span>
  </div>

  <div class="input-group has-info">
    
    <input type="password" name="password" class="form-control" placeholder="Your Ski Learn password" value="">
    <span class="input-group-addon">
    </span>
  </div>
  <div>
            <input type="hidden" name="_token" value="{{ Session::token() }}">

   <button type="submit" class=" btn-raised btn-lg btn btn-info ">Save</button>

</div>
         </form>

      </div>



      </div>
    </div>
  </div>
</div>


<script src="{{ URL::asset('/src/vendor/bootstrap/bootstrap.min.js') }}" ></script>
<script src="{{ URL::asset('/src/vendor/materialkit/material.min.js')}}" ></script>
<script src="{{ URL::asset('/src/vendor/materialkit/material-kit.js')}}" ></script>
<script src="{{ URL::asset('/src/vendor/snackbar/snackbar.min.js') }}"></script>

</body>
</html>
