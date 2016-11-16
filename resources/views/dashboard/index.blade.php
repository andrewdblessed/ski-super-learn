  @extends('templates.default')
  @section('content')
<style type="text/css">
img.icon-colored.nav-icon {
    width: 130px;
    height: 130px;
    margin-left: 34%;
}
    img.file-icon {
        width: 45%;
    }
</style>
  <script src="/plugins/jquery-knob/jquery.knob.js"></script>
<div class="row">


<div class="row">
  <div class="col-md-9 col-sm-push-1">
    <div class="card-box">
        <h3 class="cloud-h3 text-center">Your Quest Dashboard</h3>
        <div class="row">

        <div class="col-sm-8">

          <img class="icon-colored nav-icon" src="{{ URL::asset('/src/vendor/new/images/icons/graduation_cap.svg')}}" title="folder.svg"/>
          <h5 class="text-center">
        There are currently no upcoming Educational Quests Today
          </h5>
        </div>
        <div class="col-sm-4">
          <h5 class="text-center">Your currently completed Quests</h5>
          <div class="demo-box">
            <input data-plugin="knob" data-width="220" data-height="220" data-linecap=round
            data-fgColor="#7fc1fc" value="0" data-skin="tron" data-angleOffset="180"
            data-readOnly=true data-thickness=".2"/>
          </div>
        </div>

        </div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-md-9 col-sm-push-1">
    <div class="card-box">
        <h3 class="cloud-h3 text-center">Your Cloud Pack Dashboard</h3>
        <div class="row">

        <div class="col-sm-8">
          @if (!$last_files->count())

          <img class="icon-colored nav-icon " src="{{ URL::asset('/src/vendor/new/images/icons/folder.svg')}}" title="folder.svg"/>
          <h5 class="text-center">
        Your cloud storage is Empty
      </h5>
      <h4 class="text-center"> Here are a couple of things to get you started</h4><br>
        <a href="{{route('cloudupload')}}" class="btn btn-default btn-primary btn-lg waves-effect m-b-5">
            <i class=" mdi mdi-upload"></i> Upload  file
        </a>
        <a href="{{route('cloudpack')}}" class="btn btn-default btn-primary btn-lg waves-effect m-b-5">
            <i class=" mdi mdi-folder-upload"></i> View Cloudpack
        </a>
        <a href="{{route('cloudsetup')}}" class="btn btn-default btn-primary btn-lg waves-effect m-b-5">
            <i class="  mdi mdi-settings"></i> Manage your files
        </a>

        @else
        <div class="table-responsive" style="overflow: auto;
        height: 55%;">
          <table id="mainTable" class="table table-striped m-b-0">
        <thead>
            <a href="/cloudpack" class="btn btn-primary waves-effect w-md waves-light m-b-5"> <i class="mdi mdi-upload"></i> Upload</a>
        <tr>
        <th>Name</th><th>save</th><th>Delete</th>
        </tr>
        </thead>
        <tbody class="list">
        @foreach($last_files as $file)

        <tr>
              <td class="f-name" >
                <a href="#" class="afile{{$file->id}}">
                  <p class="f-name">{{$file->filename}}</p>
                </a>
                </td>
              <td class="f-type"><i class=" mdi mdi-download"></i></td>

                <td class="td-actions f-delete">
                  <a class="btn waves-effect waves-light  btn-primary btn-sm deleteFile{{$file->id}}" href="#"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>


              @endforeach
        </tbody>

      </table>
                </div>
                @endif

        </div>
        <div class="col-sm-4">
          <h5 class="text-center">Files saved</h5>
          <div class="demo-box">
            <input data-plugin="knob" data-width="220" data-height="220" data-linecap=round
            data-fgColor="#7fc1fc" value="{{ $files->count() }}" data-skin="tron" data-angleOffset="180"
            data-readOnly=true data-thickness=".2"/>
          </div>
        </div>

        </div>

      </div>
  </div>
</div>



<div class="row">
  <div class="col-md-9 col-sm-push-1">
    <div class="card-box">
        <h3 class="cloud-h3 text-center">Your Ski Zones Dash Board  <span class="label label-primary">Soon</span>  </h3>
        <div class="row">

        <div class="col-sm-8">

          <img class="icon-colored nav-icon" src="{{ URL::asset('/src/vendor/new/images/icons/voice_presentation.svg')}}" title="Ski Zones.svg"/>
          <h5 >
        Ski Zones is created to boost how you learn with a vibrant community, Here is a brief list of what you can do with Ski Zones
        <ul>
          <li>Ask other students Questions</li>
          <li>partake in Quizes</li>
          <li>share your notes and start a new discussion</li>
          <li> Answer questions from other students </li>
          <li>share files to various Zones</li>
          <li>Create or join any Zones of your choice</li>
          <li>Reach out to students around the world</li>
          <li>and much more to come</li>
        </ul>
          </h5>
        </div>
        <div class="col-sm-4">
          <h5 class="text-center">Your currently completed Quests</h5>
          <div class="demo-box">
            <input data-plugin="knob" data-width="220" data-height="220" data-linecap=round
            data-fgColor="#7fc1fc" value="100" data-skin="tron" data-angleOffset="180"
            data-readOnly=true data-thickness=".2"/>
          </div>
        </div>

        </div>
      </div>
  </div>
</div>


<!-- end row -->
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
