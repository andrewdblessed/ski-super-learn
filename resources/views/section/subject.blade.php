@extends('templates.default')
@section('content')
<style media="screen">
.fab-style{
  position: fixed;
  margin-left: 90%;
  margin-top: 34%;
  z-index: 10;
}
.hide-form{
  display: none;
}
.show-form{
  display: block;
}
.fab-style:hover{
  position: fixed;
  margin-left: 90%;
  margin-top: 20%;
  z-index: 10;
}
.add-fab-style{
  display: none;
  background-color: #f44336;
  margin-top: -74px;
}
.fab-style:hover .add-fab-style{
display: block;
margin-top: 6px;
background-color: #29B6F6;
font-size: 20px;
color: antiquewhite;
}
.use-todo{
  display: none;
  margin-top: -74px;
}
.fab-style:hover .use-todo{
display: block;
margin-top: 9px;
background-color: #E64A19;
font-size: 20px;
color: antiquewhite;
}

.use-subject{
  display: none;
  margin-top: -74px;
}
.fab-style:hover .use-subject{
display: block;
margin-top: 9px;
background-color: #E64A19;
font-size: 20px;
color: antiquewhite;
}

.fab-main{
      margin-top: 0;
      background-color: #f44336;
      width: 80px;
      height: 80px;
      font-size: 40px;
    color: antiquewhite;
}
.fab-main:active{
      margin-top: 0;
      background-color: #f44336;
      width: 80px;
      height: 80px;
      font-size: 40px;
    color: antiquewhite;
}
.fab-style:hover .fab-main{
  margin-top: 6px;
  background-color: #f44336;
}

</style>
<div class="fab-style">

  <a href="{{route('section.subject')}}" >
  <button id="use-subject" class="animated fadeIn mdl-button mdl-button--fab mdl-js-ripple-effect use-subject " >
      <i class="mdi mdi-tag"></i>
    </button>
  </a>
  <a href="{{route('dashboard.todo')}}" >
  <button id="use-todo" class="animated fadeIn mdl-button mdl-button--fab mdl-js-ripple-effect use-todo " >
      <i class="mdi mdi-check-circle"></i>
    </button>
  </a>
<button id="use-adela" class="animated fadeIn mdl-button mdl-button--fab mdl-js-ripple-effect add-fab-style " ><i class="mdi mdi-microphone"></i></button>

  <button  class="mdl-button mdl-button--fab mdl-js-ripple-effect fab-main mdl-button--colored " style="background-color:#f44336;" id="shows-fulls-form" ><i class="mdi mdi-pencil"></i></button>
</div>
<div style="z-index:10;" class="mdl-tooltip mdl-tooltip--left" for="shows-fulls-form">
Create New Note
</div>
<div class="mdl-tooltip mdl-tooltip--left" for="use-subject">
Manage Subjects
</div>
<div class="mdl-tooltip mdl-tooltip--left" for="use-adela">
Use Adela
</div>
<div class="mdl-tooltip mdl-tooltip--left" for="use-todo">
New Todo
</div>
<div class="mdl-grid">
  <div class="mdl-cell animated fadeIn mdl-cell--6-col">
    <form action="{{route('subject.post')}}" method="post">
        <div class="form-group{{ $errors->has('subject') ? 'has-error' : ''}}" >
                      <input name="subject"  class="mdl-textfield__input mdl-textfield" type="text"  value="Enter new Subjct" id="subject" />

              @if ($errors->has('subject'))
               <span class="help-block">{{ $errors->first('subject')}}</span>
               @endif
              </div>
      <button  type="submit" class="mdl-button mdl-js-button mdl-button--accent">
        <i class="fa fa-paper-plane"></i>
        <span>Add</span>
      </button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">

        </form>


  </div>
  <div class="mdl-cell animated fadeIn mdl-cell--6-col">

    @if (!$sub_call->count())
    <p>
      Message from Adela:
    </p>
      <p>
Creating a new subject will help increase your experience with SkiLearn     </p>
      @else
      @foreach ($sub_call as $subject)
      <!-- List items with avatar and action -->
<style>
.demo-list-action {
  width: 300px;
}
</style>

<div class="demo-list-action mdl-list" style="    padding-top: 0px;
    padding-bottom: 0px">
  <div class="mdl-list__item" style="    padding-top: 0px;
    padding-bottom: 0px">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar" style="
        font-size: 24px;
    height: 24px;
    width: 24px;
background-color: #2962FF;
    ">label</i>
      <span>{{ $subject->subject }}</span>
    </span>
    <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons" style="color:#F50057;">delete_forever</i></a>
  </div>

</div>

@endforeach

      @endif
    </div>
</div>


@stop
