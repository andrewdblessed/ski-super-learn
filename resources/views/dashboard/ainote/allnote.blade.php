
  @if (!$note_all->count())
<script>
         jQuery(document).ready(function(){
// summer note js
                $('.summernote').summernote({
                    height: 300,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false ,                // set focus to editable area after initializing summernote
                   placeholder: 'write here...'
                });

                  });
         </script>
<div class="col-md-10 col-md-push-1">

        <div class="panel note-card">
      <div class="panel-heading">

          <h3 class="panel-title">Create new Note</h3>

      </div>
      <div class="panel-reader">

    <form action="{{route('post.note')}}" id="new_note" method="post">


             <input type="hidden" name="_token" value="{{ Session::token() }}">

     <div class="form-group">
          <label>Note Name</label>
          <input type="text" class="form-control" required name="note_title" placeholder="Name of note"/>
      </div>

    <div class="form-group">
                      <label>Explain your Note</label>
                      <div>

 <textarea  name="note_body" required  class="summernote">


</textarea>


                      </div>
                  </div>

            <textarea type="text" style="display:none;" name="note_date"  id="notedate"> </textarea>
             {{--GUEST TOKEN FOR SHARING NOTE --}}
             <input type="hidden" name="guest_token" value="{{$guest_token}}">
<button type="submit" class="btn btn-primary btn-rounded btn-lg btn-custom w-lg waves-effect waves-light save_note"> <i class=" mdi mdi-content-save"></i>Save </button>


       </form>
         </div>
       </div>

<!-- <div class="card-box">
<h3 class="cloud-h3 text-center">Is Note Taking Time</h3>
<img class="animated pulse infinite no-note" src="/user-tools/ainote_cats/ainote-empty.png">
<h4 class="text-center">
Hey this Note planet is empty</h4>
@if ($emp_note == 1)
<p>Lets create a simple note</p>
    @elseif ($emp_note == 2)
<p>Write about that wonderful Idea</p>
    @elseif ($emp_note == 3)
<p>Write down what you learnt today</p>
    @else ($emp_note == 1)
<p>Write down that crazy formula</p>
    @endif

<button type="button" data-toggle="modal" data-target="#firstfile"
 class="btn btn-primary btn-lg text-center waves-effect w-md btn-rounded">
Upload file <i class=" mdi mdi-cloud-upload"></i>
</button>
</div> -->

     </div>

  @else
  <script type="text/javascript">
$(function() {


 $(".col-reader").load("/new_note_index");
});
  </script>
<div class="col-sm-3 col-notes">
       <div class="panel">
    <div class="panel-heading">
        <h2 class="panel-title">NOTES</h2>
        <div class="btn-toolbar m-t-20" role="toolbar">
              <button type="button" class="note_pad btn btn-primary waves-effect waves-light "><i class=" mdi mdi-plus-circle"></i></button>
        </div>
             <div class="form-group">
<input type="text" class="form-control search" required   placeholder="Search your notes"/>
</div>
    </div>
    <div class="panel-body">

<ul class="list">

  @foreach ($note_all as $notes)

  <li class=" li animated fadeIn">

<a href="#" class=" note_id{{$notes->id}} list-group-item">
  <h4 class=" note_id{{$notes->id}} list-group-item-heading note_name text-primary">{{$notes->note_title}} <span > <small class="text-primary note_time">{{$notes->note_date}} </small></span></h4>
  <div class="list-group-item-text note_body">{!!$notes->note_body!!} </div>
<!--   <p>{{$notes->created_at}}</p>
       <a class="btn waves-effect waves-light btn-danger btn-sm" href="{{route('deletenote',[$notes->id])}}"><i class="fa fa-trash-o"></i></a>

  {{$notes->note_date}} -->

</a>
  </li>

@endforeach


  </ul>
        </div>
</div>
</div>
@endif

<script type="text/javascript">
$(function() {

  function ajaxfun(welcload, btn, url, loadcom) {
    $(btn).click(function(){
 toastr.success(welcload);

       console.log('loading note');
        $(".col-reader").load(url);
        $.ajax({
            success:function(re){
   toastr.success(loadcom);

        }
      });
    });
    }
@foreach ($note_all as $notes)
  ajaxfun("Loading {{$notes->note_title}}, plese Holdon", ".note_id{{$notes->id}}", "/notes/{{$notes->id}}}", "Note Loaded");
@endforeach
  ajaxfun("Opening Notepad, plese Holdon", ".note_pad", "/new_note_index", "Notepad Open");

});
</script>
<script>
     var options = {
  valueNames: [ 'note_name', 'note_body', 'note_time' ]
};
var skiList = new List('skisearch', options);
</script>
