@extends('templates.default')
@section('content')
<link href="{{ URL::asset('/datedp.min.css') }}" rel="stylesheet">
<script src="{{ URL::asset('/datedp.js') }}" ></script>

<style media="screen">
body{
  overflow-x: hidden;
}
.more-pad{
  padding-top: 10px;
}
.card.card-raised.vid_bar {
    width: 16%;
    position: fixed;
    height: 89%;
    margin-left: -18px;
    z-index: 10;
}

.card-raised.card{
padding-top: 40px;
}
.m-p-empty {
    text-align: center;
    color: rgb(120,144,156);
    font-family: sans-serif;
}
.m-i-svg {
    width: 27%;
    padding-top: 5.5%;
}
</style>
  <!-- // NOTE: Start of sidebar  -->
  <div class="container-fluid more-pad ">
   <!-- <div class="col-md-2 card card-raised vid_bar">
   Nothing to show here
  </div> -->

  <div class="col-md-12 col-md-push-2">
    <div class="container-fluid">
    <div class="col-md-8">
    <div class="card card-raised">
      <div class="col-md-12 m-p-empty">
        <img src="/svg/calendar-7.svg" alt="" class="m-i-svg"/>
    <h3>Welcome to Classes</h3>
    <p>
  Manage your Academic year, school terms, Classes and Holidays Across multiple devices
</p>
    <button type="button" data-toggle="modal" data-target="#firstfile"
     class="btn btn-info btn-raised btn-round">
    Set Academic Year<i class="material-icons">class</i>
    </button>

    <!-- Modal Core -->
    <div class="modal fade" id="firstfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add Academic year</h4>
          </div>
          <div class="modal-body">
            <ul class="nav nav-pills nav-pills-primary" role="tablist">
	<li>
		<a href="#dashboard" role="tab" data-toggle="tab">
			<i class="material-icons">dashboard</i>
			Dashboard
		</a>
	</li>
	<li class="active">
		<a href="#schedule" role="tab" data-toggle="tab">
			<i class="material-icons">schedule</i>
			Schedule
		</a>
	</li>
	<li>
		<a href="#tasks" role="tab" data-toggle="tab">
			<i class="material-icons">list</i>
			Tasks
		</a>
	</li>
</ul>
    	<div class="tab-content">
        <div role="tabpanel" class="tab-pane " id="tasks">
          <div class="container-fluid">
          <div class="col-md-6 col-md-push-3">
          <div class="card card-raised">
            <div class="col-md-12 m-p-empty">
          <h3>Activate your Drive</h3>
          <p>
        Access all of your Google Drive content </p> <button type="button" class="btn btn-info btn-raised btn-round">
        Activate Google Drive <img src="/icons/googledrive.png" alt="GD" />
          </button>
            </div>
          </div>
          </div>
          </div>
        </div>
    	</div>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <p>
            Start date
              </p>
                <div class="input-group">
                  <span class="input-group-addon"></span>
                  <input type="text" class="form-control" placeholder="" id="startyear">
                </div>
              </div>

              <div class="col-md-3">
                <p>
              End date
                </p>
                  <div class="input-group">
                    <span class="input-group-addon"></span>
                    <input type="text" class="form-control" placeholder="" id="endyear">
                  </div>
                </div>
          </div>
        </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-info ">Save</button>
          </div>
          <!--xxx modal script  -->
          <script>$( "#startyear" ).dateDropper();
          $( "#endyear" ).dateDropper();</script>
        </div>
      </div>
    </div>

      </div>
    </div>
    </div>
    </div>
  </div>
</div>
@stop
