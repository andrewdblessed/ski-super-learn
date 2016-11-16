@if (!$files->count())

<div class="row">
<div class="col-md-6 col-md-push-3">
<div class="card-box">
<h3 class="cloud-h3">Welcome to your Cloud pack</h3>
  <img class=" animated pulse infinite no-file" src="{{ URL::asset('/src/vendor/new/images/icons/stack_of_photos.svg')}}" title="stack_of_photos.svg"/>
<h5>
Store ebooks, document files, power point presentations, excell spread sheet</h5>
<button type="button" data-toggle="modal" data-target="#firstfile"
 class="btn btn-primary btn-lg text-center waves-effect w-md ">
Upload file <i class=" mdi mdi-cloud-upload"></i>
</button>
  </div>
</div>
</div>


@else



  <div class="row">
<div class="col-lg-12">
<div class="card-box">
<h4 class="m-t-0 header-title"><b>Cloud Pack</b></h4>
<p class="text-muted m-b-30 font-13">
View, store and manage your study files at ease
</p>

<div class="btn-toolbar m-t-20" role="toolbar">
<div class="btn-group">
<button data-toggle="modal" data-target="#firstfile" type="button" class="btn btn-primary waves-effect waves-light "><i class=" mdi mdi-plus-circle"></i></button>
<button type="button" class=" reload btn btn-primary waves-effect waves-light "><i class=" mdi mdi-reload"></i></button>
<a href="javascript:void(0);" class=" right-bar-toggle right-menu-item btn btn-primary waves-effect waves-light "><i class=" mdi mdi-settings"></i></a>
</div>

</div>

<div class="table-responsive" style="overflow: auto;
height: 55%;">
  <table id="mainTable" class="table table-striped m-b-0">
<thead>
            <div class="form-group">
<input type="text" class="form-control search" required   placeholder="Search files"/>
</div>
<tr>
<th>File</th><th>Name</th><th>download</th><th>Size</th><th>Delete</th>
</tr>
</thead>
<tbody class="list">
@foreach($files as $file)
@if($file->filetype == 'png')
<tr>
        <td class="text-left f-ent">
          <a href="#" class="afile{{$file->id}}" >
          <img class="file-icon" src="user_uploads/{{$file->filename}} " alt="" />
          </a>
          </td>
      <td class="f-name" >
            <a href="#" class="afile{{$file->id}}">
              <p class="f-name">{{$file->filename}}</p>
            </a>
            </td>
          <td class="f-type"><a class="btn btn-primary waves-effect waves-light  btn-sm" href="/user_uploads/{{$file->filename}}" download><i class=" mdi mdi-download"></i></a></td>
          <td class="f-size">
            <input class="raw-size{{$file->id}}" type="text" value="{{$file->filesize}}" style="display:none;">
            <p class="file-size{{$file->id}}"></p>
            </td>
            <td class="td-actions f-delete">
              <a class="btn waves-effect waves-light btn-danger btn-sm deleteFile{{$file->id}}" href="#"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
    @elseif($file->filetype == 'jpg')
    <tr>
        <td class="text-left f-ent">
                 <a href="#" class="afile{{$file->id}}">
          <img class="file-icon" src="user_uploads/{{$file->filename}}" alt="" />
          </a>
        </td>
   <td class="f-name" >
            <a href="#" class="afile{{$file->id}}">
              <p class="f-name">{{$file->filename}}</p>
            </a>
            </td>
          <td class="f-type"><a class="btn btn-primary waves-effect waves-light  btn-sm" href="/user_uploads/{{$file->filename}}" download><i class=" mdi mdi-download"></i></a></td>
          <td class="f-size">
            <input class="raw-size{{$file->id}}" type="text" value="{{$file->filesize}}" style="display:none;">
            <p class="file-size{{$file->id}}"></p>
            </td>
            <td class="td-actions f-delete">
              <a class="btn waves-effect waves-light btn-danger btn-sm deleteFile{{$file->id}}" href="#"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
    @elseif($file->filetype == 'pdf')
    <tr>
        <td class="text-left f-ent">
                      <a href="#" class="afile{{$file->id}}">
          <img class="file-icon" src="user-tools/file-type/pdf.png" alt="" />
        </a>
        </td>
        </td>
   <td class="f-name" >
            <a href="#" class="afile{{$file->id}}">
              <p class="f-name">{{$file->filename}}</p>
            </a>
            </td>
          <td class="f-type"><a class="btn btn-primary waves-effect waves-light  btn-sm" href="/user_uploads/{{$file->filename}}" download><i class=" mdi mdi-download"></i></a></td>
          <td class="f-size">
            <input class="raw-size{{$file->id}}" type="text" value="{{$file->filesize}}" style="display:none;">
            <p class="file-size{{$file->id}}"></p>
            </td>
            <td class="td-actions f-delete">
              <a class="btn waves-effect waves-light btn-danger btn-sm deleteFile{{$file->id}}" href="#"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
    @elseif($file->filetype == 'doc')
    <tr>
        <td class="text-left f-ent">
                 <a href="#" class="afile{{$file->id}}">
          <img class="file-icon" src="user-tools/file-type/doc.png" alt="" />
        </a>
      </td>
         <td class="f-name" >
            <a href="#" class="afile{{$file->id}}">
              <p class="f-name">{{$file->filename}}</p>
            </a>
            </td>
          <td class="f-type"><a class="btn btn-primary waves-effect waves-light  btn-sm" href="/user_uploads/{{$file->filename}}"><i class=" mdi mdi-download"></i></a></td>
          <td class="f-size">
            <input class="raw-size{{$file->id}}" type="text" value="{{$file->filesize}}" style="display:none;">
            <p class="file-size{{$file->id}}"></p>
            </td>
            <td class="td-actions f-delete">
              <a class="btn waves-effect waves-light btn-danger btn-sm deleteFile{{$file->id}}" href="#"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
    @elseif($file->filetype == 'docx')
    <tr>
        <td class="text-left f-ent">
                 <a href="#" class="afile{{$file->id}}">
          <img class="file-icon" src="user-tools/file-type/docx.png" alt="" /></a>
        </td>
          <td class="f-name" >
            <a href="#" class="afile{{$file->id}}">
              <p class="f-name">{{$file->filename}}</p>
            </a>
            </td>
          <td class="f-type"><a class="btn btn-primary waves-effect waves-light  btn-sm" href="/user_uploads/{{$file->filename}}"><i class=" mdi mdi-download"></i></a></td>
          <td class="f-size">
            <input class="raw-size{{$file->id}}" type="text" value="{{$file->filesize}}" style="display:none;">
            <p class="file-size{{$file->id}}"></p>
            </td>
            <td class="td-actions f-delete">
              <a class="btn waves-effect waves-light btn-danger btn-sm deleteFile{{$file->id}}" href="#"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
    @elseif($file->filetype == 'mp3')
    <tr>
        <td class="text-left f-ent">
          <a href="#" class="afile{{$file->id}}">
          <img class="file-icon" src="user-tools/file-type/mp3.png" alt="" /></a>
        </td>
         <td class="f-name" >
            <a href="#" class="afile{{$file->id}}">
              <p class="f-name">{{$file->filename}}</p>
            </a>
            </td>
          <td class="f-type"><a class="btn btn-primary waves-effect waves-light  btn-sm" href="/user_uploads/{{$file->filename}}"><i class=" mdi mdi-download"></i></a></td>
          <td class="f-size">
            <input class="raw-size{{$file->id}}" type="text" value="{{$file->filesize}}" style="display:none;">
            <p class="file-size{{$file->id}}"></p>
            </td>
            <td class="td-actions f-delete">
              <a class="btn waves-effect waves-light btn-danger btn-sm deleteFile{{$file->id}}" href="#"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
    @elseif($file->filetype == 'zip')
    <tr>
        <td class="text-left f-ent">
                 <a href="#" class="afile{{$file->id}}">
          <img class="file-icon" src="user-tools/file-type/zip.png" alt="" /></a></td>
       <td class="f-name" >
            <a href="#" class="afile{{$file->id}}">
              <p class="f-name">{{$file->filename}}</p>
            </a>
            </td>
          <td class="f-type"><a class="btn btn-primary waves-effect waves-light  btn-sm" href="/user_uploads/{{$file->filename}}"><i class=" mdi mdi-download"></i></a></td>
          <td class="f-size">
            <input class="raw-size{{$file->id}}" type="text" value="{{$file->filesize}}" style="display:none;">
            <p class="file-size{{$file->id}}"></p>
            </td>
            <td class="td-actions f-delete">
              <a class="btn waves-effect waves-light btn-danger btn-sm deleteFile{{$file->id}}" href="#"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
    @else
    <tr>
        <td class="text-left f-ent">
                 <a href="#" class="afile{{$file->id}}">
          <img class="file-icon" src="user-tools/file-type/file.png" alt="" /></a></td>
          <td class="f-name" >
            <a href="#" class="afile{{$file->id}}">
              <p class="f-name">{{$file->filename}}</p>
            </a>
            </td>
          <td class="f-type"><i class=" mdi mdi-download"></i></td>
          <td class="f-size">
            <input class="raw-size{{$file->id}}" type="text" value="{{$file->filesize}}" style="display:none;">
            <p class="file-size{{$file->id}}"></p>
            </td>
            <td class="td-actions f-delete">
              <a class="btn waves-effect waves-light  btn-primary btn-sm deleteFile{{$file->id}}" href="#"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
@endif

      <script>
      function formatBytes(bytes,decimals) {
       if(bytes == 0) return '0 Byte';
       var k = 1000;
       var dm = decimals + 1 || 3;
       var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
       var i = Math.floor(Math.log(bytes) / Math.log(k));
       return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
      }

  $(document).on(function(){

      var val = $(this).val();
      var result = formatBytes(val);
      $('.file-size{{$file->id}}').html(result);
      });

      $('.file-size{{$file->id}}').html(formatBytes($('.raw-size{{$file->id}}').val()));
      </script>

      <script type="text/javascript">
      // ajax DELETE
      $(function() {

        $(".deleteFile{{$file->id}}").click(function(e) {

          swal({   title: "Are you sure?",
            text: "You will not be able to recover this file!",
             type: "warning",
             showCancelButton: true,
             confirmButtonColor: "#DD6B55",
             confirmButtonText: "Yes, delete it!",
             closeOnConfirm: false },
           function(){
                                toastr.info("Deleting File. this should only take a second!");

            // if user hits confirm delete
      var  durl = "http://localhost:8000/deletefile{{$file->id}}";
        $.ajax({
        type: 'GET',
        url: durl,
        })
        .done(function(response) {
          // show the swal deleted animations

             swal("Deleted!", "Your imaginary file has been deleted.", "success");
          $(".ajax_point").load('/cloudtest');
          toastr.info("Refreshing Files. this should only take a second!");


         });

        });



              });

        // view a file
               $(".afile{{$file->id}}").click(function(){
   toastr.info("Loading preview. this Might take a while!");

                     $(".doc_viwer").load('http://localhost:8000/afile{{$file->id}}');
           toastr.success("Load Completed.");




              });

              });
      </script>
      @endforeach

                      </tbody>

                    </table>
                              </div>
                            </div>
                          </div>

<!--
                          <div class="col-sm-7">
                            <div class="card-box">

                             <div class="doc_viwer">
                            <div class="doc_viwer_intro text-center">

<img class="no-p" src="/user-tools/file-type/doc.png">

<img class="no-p" src="/user-tools/file-type/pdf.png">
<img class="no-p" src="/user-tools/file-type/jpg.png">
<img class="animated pulse infinite no-p" src="/user-tools/file-type/ppt.png">

<img class="no-p" src="/user-tools/file-type/mp3.png">

<img class="no-p" src="/user-tools/file-type/mp4.png">
<h3 class="text-success text-center">Preview Your files with ease</h3>
<p>Click any file for preview</p>
                            </div>
                             </div>
                             </div>
                          </div>
                        </div> -->

@endif
<script type="text/javascript">
$(function() {
  function ajaxfun(welcload, btn, url, loadcom) {
    $(btn).click(function(){
toastr.success("Refreshing Files. this should only take a second!");

    console.log('loading');
        $(".ajax_point").load(url);
        $.ajax({
            success:function(re){
         toastr.success("Reload successful.");


        }
      });
    });
    }
        //NOTE:// NEW note function
ajaxfun( "Refreshing Cloud", ".reload", "/cloudtest", "Reload Completed");

  });
</script>
<script>
var options = {
  valueNames: [ 'f-name',]
};
var cloudList = new List('skisearch', options);
//
</script>
