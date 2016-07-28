<!-- IDEA: -->
<div class="mdl-cell mdl-cell--3-col">
  <!-- <a class="twPc-block" style="background-image: url(/images/bd.jpg);"> -->
  <div class="demo-card-image mdl-card mdl-shadow--2dp" style="
        height: 300px;
            background-color: #78909C;
            text-align: center;
        ">
            <div>
            <a title="{{$user->getNameOrUsername() }}" href="{{ route('profile.index', ['username' => $user->username]) }}" class="avatar-link">
              <!-- <img alt="{{$user->getNameOrUsername() }}" src="{{$user->getAvatarUrl() }}" class="avatar-img"> -->
              <span class="avatar-img"> <i style="    font-size: 162px;
          color: #fff;" class="material-icons">account_circle</i></span>
            </a>
          </div>
      <style media="screen">
        .user-Info{
          padding-right: 12%;
      color: #fff;
      padding-top
        }
      </style>

    <div class="user-Info">
   <a style="    color: #fff;
    text-decoration: initial;
    padding-top: 20px;" href="{{ route('profile.index', ['username' => $user->username]) }}"> {{$user->getNameOrUsername() }}</a>

          <span style="text-transform: capitalize;     font-weight: bold;">
            @if($user->hub)
            <p>{{$user->hub }}</p>
            @endif
          </span>

            <div class="twPc-button">
              @if(Auth::user()->isFriendWith($user))
              <a style="background-color: #2196F3;
              color: #fff;" class="mdl-button mdl-js-button mdl-button--raised"  href="{{ route('profile.index', ['username' => $user->username]) }}">Friends</a>
              @elseif (Auth::user()->hasFriendRequestPending($user))
              <a style="background-color: #2196F3;
              color: #fff;" class="mdl-button mdl-js-button mdl-button--raised"  href="{{ route('profile.index', ['username' => $user->username]) }}">Request Pending</a>
              @elseif (Auth::user()->hasFriendRequestReceived($user))
              <a style="background-color: #2196F3;
              color: #fff;" class="mdl-button mdl-js-button mdl-button--raised"  href="{{ route('friends.accept', ['username' =>$user->username]) }}">Accept friend Request</a>
              @elseif (Auth::user()->id !== $user->id)
              <a style="background-color: #2196F3;
              color: #fff;" class="mdl-button mdl-js-button mdl-button--raised"  href="{{ route('friends.add', ['username' =>$user->username]) }}" >Add as Friend</a>
              @else
              <a style="background-color: #2196F3;
              color: #fff;" class="mdl-button mdl-js-button mdl-button--raised"  href="{{route('profile.edit') }}" > Edit Profile</a>
              @endif

            </a>
          </div>

</div>
</div>
</div>
