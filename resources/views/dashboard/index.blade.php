  @extends('templates.default')
  @section('content')
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
            <h6 class="m-i-title">Deep Reasearch</h6>
          <p class="m-i-text">
            Take your research further with Deep Reasearch
          </p>
        </a>
    <a class="btn btn-info btn-round btn-raised" href="{{route('dashboard.cloudpack')}}" >
    Cloud
    </a>
        </div>

   <!--      <div class="col-md-3 m-item col-md-push-1">
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
        </div> -->
        <div class="col-md-3 m-item col-md-push-1">
          <a class="link_def" href="{{route('dashboard.notebook.index')}}">
          <img src="/svg/notebook-3.svg" alt="" class="m-i-svg" />
            <h6 class="m-i-title">Notebooks</h6>
          <p class="m-i-text">
          Create amazing notes for your classes
          </p>
        </a>
    <a class="btn btn-info btn-round btn-raised" href="{{route('dashboard.notebook.index')}}">
  Notebooks
    </a>
        </div>
      </div>
</div>
<!--XXX:PRO VERSION:XXX  -->
<div class="container more-pad">
      <div class="row">

            <div class="col-md-3 m-item col-md-push-1">
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
            </div>

<!--     <div class="col-md-3 m-item col-md-push-1">
      <a class="link_def"  href="#gopro">
        <img src="/svg/diamond.svg" alt="" class="m-i-svg" />
        <h6 class="m-i-title">Quest Challenge</h6>
      <p class="m-i-text">
  Put your skills to the test.
      </p>
    </a>
    <a href="#" disabled  class="btn btn-info btn-raised btn-round">
    Coming soon
    </a>
    </div> -->


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
  @stop
