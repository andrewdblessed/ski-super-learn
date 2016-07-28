{{--
<!-- REVIEW: we use the signin to show flash alerts by
calling the varios scripts when needed from the
controller and our site -->
--}}

@if (Session::has('signin'))
<!-- XXX: Auth   -->
<script>
$(document).ready(function(){
SnackBar.show({
  text: "{{Auth::user()-> getFirstNameorUsername() }}  {{Session::get('signin') }}",
  showAction: false,
  pos: 'bottom-center'
});
});
</script>
@elseif(Session::has('signout'))
<script  type="text/javascript">
	$(document).ready(function(){
SnackBar.show({
  text: 'Signed out successfull',
  showAction: false,
  pos: 'bottom-center'
});
});
</script>

@elseif (Session::has('signupsuccess'))
<!-- XXX: Auth   -->
<script  type="text/javascript">
	$(document).ready(function(){
SnackBar.show({
  text: '{{Session::get('signupsuccess') }}',
  showAction: false,
  pos: 'bottom-center'
});
});
</script>
<!-- // XXX: Auth end  -->
    @endif

    <!-- XXX: friend request    -->
    @if (Session::has('Friend_Request'))
    <script>
    $(document).ready(function(){
  SnackBar.show({
    text:'Friend request sent',
    pos: 'bottom-center'
  });
  });    </script>
          <!-- XXX: friend request aready sent   -->
          @elseif (Session::has('FrindRequestSent'))
          <script>
          $(document).ready(function(){
        SnackBar.show({
          text:'Friend request already pending',
          pos: 'bottom-center'
        });
        });    </script>
          <!-- // XXX: Auth end  -->
                @endif
@if(2+2 == 3)
      <!-- XXX: errors, success and info    -->
      @endif
      @if (Session::has('info'))
      <!-- INFO: -->
      <script>
      $(document).ready(function(){
    SnackBar.show({
      text:"{{Session::get('info') }}",
      pos: 'bottom-center'
    });
    });    </script>
      <!-- <div class="col-md-4">
       <div class="notice notice-success"  role="alert">
               	  <button type="button" class="close" data-dismiss="alert">×</button>
        <strong></strong>
    </div>
    </div> -->
@elseif (Session::has('warning'))
<!-- warning: -->
<script>
$(document).ready(function(){
SnackBar.show({
text:"{{Session::get('warning') }}",
pos: 'bottom-center'
});
});    </script>
@endif

<!-- notebook: -->
@if (Session::has('notebook-created'))
<script>
$(document).ready(function(){
SnackBar.show({
text:"{{Session::get('notebook-created') }}",
pos: 'bottom-center'
});
});    </script>
@endif
