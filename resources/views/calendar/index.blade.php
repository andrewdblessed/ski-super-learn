@extends('templates.default')
@section('content')
<script src="{{ URL::asset('/src/vendor/fullcalendar/lib/moment.min.js') }}" ></script>

<script src="{{ URL::asset('/src/vendor/fullcalendar/fullcalendar.min.js') }}" ></script>

<link rel="stylesheet" href="/src/vendor/fullcalendar/fullcalendar.css" charset="utf-8">
<!-- <link rel="stylesheet" href="/src/vendor/fullcalendar/fullcalendar.print.css" charset="utf-8">
 --><link rel="stylesheet" href="/src/vendor/fullcalendar/_materialFullCalendar.css" charset="utf-8">

   <link rel="stylesheet" href="{{ URL::asset('src/ski-vendor/ski-calendar/css/calendar.css') }}" charset="utf-8">
  <link rel="stylesheet" href="{{ URL::asset('src/ski-vendor/ski-calendar/css/calendar-type1.css') }}" charset="utf-8">
<script src="{{ URL::asset('src/ski-vendor/ski-calendar/js/calendar.js') }}" charset="utf-8"></script>


<!-- begin of design -->
<div class="more-pad"></div>
  <div id="cal_point"></div>
@if (!$cal_section->count())

   <section class="container wel-cal" style="display:block">
      <img src="/svg/calendar-2.svg" width="200px">
      <h3>Calendar
      </h3>
       <h4 class="text-muted"> Manage your Study life</h4>
        <button class=" begin-cal btn btn-round btn-raised btn-info"><i class="fa fa-calendar"></i>Begin Calendar</button>
    </section>

    <div id="grabMe" style="display:none;">
      <section class="cal-modal">
      <div class="wel-event">
        <h3 class="text-info"> Select a Calendar</h3>
        <span>You can change this later in Calendar settings</span>
      </div>
      <row class="cal-type-1">
      Simple
      </row>
      <row class="cal-type-2">
      School      </row>
      <row class="cal-type-3">
        Researcher
      </row>
      </section>
    </div>

<form style="display:none" method="post" id="simple-cal" action="/savesction">
<input name="section" value="simple">
  <input type="hidden" name="_token" value="{{ Session::token() }}">

</form>

<form style="display:none" method="post" id="school-cal" action="/savesction">
<input name="section" value="school">
  <input type="hidden" name="_token" value="{{ Session::token() }}">

</form>

<form style="display:none" method="post" id="researcher-cal" action="/savesction">
<input name="section" value="researcher">
  <input type="hidden" name="_token" value="{{ Session::token() }}">

</form>


    @endif



  @foreach ($cal_section as $cal_section)

    @if($cal_section->section == "simple")
<script type="text/javascript">
$(function() {
                $("#cal_point").load("/calendar/simple");
 });
</script>
    @elseif($cal_section->section == "school")
<script type="text/javascript">
        // $(function() {
        //                 $("#cal_point").load("/calendar/simple");
        //  });
</script> school

    @elseif($cal_section->section == "researcher")
<script type="text/javascript">
// $(function() {
//                 $("#cal_point").load("/calendar/simple");
//  });
</script> researcher
   @endif

    @endforeach
<!-- NOTE:: VIEWS IS BASED ON SELECTED CALENDAR -->

<script type="text/javascript">
$(function() {


// var formMessages = $('#activate_ai');

    $(".cal-type-1").click(function(e) {
       SnackBar.show({
      text:"Saving option",
      pos: 'bottom-center',
      backgroundColor: '#039be5',
      textColor: '#fff'
      });

      var form = $('#simple-cal');

      var formData = $(form).serialize();
    $.ajax({
    type: 'POST',
    url: $(form).attr('action'),
    data: formData
    })
    .done(function(response) {
 SnackBar.show({
      text:"Calendar Selected",
      pos: 'bottom-center',
      backgroundColor: '#039be5',
      textColor: '#fff'
      });
       $(".wel-cal").css("display", "none");


    })
    .fail(function(data) {
      SnackBar.show({
      text:"Opps there seems to be an error",
      pos: 'top-center',
      backgroundColor: '#e53935'
      });
      $(".adela_loader").css("display", "none");

        });
    });
//
// cal 2 school

        $(".cal-type-2").click(function(e) {
          var form = $('#school-cal');

      var formData = $(form).serialize();
    $.ajax({
    type: 'POST',
    url: $(form).attr('action'),
    data: formData
    })
    .done(function(response) {
 SnackBar.show({
      text:"Calendar Selected",
      pos: 'bottom-center',
      backgroundColor: '#039be5',
      textColor: '#fff'
      });

    })
    .fail(function(data) {
      SnackBar.show({
      text:"Opps there seems to be an error",
      pos: 'top-center',
      backgroundColor: '#e53935'
      });
      $(".adela_loader").css("display", "none");

        });
    });


            $(".cal-type-3").click(function(e) {
              var form = $('#researcher-cal');

      var formData = $(form).serialize();
    $.ajax({
    type: 'POST',
    url: $(form).attr('action'),
    data: formData
    })
    .done(function(response) {
 SnackBar.show({
      text:"Calendar Selected",
      pos: 'bottom-center',
      backgroundColor: '#039be5',
      textColor: '#fff'
      });

    })
    .fail(function(data) {
      SnackBar.show({
      text:"Opps there seems to be an error",
      pos: 'top-center',
      backgroundColor: '#e53935'
      });
      $(".adela_loader").css("display", "none");

        });
    });



});

</script>


@stop
