
<style type="text/css">
.timeline-item .timeline-desk .timeline-box {
    padding: 8px;
}
.timeline-left .panel {
    margin-bottom: 11px;
}
</style>
<div class="timeline timeline-left">
    <article class="timeline-item alt">
        <div class="text-left">
            <div class="time-show first">
                <a href="{{route('calendar.my')}}" class="btn btn-primary w-lg">Today</a>
            </div>
        </div>
    </article>
             @if (!$my_tasks->count() && !$my_exams->count())

    <article class="timeline-item">
        <div class="timeline-desk">
            <div class="panel ">
                <div class="timeline-box">
                    <span class="arrow"></span>
                    <span class="timeline-icon bg-primary"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                    <h4 class="">Is Empty here</h4>
                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                    <p>View all your Coming and completed Activities here.</p>
                </div>
            </div>
        </div>
    </article>
    @else
    @foreach($my_tasks as $tasks)
          @if($tasks->task_date == date("m/d/Y"))
        <article class="timeline-item">
        <div class="timeline-desk">
            <div class="panel ">
                <div class="timeline-box">
                    <span class="arrow"></span>
                    <span class="timeline-icon bg-primary"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                    <h4 class="">{{$tasks->task_title}}</h4>
                    <p class="timeline-date text-muted"><small>{{$tasks->task_time}}</small></p>
                    <p>{{$tasks->task_body}}.</p>
                         <p>{{$tasks->task_type}}, {{$tasks->task_subject}}</p>
                </div>
            </div>
        </div>
    </article>
    @endif
        @endforeach
@foreach ($my_exams as $exams) 
   @if($exams->exam_date == date("m/d/Y"))
    <article class="timeline-item">
        <div class="timeline-desk">
            <div class="panel ">
                <div class="timeline-box">
                    <span class="arrow"></span>
                    <span class="timeline-icon bg-primary"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                    <h4 class="">You have {{$exams->exam_subject}} Exam today</h4>
                    <p class="timeline-date text-muted"><small>{{$exams->exam_time}}</small></p>
                    <p>Location: {{$exams->exam_address}}.</p>
                         <p>estimated time:{{$exams->exam_timer}}</p>
                </div>
            </div>
        </div>
    </article>
      @endif
    @endforeach
    @endif
    
</div>