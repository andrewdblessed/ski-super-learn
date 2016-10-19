@extends('guest.template.style')
@section('content')

@if (!$notes->count())
<img src="{{ URL::asset('/src/vendor/new/images/animat-search-color.gif') }}">
<div class="error-text text-center">
<h1 class="text-success">404 page not found</h1>
<h4>Hello, try visiting our home page <a href="{{route('home')}}">here</a> . don't worry if you are signed in you will be taken to your dashboard</h4>
</div>
@else
@foreach ($notes as $notes)
<div class="col-md-8 col-md-push-2">
  <div class="fixed-top">
                <header class="note_header text-success">
                  {{$notes->note_title}}
                </header>
              <!--   <div class="chip" style="cursor: pointer;" id="Ainote6">
                    <img src="svg/bookmark.svg" alt="Person" width="96" height="96">
                  <span class="note_Ainote">{{$notes->Ainote_name}}</span>
                  </div><br>
 -->
                <h5 class="text-success">Modified {{$notes->note_date}}</h5>
              </div>

             <hr>
         
                <div class="card__body">
                  {!!$notes->note_body!!}
                </div>
               
          </div>
@if (Auth::check())

<div class="save_shared"> 
  <form action="{{route('post.note')}}" id="new_note" method="post">
             <input type="hidden" name="_token" value="{{ Session::token() }}">

          <input type="text" name="note_title" value="{{$notes->note_title}}"/>

    <textarea  name="note_body" >
                 {!!$notes->note_body!!}
</textarea>

                         
                      </div>
                  </div>

            <textarea type="text" style="display:none;" name="note_date"  id="notedate"> </textarea>
             {{--GUEST TOKEN FOR SHARING NOTE --}}
             <input type="hidden" name="guest_token" value="{{$shared_token}}">
             
       </form>
</div>
@endif
<script type="text/javascript">

var date = new Date();

var month = date.getMonth();
var day = date.getDate();
var year = date.getFullYear();

var monthNames = [ "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December" ];

$("#notedate").innerHTML = day+" "+monthNames[month]+" "+year;
// note date and time ends here
 // start savenote js
</script>
<script type="text/javascript">
$(function() {

var form = $('#new_note');

$("#save_shared").click(function(e) {

e.preventDefault();

    var formData = $(form).serialize();

$.ajax({
type: 'POST',
url: $(form).attr('action'),
data: formData
})
.done(function(response) {
console.log("note saved")
window.location.reload(true);
})
.fail(function(data) {
  console.log(" failed")

    });

  });
// new note ends here


            });
        </script>
@endforeach
@endif
@stop
