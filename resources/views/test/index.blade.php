  @extends('templates.default')
  @section('content')
  <link rel="stylesheet" href="{{ URL::asset('src/ski-vendor/ski-calendar/css/calendar.css') }}" charset="utf-8">
  <link rel="stylesheet" href="{{ URL::asset('src/ski-vendor/ski-calendar/css/calendar-school.css') }}" charset="utf-8">
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
  var calurl =  "/calendar/school"; 
// 
 $("#cal_point").load(calurl);
 console.log(calType);

   $(".reload-cal").click(function(){
 $("#cal_point").load("/calendar/school");
  console.log(calType);

              }); 

  
});
  
  </script>
<div class="more-pad"></div>

    <!-- display of dashboard for the student -->

    <div id="cal_point"></div>


<button class=" reload-cal btn btn-info btn-raised btn-fab">r</button>
  @stop
