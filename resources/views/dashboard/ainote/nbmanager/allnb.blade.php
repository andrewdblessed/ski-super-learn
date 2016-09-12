<style media="screen">
.list > .li {
  display:block;
  }
</style>


    {{--loading the over flow js--}}
    <div id="nbHolder" class="overlay">

      <!-- Button to close the overlay navigation -->
      <a href="javascript:void(0)" class="closebtn" onclick="closeNB()">&times;</a>

      <!-- Overlay content -->
      <div class="overlay-content">
        <div class="container">
          <div class="col-md-6">
            <h3>Create A New Ainote</h3>
            <hr>
            <div class="col-sm-8 col-md-push-2">
              <form class="" action="{{route('Ainotes.post')}}" method="post" id="new_nb">
                <div class="form-group">
                  <span>Ainote Name</span>
                  <br>
                  <input type="text" value="Holli Rocks(Delete me)" placeholder="Ainote Name" name="Ainote_title" class="form-control nb-title" />
                  </div>
                  <span>Ainote description</span>
                  <br>
                  <textarea  class="form-control nb-des" name="Ainote_des" rows="2">This One is for Big Head thanks for saving Richard (Delete Me)</textarea>
                  <button type="submit" class="btn btn-info btn-round btn-raised save_nb">
                    Add Ainote
                  </button>
                  <input type="hidden" name="_token" value="{{ Session::token() }}">

              </form>
            </div>
          </div>
            </div>
          </div>
        </div>

<script type="text/javascript">


    /* Open when someone clicks on the new-nb element */
    function newNB() {
        document.getElementById("nbHolder").style.width = "51%";
    }

        /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNB() {
        document.getElementById("nbHolder").style.width = "0%";
    }

$(function() {
  //NOTE:SECTION2000

var form = $('#new_nb');
var url = "{{route('nbmanager.allnb')}}"

// var formMessages = $('#activate_adela');

$(".save_nb").click(function(e) {
e.preventDefault();
    $(".ski_loader").css("display", "block");
    SnackBar.show({
    text:"Saving Ainote",
    pos: 'top-center',
});

    var formData = $(form).serialize();
$.ajax({
type: 'POST',
url: $(form).attr('action'),
data: formData
})
.done(function(response) {
    $(".ajax_nb").load("{{route('nbmanager.allnb')}}");
    SnackBar.show({
text:"yah Ainote Created",
pos: 'top-center',
});
$(".ski_loader").css("display", "none");

})
.fail(function(data) {
  SnackBar.show({
  text:"Opps there seems to be an error (Make Sure you deleted The placeholder HOlli)",
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

@if (!$Ainote_all->count())


<div class="Ainote-none text-center text-muted">
  <h3>Hello Ski, Learner lets create your first Ainote</h3>
  <button class="btn btn-info btn-raised btn-round" onclick="newNB()">Create Ainote</button>
</div>

@else
<script src="{{ URL::asset('/src/vendor/paper-collapse/paper-collapse.min.js') }}" ></script>
<link href="{{ URL::asset('/src/vendor/paper-collapse/paper-collapse.min.css') }}" rel="stylesheet">
<style media="screen">
.collapse-card__title {
  font-size: 1.6rem;
  line-height: 2rem;
  margin: 0 2rem 0 0;
  /*overflow: hidden;*/
  text-overflow: ellipsis;
  white-space: nowrap;
  font-weight: 800;
  float: left;
}
.nb-btn-set{
  margin: 0px;
}
.nb-btn-new{
  margin: 0px;
}
.nb-btns{
      margin-left: 67%;
}
</style>

<ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
      <li class="mfb-component__wrap">
        <a href="#" onclick="newNB()" class="mfb-component__button--main" data-mfb-label="New Ainote">
          <i class="mfb-component__main-icon--resting "><i class="fa fa-plus"></i></i>
          <i class="mfb-component__main-icon--active "><i class="fa fa-bookmark"></i></i>
        </a>
        <ul class="mfb-component__list">
          <li>
            <a href="#sync" data-mfb-label="Sync Ainotes" class="mfb-component__button--child" id="sync-nb">
              <i class="mfb-component__child-icon "><i class="fa fa-refresh"></i></i>
            </a>
          </li>
          <li>
            <a href="#help" data-mfb-label="Ski Learn Help Desk" class="mfb-component__button--child">
              <i class="mfb-component__child-icon "><i class="fa fa-question"></i></i>
            </a>
          </li>
          <li>
            <a href="#feedback" data-mfb-label="Give us Feedback" class="mfb-component__button--child">
              <i class="mfb-component__child-icon "><i class="fa fa-reply"></i></i>
            </a>
          </li>
        </ul>
      </li>
    </ul>

    <ul class="list">
@foreach ($Ainote_all as $Ainotes)
<li class="li">
<div class="collapse-card">
  <div class="collapse-card__heading ">
    <div class="{{$Ainotes->id}}">
        <h4 class="collapse-card__title  Ainote_name">
          <i class="fa fa-bookmark-o fa-2x fa-fw"></i>
        {{$Ainotes->Ainote_title}}
      </h4><span>{{$Ainotes->Ainote_des}}</span>
    </div>
      <div class="nb-btns">
        <a href="#" type="button" id="make-nb-note{{$Ainotes->id}}" class="btn btn-info btn-round btn-sm nb-btn-new btn-raised">
          new Note
        </a>
        <a href="#" type="button" class="btn btn-info btn-round btn-sm nb-btn-set btn-raised {{$Ainotes->id}}">
          View Ainote
        </a>
      </div>
  </div>
</div>

      <script type="text/javascript">
  $(function() {
       $(".collapse-card").paperCollapse();
    // creating the ajax functions
    function ajaxfun(welcload, btn, url, loadcom) {
      $(btn).click(function(){
          // $(btn).css("background", "#fff");
          // $(btn).css("color", "#03a9f4");
        $(".ski_loader").css("display", "block");
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
                              $(".ski_loader").css("display", "none");
          }
        });
      });
      }
    ajaxfun("loading {{$Ainotes->Ainote_title}} Ainote", ".{{$Ainotes->id}}", "{{ route('dashboard.Ainote.aAinote', ['title' => $Ainotes->id]) }}", "Load Completed");
    ajaxfun( "Loading {{$Ainotes->Ainote_title}} Notepad", "#make-nb-note{{$Ainotes->id}}", "/notenew/{{$Ainotes->id}}", "Load Completed");

  });
  </script>
</li>
@endforeach
</ul>
<script>
var options = {
  valueNames: [ 'Ainote_name']
};
var nbList = new List('skisearch', options);
//
</script>
<script type="text/javascript">
$(function() {
  // creating the ajax functions
  function ajaxfun(welcload, btn, url, loadcom) {
    $(btn).click(function(){
        // $(btn).css("background", "#fff");
        // $(btn).css("color", "#03a9f4");
      $(".ski_loader").css("display", "block");
      SnackBar.show({text:welcload,
        pos: 'top-center',
       duration: '9000',
     });
    console.log('loading');
        $(".ajax_nb").load(url);
        $.ajax({
            success:function(re){
            SnackBar.show({text:loadcom,
                            pos: 'top-center',
                          });
                            $(".ski_loader").css("display", "none");
        }
      });
    });
    }
    ajaxfun("Syncing Ainote", "#sync-nb", "{{route('nbmanager.allnb')}}", "Sync Completed");
      });
</script>
@endif
