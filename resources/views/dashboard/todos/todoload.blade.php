@foreach ($todo_call as $todos)
  <div class="jumbotron">
    <ul class='mdl-list'>
      <li class="mdl-list__item ">
        <span class="mdl-list__item-primary-content">
          <i class="material-icons  mdl-list__item-avatar">person</i>
        {{ $todos->todo_title }}

        </span>
        <span class="mdl-list__item-secondary-action">
          <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="todo_{{ $todos->id }}">
            <input type="checkbox" id="todo_{{ $todos->id }}" class="todo_s mdl-checkbox__input"
             name="todo_done"
            @if($todos->todo_done === 0)
              checked
              @else
              @endif
            />
          </label>
      </span>
        <span class="mdl-list__item-three-line">
      <p>
  Reminder:  {{ $todos->todo_date }}
      </p>
    </span>
      </li>
      <!-- <li class="mdl-list__item">
        <span class="mdl-list__item-primary-content"></span>
      </li>
      <li class="mdl-list__item">
        <span class="mdl-list__item-primary-content"></span>
      </li> -->
    </ul>



    </div>


  @endforeach
