@extends('templates.home_include')
@section('content')

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center "><span class="blue white-text">LEARNING</span> <span class="white-text">WITHOUT</span> <span class="blue white-text">LIMIT</span></h1>
        <div class="row center">
            <h5 class="header col s12 light">A SINGLE <span class="blue">PLATFORM</span> THAT HELPS YOU <br><span class="blue eager_header"> MANAGE YOUR STUDY LIFE</span>.</h5>
        </div>
        <div class="row center">
          <a href="/ski/pricing" id="download-button" class="btn-large waves-effect waves-light blue lighten-1">Get Started</a>
          <a href="/siginin" id="download-button" class="btn-large waves-effect waves-light blue lighten-1">Log in</a>
          <a href="/schools" id="download-button" class="btn-large waves-effect waves-light blue lighten-1">For Schools</a>
       </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="/landing/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">


          <div class="col s12 m4">
          <div class="icon-block">
            <div class="center">
            <img src="/landing/svg/ai.png" style="width:80px; height80px;" alt="" />
          </div>
            <h5 class="center">AI Research Bot (Adela)</h5>

            <p class="light">Adela is an Artificial intelligent bot that has knowledge on some <span class="blue white-text">historic events</span>, has access to <span class="blue white-text">Wikipedia</span>, calculates <span class="blue white-text">random mathematics</span>, translate words to various <span class="blue white-text">languages</span> and as an excellent <span class="blue white-text">communication skills</span>.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <div class="center">
            <img src="/landing/svg/notebook.png" style="width:80px; height80px;" alt="" />
          </div>
            <h5 class="center">Create Notes</h5>

            <p class="light"><span class="blue white-text">Create, Save and manage</span> your various notes under your collective Ainote. Your notes are not just saved on Ski-Learn you can also <span class="blue white-text">download your notes to your device.</span></p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <div class="center">
            <img src="/landing/svg/cloud.png" style="width:80px; height80px;" alt="" />
          </div>
            <h5 class="center">Save Your Files and Images to the Cloud</h5>

            <p class="light"><span class="blue white-text">Save and access your files</span> and documents anywhere any time. Ski-Learn Cloud-pack plans to be your perfect choice to keep you attach to your Ebooks and documents, keeping them <span class="blue white-text">save in the cloud</span>.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <div class="center">
            <img src="/landing/svg/skispot.png" style="width:80px; height80px;" alt="" />
          </div>
            <h5 class="center">Meet Various Students Online</h5>

            <p class="light">Ski-Learn provides an excellent <span class="white-text blue">study community</span> which allows your to Join ski-Spots, meet new friends, participate in quizzes, create your own spot and <span  class="white-text blue">top up your educational experience</span>.</p>
          </div>
        </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <div class="center">
          <img src="/landing/svg/calendar.png" style="width:80px; height80px;" alt="" />
        </div>
          <h5 class="center">Task Management</h5>

          <p class="light">Stay focused and <span class="white-text blue">keep track of your task</span> with Ski Todo list.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
                <h5 class="center">Save and Showcase Your Success </h5>
          <p class="light">keep track of <span class="white-text blue">your academic success</span> and show case it to your friends, teachers, family and the entire world.</p>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">

        </div>
      </div>
    </div>
    <div class="parallax"><img src="/landing/background2.jpg" alt="Unsplashed background img 2"></div>
  </div>







  <footer class="page-footer blue">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Ski -Learn</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/landing/js/materialize.js"></script>
  <script src="/landing/js/init.js"></script>

  </body>
</html>



<!-- Modal Core -->
<div class="modal fade" id="reg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Welcome To Ski_learn</h4>
        <p>
      Hello @{{name}} Get Ready To  Learn More, Think More, Archive More
        </p>
      </div>
      <div class="modal-body">
        <div class="col-md-8">
        <form class="" action="{{route('auth.signup')}}" method="post">
            <div class="form-group">
                <input type="text" value="" placeholder="First Name"name="first_name" class="form-control input-lg" ng-model="name" />
            </div>
            <div class="form-group">
                <input type="text" value="" placeholder="Last Name"name="last_name" class="form-control input-lg"/>
            </div>
            <div class="form-group">
                <input type="text" value="" placeholder="username" name="username" class="form-control input-lg"/>
            </div>
            <div class="form-group">
                <input type="email" value="" placeholder="email" name="email" class="form-control input-lg"/>
            </div>
            <div class="form-group">
                <input type="password" value="" placeholder="password" name="password" class="form-control input-lg"/>
            </div>
            <button type="submit" class="btn btn-info btn-raised btn-round">
              Pre-Register to Ski-Learn
            </button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
      </div>
      <div class="col-md-4">
        <a href="{{route('google.signin')}}"class="btn btn-danger btn-raised">
          Register With Google <i class="fa fa-google-plus-square"></i>
        </a>
        <button type="button" class="btn btn-info btn-raised">
          Register With Facebook <i class="fa fa-facebook-square"></i>
        </button>
        <button type="button" class="btn btn-info btn-raised">
          Register With Twitter <i class="fa fa-twitter-square"></i>
        </button>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
</div>
<div class="modal fade" id="log" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Welcome Back To Ski Learn Login</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-8">
        <form class="" action="{{route('auth.signin')}}" method="post">
            <div class="form-group">
                <input type="text" value="" placeholder="Email" name="email" class="form-control input-lg" ng-model="name" />
            </div>
            <div class="form-group">
                <input type="password" value="" placeholder="password" name="password" class="form-control input-lg"/>
            </div>
            <button type="submit" class="btn btn-info btn-raised btn-round">
              LogIn to Ski-Learn
            </button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
      </div>
      <div class="col-md-4">
        <button type="button" class="btn btn-danger btn-raised">
          LogIn With Google <i class="fa fa-google-plus-square"></i>
        </button>
        <button type="button" class="btn btn-info btn-raised">
          LogIn With Facebook <i class="fa fa-facebook-square"></i>
        </button>
        <button type="button" class="btn btn-info btn-raised">
          LogIn With Twitter <i class="fa fa-twitter-square"></i>
        </button>
      </div>
      <div class="modal-footer"></div>
    </div>
  </div>
</div>
</div>

@stop
