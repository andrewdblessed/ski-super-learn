<form id="new_task" class="form-horizontal" role="form" method="post" action="{{route('post.tasks')}}">
          <input type="hidden" name="_token" value="{{ Session::token() }}">

  <div class="form-group">
<input type="text" required class="form-control" maxlength="70" name="task_title" id="defaultconfig" placeholder="Task Title..."/>
</div>

<div class="row">
  <div class="form-group col-md-8">

      <label class="control-label">Add Subject</label>
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

<button class=" save_task btn btn-icon waves-effect btn-primary m-b-5 "><i class=" mdi mdi-content-save"></i> Save</button>
</form>

<script type="text/javascript">
$(document).ready(function () {





// save task ajax

       var form = $('#new_task');
       // var formMessages = $('#activate_adela');

       $(".save_task").click(function(e) {
       e.preventDefault();
       SnackBar.show({
         text: 'saving...',
         pos: 'bottom-left',
         actionText: ' ',
         });
            var $btn = $(this).button('saving');
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
