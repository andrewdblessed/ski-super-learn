@extends('templates.default')
<script src="{{ URL::asset('/src/vendor/dropzone/dropzone.js') }}" ></script>
<link rel="stylesheet" href="{{ URL::asset('/src/vendor/dropzone/dropzone.css') }}" media="screen" title="no title" charset="utf-8">

<style media="screen">
/*.more-pad{
  padding-top: 19px;
}*/
.container-fluid.more-pad {
    padding-left: 0;
    padding-right: 0;
}
.container-fluid.more-pad.card.card-raised {
    background: rgb(33,150,243);
    /*padding-top: 23px;*/
}
ul.nav.nav-tabs.nav-tab-info {
  padding-left: 12%;
  background: rgb(33,150,243);
}
.nav-tabs>li {
    margin-left: 40px;
    margin-right: 22px;
}
i.material-icons.m-p-icon {
    font-size: 20px;
    color: rgb(96,125,139);
}
div.m-p-tool {
    float: right;
}
.upload-f-m {
    font-size: -webkit-xxx-large;
}
.m-p-empty {
    text-align: center;
    color: rgb(120,144,156);
    font-family: sans-serif;
}
/*HACK FOR TABLE*/
tr:hover {
    background-color: rgb(3,169,244);
    color: #fff;
}
.t-head:hover {
    background-color: #fff;
    color: black;
}
.t-head{
    background-color: #fff;
    color: black;
}
td.f-delete.td-actions {
width: 5%;
}
td.f-size {
width: 7%;
}
td.f-type {
width: 2%;
}
.card-raised.card {
padding-top: 10px;
height: 100%;
}
img.file-icon {
    width: 40px;
}
td.text-left.f-ent {
    width: 10%;
}
</style>
@section('content')

<div class="container more-pad">
<div class="col-md-12">


<div class="ajax_point">

</div>
</div>
</div>


<script type="text/javascript">
$(document).ready(function(){
        $(".ski_loader").css("display", "block");
    SnackBar.show({text:"Loading Cloud pack",
    pos: 'top-center',
   duration: '10000',
 });
      $(".ajax_point").load("/cloudtest");
      $(".ski_loader").css("display", "none");
});
</script>











<!-- FLOATING BUTTON STARTS  -->
<ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
      <li class="mfb-component__wrap">
        <a href="#/cloudsetup/" class="mfb-component__button--main" data-mfb-label="Tools">
        <i class="mfb-component__main-icon--resting "><i class="fa fa-gear"></i></i>
          <i class="mfb-component__main-icon--active "><i class="fa fa-gears"></i></i>
        </a>
        <ul class="mfb-component__list">
          <li>
            <a href="#/help" data-mfb-label="Help" class="mfb-component__button--child">
              <i class="mfb-component__child-icon "><i class="fa fa-question"></i></i>
            </a>
          </li>
          <li>
            <a href="#/feedback/" data-mfb-label="Give us Feedback" class="mfb-component__button--child">
              <i class="mfb-component__child-icon "><i class="fa fa-reply"></i></i>
            </a>
          </li>
        </ul>
      </li>
    </ul>

<!-- FLOATING BUTTON ENDS -->

<script src="" charset="utf-8"></script>
<!-- <form method="post" action="handleupload" enctype="multipart/form-data">
                    <input name="file" type="file" />
                        <input type="submit" value="Submit"/>
                                <input type="hidden" name="_token" value="{{ Session::token() }}">

                    </p>
                </div>
            </form> -->

              <!-- Modal Core -->
          <div class="modal fade" id="firstfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">Upload Your First File</h4>
                </div>
                <div class="modal-body">
                  @if(count($errors))
                  <ul>
                      @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                  @endif
                  Formats supported: .pdf, .pptx, .docx, .epud and .excel

                              <form action="handleupload" class="dropzone" id="my-awesome-dropzone">
                                <input name="file" type="file" style="display:none;" />
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                              </form>
                  </div>
                <div class="modal-footer">
                  <a class="btn btn-info btn-raised file-done" data-dismiss="modal">DONE</a>
                </form>
                </div>
              </div>
            </div>
          </div>
          <script type="text/javascript">
          $(function() {
            function ajaxfun(welcload, btn, url, loadcom) {
              $(btn).click(function(){
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
                       duration: '9000',});
                      console.log(loadcom);
                      $(".ski_loader").css("display", "none");

                  }
                });
              });
              }
                  //NOTE:// NEW note function
          ajaxfun( "Adding accepted files to Cloud pack", ".file-done", "/cloudtest", "files added");

            });
          </script>



@stop
