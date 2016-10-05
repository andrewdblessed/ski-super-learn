
@if (!Auth::check())
  <div class="navbar-fixed">
  <nav class="white blue-text" role="navigation">
    <div class="nav-wrapper">
      <a id="logo-container" href="{{route('home')}}" class=" blue-text brand-logo">SKI LEARN</a>
      <ul class="right hide-on-med-and-down ">
        <li><a class="blue-text" href="/plans">Join</a></li>
        <li><a class="blue-text" href="signin">Log In</a></li>
        <li><a class="blue-text" href="#">Schools</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a class="blue-text" href="/plans">Join</a></li>
        <li><a class="blue-text" href="signin">Log In</a></li>
        <li><a class="blue-text" href="#">Schools</a></li>
            </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse blue white-text"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>

  @endif

  @if (Auth::check())

<!-- new design -->

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                             <li class="hidden-xs">
                        <!--         <a href="#" class="menu-item waves-effect waves-light">New</a> -->
                            </li>
                            <li class="dropdown hidden-xs">
                                <a data-toggle="dropdown" class="dropdown-toggle menu-item waves-effect waves-light" href="#" aria-expanded="false">English
                                    <span class="caret"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Italian</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li>
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <span class="badge up bg-primary">4</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                    <li>
                                        <h5>Notifications</h5>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-info">
                                                <i class="mdi mdi-account"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">New Signup</span>
                                                <span class="time">5 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-danger">
                                                <i class="mdi mdi-comment"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">New Message received</span>
                                                <span class="time">1 day ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-warning">
                                                <i class="mdi mdi-settings"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">Settings</span>
                                                <span class="time">1 day ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="all-msgs text-center">
                                        <p class="m-0"><a href="#">See all Notification</a></p>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-email"></i>
                                    <span class="badge up bg-danger">8</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                    <li>
                                        <h5>Messages</h5>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-2.jpg" alt="">
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">Patricia Beach</span>
                                                <span class="desc">There are new settings available</span>
                                                <span class="time">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-3.jpg" alt="">
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">Connie Lucas</span>
                                                <span class="desc">There are new settings available</span>
                                                <span class="time">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-4.jpg" alt="">
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">john doe</span>
                                                <span class="desc">There are new settings available</span>
                                                <span class="time">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="all-msgs text-center">
                                        <p class="m-0"><a href="#">See all Messages</a></p>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="right-bar-toggle right-menu-item">
                                    <i class="mdi mdi-settings"></i>
                                </a>
                            </li>

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect waves-light user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>Hi, {{Auth::user()-> getFirstNameorUsername() }}</h5>
                                    </li>
                                    <li><a href="{{ route('profile.index', ['username' => Auth::user()->username]) }}"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="{{ route('profile.edit') }}"><i class="ti-settings m-r-5"></i> Edit profile</a></li>
                                    <li><a href="{{route('auth.lock') }}"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                    <li><a href="{{route('auth.signout') }}"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->




            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- User detail -->
                     <!--    <div class="user-details">
                            <div class="overlay"></div>
                            <div class="text-center">
                                <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                            </div>
                            <div class="user-info">
                                <div>
                                    <a href="#setting-dropdown" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                     {{Auth::user()-> getFirstNameorUsername() }}<span class="mdi mdi-menu-down"></span></a>
                                </div>
                            </div>
                        </div> -->
                        <!-- end user detail -->
<!-- 
                        <div class="dropdown" id="setting-dropdown">
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('profile.index', ['username' => Auth::user()->username]) }}"><i class="mdi mdi-face-profile m-r-5"></i> Profile</a></li>
                                <li><a href="{{ route('profile.edit') }}"><i class="mdi mdi-account-settings-variant m-r-5"></i> Edit Profile</a></li>
                                <li><a href="{{route('auth.lock') }}"><i class="mdi mdi-lock m-r-5"></i> Lock screen</a></li>
                                <li><a href="{{route('auth.signout') }}"><i class="mdi mdi-logout m-r-5"></i> Logout</a></li>
                            </ul>
                        </div> -->

                        <ul>
                          <li class="menu-title">Navigation</li>
                            <li>
                                <a href="{{route('home')}}" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span></a>
                            </li>
                            <li>
                                <a href="{{route('adela.index')}}" class="waves-effect"><i class="mdi mdi-microphone"></i><span> Adela </span></a>
                            </li>
                               <li>
                                <a href="{{route('calendar')}}" class="waves-effect"><i class="mdi mdi-calendar"></i><span> Calendar </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cloud-check"></i><span> Cloud Pack </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('cloudpack')}}"> My files</a></li>
                                   <!--  <li><a href="{{route('cloudupload')}}"> Upload</a></li>
                                    --> <li><a href="{{route('cloudsetup')}}">Cloud Setup</a></li>
                                </ul>
                            </li>
                              <li>
                                <a href="{{route('notebook')}}" class="waves-effect"><i class="mdi  mdi-library"></i><span> My Notes</span></a>
                            </li>
                               <!--   <li>
                                <a href="{{route('research')}}" class="waves-effect"><i class="mdi  mdi-library"></i><span> Deep research </span></a>
                            </li> -->
                        <!--      <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-book-open-page-variant"></i><span>Notes</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('notebook')}}"> My notes</a></li>
                                    <li><a href="email-read.html"> Adela notes</a></li>
                                     <li><a href="email-read.html"> <i class="mdi mdi-archive"></i> <span>Archived</span></a></li>
                                    <li><a href="email-compose.html"> <i class=" mdi mdi-delete-forever"></i> <span> Trash</span></a></li>
                                </ul>
                            </li> -->

                            <li>
                                <a href="{{route('academia')}}" class="waves-effect"><i class=" mdi mdi-school"></i><span>Academia</span></a>
                            </li>
                   

                       </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    <div class="help-box">
                        <h5 class="text-muted m-t-0">Need Help?</h5>
                        <p class=""><span class="text-dark"><b>Email:</b></span> <br/> support@support.com</p>
                        <p class="m-b-0"><span class="text-dark"><b>Call:</b></span> <br/> (+123) 123 456 789</p>
                    </div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



  @endif
