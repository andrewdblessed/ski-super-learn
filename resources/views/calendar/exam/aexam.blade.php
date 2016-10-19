       @if ($errors->has())
              <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                      {{ $error }}<br>
                  @endforeach
              </div>
              @endif

<form id="update_exam" class="form-horizontal" role="form" method="post" action="/update_exam/{{$exam->id}}">
          <input type="hidden" name="_token" value="{{ Session::token() }}">

  <div class="form-group">
    <label class="control-label">Subject</label> 
      <span>
        <button class="btn btn-icon btn-sm waves-effect btn-primary m-b-1 btn-rounded"><i class=" typcn   typcn typcn-plus"></i> </button>
    </span>
            <select required class="form-control select2" name="exam_subject">
              <option>{{$exam->exam_subject}}</option>
          </select>
</div>
<div class="form-group">
<div class="col-md-6">
<input class="form-control" name="exam_address" value="{{$exam->exam_address}}">

</div>
<div class="col-md-6">
<input class="form-control" name="exam_seat" value="{{$exam->exam_seat}}">
</div>


</div>
<div class="row">

<div class="col-md-6">

<div class="form-group">
    <label>Exam Date</label>
    <div>
        <div class="input-group">
            <input name="exam_date" type="text" required class="form-control" value="{{$exam->exam_date}}" id="datepicker-autoclose">
            <span class="input-group-addon bg-primary b-0"><i class="mdi mdi-calendar text-white"></i></span>
        </div><!-- input-group -->
    </div>
</div>
</div>

<div class="col-md-6">
  <label>Due Time</label>
<div class="input-group clockpicker m-b-20" data-placement="top" data-align="top" data-autoclose="true">
  <input type="text" class="form-control" value="{{$exam->exam_time}}" name="exam_time">
  <span class="input-group-addon bg-primary"> <span class="mdi mdi-clock"></span> </span>

</div>

  <div class="col-lg-8">
  <label>Duration</label>
  <input type="text" class="form-control" value="{{$exam->exam_timer}}" name="exam_timer">
</div>

</div>

</div>
 <button class="btn btn-icon waves-effect btn-primary m-b-5 save_exam"><i class=" mdi mdi-content-save"></i>Exam Completed</button>
 <button class="btn btn-icon waves-effect btn-danger m-b-5 delete_exam"><i class=" mdi mdi-content-save"></i>Delete</button>

</form>

<script type="text/javascript">
$(document).ready(function () {





// save exam ajax

       var form = $('#update_exam');
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


       $(".delete_exam").click(function(e) {
               e.preventDefault();
         var $btn = $(this).button('loading');

          swal({   title: "Are you sure?", 
            text: "This cannot be undone",  
             type: "warning",   
             showCancelButton: true,   
             confirmButtonColor: "#DD6B55",   
             confirmButtonText: "Yes, delete it!",   
             closeOnConfirm: false },
           function(){ 
                                toastr.info("Deleting Exam. this should only take a second!");

            // if user hits confirm delete 
      var  durl = "http://localhost:8000/deleteexam{{$exam->id}}";
        $.ajax({
        type: 'GET',
        url: durl,
        })
        .done(function(response) {
          // show the swal deleted animations

             swal("Deleted!", "Your Subject has been deleted.", "success"); 
     $(".exam_viewer").load("/calendar/exam/new");
          $("#items-ajax").load("/calendar/exam");

         });
     
        });



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
