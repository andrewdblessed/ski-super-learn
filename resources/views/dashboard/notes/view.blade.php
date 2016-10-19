@if ($errors->has())
       <div class="alert alert-danger">
           @foreach ($errors->all() as $error)
               {{ $error }}<br>
           @endforeach
       </div>
       @endif

        <div class="panel note-card">
      <div class="panel-heading">
        <div class="btn-toolbar m-t-20" role="toolbar">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary waves-effect waves-light deletenote{{$notes->id}}"><i class=" mdi mdi-delete"></i></button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">
                                <i class=" mdi mdi-share-variant"></i>
              
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="javascript:void(0);">Facebook</a></li>
                                    <li><a href="javascript:void(0);">Twitter</a></li>
                                    <li><a href="javascript:void(0);">Linkedin</a></li>
                                    <li class="divider"></li>
                                    <li><a href="javascript:void(0);">Email</a></li>
                                </ul>
                             </div>
                   
                     <div class="btn-group">
                                <button type="button" class="update_note btn btn-primary waves-effect waves-light">Update</button>
                            </div>

                                <a target="_blank" href="/guest_note/{{$notes->guest_token}}" class="btn btn-primary waves-effect waves-light  pull-right" >
                               View <i class="mdi mdi-open-in-new"></i> 
                               </a>
          
                        </div>
</div>
<div class="panel-reader">
       <form  action="/updatenote{{$notes->id}}" id="update_note" method="post">
<!--         <button type="submit" class="btn btn-primary btn-rounded btn-lg btn-custom w-lg waves-effect waves-light "> <i class=" mdi mdi-content-save"></i>Save </button>
 -->
         <input type="hidden" name="_token" value="{{ Session::token() }}">
<span >Last Modification<small class="text-primary">{{$notes->note_date}} </small></span>
     <div class="form-group">
          <label>Note Name</label>
          <input type="text" class="form-control" required name="note_title" value="{{$notes->note_title}}"/>
      </div>

    <div class="form-group">
                      <div>

 <textarea  name="note_body" required  class="summernote">
   {!!$notes->note_body!!}
</textarea>

                         
                      </div>
                  </div>

              
       </form>
   

</div>

<script type="text/javascript">
//NOTE
$(function() {

// summer note js
                $('.summernote').summernote({
                    height: 300,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false ,                // set focus to editable area after initializing summernote
                   placeholder: 'write here...'
                });
// summernote js ends here


var form = $('#update_note');

$(".update_note").click(function(e) {

e.preventDefault();

    var formData = $(form).serialize();

 toastr.success("Updating Note, Please Holdon!");
       

$.ajax({
type: 'POST',
url: $(form).attr('action'),
data: formData
})
.done(function(response) {
  $(".ajax_point").load("/Ainotes/callnotes");
 toastr.success("Note Updated");

})
.fail(function(data) {
  toastr.error("Oops there seems to be an error");
    });

  });



        $(".deletenote{{$notes->id}}").click(function(e) {

          swal({   title: "Are you sure?", 
            text: "You will not be able to recover this Note!",  
             type: "warning",   
             showCancelButton: true,   
             confirmButtonColor: "#4bd396",   
             confirmButtonText: "Yes, delete it!",   
             closeOnConfirm: false },
           function(){ 
                                toastr.success("Deleting {{$notes->note_title}}. this should only take a second!");

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

  });
</script>