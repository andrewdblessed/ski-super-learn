<style media="screen">
.ajax_point {
    background-image: url(user-tools/ainote-background/nb_{{$Ainotes->ainote_bg}}.png);
    background-size: 366px;
    height: 100%;
    z-index: -119;
    background-position-x: 525px;
    background-position-y: 197px;
    background-repeat: no-repeat;
}
</style>
    <script type="text/javascript">
    $(function() {
      function ajaxfun(welcload, btn, url, loadcom) {
        $(btn).click(function(){
          // $(".ski_loader").css("display", "block");
          SnackBar.show({text:welcload,
            pos: 'top-center',
           duration: '9000',
         });
                 console.log('loading');
            $(".ajax_point").load(url);
            $.ajax({
                success:function(re){
                  SnackBar.show({text:loadcom,
                                  pos: 'top-center',
                                });
                console.log(loadcom);
            }
          });
        });
        }
      ajaxfun("Loading Ainote Manager", "#nbmanager", "{{route('nbmanager.allnb')}}", "Load Completed");
      ajaxfun("Loading Notepad", "#nbnote", "/notenew/{{$Ainotes->id}}", "Load Completed");
    });
    </script>
<!-- <img src="user-tools/ainote-background/nb_{{$Ainotes->ainote_bg}}.png" alt="" /> -->
<div class="pad-left animated fadeInUp">
  <?php // NOTE: CHECKING IF THE USER AS A NOTE ?>
  <div class="text-center text-muted">
    <span class="make-nb-note">create a "{{$Ainotes->ainote_title}}" Note </span><button class="btn btn-fab btn-info btn-raised make-nb-note">
  <i class="material-icons">add_circle</i>
    </button>
  </div>
  <div class="nb-note-editor">

  </div>
@if (!$note_all->count())

<div class="col-md-8 col-md-push-3">
  <div class="Ainote-none text-center text-muted">
    <img src="user-tools/ainote_cats/ainote-empty.png" class="ainote-empty" alt="" />
  <h3>This Notebook is empty</h3>
    </div>
</div>

@else ($note_all->count())

<?php // NOTE: IF THE USER AS NOTES FOR Ainote LOAD ALL NOTES WITH FOR EACH ?>

<ul  class="list">
@foreach ($note_all as $notes)
<?php // NOTE: CHECKING IF THE NOTES BELONG TO THE Ainote WITH IDS?>
  @if($notes->ainote_id == $Ainotes->id)
  <li class=" li animated fadeIn">

    <div class="col-md-8 col-md-push-3">
      <div class="jumbotron" style="border-radius:0;">
          <img class="ainotes_cats_img" src="user-tools/ainote-background/nb_{{$Ainotes->ainote_bg}}.png" alt="" />
      <div class="ain-note-title">
        <h3 style="margin-top:0;" class="note_name">{{$notes->note_title}}</h3>
      </div>
      <hr>
      <div class="ain-note-body note_body">
        <p>
  {!!$notes->note_body!!}        </p>
      </div>
      <hr>
      <div class="ain-date note_time">
      Created at  {{$notes->note_date}}
      </div>
    </div>
    </div>
  </li>
@endif
@endforeach
</ul>
@endif
</div>
</div>

<!-- confirm Core modal -->
<style media="screen">
.modal-content {
  background: #ff1744;
  /*padding-bottom: 30%;*/
  margin-top: 14%;
  color: #fff;
}
.modal-title {
    font-size: 1.2em;
    font-weight: bold;
    text-align: center;
}
.dd{
    text-align: center;
    font-size: 8em;
}
</style>
<div class="modal fade" id="confirmtrash{{$Ainotes->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title" id="myModalLabel">Confirm {{$Ainotes->Ainote_title}} Ainote Delete</h4>
  </div>

  <div class="modal-body">
    <div class="dd">
<i class="fa fa-trash-o"></i>
    </div>
     <p>
    Deleted Ainotes can note be Retrived and all notes in this Ainote will be erased from our database
    </p>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-danger  btn-round btn-raised" id="deletenb{{$Ainotes->id}}" data-dismiss="modal">Delete Ainote</button>
    <button type="submit" class="btn btn-default btn-round btn-raised" data-dismiss="modal">Cancel</button>
  </form>
  </div>
</div>
</div>
</div>

<script type="text/javascript">
// ajax DELETE
$(function() {
  //
  // $("").click(function(e) {
  //   $(".ski_loader").css("display", "block");
  //   SnackBar.show({text:'deleting {{$Ainotes->Ainote_title}} Ainote',
  //     pos: 'top-center',
  //    duration: '9000',
  //   });
  //   console.log('loading');
  // var  durl = "";
  // $.ajax({
  // type: 'GET',
  // url: durl,
  // })
  // .done(function(response) {
  //   $(".ajax_point").load("");
  //   SnackBar.show({text:'',
  //     pos: 'top-center',
  //    duration: '9000',});
  //   console.log('Ainote deleted');
  //   $(".ski_loader").css("display", "none");
  // })
  // .fail(function(data) {
  //   SnackBar.show({
  //   text:"Opps there seems to be an error",
  //   pos: 'top-center',
  //   backgroundColor: '#e53935'
  //   });
  //   $(".ski_loader").css("display", "none");
  //
  //     });
  // });
  function delete_fun(url, redirect, loadcom) {
          $(".ski_loader").css("display", "block");
      // console.log('loading');
    var  durl = url;
    $.ajax({
    type: 'GET',
    url: durl,
    })
    .done(function(response) {
      if (loadcom == 0) {
console.log(null);
      }else{
        SnackBar.show({text:loadcom,
          pos: 'top-center',
          duration: '9000',});
          location.replace("/Ainotes");
      }-
      // console.log('note deleted');
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
        console.log(redirect);
    };
        $("#deletenb{{$Ainotes->id}}").click(function(){
          SnackBar.show({text:"deleting Ainote",
            pos: 'top-center',
           duration: '9000',
          });
          @foreach ($note_all as $notes)
            delete_fun("{{route('deletenote',[$notes->id])}}", "", "0");
          @endforeach
          delete_fun("{{route('deleteAinote',[$Ainotes->id] )}}", "/Ainotes/ll", "{{$Ainotes->Ainote_title}} deleted");
        });
        });
</script>

<script type="text/javascript">
$(function() {
  // NOTE: AJAX_FUN FOR LOADING REGULAR AJAX CALLS
  function ajaxfun(welcload, btn, url, loadcom) {
    $(btn).click(function(){
      // $(".ski_loader").css("display", "block");
      SnackBar.show({text:welcload});
    console.log('loading');
        $(".ajax_point").load(url);
        $.ajax({
            success:function(re){
            SnackBar.show({text:loadcom});
            console.log(loadcom);
        }
      });
    });
    }
      //NOTE:// NEW note function
ajaxfun( "Loading {{$Ainotes->Ainote_title}} Notepad", ".make-note", "/notenew/{{$Ainotes->id}}", "Load Completed");
//NOTE:// goback to main view function
ajaxfun("Loading {{$Ainotes->Ainote_title}} Ainote", "#goback", "/Ainotes/{{$Ainotes->id}}", "Load Completed");
@foreach ($note_all as $notes)
  ajaxfun("Loading {{$notes->note_title}}", "#note_id{{$notes->id}}", "/notes/{{$notes->id}}", "Load Completed");
  ajaxfun("Loading {{$notes->Ainote_name}} Ainote", "#Ainote{{$notes->Ainote_id}}", "/Ainotes/{{$notes->Ainote_id}}", "Load Completed");
@endforeach

// NOTE: script for new note with notebook
          $(".make-nb-note").click(function(){
              $(".notes_loader").css("display", "block");
            SnackBar.show({text:"Opeining AiNote-pad",
        pos: 'bottom-center',
       duration: '9000',
     });
          $(".nb-note-editor").load("/notenew/{{$Ainotes->id}}");
          $.ajax({
              success:function(re){
                  $(".notes_loader").css("display", "none");
                  $(".newainote").removeClass("bounce");
                  $(".newnote_point").css("display", "block");
            console.log("load completed");
          }
        });
});
});
</script>
<script>
     var options = {
  valueNames: [ 'note_name', 'note_body', 'note_time' ]
};
var userList = new List('skisearch', options);
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
</script>
