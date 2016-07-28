@extends('templates.default')
@section('content')
<style media="screen">
.more-pad{
  padding-top: 30px;
}
.wel-text {
    text-align: center;
    color: rgb(3,169,244);
    font-size: larger;
}
.col-md-12.main_text {
    text-align: center;
    color: rgb(3,169,244);
}
img.vid_img {
    width: 124px;
    height: 124px;
}
.vid_des {
    top: 34%;
    position: absolute;
    left: 27%;
    color: #fff;
    font-size: x-large;
}
a.btn.btn-info.btn-raised.btn-fab.fab_play {
    margin-top: 6%;
    position: absolute;
    margin-left: 5%;
}
a.link_def:hover {
    text-decoration: none;
}
.card.card-raised.vid_main {
    background-color: rgb(3,169,244);
}
.fix_nav {
    position: fixed;
    z-index: 10;
    top: 59%;
    left: 85%;
    padding: 6%;
}
</style>
<div class="container more-pad">

<!--NOTE: fixed page navigation  -->
<div class="fix_nav">
<button type="button" class="btn btn-info btn-raised btn-fab">></button>
<button type="button" class="btn btn-info btn-raised btn-fab btn-lg">></button>
<button type="button" class="btn btn-info btn-raised btn-fab">></button>

</div>

<div class="col-md-10 col-md-push-1">
    <div class="card card-raised">
      <div class="wel-text">
        <h4>Manage your viewed,whishlist and recomendations</h4>
        </div>

        <!-- NOTE Viewed Videos start here-->
        <div class="viewed_vid">
          <div class="col-md-12 main_text">
        <h3>    Viewed Videos</h3>
          </div>
        <div class="col-md-10 col-md-push-1">
          <div class="card card-raised vid_main">
            <a href="#join" class="btn btn-info btn-raised btn-fab fab_play"><i class="material-icons">play_circle_outline</i></a>
            <a class="link_def" href="#">
            <img src="/images/b.jpg" alt="video title" class="img-responsive vid_img" />
            <div class="vid_des">
              <h4>Expan Your Skills on Maths</h4>
            </div>
            </a>
          </div>
        </div>
      </div>
<!-- NOTE Viewed Videos end here-->
<!-- NOTE wishlist Videos start here-->
      <div class="viewed_vid">
        <div class="col-md-12 main_text">
      <h3>    Wish-List</h3>
        </div>
      <div class="col-md-10 col-md-push-1">
        <div class="card card-raised vid_main">
          <a href="#join" class="btn btn-info btn-raised btn-fab fab_play"><i class="material-icons">play_circle_outline</i></a>
          <a class="link_def" href="#">
          <img src="/images/b.jpg" alt="video title" class="img-responsive vid_img" />
          <div class="vid_des">
            <h4>Expan Your Skills on Maths</h4>
          </div>
          </a>
        </div>
      </div>
    </div>
    <!-- NOTE wishlist Videos end here-->

    <!-- NOTE wishlist Videos start here-->
          <div class="viewed_vid">
            <div class="col-md-12 main_text">
          <h3>    Recomended</h3>
            </div>
          <div class="col-md-10 col-md-push-1">
            <div class="card card-raised vid_main">
              <a href="#join" class="btn btn-info btn-raised btn-fab fab_play"><i class="material-icons">play_circle_outline</i></a>
              <a class="link_def" href="#">
              <img src="/images/b.jpg" alt="video title" class="img-responsive vid_img" />
              <div class="vid_des">
                <h4>Expan Your Skills on Maths</h4>
              </div>
              </a>
            </div>
          </div>
        </div>
        <!-- NOTE wishlist Videos end here-->






</div>
</div>
</div>

@stop
