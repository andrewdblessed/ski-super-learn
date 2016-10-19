<form id="new_task" class="form-horizontal" role="form" method="post" action="{{route('post.tasks')}}">
          <input type="hidden" name="_token" value="{{ Session::token() }}">

  <div class="form-group">
<input type="text" required class="form-control" maxlength="70" name="task_title" id="defaultconfig" placeholder="Task Title..."/> 
<span>
                    <button class=" save_task btn btn-icon waves-effect btn-primary m-b-5 "><i class=" mdi mdi-content-save"></i> </button>

</span>

</div>
  <div class="form-group">
  <label class="control-label">Optional Content</label>

          <textarea id="textarea" class="form-control" maxlength="200" name="task_body"></textarea>
  </div>
<div class="row">
  <div class="form-group col-md-8">

      <label class="control-label">Add Subject</label> 
      <span>
        <button class=" btn btn-icon btn-sm waves-effect btn-primary m-b-1 btn-rounded"><i class=" typcn   typcn typcn-plus"></i> </button>

    </span>

     <select required class="form-control" name="task_subject">
      <option>No Subject</option>
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
</form>

<script type="text/javascript">
$(document).ready(function () {





// save task ajax

       var form = $('#new_task');
       // var formMessages = $('#activate_adela');

       $(".save_task").click(function(e) {
       e.preventDefault();

           var formData = $(form).serialize();
       $.ajax({
       type: 'POST',
       url: $(form).attr('action'),
       data: formData
       })
       .done(function(response) {
     $("#items-ajax").load("/calendar/task");
        })
       .fail(function(data) {
  
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