@extends('templates.default')
@section('content')
     <script src="{{ URL::asset('/src/vendor/listjs/list.min.js') }}" ></script>

<style type="text/css">
.col-md-8.col-md-push-2 {
    background: #fff;
}
li.list-group-item.li {
    border-bottom: transparent;
    border-left: transparent;
    border-right: transparent;
    color: #039be5;
}
.list-flow {
    overflow-y: scroll;
    height: 400px;
}
</style>
<div class="more-pad"></div>
<div class="col-md-8 col-md-push-2">

		 			
			<div class="col-md-8 col-md-push-2" style="padding-left:0;">
				<div class="form-group">
	   			<input type="text" placeholder="Search Label" class="form-control search" />
			</div>
			</div>

	<div class="col-md-8 col-md-push-2">
		
<form method="post" action="/post_label" id="new_label">
		  <input type="hidden" name="_token" value="{{ Session::token() }}">

<div class="input-group has-info">
		
		<input type="text" name="label" class="form-control" placeholder="Add New Label">
		<span class="input-group-addon">
		<button class="btn btn-info btn-raised btn-fab btn-fab-mini btn-round post-label">
	<i class="material-icons">send</i>
</button>
		</span>
	</div>
	
		</form>
	
		<div class="ajax_point">
<img src="/user-tools/load-ani/ajax-loader.gif">

		</div>

		</div>

</div>


<style media="screen">
 .mfb-component__button--main:hover, .mfb-component__button--main:focus {
  color: #fff;
}
.mfb-component__button--child:hover, .mfb-component__button--child:focus {
 color: #fff;
}
</style>
<ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">


      <li class="mfb-component__wrap">
        <a data-toggle="modal" data-target="#myModal" href="#" class="mfb-component__button--main" data-mfb-label="Add New Event">
          <i class="mfb-component__main-icon--resting "><i class="material-icons">loyalty</i></i>
            <div class="point"></div>
          <i class="mfb-component__main-icon--active "><i class="material-icons">send</i></i>
        </a>
        <ul class="mfb-component__list">
          <li>
           	<a href="feedback/calendar" data-mfb-label="Give us Feedback" class="mfb-component__button--child">
              <i class="mfb-component__child-icon "><i class="fa fa-reply"></i></i>
            </a>
          </li>

        </ul>
      </li>
    </ul>

    <script type="text/javascript">
$(function() {
          $(".ajax_point").load('label_list');
// var formMessages = $('#activate_ai');

var form = $('#new_label');
      

    $(".post-label").click(function(e) {
         e.preventDefault();
          $(".ski_loader").css("display", "block");

       SnackBar.show({
      text:"Saving Label",
      pos: 'bottom-center',
      backgroundColor: '#039be5',
      textColor: '#fff'
      });

        var formData = $(form).serialize();
    $.ajax({
    type: 'POST',
    url: $(form).attr('action'),
    data: formData
    })
    .done(function(response) {
    	 $(".ajax_point").load('label_list');
 SnackBar.show({
      text:"label saved",
      pos: 'bottom-center',
      backgroundColor: '#039be5',
      textColor: '#fff'
      });
       $(".wel-cal").css("display", "none");


    })
    .fail(function(data) {
      SnackBar.show({
      text:"Opps there seems to be an error",
      pos: 'top-center',
      backgroundColor: '#e53935'
      });
      $(".adela_loader").css("display", "none");

        });
    });

//
        });
   
</script>
@stop