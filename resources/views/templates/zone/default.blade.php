<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<script src="zone-cdn/assets/js/jquery.min.js"></script>
		<title>Ski Zone</title>
    <!-- Material Design fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->

    <!-- Bootstrap Material Design -->
		<link rel="stylesheet" href="zone-cdn/assets/css/bootstrap.min.css">
    <link href="{{ URL::asset('/src/vendor/new/css/menu.css') }}" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="zone-cdn/assets/css/bootstrap-material-design.min.css">
				<link rel="stylesheet" href="zone-cdn/assets/css/font-awesome.min.css">
				<link rel="stylesheet" href="zone-cdn/assets/css/material-icons.css">
				<link rel="stylesheet" href="zone-cdn/assets/style.css" media="screen" title="no title" charset="utf-8">
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/fuelux.min.css">

  </head>
  <body>
		<!-- <div class="navbar navbar-info navbar-fixed-top">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		        <span class="icon-bar"></span>+
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="javascript:void(0)">
            <b>Ski - Zone</b></a>
		    </div>
		    <div class="navbar-collapse collapse navbar-responsive-collapse">
		      <form class="navbar-form navbar-left">
		      <div class="input-group mid-search">
						  <span class="input-group-addon"><i class="fb-icons material-icons">search</i></span>
						  <input type="text" class="form-control col-md-8 fb-search" placeholder="Search">
						</div>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a class="fb-nav" href="#user-profile"><i class=" fb-icons material-icons">account_circle</i>Andrew Ben</a></li>
						<li><a class="fb-nav" href="#friends"><i class=" fb-icons material-icons">supervisor_account</i><span class="badge fb-notif">5</span></a></li>
						<li><a class="fb-nav" href="#user-profile"><i class=" fb-icons material-icons">notifications_active</i><span class="badge fb-notif">2</span></a></li>
						<li><a class="fb-nav" href="#user-profile"><i class="material-icons">forum</i><span class="badge fb-notif"></span></a></li>

					  <li class="dropdown">
		          <a class="fb-nav" href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">
		            <b class="caret"></b></a>
		          <ul class="dropdown-menu">
		            <li><a href="javascript:void(0)">Action</a></li>
		            <li><a href="javascript:void(0)">Another action</a></li>
		            <li><a href="javascript:void(0)">Something else here</a></li>
		            <li class="divider"></li>
		            <li><a href="javascript:void(0)">Separated link</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div>
		  </div>
		</div> -->

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
  </header>
    @yield('content')



    </div>
  </div>

<!-- jQuery first, then tether, then Bootstrap Material Design JS. -->
<script src="zone-cdn/assets/js/bootstrap.min.js"></script>
<script src="zone-cdn/assets/js/ripples.min.js"></script>
<script src="zone-cdn/assets/js/material.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="/fuelux.min.js"></script>

</body>
</html>
