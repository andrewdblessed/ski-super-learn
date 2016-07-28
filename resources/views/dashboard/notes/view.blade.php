<style media="screen">
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

.fixed-fab {
    position: fixed;
    top: 89%;
    left: 36%;
    z-index: 21;
    background-color: #fff;
    padding: 4px 24px 0 24px;
}
.card-note {
    background-color: #fff;
    margin-bottom: 1.4rem;
    height: 40em;
}
.card__body {
    overflow-x: hidden;
    overflow-y: scroll;
    height: 363px;
    padding-left: 29px;
    padding-right: 10px;
    margin-bottom: 38px;
}
header.note_header.text-muted {
    text-decoration: underline;
    font-size: xx-large;
    text-transform: capitalize;
    padding-top: 12px;
}
.fix_fab_icon {
    padding: 5%;
}
</style>
<div class="animated fadeIn">

<div class="fixed-fab">
  <a href="#" class="btn btn-raised btn-fab btn-success goback fix_fab_icon" style="padding:5%;"><i class="fa fa-backward"></i></a>
  <a href="{{route('deletenote',[$notes->id])}}" style="padding:5%;" class="btn btn-raised btn-fab btn-warning  fix_fab_icon"><i class="fa fa-trash-o"></i></a>
  <a href="#" style="padding:5%;" class="btn btn-raised btn-fab btn-danger fix_fab_icon"><i class="fa fa-pencil"></i></a>
  <a href="#" style="padding:5%;" class="btn btn-raised btn-fab btn-success fix_fab_icon"><i class="fa fa-download"></i></a>
</div>
<div class="col-md-8 col-md-push-2">
  <div class="main_note">
     <div class="card-note radius shadowDepth1">
        <div class="card__content card__padding">
                  <article class="card__article">
                <header class="note_header text-muted">
                  {{$notes->note_title}}
                </header>
                <div class="chip" style="cursor: pointer;" id="notebook6">
                    <img src="svg/bookmark.svg" alt="Person" width="96" height="96">
                  <span class="note_notebook">{{$notes->notebook_name}}</span>
                  </div><br>

                <h6><span class="text-muted">created at </span><time class="note_time">{{$notes->note_date}}</time></h6>
              </article>
            </div>
                <div class="card__body">
                  {!!$notes->note_body!!}
                </div>
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
ajaxfun("Loading All Notes", ".goback", "/notebooks/callnotes", "Load Completed");
ajaxfun("Loading {{$notes->notebook_name}} Notebook", "#notebook{{$notes->notebook_id}}", "/notebooks/{{$notes->notebook_id}}", "Load Completed");

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
</div>
