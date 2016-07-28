@extends('templates.default')
@section('content')

<style media="screen">

.note {
float:left;
width: 400px;
background: gray;
margin: 1em;
font-size:18px;
color: rgba(0,0,0, .7);
font-family: 'open sans';
line-height: 24px;
}

.title {
text-transform: uppercase;
background: rgba(255,255,255,.05);
padding: .5em 1em;
font-weight: bold;
}

p {
padding: 0 1em;
}

.default {
    background-color: #9e9e9e;
}
.label-1 {
    background-color: #03a9f4;
}
.label-2 {
    background-color: #fbc02d;
}
.label-3 {
      background-color: #f44336;
}
.label-4 {
background-color: #5cb85c;
}
.label-5{
  background-color: #9c27b0;
}
body{
  overflow-x: hidden;
}
/*.more-pad{
  padding-top: 34px;
}*/
.card.card-raised.label_bar {
    width: 16%;
    position: fixed;
    height: 89%;
    margin-left: -18px;
    z-index: 10;
    overflow-y: scroll;
    overflow-x: hidden;
}

.card-raised.card{
padding-top: 40px;
}
..card.card-raised.cardback {
    width: 311px;
    height: 303px;
    margin-bottom: 20px;
}
.card-body.note_data {
    height: 72%;
    overflow: hidden;
    text-align: justify;
    width: 100%;
    color: #fff;
    font-weight: 900;
    font-family: serif;
    font-size: 17px;
    padding: 0px;
}
button.btn.btn-vid-bar {
    padding: 16px 70px 16px 29px;
}
button.btn.btn-fab.btn-raised.btn-info.fab_note {
    margin-top: -20%;
    float: right;
    z-index: 100;
}
.card-title {
    text-decoration: underline;
    color: #fff;
    text-transform: uppercase;
    font-size: x-large;
    margin-top: -13%;
    font-weight: 900;
}

</style>
<div class="container-fluid more-pad">

<!--REVIEW:notes area starts//thepianoguys//  -->

<div class="ajax_point">
  @if (!$note_call->count())
  <div class="col-md-12 col-md-push-2">
<div class="e animated bounceInDown ">
  <i class="fa fo fa-paper-plane"></i>
<h3 class="em">Hello {{Auth::user()-> getFirstNameorUsername() }} You Have no Notes Yet</h3>
<h4 class="emp">Here are a few things you can do</h4>
<ul class="empt">
  <li>click the pencil to Create a new note</li>
  <li>Hover the pencil and click on the audio icon to Convert a Audio file to Text</li>
  <li>Hover the pencil and click on the video icon to Extract a text from A video</li>
  <li>Hover the pencil and click on the mic icon Create Notes with Adela</li>
</ul>
</div>
</div>
    @else
    <style media="screen">
    .add-bar-top {
      position: fixed;
      top: 70%;
    }
    .container-fluid.more-pad {
        padding-left: 0;
        padding-right: 0;
    }
    .container-fluid.more-pad.card.card-raised {
        background: rgb(33,150,243);
        /*padding-top: 23px;*/
    }
    ul.nav.nav-tabs.nav-tab-info {
      /*padding-left: 12%;*/
      background: rgb(33,150,243);
    }
    .nav-tabs>li {
        margin-left: 40px;
        margin-right: 22px;
    }

    div.m-p-tool {
        float: right;
    }
    .upload-f-m {
        font-size: -webkit-xxx-large;
    }
    .m-p-empty {
        text-align: center;
        color: rgb(120,144,156);
        font-family: sans-serif;
    }

    .card.card-raised.flex-add {
        padding: 0 3% 3% 3%;
            margin-bottom: 20px;
                color: #fff;
    }
span.label.f-label {
    border-radius: 0;
    margin-left: 8%;
    padding: 3%;
    box-shadow: 0 3px 1px -17px rgba(0, 0, 0, 0.56), 0 8px 2px -5px rgba(0, 0, 0, 0.2);
}
span.edit-label {
    color: rgb(69,90,100);
    font-size: 1.3em;
    float: right;
    padding-top: 6%;
    padding-right: 5%;
}
.input-group.add-nt {
    width: 87%;
    margin-left: 2%;
    margin-bottom: 6px;
}
.u-done {
    padding-top: 35px;
    /*position: absolute;*/
}

button.btn.btn-fab.btn-raised.se-ad {
    left: 100%;
    position: absolute;
    top: 24%;
    z-index: 11;
}
.task-empty {
    text-align: center;
    padding-bottom: 11px;
}
.text-default{
  color: rgb(120,144,156);
}
    </style>

<div class="ajax_point">

</div>

    <!--NOTE:// fixed add bar  -->
  <div class="col-md-1 col-md-push-11 add-bar-top">
       <button class="btn btn-info btn-raised btn-fab" id="newnote">
      <i class="material-icons">add_circle</i>
      </button>
    </div>


   </div>
    <script type="text/javascript">
    $(document).ready(function(){
        $(".ajax_point").load("{{route('dashboard.notes.notesload')}}");
          $(".ski_loader").css("display", "none");
    });
    </script>
    @endif

<!-- remodal new note  -->

<script>
$(function() {
//NOTE
$(".goback").click(function(){
    $(".ski_loader").css("display", "block");
    $(".ajax_point").load("{{route('dashboard.notes.notesload')}}");
    $.ajax({
        success:function(re){
        SnackBar.show({text:'All notes'});
          $(".ski_loader").css("display", "none");
}
  });
});

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

<script src="//cdn.jsdelivr.net/medium-editor/latest/js/medium-editor.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/medium-editor/latest/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">

</div><!--REVIEW:notes ends //thepianoguys//  -->

@stop
