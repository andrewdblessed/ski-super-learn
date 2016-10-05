@extends('templates.default')
@section('content')
<style type="text/css">
/*.modal {
    margin-top: -7%;
}*/
</style>
        <!-- Jquery-Ui -->
        <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>

  <!--calendar css-->
        <link href="/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />
                <link href="{{ URL::asset('/src/vendor/new/css/components.css') }}" rel="stylesheet" type="text/css" />

         <!-- BEGIN PAGE SCRIPTS -->
        <script src="/plugins/moment/moment.js"></script>
        <script src='/plugins/fullcalendar/js/fullcalendar.min.js'></script>
<!-- <link rel="stylesheet" href="/src/vendor/fullcalendar/fullcalendar.print.css" charset="utf-8">
<link rel="stylesheet" href="/src/vendor/fullcalendar/_materialFullCalendar.css" charset="utf-8">

   <link rel="stylesheet" href="{{ URL::asset('src/ski-vendor/ski-calendar/css/calendar.css') }}" charset="utf-8">

<script src="{{ URL::asset('src/ski-vendor/ski-calendar/js/calendar.js') }}" charset="utf-8"></script> -->

 <div class="row">
              <div class="col-xs-12">
                <div class="page-title-box">
                                    <h4 class="page-title">Calendar </h4>
                                   <div class="clearfix"></div>
                                </div>
              </div>
            </div>
                        <!-- end row -->

<div class="row">
                            <div class="col-lg-12">

                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg btn-danger btn-block waves-effect m-t-20 waves-light">
                                                        <i class="fa fa-plus"></i> Create New
                                                    </a>
                                                    <div id="external-events" class="m-t-20">
                                                        <br>
                                                        <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                                        <div class="external-event bg-success" data-class="bg-success">
                                                            <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>New Theme Release
                                                        </div>
                                                        <div class="external-event bg-info" data-class="bg-info">
                                                            <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>My Event
                                                        </div>
                                                        <div class="external-event bg-warning" data-class="bg-warning">
                                                            <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>Meet manager
                                                        </div>
                                                        <div class="external-event bg-purple" data-class="bg-purple">
                                                            <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>Create New theme
                                                        </div>
                                                    </div>

                                                    <!-- checkbox -->
                                                    <div class="checkbox checkbox-custom m-t-40">
                                                        <input id="drop-remove" type="checkbox">
                                                        <label for="drop-remove">
                                                            Remove after drop
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div> <!-- end col-->
                                        <div class="col-md-9">
                                            <div id="calendar"></div>
                                        </div> <!-- end col -->
                                    </div>  <!-- end row -->
                                </div>

                                <!-- BEGIN MODAL -->
                                <div class="modal fade none-border" id="event-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Add New Event</h4>
                                            </div>
                                            <div class="modal-body p-20"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Add Category -->
                                <div class="modal fade none-border" id="add-category">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Add a category</h4>
                                            </div>
                                            <div class="modal-body p-20">
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Category Name</label>
                                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label">Choose Category Color</label>
                                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                                <option value="success">Success</option>
                                                                <option value="danger">Danger</option>
                                                                <option value="info">Info</option>
                                                                <option value="pink">Pink</option>
                                                                <option value="primary">Primary</option>
                                                                <option value="warning">Warning</option>
                                                                <option value="orange">Orange</option>
                                                                <option value="brown">Brown</option>
                                                                <option value="teal">Teal</option>
                                                                <option value="inverse">Inverse</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL -->
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->

<!-- begin of design -->
<div class="more-pad"></div>
  <div id="cal_point"></div>
@if (!$cal_section->count())

   <section class="container wel-cal" style="display:block">
      <img src="/svg/calendar-2.svg" width="200px">
      <h3>Calendar
      </h3>
       <h4 class="text-muted"> Manage your Study life</h4>
        <button class=" begin-cal btn btn-round btn-raised btn-info"><i class="fa fa-calendar"></i>Begin Calendar</button>
    </section>

    <div id="grabMe" style="display:none;">
      <section class="cal-modal">
      <div class="wel-event">
        <h3 class="text-info"> Select a Calendar</h3>
        <span>You can change this later in Calendar settings</span>
      </div>
      <row class="cal-type-1">
      Simple
      </row>
      <row class="cal-type-2">
      School      </row>
      <row class="cal-type-3">
        Researcher
      </row>
      </section>
    </div>

<form style="display:none" method="post" id="simple-cal" action="/savesction">
<input name="section" value="simple">
  <input type="hidden" name="_token" value="{{ Session::token() }}">

</form>

<form style="display:none" method="post" id="school-cal" action="/savesction">
<input name="section" value="school">
  <input type="hidden" name="_token" value="{{ Session::token() }}">

</form>

<form style="display:none" method="post" id="researcher-cal" action="/savesction">
<input name="section" value="researcher">
  <input type="hidden" name="_token" value="{{ Session::token() }}">

</form>


    @endif



  @foreach ($cal_section as $cal_section)

    @if($cal_section->section == "simple")
<script type="text/javascript">
$(function() {
                $("#cal_point").load("/calendar/simple");
 });
</script>
    @elseif($cal_section->section == "school")
<script type="text/javascript">
        $(function() {
                        // $("#cal_point").load("/calendar/school");
         });
</script>

    @elseif($cal_section->section == "researcher")
<script type="text/javascript">
// $(function() {
//                 $("#cal_point").load("/calendar/simple");
//  });
</script> researcher
   @endif

    @endforeach
<!-- NOTE:: VIEWS IS BASED ON SELECTED CALENDAR -->

<!-- Modal Core -->
<div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">


     <div class="new_event col-md-12">
<button class="btn btn-raised pull-right btn-round btn-fab btn-warning manager" ><i class="material-icons">close</i></button>

    <div class="col-md-8 col-md-push-2">
      <div class="btn-group" data-toggle="buttons" >
    
         <label data-toggle="collapse" data-target="#school" aria-expanded="false"
aria-controls="school" class="btn btn-info btn-raised">
          <input type="radio" name="simple" id="simple" autocomplete="off" >
            School
        </label>
      </div>

         <label data-toggle="collapse" data-target="#school" aria-expanded="false"
aria-controls="school" class="btn btn-info btn-raised">
          <input type="radio" name="simple" id="simple" autocomplete="off" >
            School
        </label>
      </div>


     <div class="collapse" id="school">
  <h5 class="text-warning">
Manage Your Study life at ease
  </h5>
  <p>Are you sure you want to enable the school calendar. Note this will not effect your saved events in Simple Calendar</p>
       <button type="submit" class="btn btn-success btn-raised btn-round post-event" autocomplete="off" data-loading-text="Saving Event...">Save</button>

</div>
          </div>
  
     </div>
   </div>
  </div>


<script type="text/javascript">
$(function() {

/**
* Theme: Zircos Admin Template
* Author: Coderthemes
* Component: Full-Calendar
* 
*/




!function($) {
    "use strict";

    var CalendarApp = function() {
        this.$body = $("body")
        this.$modal = $('#event-modal'),
        this.$event = ('#external-events div.external-event'),
        this.$calendar = $('#calendar'),
        this.$saveCategoryBtn = $('.save-category'),
        this.$categoryForm = $('#add-category form'),
        this.$extEvents = $('#external-events'),
        this.$calendarObj = null
    };


    /* on drop */
    CalendarApp.prototype.onDrop = function (eventObj, date) { 
        var $this = this;
            // retrieve the dropped element's stored Event Object
            var originalEventObject = eventObj.data('eventObject');
            var $categoryClass = eventObj.attr('data-class');
            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);
            // assign it the date that was reported
            copiedEventObject.start = date;
            if ($categoryClass)
                copiedEventObject['className'] = [$categoryClass];
            // render the event on the calendar
            $this.$calendar.fullCalendar('renderEvent', copiedEventObject, true);
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                eventObj.remove();
            }
    },
    /* on click on event */
    CalendarApp.prototype.onEventClick =  function (calEvent, jsEvent, view) {
        var $this = this;
            var form = $("<form></form>");
            form.append("<label>Change event name</label>");
            form.append("<div class='input-group'><input class='form-control' type=text value='" + calEvent.title + "' /><span class='input-group-btn'><button type='submit' class='btn btn-success waves-effect waves-light'><i class='fa fa-check'></i> Save</button></span></div>");
            $this.$modal.modal({
                backdrop: 'static'
            });
            $this.$modal.find('.delete-event').show().end().find('.save-event').hide().end().find('.modal-body').empty().prepend(form).end().find('.delete-event').unbind('click').click(function () {
                $this.$calendarObj.fullCalendar('removeEvents', function (ev) {
                    return (ev._id == calEvent._id);
                });
                $this.$modal.modal('hide');
            });
            $this.$modal.find('form').on('submit', function () {
                calEvent.title = form.find("input[type=text]").val();
                $this.$calendarObj.fullCalendar('updateEvent', calEvent);
                $this.$modal.modal('hide');
                return false;
            });
    },
    /* on select */
    CalendarApp.prototype.onSelect = function (start, end, allDay) {
        var $this = this;
            $this.$modal.modal({
                backdrop: 'static'
            });
            var form = $("<form></form>");
            form.append("<div class='row'></div>");
            form.find(".row")
                .append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Event Name</label><input class='form-control' placeholder='Insert Event Name' type='text' name='title'/></div></div>")
                .append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Category</label><select class='form-control' name='category'></select></div></div>")
                .find("select[name='category']")
                .append("<option value='bg-danger'>Danger</option>")
                .append("<option value='bg-success'>Success</option>")
                .append("<option value='bg-purple'>Purple</option>")
                .append("<option value='bg-primary'>Primary</option>")
                .append("<option value='bg-pink'>Pink</option>")
                .append("<option value='bg-info'>Info</option>")
                .append("<option value='bg-inverse'>Inverse</option>")
                .append("<option value='bg-orange'>Orange</option>")
                .append("<option value='bg-brown'>Brown</option>")
                .append("<option value='bg-teal'>Teal</option>")
                .append("<option value='bg-warning'>Warning</option></div></div>");
            $this.$modal.find('.delete-event').hide().end().find('.save-event').show().end().find('.modal-body').empty().prepend(form).end().find('.save-event').unbind('click').click(function () {
                form.submit();
            });
            $this.$modal.find('form').on('submit', function () {
                var title = form.find("input[name='title']").val();
                var beginning = form.find("input[name='beginning']").val();
                var ending = form.find("input[name='ending']").val();
                var categoryClass = form.find("select[name='category'] option:checked").val();
                if (title !== null && title.length != 0) {
                    $this.$calendarObj.fullCalendar('renderEvent', {
                        title: title,
                        start:start,
                        end: end,
                        allDay: false,
                        className: categoryClass
                    }, true);  
                    $this.$modal.modal('hide');
                }
                else{
                    alert('You have to give a title to your event');
                }
                return false;
                
            });
            $this.$calendarObj.fullCalendar('unselect');
    },
    CalendarApp.prototype.enableDrag = function() {
        //init events
        $(this.$event).each(function () {
            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };
            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);
            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });
        });
    }
    /* Initializing */
    CalendarApp.prototype.init = function() {
        this.enableDrag();
        /*  Initialize the calendar  */
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var form = '';
        var today = new Date($.now());

        var defaultEvents =  [{
                title: 'Hey!',
                start: new Date($.now() + 158000000),
                className: 'bg-purple'
            },
            {
                title: 'See John Deo',
                start: today,
                end: today,
                className: 'bg-success'
            },
            {
                title: 'Meet John Deo',
                start: new Date($.now() + 168000000),
                className: 'bg-info'
            },
            {
                title: 'Buy a Theme',
                start: new Date($.now() + 338000000),
                className: 'bg-primary'
            }];

        var $this = this;
        $this.$calendarObj = $this.$calendar.fullCalendar({
            slotDuration: '00:15:00', /* If we want to split day time each 15minutes */
            minTime: '08:00:00',
            maxTime: '19:00:00',  
            defaultView: 'month',  
            handleWindowResize: true,   
            height: $(window).height() - 200,   
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: defaultEvents,
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            eventLimit: true, // allow "more" link when too many events
            selectable: true,
            drop: function(date) { $this.onDrop($(this), date); },
            select: function (start, end, allDay) { $this.onSelect(start, end, allDay); },
            eventClick: function(calEvent, jsEvent, view) { $this.onEventClick(calEvent, jsEvent, view); }

        });

        //on new event
        this.$saveCategoryBtn.on('click', function(){
            var categoryName = $this.$categoryForm.find("input[name='category-name']").val();
            var categoryColor = $this.$categoryForm.find("select[name='category-color']").val();
            if (categoryName !== null && categoryName.length != 0) {
                $this.$extEvents.append('<div class="external-event bg-' + categoryColor + '" data-class="bg-' + categoryColor + '" style="position: relative;"><i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>' + categoryName + '</div>')
                $this.enableDrag();
            }

        });
    },

   //init CalendarApp
    $.CalendarApp = new CalendarApp, $.CalendarApp.Constructor = CalendarApp
    
}(window.jQuery),

//initializing CalendarApp
function($) {
    "use strict";
    $.CalendarApp.init()
}(window.jQuery);


// // var formMessages = $('#activate_ai');

//     $(".cal-type-1").click(function(e) {
//        SnackBar.show({
//       text:"Saving option",
//       pos: 'bottom-center',
//       backgroundColor: '#039be5',
//       textColor: '#fff'
//       });

//       var form = $('#simple-cal');

//       var formData = $(form).serialize();
//     $.ajax({
//     type: 'POST',
//     url: $(form).attr('action'),
//     data: formData
//     })
//     .done(function(response) {
//  SnackBar.show({
//       text:"Calendar Selected",
//       pos: 'bottom-center',
//       backgroundColor: '#039be5',
//       textColor: '#fff'
//       });
//        $(".wel-cal").css("display", "none");


//     })
//     .fail(function(data) {
//       SnackBar.show({
//       text:"Opps there seems to be an error",
//       pos: 'top-center',
//       backgroundColor: '#e53935'
//       });
//       $(".adela_loader").css("display", "none");

//         });
//     });
// //
// // cal 2 school

//         $(".cal-type-2").click(function(e) {
//           var form = $('#school-cal');

//       var formData = $(form).serialize();
//     $.ajax({
//     type: 'POST',
//     url: $(form).attr('action'),
//     data: formData
//     })
//     .done(function(response) {
//  SnackBar.show({
//       text:"Calendar Selected",
//       pos: 'bottom-center',
//       backgroundColor: '#039be5',
//       textColor: '#fff'
//       });

//     })
//     .fail(function(data) {
//       SnackBar.show({
//       text:"Opps there seems to be an error",
//       pos: 'top-center',
//       backgroundColor: '#e53935'
//       });
//       $(".adela_loader").css("display", "none");

//         });
//     });


//             $(".cal-type-3").click(function(e) {
//               var form = $('#researcher-cal');

//       var formData = $(form).serialize();
//     $.ajax({
//     type: 'POST',
//     url: $(form).attr('action'),
//     data: formData
//     })
//     .done(function(response) {
//  SnackBar.show({
//       text:"Calendar Selected",
//       pos: 'bottom-center',
//       backgroundColor: '#039be5',
//       textColor: '#fff'
//       });

//     })
//     .fail(function(data) {
//       SnackBar.show({
//       text:"Opps there seems to be an error",
//       pos: 'top-center',
//       backgroundColor: '#e53935'
//       });
//       $(".adela_loader").css("display", "none");

//         });
//     });



});

</script>

        <script>
            var resizefunc = [];
        </script>

@stop
