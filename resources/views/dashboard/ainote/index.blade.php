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

<!-- NOTE: LOADING AI CSS AND JS CONFIGURATION -->
<link href="{{ URL::asset('src/ski-vendor/ski-notebook/AI/ai.css') }}" rel="stylesheet">
<script src="{{ URL::asset('src/ski-vendor/ski-notebook/AI/ai_fun.js') }}" ></script>
<script src="{{ URL::asset('src/ski-vendor/ski-notebook/AI/config.js') }}" ></script>
<script src="{{ URL::asset('src/ski-vendor/ski-notebook/js/script.js') }}" charset="utf-8"></script>

  <!-- Summernote CSS -->
    <link rel="stylesheet" href="/plugins/summernote/summernote.css">



<!--       <img src="user-tools/load-ani/ajax-loader.gif" class="notes_loader" alt="" />
 -->
        <div class="ajax_point ">
          {{-- loading server-side ainotes--}}
      </div>
 

<div class="col-sm-9 col-reader"></div>
<!--     <div class="col-sm-9 col-reader">
 <div class="panel note-card">
      <div class="panel-heading">

          <h3 class="panel-title">Create new Note</h3>

      </div>
      <div class="panel-reader">

    <form action="{{route('post.note')}}" id="new_note" method="post">


             <input type="hidden" name="_token" value="{{ Session::token() }}">

     <div class="form-group">
          <label>Note Name</label>
          <input type="text" class="form-control" required name="note_title" placeholder="Name of note"/>
      </div>

    <div class="form-group">
                      <label>Explain your Note</label>
                      <div>

 <textarea  name="note_body" required  class="summernote">
   

</textarea>

                         
                      </div>
                  </div>

            <textarea type="text" style="display:none;" name="note_date"  id="notedate"> </textarea>
             {{--GUEST TOKEN FOR SHARING NOTE --}}
             <input type="hidden" name="guest_token" value="{{$guest_token}}">
<button type="submit" class="btn btn-danger btn-rounded btn-lg btn-custom w-lg waves-effect waves-light save_note"> <i class=" mdi mdi-content-save"></i>Save </button>

              
       </form>
         </div>
       </div>

</div> -->

<?php /* XXX: adela ajax 
<div class="ai-ajax animated fadeInLeft">
<h3 class="text-lg text-info"><b>Ask Me Anything</b></h3>
<div class="pull-right">

</div>
<div class="input-group">
  <span class="input-group-addon"><button  id="rec" type="button" class="btn btn-default btn-sm btn-fab-sm btn-raised">
<i class="material-icons">mic</i>
  </button></span>
    @if ($bg_number == 1)
  <input id="input" type="text" class="form-control text-info " placeholder="Who is Barrack Obama">
  @elseif ($bg_number == 2)
  <input id="input" type="text" class="form-control text-info " placeholder="What is Hello in French">
  @elseif ($bg_number == 3)
  <input id="input" type="text" class="form-control text-info " placeholder="what is biology">
  @else ($bg_number == 1)
  <input id="input" type="text" class="form-control text-info " placeholder="What is Machine Learning">
  @endif
</div>
<hr>
<img src="user-tools/load-ani/ajax-loader.gif" class="ains_loader" alt="" style="display:none;"/>
<div class="list-group nb-main-list ai_point">

</div>

</div>
*/?>

 <script src="/plugins/summernote/summernote.min.js"></script>
<script>
//          jQuery(document).ready(function(){
// // summer note js
//                 $('.summernote').summernote({
//                     height: 300,                 // set editor height
//                     minHeight: null,             // set minimum height of editor
//                     maxHeight: null,             // set maximum height of editor
//                     focus: false ,                // set focus to editable area after initializing summernote
//                    placeholder: 'write here...'
//                 });
// summernote js ends here
// note date and time js
var date = new Date();

var month = date.getMonth();
var day = date.getDate();
var year = date.getFullYear();

var monthNames = [ "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December" ];

document.getElementById("notedate").innerHTML = day+" "+monthNames[month]+" "+year;
// note date and time ends here
 // start savenote js

var form = $('#new_note');

$(".save_note").click(function(e) {

e.preventDefault();

    var formData = $(form).serialize();

 toastr.success("Saving Note, Please Holdon!");
       

$.ajax({
type: 'POST',
url: $(form).attr('action'),
data: formData
})
.done(function(response) {
  $(".ajax_point").load("/Ainotes/callnotes");
 toastr.success("Note Added");

})
.fail(function(data) {
  toastr.error("Oops there seems to be an error");
    });

  });
// new note ends here

        </script>
@stop
