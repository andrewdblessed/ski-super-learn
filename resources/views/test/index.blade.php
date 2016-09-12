  @extends('templates.default')
  @section('content')
  <link rel="stylesheet" href="{{ URL::asset('src/ski-vendor/ski-calendar/css/calendar.css') }}" charset="utf-8">
  <link rel="stylesheet" href="{{ URL::asset('src/ski-vendor/ski-calendar/css/calendar-type1.css') }}" charset="utf-8">
<script src="{{ URL::asset('src/ski-vendor/ski-calendar/js/calendar.js') }}" charset="utf-8"></script>

<!-- DEV SCRIPT AND STYLE NOT TO BE ADDED TO PRODUCTION -->
<STYLE TYPE="text/css">
/*DEV STYLE*/
button.btn.btn-info.btn-raised.btn-fab {
    position: fixed;
    top: 84%;
    left: 85%;
}
</STYLE>

<script>
// DEV SCRIPT
$(document).ready(function() {
  var calType = "loading Simple";
  var calurl =  "/calendar/simple"; 
// 
 $("#cal_point").load(calurl);
 console.log(calType);
//
   $(".reload-cal").click(function(){
 $("#cal_point").load("/calendar/simple");
  console.log(calType);

              }); 

  
});
  
  </script>
<div class="more-pad"></div>
  <div id="cal_point">
  
   <section class="container wel-cal">
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
</div>
<button class=" reload-cal btn btn-info btn-raised btn-fab">r</button>
  @stop
