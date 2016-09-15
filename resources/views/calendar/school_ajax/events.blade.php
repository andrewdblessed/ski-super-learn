			<!-- innitialize view custom css -->
			<style type="text/css">
			.main_view {
			    text-transform: capitalize;
			    border-style: solid;
			    border-width: medium;
			    border-radius: 17px;
			    border-color: #fff;
			    padding-top: 32px;
			    background-color: #fff;
			}

			</style>
			<!-- innitiating full calendar javascript protocol-->
			
			<script>

	$(document).ready(function() {
		
			var myModal = new jBox('Modal', {
    content: $('#grabMe')

});

		
                // $("#side_point").load("/calendar/school/sidebar");

		$('#calendar').fullCalendar({
			    customButtons: {
        // labels: {
        //     text: 'Label!',
        //     click: function() {
        //     	   SnackBar.show({text:"Loading",
        //       pos: 'bottom-center',
        //    });
        //        $("#side_point").load("/calendar/school/sidebar");
        //     }
        // }
    },
			header: {
				// left: 'today labels',
				left: 'today',
				center: 'prev title next',
				right: 'month,agendaWeek,agendaDay,listDay'
			},
			defaultDate: moment().format("YYYY MM DD"),
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
			// BACK GROUND EVENTS FOR SCHOOL YEAR, EXAMS, CLASSES
			@foreach ($school_year as $school_year)
				
				{
					id: '{{ $school_year->id}}',
					title: '{{ $school_year->year_name}}',
					start: '{{ $school_year->year_start}}',
					end: '{{ $school_year->year_end }}',
					description: '{{ $school_year->year_des }}',
					overlap: true,
					rendering: 'background',
					color: '#b0bec5'
				},
				@endforeach
			// BACKGROUND EVENTS ENDS HERE
				@foreach ($cal_event as $cal_event)
				{
					id: '{{ $cal_event->id}}',
					title: '{{ $cal_event->event_name}}',
					@if($cal_event->event_start_time == '00:00:00')
					start: '{{ $cal_event->event_start}}',
					@else
					start: '{{ $cal_event->event_start}}T{{ $cal_event->event_start_time}}',
					@endif
					@if($cal_event->event_end_time == '00:00:00')
					end: '{{ $cal_event->event_end}}',
					@else
					end: '{{ $cal_event->event_end}}T{{ $cal_event->event_end_time}}',
					@endif
					// url: '{{ $cal_event->event_link}}',
					color: '#039be5',
					textColor: '#fff',
					description: '{{ $cal_event->event_des}}',
					label: '{{ $cal_event->event_label}}'
				},
				@endforeach
			],

			 eventClick: function(calEvent, jsEvent, view) {

              SnackBar.show({text:"Loading Event",
              pos: 'top-center',
           });


                $("#side_point").load("school-event/"+calEvent.id);
$('#myModal').modal();

        console.log('Event: ' + calEvent.title);
        console.log('description: ' + calEvent.description);
        console.log('label: ' + calEvent.label);
        // change the border color just for fun
        $(this).css('border-color', 'red');

    }
		});

	
	});

</script>
<style>

#calendar {
    max-width: 90%;
    /* max-height: 90%; */
    margin: 0 auto;
}

	.fc-row.fc-week.fc-widget-content.fc-rigid {
    height: 168px;
}
.jBox-container {
    left: -42%;
}

</style>

<!-- calendar div point -->
	<div id='calendar'></div>

		<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<div id="side_point">
<img src="user-tools/load-ani/ajax-loader.gif">
</div>

 		</div>
		</div>

      </div>
