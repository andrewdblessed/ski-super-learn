
  @extends('templates.default')

  @section('content')
  <script src="http://code.jboxcdn.com/0.3.2/jBox.min.js"></script>
<link href="http://code.jboxcdn.com/0.3.2/jBox.css" rel="stylesheet">
<link rel="stylesheet" href="unslider/dist/css/unslider.css">
<link rel="stylesheet" href="unslider/dist/css/unslider-dots.css">
<script src="unslider/dist/js/unslider-min.js"></script>
<style type="text/css">
header.boarding-header {
    text-align: center;
}
img.boarding-head-img {
    width: 128px;
}
h3.hero-text {
    margin-top: 1px;
}
.jBox-Modal .jBox-content {
/*    padding: 12px 15px;
*/    background-color: #039be5;
    color: #fff;
}
</style>
<div class="ski--onboard" id="grabMe" >
  <div class="my-slider">
  <ul>
    <li>
    <header class="boarding-header">
<img src="icons/favicon.png" class="boarding-head-img">
<h4>Hello, {{Auth::user()-> getFirstNameorUsername() }}</h4>
<h1>Welcome to Ski Learn</h1>
</header>
<div class="boarding-body">
<h3>A Single Platform Created to Manage Your Study Life</h3>
</div>

</li>

  </ul>
</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
//the basic checkboxif
$('.my-slider').unslider({

arrows: {
  //  Unslider default behaviour
  prev: '<a class="unslider-arrow prev"><i class="material-icons">navigate_before</i></a>',
  next: '<a class="unslider-arrow next"><i class="material-icons">navigate_next</i></a>'
}

});

  var myModal = new jBox('Modal', {
    //title: 'Grab an element',
    content: $('#grabMe')

});

  if (document.readyState === 'complete'){
  console.log("load complete");
}else{
//   $(".loading").css("display", "block")
    //  $("body").css("display", "none")
      console.log("loading");
     myModal.open();

}

var interval = setInterval(function () {
  if(document.readyState === 'loading'){
      console.log("load loading");
  }
  if(document.readyState === 'complete'){
      clearInterval(interval);
      // myModal.close();
    console.log("loading complete");
   // $(".loading").css("display", "block")
  }
}, 100);

//the basic checkboxif
// if (document.readyState === 'complete'){
//  console.log("load complete");
// }else{
//  console.log("loading");
// }

});
    </script>
  <style media="screen">
      .form{
        visibility: hidden;
      }

    /*.more-pad{
      padding-top: 30px;
    }*/

  </style>
  @if (2+2==65)
    <div class="jumbotron">
      @if (!$exp_lev->count())
      <span class="mdl-badge mdl-badge--overlap" data-badge="0">Exp.</span>
      <span>{{Auth::user()-> getFirstNameorUsername() }}, Your exp is Currently "0"
      but this can change</span>
        <!--NOTE://user level up begins  -->
      <form class="form" action="{{route('exp.zero')}}" method="post">
      <input type="text" name="lev" value="00" >
            <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>
      <script type="text/javascript">
      $(function() {
                          var form = $('.form');
                              $(".ski_loader").css("display", "block");
                              var formData = $(form).serialize();
                          $.ajax({
                          type: 'POST',
                          url: $(form).attr('action'),
                          data: formData
                          })
                          .done(function(response ) {
                            console.log('zero level saved')
                          })
                          .fail(function(data) {
                            console.log('zero level not saved')
                          });
  })
      </script>
        @else
        @foreach ($exp_lev as $exp_lev)
      <span class="mdl-badge mdl-badge--overlap" data-badge="
      {{ $exp_lev->lev }}
      ">Exp.</span>
      <span>{{Auth::user()-> getNameOrUsername() }}, Your exp is Currently {{ $exp_lev->lev }}
        but this can change</span>@endforeach
        <!--NOTE://user level up ends  -->
        @endif
        </div>
@endif
<div class="container more-pad">
      <div class="row">
        <div class="col-md-3 m-item col-md-push-1">
          <a class="link_def" href="{{route('adela.index')}}">
          <img src="/svg/microphone.svg" alt="" class="m-i-svg" />
            <h6 class="m-i-title">Adela</h6>
            <!-- <div class="point"></div> -->
          <p class="m-i-text">
      Ask me anything
          </p>
        </a>
    <a class="btn btn-info btn-round btn-raised" href="{{route('adela.index')}}">
    Adela
    </a>
        </div>

        <div class="col-md-3 m-item col-md-push-1">
          <a class="link_def" href="{{route('dashboard.cloudpack')}}">
          <img src="/svg/folder-19.svg" alt="" class="m-i-svg" />
            <h6 class="m-i-title">Cloud</h6>
          <p class="m-i-text">
            Manage, open, store, share your files
          </p>
        </a>
    <a class="btn btn-info btn-round btn-raised" href="{{route('dashboard.cloudpack')}}" >
    Cloud
    </a>
</div>
        <div class="col-md-3 m-item col-md-push-1">
          <a class="link_def" href="{{route('dashboard.Ainote.index')}}">
          <img src="/svg/Ainote-3.svg" alt="" class="m-i-svg" />
            <h6 class="m-i-title">Ainotes</h6>
          <p class="m-i-text">
          Create amazing notes for your classes
          </p>
        </a>
    <a class="btn btn-info btn-round btn-raised" href="{{route('dashboard.Ainote.index')}}">
  Ainotes
    </a>
        </div>
      </div>
</div>
<!--XXX:PRO VERSION:XXX  -->
<div class="container more-pad">
      <div class="row">

           <!--  <div class="col-md-3 m-item col-md-push-1">
              <a class="link_def"  disabled href="#gopro">
                <img src="/svg/diploma.png" alt="" class="m-i-svg" />
                <h6 class="m-i-title">Build your Academic Profile</h6>
              <p class="m-i-text">
            Build and share your Academic progress to your friends
              </p>
            </a>
            <a href="{{route('academic')}}"  class="btn btn-info btn-raised btn-round">
              Academic Profile
            </a>
            </div> -->

            <div class="col-md-3 m-item col-md-push-1">
                 <a class="link_def" href="{{route('research')}}">
                 <img src="/svg/file-2.svg" alt="" class="m-i-svg" />
                   <h6 class="m-i-title">Deep Research</h6>
                 <p class="m-i-text">
                   Take your research further with Deep Reasearch
                 </p>
               </a>
           <a class="btn btn-info btn-round btn-raised" href="{{route('research')}}" >
           Research
           </a>
       </div>

        <div class="col-md-3 m-item col-md-push-1">
                 <a class="link_def" href="{{route('calendar')}}">
                 <img src="/svg/calendar-2.svg" alt="" class="m-i-svg" />
                   <h6 class="m-i-title">Ski Calendar</h6>
                 <p class="m-i-text">
                   Keep track of your Study life and manage your classes and school year
                 </p>
               </a>
           <a class="btn btn-info btn-round btn-raised" href="{{route('calendar')}}" >
           Calendar
           </a>
       </div>

    <div class="col-md-3 m-item col-md-push-1">
      <a class="link_def" disabled href="#gopro">
      <img src="/svg/megaphone-1.png" alt="" class="m-i-svg" />
        <h6 class="m-i-title">SKi Pod</h6>
      <p class="m-i-text">
        Create Your Study pods and invite your friends to your pods or join an existing Study pod
      </p>
    </a>
    <a href="{{route('dashboard.todo')}}" disabled class="btn btn-info btn-raised btn-round">
    Coming soon
    </a>
    </div>
  </div>
</div>

<style media="screen">
 .mfb-component__button--main:hover, .mfb-component__button--main:focus {
  color: #fff;
}
.mfb-component__button--child:hover, .mfb-component__button--child:focus {
 color: #fff;
}
</style>
<ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
  <div class="point"></div>

      <li class="mfb-component__wrap">
        <a href="#help" class="mfb-component__button--main" data-mfb-label="Ski Learn Help Desk">
          <i class="mfb-component__main-icon--resting "><i class="fa fa-question"></i></i>
          <i class="mfb-component__main-icon--active "><i class="fa fa-medkit"></i></i>
        </a>
        <ul class="mfb-component__list">
          <li>
            <a href="#feedback" data-mfb-label="Give us Feedback" class="mfb-component__button--child">
              <i class="mfb-component__child-icon "><i class="fa fa-reply"></i></i>
            </a>
          </li>
        </ul>
      </li>
    </ul>

    <div class="ski-noti">
      <div class="ski-noti-drawer noti-deactive" style="display:block">
        <div class="point"></div>

        <i class="material-icons noti-logo animated shake infinity">loyalty</i>
      </div>
      <div class="ski-noti-drawer noti-active" style="display:none">
        <i class="material-icons noti-logo animated">loyalty</i>
      </div>
      <div class="ski-noti-body animated fadeInLeftBig" style="display:none">
        <div class="noti-empty">
          <i class="material-icons animated jello infinite noti-empty-font">loyalty</i>
        </div>
        <h3 class="text-muted">yah All tasks Completed</h3>
      <!-- <ul class="list-group">
        <li class="list-group-item">hello world</li>
        <li class="list-group-item"> this is hello world two</li>
      </ul> -->
      </div>
    </div>
  @stop
