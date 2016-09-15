    <link rel="stylesheet" href="{{ URL::asset('src/ski-vendor/ski-calendar/css/calendar-school.css') }}" charset="utf-8">
	<style type="text/css">
				i.material-icons.doc-help {
    float: right;
    color: #03a9f4;
    cursor: pointer;
}
		
				</style>
<script>
$(function() {
   $(".main_view").load("/calendar/school/events");
 });
</script>
<div class="container-fluid">
	<div class="row">
			<!-- main view start -->
					@if (!$school_year->count())
			
				<div class="col-md-6 col-md-push-3 main-intro">
					<div class="year-intro">
			<h3 class="text-muted"> New Academic Year</h3>
					<p class="text-info help-text" data-toggle="collapse" data-target="#yearcollapse" aria-expanded="false"
aria-controls="yearcollapse">what are academic years <i class="material-icons">help</i> </p>
					<div class="collapse text-danger" id="yearcollapse">	
						this is hello world
					</div>
					<button  data-toggle="collapse" data-target="#new_year" aria-expanded="false"
aria-controls="new_year" class="btn btn-raised btn-info">Create School Year</button>
					</div>
		
				

 <div class="collapse col-md-12" id="new_year">
			<form method="post" id="post_year" action="/post/school_year">
		  <input type="hidden" name="_token" value="{{ Session::token() }}">
		<div class="col-md-12">

			<div class="col-md-12" style="padding-left:0;">
				<div class="form-group">
 			<input type="text" value="" placeholder="Name of school year" name="year_name" class="form-control" />
 				<span class="text-info">*required</span>
			</div>
			</div>
				<div class="col-md-12" style="padding-left:0;">
				<div class="form-group">
	   			<input type="text" value="" placeholder="School Year Description:" name="year_des" class="form-control" /> 
	   			<span class="text-info">2 min Characters</span>
			</div>
			</div>
			<div class="col-md-12">
			<div class="form-group">
				<p class="text-info">Start Date: <span class="text-info">*required</span></p>
	 			<input type="text" name="year_start" value="03/12/2016" class="datepicker form-control">
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<p class="text-info">End Date: <span class="text-info">*required</span></p>
	 			<input type="text" name="year_end" value="03/12/2017" class="datepicker form-control">
			</div>
		</div>
			</div>
			<button type="submit" class="btn pull-right btn-info btn-raised post-year" autocomplete="off" data-loading-text="Saving Event...">Save</button>
</form>

</div>
</div>

@else
				{{-- load the main calendar event view to the user --}}
				<div class="main_view"></div>
{{-- get  the current calendar year entered by the user --}}
	@foreach ($school_year as $school_year)
				
	<div class="jumbotron year-data">
		    <span> <i class="material-icons doc-help">help</i> </span>
<h5>School year: {{ $school_year->year_name}}</h5>
<h5>Description: {{ $school_year->year_des}}</h5>
<h6>Start Date: {{ $school_year->year_start}}</h6>
<h6>End Date: {{ $school_year->year_end}}</h6>

	</div>
@endforeach 

{{-- school year data--}}
	<div class="jumbotron school-data">
		    <span> <i class="material-icons doc-help">help</i> </span>
<h5>Today: 21/12/2016</h5>
<h5>Upcoming Class: No upcoming Events</h5>
<h6>Upcoming Exams: No Upcoming Class</h6>
<h6>Upcoming Events: No Upcoming Events</h6>
<button data-toggle="modal" data-target="#newclass" class="btn btn-info btn-raised btn-round btn-sm">Add Class</button>
<button data-toggle="modal" data-target="#newexam" class="btn btn-info btn-raised btn-round btn-sm">Add Exam</button>
	</div>
@endif

  </div>
</div>

<!-- Modal Core -->
<div class="modal fade" id="newevent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">


 		 <div class="new_event col-md-12">
<button class="btn btn-raised pull-right btn-round btn-fab btn-warning close-modal" ><i class="material-icons">close</i></button>
			<form method="post" id="post_event" action="/school_event">
		  <input type="hidden" name="_token" value="{{ Session::token() }}">
			<button type="submit" class="btn btn-success btn-raised btn-round post-event" autocomplete="off" data-loading-text="Saving Event...">Save</button>
		<div class="col-md-8">

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
				@foreach ($cal_label as $cal_label)
					<option>{{$cal_label->label}}</option>
				@endforeach
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
        <a data-toggle="modal" data-target="#newevent" href="#" class="mfb-component__button--main" data-mfb-label="Add New Event">
          <i class="mfb-component__main-icon--resting "><i class="material-icons">event</i></i>
            <!-- <div class="point"></div> -->
          <i class="mfb-component__main-icon--active "><i class="material-icons">event_note</i></i>
        </a>
        <ul class="mfb-component__list">
        <li>
          	 <a href="#" data-mfb-label="Calendar Settings" class=" manager mfb-component__button--child">
              <i class="mfb-component__child-icon "><i class="material-icons">settings_input_component</i></i>
            </a>
          </li>
           <li>
          	 <a href="/calendar/labels" data-mfb-label="Calendar Settings" class="mfb-component__button--child">
              <i class="mfb-component__child-icon "><i class="material-icons">loyalty</i></i>
            </a>
          </li>
          <li>
           	<a href="feedback/calendar" data-mfb-label="Give us Feedback" class="mfb-component__button--child">
              <i class="mfb-component__child-icon "><i class="fa fa-reply"></i></i>
            </a>
          </li>

        </ul>
      </li>
    </ul>
    <script type="text/javascript">
  $(function() {

  $(".manager").click(function() {
 $('#settings').modal('toggle');

  });
  

var form = $('#post_event');

       
    $(".post-event").click(function(e) {
         e.preventDefault();
         var $btn = $(this).button('loading');
          $(".ski_loader").css("display", "block");

       SnackBar.show({
      text:"Adding Event",
      pos: 'bottom-center',
      backgroundColor: '#039be5',
      textColor: '#fff'
      });

        var formData = $(form).serialize();
    $.ajax({
    type: 'POST',
    url: $(form).attr('action'),
    data: formData
    })
    .done(function(response) {
    	$btn.button('reset');
    	    $(".main_view").load("/calendar/school/events");
 SnackBar.show({
      text:"Event Added",
      pos: 'bottom-center',
      backgroundColor: '#039be5',
      textColor: '#fff'
      });
 $('#newevent').modal('toggle');

       $(".wel-cal").css("display", "none");

          $(".ski_loader").css("display", "none");

    })
    .fail(function(data) {
      SnackBar.show({
      text:"Opps there seems to be an error",
      pos: 'top-center',
      backgroundColor: '#e53935'
      });
      $btn.button('reset');
      $(".ski_loader").css("display", "none");

        });
    });


        $(".close-modal").click(function(e) {
        	 $('#newevent').modal('toggle');
        });

        $('.datepicker').datepicker({
	weekStart:1
});

        });
    </script>


