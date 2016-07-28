<!DOCTYPE html>
<html ng-app>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/material-kit.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' rel='stylesheet'>
<script src="//fast.eager.io/-jQ82hNsU2.js"></script>
    <script src="js/angular.js" charset="utf-8"></script>

    <style media="screen">
    nav.navbar.navbar-inverse {
    margin-bottom: 0;
}
    .th{
  text-align: center;
}
.jum{
    margin-top: -20px;
    background-color: #3498DB;
    color: #fff;
    text-align: center;
}
.user-box{
    margin-top: -30px;
    background-color: #2980B9;
    padding-bottom: 20px;
    padding-top: 20px;
}
.colect1{
    background-color: #34495E;
    color: #fff;
}
.colect1img{
    width: 100%;
    height: 100%;
    margin-left: -100px;
}
.colect1-h{
    text-transform: capitalize;
}
.cur{
    background-color: #3498DB;
    border-radius: 5px;
    font-size: large;
}
#username{
    font-size: medium;
    font-weight: bold;
}
.title-main {
    color: rgb(28, 124, 209);
}
button.btn.btn-info.btn-round.btn-raised.scroll {
    left: 45%;
    margin-top: 8%;
}
footer ul li {
    display:table-row;
}
img.img-responsive.img-circle.img-raised {
    width: 85px;
}
    </style>
    <title>Heros Me.xyz</title>
  </head>
  <body>
<header class="bird-box">
  <div class="back-bird"></div>
  <div class="logo">
    <div class="title-home">
      <div class="col-md-6"style="
      background-color: rgb(249, 251, 246);
    height: 702px;
    margin-top: -8px;">
        <h1 class="title-main">Hello @{{username}}, Welcome</h1>
        <div class="form-group">
          <input type="text" value="{{$googlename}}" placeholder="First Name" class="form-control input-lg" ng-model="username" />
        </div>
        <div class="form-group">
            <input type="text" value="" placeholder="Last Name" class="form-control input-lg"/>
        </div>
        <div class="form-group">
            <input type="text" value="" placeholder="username" class="form-control input-lg"/>
        </div>
        <div class="form-group">
            <input type="text" value="{{$googleemail}}" placeholder="" class="form-control input-lg"/>
        </div>
        <button type="submit" class="btn btn-info btn-raised btn-round">
          Pre-Register to Ski-Learn
        </button>
        <a class="btn btn-info btn-rasied btn-round ">
        Complete Survey to help us Grow.
        </a>
      <div class="col-sm-7      ">


        <a  data-toggle="modal" data-target="#andrew">
          <img src="{{$googleavatar}}" alt="" class="img-responsive img-circle img-raised">
          <span>
            Made With Love By Andrew Ben Richard
          </span>
        </a>
            </div>


      </div>
      <div class="col-md-6" style="
      background-color: rgb(28, 124, 209);
    height: 702px;
    margin-top: -8px;
    color: #fff;
    text-align:center;
    "><br><br>
        <h3>SKI-LEARN</h3>
                <p>
Do More, Learn More, Archive more
</p>
<p>
<<<<  Pre-register to Ski-Learn Now and get access to our Premium Platform.
</p>
<br>
<a href="#" class="btn btn-success btn-raised btn-round">Support Us at Indiegogo</a>
<hr>
<p>
  Coming soon to the following platform
</p>
<br>
<span>WEB</span>
<hr>
<span>
  WINDOWS
</span>
<span>
  MAC
</span>
<span>
  LINUX
</span>
<hr>
<span>
  ANDROID
</span>
<span>
  IPHONE
</span>
      </div>
      </div>
    </div>
</header>
<footer class="text-info card card-raised">
  <div class="container">
    <div class="col-md-4 text-info"><strong>FIND SKI-LEARN ON</strong>
      <ul>
        <li><a class="btn btn-info btn-sm" href="http://twitter.com/skilearn">Twitter</a></li>
        <li><a class="btn btn-info btn-sm" href="http://facebook.com/skilearn">Facebook</a></li>
        <li><a class="btn btn-info btn-sm" href="http://pinterest.com/skilearn">Pinterest</a></li>
      </ul>
      <br>
      <a href="#andrewben" class="btn btn-info"><strong>MEET ANDREW BEN RICHARD</strong></a>
    </div>
    <div class="col-md-4 text-info"><strong>OTHER Ski Product</strong>
      <ul>
        <li><a class="btn btn-info btn-sm" >Ski-Spot <span>(coming soon)</span> </a></li>
        <li><a class="btn btn-info btn-sm" >Ski-Tutee <span>(coming soon)</span></a></li>
        <li><a class="btn btn-info btn-sm" >Hero Me (coming soon)</a></li>
      </ul>
    </div>
    <div class="col-md-4 text-info">
      <p><strong>Sign Up for the newsletter</strong>
         Get Updates from us as we progress.</p>
      <form class="row">
        <div class="form-group">
          <input type="email" placeholder="Your Email" class="form-control">
        </div>
        <div class="columns four">
          <input type="submit" class="btn-info btn-raised btn btn-round">
        </div>
      </form>
    </div>
  </div>
</footer>

  <script src="js/jquery.min.js" charset="utf-8"></script>
<script src="js/functions.js" charset="utf-8"></script>
<script src="js/bootstrap.min.js" charset="utf-8"></script>
<script src="js/material.min.js" charset="utf-8"></script>
<script src="js/material-kit.js" charset="utf-8"></script>
  </body>
</html>
