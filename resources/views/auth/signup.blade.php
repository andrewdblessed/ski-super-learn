@extends('templates.home_include')@section('content')<div class="container white">  <div class="col s6">      <span class="center"> <h3>Create An Account</h3></span>          <div class="center">             <a href="{{route('google.signin')}}"class="btn red">          Register With Google <i class="fa fa-google"></i>        </a>          <a href="{{route('google.signin')}}"class="btn blue lighten-1">          Register With Twitter <i class="fa fa-twitter"></i>        </a>          <a href="{{route('google.signin')}}"class="btn blue">          Register With Facebook <i class="fa fa-facebook-square"></i>        </a>          </div>    <form action="{{route('auth.signup')}}" method="post">@if($errors->has('first_name'))<script>  $(document).ready(function(){    SnackBar.show({      text:"Please fix the following errors below",      pos: 'top-center',      backgroundColor: '#E74C3C',      duration: '10000',      actionTextColor: '#fff'  });  });</script>@endif@if($errors->has('last_name'))<script>  $(document).ready(function(){    SnackBar.show({      text:"Please fix the following errors below",      pos: 'top-center',      backgroundColor: '#E74C3C',      duration: '10000',      actionTextColor: '#fff'  });  });</script>@endif@if($errors->has('email'))<script>  $(document).ready(function(){    SnackBar.show({      text:"Please fix the following errors below",      pos: 'top-center',      backgroundColor: '#E74C3C',      duration: '10000',      actionTextColor: '#fff'  });  });</script>@endif@if($errors->has('username'))<script>  $(document).ready(function(){    SnackBar.show({      text:"Please fix the following errors below",      pos: 'top-center',      backgroundColor: '#E74C3C',      duration: '10000',      actionTextColor: '#fff'  });  });</script>@endif@if($errors->has('password'))<script>  $(document).ready(function(){    SnackBar.show({      text:"Please fix the following errors below",      pos: 'top-center',      backgroundColor: '#E74C3C',      duration: '10000',      actionTextColor: '#fff'  });  });</script>@endif@if($errors->has('hub'))<script>  $(document).ready(function(){    SnackBar.show({      text:"Please fix the following errors below",      pos: 'top-center',      backgroundColor: '#E74C3C',      duration: '10000',      actionTextColor: '#fff'  });  });</script>@endif@if($errors->has('Country'))<script>  $(document).ready(function(){    SnackBar.show({      text:"Please fix the following errors below",      pos: 'top-center',      backgroundColor: '#E74C3C',      duration: '10000',      actionTextColor: '#fff'  });  });</script>@endif<div class="row center">  <form class="" action="{{route('auth.signup')}}" method="post">    <div class="input-field col s6">          <input id="last_name" type="text" class="validate" name="last_name">          <label for="last_name">Last Name</label>        </div>        <div class="input-field col s6">          <input id="last_name" type="text" class="validate" name="first_name">          <label for="last_name">First Name</label>        </div>        <div class="input-field col s6">          <input id="last_name" type="text" class="validate" name="username">          <label for="last_name">Username</label>        </div>        <div class="input-field col s6">          <input id="email" type="email" class="validate" name="email">          <label for="last_name">Email</label>        </div>  <div class="input-field col s6">          <input id="password" type="password" class="validate" name="password">          <label for="last_name">Password</label>        </div>      </div>      <div class="center">           <button class="waves-effect waves-light btn blue center btn-medium" type="submit" >Create An Account</button> <a href="/signin" class="waves-effect waves-light btn blue center btn-medium">I have a Account</a>      </div>        <input type="hidden" name="_token" value="{{ Session::token() }}">    </form></div><div class="modal fade" id="log" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">  <div class="modal-dialog">    <div class="modal-content">      <div class="modal-header">        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>        <h4 class="modal-title" id="myModalLabel">Welcome Back To Ski Learn Login</h4>      </div>      <div class="modal-body">        <div class="col-md-8">        <form class="" action="{{route('auth.signin')}}" method="post">            <div class="form-group">                <input type="text" value="" placeholder="Email" name="email" class="form-control input-lg" ng-model="name" />            </div>            <div class="form-group">                <input type="password" value="" placeholder="password" name="password" class="form-control input-lg"/>            </div>            <button type="submit" class="btn btn-info btn-raised btn-round">              LogIn to Ski-Learn            </button>            <input type="hidden" name="_token" value="{{ Session::token() }}">        </form>      </div>      <div class="col-md-4">        <button type="button" class="btn btn-danger btn-raised">          LogIn With Google <i class="fa fa-google-plus-square"></i>        </button>        <button type="button" class="btn btn-info btn-raised">          LogIn With Facebook <i class="fa fa-facebook-square"></i>        </button>        <button type="button" class="btn btn-info btn-raised">          LogIn With Twitter <i class="fa fa-twitter-square"></i>        </button>      </div>      <div class="modal-footer"></div>    </div>  </div></div></div>@stop