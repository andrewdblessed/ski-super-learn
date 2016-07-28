@if (!$notebook_all->count())
<div class="col-md-3 ">
  <div class="card card-raised cardback" style="background-image: url(/user-tools/notebook-background/3.jpg);
  ">
    <div class="add_cont">
<button class="btn btn-fab btn-info btn-raised" data-toggle="modal" data-target="#suggest_com">
<i class="material-icons">add_circle</i>
</button>
<h5 style="    color: rgb(0,121,107);
">Create A notebook</h5>
</div>
</div>
</div>
@else
<div class="animated fadeInUp">

    <div class="col-md-3 ">
      <div class="card card-raised cardback" style="background-color: #fff;
        background-image: url(/user-tools/notebook-background/nb_3.png);">
        <a href="#/allnote/">
        <div class="add_cont">
    <h5 style="    color:#03a9f4;
    ">View All Notes</h5>
    </div>
  </a>
    </div>
    </div>

  <ul class="list">
@foreach ($notebook_all as $notebooks)
<li class="li animated fadeIn">
  <div class="col-md-3">
        <div class="card card-raised cardback" style="background-color: #fff;
          background-image: url(/user-tools/notebook-background/nb_{{$notebooks->notebook_bg}}.png);">
          <div class="card-body com_data">
              <a href="#/notebook/{{$notebooks->notebook_title}}/" id="{{$notebooks->id}}" class="btn btn-info btn-raised btn-fab fab_com"><i class="material-icons">bookmark</i></a>
          <div class="com_tit col-md-6">
              <h6 class="tit_h notebook_name">
                {{$notebooks->notebook_title}}
              </h6>
<!--               <span class="recom notebook_des">{{$notebooks->notebook_des}}</span>
 -->          </div>
        </div>
      </div>
  </div>
</li>


        <script type="text/javascript">
    $(function() {
      function ajaxfun(welcload, url, loadcom) {
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
        }
          $.routes.add('/notebook/{{$notebooks->notebook_title}}/', function() {
            ajaxfun("loading {{$notebooks->notebook_title}} Notebook", "{{ route('dashboard.notebook.anotebook', ['title' => $notebooks->id]) }}", "Load Completed");
    // $('.ajax_point').load("{{ route('dashboard.notebook.anotebook', ['title' => $notebooks->id]) }}");
  });
    });
    </script>

@endforeach
</ul>
</div>

@endif
<script>
var options = {
  valueNames: [ 'notebook_name', 'notebook_des']
};
var nbList = new List('skisearch', options);
//
</script>
