    <div id="loader" ></div>
        <div id="alert" ></div>
<!--
        <script src="{{ URL::asset('/user-tools/calendar-script/task-script.js') }}"></script>
 -->
<div class="row">
<div class="col-lg-6">
  <a href="{{route('calendar.my')}}" class=" ">
              <div class="card-box">
              @if (!$my_tasks->count())
            <p class="text-muted center-text">
            No Pending task
            </p>
            @else


      You have {{ $my_tasks->count() }} Tasks pending


             @endif
             <br>

              @if (!$my_exams->count())
            <p class="text-muted center-text">
            No Upcoming Exam
            </p>
            @else


      You have {{ $my_exams->count() }} Exams Upcoming


             @endif


      <h3 class="dash-text text-center">Activities</h3>
    </div>
</a>
</div>

<div class="col-lg-6">
  <a href="#" class="my-task">
              <div class="card-box">
                   @if (!$my_tasks->count())
            <p class="text-muted center-text">
            No Pending Tasks
            </p>
            @else
            Upcoming Tasks
             @foreach($my_tasks as $tasks)
             @if($tasks->task_date >= date("m/d/Y"))

               <p class="text-muted center-text animated fadeIn">
                {{$tasks->task_title}} due {{$tasks->task_date}}
            </p>
            @endif

             @endforeach
             @endif
      <h3 class="dash-text text-center">Tasks</h3>
    </div>
</a>
</div>

<!-- <div class="col-lg-6">
  <a href="{{route('cloudpack')}}" class=" ">
              <div class="card-box">
            <p class="text-muted center-text">
            view time tables
            </p>
             <br>
            <br>
      <h2 class="dash-text text-center">Currriculum</h2>
    </div>
</a>
</div> -->
</div>
<div class="row" >
<div class="col-lg-6">
  <a href="#" class="my-exams">
              <div class="card-box">
                  @if (!$my_exams->count())
            <p class="text-muted center-text">
            No upcoming Exam
            </p>
            @else
            Upcoming Exams
             @foreach($my_exams as $exams)
             @if($exams->exam_date >= date("m/d/Y"))

               <p class="text-muted center-text animated fadeIn">
                {{$exams->exam_subject}} due {{$exams->exam_date}}
            </p>
            @endif

             @endforeach
             @endif
      <h3 class="dash-text text-center">Exams</h3>
    </div>
</a>
</div>

<div class="col-lg-6">
  <a href="#" class=" ">
              <div class="card-box">
            <p class="text-muted center-text">
            No Upcoming Classes
            </p>
             <br>
            <br>
      <h2 class="dash-text text-center">Classes</h2>
    </div>
</a>
</div>
<!--
<div class="col-lg-6">
  <a href="{{route('cloudpack')}}" class=" ">
              <div class="card-box">
            <p class="text-muted center-text">
            No Upcoming Quest
            </p>
             <br>
            <br>
      <h2 class="dash-text text-center">Ski Quest</h2>
    </div>
</a>
</div> -->

</div>

<script type="text/javascript">
$(document).ready(function(){


function ajaxfun(btn, url) {
$(btn).click(function(){
 $("#loader").after(
'<div class="loader2" >'+ '<span class="circle1"></span>'+
 '<span class="circle2"></span>'+
 '<span class="circle3"></span>'+
 '<span class="circle4"></span>'+
 '<span class="circle5"></span>'+
  '<span class="circle6"></span>'+
   '<div>');

    $("#items-ajax").load(url, function( response, status, xhr ) {
  if ( status == "error" ) {
    $("#alert").after(
            ' <div class="alert alert-danger alert-dismissible fade in" role="alert">'+
               ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                    '<span aria-hidden="true">&times;</span>'+
                '</button>'+
                'Oops, the Internet as been broken. Please reload the page'+
           ' </div>');
  }
});

});

}

ajaxfun(".my-task", "/calendar/task");
ajaxfun(".my-exams", "/calendar/exam");
ajaxfun(".my-class", "/calendar/class");
ajaxfun(".nav-back", "/calendar/main");



});

</script>
