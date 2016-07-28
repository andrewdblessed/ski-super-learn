@extends('templates.default')

@section('content')
<style>
.loader2 {
  position: relative;
  overflow: hidden;
  min-height: 30px;
}

.loader2 span {
  animation: straight 4s cubic-bezier(.71, .13, .36, .89) 0s infinite;
  display: inline-block;
  width: 10px;
  height: 10px;
  background: #90CAF9;
  border-radius: 50%;
  position: relative;
  margin-right: 10px;
  left: -10%;
  -webkit-animation: straight 4s cubic-bezier(.71, .13, .36, .89) 0s infinite;
}

.loader2 span.circle1 {
  animation-delay: 1.775s;
  -webkit-animation-delay: 1.775s;
}

.loader2 span.circle2 {
  animation-delay: 1.75s;
  -webkit-animation-delay: 1.75s;
}

.loader2 span.circle3 {
  animation-delay: 1.7s;
  -webkit-animation-delay: 1.7s;
}

.loader2 span.circle4 {
  animation-delay: 1.6s;
  -webkit-animation-delay: 1.6s;
}

.loader2 span.circle5 {
  animation-delay: 1.4s;
  -webkit-animation-delay: 1.4s;
}

.loader2 span.circle6 {
  animation-delay: 1s;
  -webkit-animation-delay: 1s;
}

@keyframes straight {
  0% {
    left: -10%;
  }
  40% {
    left: 50%;
  }
  60% {
    left: 50%;
  }
  100% {
    left: 110%;
  }
}

@-webkit-keyframes straight {
  0% {
    left: -10%;
  }
  40% {
    left: 50%;
  }
  60% {
    left: 50%;
  }
  100% {
    left: 110%;
  }
}
</style>
<div class="mdl-grid">
<div class="mdl-cell mdl-cell--2-offset jumbotron mdl-cell--7-col">
  <!-- List with avatar and controls -->
      @if (!$adela_config->count())
      <div  class="adela_loader loader2" style="display:none;">
        <span class="circle1"></span>
        <span class="circle2"></span>
        <span class="circle3"></span>
        <span class="circle4"></span>
        <span class="circle5"></span>
        <span class="circle6"></span>
      </div>

      <form  class="" action="{{route("adela.setup.post")}}" method="post">
        <ul class="demo-list-control mdl-list">
      <li class="mdl-list__item">
        <span class="mdl-list__item-primary-content">
          <i class="material-icons  mdl-list__item-avatar">person</i>
          Activate/Disable Adela
        </span>
          <span class="mdl-list__item-secondary-action ">
            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect " for="activate_ai">
              <input type="checkbox" id="activate_ai" class=" form mdl-switch__input" name="activate_ai"
              />
            </label>
        </span>

      </li>
  </ul>
  <br>
  <button type="submit" class="mdl-button mdl-js-ripple-effect mdl-button--colored mdl-js-button mdl-button--raised ">
    Save Settings
  </button>
     <input type="hidden" name="_token" value="{{ Session::token() }}">
  </form>
  <script>
  $(function() {
  $(".activate_ai").click(function() {
    $(".adela_loader").css("display", "block");
  });
  });
  </script>

 @elseif($adela_config->count())
 <div  class="adela_loader loader2" style="display:none;">
   <span class="circle1"></span>
   <span class="circle2"></span>
   <span class="circle3"></span>
   <span class="circle4"></span>
   <span class="circle5"></span>
   <span class="circle6"></span>
 </div>
<form  id="activate" class="" action="{{route("adela.setup.update")}}" method="post">
  <ul class="demo-list-control mdl-list">
    <li class="activate_ai mdl-list__item">
      <span class="mdl-list__item-primary-content">
        <i class="material-icons  mdl-list__item-avatar">person</i>
        Activate/Disable Adela
      </span>
        <span class="mdl-list__item-secondary-action ">
          <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect " for="activate_ai">
            <input type="checkbox" id="activate_ai" class=" mdl-switch__input" name="activate_ai"
            @foreach ($adela_config as $adelasetup)
        @if($adelasetup->activate_ai === 0)
        checked
        @else

        @endif
        @endforeach
            />
          </label>
      </span>
    </li>
    <li class="mdl-list__item">
      <span class="mdl-list__item-primary-content">
        <i class="material-icons  mdl-list__item-avatar">person</i>
        Select AI
      </span>
        <span class="mdl-list__item-secondary-action">
            <select style="font-size: x-large;
    color: indigo;
    border: none;" id="gender_ai" class="gender_ai" name="gender_ai">
              <optgroup
              @foreach ($adela_config as $adelasetup)
              label="@if($adelasetup->gender_ai === "female")
              Adela
              @elseif($adelasetup->gender_ai === "male")
                Andrew
              @endif">
              @if($adelasetup->gender_ai === "female")
                <option value="female">Adela</option>
                <option value="male">Andrew</option>
                @elseif($adelasetup->gender_ai === "male")
                <option value="male">Andrew</option>
                <option value="female">Adela</option>
                @else
                <option value="female">Adela</option>
                <option value="male">Andrew</option>
                @endif
                @endforeach
              </optgroup>
            </select>

      </span>
    </li>

    <li class="mdl-list__item">
      <span class="mdl-list__item-primary-content">
        <i class="material-icons  mdl-list__item-avatar">person</i>
        Send Me Inspiration Quotes
      </span>
        <span class="mdl-list__item-secondary-action">
          <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="quote_ai">
            <input type="checkbox" id="quote_ai" class="quote_ai mdl-switch__input" name="quote_ai"
            @foreach ($adela_config as $adelasetup)
        @if($adelasetup->quote_ai === 0)
        checked
        @else

        @endif
        @endforeach
            />
          </label>
      </span>
    </li>

    <li class="mdl-list__item">
      <span class="mdl-list__item-primary-content">
        <i class="material-icons  mdl-list__item-avatar">person</i>
      Chat Mode
      </span>
        <span class="mdl-list__item-secondary-action">
          <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="chat_ai">
            <input type="checkbox" id="chat_ai" class=" chat_ai mdl-switch__input" name="chat_ai"
            @foreach ($adela_config as $adelasetup)
        @if($adelasetup->chat_ai === 0)
        checked
        @else

        @endif
        @endforeach
            />
          </label>
      </span>
    </li>
  </ul>
  <input type="hidden" name="_token" value="{{ Session::token() }}">
</form>
  @endif

</div>
</div>
<script>
$(function() {
var form = $('#activate');
// var formMessages = $('#activate_ai');

$(".activate_ai").click(function(e) {
    $(".adela_loader").css("display", "block");
var formData = $(form).serialize();
$.ajax({
type: 'POST',
url: $(form).attr('action'),
data: formData
})
.done(function(response) {
SnackBar.show({text:'Settings Saved'});
$(".adela_loader").css("display", "none");

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

$(".gender_ai").click(function(e) {
  $(".adela_loader").css("display", "block");
var formData = $(form).serialize();
$.ajax({
type: 'POST',
url: $(form).attr('action'),
data: formData
})
.done(function(response) {
  SnackBar.show({text:'Ai selected'});
  $(".adela_loader").css("display", "none");
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

$(".quote_ai").click(function(e) {
  $(".adela_loader").css("display", "block");
var formData = $(form).serialize();
$.ajax({
type: 'POST',
url: $(form).attr('action'),
data: formData
})
.done(function(response) {
  SnackBar.show({text:'Quotes Settings Saved'});
  $(".adela_loader").css("display", "none");
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

$(".chat_ai").click(function(e) {
  $(".adela_loader").css("display", "block");
var formData = $(form).serialize();
$.ajax({
type: 'POST',
url: $(form).attr('action'),
data: formData
})
.done(function(response) {
  SnackBar.show({text:'Adela Chat Settings Saved'});
  $(".adela_loader").css("display", "none");
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
@stop
