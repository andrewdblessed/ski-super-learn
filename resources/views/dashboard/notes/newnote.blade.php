       @if ($errors->has())
              <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                      {{ $error }}<br>
                  @endforeach
              </div>
              @endif


              <div class="col-md-8 col-md-push-3 animated bounce newainote">
                <div class="jumbotron" style="border-radius:0;">
                  <form  action="{{route('post.note')}}" id="new_note" method="post">

                    <input type="hidden" name="_token" value="{{ Session::token() }}">

                    <input type="hidden" name="Ainote_id" value="{{$Ainotes->id}}">
                    <input type="hidden" name="Ainote_name" value="{{$Ainotes->ainote_title}}">
                    <input type="hidden" name="Ainote_bg" value="{{$Ainotes->ainote_bg}}">
                    <textarea type="hidden" style="display:none;" name="note_date"  id="notedate"> </textarea>
                    {{--GUEST TOKEN FOR SHARING NOTE --}}
                    <input type="hidden" name="guest_token" value="{{$guest_token}}">

                    <div class="ain-note-title">
                  <header class="note_header text-muted">
                    <input class="note_name note_id31" name="note_title" placeholder="Name of note">
                  </header>
                         </div>
                  <hr>
                <div class="new-note-body note_body">
                  <!-- <textarea class="editable note_body" name="note_body"></textarea> -->
                  <input id="x" type="hidden"  name="note_body">
                    <trix-editor input="x"></trix-editor>
                </div>
                <select class="note_color" name="note_color">
          <option value="blue" style="
      background: blue;
  ">Blue</option>
          <option value="green">Green</option>
          <option value="purple">purple</option>
        </select>
                <button type="submit" class=" btn btn-raised btn-info btn-round goedit btn-sm">Save </button>
                <button  class=" btn btn-raised btn-info btn-round close_editor btn-warning btn-sm">Close Editor </button>

                <hr>
              </form>
              </div>
              </div>

       <script type="text/javascript">
       //NOTE
       $(function() {
         function ajaxfun(welcload, btn, url, loadcom) {
           $(btn).click(function(){
             // $(".ski_loader").css("display", "block");
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
       ajaxfun("Loading All Notes", ".goback", "/Ainotes/callnotes", "Load Completed");
         });
       </script>
       <!-- <script>
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
                                        }); -->
                                </script>

           <script type="text/javascript">
           $(function() {
       var date = new Date();

       var month = date.getMonth();
       var day = date.getDate();
       var year = date.getFullYear();

       var monthNames = [ "January", "February", "March", "April", "May", "June",
           "July", "August", "September", "October", "November", "December" ];

       document.getElementById("notedate").innerHTML = day+" "+monthNames[month]+" "+year;

         //NOTE:SECTION1995

       var form = $('#new_note');
       var formMessages = $('#activate_adela');

       $(".save_note").click(function(e) {
       e.preventDefault();
           $(".ski_loader").css("display", "block");
           var formData = $(form).serialize();
       $.ajax({
       type: 'POST',
       url: $(form).attr('action'),
       data: formData
       })
       .done(function(response) {
         $(".ajax_point").load("/Ainotes/callnotes");
       SnackBar.show({text:'Note Added'});
       $(".ski_loader").css("display", "none");

       })
       .fail(function(data) {
         SnackBar.show({
         text:"Opps there seems to be an error",
         pos: 'top-center',
         backgroundColor: '#e53935'
         });
         $(".ski_loader").css("display", "none");

           });
       });


       $(".close_editor").click(function(e){
         e.preventDefault();
           $(".newnote_point").css("display", "none");
       });
       });

       </script>
