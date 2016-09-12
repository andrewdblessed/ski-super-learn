@if ($errors->has())
       <div class="alert alert-danger">
           @foreach ($errors->all() as $error)
               {{ $error }}<br>
           @endforeach
       </div>
       @endif
<div class="col-md-8 col-md-push-31">
  <div class="jumbotron" style="border-radius:0;">
      <img class="ainotes_cats_img" src="user-tools/ainote-background/nb_{{$notes->ainote_bg}}.png" alt="" />
      <div class="edit-ajax">

        <form  action="/updatenote{{$notes->id}}" id="new_note" method="post">

          <input type="hidden" name="_token" value="{{ Session::token() }}">
          <textarea type="hidden" style="display:none;" name="note_date"  id="notedate"> </textarea>
  <div class="ain-note-title">
    <input class="note_name note_id31" name="note_title" value="{{$notes->note_title}}">
  </div>
  <div class="ain-nb-title">
    <h5 class="note_Ainote"> {{ $notes->ainote_name}}</h5>
  </div>
  <hr>
  <textarea class="editable ain-note-body ain-note-body{{$notes->id}} note_body" name="note_body">
{!!$notes->note_body!!}
</textarea>
<button type="submit" class="btn btn-info btn-round btn-raised">
Update
</button>
<a href="#" class="btn btn-warning btn-round btn-raised">close</a>
</form>
    <hr>
</div>
</div>
</div>

<script type="text/javascript">
//NOTE
$(function() {
  function ajaxfun(welcload, btn, url, loadcom) {
    $(btn).click(function(){
      $(".ski_loader").css("display", "block");

      SnackBar.show({text:welcload});
    console.log('loading');
        $(".ajax_point").load(url);
        $.ajax({
            success:function(re){
            SnackBar.show({text:loadcom});
            $(".ski_loader").css("display", "none");
        }
      });
    });
    }
ajaxfun("Loading {{$notes->Ainote_name}} Ainote", "#Ainote{{$notes->Ainote_id}}", "/Ainotes/{{$notes->Ainote_id}}", "Load Completed");

  });
</script>
<script>
                                 tinymce.init({
                                   selector: '.editable',
                                   menubar: false,
                                   theme: 'modern',
                                   height: 500,
                                    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                                   content_css: [
                                     '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                                     '//www.tinymce.com/css/codepen.min.css'
                                   ]
                                 });

                                 var date = new Date();

                                 var month = date.getMonth();
                                 var day = date.getDate();
                                 var year = date.getFullYear();

                                 var monthNames = [ "January", "February", "March", "April", "May", "June",
                                     "July", "August", "September", "October", "November", "December" ];

                                 document.getElementById("notedate").innerHTML = day+" "+monthNames[month]+" "+year;

                         </script>
