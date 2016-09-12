<style type="text/css">
div#sid-cal {
    position: fixed;
    top: 14%;
    background-color: #03a9f4;
    color: white;
    padding: 21px;
    left: 78%;
    border-radius: 4px;
    height: 79%;
}
</style>
<div class="side-cal-nav">
<div class="btn-group">

<button class="btn-info btn-raised btn btn-sm">
	<i class="material-icons">settings_applications</i>
</button><button class="btn-info btn-raised btn btn-sm">
	<i class="material-icons">settings_applications</i>
</button><button class="btn-info btn-raised btn btn-sm">
	<i class="material-icons">settings_applications</i>
</button><button class="btn-info btn-raised btn btn-sm">
	<i class="material-icons">settings_applications</i>
</button>

</div>
<!-- ic_settings_applications_black_36dp
 --></div>
@if (!$cal_event->count())
				<!-- If the user as no events yet load this view -->
			<div class="text-center" style="display:block;">				
				<h3 class="text-info">lets get things started </h3>
					<button class="btn btn-raised btn-round btn-info new-simple" >Create First Event</button>
			</div>
			@else
			<!-- innitiating full calendar javascript protocol-->
			
			<script>

	$(document).ready(function() {

					@foreach ($cal_event as $cal_event)
	
					title: '{{ $cal_event->event_name}}',
					start: '{{ $cal_event->event_start}}',
					end: '{{ $cal_event->event_end}}',
					url: '{{ $cal_event->event_link}}',
					color: '#039be5',
					textColor: '#fff',
					description: 'world hello',
					label: '{{ $cal_event->event_label}}'
			
				@endforeach
	

	
	});

</script>
<!-- side view	 -->
<h3 class="text-muted"> Todays Activities</h3>
empty
			@endif
