@if (!$cal_event->count())
<style type="text/css">
.boarding {
    width: 102%;
    height: 100%;
    position: fixed;
    top: 7%;
    border-bottom-right-radius: 380px;
    background-color: #0caaf4;
    z-index: -1;
    left: -1%;

}
.sim-boarding {
    text-align: center;
    padding-top: 37%;
    text-transform: capitalize;
    color: #fff;
    float: right;
    padding-right: 13%;
}
img.board-img-1 {
    width: 11%;
    position: absolute;
    top: 21%;
    left: 20%;
}
img.board-img-2 {
    width: 11%;
    position: absolute;
    top: 46%;
    left: 81%;
}
img.board-img-3 {
    width: 11%;
    position: absolute;
    top: 1%;
    left: 73%;
}
img.board-img-plane {
    width: 14%;
    position: absolute;
    padding-top: 8%;
    left: 27%;
}
body{
	overflow: hidden;
}
</style>
<div class="boarding"></div>
				<!-- If the user as no events yet load this view -->
			<div class="sim-boarding" style="display:block;">
				<h4>Tap on the indicated button by the right to create your first Event</h4>
			</div>
			<div class="sim-intro" style="display:block;">				
				<h3 class="">lets get things started </h3>
			</div>
			<div class="ski-cal-bord-img">
				<img class="board-img-1" src="src/ski-vendor/ski-boarding/image/bell.png">	
				<img class="board-img-2" src="src/ski-vendor/ski-boarding/image/calendar.png">	
				<img class="board-img-3" src="src/ski-vendor/ski-boarding/image/clock.png">	
				<img class="board-img-plane" src="src/ski-vendor/ski-boarding/image/paper-plane.png">	

			</div>
			@else
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
		
                // $("#side_point").load("/calendar/simple/sidebar");

		$('#calendar').fullCalendar({
			    customButtons: {
        // labels: {
        //     text: 'Label!',
        //     click: function() {
        //     	   SnackBar.show({text:"Loading",
        //       pos: 'bottom-center',
        //    });
        //        $("#side_point").load("/calendar/simple/sidebar");
        //     }
        // }
    },
			header: {
				// left: 'today labels',
				left: 'today',
				center: 'prev title next',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: moment().format("YYYY MM DD"),
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				@foreach ($cal_event as $cal_event)
				{
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
					url: '{{ $cal_event->event_link}}',
					color: '#039be5',
					textColor: '#fff',
					description: '{{ $cal_event->event_des}}',
					label: '{{ $cal_event->event_label}}'
				},
				@endforeach
			],

			 eventClick: function(calEvent, jsEvent, view) {

        alert('Event: ' + calEvent.title);
        alert('Event: ' + calEvent.description);
        alert('Event: ' + calEvent.label);
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

</style>

<!-- calendar div point -->
	<div id='calendar'></div>

<!-- side view	 -->
<!-- <div id="sid-cal">
<div id="side_point"></div>
</div> -->

			@endif
