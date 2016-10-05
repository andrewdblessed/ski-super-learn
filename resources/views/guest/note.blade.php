@extends('guest.template.style')
@section('content')

@if (!$notes->count())

<h1>404 page not found</h1>
@else
@foreach ($notes as $notes)

<div class="animated fadeIn">

<div class="col-md-8 col-md-push-2">
  <div class="main_note">
     <div class="card-note radius shadowDepth1">
        <div class="card__content card__padding">
                  <article class="card__article">
                <header class="note_header text-muted">
                  {{$notes->note_title}}
                </header>
                <div class="chip" style="cursor: pointer;" id="Ainote6">
                    <img src="svg/bookmark.svg" alt="Person" width="96" height="96">
                  <span class="note_Ainote">{{$notes->Ainote_name}}</span>
                  </div><br>

                <h6><span class="text-muted">created at </span><time class="note_time">{{$notes->note_date}}</time></h6>
              </article>
            </div>
                <div class="card__body">
                  {!!$notes->note_body!!}
                </div>
               </div>
            </div>
          </div>
<div class="comments"></div>

  </div>

@endforeach
@endif
@stop
