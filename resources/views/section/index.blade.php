@extends('templates.default')
@section('content')
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--12-col">
    <div class="mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Hello world</h2>
      </div>
      <div class="mdl-card__supporting-text">
        this is hello world
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
          we love pop corn
        </a>
      </div>
      <div class="mdl-card__menu">
        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
          <i class="material-icons">share</i>
        </button>

      </div>
    </div>
  </div>
</div>

@stop
