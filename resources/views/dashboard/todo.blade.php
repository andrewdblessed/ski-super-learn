@extends('templates.default')

@section('content')
<style>

.hide-form{
  display: none;
}
.show-form{
  display: block;
}
.more-pad{
  padding-top: 19px;
}
.add-bar-top {
  position: fixed;
  top: 70%;
}
.container-fluid.more-pad {
    padding-left: 0;
    padding-right: 0;
}
.container-fluid.more-pad.card.card-raised {
    background: rgb(33,150,243);
    /*padding-top: 23px;*/
}
ul.nav.nav-tabs.nav-tab-info {
  /*padding-left: 12%;*/
  background: rgb(33,150,243);
}
.nav-tabs>li {
    margin-left: 40px;
    margin-right: 22px;
}

.blue {
    background-color: #03a9f4;
}
.yellow {
    background-color: #fbc02d;
}
.red {
      background-color: #f44336;
}
.green {
background-color: #5cb85c;
}
.purple{
  background-color: #9c27b0;
}
</style>
<div class="container-fluid more-pad card card-raised">
  <div class="">
    <div class="col-md-12">
      <!-- <a class="btn btn-raised btn-default" href="{{route('dashboard.cloudpack')}}">reload</a> -->
    <ul class="nav nav-tabs nav-tab-info" role="tablist">
      <li class="active">
        <a href="#my-todos" role="tab" data-toggle="tab" class="btn-info">
              MY Tasks
        </a>
      </li>
          <li>
        <a href="#l-1" role="tab" data-toggle="tab">
                    machine Learning
                                </a>
      </li>
      <li>
        <a href="#l-2" role="tab" data-toggle="tab">
        Computer Science
        </a>
      </li>
      <li>
        <a href="#l-3" role="tab" data-toggle="tab">
      Data management
        </a>
      </li>
      <li>
        <a href="#l-4" role="tab" data-toggle="tab">
          Python ORP
        </a>
      </li>
      <li>
        <a href="#l-5" role="tab" data-toggle="tab">
        Creative box
        </a>
      </li>
    </ul>
  </div>
</div>
</div>

    <!-- <form id="activate" action="{{route('todos.post')}}" method="post">
      <input class="mdl-textfield mdl-textfield__input" type="text" name="title" value="NEW TASK">
      <input type="date" name="date"> <input type="time" name="time">
      <button type="submit" class="save_todo mdl-button mdl-js-ripple-effect mdl-button--colored mdl-js-button mdl-button--raised ">
        Add Task
      </button>
      <input type="hidden" name="_token" value="{{ Session::token() }}">

    </form> -->
    <div class="new-todo">


      @if (!$todo_call->count())
        <style media="screen">
        .empty_new, .new-lab{
          text-align: center;
        }
        .empty_new {
          margin-bottom: 36%;
          padding-top: 14%;
          color: rgb(3,169,244);
          font-weight: 700;
        }
        </style>
        <div class="container more-pad animated fadeIn">
          <div class="card card-raised">
            <div class="empty_new">
              <div class="col-md-12">
<i class="material-icons">school</i>
                <h3>Is a little empty Here</h3>
                <p>
                  here are a few things to get started with
                </p>
              </div>
              <div class="col-md-6 new-lab">
                <h4>Labels</h4>
                Add a label to manage your tasks <br>
                <button type="button" class="btn btn-info btn-round btn-raised">
                  <i class="material-icons">label</i>  New Label
                </button>
              </div>
              <div class="col-md-6 new-lab">
                <h4>Task</h4>
                Create a new task
                <br>
                <button type="button" class="btn btn-info btn-round btn-raised">
                  <i class="material-icons">check_box</i>   New Task
                </button>
              </div>
            </div>
          </div>
        </div>
    @else
    <style media="screen">
    div.m-p-tool {
        float: right;
    }
    .upload-f-m {
        font-size: -webkit-xxx-large;
    }
    .m-p-empty {
        text-align: center;
        color: rgb(120,144,156);
        font-family: sans-serif;
    }

    .card.card-raised.flex-add {
        padding: 0 3% 3% 3%;
            margin-bottom: 20px;
    }
span.label.f-label {
    border-radius: 0;
    margin-left: 8%;
    padding: 3%;
    box-shadow: 0 3px 1px -17px rgba(0, 0, 0, 0.56), 0 8px 2px -5px rgba(0, 0, 0, 0.2);
}

.input-group.add-nt {
    width: 87%;
    margin-left: 2%;
    margin-bottom: 6px;
}
.u-done {
    padding-top: 35px;
    /*position: absolute;*/
}

button.btn.btn-fab.btn-raised.se-ad {
    left: 100%;
    position: absolute;
    top: 24%;
    z-index: 11;
}
.task-empty {
    text-align: center;
    padding-bottom: 11px;
}
.text-default{
  color: rgb(120,144,156);
}
.add-bar-top {
    float: right;
    margin-bottom: 4px;
}


    </style>
<div class="container-fluid more-pad">
  <!--NOTE:// fixed add bar  -->
<div class="container">
<div class="col-md-12">
  <!-- Tab panes -->
<div class="tab-content">
  <!--HACK://STARTING WITH THE EMPTY LABEL  -->
  <div role="tabpanel" class="active tab-pane animated fadeIn" id="my-todos">
    <div class="container-fluid">
  <!--NOTE:major tasks section starts here  -->
    <div class="col-md-8 col-md-push-2">
      <div class="card card-raised flex-add">
          <span class="label label-default f-label">MY TASKS</span>
        <div class="divider">

        </div>
        <div class="u-done">
          <p class="task-empty text-default">
            No task to Display
          </p>
    </div>

        <div class="input-group add-nt">
              <input type="text" class="form-control" placeholder="add new Task to Label">
              <button type="submit" name="submit" class="btn se-ad btn-default btn-fab btn-raised">
                <i class="material-icons">send</i>
              </button>
      </div>
      </div>
    </div>
  </div>
</div>

<div role="tabpanel" class="tab-pane animated fadeIn" id="l-1">
  <div class="container-fluid">
  <div class="col-md-8 col-md-push-2">
    <div class="card card-raised flex-add">
        <span class="label label-info f-label">MACHINE LEARNING</span>
      <div class="divider">

      </div>
      <div class="u-done">
        <div class="checkbox">
         <label>
           <input type="checkbox" name="optionsCheckboxes">
      learn data management
         </label>
        </div>
        <div class="checkbox">
         <label>
           <input type="checkbox" name="optionsCheckboxes">
        complete the python class by edx
         </label>
        </div>

        <div class="checkbox">
         <label>
           <input type="checkbox" name="optionsCheckboxes">
        open a machine learning algrithm website for students
         </label>
        </div>
        <div class="checkbox">
         <label>
           <input type="checkbox" name="optionsCheckboxes">
        Expand machine learning for students in Nigeria
         </label>
        </div>
        <div class="checkbox">
         <label>
           <input type="checkbox" name="optionsCheckboxes">
      travel to Lagos and teach machine learning
         </label>
        </div>
<div class="checkbox">
 <label>
   <input type="checkbox" name="optionsCheckboxes">
@{{task}}
 </label>
</div>
  </div>

      <div class="input-group add-nt">
            <input type="text" class="form-control" ng-model="task" placeholder="add new Task to Label">
            <button type="submit" name="submit" class="btn se-ad btn-info btn-fab btn-raised">
              <i class="material-icons">send</i>
            </button>
    </div>
    </div>
  </div>
</div>
</div>

<div role="tabpanel" class="tab-pane animated fadeIn" id="l-2">
  <div class="container-fluid">
  <div class="col-md-8 col-md-push-2">
    <div class="card card-raised flex-add">
          <span class="label label-success f-label">COMPUTER SCIENCE</span>
        <div class="divider">
        </div>
        <div class="u-done">
          <p class="task-empty text-success">
            No task to Display
          </p>
    </div>
        <div class="input-group add-nt">
              <input type="text" class="form-control" placeholder="add new Task to Label">
              <button type="submit" name="submit" class="btn se-ad btn-success btn-fab btn-raised">
                <i class="material-icons">send</i>
              </button>
      </div>
    </div>
  </div>

</div>
</div>

<div role="tabpanel" class="tab-pane animated fadeIn" id="l-3">
  <div class="container-fluid">
  <div class="col-md-8 col-md-push-2">
    <div class="card card-raised flex-add">
        <span class="label label-warning f-label">DATA MANAGEMENT</span>
      <div class="divider">

      </div>
      <div class="u-done">
        <p class="task-empty text-warning">
          No task to Display
        </p>
  </div>
      <div class="input-group add-nt">
            <input type="text" class="form-control" placeholder="add new Task to Label">
            <button type="submit" name="submit" class="btn se-ad btn-warning btn-fab btn-raised">
              <i class="material-icons">send</i>
            </button>
    </div>
    </div>
  </div>
</div>
</div>

<div role="tabpanel" class="tab-pane animated fadeIn" id="l-4">
  <div class="container-fluid">

  <div class="col-md-9 col-md-push-2">
    <div class="card card-raised flex-add">
        <span class="label label-primary f-label">PYTHON ORP</span>
      <div class="divider">

      </div>
      <div class="u-done">
        <p class="task-empty text-primary">
          No task to Display
        </p>
  </div>
      <div class="input-group add-nt">
            <input type="text" class="form-control" placeholder="add new Task to Label">
            <button type="submit" name="submit" class="btn se-ad btn-primary btn-fab btn-raised">
              <i class="material-icons">send</i>
            </button>
    </div>
    </div>
  </div>
</div>
</div>

<div role="tabpanel" class="tab-pane animated fadeIn" id="l-5">
  <div class="container-fluid">
  <div class="col-md-8 col-md-push-2">
    <div class="card card-raised flex-add">
        <span class="label label-danger f-label">CREATIVE BOX</span>
      <div class="divider">

      </div>
      <div class="u-done">
        <p class="task-empty text-danger">
          No task to Display
        </p>
  </div>
      <div class="input-group add-nt">
            <input type="text" class="form-control" placeholder="add new Task to Label">
            <button type="submit" name="submit" class="btn se-ad btn-danger btn-fab btn-raised">
              <i class="material-icons">send</i>
            </button>
    </div>
    </div>
  </div>
</div>
</div>




</div>

    <!-- <script type="text/javascript">
    $(document).ready(function(){
          $(".ski_loader").css("display", "block");
    $(".new-todo").load("{{route('dashboard.todos.todoload')}}");
  $(".ski_loader").css("display", "none");
    });
    </script> -->
  @endif
</div>
  </div>
</div>

<script>
$(function() {
var form = $('#activate');
// var formMessages = $('#activate_adela');

$(".save_todo").click(function(e) {
e.preventDefault();
    $(".ski_loader").css("display", "block");
    var formData = $(form).serialize();
$.ajax({
type: 'POST',
url: $(form).attr('action'),
data: formData
})
.done(function(response) {
  $(".new-todo").load("{{route('dashboard.todos.todoload')}}");
SnackBar.show({text:'Tasked Added'});
$(".ski_loader").css("display", "none");

})
.fail(function(data) {
  SnackBar.show({
  text:"Opps there seems to be an error",
  pos: 'top-center',
  backgroundColor: '#e53935'
  });
  $(".ski_loader").css("display", "none");

    });
});

});
</script>

@stop
