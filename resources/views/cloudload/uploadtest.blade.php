@if (!$files->count())

<div class="container">
<div class="col-md-12">

<div class="col-md-6 col-md-push-3">
<div class="card card-raised">
  <div class="col-md-12 m-p-empty">
<h3>Welcome to your Cloud pack</h3>
<p>
Store ebooks, document files, power point presentations, excell spread sheet</p>
<button type="button" data-toggle="modal" data-target="#firstfile"
 class="btn btn-info btn-raised btn-round">
Upload file <i class="material-icons">cloud_upload</i>
</button>

</div>

  </div>
</div>
</div>
</div>

@else
<div class="col-md-10 animated fadeIn col-md-push-1">
    <div class="card card-raised">
      <div class="col-md-6">
    <button data-toggle="modal" data-target="#firstfile" class="btn btn-danger btn-raised btn-round">
    New
    </button>
    <button type="button" class=" reload btn btn-default btn-round"
    data-toggle="tooltip" data-placement="bottom" title="Reload my pack">
    <i class="material-icons m-p-icon">autorenew</i>
    </button>
    <a  href="#/cloudsetup/" class="btn btn-default btn-round"
    data-toggle="tooltip" data-placement="bottom" title="Settings"
    >
    <i class="material-icons m-p-icon">settings</i>
  </a>
    </div>
      <table class="table ">
  <tbody class="list">
    <tr class="t-head">
        <td class="text-left f-ent">
          <p>
            <strong>FILE</strong>
          </p>
          </td>
          <td>
            <p>
              <strong>
              FILE NAME</strong>
            </p></td>
          <td class="f-type"><p>
            <strong>
            PREVIEW</strong>
          </p></td>
          <td class="f-size">
            <p>
              <strong>
              SIZE</strong>
            </p>
            </td>
            <td class="td-actions f-delete">
              <p>
                <strong>
                DELETE</strong>
              </p>
        </td>
    </tr>
    @foreach($files as $file)
    @if($file->filetype == 'png')
    <tr>
        <td class="text-left f-ent">
          <img class="file-icon" src="user_uploads/{{$file->filename}}" alt="" />
          </td>
          <td class="f-name" ><h4 class="f-name">{{$file->filename}}</h4></td>
          <td class="f-type"><a class="btn btn-raised btn-info btn-sm" href="/user_uploads/{{$file->filename}}">View</a></td>
          <td class="f-size">
            <input class="raw-size{{$file->id}}" type="text" value="{{$file->filesize}}" style="display:none;">
            <p class="file-size{{$file->id}}"></p>
            </td>
            <td class="td-actions f-delete">
              <a class="btn btn-raised btn-danger btn-sm deleteFile{{$file->id}}" href="#"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
    @elseif($file->filetype == 'jpg')
    <tr>
        <td class="text-left f-ent">
          <img class="file-icon" src="user_uploads/{{$file->filename}}" alt="" />
          <td class="f-name" ><h4 class="f-name">{{$file->filename}}</h4></td>
          <td class="f-type"><a class="btn btn-raised btn-info btn-sm" href="/user_uploads/{{$file->filename}}">View</a></td>
          <td class="f-size">
            <input class="raw-size{{$file->id}}" type="text" value="{{$file->filesize}}" style="display:none;">
            <p class="file-size{{$file->id}}"></p>
            </td>
            <td class="td-actions f-delete">
              <a class="btn btn-raised btn-danger btn-sm deleteFile{{$file->id}}" href="#"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
    @elseif($file->filetype == 'pdf')
    <tr>
        <td class="text-left f-ent">
          <img class="file-icon" src="user-tools/file-type/pdf.png" alt="" />
          <td class="f-name" ><h4 class="f-name">{{$file->filename}}</h4></td>
          <td class="f-type"><a class="btn btn-raised btn-info btn-sm" href="/user_uploads/{{$file->filename}}">View</a></td>
          <td class="f-size">
            <input class="raw-size{{$file->id}}" type="text" value="{{$file->filesize}}" style="display:none;">
            <p class="file-size{{$file->id}}"></p>
            </td>
            <td class="td-actions f-delete">
              <a class="btn btn-raised btn-danger btn-sm deleteFile{{$file->id}}" href="#"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
    @elseif($file->filetype == 'doc')
    <tr>
        <td class="text-left f-ent">
          <img class="file-icon" src="user-tools/file-type/doc.png" alt="" />
          <td class="f-name" ><h4 class="f-name">{{$file->filename}}</h4></td>
          <td class="f-type"><a class="btn btn-raised btn-info btn-sm" href="/user_uploads/{{$file->filename}}">View</a></td>
          <td class="f-size">
            <input class="raw-size{{$file->id}}" type="text" value="{{$file->filesize}}" style="display:none;">
            <p class="file-size{{$file->id}}"></p>
            </td>
            <td class="td-actions f-delete">
              <a class="btn btn-raised btn-danger btn-sm deleteFile{{$file->id}}" href="#"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
    @elseif($file->filetype == 'docx')
    <tr>
        <td class="text-left f-ent">
          <img class="file-icon" src="user-tools/file-type/docx.png" alt="" />
          <td class="f-name" ><h4 class="f-name">{{$file->filename}}</h4></td>
          <td class="f-type"><a class="btn btn-raised btn-info btn-sm" href="/user_uploads/{{$file->filename}}">View</a></td>
          <td class="f-size">
            <input class="raw-size{{$file->id}}" type="text" value="{{$file->filesize}}" style="display:none;">
            <p class="file-size{{$file->id}}"></p>
            </td>
            <td class="td-actions f-delete">
              <a class="btn btn-raised btn-danger btn-sm deleteFile{{$file->id}}" href="#"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
    @elseif($file->filetype == 'mp3')
    <tr>
        <td class="text-left f-ent">
          <img class="file-icon" src="user-tools/file-type/mp3.png" alt="" />
          <td class="f-name" ><h4 class="f-name">{{$file->filename}}</h4></td>
          <td class="f-type"><a class="btn btn-raised btn-info btn-sm" href="/user_uploads/{{$file->filename}}">View</a></td>
          <td class="f-size">
            <input class="raw-size{{$file->id}}" type="text" value="{{$file->filesize}}" style="display:none;">
            <p class="file-size{{$file->id}}"></p>
            </td>
            <td class="td-actions f-delete">
              <a class="btn btn-raised btn-danger btn-sm deleteFile{{$file->id}}" href="#"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
    @elseif($file->filetype == 'zip')
    <tr>
        <td class="text-left f-ent">
          <img class="file-icon" src="user-tools/file-type/zip.png" alt="" />
        <td class="f-name" ><h4 class="f-name">{{$file->filename}}</h4></td>
          <td class="f-type"><a class="btn btn-raised btn-info btn-sm" href="/user_uploads/{{$file->filename}}">View</a></td>
          <td class="f-size">
            <input class="raw-size{{$file->id}}" type="text" value="{{$file->filesize}}" style="display:none;">
            <p class="file-size{{$file->id}}"></p>
            </td>
            <td class="td-actions f-delete">
              <a class="btn btn-raised btn-danger btn-sm deleteFile{{$file->id}}" href="#"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
    @else
    <tr>
        <td class="text-left f-ent">
          <img class="file-icon" src="user-tools/file-type/file.png" alt="" />
          <td class="f-name" ><h4 class="f-name">{{$file->filename}}</h4></td>
          <td class="f-type">No Preview</td>
          <td class="f-size">
            <input class="raw-size{{$file->id}}" type="text" value="{{$file->filesize}}" style="display:none;">
            <p class="file-size{{$file->id}}"></p>
            </td>
            <td class="td-actions f-delete">
              <a class="btn btn-raised btn-danger btn-sm deleteFile{{$file->id}}" href="#"><i class="fa fa-trash-o"></i></a>
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
          $(".ski_loader").css("display", "block");
          SnackBar.show({text:'deleting {{$file->filename}}',
            pos: 'top-center',
           duration: '9000',
          });
          console.log('loading');
        var  durl = "http://localhost:8000/deletefile{{$file->id}}";
        $.ajax({
        type: 'GET',
        url: durl,
        })
        .done(function(response) {
          $(".ajax_point").load('/cloudtest');
          SnackBar.show({text:'{{$file->filename}} deleted',
            pos: 'top-center',
           duration: '9000',});
          console.log('file deleted');
          $(".ski_loader").css("display", "none");
        })
        .fail(function(data) {
          SnackBar.show({
          text:"Opps there seems to be an error",
          pos: 'top-center',
          backgroundColor: '#e53935'
          });
          $(".ski_loader").css("display", "none");

            });
        });




              });
      </script>
      @endforeach


</tbody>
</table>

    </div>
</div>

@endif
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
