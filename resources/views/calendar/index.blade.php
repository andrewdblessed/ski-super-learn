@extends('templates.default')
@section('content')
<style type="text/css">
.modal {
    margin-top: -7%;
}
</style>
<script src="{{ URL::asset('/src/vendor/fullcalendar/lib/moment.min.js') }}" ></script>

<script src="{{ URL::asset('/src/vendor/fullcalendar/fullcalendar.min.js') }}" ></script>

<link rel="stylesheet" href="/src/vendor/fullcalendar/fullcalendar.css" charset="utf-8">
<!-- <link rel="stylesheet" href="/src/vendor/fullcalendar/fullcalendar.print.css" charset="utf-8">
 --><link rel="stylesheet" href="/src/vendor/fullcalendar/_materialFullCalendar.css" charset="utf-8">

   <link rel="stylesheet" href="{{ URL::asset('src/ski-vendor/ski-calendar/css/calendar.css') }}" charset="utf-8">

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
        $(function() {
                        $("#cal_point").load("/calendar/school");
         });
</script>

    @elseif($cal_section->section == "researcher")
<script type="text/javascript">
// $(function() {
//                 $("#cal_point").load("/calendar/simple");
//  });
</script> researcher
   @endif

    @endforeach
<!-- NOTE:: VIEWS IS BASED ON SELECTED CALENDAR -->

<!-- Modal Core -->
<div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">


     <div class="new_event col-md-12">
<button class="btn btn-raised pull-right btn-round btn-fab btn-warning manager" ><i class="material-icons">close</i></button>

    <div class="col-md-8 col-md-push-2">
      <div class="btn-group" data-toggle="buttons" >
    
         <label data-toggle="collapse" data-target="#school" aria-expanded="false"
aria-controls="school" class="btn btn-info btn-raised">
          <input type="radio" name="simple" id="simple" autocomplete="off" >
            School
        </label>
      </div>

         <label data-toggle="collapse" data-target="#school" aria-expanded="false"
aria-controls="school" class="btn btn-info btn-raised">
          <input type="radio" name="simple" id="simple" autocomplete="off" >
            School
        </label>
      </div>


     <div class="collapse" id="school">
  <h5 class="text-warning">
Manage Your Study life at ease
  </h5>
  <p>Are you sure you want to enable the school calendar. Note this will not effect your saved events in Simple Calendar</p>
       <button type="submit" class="btn btn-success btn-raised btn-round post-event" autocomplete="off" data-loading-text="Saving Event...">Save</button>

</div>
          </div>
  
     </div>
   </div>
  </div>


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
