<script src="{{ URL::asset('/src/vendor/s-nav/js/main.js') }}" ></script>

<style media="screen">
.m-p-empty {
    text-align: center;
    color: rgb(120,144,156);
    font-family: sans-serif;
    padding-top: 20%;
}
.border-tlr-radius {
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
}
.text-center { text-align: center; }
.radius { border-radius: 2px; }
.padding-tb { padding-top: 1.6rem; padding-bottom: 1.6rem;}
.shadowDepth0 { box-shadow: 0 1px 3px rgba(0,0,0, 0.12); }
.shadowDepth1 {
   box-shadow:
        0 1px 3px rgba(0,0,0, 0.12),
        0 1px 2px rgba(0,0,0, 0.24);
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
.list > li {
  display:block;
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
.fixed-fab {
    position: fixed;
    top: 89%;
    left: 36%;
    z-index: 21;
    background-color: #fff;
    padding: 4px 24px 0 24px;
}
.fix_fab_icon {
    padding: 5%;
}
</style>

<style type="text/css">
.glyphicon { margin-right:5px; }
.thumbnail
{
    margin-bottom: 20px;
    padding: 12px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}

.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 10px;
}
.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
{
    background: #428bca;
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
}
.item.list-group-item .caption
{
    padding: 9px 9px 0px 9px;
}
.item.list-group-item:nth-of-type(odd)
{
    background: #eeeeee;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item img
{
    float: left;
}
.item.list-group-item:after
{
    clear: both;
}
.list-group-item-text
{
    margin: 0 0 11px;
}
.col-xs-4 {
     border-style: none;
     border-color: none;
}
i.material-icons {
    font-size: 10px;
}
.card-raised.card {
     padding-top: 0px;
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
      ajaxfun("Loading Notebook Manager", "#nbmanager", "{{route('nbmanager.allnb')}}", "Load Completed");
      ajaxfun("Loading Notepad", "#nbnote", "/notenew/{{$notebooks->id}}", "Load Completed");
    });
    </script>
    <header>
    	<nav class="cd-stretchy-nav add-content">
    		<a class="cd-nav-trigger" href="#0">
    			Menu
    			<span aria-hidden="true"></span>
    		</a>

    		<ul>
    			<li><a href="#/noteindex/"><span>Back</span><img class="cd-nva-img" src="/src/vendor/s-nav/img/back.png" alt="" /></a></li>
    			<li><a href="#notepad" id="make-note" ><span>New note</span><img class="cd-nva-img" src="/src/vendor/s-nav/img/compose.png" alt="" /></a></li>
    			<li><a href="#/nbmanager/"><span>Notebook Manager</span><img class="cd-nva-img" src="/src/vendor/s-nav/img/controls.png" alt="" /></a></li>
          <li><a href="#" data-toggle="modal" data-target="#confirmtrash{{$notebooks->id}}" ><span>Delete Notebook</span> <img class="cd-nva-img" src="/src/vendor/s-nav/img/garbage.png" alt="" /></a></li>
    		</ul>

    		<span aria-hidden="true" class="stretchy-nav-bg"></span>
    	</nav>
    </header>
    <!-- <div class="fixed-fab">
      <a href="" class="btn btn-raised btn-fab btn-success goback fix_fab_icon" style="padding:5%;"><i class="fa fa-backward"></i></a>
      <a href="" style="padding:5%;" class="btn btn-raised btn-fab btn-warning  fix_fab_icon"><i class="fa fa-pencil-square-o"></i></a>
      <a href="" style="padding:5%;" class="btn btn-raised btn-fab btn-danger fix_fab_icon"><i class="fa fa-magic"></i></a>
      <a href="#"  style="padding:5%;" class="btn btn-raised btn-fab btn-success fix_fab_icon"><i class="fa fa-trash-o"></i></a>
    </div> -->



<div class="col-md-12 pad-left animated fadeInUp">
  <!-- <a href="{{route('deletenotebook',[$notebooks->id] )}}">delete</a>
    <form class="" action="{{route('updatenotebook',[$notebooks->id])}}" method="post" id="new_nb">
                <div class="form-group">
                      <br>
                  <input type="text"  placeholder="Notebook Name" name="notebook_title" class="form-control nb-title" />
                   <br>
                  <textarea  class="form-control nb-des" name="notebook_des"placeholder="This One is for Big Head thanks for saving Richard" rows="2"></textarea>
                </div>
                  <button type="submit" class="btn btn-info btn-round btn-raised save_nb">
                    Add Notebook
                  </button>
                  <input type="hidden" name="_token" value="{{ Session::token() }}">
</form> -->
<?php // NOTE: CHECKING IF THE USER AS A NOTE ?>
@if (!$note_all->count())

<div class="col-md-3 ">
  <div class="card card-raised cardback" style="background-image: url(/user-tools/notebook-background/15.jpg);
  ">
    <div class="add_cont">
<a href="#notepad" id="make-note" class="btn btn-fab btn-info btn-raised" >
<i class="material-icons">add_circle</i>
</a>
<h5 style="    color: rgb(0,121,107);
">Create a note</h5>
</div>
</div>
</div>
@else ($note_all->count())
<div class="container">


<?php // NOTE: IF THE USER AS NOTES FOR NOTEBOOK LOAD ALL NOTES WITH FOR EACH ?>
<div class="well well-sm card card-raised">
    <strong>Category Title</strong>
    <div class="btn-group">
      <a href="#" id="list" class="btn btn-default btn-sm"><i class="material-icons">view_list</i> List</a>
      <a href="#" id="grid" class="btn btn-default btn-sm"><i class="material-icons">dashboard</i>Grid</a>
    </div>
</div>
<div id="products" class="row list-group">

<ul  class="list">
@foreach ($note_all as $notes)
<?php // NOTE: CHECKING IF THE NOTES BELONG TO THE NOTEBOOK WITH IDS?>
  @if($notes->notebook_id == $notebooks->id)
  <li class=" li animated fadeIn">
    <div class="item  col-xs-4 col-lg-4">
        <div class="thumbnail card card-raised">
            <!-- <img class="group list-group-image" src="/images/braingame.png" alt="" /> -->
            <div class="caption">
                <h4 class="group inner list-group-item-heading note_name"  style="margin:0; cursor: pointer;" id="note_id{{$notes->id}}">
                    {{$notes->note_title}}
                  </h4>

                <p class=" note_body group inner list-group-item-text" id="note_id{{$notes->id}}">

             {!!$notes->note_body!!}
           </p>
                 <div class="row">
                    <div class="col-xs-12 col-md-12">
                          <span class="note_notebook label label-default"
                           style="cursor: pointer;"
                           id="notebook{{$notes->notebook_id}}"> <i class="fa fa-bookmark"></i> {{ $notes->notebook_name}}</span>

                                <span class="label label-default"><i class="material-icons">more_horiz</i> more</span>

                                <span class="label label-default"> <i class="material-icons">mode_edit</i> Edit</span>
                                <span class="label label-default"> <i class="material-icons">share</i> Share</span>


                            </div>
                </div>
            </div>
        </div>
    </div>

<!-- <div class="col-md-3">
<div class="card-note radius shadowDepth1">
  <div class="card__image border-tlr-radius">
        <img src="http://lorempixel.com/400/200/sports/" alt="image" class="border-tlr-radius">
    </div>
    <div class="card__content card__padding">
        <div class="card__meta">
          <article class="card__article">
            <h3 style="margin:0;     cursor: pointer;" class="note_name" id="note_id{{$notes->id}}"><b>{{$notes->note_title}}</b></h3>
            <div class="chip"  style="cursor: pointer;" id="notebook{{$notes->notebook_id}}">
                <img src="svg/bookmark.svg" alt="Person" width="96" height="96">
              <span class="note_notebook">{{$notes->notebook_name}}</span>
              </div>
              <br>

            <h6><span class="text-muted">created at </span><time class="note_time">{{$notes->note_date}}</time></h6>
          </div>
            <div class="text-block note_body" id="note_id{{$notes->id}}">  {!!$notes->note_body!!}</div>
        </article>
    </div>
    <a href="#" data-tooltip="New note from image" class="tooltip"></a>

  </div>
  </div> -->
  </li>

  @endif
  @continue

@if ($notes->notebook_id != $notebooks->id)
  <div class="notebook-none text-center text-muted">
    <h3>create your first {{$notebooks->notebook_title}} note</h3>

    <a href="#notepad" id="make-note" class="btn btn-info btn-raised btn-round">
    Create your first Note
    </a>
  </div>

@endif

@break
@endforeach
</ul>
@endif
</div>
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
<div class="modal fade" id="confirmtrash{{$notebooks->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title" id="myModalLabel">Confirm {{$notebooks->notebook_title}} Notebook Delete</h4>
  </div>

  <div class="modal-body">
    <div class="dd">
<i class="fa fa-trash-o"></i>
    </div>
     <p>
    Deleted notebooks can note be Retrived and all notes in this notebook will be erased from our database
    </p>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-danger  btn-round btn-raised" id="deletenb{{$notebooks->id}}" data-dismiss="modal">Delete Notebook</button>
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
  //   SnackBar.show({text:'deleting {{$notebooks->notebook_title}} Notebook',
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
  //   console.log('Notebook deleted');
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
          location.replace("/notebooks");
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
        $("#deletenb{{$notebooks->id}}").click(function(){
          SnackBar.show({text:"deleting Notebook",
            pos: 'top-center',
           duration: '9000',
          });
          @foreach ($note_all as $notes)
            delete_fun("{{route('deletenote',[$notes->id])}}", "", "0");
          @endforeach
          delete_fun("{{route('deletenotebook',[$notebooks->id] )}}", "/notebooks/ll", "{{$notebooks->notebook_title}} deleted");
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
ajaxfun( "Loading {{$notebooks->notebook_title}} Notepad", "#make-note", "/notenew/{{$notebooks->id}}", "Load Completed");
//NOTE:// goback to main view function
ajaxfun("Loading {{$notebooks->notebook_title}} Notebook", "#goback", "/notebooks/{{$notebooks->id}}", "Load Completed");
@foreach ($note_all as $notes)
  ajaxfun("Loading {{$notes->note_title}}", "#note_id{{$notes->id}}", "/notes/{{$notes->id}}", "Load Completed");
  ajaxfun("Loading {{$notes->notebook_name}} Notebook", "#notebook{{$notes->notebook_id}}", "/notebooks/{{$notes->notebook_id}}", "Load Completed");
@endforeach
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
