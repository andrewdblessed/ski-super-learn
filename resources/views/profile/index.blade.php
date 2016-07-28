@extends('templates.default')
@section('content')
<style media="screen">
hr{
  margin: 0px;
}
body{
  background: white;
}
.ski-user-image{
    width: 217px;
    height: 217px;
    border-radius: 50%;
    margin-bottom: 34px;
}
.user-data-text{
    font-weight: 600;
    font-size: large;
}
.user-add-pic {
    padding-top: 172px;
    position: absolute;
    padding-left: 86px;
    text-decoration: underline;
    padding-right: 65px;
}
</style>
<div class="more-pad">

</div>
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-3">
  @if( $user->gender == "male" )
  <img src="/user-tools/profile-default/avatar.png" class="ski-user-image" alt="" />
  <!-- <img alt="{{$user->getNameOrUsername() }}" src="" class="avatar-img"> -->
  @else( $user->gender == "famale" )
    <button class="user-add-pic btn btn-info "><i class="fa fa-camera"></i> Add Pic</button>
    <img src="/user-tools/profile-default/avatar-1.png" class="ski-user-image" alt="" />
  @endif
<hr>
<h5 class="text-muted">Ski Spots</h5>
<br>
  <h3 class="text-muted">Created<small> Spots</small></h3>
  <p class="text-info">
    This tab will be active once Ski Spot is realease
  </p>
  <br>
  <h3 class="text-muted">Joined<small> Spots</small></h3>
  <p class="text-info">
    This tab will be active once Ski Spot is realease
  </p>
</div>
<div class="col-md-6">
<h3 class="text-muted">{{$user->getNameOrUsername() }} <small class="text-muted"><i class="fa fa-location-arrow"></i> {{$user->location}}</small></h3>
<p class="text-info">
  Student in ASUU University
</p>
<p>
  Ski Grade
</p>
<h4 class="user-data-text">Level 3</h4>

<div class="">

  <a href="{{route('profile.edit') }}" type="button" class="btn btn-info  btn-raised ">
  <i class="fa fa-user"></i>  Update Profile
</a>
  <a href="{{route('adela.settings') }}" type="button" class="btn btn-info   btn-raised ">
  <i class="fa fa-microphone"></i>  Adela Settings
</a>
  <a href="{{route('setting.index') }}" type="button" class="btn btn-info btn-raised ">
  <i class="fa fa-gear"></i>  Prefferernce
</a>

</div>
<hr>
<p>
  Email: <span class="user-data-text">{{$user->email}}</span>
</p>
<p>
  Country: <span class="user-data-text"> {{$user->location}}  </span>
</p>
<p>
  School: <span class="user-data-text"> {{$user->school}}  </span>
</p>
<p>
  Birthday:  <span class="user-data-text"> JUNE, 5 1992  </span>
</p>
<p>
  Gender:  <span class="user-data-text"> male  </span>
</p>
<br><hr>
<h3>Updates:</h3>
<div class="alert alert-info"> Upcoming upgrade on profile view</div>
</div>
<div class="col-md-3">
task to complete for nex level
</div>
</div>
</div>

@stop
