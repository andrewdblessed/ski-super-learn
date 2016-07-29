{{--
<!-- REVIEW: we use the signin to show flash alerts by
calling the varios scripts when needed from the
controller and our site -->
--}}

<link href="{{ URL::asset('/src/vendor/ski-noti/css/ns-style-other.css') }}" rel="stylesheet">
<script src="{{ URL::asset('/src/vendor/ski-noti/js/modernizr.custom.js') }}" ></script>

<script src="{{ URL::asset('/src/vendor/ski-noti/js/notificationFx.js') }}" ></script>
<script src="{{ URL::asset('/src/vendor/ski-noti/js/classie.js') }}" ></script>

<script>

$(document).ready(function(){
  @if (Session::has('signin'))
<!-- XXX: Auth   -->
  // create the notification
  @if (Auth::user()->gender == "male")
           var notification = new NotificationFx({
              message : '<div class="ns-thumb"><img src="/user-tools/profile-default/avatar.png"/></div><div class="ns-content"><p><a href="#">{{Auth::user()-> getFirstNameorUsername() }}</a> {{Session::get('signin') }}.</p></div>',
              layout : 'other',
              ttl : 16000,
              effect : 'thumbslider',
              type : 'success', // notice, warning, error or success
              onClose : function() {
                bttn.disabled = false;
              }
            });

@else
          
      var notification = new NotificationFx({
              message : '<div class="ns-thumb"><img src="/user-tools/profile-default/avatar-1.png"/></div><div class="ns-content"><p><a href="#">{{Auth::user()-> getFirstNameorUsername() }}</a> {{Session::get('signin') }}.</p></div>',
              layout : 'other',
              ttl : 16000,
              effect : 'thumbslider',
              type : 'success', // notice, warning, error or success
              onClose : function() {
                bttn.disabled = false;
              }
            });
      @endif

SnackBar.show({
  text: "{{Auth::user()-> getFirstNameorUsername() }}  {{Session::get('signin') }}",
  showAction: false,
  pos: 'bottom-center'
});


@elseif(Session::has('signout'))
// create the notification
            var notification = new NotificationFx({
              message : '<p>This is just a simple notice. Everything is in order and this is a <a href="#">simple link</a>.</p>',
              layout : 'growl',
              effect : 'scale',
              type : 'notice', // notice, warning, error or success
              onClose : function() {
                bttn.disabled = false;
              }
            });

           
SnackBar.show({
  text: 'Signed out successfull',
  showAction: false,
  pos: 'bottom-center'
});
 // show the notification
            notification.show();



@elseif (Session::has('signupsuccess'))

SnackBar.show({
  text: '{{Session::get('signupsuccess') }}',
  showAction: false,
  pos: 'bottom-center'
});
<!-- // XXX: Auth end  -->
    @endif
});
</script>


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
