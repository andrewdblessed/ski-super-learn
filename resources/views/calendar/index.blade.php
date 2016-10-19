 @extends('templates.default')
  @section('content')
   <link href="/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
            <link href="/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">

            <!-- ION Slider -->
        <link href="/plugins/ion-rangeslider/ion.rangeSlider.css" rel="stylesheet" type="text/css"/>
        <link href="/plugins/ion-rangeslider/ion.rangeSlider.skinModern.css" rel="stylesheet" type="text/css"/>


<!--  LOADING OF CALENDAR SCRIPTS -->
             <script src="/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
        <script src="/plugins/select2/js/select2.min.js" type="text/javascript"></script>
              <script src="/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
      <script src="/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
              <script src="/plugins/ion-rangeslider/ion.rangeSlider.min.js"></script>


<style type="text/css">
.page-title-box {
     padding: 0; 
}
.panel-body.point-panel {
    padding: 10px 0 20px 0;
}
.list-group-item:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.list-group.task-items {
    height: 433px;
    overflow: auto;
}
.list-group-item {

     border: none; 
}
/*the new styles*/
img.animated.pulse.infinite.no-task {
    width: 200px;
    margin-left: 41px;
}
</style>

<div class="col-lg-4">



<div id="timeline-ajax">
  <script type="text/javascript">
$(document).ready(function(){

                $("#timeline-ajax").load("/timeline");
                  });
</script>
    
</div>


</div>

<div class="col-lg-8">




<div id="items-ajax">
    <div class="loader">
  <span class="circle1"></span>
  <span class="circle2"></span>
  <span class="circle3"></span>
  <span class="circle4"></span>
  <span class="circle5"></span>
  <span class="circle6"></span>
</div>


<script type="text/javascript">
$(document).ready(function(){

                $("#items-ajax").load("/calendar/main");
                  });
</script>

</div>
</div>




@stop