  @extends('templates.default')
  @section('content')
<style type="text/css">
img.icon-colored.nav-icon {
    width: 130px;
    height: 130px;
    margin-left: 31%;
}
</style>
<div class="row">

 
<div class="col-lg-4">
  <div class="card-box">
      <img class="icon-colored nav-icon" src="{{ URL::asset('/src/vendor/new/images/icons/calendar.svg')}}" title="calendar.svg"/>
      <h2 class="dash-text text-center">calendar</h2>
      <a href="{{route('calendar')}}" class="btn btn-primary waves-effect w-md waves-light m-b-5 btn-lg ">Open Calendar</a>
  </div>
</div>

<div class="col-lg-4">
  <div class="card-box">
<img class="icon-colored nav-icon" src="{{ URL::asset('/src/vendor/new/images/icons/folder.svg')}}" title="folder.svg"/>
      <h2 class="dash-text text-center">Cloud Pack</h2>
      <a href="{{route('cloudpack')}}" class="btn btn-primary waves-effect w-md waves-light m-b-5 btn-lg ">Cloud pack</a>
  </div>
</div>


<div class="col-lg-4">
  <div class="card-box">
     <img class="icon-colored nav-icon" src="{{ URL::asset('/src/vendor/new/images/icons/reading_ebook.svg')}}" title="reading_ebook.svg"/>
      <h2 class="dash-text text-center">Notes</h2>
      <a href="{{route('notebook')}}" class="btn btn-primary waves-effect w-md waves-light m-b-5 btn-lg ">Notes</a>
  </div>
</div>

<!-- end row -->
</div>

<div class="row">



 <div class="col-lg-4">
  <div class="card-box">
    <img class="icon-colored nav-icon" src="{{ URL::asset('/src/vendor/new/images/icons/idea.svg')}}" title="idea.svg"/>
      <h2 class="dash-text text-center">Ski Quest</h2>
      <a href="{{route('quest.index')}}" disabled class="btn btn-primary waves-effect w-md waves-light m-b-5 btn-lg ">Ski Quest </a> <span class="label label-primary">Soon</span>
  </div>
</div>

<div class="col-lg-4">
  <div class="card-box">
<img class="icon-colored nav-icon" src="{{ URL::asset('/src/vendor/new/images/icons/graduation_cap.svg')}}" title="graduation_cap.svg"/>
      <h2 class="dash-text text-center">Academia</h2>
      <a href="{{route('academia')}}" class="btn btn-primary waves-effect w-md waves-light m-b-5 btn-lg ">Academia</a>
  </div>
</div>

<div class="col-lg-4">
  <div class="card-box">
<img class="icon-colored nav-icon" src="{{ URL::asset('/src/vendor/new/images/icons/voice_presentation.svg')}}" title="voice_presentation.svg"/>      <h2 class="dash-text text-center">Ski Pod</h2> 
      <a href="#" disabled class="btn btn-primary waves-effect w-md waves-light m-b-5 btn-lg ">Ski Forums</a> <span class="label label-primary">  Coming Soon</span>
  </div>
</div>

</div>
<!-- ends div rows -->
</div>
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



  @stop
