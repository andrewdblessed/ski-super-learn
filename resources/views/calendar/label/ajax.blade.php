  <ul class="list-group list list-flow">
    @foreach ($cal_label as $cal_label)
    <li class="list-group-item li">
    <h4 class="list-group-item-heading label_name">{{ $cal_label->label}}</h4>
<div class="collapse" id="labelcollapse{{$cal_label->id}}">
	<h5 class="text-warning">
		Changing this Label will not Effect your current Calendar Events
		<span Class="text-info">If you want a new label please use the add label field</span>
	</h5>
<form method="post" action="/update_label/{{ $cal_label->id}}" id="update_label">
		  <input type="hidden" name="_token" value="{{ Session::token() }}">

<div class="input-group has-info">
		
		<input type="text" name="label" class="form-control" value="{{ $cal_label->label}}">
		<span class="input-group-addon">
		<button class="btn btn-info btn-raised btn-fab btn-fab-mini btn-round pull_left update-label">
	<i class="material-icons">send</i>
</button>
		</span>
	</div>
	
		</form>
</div>
<button class="btn btn-danger delete-label{{$cal_label->id}} btn-raised btn-fab btn-fab-mini btn-round">
  <i class="material-icons">delete</i>
</button> 
<button data-toggle="collapse" data-target="#labelcollapse{{$cal_label->id}}" aria-expanded="false"
aria-controls="labelcollapse{{$cal_label->id}}"
 class="btn edit-label{{$cal_label->id}} btn-info btn-raised btn-fab btn-fab-mini btn-round">
  <i class="material-icons">edits</i>
</button> 

  </li>
    <script>
  $(function() {
        $(".delete-label{{$cal_label->id}}").click(function(e) {
          $(".ski_loader").css("display", "block");
          SnackBar.show({text:'deleting {{ $cal_label->label}}',
            pos: 'top-center',
           duration: '9000',
          });
        var  durl = "/deletelabel{{ $cal_label->id}}";
        $.ajax({
        type: 'GET',
        url: durl,
        })
        .done(function(response) {
          $(".ajax_point").load('label_list');
          SnackBar.show({text:'{{ $cal_label->label}} deleted',
            pos: 'top-center',
           duration: '9000',});
          console.log('Label deleted');
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
  // $(".edit-label{{$cal_label->id}}").click(function() {
		// 	$(".tog_update{{ $cal_label->id}}").css("display", "block");
  //       });

   });
   
</script>
    @endforeach
  </ul>

  <script>
  $(function() {

var options = {
  valueNames: [ 'label_name']
};
var labelList = new List('skisearch', options);
//

var form = $('#update_label');

       
    $(".update-label").click(function(e) {
         e.preventDefault();
          $(".ski_loader").css("display", "block");

       SnackBar.show({
      text:"Updateing Label",
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
      text:"label Updated",
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
        });
   
</script>

