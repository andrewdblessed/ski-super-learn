
@if (!Auth::check())

<header id="topnav">

<div class="topbar-main">
    <div class="container">

        <!-- Logo container-->
        <div class="logo">
            <!-- Text Logo -->
            <!--<a href="index.html" class="logo">-->
                <!--Zircos-->
            <!--</a>-->
            <!-- Image Logo -->
            <a href="{{route('home')}}" class="logo">
                <img src="icons/favicon.png" alt="" height="30">
            </a>

        </div>
        <!-- End Logo container-->
            <div class="menu-extras">
        <ul class="nav navbar-nav navbar-right ">
                <form action="{{route('auth.signin')}}" method="post" role="search" class="navbar-form navbar-left app-search pull-left hidden-xs" id="signin">
         <li class="navbar-c-items">
                <div class="form-group">
                     <input type="text" name="username" placeholder="Username"  value="{{ Request::old('username') ?: '' }}" class="form-control">
                     <input type="password" name="password" Placeholder="password"   class="form-control">
                     <input type="hidden" name="_token" value="{{ Session::token() }}">

                     <button type="submit" class="btn btn-primary log_user  waves-effect waves-light">
                        Sign In
                     </button>
                   </div>
                   </li>
            </form>
        </ul>
      </div>

        <!-- end menu-extras -->

    </div> <!-- end container -->
</div>
<!-- end topbar-main -->
</header>

  <!-- <div class="navbar-fixed">
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
</div> -->

  @endif

  @if (Auth::check())
  <style media="screen">
  img.img-circle {
    width: 30px;
  }
  .navbar-default {
      background-color: #188ae2 !important;
  }
  .topbar .topbar-left {
    background: #188ae2 !important;
}
i.nav-notif {
    font-size: 100px;
}
  </style>
  <!-- Top Bar Start -->
  <div class="topbar">

      <!-- LOGO -->

      <div class="topbar-left">
          <a href="{{route('home')}}" class="logo"><span>SKI<span>-LEARN</span></span><i class="mdi mdi-cube"></i></a>
          <!-- Image logo -->
          <a href="{{route('home')}}" class="logo">
              <img src="icons/favicon.png" alt="" height="30">
          </a>
      </div>

      <!-- Button mobile view to collapse sidebar menu -->
      <div class="navbar navbar-default" role="navigation">
          <div class="container">

              <!-- Navbar-left -->
              <ul class="nav navbar-nav navbar-right">
                  <li>
                      <button class="button-menu-mobile open-left waves-effect waves-light">
                          <i class="mdi mdi-menu"></i>
                      </button>
                  </li>
                  <!-- <li class="hidden-xs">
                      <form role="search" class="app-search">
                          <input type="text" placeholder="Search..."
                                 class="form-control">
                          <a href=""><i class="fa fa-search"></i></a>
                      </form>
                  </li>
                  <li class="hidden-xs">
                      <a href="#" class="menu-item waves-effect waves-light">New</a>
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
                  </li> -->
              </ul>

              <!-- Right(Notification) -->
              <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                          <i class="mdi mdi-bell"></i>
                          <span class="badge up bg-primary">0</span>
                      </a>

                      <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                          <li>
                              <h5> No new Notifications</h5>
                          </li>
                          <li class="text-center text-primary"><i class="nav-notif mdi mdi-alert-box"></i></li>
                          <!-- <li>
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
                          </li> -->
                          <li class="all-msgs text-center">
                              <p class="m-0"><a href="#">See all Notification</a></p>
                          </li>
                      </ul>
                  </li>

                  <li>
                      <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                          <i class="mdi mdi-email"></i>
                          <span class="badge up bg-danger">0</span>
                      </a>

                      <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                          <li>
                              <h5>No New Messages</h5>
                          </li>
                          <li class="text-center text-primary">
                            <i class="nav-notif mdi mdi-message-alert"></i>
                          </li>
                          <!-- <li>
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
                                      <span class="name">Margaret Becker</span>
                                      <span class="desc">There are new settings available</span>
                                      <span class="time">2 hours ago</span>
                                  </div>
                              </a>
                          </li> -->
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

                  <li class="dropdown navbar-c-items">
                        <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">
                          <img src="assets/png/avatar-1.png" alt="user-img" class="img-circle">
                         </a>
                        <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                          <li class="text-center">
                                <h5>Hi, {{Auth::user()-> getFirstNameorUsername() }}</h5>
                            </li>
                            <li><a href="{{ route('profile.index', ['username' => Auth::user()->username]) }}"><i class="ti-user m-r-5"></i> Profile</a></li>
                            <li><a href="{{ route('profile.edit') }}"><i class="ti-settings m-r-5"></i> Edit profile</a></li>
                            <!-- <li><a href="{{route('auth.lock') }}"><i class="ti-lock m-r-5"></i> Lock screen</a></li> -->
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
                        <div class="user-details">
                            <div class="overlay"></div>
                            <div class="text-center">
                                <img src="assets/png/avatar-1.png" alt="" class="thumb-md img-circle">
                            </div>
                            <div class="user-info">
                                <div>
                                    <a href="#setting-dropdown" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{Auth::user()-> getFirstNameorUsername() }} <span class="mdi mdi-menu-down"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- end user detail -->

                        <div class="dropdown" id="setting-dropdown">
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('profile.index', ['username' => Auth::user()->username]) }}"><i class=" mdi mdi-account-circle m-r-5"></i> Profile</a></li>
                                <li><a href="{{ route('profile.edit') }}"><i class="mdi mdi-account-settings-variant m-r-5"></i> Settings</a></li>
                                <li><a href="{{route('auth.signout') }}"><i class="mdi mdi-logout m-r-5"></i> Logout</a></li>
                            </ul>
                        </div>

                        <ul>
                          <li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="{{route('home')}}" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                           </li>


                            <li>
                                <a href="{{route('calendar')}}" class="waves-effect"><i class="mdi mdi-calendar"></i><span> Calendar </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class=" mdi mdi-folder-multiple"></i><span> Files </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('cloudpack')}}"><i class=" mdi mdi-folder-multiple"></i> My Files</a></li>
                                    <li><a href="{{route('cloudupload')}}"><i class="  mdi mdi-folder-upload"></i> Upload files</a></li>
                                    <li><a href="{{route('cloudsetup')}}"><i class="mdi mdi-folder-lock"></i> Storage Settings</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="{{route('notebook')}}" class="waves-effect"><i class=" mdi mdi-grease-pencil"></i><span> My Notes </span> <span class="menu-arrow"></span></a>

                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-diamond"></i><span class="badge badge-danger pull-right">Coming Soon</span> <span> Quests </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-diamond"></i><span class="badge badge-danger pull-right">Coming Soon</span> <span> Academia </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-diamond"></i><span class="badge badge-danger pull-right">Coming Soon</span> <span> Zones </span></a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    <div class="help-box">
                        <h5 class="text-muted m-t-0">For Help ?</h5>
                        <p class=""><span class="text-dark"><b>Email:</b></span> <br/> support@skilearn.ng</p>
                        <p class="m-b-0"><span class="text-dark"><b>DOC:</b></span> <br/>Read Our Full Guide</p>
                    </div>

                </div>
                <!-- Sidebar -left -->

                </div>
                <!-- Left Sidebar End -->

<style type="text/css">
.icon-colored {
    height: 18px;
    width: 18px;
    margin: 0px;
}
</style>
  @endif
