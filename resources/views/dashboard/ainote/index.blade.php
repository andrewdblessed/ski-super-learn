@extends('templates.default')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('src/ski-vendor/ski-notebook/css/ainote.css') }}" charset="utf-8">
<script src="{{ URL::asset('src/ski-vendor/ski-notebook/js/script.js') }}" charset="utf-8"></script>
<script src="{{ URL::asset('/src/vendor/trix/trix.js') }}" ></script>
<link rel="stylesheet" href="/src/vendor/trix/trix.css" charset="utf-8">
  <script src="http://code.jboxcdn.com/0.3.2/jBox.min.js"></script>
<link href="http://code.jboxcdn.com/0.3.2/jBox.css" rel="stylesheet">
<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
<!-- NOTE: LOADING AI CSS AND JS CONFIGURATION -->
<link href="{{ URL::asset('src/ski-vendor/ski-notebook/AI/ai.css') }}" rel="stylesheet">
<script src="{{ URL::asset('src/ski-vendor/ski-notebook/AI/ai_fun.js') }}" ></script>
<script src="{{ URL::asset('src/ski-vendor/ski-notebook/AI/config.js') }}" ></script>
<div class="container-fluid ">
  <div class="row">

<div class="col-md-12 top-nav-bar">

    <a href="#"  class="btn btn-default btn-md all-notes navbar-brand "
    style="    height: 100%;
    margin-right: 0;
    padding: 16px 13px 0 13px;
    color: #2962ff;
    font-size: xx-large;"

    >Ski Learn</a>
<div class="pull-right">
  <ul class="nav navbar-nav navbar-right">
  		        <li><a class="ain-nav" href="#user-profile"><i class=" fb-icons material-icons">account_circle</i>Andrew Ben</a></li>
  					  <li class="dropdown">
  		          <a class="ain-nav" href="bootstrap-elements.html" data-target="#" data-toggle="dropdown">
  		            <b class="caret"></b></a>
  		          <ul class="dropdown-menu">
  		            <li><a href="javascript:void(0)">Action</a></li>
  		            <li><a href="javascript:void(0)">Another action</a></li>
  		            <li><a href="javascript:void(0)">Something else here</a></li>
  		            <li class="divider"></li>
  		            <li><a href="javascript:void(0)">Separated link</a></li>
  		          </ul>
  		        </li>
  		      </ul>
</div>

</div>

  <div class="col-md-12" style="padding:0;overflow-x: hidden;">
    <div class="ainote-pad">
      <!-- REVIEW:: SIDEBAR -->
      <div class="col-md-2 sidebar-left">

        <img src="svg/ainote-3.svg" class="ainote-logo" alt="" />
        <div class="text-center">
          <br>
          <br>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="material-icons">search</i></span>
          <input type="text" class="form-control text-info search" placeholder="Search ainote">
        </div>
        <div class="side1 ain-all">
          All Notes
        </div>
        <div class="side1 ain-nbs">
          Notebooks
        </div>
        <div class="side1 ai-srt">
          Adela
        </div>
        <hr>
        <div class="side1 ">
          Ainote Manager
        </div>
        <div class="side1 ">
        Ski Dashboard
        </div>
      </div>
      <!-- END:: SIDEBAR -->

    <div class="row close_ajax">
      <img src="user-tools/load-ani/ajax-loader.gif" class="notes_loader" alt="" />
      <div class="newnote_point">

      </div>
        <div class="ajax_point ">
          {{-- loading server-side ainotes--}}
      </div>


  </div>
    </div>
  </div>
</div>
</div>

<?php // XXX: ain notebook ajax ?>
<div class="ain-notebook animated fadeInLeft">
    <h3 class="text-lg text-info"><b>Notebooks</b></h3>

    <div class="input-group">
      <span class="input-group-addon"><i class="material-icons">search</i></span>
      <input type="text" class="form-control text-info search" placeholder="Search Notebook">
    </div>
    <hr>
    <img src="user-tools/load-ani/ajax-loader.gif" class="ains_loader" alt="" style="display:none;"/>
    <div class="list-group nb-main-list ain_point">

    </div>
    <button type="button" class="btn btn-danger ain-nbs-close btn-raised btn-lg">
    close Notebooks
        </button>
        <button type="button" class="btn btn-success ainb-new-win btn-raised btn-lg"  data-toggle="modal" data-target="#suggest_com">
        New
            </button>
</div>


<?php // XXX: adela ajax ?>
<div class="ai-ajax animated fadeInLeft">
<h3 class="text-lg text-info"><b>Ask Me Anything</b></h3>
<div class="pull-right">

</div>
<div class="input-group">
  <span class="input-group-addon"><button  id="rec" type="button" class="btn btn-default btn-sm btn-fab-sm btn-raised">
<i class="material-icons">mic</i>
  </button></span>
    @if ($bg_number == 1)
  <input id="input" type="text" class="form-control text-info " placeholder="Who is Barrack Obama">
  @elseif ($bg_number == 2)
  <input id="input" type="text" class="form-control text-info " placeholder="What is Hello in French">
  @elseif ($bg_number == 3)
  <input id="input" type="text" class="form-control text-info " placeholder="what is biology">
  @else ($bg_number == 1)
  <input id="input" type="text" class="form-control text-info " placeholder="What is Machine Learning">
  @endif
</div>
<hr>
<img src="user-tools/load-ani/ajax-loader.gif" class="ains_loader" alt="" style="display:none;"/>
<div class="list-group nb-main-list ai_point">

</div>

</div>

<ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
      <li class="mfb-component__wrap">
        <a href="#"  class="mfb-component__button--main make-note" data-mfb-label="New Ainote">
        <i class="mfb-component__main-icon--resting "><i class="fa fa-pencil"></i></i>
          <i class="mfb-component__main-icon--active "><i class="fa fa-plus"></i></i>
        </a>
        <ul class="mfb-component__list">
          <li>
            <a href="#" data-toggle="modal" data-target="#suggest_com"  id="btn-Ainote"  class="mfb-component__button--main" data-mfb-label="New Ainote">
              <i class="mfb-component__child-icon "><i class="fa fa-bookmark-o"></i></i>
            </a>
          </li>
          <li>
            <a href="#/nbmanager/"  data-mfb-label="Manage Ainotes"
             class="mfb-component__button--child">
              <i class="mfb-component__child-icon "><i class="fa fa-bookmark-o"></i></i>
            </a>
          </li>
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
    <!-- Modal Core -->
<div class="modal animated fadeInUp" id="suggest_com" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">New NoteBok</h4>
      </div>

      <div class="modal-body">
         <p class="text-center">
          Create a new Ainote
        </p>
               <form class="" action="{{route('Ainotes.post')}}" method="post" id="new_nb">
                <div class="text-center">
                      <br>
                      <div class="form-group">
                        <label for="modal-nb">Name of notebook</label>
                        <input type="text" class="form-control" id="modal-nb"  placeholder="Ainote Name" name="Ainote_title" />
                      </div>

                   <br>
                   <div class="form-group">
                     <label for="modal-des">Notebook Description</label>
                     <textarea  class="form-control" id="modal-des"  name="Ainote_des" placeholder="Describe your Ainote " rows="3"></textarea>
                     <p class="help-block">this field is required for all Notebooks.</p>
                   </div>
                </div>
                  <input type="hidden" name="Ainote_bg" value="{{$bg_number}}" >

      </div>
      <h5>Random Season cover is active <a href="/Ainotes/manager">click to modify</a></h5>
      <div class="modal-footer">
        <button type="submit" class="btn btn-info btn-round btn-raised save_nb">
          Add Ainote
        </button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">

        <button type="button" class="btn btn-default btn-raised" data-dismiss="modal">CLOSE</button>
      </form>
      </div>
    </div>
  </div>
</div>

@stop
