@extends('templates.default')
@section('content')
<style media="screen">
body{
  overflow-x: hidden;
}
.more-pad{
  padding-top: 30px;
}
.card.card-raised.sec_bar {
    width: 16%;
    position: fixed;
    height: 89%;
    margin-left: -18px;
    z-index: 10;
}

.card-raised.card{
padding-top: 40px;
}
.col-md-3 {
    width: 21%;
}
.card.card-raised.cardback {
    width: 260px;
    height: 276px;
    background-image: url(/images/o.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    margin-bottom: 20px;
}
.card-body.vid_data {
    background-color: #fff;
    margin-top: 20%;
    height: 27%;
    padding: 5px 0 0 0;
}
.tit_h {
font-weight: 800;
    color: rgb(55,71,79);
}
.vi_up_na{
  font-weight: 800;
      color: rgb(55,71,79);
}
a.btn.btn-fab.btn-raised.btn-success.fab_com {
    margin-top: 17%;
    margin-left: 39%;
    background-color: #fff;
    color: rgb(84,110,122);
}
span.recom {
    font-weight: bold;
}
span.occ, .vi_price {
    color: rgb(144,164,174);
}
.num_member.col-md-6 {
    font-weight: bold;
        color: rgb(55,71,79);
}
.col-md-2.col-md-push-0 {
    margin-bottom: 24px;
}
button.btn.btn-vid-bar {
    padding: 16px 70px 16px 29px;
}
a:hover {
    text-decoration: none;
}

.lib_switch {
    margin-top: -25px;
    z-index: 1300;
    position: fixed;
}
.vid_switch {
    margin-top: -25px;
    z-index: 1300;
    position: fixed;
}
button.btn.btn-primary.btn-raised.btn-fab.btn-round {
    background-color: #fff;
    color: #607d8b;
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
</style>

  <!-- // NOTE: Start of sidebar  -->
  <div class="container-fluid more-pad ">
   <div class="col-md-2 card card-raised sec_bar">
     Nothing to show here
   </div>
 <div class="col-md-1 col-md-push-11 lib_switch vid_switch">
   <button class="btn btn-primary btn-raised btn-fab btn-round">
<i class="material-icons lib_icon animated fadeIn">local_library</i>
<i class="material-icons vid_icon animated fadeIn" style="display:none;">video_library</i>
   </button>
 </div>
<div class="col-md-12 col-md-push-2">
  <!--REVIEW:VIDEO / LIBRARY area starts//thepianoguys//  -->
<!--NOTE:// LOADING VIDEO WITH JAVASCRIPT-->
<div class="lib_point">

</div>

  <!-- The SEARCH overlay -->
<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

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

<div class="search_btn">
  <button class="btn btn-info btn-fab sea-hov" onclick="openNav()" ><i class="material-icons">search</i></button>
</div>

<script type="text/javascript">
/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
//NOTE:// the overlay search ends here

$(function() {
//NOTE
  $(".lib_point").load("{{route('vidlib.vidload')}}");





$("#newnote").click(function(){
    $(".ski_loader").css("display", "block");
    $(".ajax_point").load("{{route('dashboard.notes.newnote')}}");
    $.ajax({
        success:function(re){
        SnackBar.show({text:'Create New Note'});
          $(".ski_loader").css("display", "none");
}
  });
});



});

</script>

  <!--REVIEW:community area starts//thepianoguys// END// -->

</div>
</div>
@stop
