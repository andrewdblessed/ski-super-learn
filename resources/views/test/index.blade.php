  @extends('templates.default')
  @section('content')


<!-- DEV SCRIPT AND STYLE NOT TO BE ADDED TO PRODUCTION -->
<STYLE TYPE="text/css">
/*DEV STYLE*/
button.btn.btn-info.btn-raised.btn-fab {
    position: fixed;
    top: 84%;
    left: 85%;
}
</STYLE>

<script> 
// DEV SCRIPT
$(document).ready(function() {
$('.button').click(function() { 
   SnackBar.show({text: 'Example notification text.'}); 
}); 
});
  
  </script>
<div class="more-pad"></div>

    <!-- display of dashboard for the student -->

    <div id="cal_point"></div>


<button class="button">r</button>
  @stop
