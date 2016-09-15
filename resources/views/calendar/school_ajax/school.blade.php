
<script>
$(function() {
	

   $(".main_view").load("/calendar/school/events");

   $(".new-school").click(function(){
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
			<!-- main view start -->
			<div class="main_view">

			</div>
			<!-- Button trigger modal -->

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
<!-- 		school new window event ends
 -->

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
		<!-- school new event window begins  -->

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
            <div class="point"></div>
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


    })
    .fail(function(data) {
      SnackBar.show({
      text:"Opps there seems to be an error",
      pos: 'top-center',
      backgroundColor: '#e53935'
      });
      $btn.button('reset');
      $(".adela_loader").css("display", "none");

        });
    });

        $(".close-modal").click(function(e) {
        	 $('#newevent').modal('toggle');
        });

        });
    </script>
