        <div id="loader" ></div>


<form class="form-horizontal" role="form" method="post" action="{{route('post.subject')}}" id="new_subject">
          <input type="hidden" name="_token" value="{{ Session::token() }}">

  <div class="form-group">
<input type="text" required class="form-control" maxlength="30" name="subject" id="defaultconfig" placeholder="Add Subject"/> 
<button class="btn btn-primary btn-lg save_subject" data-loading-text="Saving...">Add</button>
</div>
 
</form>

         @if (!$my_subject->count())
No subject here
          @else

<div class="list-group task-items">

@foreach($my_subject as $subject)
<a href="#" class="list-group-item " id="task{{$subject->id}}">
<h4 class="text-primary">
  {{$subject->subject}}

  <button class="btn btn-danger pull-right btn-sm delete_sub{{$subject->id}}" data-loading-text="Deleting"><i class=" mdi mdi-delete"></i></button>

</h4> 

</a>
@endforeach
</div>

@endif


</div>

<script type="text/javascript">
$(document).ready(function(){




$(".nav-back").click(function(){
    $(".loader").css("display", "block");
     $("#items-ajax").load("/calendar/main");
    $(".loader").css("display", "none");
});

$(".add").click(function(){
    $(".loader").css("display", "block");
     $(".task_viewer").load("/calendar/task/new");
    $(".loader").css("display", "none");
});

$(".sub").click(function(){
    $(".loader2").css("display", "block");
     $(".exam_viewer").load("/calendar/subject");
    $(".loader2").css("display", "none");
});

@foreach($my_subject as $subject)


               $(".delete_sub{{$subject->id}}").click(function(e) {

          swal({   title: "Are you sure?", 
            text: "You will not be able to recover this Subject. Notes and Classes will not be affected!",  
             type: "warning",   
             showCancelButton: true,   
             confirmButtonColor: "#DD6B55",   
             confirmButtonText: "Yes, delete it!",   
             closeOnConfirm: false },
           function(){ 
                                toastr.info("Deleting Subject. this should only take a second!");

            // if user hits confirm delete 
      var  durl = "http://localhost:8000/deletesubject{{$subject->id}}";
        $.ajax({
        type: 'GET',
        url: durl,
        })
        .done(function(response) {
          // show the swal deleted animations

             swal("Deleted!", "Your Subject has been deleted.", "success"); 
     $(".exam_viewer").load("/calendar/subject");
         });
     
        });



              });
@endforeach


// save subject ajax

       var form = $('#new_subject');
       // var formMessages = $('#activate_adela');

       $(".save_subject").click(function(e) {
         var $btn = $(this).button('loading');
       e.preventDefault();
    $(".loader").css("display", "block");

           var formData = $(form).serialize();
       $.ajax({
       type: 'POST',
       url: $(form).attr('action'),
       data: formData
       })
       .done(function(response) {
     $(".exam_viewer").load("/calendar/subject");
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