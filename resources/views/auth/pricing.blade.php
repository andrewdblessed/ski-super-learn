  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="http://code.jboxcdn.com/0.3.2/jBox.min.js"></script>
<link href="http://code.jboxcdn.com/0.3.2/jBox.css" rel="stylesheet">
<style type="text/css">
.loading{
	z-index: 1000000000000;
}
</style>
<div class="loading" >I'm your content. Remember to set CSS display to none!
<h1>hello world</h1>
</div>
<!-- <script src="//fast.eager.io/zjA0V0k7lP.js"></script> -->
<script type="text/javascript">
$(document).ready(function() {
//the basic checkboxif

  var myModal = new jBox('Modal', {
    title: 'Grab an element',
    content: $('#grabMe')

});

  if (document.readyState === 'complete'){
  console.log("load complete");
}else{
   $(".loading").css("display", "block")
    //  $("body").css("display", "none")
      console.log("loading");
     // myModal.open();
 
}

var interval = setInterval(function () {
  if(document.readyState === 'loading'){
      console.log("load loading");
  }
  if(document.readyState === 'complete'){
      clearInterval(interval);
      // myModal.close();
    console.log("loading complete");
    $(".loading").css("display", "block")
  }
}, 100);

//the basic checkboxif
// if (document.readyState === 'complete'){
//  console.log("load complete");
// }else{
//  console.log("loading");
// }

});
    </script>
<!DOCTYPE HTML>
<html>
<head>
<title>Ski Learn Plans</title>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
<script src="//fast.eager.io/zjA0V0k7lP.js"></script>
 <link href="auth-assets/css/bootstrap.css" rel="stylesheet">
    <link href="auth-assets/css/font-awesome.css" rel="stylesheet">
    <link href="auth-assets/css/bootstrap-social.css" rel="stylesheet" >
    <link href="auth-assets/css/plans.css" rel="stylesheet" >

</head>
<body>

<!--header start here-->
<nav>
<div class="nav-holder">
  <a href="{{route('home')}}" class="brand">Ski Learn</a>

  <div class="pull-right">
    <a href="/signin" class="signin btn btn-info">Sign In</a>
		<a href="#download" class="signin btn btn-info">Get Desktop Beta</a>

  </div>
</div>
</nav>

<section>
<div class="col-md-6">
	<div class="intro-text">
		<h1 class="text-muted">Unlock the power of your educational Life With our mega plans</h1>
    <?php // REVIEW: test of paypal pro payment with eager.io ?>
    <!-- <div class="buy-pro"></div> -->
    <?php // XXX: test of paypal ends here ?>
  </div>
</div>
<div class="col-md-6">
<div class="premium-ads">
<img src="auth-assets/images/cup.png" class="p-ads-img" alt="" />
<span>Go for Gold</span>
<hr>
<h4>Experince Ski-Learn Full Features with pro and Premium Account</h4>

</div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-push-2 all-items">

			<div class="columns">
				<ul class="price">
					<li class="header basic">Basic<p>
						Free for Life
					</p>
					<h6>contains educative supported content</h6>

									<a href="/basic" class="btn signup">
										Sign Up
									</a>
					</li>
					<li><p>1 Gb Cloud Space</p></li>
					<li><p>Sync to Desktop</p></li>
					<li><p>Pdf,docx, doc, pptx,& txt files only</p></li>
					<li><p>Share Notes</p></li>
					<li><p>5 Notebooks</p></li>
					<li><p>Wikipidia Research Only</p></li>
					<li><p>Ai-Notes (Disabled)</p></li>
					<li><p>Adela Notes (Disabled)</p></li>
					<li><p>Save Research results to Notes</p></li>
					<li><p>Full Functionality</p></li>
					<li class="basic">
						<a href="/basic" class="btn signup">
										Sign Up
									</a>
				</li>
				</ul>
			</div>

			<div class="columns">
				<ul class="price">
					<li class="header pro">Pro<p>
						$15/billed Yearly
					</p>
					<h6>or $1.99 per month</h6>

									<a  href="/pro" class="btn signup">
										Sign Up
									</a>
					</li>
					<li><p>1 Gb Cloud Space</p></li>
					<li><p>Sync to Desktop</p></li>
					<li><p>Pdf,docx, doc, pptx,& txt files only</p></li>
					<li><p>Share Notes</p></li>
					<li><p>5 Notebooks</p></li>
					<li><p>Wikipidia Research Only</p></li>
					<li><p>Ai-Notes (Disabled)</p></li>
					<li><p>Adela Notes (Disabled)</p></li>
					<li><p>Save Research results to Notes</p></li>
					<li><p>Full Functionality</p></li>
					<li class="pro">
						<a href="/pro"  class="btn signup">
										Sign Up
									</a>
				</li>
				</ul>
			</div>

			<div class="columns">
				<ul class="price">
					<li class="header premium">Premium<p>
						$25/billed Yearly
					</p>
					<h6>or $2.99 per month</h6>
									<a href="/premium" class="btn signup">
										Sign Up
									</a>
					</li>
					<li><p>1 Gb Cloud Space</p></li>
					<li><p>Sync to Desktop</p></li>
					<li><p>Pdf,docx, doc, pptx,& txt files only</p></li>
					<li><p>Share Notes</p></li>
					<li><p>5 Notebooks</p></li>
					<li><p>Wikipidia Research Only</p></li>
					<li><p>Ai-Notes (Disabled)</p></li>
					<li><p>Adela Notes (Disabled)</p></li>
					<li><p>Save Research results to Notes</p></li>
					<li><p>Full Functionality</p></li>
					<li class="premium">
						<a href="/premium" class="btn signup">
										Sign Up
									</a>
				</li>
				</ul>
			</div>

    </div>
  </div>
</div>
<div class="slide1">
</div>
</section>

<!--header start here-->
</body>
</html>
