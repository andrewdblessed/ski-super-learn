@extends('templates.default')

@section('content')


 <!-- Notification css (Toastr) -->
<script src="{{ URL::asset('/src/vendor/dropzone/dropzone.js') }}" ></script>
<link rel="stylesheet" href="{{ URL::asset('/src/vendor/dropzone/dropzone.css') }}" media="screen" title="no title" charset="utf-8">

<style media="screen">

img.file-icon {
    width: 35px;
}

/*the new styles*/
img.animated.infinite.no-file.pulse {
    width: 137px;
    margin: 20px 43% 10px 35%;
}
h3.cloud-h3 {
    text-align: center;
    font-weight: 800;
}
.col-sm-7.file_view {
    padding: 0;
}
.doc_viwer {
    height: 100%;
}
.no-p {
    width: 70px;
}
.doc_viwer_intro {
    margin-top: 26%;
}
.file-view {
    padding: 14px;
}
.dropzone {
    min-height: 150px;
    border: 2px solid rgba(0, 0, 0, 0.3);
    background: white;
    padding: 20px 20px;
    border-style: dashed;
}
</style>

 <div class="row">
<!--               <div class="col-xs-12">
                <div class="page-title-box">
                                    <h4 class="page-title">Cloudpack</h4>

                                    <div class="clearfix"></div>
                                </div>
              </div> -->
            </div>

<div class="row">

<div class="ajax_point">
<!-- the point in which the ajax content is pulled to -->
</div>

</div>


<script type="text/javascript">
$(document).ready(function(){
        $(".ski_loader").css("display", "block");

      $(".ajax_point").load("/cloudtest");
      $(".ski_loader").css("display", "none");
});
</script>










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
                  <a class="btn btn-primary btn-lg text-center waves-effect w-md btn-rounded file-done" data-dismiss="modal"><i class="mdi mdi-upload"></i> <span>DONE</span></a>
                </form>
                </div>
              </div>
            </div>
          </div>
          <script type="text/javascript">
          $(function() {
            function ajaxfun(welcload, btn, url, loadcom) {
              $(btn).click(function(){
                 toastr["info"](welcload)
                  $(".ajax_point").load(url);
                  $.ajax({
                      success:function(re){
                     toastr.success("Sync Complete");
                  }
                });
              });
              }
                  //NOTE:// NEW note function
          ajaxfun( "Adding accepted files to Cloud pack", ".file-done", "/cloudtest", "files added");
toastr.success("Loading. this should only take a second");



            });
          </script>

   <!-- Toastr js -->
        <script src="/plugins/toastr/toastr.min.js"></script>
        <!-- Toastr init js (Demo)-->
        <script src="{{ URL::asset('/src/vendor/new/pages/jquery.toastr.js')}}"></script>

@stop
