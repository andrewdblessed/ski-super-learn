       @if ($errors->has())
              <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                      {{ $error }}<br>
                  @endforeach
              </div>
              @endif

<form id="update_task" class="form-horizontal" role="form" method="post" action="/update_task/{{$task->id}}">
          <input type="hidden" name="_token" value="{{ Session::token() }}">

    <div class="form-group">
        <label class="control-label">Task Status</label>
            <input name="task_range" type="text" id="range_01" >
   </div>

  <div class="form-group">
      <label class="control-label">Task</label>

<input type="text" required class="form-control" maxlength="70" name="task_title" id="defaultconfig" value="{{$task->task_title}}"/>

</div>

<div class="row">
  <div class="form-group col-md-8">

      <label class="control-label">Add Subject</label>
      <span>
        <button class="btn btn-icon btn-sm waves-effect btn-primary m-b-1 btn-rounded"><i class=" typcn   typcn typcn-plus"></i> </button>

    </span>

     <select required class="form-control" name="task_subject">
      <option>{{$task->task_subject}}</option>
    </select>
 </div>

   <div class="form-group col-md-4">
      <label class="control-label">Task Type</label>
     <select disabled required class="form-control" name="task_type" >
      <option>{{$task->task_type}}</option>
   </select>
 </div>
</div>
<div class="row">

<div class="col-md-6">
  <label>Due Time</label>
<div class="input-group clockpicker m-b-20" data-placement="top" data-align="top" data-autoclose="true">
  <input type="text" class="form-control" value="{{$task->task_time}}" name="task_time">
  <span class="input-group-addon bg-primary"> <span class="mdi mdi-clock"></span> </span>
</div>
</div>

<div class="col-md-6">

<div class="form-group">
    <label>Due Date</label>
    <div>
        <div class="input-group">
            <input name="task_date" type="text" required class="form-control" value="{{$task->task_date}}" id="datepicker-autoclose">
            <span class="input-group-addon bg-primary b-0"><i class="mdi mdi-calendar text-white"></i></span>
        </div><!-- input-group -->
    </div>
</div>
</div>

</div>
<button class="btn btn-icon waves-effect btn-primary m-b-5 save_task"><i class=" mdi mdi-content-save"></i>Update </button>
<button class="btn btn-icon waves-effect btn-danger m-b-5 delete_task"><i class=" mdi mdi-delete-sweep"></i>Delete</button>

</form>

<script type="text/javascript">
$(document).ready(function () {
// save task ajax
       var form = $('#update_task');

       $(".save_task").click(function(e) {
            e.preventDefault();
            SnackBar.show({text: 'updating...',
             actionText: ' ',
              pos: 'bottom-left'
              });
                 var $btn = $(this).button('Updating');
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

        })
       .fail(function(data) {

           });
       });
// delete task_date
$(".delete_task").click(function(e) {
        e.preventDefault();
  var $btn = $(this).button('deleting');

   swal({   title: "Are you sure?",
     text: "This cannot be undone",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: false },
    function(){
      SnackBar.show({text: 'deleting...',
      actionText: ' ',
        pos: 'bottom-left'
        });


     // if user hits confirm delete
var  durl = "http://localhost:8000/deletetask{{$task->id}}";
 $.ajax({
 type: 'GET',
 url: durl,
 })
 .done(function(response) {
   // show the swal deleted animations

      swal("Deleted!", "Task deleted.", "success");
$(".task_viewer").load("/calendar/task/new");
   $("#items-ajax").load("/calendar/task");
   $(".pull-data").load("/calendar/data");

  });

 });



       });

    $("#range_01").ionRangeSlider({
           from: {{$task->task_range}}
    });



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
