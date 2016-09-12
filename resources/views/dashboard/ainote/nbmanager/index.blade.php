@extends('templates.default')
@section('content')
<style media="screen">
hr{
  margin: 0px;
}
body{
  background: white;
}
.ski-user-image{
    width: 217px;
    height: 217px;
}
.user-data-text{
    font-weight: 600;
    font-size: large;
}
.user-add-pic {
    padding-top: 172px;
    position: absolute;
    padding-left: 86px;
    text-decoration: underline;
    padding-right: 65px;
}
.togglebutton label input[type=checkbox]:checked + .toggle {
    background-color: #03a9f4;
}
.togglebutton label input[type=checkbox]:checked + .toggle:after {
    border-color: #03a9f4;
}
.togglebutton label input[type=checkbox]:checked + .toggle:active:after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(100,181,246, 0.1);
}
.bg_imgs{
  width: 112px;
}
</style>
<div class="more-pad">

</div>
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-3">
  <img src="/user-tools/Ainote_setting/Ainote-3.svg" class="ski-user-image" alt="" />
<hr>
<h5 class="text-muted">Ainote updates</h5>
<br>
<div class="alert alert-info">
Added seasonal Ainote background
</div>
  <br>
</div>

<div class="col-md-5">
<h4 class="user-data-text">Ainote Setup</h4>
<br>
<hr>
<div class="">

  <div class="col-md-6">
<h4>Ainote Background</h4>
  </div>
  <div class="col-md-12">
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a class="thumbnail" href="#">
                   <img class="img-responsive"  src="/user-tools/Ainote-background/nb_3.png" longdesc="this i s shds" id="seasonal"
                   alt="">
                    <h4>Season</h4>
               </a>
           </div>
           <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a class="thumbnail" href="#">
                   <img class="img-responsive" src="/user-tools/Ainote-background/nb_14.png" id="animal" alt="">
                   <h4>animal</h4>
               </a>
           </div>
         </div>

  </div>
  <div class="col-md-6">
    <div class="togglebutton">
	<label>
    	<input type="checkbox" id="animalChecked">
	</label>
</div>

<div class="togglebutton">
<label>
  <input type="checkbox" id="seasonalChecked">
</label>
</div>
  </div>
</div>
</div>
<div class="col-md-3">
task to complete for nex level
</div>
</div>
</div>

<script type="text/javascript">
$(function() {
$('#animal').on('click', function(){
      var $$ = $(this)
      if( !$$.is('.checked')){
          $$.addClass('checked');
          $('#animalChecked').prop('checked', true);
      } else {
          $$.removeClass('checked');
          $('#animalChecked').prop('checked', false);
      }
  });

  $('#seasonal').on('click', function(){
        var $$ = $(this)
        if( !$$.is('.checked')){
            $$.addClass('checked');
            $('#seasonalChecked').prop('checked', true);
        } else {
            $$.removeClass('checked');
            $('#seasonalChecked').prop('checked', false);
        }
    });
});
</script>
@stop
