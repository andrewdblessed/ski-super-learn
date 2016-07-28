@extends('templates.default')

@section('content')
<style media="screen">
.form-group {
   padding-bottom: 0px;
  margin: 0;
}
</style>
<div class="container">
  <div class="row">
<div class="col-md-8 col-md-push-2">

  <h3>UPDATE YOUR INFORMATION</h3>
  <form class="" action="{{route('profile.edit')}}" enctype="multipart/form-data" method="post">

 <!--  HACK:errors  -->
@if($errors->has('first_name'))
<span class="help-block">{{ $errors->first('first_name')}} </span>
 @endif

 @if($errors->has('last_name'))
 <span class="help-block">{{ $errors->first('last_name')}} </span>
  @endif

  @if($errors->has('location'))
  <span class="help-block">{{ $errors->first('location')}} </span>
   @endif
   <!--  HACK:errors  ends-->

    <div class=" col-md-6 col-md-push-3 input-group{{ $errors->has('first_name') ? 'has-error': '' }}">
      <label for="first_name">First Name</label>
    <input type="text" id="first_name" class="form-control" name="first_name"  value="{{Request::old('first_name')  ?: Auth::user()->first_name}}" >
  </div>
  <br>
  <div class=" col-md-6 col-md-push-3  input-group{{ $errors->has('last_name') ? 'has-error': '' }}">
    <label for="last_name">Last Name</label>
  <input type="text" id="last_name" class="form-control" name="last_name"  value="{{Request::old('last_name')  ?: Auth::user()->last_name}}" >
</div>


<div class=" col-md-6 col-md-push-3  input-group{{ $errors->has('username') ? 'has-error': '' }}">
  <label for="username">Username (This cannot be changed)</label>
<input type="text" id="username" disabled class="form-control" value="{{Request::old('username')  ?: Auth::user()->username}}" >
</div>
<hr>
  <br>
  <div class=" col-md-6 col-md-push-3  input-group{{ $errors->has('gender') ? 'has-error': '' }}">
    <label for="gender">Gender</label>
  <input type="text" id="gender"  class="form-control" value="{{Request::old('gender')  ?: Auth::user()->gender}}" >
  </div>
  <div class=" col-md-6 col-md-push-3  input-group{{ $errors->has('location') ? 'has-error': '' }}">
    <label for="location">Location</label>
  <input type="text" id="location" class="form-control" name="location"  value="{{Request::old('location')  ?: Auth::user()->location}}" >
</div>
<div class=" col-md-6 col-md-push-3  input-group{{ $errors->has('birthday') ? 'has-error': '' }}">
  <label for="date">Date of Birth</label>
  <!-- markup -->
<input class="datepicker form-control" id="date" type="date" name="birthday"  value="{{Request::old('birthday')  ?: Auth::user()->birthday}}"/>

<!-- javascript -->
<script type="text/javascript">
$(function() {
$('.datepicker').datepicker({
  weekStart:1
});
});
</script>
</div>

<div class=" col-md-6 col-md-push-3  input-group{{ $errors->has('location') ? 'has-error': '' }}">
  <label for="school">School <a href="#">(Your school can be changed from your academic success >>>)</a></label>
<input type="text" id="school"  disabled class="form-control" value="{{Request::old('school')  ?: Auth::user()->school}}" >
</div>

<!-- IDEA:add the hub fields and also date of birth here  -->

  <button type="submit" class="btn btn-raised btn-round btn-info">
Update
  </button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">

  </form>


</div>
  </div>
</div>
@stop
