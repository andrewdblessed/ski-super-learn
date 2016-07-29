@extends('templates.home_include')
@section('content')

@if (!$notes->count())

<h1>404 page not found</h1>
@else
@foreach ($notes as $notes)

<div class="animated fadeIn">

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
@endforeach
@endif
@stop
