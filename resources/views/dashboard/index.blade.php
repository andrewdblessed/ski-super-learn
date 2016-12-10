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

  <div class="container-fluid">
    <div class="row">
      <div class="row">
<div class="col-xs-12">
<div class="page-title-box">
                  <h4 class="page-title">Dashboard</h4>
                  <div class="clearfix"></div>
              </div>
</div>
</div>
      <!-- end row -->
<div style="background-color: #fff;">


<div class="row">


    <div class="col-md-4">
    <h3 class="text-center">Quests</h3>
      <div class="demo-box">
          <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round
                 data-fgColor="#188ae2" value="0" data-skin="tron" data-angleOffset="180"
                 data-readOnly=true data-thickness=".1"/>

      </div>
    </div>

    <div class="col-md-4">
      <h3 class="">Files</h3>
      <div class="demo-box">
        <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round
               data-fgColor="#188ae2" value="{{ $files->count() }}" data-skin="tron" data-angleOffset="180"
               data-readOnly=true data-thickness=".1"/>
      </div>
    </div>

    <div class="col-md-4">
      <h3 class="">Saved Notes</h3>
      <div class="demo-box">
        <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round
               data-fgColor="#188ae2" value="{{ $files->count() }}" data-skin="tron" data-angleOffset="180"
               data-readOnly=true data-thickness=".1"/>
      </div>
    </div>
  </div> <!-- end row 1-->
<hr>
<div class="row">

<div class="col-md-12 cal-data">
  <script type="text/javascript">
    $(document).ready(function(){
        $(".cal-data").load("/calendar/data");
    });
  </script>
</div>
</div>

<hr>
<div class="row">

<div class="col-md-8 col-md-push-2">

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
</div> <!-- end row -->
<hr>

<div class="row">
  <div class="col-md-8 col-md-push-2">

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
</div><!-- end row-->

  </div><!-- end col - 9 -->



</div><!-- end row -->
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
