<div class="animated fadeIn">
  <div class="col-lg-4 col-md-6">
      <div class="card-box widget-box-three">
          <div class="bg-icon pull-left">
              <i class="ti-book"></i>
          </div>
          <div class="text-right">
              <p class="text-success m-t-5 text-uppercase font-600 font-secondary">Total Class</p>

              <h2 class="m-b-10"><span data-plugin="counterup">{{ $my_class->count() }}</span></h2>
            <span>Upcoming</span>  @foreach($my_class as $class)
          @if($class->class_date >= date("m/d/Y"))
        <b>  {{$class->class_subject }},</b>
              @endif
              @endforeach
          </div>
      </div>
  </div>

  <div class="col-lg-4 col-md-6">
      <div class="card-box widget-box-three">
          <div class="bg-icon pull-left">
              <i class=" ti-check-box"></i>
          </div>
          <div class="text-right">
              <p class="text-pink m-t-5 text-uppercase font-600 font-secondary">All Task</p>
              <h2 class="m-b-10"><span data-plugin="counterup">{{ $my_tasks->count() }}</span></h2>
              <span>Upcoming</span>  @foreach($my_tasks as $tasks)
            @if($tasks->task_date >= date("m/d/Y"))
          <b>  {{$tasks->task_title }},</b>
                @endif
                @endforeach
          </div>
      </div>
  </div>

  <div class="col-lg-4 col-md-6">
      <div class="card-box widget-box-three">
          <div class="bg-icon pull-left">
              <i class="ti-bookmark-alt "></i>
          </div>
          <div class="text-right">
              <p class="text-purple m-t-5 text-uppercase font-600 font-secondary">Exams</p>
              <h2 class="m-b-10"><span data-plugin="counterup">{{ $my_exams->count() }}</span></h2>
              <span>Upcoming</span>  @foreach($my_exams as $exam)
            @if($exam->exam_date >= date("m/d/Y"))
            <b>  {{$exam->exam_subject }},</b>
                @endif
                @endforeach
          </div>
      </div>
  </div>

</div>
