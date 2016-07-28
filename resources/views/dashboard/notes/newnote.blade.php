
<style media="screen">
  /*.editable{
height: 20em;
  }*/
  /*.note-field {
    width: 30em;
}*/
input#title {
    border: none;
    font-size: xx-large;
    font-variant: small-caps;
    font-weight: 600;
}
.navbar-end{
  float: right;
}
.fa{
    color: #fff;
    font-size: 28px;
}
.overflow{
  overflow: overlay
}
button.save_note.btn.btn-raised.btn-info.btn-fab {
    position: fixed;
    top: 69%;
    left: 3%;
}
.note_nav{
position: fixed;
}
.gback{
  float: left;
}
.gedit{
  float: right;
}
/**
 * Card Styles
 */

.card-note {
    background-color: #fff;
    margin-bottom: 1.6rem;
}

.card__padding {
    padding: 1.6rem;
}

.card__image {
    min-height: 100px;
    background-color: #eee;
}
    .card__image img {
        width: 100%;
        max-width: 100%;
        display: block;
    }

.card__content {
    position: relative;
}

/* card meta */
/*.card__meta time {
    font-size: 1.5rem;
    color: #bbb;
    margin-left: 0.8rem;
}*/

/* card article */
.card__article a {
    text-decoration: none;
    color: #444;
    transition: all 0.5s ease;
}
    .card__article a:hover {
        color: #2980b9;
    }

/* card action */
.card__action {
    overflow: hidden;
    padding-right: 1.6rem;
    padding-left: 1.6rem;
    padding-bottom: 1.6rem;
}

.card__author {}

    .card__author img,
    .card__author-content {
        display: inline-block;
        vertical-align: middle;
    }

    .card__author img{
        border-radius: 50%;
        margin-right: 0.6em;
    }
  .chip {
      padding: 0px 26px;
      height: 30px;
      font-size: 12px;
      line-height: 30px;
      border-radius: 5px;
      background-color: #f1f1f1;
      left: 86px;
      margin-bottom: 9px;
      display: inline-block;
  }

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 29px;
  width: 29px;
  border-radius: 50%;
}
/*.main_note{
  max-height: 200px;
  overflow-x: scroll;
}*/
.goback{
  float: left;
      z-index: 10;
}
.goedit{
  float: right;
      z-index: 10;
}
.note_header{
  text-align: center;
}
input.note_name {
    border: none;
    font-size: xx-large;
    width: 50%;
    margin-top: 17px;
    margin-bottom: 12px;
}
textarea.note_body {
    width: 82%;
    margin-left: 11%;
    border: none;
    text-align: justify;
    font-size: 1.3em;
    height: 376px;
}
.alert{
  color:red;
}
.alert-danger{
background-color: blue;
padding: 20px;
}
</style>
@if ($errors->has())
       <div class="alert alert-danger">
           @foreach ($errors->all() as $error)
               {{ $error }}<br>
           @endforeach
       </div>
       @endif

<div class="col-md-10 col-md-push-1">
  <div class="main_note">
     <div class="card-note radius shadowDepth1">
        <!-- <div class="card__image border-tlr-radius">
            <img src="http://lorempixel.com/400/200/sports/" alt="image" class="border-tlr-radius">
        </div> -->
        <button class="btn btn-info btn-round btn-raised btn-sm goback"><i class="material-icons">arrow_back</i>back</button>
        <div class="card__content card__padding">
          <form  action="{{route('post.note')}}" id="new_note" method="post">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
     <button type="submit" class=" btn btn-raised btn-info goedit">Save</button>
                  <article class="card__article">

                <header class="note_header text-muted">
                  <input class="note_name note_id31" name="note_title" placeholder="Name of note">
                </header>
              <br>
              </article>

                <textarea class="editable note_body" name="note_body"></textarea>


                <input type="hidden" name="notebook_id" value="{{$notebooks->id}}">
                <input type="hidden" name="notebook_name" value="{{$notebooks->notebook_title}}">
                <textarea type="hidden" style="display:none;" name="note_date"  id="notedate"> </textarea>

               </div>
         </form>
    </div>

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
ajaxfun("Loading All Notes", ".goback", "/notebooks/callnotes", "Load Completed");
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
                         </script>
  </div>
</div>



<nav class="cd-stretchy-nav">
  <a class="cd-nav-trigger" href="#0">
    Menu
    <span aria-hidden="true"></span>
  </a>

  <ul>
    <li><a href="#0" class="active"><span>Home</span></a></li>
    <li><a href="#0"><span>Portfolio</span></a></li>
    <!-- other list items here -->
  </ul>

  <span aria-hidden="true" class="stretchy-nav-bg"></span>
</nav>


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
  $(".ajax_point").load("/notebooks/callnotes");
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


$(".goback").click(function(){
    $(".ski_loader").css("display", "block");
    $(".ajax_point").load("{{route('dashboard.notes.notesload')}}");
    $.ajax({
        success:function(re){
        SnackBar.show({text:'All notes'});
          $(".ski_loader").css("display", "none");
}
  });
});
});

</script>
