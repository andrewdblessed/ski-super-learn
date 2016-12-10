@extends('templates.default')
@section('content')



<style media="screen">

/*the new styles*/
img.animated.infinite.no-note.pulse {
    width: 137px;
    margin: 20px 2% 10px 15%;
  }
  .note-card{
    padding: 0;
}
.col-notes.col-sm-3 {
    padding: 0;
}
.col-reader.col-sm-9 {
    padding: 0;
}
.list > li {
  display:block;
  }

ul.list {
    padding: 0;
    max-height: 557px;
    overflow-y: auto;
    height: 429px;
}
.panel .panel-body {
    padding: 0;
}
body{
  overflow: hidden;
}
.container {
    padding: 0;
}
.panel-reader {
    padding: 16px;
/*    max-height: 550px;
    overflow-y: auto;*/
}
a.list-group-item:last-child {
    border-radius: 0%;
}
.list-group-item-text {
    height: 79px;
    overflow: hidden;
}
</style>
<script src="{{ URL::asset('src/ski-vendor/ski-notebook/js/script.js') }}" charset="utf-8"></script>
  <!-- Summernote CSS -->
    <link rel="stylesheet" href="/plugins/summernote/summernote.css">

    <link rel="stylesheet" href="{{ URL::asset('src/ski-vendor/ski-notebook/css/ainote.css') }}">

    <div class="container-fluid">
      <div class="row">
        <div class="row">
  <div class="col-xs-12">
  <div class="page-title-box">
                    <h4 class="page-title">My Notes</h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="{{route('home')}}">Ski Learn</a>
                        </li>
                          <li class="active">
                            My Notes
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
  </div>
  </div>
<!--       <img src="user-tools/load-ani/ajax-loader.gif" class="notes_loader" alt="" />
 -->
        <div class="ajax_point ">
          {{-- loading server-side ainotes--}}
      </div>


<div class="col-sm-9 col-reader"></div>


 <script src="/plugins/summernote/summernote.min.js"></script>
<script>

// var date = new Date();

// var month = date.getMonth();
// var day = date.getDate();
// var year = date.getFullYear();

// var monthNames = [ "January", "February", "March", "April", "May", "June",
//     "July", "August", "September", "October", "November", "December" ];

// document.getElementById("notedate").innerHTML = day+" "+monthNames[month]+" "+year;
// note date and time ends here
 // start savenote js

var form = $('#new_note');

$(".save_note").click(function(e) {

e.preventDefault();

    var formData = $(form).serialize();

    SnackBar.show({text: 'saving note...',
    actionText: ' ',
      pos: 'bottom-left'
      });


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
  $(".ajax_point").load("/Ainotes/callnotes");
  SnackBar.show({text: 'note added...',
  actionText: ' ',
    pos: 'bottom-left'
    });
})
.fail(function(data) {
    });

  });
// new note ends here

        </script>
@stop
