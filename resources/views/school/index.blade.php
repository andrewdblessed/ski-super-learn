@extends('templates.default')
@section('content')
<script src="{{ URL::asset('/src/vendor/fullcalendar/lib/moment.min.js') }}" ></script>

<script src="{{ URL::asset('/src/vendor/fullcalendar/fullcalendar.min.js') }}" ></script>

<link rel="stylesheet" href="/src/vendor/fullcalendar/fullcalendar.css" charset="utf-8">
<link rel="stylesheet" href="/src/vendor/fullcalendar/fullcalendar.print.css" charset="utf-8">
<!-- <link rel="stylesheet" href="/src/vendor/fullcalendar/_materialFullCalendar.css" charset="utf-8">
 -->

<script>

  $(document).ready(function() {


  var myModal = new jBox('Modal', {
    content: $('#grabMe')

    });
    
       var date = new Date();

       var month = date.getMonth();
       var day = date.getDate();
       var year = date.getFullYear();

       var monthNames = [ "January", "February", "March", "April", "May", "June",
           "July", "August", "September", "October", "November", "December" ];

       // document.getElementById("notedate").innerHTML = day+" "+monthNames[month]+" "+year;
       var currentDate = day+" "+monthNames[month]+" "+year;

    $('#calendar').fullCalendar({

      defaultDate: currentDate,
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2016-06-01',
          background: 'black'
        },
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
      ],

       eventClick: function(calEvent, jsEvent, view) {
        var myModal = new jBox('Modal', {
    title: 'Grab an element' + calEvent.title,
    // content: $('#grabMe')
      });

        myModal.open();
        // alert('Event: ' + calEvent.title);
        // alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
        // alert('View: ' + view.name);

        // change the border color just for fun
        $(this).css('border-color', 'red');

    }
    });


  });

</script>
<style>
  #calendar {
    max-width: 900px;
    margin: 0 auto;
    }
</style>

<div class="more-pad"></div>

  <div class="container">
    <div class="row">

      <div class="col-md-8">
        <div id='calendar'></div>
      </div>
      <div class="col-md-4">
        @if ($errors->has())
               <div class="alert alert-danger">
                   @foreach ($errors->all() as $error)
                       {{ $error }}<br>
                   @endforeach
               </div>
               @endif

                   <form  action="{{route('post.section')}}" id="new_note" method="post">
                     <input type="hidden" name="_token" value="{{ Session::token() }}">
                     <input type="text" name="section" value="">
                     <input type="text" name="section_start" value=" section start">
                     <input type="text" name="section_end" value="section end">
                    <button type="submit" class="btn btn-default">
                      submit
                    </button>
                   </form>

      </div>
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
  <div class="point"></div>

      <li class="mfb-component__wrap">
        <a href="#help" class="mfb-component__button--main" data-mfb-label="Ski Learn Help Desk">
          <i class="mfb-component__main-icon--resting ">+</i>
          <i class="mfb-component__main-icon--active "><i class="fa fa-medkit"></i></i>
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

@stop
