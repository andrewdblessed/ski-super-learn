
<!-- new note  Modal content  -->
                                    <div class="modal fade empty-note" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
<!-- start box head 2 -->
<div class="note-view">
<div class="note-view-head text-center ">
    <i data-dismiss="modal" class="note-view-close pull-right mdi mdi-close-circle"></i>
 <!-- <img src="avatar-15.png" class="user-head-img"> -->

<h2>note title here</h2>
 </div>
 <form action="{{route('post.note')}}" id="new_note" method="post">
   <textarea type="text" style="display:none;" name="note_date"  id="notedate"> </textarea>
         {{--GUEST TOKEN FOR SHARING NOTE --}}
         <input type="hidden" name="guest_token" value="{{$guest_token}}">

  <input type="hidden" name="_token" value="{{ Session::token() }}">
<input class="form-control" required name="note_title" placeholder="Name of note" />
<!-- <h5>Written by: <a href="#user" class="text-white">@John Doe</a> </h5> -->
 <div class="notes-content" style="padding:30px">
 <textarea  name="note_body" required  class="summernote" rows="7" placeholder="enter text here"></textarea>
</div>
<button type="submit" class="btn btn-primary  btn-lg btn-custom w-lg waves-effect waves-light "> <i class=" mdi mdi-content-save"></i>Save </button>

</form>
</div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
<script>
jQuery(document).ready(function(){
// summer note js
$('.summernote').summernote({
height: 200,                 // set editor height
minHeight: null,             // set minimum height of editor
maxHeight: null,             // set maximum height of editor
focus: false ,                // set focus to editable area after initializing summernote
placeholder: 'write here...',
toolbar: [
// [groupName, [list of button]]
['style', ['bold', 'italic', 'underline', 'clear']],
['font', ['strikethrough', 'superscript', 'subscript']],
['fontsize', ['fontsize']],
['color', ['color']],
['para', ['ul', 'ol', 'paragraph']],
['height', ['height']]
]
});


});
</script>

  @if (!$note_all->count())




no note yer





  @else




<!--               <button type="button" class="note_pad btn btn-primary waves-effect waves-light "><i class=" mdi mdi-plus-circle"></i></button>
 -->
<!--              <div class="form-group">
<input type="text" class="form-control search" required   placeholder="Search your notes"/>
</div> -->

  <!-- <div class="notes-newnotes col-md-3">
<div class="start-newnotes">
    <img src="assets/images/icons/reading_ebook.svg" class="new-note-img">

    <h4>Create and Share your Knowledge to friends</h4>
    <button class="waves-effect  btn btn-round btn-lg btn-primary box-note-btn-start" data-toggle="modal" data-target=".empty-note"><i class="  mdi mdi-plus-box"></i> Create Note</button>
</div>
</div> -->
<!-- end box head 2 -->

<div class="list">
<style media="screen">
.note-body {
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  line-height: 23px;
  max-height: 156px;
  -webkit-line-clamp: 10;
  -webkit-box-orient: vertical;
  margin-bottom: 50px;
}
</style>
  @foreach ($note_all as $notes)
<script type="text/javascript">
var edit{{$notes->id}} = function() {

  $('.click2edit{{$notes->id}}').summernote({focus: true,
    toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']]
    ]
  });
   $("#edit{{$notes->id}}").toggle();
      $("#save{{$notes->id}}").toggle();
};

var save{{$notes->id}} = function() {
  var makrup = $('.click2edit{{$notes->id}}').summernote('code');
  $('.click2edit{{$notes->id}}').summernote('destroy');
  $("#edit{{$notes->id}}").toggle();
     $("#save{{$notes->id}}").toggle();
};
</script>
<div class=" li animated fadeIn notes-newnotes col-md-12">

<div class="notes-newnotes-head text-center">
<h4 class="text-white"><b>{{$notes->note_title}} </b></h4>
<p class="text-white note-sub-title">updated@ {{$notes->note_date}} </p>
 </div>

<div class="a-note">
<div class="click2edit{{$notes->id}} note-body">
{!!$notes->note_body!!}
</div>
    <div class="edit-note">

     <div class="btn-group m-b-10">
        <button type="button" class="btn btn-icon waves-effect btn-primary"> share</button>
        <!-- <button type="button" class="btn btn-icon waves-effect btn-primary"> view comments </button> -->
        <button type="button" class="btn btn-icon waves-effect btn-danger" id="deletenote{{$notes->id}}" > delete </button>
     </div>

    <div class="btn-group m-b-10">
      <button  class=" btn btn-icon waves-effect btn-primary"onclick="edit{{$notes->id}}()" id="edit{{$notes->id}}"data-loading-text="Loading..." > edit</button>
      <button style="display:none;"  class=" btn btn-icon waves-effect btn-primary"onclick="save{{$notes->id}}()" id="save{{$notes->id}}"data-loading-text="Loading..." > save</button>

        <!-- <button  class=" .note_id{{$notes->id}} btn btn-icon waves-effect btn-primary" data-toggle="modal" data-target=".note-modal{{$notes->id}}" > <i class="mdi mdi-border-color"></i> </button> -->
     </div>

    </div>
</div>


</div>

<!--  Modal content for the above example -->
                                    <div class="modal fade note-modal{{$notes->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
<!-- ajax calls content-->
<div class="note-view">
  <div class="note_ajax{{$notes->id}}">
  </div>
</div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
<script type="text/javascript">
$("#deletenote{{$notes->id}}").click(function(e) {

  swal({   title: "Are you sure?",
    text: "You will not be able to recover this Note!",
     type: "warning",
     showCancelButton: true,
     confirmButtonColor: "#4bd396",
     confirmButtonText: "Yes, delete it!",
     closeOnConfirm: false },
   function(){

     SnackBar.show({
text: "Deleting {{$notes->note_title}}. this should only take a second!",
showAction: false,
pos: 'bottom-left'
});

    // if user hits confirm delete
var  durl = "/deletenote{{$notes->id}}";
$.ajax({
type: 'GET',
url: durl,
})
.done(function(response) {
  // show the swal deleted animations

     swal("Deleted!", "{{$notes->note_title}} No longer exist on mars.", "success");
$(".ajax_point").load("/Ainotes/callnotes");
$(".col-reader").load("/new_note_index");

 });

});



      });
</script>
@endforeach


  </div>


@endif

<script type="text/javascript">
$(function() {

  function ajaxfun(welcload, btn, note_ajax, url, loadcom) {
    $(btn).click(function(){
 toastr.success(welcload);

       console.log('loading note');
        $(note_ajax).load(url);
        $.ajax({
            success:function(re){
   toastr.success(loadcom);

        }
      });
    });
    }
@foreach ($note_all as $notes)


  ajaxfun("Loading {{$notes->note_title}}, plese Holdon", ".note_id{{$notes->id}}", ".note_ajax{{$notes->id}}", "/notes/{{$notes->id}}}", "Note Loaded");
@endforeach
  ajaxfun("Opening Notepad, plese Holdon", ".note_pad", "/new_note_index", "Notepad Open");

});
</script>
<script>
     var options = {
  valueNames: [ 'note_name', 'note_body', 'note_time' ]
};
var skiList = new List('skisearch', options);
</script>
