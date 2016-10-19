 @extends('templates.default')
  @section('content')

        <link href="/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />
                       <link href="{{ URL::asset('/src/vendor/new/css/components.css') }}" rel="stylesheet" type="text/css" />
   
    <!-- BEGIN PAGE SCRIPTS -->
        <script src="/plugins/moment/moment.js"></script>
        <script src='/plugins/fullcalendar/js/fullcalendar.min.js'></script>

  <div class="row">
 <div id='calendar'></div>
 </div>

<script type="text/javascript">

$(document).ready(function() {

'use strict';
    $('#calendar').fullCalendar({
        editable: true,
      eventLimit: true, // allow "more" link when too many events
      header: {
        // left: 'today labels',
        left: 'today',
        center: 'prev title next',
        right: 'month,agendaWeek,agendaDay,listDay'
      },
      defaultDate: moment('01/01/2016', 'MM/DD/YYYY').format(),
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [

      @foreach($my_tasks as $tasks)
        {
          id: '{{$tasks->id}}',
          title: '{{$tasks->task_title}}',
          start: '{{$tasks->task_date}}'
        },
        @endforeach
        {
          title: 'Long Event',
          start: '2016-06-07',
          end: '2016-06-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2016-06-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2016-06-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2016-06-11',
          end: '2016-06-13'
        },
        {
          title: 'Meeting',
          start: '2016-06-12T10:30:00',
          end: '2016-06-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2016-06-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2016-06-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2016-06-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2016-06-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2016-06-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2016-06-28'
        }
      ]
    });
    
  });

  
</script>

@stop