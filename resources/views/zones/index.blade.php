@extends('templates.zone.default')
@section('content')
<style media="screen">
.btn-round {
  border-radius: 23px;
}
img.add_image {
    width: 24px;
}
hr.title-div {
    margin-bottom: 9px;
}
</style>
<!-- if on boarding load the below script and style -->

<script type="text/javascript">
$(document).ready(function(){

  $('#myModal').modal('show')

$('#myPillbox').pillbox();

$('#myPlacard').placard();

});
</script>


<!-- REVIEW:: ADDING THE body -->

  <div class="container-fluid zone-body-pad">
    <div class="row">

      <!-- REVIEW:: SIDEBAR -->
      <div class="col-md-2 sidebar-left">
        <ul class="list-group">
          <li class="list-group-item">
            <a  class="btn btn-default btn-lg active zone-active-btn">
            <i class="material-icons zone-sidebar-icons">view_compact</i>	Question's Feed
          </a>
        </li>
          <li class="list-group-item">
            <a type="button" class="btn btn-default btn-lg">
            <i class="material-icons zone-sidebar-icons">message</i>	Messages
          </a>
        </li>
          <li class="list-group-item">
            <a type="button" class="btn btn-default btn-lg">
          <i class="material-icons zone-sidebar-icons">event_note</i>	My Zones
          </a>
        </li>
        <hr>
        <p class="sidebar-apps">
          Apps
        </p>
          <li class="list-group-item">
            <a type="button" class="btn btn-default btn-lg">
          <i class="material-icons zone-sidebar-icons">games</i>		Games
          </a>
        </li>
          <li class="list-group-item">
            <a type="button" class="btn btn-default btn-lg">
          <i class="material-icons zone-sidebar-icons">settings_backup_restore</i>		On This Day
          </a>
        </li>
          <li class="list-group-item">
            <a type="button" class="btn btn-default btn-lg">
          <i class="material-icons zone-sidebar-icons">perm_media</i>		Photos
          </a>
        </li>
          <li class="list-group-item">
            <a type="button" class="btn btn-default btn-lg">
            <i class="material-icons zone-sidebar-icons">turned_in_not</i>	Saved
          </a>
        </li>
        <hr>
        <p class="sidebar-apps">
          Groups
        </p>
          <li class="list-group-item">
            <a type="button" class="btn btn-default btn-lg">
          <i class="fa fa-pied-piper zone-sidebar-icons"
          style="font-size: 20px;"></i>		pied piper
          </a>
        </li>
          <li class="list-group-item">
            <a type="button" class="btn btn-default btn-lg">
          <i class="fa fa-slack zone-sidebar-icons" style="
              font-size: 20px;
          "></i>	Slack Api Group
          </a>
        </li>
          <li class="list-group-item">
            <a type="button" class="btn btn-default btn-lg">
          <i class="material-icons zone-sidebar-icons">add_circle_outline</i> Create Group
          </a>
        </li>
          <li class="list-group-item">
            <a type="button" class="btn btn-default btn-lg">
            <i class="material-icons zone-sidebar-icons">search</i> Find Groups
          </a>
        </li>
        <hr>
        </ul>
      </div>
      <!-- END:: SIDEBAR -->

      <!-- REVIEW:: FEED -->

      <div class="col-md-6 col-md-push-2 col-pad-fix">
        <div class="container-fluid">
          <div class="row">

                <!-- on boarding  -->

                                <div class="col-md-12">
                                  <div class="jumbotron zone-jumbotron" style="    box-shadow: 0 0px 0px 0 rgba(0,0,0,0),0 0px 0px 0;">
<h3 class="text-muted text-center"> Lets get you started on Ski Zone</h3>
<div class="pillbox" data-initialize="pillbox" id="myPillbox">
  <ul class="clearfix pill-group">
    <li class="btn btn-info pill btn-raised btn-round " data-value="foo">
      <span>Item Title</span>
      <span class="glyphicon glyphicon-close">
        <span class="sr-only">Remove</span>
      </span>
    </li>
    ....
    <li class="pillbox-input-wrap btn-group">
      <input type="text" class="form-control dropdown-toggle pillbox-add-item" placeholder="add item">
      <button type="button" class="dropdown-toggle sr-only">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <ul class="suggest dropdown-menu" role="menu" data-toggle="dropdown" data-flip="auto">
        <li class="pillbox fuelux">apple</li>
      </ul>
    </li>
  </ul>
</div>
                                  </div>
                                </div>

                <!-- the question form starts here  -->



                <div class="col-md-12">
                  <div class="jumbotron zone-jumbotron" style="    box-shadow: 0 0px 0px 0 rgba(0,0,0,0),0 0px 0px 0;">
                           @if ($errors->has())
              <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                      {{ $error }}<br>
                  @endforeach
              </div>
              @endif
                      <a class="zone-feed-pic" href="#user-profile"><img src="user-files/img/user1.jpg" class="zone-user-pic" alt="" />Andrew Ben</a>
                      <p class="text-muted text-sm">
                        October 1, <span class="text-muted">Chemistry</span>
                      </p>
                      <form class="" action="/post_ques" method="post">
                        <div class="form-group label-floating">
                          <input type="hidden" name="type" value="text">
                          <input type="hidden" name="cats" value="maths">
                                    <label class="control-label" for="addon2">Ask a Question</label>
                                    <div class="input-group">
                                      <input type="text" id="addon2" class="form-control" name="ques_head" placeholder="Ask A question">
                                      <textarea name="ques_body" class="form-control" placeholder="Describe your Question">

                                      </textarea>
          <input type="hidden" name="_token" value="{{ Session::token() }}">

                                      <span class="input-group-btn">
                                        <button type="submit" class="btn btn-fab btn-info btn-fab-mini">
                                          <i class="material-icons zone-icons">send</i>
                                        </button>
                                      </span>
                                    </div>
                                  </div>
                                    <button type="button" class="btn btn-info btn-raised btn-round btn-sm">   <img class=" add_image" src="{{ URL::asset('/src/vendor/new/images/icons/add_image.svg')}}" title="stack_of_photos.svg"/> image/video</button>
                                    <button type="button" class="btn btn-info btn-raised btn-round btn-sm">code</button>
                                    <button type="button" class="btn btn-info btn-raised btn-round btn-sm">Formula</button>
                                    <button type="button" class="btn btn-info btn-raised btn-round btn-sm">Ski Note</button>




                      </form>
                    </div>
                  </div>

                <!-- the questions form ends here -->


            <!-- NOTE:: USE THIS FOR EACH NEW FEEDS
            ::::FOR SERVER SIDE CODE USE LOOP FROM THIS POINT::::  -->
            <!-- feed post starts here -->
            <div id="callposts-ajax">
              <script type="text/javascript">
            $(document).ready(function(){

                            $("#callposts-ajax").load("{{route('posts.all')}}");
                              });
            </script>
          </div>
            <!-- feed post ends here -->
          </div>
        </div>
      </div>
      <!-- END:: FEED -->

      <!-- REVIEW:: RIGHT SECTION ::EVENT AND ADS:: BEGIN-->

    <div class="col-md-3 col-md-push-2 col-pad-fix">
      <div class="container-fluid size-side-fix">
        <div class="jumbotron zone-jumbotron" style="box-shadow: 0 0px 0px 0 rgba(0,0,0,0),0 0px 0px 0;">
                <span class="text-info"><i class="material-icons" style="font-size: 15px;">event</i> 12 pending Invites</span>
              <hr>
              <ul class="list-group">
                <li class="list-group-item"><p><i class="material-icons">event_available</i>
                  <span class="text-info">hello world::</span><span></span>
                </p></li>
                <li class="list-group-item">hello world</li>
                <li class="list-group-item">hello world</li>
                <li class="list-group-item">hello world</li>
                <li class="list-group-item">hello world</li>
                <li class="list-group-item">hello world</li>
                <li class="list-group-item">hello world</li>
              </ul>
              <hr>
              <span class="pull-left text-muted">Sponsored</span>
              <a href="#" class="pull-right text-muted zone-hashtag">Create Ad</a>
              <div class="zone-ad-img">
                <img src="user-files/img/watch_dogs.jpg" alt="ad_img" class="ads-img" />
                <a href="#" class="zone-hashtag">
                  Get Watch Dogs for X-Box
                </a>
                <p style="    font-size: x-small;">
                  Get the amazing game on Amazon for a 30% discount this Fall, Hurry while stocks last
                </p>
              </div>
              <div class="zone-ad-img">
                <img src="user-files/img/star_wars.jpg" alt="ad_img" class="ads-img" />
                <a href="#" class="zone-hashtag">
                  May the Force be With You
                </a>
                <p style="    font-size: x-small;">
                open the door to the force and maybe take a trip to the galaxy this holiday.
                </p>
              </div>
        </div>
      </div>
    </div>
      <!-- END:: RIGHT SECTION -->




@stop
