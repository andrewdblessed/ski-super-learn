
			<!-- innitiating full calendar javascript protocol-->
			

@if ($errors->has())
       <div class="alert alert-danger">
           @foreach ($errors->all() as $error)
               {{ $error }}<br>
           @endforeach
       </div>
       @endif

 		 <div class="new_event col-md-12">
<button class="btn btn-raised pull-right btn-round btn-fab btn-warning close-update" ><i class="material-icons">close</i></button>
			<form method="post" id="update_event" action="/school/update_event/{{ $school_event->id}}">
		  <input type="hidden" name="_token" value="{{ Session::token() }}">
			<button  autocomplete="off" data-loading-text="Updating Event..." type="submit" class="btn btn-success btn-raised btn-round update-event">Update</button>

					 
					 <button  autocomplete="off" data-loading-text="deleting Event..." class=" delete-event btn btn-round btn-raised btn-danger">
					 	<i class="material-icons">delete</i> Delete</button>
		<div class="col-md-8">
			<div class="col-md-12" style="padding-left:0;">
				<div class="form-group">
				<p class="text-info">Event Name:</p>
	   			<input type="text" value="{{ $school_event->event_name}}" name="event_name" class="form-control" />
			</div>
			</div>
				<div class="col-md-12" style="padding-left:0;">
				<div class="form-group">
				<p class="text-info">Event Description:</p>
	   			<textarea type="text" name="event_des" class="form-control">{{ $school_event->event_des}} </textarea>
			</div>
			</div>
			<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<p class="text-info">Created by</p>
    				<input type="text" value="{{ $school_event->created_by}}" name="created_by" class="form-control" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<p class="text-info">task link:</p>
    				<input type="text" value="{{ $school_event->event_link}}" name="event_link" class="form-control" />
    			</div>
			  </div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<p class="text-info">priority:</p>
					<select class="form-control"name="event_priority">
				@if( $school_event->event_priority == "High")
					<option>
						High</option>
						<option>
						Normal</option>
						<option>
						low</option>
				@elseif( $school_event->event_priority == "Normal")
					<option>
						Normal</option>
					<option>
						High</option>
						<option>
						low</option>
		@elseif( $school_event->event_priority == "low")
					<option>
						low</option>
					<option>
						High</option>
					<option>
						Normal</option>
						@endif
						
			</select>
				</div>
			</div>
			</div>

		<div class="col-md-4">
		<div class="col-md-12">
			<div class="form-group">
				<p class="text-info">Status:</p>
				<select class="form-control" name="event_status">
					@if( $school_event->event_status == "Not started")
					<option>
					Not started
					</option>
					<option>
					On going
					</option>
					<option>
					Completed
					</option>
					@elseif( $school_event->event_status == "On going")
					<option>
					On going</option>
					<option>
					Not started
					</option>
					<option>
					Completed</option>
					@elseif( $school_event->event_status == "Completed")
					<option>
					Completed</option>
					<option>
					Not started
					</option>
					<option>
					On going</option>
					@endif
					
				</select>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<p class="text-info">Label:</p>
				<select class="form-control" name="event_label">
				@if( $school_event->event_label != "No label")
				<option>
						{{ $school_event->event_label}}
					</option>
					<option>
						No label
					</option>
						@foreach ($cal_label as $cal_label)
					<option>{{$cal_label->label}}</option>
				@endforeach
							@elseif( $school_event->event_label == "No label")
					<option>
						No label
					</option>
						@foreach ($cal_label as $cal_label)
					<option>{{$cal_label->label}}</option>
				@endforeach
				@endif
					
				</select>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<p class="text-info">Start:</p>
	 			<input type="date" name="event_start" value="{{ $school_event->event_start}}" class="datepicker form-control">
	 			<input type="time" name="event_start_time" value="{{ $school_event->event_start_time}}" class="datepicker form-control">


			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-6">
					<div class="form-group">
				<p class="text-info">end Date:</p>
	 				<input type="date" name="event_end" value="{{ $school_event->event_end}}" class="datepicker form-control">
			</div>

			</div>
			<div class="col-md-6">
			<div class="form-group">
		<p class="text-info">end Time:</p>
			<input type="time" name="event_end_time" value="{{ $school_event->event_end_time}}" class="datepicker form-control">
			</div>
	</div>
		</div>

		</div>

			</form>


				</div>
  <script>
  $(function() {


var form = $('#update_event');

       
    $(".update-event").click(function(e) {
         e.preventDefault();
          var $btn = $(this).button('loading');
          $(".ski_loader").css("display", "block");

       SnackBar.show({
      text:"Updateing Event",
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
    	    $(".main_view").load("/calendar/school/events");
 SnackBar.show({
      text:"Event Updated",
      pos: 'bottom-center',
      backgroundColor: '#039be5',
      textColor: '#fff'
      });
  $btn.button('reset');
  $('#myModal').modal('toggle');

       $(".wel-cal").css("display", "none");


    })
    .fail(function(data) {
    	 $btn.button('reset');
      SnackBar.show({
      text:"Opps there seems to be an error",
      pos: 'top-center',
      backgroundColor: '#e53935'
      });
      $(".adela_loader").css("display", "none");

        });
    });
// 
// deleteing of event
// 
// 
       $(".delete-event").click(function(e) {
       	         e.preventDefault();
 var $btn = $(this).button('loading');
          $(".ski_loader").css("display", "block");
          SnackBar.show({text:'deleting {{ $school_event->event_name}}',
            pos: 'top-center',
           duration: '9000',
          });
        var  durl = "/school/deleteevent{{ $school_event->id}}";
        $.ajax({
        type: 'GET',
        url: durl,
        })
        .done(function(response) {
        	 $btn.button('reset');
    	    $(".main_view").load("/calendar/school/events");
          SnackBar.show({text:'{{ $school_event->event_name}} deleted',
            pos: 'top-center',
           duration: '9000',});
          console.log('event deleted');
          $(".ski_loader").css("display", "none");
            $('#myModal').modal('toggle');

        })
        .fail(function(data) {
          SnackBar.show({
          text:"Opps there seems to be an error",
          pos: 'top-center',
          backgroundColor: '#e53935'
          });
              	    $(".main_view").load("/calendar/school/events");

           $btn.button('reset');
          $(".ski_loader").css("display", "none");

            });
        });
    $(".close-update").click(function(e) {
        	 $('#myModal').modal('toggle');
        });
});
   
</script>