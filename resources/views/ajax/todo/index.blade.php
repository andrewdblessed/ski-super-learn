@extends('templates.default')

@section('content')
<script>
SnackBar.show({text:'content load successful'});
$(".todoAddClose").click(function() {
    //
      $(".addTodo").css("display", "block");
    //
    });
</script>

                    <div class="col-md-5 todo-list">
                      <h4>ADD NEW TASKS</h4>
                      <div class="">
                        <div  class="col-md-12 list">
                          <div class="col-md-12">
          <!--LIST START HERE  -->
          <div class="container">
            <div class="row">

</div>
</div>

          <!--//LIST ENDSS HERE  -->
        </div>
                        </div>
                      </div>
                    </div>

              <div class="col-md-6">

                      <div class="">
                        <div class="taskDesign">
                          <form role="form"  class=" addTodo animated fadeIn">
                          <div class="form-group">
                            <input type="text" class="form-control" id="todoTitle" placeholder="Add Title">
                            <input type="textarea"class="form-control" id="todoDes" placeholder="Add Description">
                            <div class="col-md-6">
                              <br>
                              <select name="todosub" class="form-control select select-info select-block mbl" id="todoSub" >
                                <optgroup label="Subjects">
                                <option>Maths</option>
                                <option>Physics</option>
                                <option>Chemistry</option>
                                <option>English</option>
                              </optgroup>
                              </select>
                              <button data-target="#Subject"   data-toggle="modal" class="btn btn-info" name="button"> <span class="fui-bookmark"></span></button><span>Add Subject</span>
                            </div>
                            <div class="col-md-6">
                              <br>
                              <input id="input_01" class="datepicker"  name="date"  type="text"  autofocuss  value="pick a date"  data-valuee="2014-08-08">
                            <input id="input_from" class="timepicker" type="time" name="time" value="pick a time"  autofocuss>
                              <br>
                              <div id="container"></div>

                            </div>
                          </div>
                          <button type="button" class="btn navbar-btn addtodo"> Add Todo</button>
                          <input type="hidden" name="_token" value="{{ Session::token() }}">
                          </form>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                      <a class="btn btn-info" style="float:right;" href="" >
                  <span class="fui-tag"></span>	Edit Subjects</a>
                                      <a class="btn btn-info todoAddClose" style="float:right; margin-top:7px;">
              <span class="fui-tag"></span>	Add New Task</a>
                    </div>
                  </div>
                </div>
              </div>

              <button class="btn btn-embossed btn-primary " data-dismiss="modal" style="float:left;"><span class="fui-cross"></span>
            Close
            </button>    <div class="clearfix"></div>
@stop
