
      <div class="panel panel-primary panel-border ">
<div id="alert">

</div>
   <div class="panel-heading">
       <div class="page-title-box">
              <div class="pull-right">
                <div class="btn-group">
                  <button class="btn btn-icon waves-effect btn-primary m-b-5 nav-back "><i class="typcn  typcn-chevron-left"></i> </button>
                  <button class="btn btn-icon waves-effect btn-primary m-b-5 add"><i class="typcn   typcn typcn-plus"></i> </button>
                  <button class="btn btn-icon waves-effect btn-primary m-b-5 sub"><i class="typcn typcn-tags"></i> </button>

                </div>

      </div>
              <h4 class="page-title">Task</h4>
          </div>
          </div>

          <div class="panel-body point-panel">

            <div class="col-md-5">

         @if (!$my_tasks->count())
        <div class="">
<h3 class="cloud-h3">Welcome to Ski Task</h3>
  <img class=" animated pulse infinite no-task" src="{{ URL::asset('/src/vendor/new/images/icons/todo_list.svg')}}" title="No Tasks.svg"/>
<h5>Quick tip:  <img class="icon-colored" src="{{ URL::asset('/src/vendor/new/images/icons/flash_on.svg')}}" title="Ski.svg"/> Each completed task gives you 5 Ski Stars</h5>
<button type="button" class=" add btn btn-primary btn-lg text-center waves-effect w-md ">
Add Task<i class=" mdi mdi-cloud-upload"></i>
</button>
  </div>
         @else

<div class="list-group task-items">

@foreach($my_tasks as $tasks)
<a href="#" class="list-group-item " id="task{{$tasks->id}}">
  <span class="badge badge-primary ">{{$tasks->task_date}}</span>
    <h5 class="text-purple"><b>{{$tasks->task_title}}</b></h5>
    <p>{{$tasks->task_type}}, {{$tasks->task_subject}}</p>
</a>
@endforeach
</div>

@endif


</div>

 <div class="col-md-7">
  <div class="task_viewer">
<form class="form-horizontal" role="form" method="post" action="{{route('post.tasks')}}" id="new_task">
          <input type="hidden" name="_token" value="{{ Session::token() }}">

  <div class="form-group">
<input type="text" required class="form-control" maxlength="70" name="task_title" id="defaultconfig" placeholder="Task Title..."/>
</div>

<div class="row">
  <div class="form-group col-md-8">

      <label class="control-label">Add Subject</label>
      <span>
        <button class="btn btn-icon btn-sm waves-effect btn-primary m-b-1 btn-rounded"><i class=" typcn   typcn typcn-plus"></i> </button>

    </span>
    <select required class="form-control" name="task_subject">
      @if (!$my_subject->count())
     <option>No Subject</option>
     @else
     @foreach($my_subject as $subject)
     <option> {{$subject->subject}} </option>
     @endforeach

     @endif
    </select>
 </div>

   <div class="form-group col-md-4">
      <label class="control-label">Task Type</label>
     <select required class="form-control" name="task_type">
      <option>Assigment</option>
      <option>Reminder</option>
      <option>Revision</option>
      <option>External Activities</option>
  </select>
 </div>
</div>
<div class="row">

<div class="col-md-6">
  <label>Due Time</label>
<div class="input-group clockpicker m-b-20" data-placement="top" data-align="top" data-autoclose="true">
  <input type="text" class="form-control" value="13:14" name="task_time">
  <span class="input-group-addon bg-primary"> <span class="mdi mdi-clock"></span> </span>
</div>
</div>

<div class="col-md-6">

<div class="form-group">
    <label>Due Date</label>
    <div>
        <div class="input-group">
            <input name="task_date" type="text" required class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
            <span class="input-group-addon bg-primary b-0"><i class="mdi mdi-calendar text-white"></i></span>
        </div><!-- input-group -->
    </div>
</div>
</div>

</div>
<button class="btn btn-icon waves-effect btn-primary m-b-5 save_task"><i class=" mdi mdi-content-save"></i> Save</button>

</form>

</div>

            </div>
          </div>
      </div>


<script type="text/javascript">
$(document).ready(function(){

  function ajaxfun(btn, url, location) {
  $(btn).click(function(){
   $("#loader").after(
  '<div class="loader2" >'+ '<span class="circle1"></span>'+
   '<span class="circle2"></span>'+
   '<span class="circle3"></span>'+
   '<span class="circle4"></span>'+
   '<span class="circle5"></span>'+
    '<span class="circle6"></span>'+
     '<div>');

      $(location).load(url, function( response, status, xhr ) {
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

  ajaxfun(".nav-back", "/calendar/main", "#items-ajax");
  ajaxfun(".add", "/calendar/task/new", ".task_viewer");
  ajaxfun(".sub", "/calendar/subject", ".task_viewer");


@foreach($my_tasks as $tasks)

               $("#task{{$tasks->id}}").click(function(){
                 SnackBar.show({text: 'loading...',
                 actionText: ' ',
                   pos: 'bottom-left'
                   });
       $(".task_viewer").load('calendar/task/{{$tasks->id}}');
              });
@endforeach


// save task ajax

       var form = $('#new_task');
       // var formMessages = $('#activate_adela');

       $(".save_task").click(function(e) {
                 var $btn = $(this).button('saving');

       e.preventDefault();
           var formData = $(form).serialize();
       $.ajax({
       type: 'POST',
       url: $(form).attr('action'),
       data: formData,
       statusCode:{
        400: function(){
          $("#alert").after(
            ' <div class="alert alert-danger alert-dismissible fade in  animated fadeIn" role="alert">'+
               ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                    '<span aria-hidden="true">&times;</span>'+
                '</button>'+
                'Oops, the Internet as been broken.'+
           ' </div>');
           $btn.button('reset');
        },
         422: function(){
           $("#alert").after(
            ' <div class="alert alert-danger alert-dismissible fade in animated fadeIn" role="alert">'+
               ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                    '<span aria-hidden="true">&times;</span>'+
                '</button>'+
                'Oops, One or two important lines are Empty. Fix this and try again.'+
           ' </div>');
           $btn.button('reset');
        },

        500: function(){
          $("#alert").after(
            ' <div class="alert alert-danger alert-dismissible fade in animated fadeIn" role="alert">'+
               ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                    '<span aria-hidden="true">&times;</span>'+
                '</button>'+
                'Oops, we could not connect with the sever. try reloading the page.'+
           ' </div>');
           $btn.button('reset');
        }
       }
       })
       .done(function(response) {
     $("#items-ajax").load("/calendar/task");
     $(".pull-data").load("/calendar/data");

            $(".loader").css("display", "none");

        })
       .fail(function(data) {
      $(".loader").css("display", "none");

           });
       });

});

</script>


<script type="text/javascript">
$(document).ready(function(){



//Bootstrap-MaxLength
$('input#defaultconfig').maxlength({
    alwaysShow: true,
    warningClass: "label label-primary",
    limitReachedClass: "label label-danger"
});

$('input#thresholdconfig').maxlength({
    threshold: 20
});

$('input#moreoptions').maxlength({
    alwaysShow: true,
    warningClass: "label label-success",
    limitReachedClass: "label label-danger"
});

$('input#alloptions').maxlength({
    alwaysShow: true,
    warningClass: "label label-success",
    limitReachedClass: "label label-danger",
    separator: ' out of ',
    preText: 'You typed ',
    postText: ' chars available.',
    validate: true
});

$('textarea#textarea').maxlength({
   alwaysShow: true,
    warningClass: "label label-primary",
    limitReachedClass: "label label-danger",
    separator: ' out of ',
    preText: 'You typed ',
    postText: ' chars available.',
    validate: true
});

$('input#placement').maxlength({
    alwaysShow: true,
    placement: 'top-left'
});


  // Date Picker
    jQuery('#datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#datepicker-inline').datepicker();
    jQuery('#datepicker-multiple-date').datepicker({
        format: "mm/dd/yyyy",
        clearBtn: true,
        multidate: true,
        multidateSeparator: ","
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });

    //Clock Picker
    $('.clockpicker').clockpicker({
        donetext: 'Done'
    });

    $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('#check-minutes').click(function (e) {
        // Have to stop propagation here
        e.stopPropagation();
        $("#single-input").clockpicker('show')
            .clockpicker('toggleView', 'minutes');
    });
});
</script>
