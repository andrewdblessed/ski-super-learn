


 <div class="panel note-card">
      <div class="panel-heading">

          <h3 class="panel-title">Create new Note</h3>
<button type="submit" class="btn btn-primary btn-rounded btn-custom w-lg waves-effect waves-light save_note"> <i class=" mdi mdi-content-save"></i>Save Note</button>

      </div>
      <div class="panel-reader">
     <div id="alert"></div>
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


       </form>
         </div>
       </div>

 <script>
         jQuery(document).ready(function(){
// summer note js
                $('.summernote').summernote({
                    height: 300,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false ,                // set focus to editable area after initializing summernote
                   placeholder: 'write here...'
                });
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
         'Notes most contain a title & body.'+
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

            });
        </script>
