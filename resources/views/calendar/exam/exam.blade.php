
      <div class="panel panel-primary panel-border ">

   <div class="panel-heading">
       <div class="page-title-box">
              <div class="pull-right">
                <div class="btn-group">
                  <button class="btn btn-icon waves-effect btn-primary m-b-5 nav-back "><i class="typcn  typcn-chevron-left"></i> </button>
                  <button class="btn btn-icon waves-effect btn-primary m-b-5 add"><i class="typcn   typcn typcn-plus"></i> </button>
                 <button class="btn btn-icon waves-effect btn-primary m-b-5 sub"><i class="typcn typcn-tags"></i> </button>
                </div>

      </div>
              <h4 class="page-title">Exams</h4>
          </div>
          </div>

          <div class="panel-body point-panel">

            <div class="col-md-5">
         
   
      @if (!$my_exams->count())
  <img class=" animated pulse infinite no-exam" src="{{ URL::asset('/src/vendor/new/images/icons/inspection.svg')}}" title="No exams.svg"/>
<h5>No upcoming Exams</h5>
 
 @else

<div class="list-group exam-items">

@foreach($my_exams as $exams)
<a href="#" class="list-group-item " id="exam{{$exams->id}}">
    <h5 class="text-purple"> You have <b>{{$exams->exam_subject}}</b> on {{$exams->exam_date}}</h5>
    <p>Exam Starts: {{$exams->exam_time}}, Duration: {{$exams->exam_timer}}, Seat No: {{$exams->exam_seat}}</p>
</a>
@endforeach
</div>

@endif

 </div>

 <div class="col-md-7">
  <div class="exam_viewer">
<form class="form-horizontal" role="form" method="post" action="{{route('post.exam')}}" id="new_exam">
          <input type="hidden" name="_token" value="{{ Session::token() }}">

  <div class="form-group">
    <label class="control-label">Subject</label> 
      <span>
        <button class="sub btn btn-icon btn-sm waves-effect btn-primary m-b-1 btn-rounded"><i class=" typcn   typcn typcn-plus"></i> </button>
    </span>
<select required class="form-control select2" name="exam_subject">
@if (!$my_subject->count())
No subject here
@else
@foreach($my_subject as $subject)
<option> {{$subject->subject}} </option>

@endforeach

@endif

</select>
</div>
<div class="form-group">
<div class="col-md-6">
<input class="form-control" name="exam_address" placeholder="exam address">

</div>
<div class="col-md-6">
<input class="form-control" name="exam_seat" placeholder="Seat Number">
</div>


</div>
<div class="row">

<div class="col-md-6">

<div class="form-group">
    <label>Exam Date</label>
    <div>
        <div class="input-group">
            <input name="exam_date" type="text" required class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
            <span class="input-group-addon bg-primary b-0"><i class="mdi mdi-calendar text-white"></i></span>
        </div><!-- input-group -->
    </div>
</div>
</div>

<div class="col-md-6">
  <label>Due Time</label>
<div class="input-group clockpicker m-b-20" data-placement="top" data-align="top" data-autoclose="true">
  <input type="text" class="form-control" value="13:14" name="exam_time">
  <span class="input-group-addon bg-primary"> <span class="mdi mdi-clock"></span> </span>

</div>

  <div class="col-lg-8">
  <label>Duration</label>
  <input type="text" class="form-control" value="60" name="exam_timer">
</div>

</div>

</div>
 <button class="btn btn-icon waves-effect btn-primary m-b-5 save_exam"><i class=" mdi mdi-content-save"></i> Add Exam</button>

</form>

</div>

            </div>
          </div>
          </div>
      </div>


<script type="text/javascript">
$(document).ready(function(){

$(".nav-back").click(function(){
    $(".loader2").css("display", "block");
     $("#items-ajax").load("/calendar/main");
    $(".loader2").css("display", "none");
});

$(".add").click(function(){
    $(".loader2").css("display", "block");
     $(".exam_viewer").load("/calendar/exam/new");
    $(".loader2").css("display", "none");
});

$(".sub").click(function(){
    $(".loader2").css("display", "block");
     $(".exam_viewer").load("/calendar/subject");
    $(".loader2").css("display", "none");
});


@foreach($my_exams as $exams)

               $("#exam{{$exams->id}}").click(function(){
   toastr.info("Loading exam. this Might take a while!");
        
                     $(".exam_viewer").load('calendar/exam/{{$exams->id}}');
           toastr.success("Load Completed.");
              });
@endforeach


// save exam ajax

       var form = $('#new_exam');
       // var formMessages = $('#activate_adela');

       $(".save_exam").click(function(e) {
                 var $btn = $(this).button('loading');

       e.preventDefault();

           var formData = $(form).serialize();
       $.ajax({
       type: 'POST',
       url: $(form).attr('action'),
       data: formData
       })
       .done(function(response) {
     $("#items-ajax").load("/calendar/exam");
        })
       .fail(function(data) {
  
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

        // Select2
    $(".select2").select2();

    $(".select2-limiting").select2({
        maximumSelectionLength: 2
    });

});


</script>