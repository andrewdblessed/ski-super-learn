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
  <style media="screen">
  .navbar {
  box-shadow: 0 16px 10px -12px rgba(0, 0, 0, 0.56), 0 4px 0px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}
.navmenu-default, .navbar-default .navbar-offcanvas {
    background-color: #cccccc;
    border-color: #ccc;
}
span.nav-ic {
    padding-right: 15px;
}
span.nav-ic:hover {
  color: black;
}
  </style>
  <link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
 <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
    <div class="space-top">
      <a class="navmenu-brand" href="{{route('home')}}"><span class="nav-text">
        <span class="nav-ic"><i class="material-icons">dashboard</i></span>DashBoard</span></a>
      <ul class="nav navmenu-nav">
        <li><a href="{{route('dashboard.Ainote.index')}}"><span class="nav-text">
          <span class="nav-ic"><i class="material-icons">bookmark</i></span>Ainotes</span></a></li>
        <li ><a href="{{route('adela.index')}}"><span class="nav-text">
          <span class="nav-ic"><i class="material-icons">mic</i></span>Adela</span></a></li>
        <li><a href="{{route('dashboard.cloudpack')}}"><span class="nav-text">
        <span class="nav-ic"><i class="material-icons">cloud_done</i></span>Cloud Pack</span></a></li>
        <li><a href="{{route('dashboard.todo')}}"><span class="nav-text">
          <span class="nav-ic"><i class="material-icons">assignment_turned_in</i></span>Todo List</span></a></li>
        <li><a href="{{route('year.index')}}"><span class="nav-text">
          <span class="nav-ic"><i class="material-icons">perm_contact_calendar</i></span>Agenda</span></a></li>
      </ul>
      <ul class="nav navmenu-nav">
        <hr>
          <li class="divider"></li>
        <li><a href="{{ route('profile.index', ['username' => Auth::user()->username]) }}"><span class="nav-text">
          <span class="nav-ic"><i class="material-icons">account_circle</i></span>{{Auth::user()-> getFirstNameorUsername() }}</span></a></li>
        <li><a href="{{ route('profile.edit') }}"><span class="nav-text">
            <span class="nav-ic"><i class="material-icons">mode_edit</i></span>Edit profile</span></a></li>
        <li><a href="{{route('setting.index') }}"><span class="nav-text">
            <span class="nav-ic"><i class="material-icons">settings</i></span>Settings</span></a></li>
          <li><a href="{{route('setting.index') }}"><span class="nav-text">
            <span class="nav-ic">  <i class="material-icons">feedback</i></span>Feedback</span></a></li>
          <li class="divider"></li>
        <li><a href="{{route('auth.signout') }}"><span class="nav-text">
          <span class="nav-ic">  <i class="material-icons">exit_to_app</i></span>log out</span></a></li>
      </ul>
    </div>
    </div>

<nav class="navbar navbar-default main-nav-bar" role="navigation">
  <div class="container-fluid">
         <div class="fixed-top">
<nav class="navigation--button" data-toggle="offcanvas"
      data-target=".navmenu" data-canvas="body" >  <div class="material--burger">    <span></span>  </div>
    </nav>
    </div>

<div class="loader ski_loader animated fadeIn" style="display:none;"></div>


{{--
  @if ($skiSearch == true)
  search can be activated
  @elseif($skiSearch == false)
  search is deactivated
  --}}

  @if ($skiSearch == true)
        <form class="navbar-form main-nav-form" role="search" style="margin-top: 4px;">
          <script src="{{ URL::asset('/src/vendor/listjs/list.min.js') }}" ></script>
          <input type="text" class="main-nav-search search" placeholder="{{  $skiSearch_placehold}}">
             <button class="btn" type="submit"><i class="main-nav-btn-ser fa fa-search"></i></button>
          @elseif($skiSearch == false)
             @endif
             <!--headway update  -->
             <!-- <span id="updates" ></span> -->
          </form>
          <div class="navbar-right">
            <!-- <img src="/user-tools/profile-default/avatar.png" alt="" /> -->
          </div>
    </div>
</nav>
    <script type="text/javascript">$('.material--burger').on('click', function() {
        $(this).toggleClass('material--arrow');});</script>
  @endif
