@extends('templates.default')
@section('content')
<script src="{{ URL::asset('/src/vendor/tinymce/tinymce.min.js') }}" ></script>
<style media="screen">
/*.load-notebooks{
overflow-y: scroll;
overflow-x: hidden;
max-height: 228px;
}*/
.nb-manage {
  margin-top: 12%;
  display: inline-block;
  float: left;
}
.modal .modal-dialog {
  margin-top: auto;
}
.modal-content .modal-header {
  border-bottom: none;
  padding-top: 10px;
  padding-right: 24px;
  padding-bottom: 0;
  padding-left: 24px;
}
.close-modal{
  position: relative;
  left: 94%;
}
/*NOTE LOADING THE OVERFLOWCSS*/
/* The Overlay (background) */
.overlay {
  height: 61%;
  width: 0;
  position: fixed;
  z-index: 100;
  left: 0;
  top: 0;
  background-color: rgb(3,169,244);
  background-color: rgb(3,169,244,1);
  overflow-x: hidden;
  transition: 0.5s;
  margin-left: 21%;
  margin-top: 7%;
  color: #fff;
}
/* Position the content inside the overlay */
.overlay-content {
  position: relative;
  top: 25%; /* 25% from the top */
  width: 100%; /* 100% width */
  text-align: center; /* Centered text/links */
  margin-top: 30px; /* 30px top margin to avoid conflict with the close button on smaller screens */
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
.closebtn:hover {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px !important;
  color: #fff;
  text-decoration: none;
}
.closebtn{
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px !important;
  color: #fff;
  text-decoration: none;
}
</style>

<style media="screen">
.card-raised.card{
padding-top: 40px;
}
.card.card-raised.cardback{
    width: 260px;
    height: 260px;
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
    width: 216px;
}
a.btn.btn-info.btn-raised.btn-fab.fab_com {
  margin-top: -14%;
    float: right;
}
span.recom {
    font-weight: bold;
        width: 216px;
}
.num_member.col-md-6 {
    font-weight: bold;
}
.col-md-2.col-md-push-0 {
    margin-bottom: 24px;
}
.add_cont:hover {
  text-decoration: none;
}
.add_cont {
    text-align: center;
    background-color: white;
    padding-top: 12px;
    padding-bottom: 2px;
    text-decoration: none;
    position: absolute;
    top: 73%;
    padding-left: 22%;
    padding-right: 33%;
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
/*.col-md-3 {
    width: 21%;
}*/
.list > .li {
  display:block;
  }
  .modal {
    margin-top: 15%;
}
.modal_nb_title{
    width: 69%;
    height: 37px;
    border-style: solid;
    border-color: #2196F3;
    font-weight: 800;
    font-size: x-large;
}
.modal_nb_des{
    width: 70%;
    height: 102px;
    border-style: solid;
    border-color: #2196F3;
    font-weight: 800;
    margin-top: 2%;
    border-width: medium;
}
.save_nb{
  float: left;
}
</style>
<div class="container-fluid more-pad">
  <div class="row">
    <div class="ajax_point">
      Loading Notebooks
      </div>
  </div>
</div>



<script type="text/javascript">
$(document).ready(function(){
        $(".ski_loader").css("display", "block");
    SnackBar.show({text:"Loading Notebooks",
    pos: 'bottom-center',
   duration: '9000',
 });
      $(".ajax_point").load("{{route('dashboard.notebook.allnotebook')}}");
      $(".ski_loader").css("display", "none");
});
</script>

<ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
      <li class="mfb-component__wrap">
        <a href="#" data-toggle="modal" data-target="#suggest_com"  id="btn-notebook"  class="mfb-component__button--main" data-mfb-label="New Notebook">
        <i class="mfb-component__main-icon--resting "><i class="fa fa-pencil"></i></i>
          <i class="mfb-component__main-icon--active "><i class="fa fa-plus"></i></i>
        </a>
        <ul class="mfb-component__list">
          <li>
            <a href="#/nbmanager/"  data-mfb-label="Manage Notebooks"
             class="mfb-component__button--child">
              <i class="mfb-component__child-icon "><i class="fa fa-bookmark-o"></i></i>
            </a>
          </li>
          <li>
            <a href="#/help" data-mfb-label="Help" class="mfb-component__button--child">
              <i class="mfb-component__child-icon "><i class="fa fa-question"></i></i>
            </a>
          </li>
          <li>
            <a href="#/feedback/" data-mfb-label="Give us Feedback" class="mfb-component__button--child">
              <i class="mfb-component__child-icon "><i class="fa fa-reply"></i></i>
            </a>
          </li>
        </ul>
      </li>
    </ul>
    <!-- Modal Core -->
<div class="modal animated fadeInUp" id="suggest_com" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">New NoteBok</h4>
      </div>

      <div class="modal-body">
         <p class="text-center">
          Create a new Notebook
        </p>
               <form class="" action="{{route('notebooks.post')}}" method="post" id="new_nb">
                <div class="text-center">
                      <br>
                  <input type="text"  placeholder="Notebook Name" name="notebook_title" class="modal_nb_title" />
                   <br>
                  <textarea  class="modal_nb_des " name="notebook_des" placeholder="Describe your notebook " rows="3"></textarea>
                </div>
                  <input type="hidden" name="notebook_bg" value="{{$bg_number}}">

      </div>
      <h5>Random Season cover is active <a href="/notebooks/manager">click to modify</a></h5>
      <div class="modal-footer">
        <button type="submit" class="btn btn-info btn-round btn-raised save_nb">
          Add Notebook
        </button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">

        <button type="button" class="btn btn-default btn-raised" data-dismiss="modal">CLOSE</button>
      </form>
      </div>
    </div>
  </div>
</div>

@stop
