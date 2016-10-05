
Hello {{Auth::user()-> getUsername() }}

       @if ($errors->has())
              <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                      {{ $error }}<br>
                  @endforeach
              </div>
              @endif
<form method="post" action="/unlock">

<input type="password" name="password" >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
<button type="submit" > Unlock account</button>
</form>