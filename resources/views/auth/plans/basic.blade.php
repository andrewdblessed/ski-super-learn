
<!DOCTYPE HTML>
<html>
<head>
<title>Ski Learn:: Basic Account</title>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
 <link href="auth-assets/css/bootstrap.css" rel="stylesheet">
    <link href="auth-assets/css/font-awesome.css" rel="stylesheet">
    <link href="auth-assets/css/bootstrap-social.css" rel="stylesheet" >
    <link href="auth-assets/css/style.css" rel="stylesheet" >

</head>
<body>
	<style type="text/css">

  body {
      font-family: 'Montserrat', sans-serif;
      font-size: 100%;
      background: url(/auth-assets/images/bbb.jpg)no-repeat;
      background-size: cover;
      background-position-y: -205px;
      background-position-x: 104px;
  }
.btn-twitter {
    color: #fff;
    background-color: rgba(41,182,246,1);
    border-color: rgba(204, 168, 168, 0.2);
    border-radius: 28px;
}


.btn-google {
    color: rgba(239,83,80,1);
    background-color: #fff;
    border-color: rgba(204, 168, 168, 0.2);
    border-radius: 28px;
}
.btn-google:hover{
    color:#fff;
    background-color:  rgba(239,83,80,1);
    border-color: rgba(204, 168, 168, 0.2);
    border-radius: 28px;
}
.btn-facebook {
    color: #fff;
    background-color: rgba(21,101,192,1);
    border-color: rgba(204, 168, 168, 0.2);
    border-radius: 28px;
}
.login-form {
    padding: 26px 0px 50px 0px;
}
.log-bwn {
    padding-top: 9px;
    padding-bottom: 5px;
}
.login-top {
    width: 505px;
    display: block;
    /* margin: 0 auto; */
    background: rgba(66,165,245,1);
    padding-left: 25px;
    padding-right: 27px;
    position: fixed;
    top: 0px;
    padding-top: 57px;
}

.login-ic {
    background: rgba(255, 255, 255, 0.32);
    margin-bottom: 4px;
    padding: 5px;
}
nav {
    height: 50px;
    background: #fff;
    z-index: 61;
    position: fixed;
    width: 100%;
    border-radius: 2px;
}
.nav-holder {
    padding: 11px 31px 6px 36px;
    font-size: larger;
    font-weight: 500;
}
a.brand {
    color: rgba(96,125,139,1);
    text-decoration: none;
}
a.brand:hover, a.brand:focus {
    color: rgba(96,125,139,1);
    text-decoration: none;
}
a.signin.btn.btn-info {
    background-color: rgba(2,136,209,1);
    border-color: rgba(2,136,209,1);
}
.log-intro{
color: #fff;
font-weight: 800;
text-transform: uppercase;
text-align: center;
margin-bottom: 10px;
}
p.copy {
    color: #fff;
    font-size: 1em;
    text-align: center;
    margin-top: 2em;
    margin-bottom: 2em;
}

.account-price {
    background: #fff;
    width: 37%;
    position: fixed;
    left: 40.7%;
    top: 26%;
    height: 46%;
    border-top-color: rgba(21,101,192,1);
    border-top-style: solid;
    border-top-width: 16px;
}
ul.list-group {
    border: none;
}
li.list-group-item {
    border: none;
}
a.btn.btn-block.btn-info.btn-lg {
    background: #2962ff;
}
button.btn.btn-default.btn-info.btn-lg {
    background-color: #2962ff;
    border-color: #2962ff;
}
.change-plan {
    position: fixed;
    top: 80%;
    left: 85%;
}
	</style>
  <style media="screen">
  * {
  	box-sizing: border-box;
  }

  /* Create three columns of equal width */
  .columns {
  	float: left;
  	width: 33.3%;
  	padding: 8px;
  }

  /* Style the list */
  .price {
  	list-style-type: none;
  	border: 1px solid #eee;
  	margin: 0;
  	padding: 0;
  	-webkit-transition: 0.3s;
  	transition: 0.3s;
  }

  /* Add shadows on hover */
  .price:hover {
  	box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
  }

  /* Pricing header */
  .price .header {
  	background-color: #111;
  	color: white;
  	font-size: 25px;
  }

  /* List items */
  .price li {
  	border-bottom: 1px solid #eee;
  	padding: 20px;
  	text-align: center;
  }

  /* Grey list item */
  .price .grey {
  	background-color: #eee;
  	font-size: 20px;
  }

  /* The "Sign Up" button */
  .button {
  	background-color: #4CAF50;
  	border: none;
  	color: white;
  	padding: 10px 25px;
  	text-align: center;
  	text-decoration: none;
  	font-size: 18px;
  }

  /* Change the width of the three columns to 100%
  (to stack horizontally on small screens) */
  @media only screen and (max-width: 600px) {
  	.columns {
  			width: 100%;
  	}
  }
  </style>
<!--header start here-->
<nav>
<div class="nav-holder">
  <a href="#brand" class="brand">Ski Learn</a>

  <div class="pull-right">
    <a href="#signin" class="signin btn btn-info">Sign In</a>
  </div>
</div>
</nav>
<div class="login-form">
			<div class="login-top">
        <h3 class="log-intro">Create a Free ski Account</h3>
			<form>
				<div class="login-ic">
					<i ></i>
					<input type="text"  value="Firstname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Firstname';}"/>
					<div class="clear"> </div>
				</div>
				<div class="login-ic">
					<i ></i>
					<input type="text"  value="Lastname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Lastname';}"/>
					<div class="clear"> </div>
				</div>
				<div class="login-ic">
					<i ></i>
					<input type="text"  value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"/>
					<div class="clear"> </div>
				</div>
				<div class="login-ic">
					<i class="icon"></i>
					<input type="text"  value="User name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}"/>
					<div class="clear"> </div>
				</div>
				<div class="login-ic">
					<i class="icon"></i>
					<input type="password"  value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
					<div class="clear"> </div>
				</div>
				<a class="btn btn-block btn-lg btn-info">
    <span class="fa fa-usd"></span>  Basic Account (Upgrade)
  </a>
				<div class="log-bwn" >
					<input type="submit"  value="Sign Up" >
				</div>

				</form>
						<a class="btn btn-lg btn-block btn-social btn-google">
    <span class="fa fa-google"></span> Sign up with Google
  </a>
  		<a class="btn btn-block btn-lg btn-social btn-facebook">
    <span class="fa fa-facebook"></span> Sign up with Facebook
  </a>
							<p class="copy">© 2016 Ski-Learn <a href="#terms" target="_blank">Terms & condition</a></p>
			</div>

</div>
<div class="account-price">
<ul class="list-group">
  <li class="list-group-item"><a href="/basic" class="btn btn-block btn-info btn-lg">
Basic (Free With Supported Contents)
  </a></li>
  <li class="list-group-item"><a href="/pro" class="btn btn-block btn-info btn-lg">
Pro ($15 per year)
  </a></li>
  <li class="list-group-item"><a href="/premium" class="btn btn-block btn-info btn-lg">
premium ($25 per year)
  </a></li>
</ul>
</div>
<div class="change-plan">
  <button type="button" class="btn btn-default btn-info btn-lg">
  Change Plan
  </button>
</div>
<!--header start here-->
</body>
</html>
