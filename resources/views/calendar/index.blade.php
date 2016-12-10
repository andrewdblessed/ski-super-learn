 @extends('templates.default')
  @section('content')
  <script src="/plugins/jquery-knob/jquery.knob.js"></script>

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
<div class="row">

<div class="col-md-10 col-md-push-1 pull-data"  style=" box-shadow: 0 0px 0px 0 rgba(0,0,0,0),0 0px 0px 0; background-color: #fff; padding-top:20px;">
  <script type="text/javascript">
    $(document).ready(function(){
        $(".pull-data").load("/calendar/data");
    });
  </script>

<hr>
</div>
</div>

<div class="row">
  <div class="col-md-10 col-md-push-1"  style=" box-shadow: 0 0px 0px 0 rgba(0,0,0,0),0 0px 0px 0; background-color: #fff;">



<div id="items-ajax">

  <div  class="loader">
    <img class="loader-img" SRC="pageloader/hyper.gif">
  </div>

<script type="text/javascript">
  $(document).ready(function(){
      $("#items-ajax").load("/calendar/main");
  });
</script>

</div>

</div>
</div>

<ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover"  style="display: block;">
      <li class="mfb-component__wrap">
        <a href="#" class="mfb-component__button--main">
          <i class="mfb-component__main-icon--resting  mdi mdi-view-dashboard"></i>
          <i class="mfb-component__main-icon--active ion-close-round"></i>
        </a>
        <ul class="mfb-component__list">
          <li>
            <a href="{{route('calendar')}}" data-mfb-label="My Calendar" class="mfb-component__button--child">
              <i class="mfb-component__child-icon  mdi mdi-calendar"></i>
            </a>
          </li>
          <li>
            <a href="{{route('cloudpack')}}" data-mfb-label="My Files" class="mfb-component__button--child">
              <i class="mfb-component__child-icon  mdi mdi-cloud-sync"></i>
            </a>
          </li>

          <li>
            <a href="{{route('notebook')}}" data-mfb-label="My Notes" class="mfb-component__button--child">
              <i class="mfb-component__child-icon  mdi  mdi-book-open-page-variant"></i>
            </a>
          </li>

          <li>
            <a href="{{route('quest.index')}}" data-mfb-label="Quests" class="mfb-component__button--child">
              <i class="mfb-component__child-icon  mdi   mdi mdi-lightbulb"></i>
            </a>
          </li>

          <li>
            <a href="{{route('zones')}}" data-mfb-label="Ask a Questions" class="mfb-component__button--child">
              <i class="mfb-component__child-icon mdi mdi-forum"></i>
            </a>
          </li>
        </ul>
      </li>
    </ul>


@stop
