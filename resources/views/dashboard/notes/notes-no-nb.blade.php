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
</style>

<div class="col-md-10 col-md-push-1">
  <div class="main_note">
     <div class="card-note radius shadowDepth1">
        <!-- <div class="card__image border-tlr-radius">
            <img src="http://lorempixel.com/400/200/sports/" alt="image" class="border-tlr-radius">
        </div> -->
        <button class="btn btn-info btn-round btn-raised btn-sm goback"><i class="material-icons">arrow_back</i>back</button>
     <button class="btn btn-info btn-round btn-raised btn-sm goedit"><i class="material-icons">mode_edit</i>Save Note</button>
        <div class="card__content card__padding">
            <div class="card__meta">
              <article class="card__article">
                <header class="note_header text-muted">
                  <input class="note_name note_id31" value="NAME OF NOTE">
                </header>

                  <br>
                  @foreach ($notebook_all as $notebooks)
                  <input type="hidden" name="notebook_id" value="{{$notebooks->id}}">
                   <input type="hidden" name="notebook_name" value="{{$notebooks->notebook_title}}">
                   @endforeach
                   <textarea type="hidden" name="note_date"  id="notedate"> </textarea>
              </article></div>
                <textarea class="editable note_body"></textarea>

        </div>
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
