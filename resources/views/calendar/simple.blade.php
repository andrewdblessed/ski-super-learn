
<script>
$(function() {

   $(".main_view").load("/calendar/simple/events");

   $(".new-simple").click(function(){
               $(".sim-event-window").css("display", "block");
                   $(".sim-intro").css("display", "none");
           });
      $(".sim-event-close").click(function(){
               $(".sim-event-window").css("display", "none");
                $(".sim-intro").css("display", "block");
           });

$('.btn-tooltip').tooltip();

 <!-- javascript -->

$('.datepicker').datepicker({
	weekStart:1
});
 });
</script>
<div class="container-fluid">
	<div class="row">
		<!-- fixed calendar nav bar -->

		<div class="col-md-12">

					<!-- main view start -->
			<div class="main_view">

			</div>
			<!-- Button trigger modal -->

<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">


 		 <div class="new_event col-md-12">
		<div class="col-md-8">

			<form method="post" action="/simple_event">
		  <input type="hidden" name="_token" value="{{ Session::token() }}">
			<button type="submit" class="btn btn-success btn-raised ">Save</button>

					 <button class="btn btn-raised sim-event-close" >Close</button>

			<div class="col-md-12" style="padding-left:0;">
				<div class="form-group">
				<p class="text-info">Event Name:</p>
	   			<input type="text" value="" placeholder="Name of Event" name="event_name" class="form-control" />
			</div>
			</div>
				<div class="col-md-12" style="padding-left:0;">
				<div class="form-group">
				<p class="text-info">Event Description:</p>
	   			<textarea type="text" value="" placeholder="Describe Your Event" name="event_des" class="form-control"> </textarea>
			</div>
			</div>
			<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<p class="text-info">Created by</p>
    				<input type="text" value="Andrew Ben Richard" placeholder="Andrew Ben Richard" name="created_by" class="form-control" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<p class="text-info">task link:</p>
    				<input type="text" value="" placeholder="task url of any" name="event_link" class="form-control" />
    			</div>
			  </div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<p class="text-info">priority:</p>
					<select class="form-control" name="event_priority">
					<option>
						High</option>
						<option>
						Normal</option>
						<option>
						low</option>
					</select>
				</div>
			</div>
			</div>

		<div class="col-md-4">
		<div class="col-md-12">
			<div class="form-group">
				<p class="text-info">Status:</p>
				<select class="form-control" name="event_status">
					<option>
						Not started</option>
						<option>
						On going</option>
						<option>
						Completed</option>
				</select>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<p class="text-info">Label:</p>
				<select class="form-control" name="event_label">
					<option>
						No label</option>
				</select>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<p class="text-info">Start:</p>
	 			<input type="date" name="event_start" class="datepicker form-control">
	 			<input type="time" name="event_start_time" class="datepicker form-control">


			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<p class="text-info">end:</p>
	 			<input type="time" name="event_end_time" class="datepicker form-control">
				<input type="date" name="event_end" class="form-control">
			</div>
		</div>

		</div>



			</form>

	</div>
				</div>
<!-- 		simple new window event ends
 -->

 		</div>
		</div>

      </div>
    </div>
  </div>
</div>


				<!-- new event modal -->
   @if ($errors->has())
              <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                      {{ $error }}<br>
                  @endforeach
              </div>
              @endif
		<!-- simple new event window begins  -->

	</div>
</div>
<style media="screen">
 .mfb-component__button--main:hover, .mfb-component__button--main:focus {
  color: #fff;
}
.mfb-component__button--child:hover, .mfb-component__button--child:focus {
 color: #fff;
}
</style>
<ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">


      <li class="mfb-component__wrap">
        <a data-toggle="modal" data-target="#myModal" href="#help" class="mfb-component__button--main" data-mfb-label="Ski Learn Help Desk">
          <i class="mfb-component__main-icon--resting "><i class="material-icons">event</i></i>
            <div class="point"></div>
          <i class="mfb-component__main-icon--active "><i class="material-icons">event_note</i></i>
        </a>
        <ul class="mfb-component__list">
          <li>
            <a href="#feedback" data-mfb-label="Give us Feedback" class="mfb-component__button--child">
              <i class="mfb-component__child-icon "><i class="fa fa-reply"></i></i>
            </a>
          </li>
        </ul>
      </li>
    </ul>
