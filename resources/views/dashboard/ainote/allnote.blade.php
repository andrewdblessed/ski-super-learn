<style media="screen">

.list > li {
  display:block;
  }
</style>
<div class="animated fadeInUpBig">
  @if (!$note_all->count())
<div class="col-md-8 col-md-push-3">

  <div class="Ainote-none text-center text-muted">
    <img src="user-tools/ainote_cats/ainote-empty.png" class="ainote-empty" alt="" />
    @if ($emp_note == 1)
    <h3>No Note Here</h3>
    @elseif ($emp_note == 2)
    <h3>oh my no notes Yet</h3>
    @elseif ($emp_note == 3)
    <h3>Am Empty for Now</h3>
    @else ($emp_note == 1)
    <h3>Oops there is no notes yet</h3>
    @endif
   <button class="btn btn-info btn-raised btn-round ain-nbs">
      Select a Notebook
    </button><br>
      Notes are created from Notebooks
     <small>
  We Know the importance of an organized note, Which is why Ainotes are created from Notebooks
</small><br>
  create a Notebook  <button class="btn btn-fab btn-info btn-raised">
  <i class="material-icons">add_circle</i>
    </button>
  </div>
</div>
  @else
<ul class="list">
  @foreach ($note_all as $notes)

  <li class=" li animated fadeIn">

    <div class="col-md-8 col-md-push-3">
      <div class="jumbotron" style="border-radius:0;">
          <img class="ainotes_cats_img" src="user-tools/ainote-background/nb_{{$notes->ainote_bg}}.png" alt="" />
          <div class="edit-ajax">

      <div class="ain-note-title">
        <h3 style="margin-top:0;" class="note_name note_id{{$notes->id}}">{{$notes->note_title}}</h3>
      </div>
      <div class="ain-nb-title">
        <h5 class="note_Ainote"> {{ $notes->ainote_name}}</h5>
      </div>
      <hr>
      <div class="ain-note-body ain-note-body{{$notes->id}} note_body" >
        <p>
{!!$notes->note_body!!}        </p>
    </div>
        <hr>
        <div class="btn-group btn-group-sm btn-raised">
          <a href="/notes/5" class="btn-ain-icon btn-raised btn btn-round" style="
          background: #78909c;
">
          <i class="fa fa-edit"></i>
        </a>
          <a href="#" class="btn-ain-icon btn btn-raised" style="
    background: #78909c;
">
          <i class="fa fa-share-square-o"></i>
        </a>
          <a href="#" class="btn-ain-icon  btn btn-raised" style="
          background: #78909c;
">
          <i class="fa fa-star-o"></i>
        </a>
          <a href="{{route('deletenote',[$notes->id])}}" class="btn-ain-icon btn-raised btn btn-round" style="
          background: #78909c;
">
            <i class="fa fa-trash-o"></i>
          </a>
        </div>


        <div class="pull-right">
          <span ><a href="#" class=" btn-ain-icon show_more{{$notes->id}} more-toggle" style="display:inline; "><small>more</small> <i class="fa fa-chevron-down"></i></a>
          </span>
          <span>
            <a href="#"  class=" btn-ain-icon hide_more{{$notes->id}} more-toggle" style="display:none;"><small>less</small>    <i class="fa fa-chevron-up"></i></a>
          </span>
        </div>
      <div class="ain-date note_time">
      Created at  {{$notes->note_date}}
      </div>

    </div>
    </div>
  </div>

  </li>

@endforeach
  </ul>
@endif
</div>
@foreach($note_all as $notes)
<script type="text/javascript">
$(function() {
  // var note_open = false;
  $(".show_more{{$notes->id}}").click(function(){
    // var note_open = true;
    // if (note_open == true) {
      $(".ain-note-body{{$notes->id}}").css("height", "100%");
      $(".show_more{{$notes->id}}").css("display", "none");
      $(".hide_more{{$notes->id}}").css("display", "inline");


    // }
});
$(".hide_more{{$notes->id}}").click(function(){
  // var note_open = false;
  // if (note_open == false) {
    $(".ain-note-body{{$notes->id}}").css("height", "82px");
    $(".hide_more{{$notes->id}}").css("display", "none");
    $(".show_more{{$notes->id}}").css("display", "inline");
// }
});
});
</script>
@endforeach
<script type="text/javascript">
$(function() {
  $(".ain-nbs").click(function(){
SnackBar.show({text:"Loading Notebooks",
pos: 'bottom-center',
duration: '9000',
});
  $(".ain_point").load("{{route('dashboard.Ainote.allAinote')}}");

      $(".ain-notebook").css("display", "block");
    $(".ain-nbs").addClass("sid-active");
});
$(".ain-nbs-close").click(function(){
$(".ain-notebook").css("display", "none");
$(".ain-nbs").removeClass("sid-active");
});

  function ajaxfun(welcload, btn, url, loadcom) {
    $(btn).click(function(){
      // $(".ski_loader").css("display", "block");
      $(".ains_loader").css("display", "block");
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
  ajaxfun("Loading {{$notes->Ainote_name}} Ainote", "#Ainote{{$notes->Ainote_id}}", "/Ainotes/{{$notes->Ainote_id}}", "Load Completed");
@endforeach
});
</script>
<script>
     var options = {
  valueNames: [ 'note_name', 'note_body', 'note_Ainote', 'note_time' ]
};
var skiList = new List('skisearch', options);
</script>
