@extends('templates.default')
@section('content')


<div class="col-lg-6">
    <div class="portlet">
        <div class="portlet-heading bg-primary">
            <h3 class="portlet-title">
                Ski Facts
            </h3>
            <div class="portlet-widgets">
                <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                <span class="divider"></span>
                <a data-toggle="collapse" data-parent="#accordion1" href="#bg-purple"><i class="ion-minus-round"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="bg-primary" class="panel-collapse collapse in">
            <div class="portlet-body">
              @if ($errors->has())
 <div class="alert alert-danger">
     @foreach ($errors->all() as $error)
         {{ $error }}<br>
     @endforeach
 </div>
 @endif

<form class="" action="/post_facts" method="post">
<div class="form-group">
  <label for="facts"></label>
  <input type="text" name="facts" class="form-control" id="facts" placeholder="Enter Facts Here">
  <input type="hidden" name="_token" value="{{ Session::token() }}">
  <button type="submit" class="btn btn-primary btn-lg">
Add Facts
  </button>
</div>
</form>
<hr>
<ul class="list-group">
  @foreach ($facts as $facts)

  <li class="list-group-item">{{$facts->facts}}</li>
  @endforeach
</ul>



            </div>
        </div>
    </div>
</div>

<div class="col-lg-6">
    <div class="portlet">
        <div class="portlet-heading bg-purple">
            <h3 class="portlet-title">
                Purple Heading
            </h3>
            <div class="portlet-widgets">
                <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                <span class="divider"></span>
                <a data-toggle="collapse" data-parent="#accordion1" href="#bg-purple"><i class="ion-minus-round"></i></a>
                <span class="divider"></span>
                <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="bg-purple" class="panel-collapse collapse in">
            <div class="portlet-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.
            </div>
        </div>
    </div>
</div>
@stop
