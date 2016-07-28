<a href="#/noteindex/" class="btn btn-info btn-raised btn-round">
back
</a>
<style media="screen">
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
</style>
<div class="col-md-12 animated fadeInUpBig">
  @if (!$note_all->count())
  <div class="ajax_notebook">
  <div class="notebook-none text-center text-muted">
    <h3>No Note Here</h3>
    <p>
    Notes can only be created from a notebook, Click the back button to to create a notebook or <br>headover to your notebook
    manager
    <br>
    <a href="#/nbmanager/" class="btn btn-info btn-raised btn-round">Notebook manager</a>
    <a href="#/noteindex/" class="btn btn-info btn-round btn-raised">
    Go Back
    </a>
  </p>
    <!-- <button class="btn btn-fab btn-success btn-raised" data-toggle="modal" data-target="#suggest_com">
  <i class="material-icons">add_circle</i>
    </button> -->
  </div>
  </div>
  @else
<ul class="list">
  @foreach ($note_all as $notes)
    <li>
<div class="col-md-3">
  <div class="card-note radius shadowDepth1">
      <!-- <div class="card__image border-tlr-radius">
          <img src="http://lorempixel.com/400/200/sports/" alt="image" class="border-tlr-radius">
      </div> -->
      <div class="card__content card__padding">
          <div class="card__meta">
            <article class="card__article">
              <h3 style="margin:0;     cursor: pointer;" class="note_name note_id{{$notes->id}}"><b>{{$notes->note_title}}</b></h3>
              <div class="chip" style="cursor: pointer;" id="notebook{{$notes->notebook_id}}">
                  <img src="svg/bookmark.svg" alt="Person" width="96" height="96">
                <span class="note_notebook">{{$notes->notebook_name}}</span>
                </div><br>

              <h6><span class="text-muted">created at </span><time class="note_time">{{$notes->note_date}}</time></h6>
            </div>
              <div class="text-block note_body">  {!!$notes->note_body!!}</div>
          </article>
      </div>
  </div>
</div>
 </li>
@endforeach
  </ul>
@endif
</div>
<script type="text/javascript">
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
@foreach ($note_all as $notes)
  ajaxfun("Loading {{$notes->note_title}}", ".note_id{{$notes->id}}", "/notes/{{$notes->id}}}", "Load Completed");
  ajaxfun("Loading {{$notes->notebook_name}} Notebook", "#notebook{{$notes->notebook_id}}", "/notebooks/{{$notes->notebook_id}}", "Load Completed");
@endforeach
});
</script>
<script>
     var options = {
  valueNames: [ 'note_name', 'note_body', 'note_notebook', 'note_time' ]
};
var skiList = new List('skisearch', options);
</script>