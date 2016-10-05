@extends('templates.default')
@section('content')
<script src="{{ URL::asset('/src/vendor/dropzone/dropzone.js') }}" ></script>
<link rel="stylesheet" href="{{ URL::asset('/src/vendor/dropzone/dropzone.css') }}" media="screen" title="no title" charset="utf-8">


<style type="text/css">

.dropzone {
    min-height: 150px;
    border: 2px solid rgba(0, 0, 0, 0.3);
    background: white;
    padding: 20px 20px;
    border-style: dashed;
}
</style>

 <div class="row">
              <div class="col-xs-12">
                <div class="page-title-box">
                                    <h4 class="page-title">Cloudpack</h4>
                                
                                    <div class="clearfix"></div>
                                </div>
              </div>
            </div>


<div class="row">
<div class="col-md-9 col-md-push-1">
<div class="card-box">
<h3 class="cloud-h3">Welcome to your Cloud Uploader</h3>
<h5>
Store ebooks, document files, power point presentations, excell spread sheet</h5>


       <form action="handleupload" class="dropzone" id="my-awesome-dropzone">
                                <input name="file" type="file" style="display:none;" />
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                              </form>
<a href="{{route('cloudpack')}}"
 class="btn btn-primary btn-lg text-center waves-effect w-md btn-rounded">
Show files <i class=" mdi mdi-cloud-upload"></i>
</a>
  </div>
</div>
</div>

@stop