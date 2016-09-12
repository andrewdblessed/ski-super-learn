@if (!$Ainote_all->count())
No notebooks Yet
<button type="button" class="btn btn-default btn-riased">
create your first notebook
</button>
<form class="" action="{{route('Ainotes.post')}}" method="post" id="new_nb">
 <div class="text-center">
       <br>
       <div class="input-group">
         <input type="text" class="form-control nb-des" placeholder="Ainote Name" name="Ainote_title">
       </div>
    <br>
       <div class="input-group">
   <textarea  class="nb-des form-control" name="Ainote_des" placeholder="Describe your Ainote " rows="3"></textarea>
   </div>
 </div>
   <input type="hidden" name="Ainote_bg" value="{{$bg_number}}">

</div>
<h5>Random Season cover is active <a href="/Ainotes/manager">click to modify</a></h5>
<div class="modal-footer">
<button type="submit" class="btn btn-info btn-sm btn-round btn-raised save_nb">
Add Ainote
</button>
<input type="hidden" name="_token" value="{{ Session::token() }}">
</form>
@else
  <ul class="list">
@foreach ($Ainote_all as $Ainotes)
<li class="li animated fadeIn">
    <a href="#/Ainote/{{$Ainotes->ainote_title}}/" id="{{$Ainotes->id}}"class="list-group-item ">
        <h4 class="list-group-item-heading  Ainote_name"><span class="Ainote_name">  {{$Ainotes->ainote_title}}</span>
          <span class="badge">1</span>
          <span class="pull-right">
            <button  data-toggle="modal" data-target="#confirmtrash{{$Ainotes->id}}" class="btn btn-xs btn-raised btn-info">
              <i  class="fa fa-trash"></i>

            </button>
          </span>
      </h4>
      <p class="nb-descrip Ainote_des">
{{$Ainotes->ainote_des}}
      </p>
  </a>
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
</li>


        <script type="text/javascript">
    $(function() {
      function ajaxfun(welcload, url, loadcom) {
            // $(".ski_loader").css("display", "block");
            $(".notes_loader").css("display", "block");
          SnackBar.show({text:welcload});
        console.log('loading');
            $(".ajax_point").load(url);
            $.ajax({
                success:function(re){
                SnackBar.show({text:loadcom});
                $(".notes_loader").css("display", "none");
                $(".ain-nbs").removeClass("sid-active");
                  $(".ain-notebook").css("display", "none");

                // $(".ski_loader").css("display", "none");
            }
          });
        }
          $.routes.add('/Ainote/{{$Ainotes->ainote_title}}/', function() {
            ajaxfun("loading {{$Ainotes->Ainote_title}} Ainote", "{{ route('dashboard.Ainote.aAinote', ['title' => $Ainotes->id]) }}", "Load Completed");
    // $('.ajax_point').load("{{ route('dashboard.Ainote.aAinote', ['title' => $Ainotes->id]) }}");
  });
    });
    </script>

@endforeach
</ul>
@endif
<script>
var options = {
  valueNames: [ 'Ainote_name', 'Ainote_des']
};
var nbList = new List('skisearch', options);
//
</script>
