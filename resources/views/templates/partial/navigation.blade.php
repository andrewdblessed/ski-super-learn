
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
                <form action="{{route('auth.signin')}}" method="post" role="search" class="navbar-form navbar-left app-search pull-left hidden-xs">
         <li class="navbar-c-items">
                <div class="form-group">
                     <input type="text" name="username" placeholder="Username"  value="{{ Request::old('username') ?: '' }}" class="form-control">
                     <input type="password" name="password" Placeholder="password"  value="Password" class="form-control">
                     <input type="hidden" name="_token" value="{{ Session::token() }}">

                     <button type="submit" class="btn btn-white  waves-effect waves-light">
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


 <!-- Navigation Bar-->
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

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="navbar-c-items">
                                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                     <input type="text" placeholder="Search..." class="form-control">
                                     <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>

                              <li class="dropdown navbar-c-items">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">
                            <img class="icon-colored img-circle" src="{{ URL::asset('/src/vendor/new/images/icons/flash_on.svg')}}" alt="stars" title="Ski Stars"/>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li class="text-center">
                                        <h5>Your Ski Stars</h5>
                                    </li>
                                    <li><a href="#"><i class="ti-user m-r-5"></i>Get More Stars</a></li>
                                    <li><a href="#"><i class="ti-lock m-r-5"></i>Help & How to</a></li>
                                    <li><a href="#"><i class="ti-power-off m-r-5"></i>Star Settings</a></li>
                                </ul>

                            </li>

                            <li class="dropdown navbar-c-items">
                                 <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <span class="badge up bg-success">4</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                    <li class="text-center">
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
                          <li class="dropdown navbar-c-items">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/png/avatar-1.png" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                  <li class="text-center">
                                        <h5>Hi, {{Auth::user()-> getFirstNameorUsername() }}</h5>
                                    </li>
                                    <li><a href="{{ route('profile.index', ['username' => Auth::user()->username]) }}"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="{{ route('profile.edit') }}"><i class="ti-settings m-r-5"></i> Edit profile</a></li>
                                    <li><a href="{{route('auth.lock') }}"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                    <li><a href="{{route('auth.signout') }}"><i class="ti-power-off m-r-5"></i> Logout</a></li>

                                </ul>

                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>
                    <!-- end menu-extras -->

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="{{route('home')}}"><img class="icon-colored" src="{{ URL::asset('/src/vendor/new/images/icons/flash_on.svg')}}" title="flash_on.svg"/><span> Dashboard </span></a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{route('calendar')}}"><img class="icon-colored" src="{{ URL::asset('/src/vendor/new/images/icons/calendar.svg')}}" title="calendar.svg"/><span> Calendar  </span></a>
                                <ul class="submenu megamenu">
                                     <li><a href="{{route('calendar.my')}}"> My Calendar</a></li>
                                </ul>
                             </li>

                            <li class="has-submenu">
                                <a href="#"><img class="icon-colored" src="{{ URL::asset('/src/vendor/new/images/icons/folder.svg')}}" title="folder.svg"/><span> Cloud Pack </span> </a>
                                <ul class="submenu megamenu">
                                     <li><a href="{{route('cloudpack')}}"> My files</a></li>
                                    <li><a href="{{route('cloudupload')}}"> Upload</a></li>
                                    <li><a href="{{route('cloudsetup')}}">Cloud Setup</a></li>
                               </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="{{route('notebook')}}"><img class="icon-colored" src="{{ URL::asset('/src/vendor/new/images/icons/reading_ebook.svg')}}" title="reading_ebook.svg"/><span> My Notes </span></a>
                            </li>
                           <li class="has-submenu">
                                <a href="{{route('quest.index')}}" > <img class="icon-colored" src="{{ URL::asset('/src/vendor/new/images/icons/idea.svg')}}" title="idea.svg"/><span> Ski Quest <span class="label label-primary">Soon</span> </span></a>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><img class="icon-colored" src="{{ URL::asset('/src/vendor/new/images/icons/graduation_cap.svg')}}" title="graduation_cap.svg"/><span>Academia <span class="label label-primary">Soon</span></span></a>
                           </li>

                            <li class="has-submenu">
                       <a href="{{route('zones')}}"> <img class="icon-colored" src="{{ URL::asset('/src/vendor/new/images/icons/voice_presentation.svg')}}" title="voice_presentation.svg"/><span>Ski Zones <span class="label label-primary">Soon</span> </span></a>
                            </li>
                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->
<style type="text/css">
.icon-colored {
    height: 18px;
    width: 18px;
    margin: 0px;
}
</style>
  @endif
