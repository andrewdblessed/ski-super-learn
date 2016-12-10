       @if ($errors->has())
              <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                      {{ $error }}<br>
                  @endforeach
              </div>
              @endif

<form id="update_class" class="form-horizontal" role="form" method="post" action="/update_class/{{$class->id}}">
          <input type="hidden" name="_token" value="{{ Session::token() }}">

  <div class="form-group">
    <label class="control-label">Subject</label>
      <span>
        <button class="btn btn-icon btn-sm waves-effect btn-primary m-b-1 btn-rounded"><i class=" typcn   typcn typcn-plus"></i> </button>
    </span>
            <select required class="form-control select2" name="class_subject">
              <option>{{$class->class_subject}}</option>
          </select>
</div>

<div class="row">

<div class="col-md-6">

<div class="form-group">
    <label>class Date</label>
    <div>
        <div class="input-group">
            <input name="class_date" type="text" required class="form-control" value="{{$class->class_date}}" id="datepicker-autoclose">
            <span class="input-group-addon bg-primary b-0"><i class="mdi mdi-calendar text-white"></i></span>
        </div><!-- input-group -->
    </div>
</div>
</div>

<div class="col-md-6">
  <label>Due Time</label>
<div class="input-group clockpicker m-b-20" data-placement="top" data-align="top" data-autoclose="true">
  <input type="text" class="form-control" value="{{$class->class_time}}" name="class_time">
  <span class="input-group-addon bg-primary"> <span class="mdi mdi-clock"></span> </span>

</div>



</div>

</div>
 <button class="btn btn-icon waves-effect btn-primary m-b-5 save_class"><i class=" mdi mdi-content-save"></i>class Update</button>
 <button class="btn btn-icon waves-effect btn-danger m-b-5 delete_class"><i class=" mdi mdi-delete-sweep"></i>Delete</button>

</form>

<script type="text/javascript">
$(document).ready(function () {





// save class ajax

       var form = $('#update_class');
       // var formMessages = $('#activate_adela');

       $(".save_class").click(function(e) {
                 var $btn = $(this).button('updating');
                 SnackBar.show({text: 'updating...',
                 actionText: ' ',
                   pos: 'bottom-left'
                   });
       e.preventDefault();

           var formData = $(form).serialize();
       $.ajax({
       type: 'POST',
       url: $(form).attr('action'),
       data: formData
       })
       .done(function(response) {
     $("#items-ajax").load("/calendar/class");
     $(".pull-data").load("/calendar/data");

        })
       .fail(function(data) {

           });

     });


       $(".delete_class").click(function(e) {
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
      var  durl = "http://localhost:8000/deleteclass{{$class->id}}";
        $.ajax({
        type: 'GET',
        url: durl,
        })
        .done(function(response) {
          // show the swal deleted animations

             swal("Deleted!", "Class deleted.", "success");
     $(".class_viewer").load("/calendar/class/new");
          $("#items-ajax").load("/calendar/class");
          $(".pull-data").load("/calendar/data");


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
