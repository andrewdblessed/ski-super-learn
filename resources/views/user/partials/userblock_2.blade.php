<div class="twPc-div_2">
	<div>
		<div class="twPc-button_2">
                    @if (Auth::user()->isFriendWith($user))
    <a class="btn btn-success btn-sm"  href="{{ route('profile.index', ['username' => $user->username]) }}">Friends</a>
    @elseif (Auth::user()->hasFriendRequestPending($user))
    <a class="btn btn-warning btn-sm" href="{{ route('profile.index', ['username' => $user->username]) }}">Request Pending</a>
    @elseif (Auth::user()->hasFriendRequestReceived($user))
    <a class="btn btn-primary btn-sm" href="{{ route('friends.accept', ['username' =>$user->username]) }}">Accept friend Request</a>
    @elseif (Auth::user()->id !== $user->id)
    <a class="btn btn-info btn-sm" href="{{ route('friends.add', ['username' =>$user->username]) }}" >Add as Friend</a>
    @else
     <a class="btn btn-info btn-sm" href="{{route('profile.edit') }}" >Edit Profile</a>
 @endif

            </a>
		</div>

		<a title="{{$user->getNameOrUsername() }}" href="{{ route('profile.index', ['username' => $user->username]) }}" class="twPc-avatarLink_2">
			<img alt="{{$user->getNameOrUsername() }}" src="{{$user->getAvatarUrl() }}" class="twPc-avatarImg_2">
		</a>

		<div class="twPc-div_2User">
			<div class="twPc-div_2Name">
				<a href="{{ route('profile.index', ['username' => $user->username]) }}">{{$user->getNameOrUsername() }}</a>
			</div>
			<span>
        <p>{{$user->hub }}</p>
			</span>
		</div>
	</div>
</div>
<div class="clearfix"></div>
