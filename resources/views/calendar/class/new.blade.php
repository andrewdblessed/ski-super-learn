<form class="form-horizontal" role="form" method="post" action="{{route('post.class')}}" id="new_class">
          <input type="hidden" name="_token" value="{{ Session::token() }}">

  <div class="form-group">
    <label class="control-label">Subject</label>
      <span>
        <button class="sub btn btn-icon btn-sm waves-effect btn-primary m-b-1 btn-rounded"><i class=" typcn   typcn typcn-plus"></i> </button>
    </span>
<select required class="form-control select2" name="class_subject">
@if (!$my_subject->count())
No subject here
@else
@foreach($my_subject as $subject)
<option> {{$subject->subject}} </option>

@endforeach

@endif

</select>
</div>

<div class="row">
      <div class="col-md-6">
        <div class="form-group">
            <label>class Date</label>
            <div>
                <div class="input-group">
                    <input name="class_date" type="text" required class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                    <span class="input-group-addon bg-primary b-0"><i class="mdi mdi-calendar text-white"></i></span>
                </div><!-- input-group -->
            </div>
        </div>
      </div>

      <div class="col-md-6">
          <label>Due Time</label>
          <div class="input-group clockpicker m-b-20" data-placement="top" data-align="top" data-autoclose="true">
          <input type="text" class="form-control" value="13:14" name="class_time">
          <span class="input-group-addon bg-primary"> <span class="mdi mdi-clock"></span> </span>
        </div>
      </div>

</div>
 <button class="btn btn-icon waves-effect btn-primary m-b-5 save_class"><i class=" mdi mdi-content-save"></i> Add class</button>

</form>

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
  ajaxfun(".add", "/calendar/class/new", ".class_viewer");
  ajaxfun(".sub", "/calendar/subject", ".class_viewer");

// save class ajax

       var form = $('#new_class');
       // var formMessages = $('#activate_adela');

       $(".save_class").click(function(e) {
                 var $btn = $(this).button('saving');
                 SnackBar.show({text: 'saving...',
                 actionText: ' ',
                   pos: 'bottom-left'
                   });
       e.preventDefault();

           var formData = $(form).serialize();
       $.ajax({
       type: 'POST',
       url: $(form).attr('action'),
       data: formData,
       statusCode:{
        400: function(){
          $("#alert").after(
            ' <div class="alert alert-danger alert-dismissible fade in" role="alert">'+
               ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                    '<span aria-hidden="true">&times;</span>'+
                '</button>'+
                'Oops, the Internet as been broken.'+
           ' </div>');
           $btn.button('reset');
        },
         422: function(){
           $("#alert").after(
            ' <div class="alert alert-danger alert-dismissible fade in" role="alert">'+
               ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                    '<span aria-hidden="true">&times;</span>'+
                '</button>'+
                'Oops, One or two important lines are Empty. Fix this and try again.'+
           ' </div>');
           $btn.button('reset');
        },

        500: function(){
          $("#alert").after(
            ' <div class="alert alert-danger alert-dismissible fade in" role="alert">'+
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
     $("#items-ajax").load("/calendar/class");
     $(".pull-data").load("/calendar/data");

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
