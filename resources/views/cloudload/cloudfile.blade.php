<div class="btn-toolbar m-t-20" role="toolbar">
    <div class="btn-group">
        <button type="button" class="btn btn-success waves-effect waves-light "><i class=" mdi mdi-information"></i></button>
        <button type="button" class="btn btn-success waves-effect waves-light deleteFile{{$file->id}}"><i class=" mdi mdi-delete"></i></button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-success dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">
        <i class=" mdi mdi-share-variant"></i>

        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="javascript:void(0);">Facebook</a></li>
            <li><a href="javascript:void(0);">Twitter</a></li>
            <li><a href="javascript:void(0);">Linkedin</a></li>
            <li class="divider"></li>
            <li><a href="javascript:void(0);">Email</a></li>
        </ul>
    </div>

        <a target="_blank" href="/user_uploads/{{$file->filename}}" class="btn btn-success waves-effect waves-light  pull-right" >
        <i class="mdi mdi-open-in-new"></i> 
       </a>

</div>
<div class="file-view">


@if($file->filetype == 'png')
<img style="width:100%" src="/user_uploads/{{$file->filename}}">
    @elseif($file->filetype == 'jpg')
<img style="width:100%" src="/user_uploads/{{$file->filename}}">
    @elseif($file->filetype == 'gif')
<img style="width:100%" src="/user_uploads/{{$file->filename}}">
    @elseif($file->filetype == 'pdf')
    <!-- loading the pdf with google doc viwer api -->
<iframe src="https://docs.google.com/viewer?embedded=true&url=http%3A%2F%2Fhomepages.inf.ed.ac.uk%2Fneilb%2FTestWordDoc.doc" frameborder="no" style="width:100%;height:700px"></iframe>
    @elseif($file->filetype == 'doc')
    <!-- loading the doc with google doc viwer api -->
<iframe src="https://docs.google.com/viewer?embedded=true&url=http%3A%2F%2Fhomepages.inf.ed.ac.uk%2Fneilb%2FTestWordDoc.doc" frameborder="no" style="width:100%;height:700px"></iframe>
      @elseif($file->filetype == 'docx')
    <!-- loading the pdf with google doc viwer api -->
<iframe src="https://docs.google.com/viewer?embedded=true&url=http%3A%2F%2Fhomepages.inf.ed.ac.uk%2Fneilb%2FTestWordDoc.doc" frameborder="no" style="width:100%;height:700px"></iframe>
     @elseif($file->filetype == 'mp3')
     <script src="https://cdn.plyr.io/2.0.7/plyr.js"></script>
     <link rel="stylesheet" href="https://cdn.plyr.io/2.0.7/plyr.css">
        <!-- loading the mp3 file with plyr player -->
        <audio controls>
  <source src="/path/to/audio.mp3" type="audio/mp3">
  <source src="/path/to/audio.ogg" type="audio/ogg">
</audio>
     @else
 @endif
 </div>