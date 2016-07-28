@extends('templates.default')
@section('content')
<!--REVIEW:// TESTING THE DB OF ADELA WITH VARIOUS DATAS  -->

<!--REVIEW:// search google  -->


<style media="screen">
  .say{
    color: rgb(77, 159, 247);
  }
    .ce{
      position: fixed;
      padding-top: 45%;
      width: 60%;
      /*z-index: 10;*/

    }
.ince{
  width: 88%;
      height: 40px;
      border-radius: 50px;
      background-color: cadetblue;
      color: ivory;
      font-size: large;
      padding-left: 50px;
}
.rec{
  margin-top: -70px;
z-index: 1;
height: 50px;
width: 50px;
text-align: end;
background-color: #fff;
}
.fam{font-size:1em;}
.cel{position: relative;
    overflow: overlay;
    max-height: 600px;
    padding-right: 24px;}
    .celx{
      font-size: 4em;
         padding-top: 4%;
         color: cadetblue;
         text-align: center;
    }
    .ai_network_error{
      margin-right: 5%;
text-align: justify;
/*display:none;*/
}


.form{
  display:none;
  color:#fff;
}
.ai_tags{
  background-color: crimson;
padding: 8%;
margin: 10%;
}
.aitagdiv{
      margin: 1%;
}
.not_found{
      margin-top: 5%;
}
.more-pad{
  padding-top: 20px;
}
.sidebar {
    width: 80px;
    height: 42.5em;
    position: fixed;
    z-index: 10;
    margin-left: -22px;
    margin-top: -8px;
    padding: 1px;
}
.icon-bar {
    padding: 22 20 0;
    font-size: 2em;
}
.sidebar-iconA{
  margin:0px 18px 0 18px;
}

.icon-color{
  color: #95A5A6;
}

.chat-contact {
    width: 278px;
    height: 40em;
    overflow-x: hidden;
    overflow-y: scroll;
    max-height: 40em;
    position: fixed;
}
.c-c-head {
    color: #9B59B6;
    padding: 20px 20px 0px 20px;
}
.h4-head {
    font-weight: 900;
    font-family: monospace;
}
.user-c-img {
    width: 45px;
    height: 45px;
    border-radius: 50px;
    float: left;
    margin: 10px;
}
.navbar-unread{
    position: absolute;
    left: 41px;
    top: 105px;
    z-index: 10;
    width: 20px;
    height: 20px;
    font-family: Lato,Helvetica,Arial,sans-serif;
    font-size: 11px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    background-color: #3498DB;
    border-radius: 50%;
    padding-top: 4px;
}
.chat-online {
    position: absolute;
    right: 8px;
    top: 105px;
    z-index: 10;
    width: 9px;
    height: 9px;
    background-color: #1ABC9C;
    border-radius: 50%;
}
.user-c-name{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
    font-weight: 700;
    color: #34495E;
}
.user-c-mes {
    color: #95A5A6;
    height: 22px;
    overflow: hidden;
    word-break: break-all;
}
.chat-box-ext {
    height: 35em;
    max-width: 35em;
    overflow-x: hidden;
    overflow-y: scroll;
}
nav.navbar.navbar-default.navbar-fixed-bottom {
    width: 37em;
    margin-left: 31%;
    background-color: #fff;
    margin-bottom: 1.5555555%;
    height: 9%;
    border-radius: 3%;
}
.form-group.is-empty {
    margin-top: 15px;
}
.card .header-success {
    background: #fff;
}

.form-group.is-empty{
    margin: 0px;
}
.form-group{
  margin: 0px;
}
.ai_active{
  height: 50%;
}
.m-i-svg {
    width: 27%;
    padding-top: 5.5%;
}


/* The Overlay (background) */
.overlay {
    /* Height & width depends on how you want to reveal the overlay (see JS below) */
    height: 100%;
    width: 0;
    position: fixed; /* Stay in place */
    z-index: 100; /* Sit on top */
    left: 0;
    top: 0;
    background-color: rgb(3,169,244); /* Black fallback color */
    background-color: rgb(3,169,244,1); /* Black w/opacity */
    overflow-x: hidden; /* Disable horizontal scroll */
    transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
}

/* Position the content inside the overlay */
.overlay-content {
    position: relative;
    top: 25%; /* 25% from the top */
    width: 100%; /* 100% width */
    text-align: center; /* Centered text/links */
    margin-top: 30px; /* 30px top margin to avoid conflict with the close button on smaller screens */
}

/* The navigation links inside the overlay */
.overlay a {
    padding: 7% 9% 8px 8px;
    text-decoration: none;
    font-size: 36px;
    color: #fff;
    display: block;
    transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

/* Position the close button (top right corner) */
.closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px !important; /* Override the font-size specified earlier (36px) for all navigation links */
}

/* When the height of the screen is less than 450 pixels, change the font-size of the links and position the close button again, so they don't overlap */
@media screen and (max-height: 450px) {
    .overlay a {font-size: 20px}
    .closebtn {
        font-size: 40px !important;
        top: 15px;
        right: 35px;
    }
}
.search_btn {
    z-index: 1;
    position: fixed;
    top: 85%;
    left: 94%;
}
button.btn.btn-info.btn-fab.sea-hov:hover {
    background: rgb(2,119,189);
}
input.form-control.sear_input {
    color: #fff;
    font-size: xx-large;
}
.form-control{
  border:1px;

}
.ae {
    text-align: -webkit-center;
    color: #03a9f4;
}
.ai_help_sec {
    color: #fff;
}
.aires{
  text-align: justify;
}
.view_divider {
    border-right-style: groove;
    border-right-width: thick;
    padding-bottom: 18%;
    padding-top: 6%;
}
.main_view_height{
  height: 89%;
}
img.error_network {
width: 52px;
}
</style>
<div class="more-pad"></div>
<br>
<div class="container">
  <div class="row">
    <div class="card card-raised main_view_height">

    <div class="col-md-6 col-sm-6 view_divider">
  <div class="ai_network_error animated zoomIn" style="display:none;">
        <h5 class="text-center" >
        <img src="/src/adela/icons/radar.png" class="animated infinite fadeIn error_network" alt="">
          Hello {{Auth::user()-> getFirstNameorUsername() }}
          I Could not connect to the server
            </h5>
            <p class="text-info text-center">
            check your network and try again
            </p>
  </div>

<div class="ae">
  <img src="/svg/microphone.svg" alt="" class="m-i-svg" />
    <div class="aireq">
      <p>
        @{{airequest}}
      </p>
    </div>

</div>

  <div class="form-group">
    <input id="input" ng-model="airequest" placeholder="Enter Question And Press enter" class="form-control" />
  </div>


            <button class="btn btn-info btn-round btn-raised"  onclick="openMic()" id="rec">
  Use mic
    </button>
    <button class="btn btn-info btn-round btn-raised"  onclick="openHelp()">
What to ask
</button>

</div>
    <div class="col-md-6 col-sm-6">
      <div class="ai_loading_msg">
        <img src="/src/adela/icons/ufo.png" class="animated bounce infinite" alt="" />
      </div>
      <div class="adela_result">

        <div class="aires">
          <h3 class=text-muted>        Hello {{Auth::user()-> getFirstNameorUsername() }} here is what i could find
</h3>
          <h4 class="ai">


          </h4>
        </div>
      <div class="animated fadeIn not_found" >
            <p id="not_found">Hey, i Could not understand your request or am not allowed to do that...<br>try any of my advance Research methods </p>
            <div class="adv_opt">
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored">@{{Question}} Tags</button>
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored">uncover Wiki for @{{Question}}</button>
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored">Search the Google for @{{Question}}</button>
            </div>

         <div class="adela_user_query" style="display:none;">

               </div>
        </div>
            <p id="ai_null"></p>
        <div class="adela_blank"></div>

        </div>
    </div>
  </div>
  </div>
</div>



<!--NOTE: Hidden form  -->
<div class="notes_add" style="display:none;">
<!-- REVIEW: We place the gotten content here and make this form field invisible
this is for notes
 -->
 <form class="noteform" action="{{ route('notes.post')}}" method="post">
   <textarea class="ai2" type="text" name="title" ></textarea>
   <textarea class="ai" name="body" rows="8" cols="40">adela response</textarea>
   <input  type="text" name="subject_select" value="adela">
   <input  type="text" name="color" value="blue">

       <button class="savedb mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary">submit</button>
       <input type="hidden" name="_token" value="{{ Session::token() }}">
 </form>
</div>
<!-- The MIC overlay -->
<div id="myMic" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeMic()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
    <div class="container">

    <div class="col-md-8 col-md-push-2">

      <div class="input-group">
        <span class="input-group-addon"></span>
        <input type="text" class="form-control sear_input" placeholder="WHAT ARE TOU LOOKING FOR">

      </div>
    </div>
    </div>
  </div>
</div>

<!-- The HELP overlay -->
<div id="aiHelp" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeHelp()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
    <div class="container">

    <div class="col-md-8 col-md-push-2 ai_help_sec">
<h2>welcome AI to help section</h2>
<h3 class="text-warning"><b>What to ask</b></h3>
<h4>
  You can ask Adela questions Starting with:
  <br>
  What, who, Where, Define, Translate, Calculate, Convert
</h4>
<h3 class="text-warning"><b>What to do with answers</b></h3>
  <h4>You can save Adela answers as notes for future referece
</h4>
  <a href="#feedback" class="btn btn-success btn-raised btn-info">Request & FeedBack</a>
    </div>
    </div>
  </div>
</div>
<script type="text/javascript">
/* Open when someone clicks on the span element */
function openMic() {
    document.getElementById("myMic").style.width = "100%";
}
function openHelp() {
    document.getElementById("aiHelp").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeMic() {
    document.getElementById("myMic").style.width = "0%";
}
function closeHelp() {
    document.getElementById("aiHelp").style.width = "0%";
}
//NOTE:// the overlay search ends here

</script>
<!--TOOLTIP SECTION ENDS  -->
<script type="text/javascript">
$(function() {
  var form = $('.noteform');
  $("#save_note").click(function(e) {
    e.preventDefault();
    $(".ski_loader").css("display", "block");
    var formData = $(form).serialize();
    $.ajax({
      type: 'POST',
      url: $(form).attr('action'),
      data: formData
    })
    .done(function(response ) {
      SnackBar.show({text:'note Added'});
      $(".ski_loader").css("display", "none");

    })
    .fail(function(data) {
      SnackBar.show({
        text:"Opps there seems to be an error",
        pos: 'top-center',
        backgroundColor: '#e53935'
      });
      $(".ski_loader").css("display", "none");

    });
  });
});
</script>
@stop
