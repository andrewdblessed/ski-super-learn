@extends('templates.default')
@section('content')
<style media="screen">
body{
  overflow-x: hidden;
}
nav.navbar.navbar-default.navbar-fixed-top {
  background-color: rgb(0,137,123);
}
.more-pad{
  padding-top: 20px;
}
.card-raised.card{
padding-top: 40px;
background-color: rgb(0,137,123);
}
.card.card-raised.cardback{
    width: 260px;
    height: 260px;
    background-image: url(/images/o.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}
.card-body.com_data {
    background-color: #fff;
    padding: 0;
    margin-top: 62%;
    height: 35%;
}
h6.tit_h {
font-weight: 800;
}
a.btn.btn-fab.btn-raised.btn-success.fab_com {
    margin-top: -14%;
    float: right;
}
span.recom {
    font-weight: bold;
}
.num_member.col-md-6 {
    font-weight: bold;
}
.col-md-2.col-md-push-0 {
    margin-bottom: 24px;
}
.add_cont {
    text-align: center;
    padding: 27%;
}
.update_profile {
    text-align: center;
    padding-top: 15%;
}
h1.gre {
    text-transform: uppercase;
}
button.btn.btn-vid-bar {
    padding: 16px 70px 16px 29px;
}
.card.card-raised.vid_bar {
    width: 16%;
    position: fixed;
    height: 89%;
    margin-left: -18px;
    z-index: 10;
}
button.btn.btn-info.btn-vid-bar.btn-raised {
    background-color: rgb(0,77,64);
}
.col-md-3 {
    width: 21%;
}

</style>
<div class="container-fluid more-pad ">
  <!-- // NOTE: Start of sidebar  -->
  <div class="col-md-2 card card-raised vid_bar">
    <button class="btn btn-info btn-vid-bar btn-raised" type="button" name="button">  My Community </button>
   <button class="btn btn-info btn-vid-bar btn-raised" type="button" name="button">  view all </button>
   <button class="btn btn-info btn-vid-bar btn-raised" type="button" name="button">  Recommended </button>
     <button class="btn btn-info btn-vid-bar btn-raised" type="button" name="button"> Art</button>
     <button class="btn btn-info btn-vid-bar btn-raised" type="button" name="button">  Science </button>
     <button class="btn btn-info btn-vid-bar btn-raised" type="button" name="button">  Gain Skill </button>
</div> <!-- // NOTE: end of sidebar  -->

<div class="col-md-12 col-md-push-2">
      @if(2+2==4)
    <!--REVIEW:community area starts//thepianoguys//  -->
<div class="col-md-3">
      <div class="card card-raised cardback">
        <div class="card-body com_data">
            <a href="#join" class="btn btn-success btn-raised btn-fab fab_com"><i class="material-icons">group_add</i></a>
        <div class="com_tit col-md-6">
            <h6 class="tit_h">
              Biology
            </h6>
            <span class="recom">Recommended</span>
        </div>
        <div class="num_member col-md-6">
            <span class="mem">Members</span>
          <span class="num">123,456</span>
        </div>
        </div>
    </div>
</div>

<div class="col-md-3">
  <div class="card card-raised cardback">
    <div class="card-body com_data">
        <a href="#join" class="btn btn-success btn-raised btn-fab fab_com"><i class="material-icons">group_add</i></a>
    <div class="com_tit col-md-6">
        <h6 class="tit_h">
          Biology
        </h6>
        <span class="recom">Recommended</span>
    </div>
    <div class="num_member col-md-6">
        <span class="mem">Members</span>
      <span class="num">123,456</span>
    </div>
    </div>
</div>
</div>
<div class="col-md-3 ">
  <div class="card card-raised cardback" style="background-color: #fff;
    background-image: none;">
    <div class="add_cont">
<button class="btn btn-fab btn-success" data-toggle="modal" data-target="#suggest_com">
<i class="material-icons">add_circle</i>
</button>
<h5 style="    color: rgb(0,121,107);
">Suggest A Study Group</h5>
</div>
</div>
</div>

<!-- Modal Core -->
<div class="modal fade" id="suggest_com" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Suggest A Study group</h4>
      </div>
      <form class="" action="index.php" method="post">
      <div class="modal-body">
        <p>
          Study groups take About 4 to 5 days to be Approved.
        </p>
          <div class="form-group">
    	<input type="text" value="" name="sug_name" placeholder="Name of Sugested Group" class="form-control" />
	</div>
  <textarea class="form-control" name="sug_des" placeholder="Tell us what your group will be about" rows="3"></textarea>
<p>
  public
</p>
  <div class="togglebutton">
  	<label>
      	<input type="checkbox" checked="">
  		Will be visible to all
  	</label>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-raised" data-dismiss="modal">CLOSE</button>
        <button type="submit" class="btn btn-info btn-raised">DONE</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!--REVIEW:add community//thepianoguys// END// -->

@elseif(2+2==23)
<div class="update_profile">
<h1 class="gre">Hey {{Auth::user()-> getFirstNameorUsername() }}</h1>
<h4>Inother for us to provide you with the right
  study group you will need to complete your profile.</h4>
  <a href="{{ route('profile.index', ['username' => Auth::user()->username]) }}" class="btn btn-success btn-raised">Complete profile</a>
</div>

@endif


</div>
</div>
@stop
