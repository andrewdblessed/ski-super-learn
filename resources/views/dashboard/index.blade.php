
  @extends('templates.default')

  @section('content')

 <div class="row">
              <div class="col-xs-12">
                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <div class="clearfix"></div>
                                </div>
              </div>
            </div>
                        <!-- end row -->
<div class="col-md-9">

<div class="col-sm-6">
    <div class="portlet">
        <div class="portlet-heading bg-primary">
            <h3 class="portlet-title">
               Add New Task
            </h3>
            <div class="portlet-widgets">
                <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                <span class="divider"></span>
                <a data-toggle="collapse" data-parent="#accordion1" href="#bg-primary"><i class="ion-minus-round"></i></a>
                <span class="divider"></span>
                <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="bg-primary" class="panel-collapse collapse in">
            <div class="portlet-body">
                 <form class="form-horizontal " action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" required placeholder="Add a new task"/>
                   </div>
                <button class="btn btn-icon waves-effect waves-light btn-primary"> <i class=" mdi mdi-plus-circle"></i> <span>Create New Task</span></button>
                </form>
            </div>
        </div>
    </div>

<!-- end todo add polet -->
 </div>




<div class="col-sm-6">
 <div class="portlet">
        <div class="portlet-heading bg-primary">
            <h3 class="portlet-title">
               Add New Note
            </h3>
            <div class="portlet-widgets">
                <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                <span class="divider"></span>
                <a data-toggle="collapse" data-parent="#accordion1" href="#bg-primary"><i class="ion-minus-round"></i></a>
                <span class="divider"></span>
                <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="bg-primary" class="panel-collapse collapse in">
            <div class="portlet-body">
                 <form class="form-horizontal " action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" required placeholder="Note Title"/>
                    <textarea> </textarea>
                   </div>
                <button class="btn btn-icon waves-effect waves-light btn-primary"> <i class=" mdi mdi-plus-circle"></i> <span>Create New Task</span></button>
                </form>
            </div>
        </div>
    </div>
</div>

    <div class="col-sm-6">
                                <div class="portlet">
                                    <div class="portlet-heading bg-info">
                                        <h3 class="portlet-title">
                                            Info Heading
                                        </h3>
                                        <div class="portlet-widgets">
                                            <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                            <span class="divider"></span>
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#bg-info"><i class="ion-minus-round"></i></a>
                                            <span class="divider"></span>
                                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="bg-info" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.
                                        </div>
                                    </div>
                                </div>
                            </div>

<!-- ends div of col-md-9 -->
</div>
<!-- start div of md-3 -->
<div class="col-md-3">


   
                            <div class="col-sm-12">
                                <div class="timeline timeline-left">
                                    <article class="timeline-item alt">
                                        <div class="text-left">
                                            <div class="time-show first">
                                                <a href="#" class="btn btn-danger w-lg">Today</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="">1 hour ago</h4>
                                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                    <p>Dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? </p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item ">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon bg-success"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-success">2 hours ago</h4>
                                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                    <p>consectetur adipisicing elit. Iusto, optio, dolorum <a href="#">John deon</a> provident rerum aut hic quasi placeat iure tempora laudantium </p>

                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon bg-primary"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-primary">10 hours ago</h4>
                                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                    <p>3 new photo Uploaded on facebook fan page</p>
                                                    <div class="album">
                                                        <a href="#">
                                                            <img alt="" src="assets/images/small/img-1.jpg">
                                                        </a>
                                                        <a href="#">
                                                            <img alt="" src="assets/images/small/img-2.jpg">
                                                        </a>
                                                        <a href="#">
                                                            <img alt="" src="assets/images/small/img-3.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon bg-purple"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-purple">14 hours ago</h4>
                                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                    <p>Outdoor visit at California State Route 85 with John Boltana &
                                                        Harry Piterson regarding to setup a new show room.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-muted">19 hours ago</h4>
                                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                    <p>Jonatha Smith added new milestone <span><a href="#">Pathek</a></span>
                                                        Lorem ipsum dolor sit amet consiquest dio</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                 <div class="row">
                    
                     <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-success">
                                    <i class="mdi mdi-book-open-page-variant widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User Today">Total Notes</p>
                                        <h2 class="text-white"><span data-plugin="counterup">200 </span> </h2>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-warning">
                                    <i class="mdi mdi mdi-airballoon widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Exp Level</p>
                                        <h2 class="text-white"><span data-plugin="counterup">52 </span> </h2>
                                     
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-info">
                                    <i class="mdi mdi-cloud-check widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Request Per Minute">Files saved</p>
                                        <h2 class="text-white"><span data-plugin="counterup">10 </span> </h2>
                                    </div>
                                </div>
                            </div><!-- end col -->
               
                            
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
