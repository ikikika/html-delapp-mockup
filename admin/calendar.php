<?php
$title = "Calendar";
include('header.php'); ?>

<?php include('nav.php'); ?>

<!-- fullCalendar 2.2.5-->
<link rel="stylesheet" href="plugins/fullcalendarv3/fullcalendar.min.css">
<link rel="stylesheet" href="plugins/fullcalendarv3/fullcalendar.print.css" media="print">
<link rel="stylesheet" href="plugins/fullcalendar-scheduler/scheduler.min.css">
<style>
.external-event .description{
  font-weight:normal !important;
}

</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-3">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h4 class="box-title">Tasks <?= date('d M Y') ?></h4>
          </div>
          <div class="box-body">
            <!-- the events -->
            <div id="external-events">
              <div class="external-event bg-aqua">
                <span class="title">Pick Up @ 8AM-9AM</span><br>
                <span class="description">34 Jln Syed Hussein Taman Intan 02600 Arau Arau Perlis 02600 Malaysia Arau Perlis 02600 Malaysia</span>
              </div>
              <div class="external-event bg-red">
                <span class="title">Drop Off</span><br>
                <span class="description">Kawasan Perindustrian, Bukit Serdang, 43300</span>
              </div>
              <div class="external-event bg-aqua">
                <span class="title">Pick Up @ 12PM - 1PM</span><br>
                <span class="description">Kampung Tengah Mukim Tualang Langgar Kedah 06500 Malaysia Langgar Kedah 06500 Malaysia</span>
              </div>
              <div class="external-event bg-fuchsia">
                <span class="title">Delivery @ 2:30PM</span><br>
                <span class="description">2 10 Lrg Medan Tuanku 1 50300 Wilayah Persekutuan 50300 Malaysia 50300 Malaysia</span>
              </div>
              <div class="external-event bg-aqua">
                <span class="title">Pick Up @ 3PM - 4PM</span><br>
                <span class="description">1147A Jln Seberang Perak 05400 Alor Setar Kedah Alor Setar Kedah 05400 Malaysia</span>
              </div>
              <div class="checkbox">
                <label for="drop-remove">
                  <input type="checkbox" id="drop-remove" checked>
                  remove after drop
                </label>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>

      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="box box-primary">
          <div class="box-body no-padding">
            <!-- THE CALENDAR -->
            <div id="calendar"></div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /. box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div id="calendarModal" class="modal fade">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
            <h4 id="modalTitle" class="modal-title"></h4>
        </div>
        <div id="modalBody" class="modal-body">
          <table class="table">
            <tr>
              <td>Name</td>
              <td>Rod Stark</td>
            </tr>
            <tr>
              <td>Address</td>
              <td><span id="modalDesc"></span></td>
            </tr>
            <tr>
              <td>Package</td>
              <td>2 Boxes</td>
            </tr>
          </table>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>
<?php include('footer.php'); ?>
<!--  your js here -->
<!-- fullCalendar 2.2.5 -->
<script src="js/moment.min.js"></script>
<script src="plugins/fullcalendarv3/fullcalendar.min.js"></script>
<script src="plugins/fullcalendar-scheduler/scheduler.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).find('.title').text()), // use the element's text as the event title
          description: $.trim($(this).find('.description').text())
        };

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex: 1070,
          revert: true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        });

      });
    }

    ini_events($('#external-events div.external-event'));

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date();
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();

    $('#calendar').fullCalendar({
      contentHeight: 'auto',
      schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week: 'week',
        day: 'day'
      },
      defaultView: 'agendaDay',
      groupByResource: true,
      resources: [
        { id: 'a', title: 'Driver A \n John Doe' },
        { id: 'b', title: 'Driver B \n Peter Adam' },
        { id: 'c', title: 'Driver C \n Charlie Dexter' },
        { id: 'd', title: 'Driver D \n Edward Nigma' }
      ],
      eventRender: function(event, element) {
        element.find(".fc-content").append(" (" + event.description + ")");

      },
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar !!!
      drop: function (date, allDay, ui, resourceId) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject');

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject);

        // assign it the date that was reported
        copiedEventObject.start = date;
        copiedEventObject.allDay = allDay;
        copiedEventObject.backgroundColor = $(this).css("background-color");
        copiedEventObject.borderColor = $(this).css("border-color");
        copiedEventObject.resourceId = resourceId;

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove();
        }

      },
      eventClick:  function(event, jsEvent, view) {
            $('#modalTitle').html(event.title);
            $('#modalDesc').html(event.description);
            $('#eventUrl').attr('href',event.url);
            $('#calendarModal').modal();
        },
    });

    /* ADDING EVENTS */
    var currColor = "#3c8dbc"; //Red by default
    //Color chooser button
    var colorChooser = $("#color-chooser-btn");
    $("#color-chooser > li > a").click(function (e) {
      e.preventDefault();
      //Save color
      currColor = $(this).css("color");
      //Add color effect to button
      $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
    });
    $("#add-new-event").click(function (e) {
      e.preventDefault();
      //Get value and make sure it is not null
      var val = $("#new-event").val();
      if (val.length == 0) {
        return;
      }

      //Create events
      var event = $("<div />");
      event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
      event.html(val);
      $('#external-events').prepend(event);

      //Add draggable funtionality
      ini_events(event);

      //Remove event from text input
      $("#new-event").val("");
    });

    // if(calendar){
    //
    //     var calHeight = $(window).height()*0.83;
    //     $('#calendar').fullCalendar('option', 'height', calHeight);
    //
    // }
    var newheight = ( $(window).height() - 250 ) / 48;
    console.log( newheight );
    $(".fc-axis.fc-time.fc-widget-content").css("font-size", (newheight/2)+"px");
    $(".fc-time-grid .fc-slats td").css('height', newheight);



  });


</script>
<!-- end js -->
<?php include('end.php'); ?>
