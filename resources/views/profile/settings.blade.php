@extends('templates.default')

@section('content')
<style media="screen">
.center-block {
display: block;
margin-left: 200px;
margin-right: 200px;
}
/*// Usage as a mixin*/
.element {
.center-block();
}
</style>
{{Auth::user()-> getFirstNameorUsername() }} Your Activities for today

<!-- <div class="container">
  <div class="row ">
      <div class="col-md-7 col-md-push-3">
        <div class="userSettings">
        <hr>
        <form class="" action="" method="post">
          <p>
            Notification
          </p>
        <div class="form-group text-left ">
        <input type="checkbox" checked data-toggle="switch" name="default-switch" id="switch-01" />    <span >email me when I have a new friend request</span>
        </div>
        <div class="form-group text-left">
        <input type="checkbox" checked data-toggle="switch" name="default-switch" id="switch-01" /><span> Email me when i get a HUB request</span>
        </div>
        <div class="form-group text-left">
        <input type="checkbox" checked data-toggle="switch" name="default-switch" id="switch-01" />Email me 1 day before my online hub class sections
        </div>
        <div class="form-group text-left">
        <input type="checkbox" checked data-toggle="switch" name="default-switch" id="switch-01" />email me when I have a new friend request
        </div>
      <hr>
          <p>
            Privacy
          </p>
        <div class="form-group text-left ">
        <input type="checkbox" checked data-toggle="switch" name="default-switch" id="switch-01" />    <span >email me when I have a new friend request</span>
        </div>
        <div class="form-group text-left">
        <input type="checkbox" checked data-toggle="switch" name="default-switch" id="switch-01" /><span> Email me when i get a HUB request</span>
        </div>
        <div class="form-group text-left">
        <input type="checkbox" checked data-toggle="switch" name="default-switch" id="switch-01" />Email me 1 day before my online hub class sections
        </div>
        <div class="form-group text-left">
        <input type="checkbox" checked data-toggle="switch" name="default-switch" id="switch-01" />email me when I have a new friend request
        </div>
<button type="submit" class=" text-center btn btn-lg btn-success">Save Settings</button>
      </form>
        </div>
            </div>
          </div>

    </div> -->
@stop
