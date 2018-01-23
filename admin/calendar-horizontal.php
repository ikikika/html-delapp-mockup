<?php
$title = "Calendar";
include('header.php'); ?>

<?php include('nav.php'); ?>

<!-- fullCalendar 2.2.5-->
<link rel="stylesheet" href="plugins/fullcalendarv3/fullcalendar.css">
<link rel="stylesheet" href="plugins/fullcalendarv3/fullcalendar.print.css" media="print">
<link rel="stylesheet" href="plugins/fullcalendar-scheduler/scheduler.css">
<style>
.external-event .description{
  font-weight:normal !important;
}
.fc-resource-area{
    width:15%;
}
.fc-highlight{
  background-color: #000 !important;
}

</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h4 class="box-title">Tasks <?= date('d M Y') ?></h4>
          </div>
          <div class="box-body">
            <!-- the events -->
            <div id="external-events">
              <div class="col-sm-3">
                <div class="external-event bg-aqua">
                  <span class="title">Pick Up @ 8AM-9AM</span><br>
                  <span class="description">34 Jln Syed Hussein Taman Intan 02600 Arau Arau Perlis 02600 Malaysia Arau Perlis 02600 Malaysia</span>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="external-event bg-red">
                  <span class="title">Drop Off</span><br>
                  <span class="description">Kawasan Perindustrian, Bukit Serdang, 43300</span>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="external-event bg-aqua">
                  <span class="title">Pick Up @ 12PM - 1PM</span><br>
                  <span class="description">Kampung Tengah Mukim Tualang Langgar Kedah 06500 Malaysia Langgar Kedah 06500 Malaysia</span>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="external-event bg-fuchsia">
                  <span class="title">Delivery @ 2:30PM</span><br>
                  <span class="description">2 10 Lrg Medan Tuanku 1 50300 Wilayah Persekutuan 50300 Malaysia 50300 Malaysia</span>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="external-event bg-aqua">
                  <span class="title">Pick Up @ 3PM - 4PM</span><br>
                  <span class="description">1147A Jln Seberang Perak 05400 Alor Setar Kedah Alor Setar Kedah 05400 Malaysia</span>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="checkbox">
                  <label for="drop-remove">
                    <input type="checkbox" id="drop-remove" checked>
                    remove after drop
                  </label>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>

      </div>
    </div>
    <div class="row">
      <!-- /.col -->
      <div class="col-md-12">
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
          revertDuration: 0,  //  original position after the drag
          opacity: 0.2
        });

      });
    }

    ini_events($('#external-events div.external-event'));

    var todayDate = moment().startOf('day');
    var YM = todayDate.format('YYYY-MM');
    var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
    var TODAY = todayDate.format('YYYY-MM-DD');
    var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

    $('#calendar').fullCalendar({
      contentHeight: 'auto',
      schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',

      scrollTime: "00:00:00",
      header: {
        left: 'today prev,next',
        center: 'title',
        right: 'timelineDay,timelineWeek'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week: 'week',
        day: 'day'
      },
      defaultView: 'timelineDay',
      resourceLabelText: 'Drivers',
      resources: [
        { id: 'a', title: 'John Doe' },
        { id: 'b', title: 'Peter Adam' },
        { id: 'c', title: 'Charlie Dexter' },
        { id: 'd', title: 'Edward Nigma' }
      ],
      events:[
        { id: '1', resourceId: 'b', start: TODAY  + 'T02:00:00', end: TODAY  + 'T06:00:00', title: 'event 1' },
        { id: '2', resourceId: 'a', start: TODAY  + 'T06:00:00', end: TODAY  + 'T08:00:00', title: 'event 1' },
        { id: '3', resourceId: 'a', start: TODAY  + 'T02:00:00', end: TODAY  + 'T03:00:00', title: 'event 1' }
      ],
      eventRender: function(event, element) {
        element.find(".fc-content").append(" (" + event.description + ")");
        element.parent().children().eq(element.index()+1).css('left',"75px");
        element.css("cssText","left: 75px !important;");
        element.css("background-color","red");
        console.log(element);
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
          $(this).parent().remove();
        }

        setcalwidth();

      },
      eventClick:  function(event, jsEvent, view) {
            $('#modalTitle').html(event.title);
            $('#modalDesc').html(event.description);
            $('#eventUrl').attr('href',event.url);
            $('#calendarModal').modal();
        },
    });


    setcalwidth();

    $(".external-event").click(function(){
      var title = $(this).find(".title").text();
      var description = $(this).find(".description").text();
      $('#modalTitle').html( title );
      $('#modalDesc').html( description );
      $('#calendarModal').modal();
    });

    function setcalwidth(){
      var calwidth = parseInt( $("#calendar").css('width') );
      var minuswidth = parseInt( $(".fc-divider.fc-col-resizer.fc-widget-header").css('width') ) + parseInt( $(".fc-resource-area.fc-widget-content").css('width') );
      //console.log(calwidth/49);
      $(".fc table").css('font-size', '10px');
      $(".fc table").css('width', calwidth);
      $(".fc-scroller-canvas, .fc-content table, .fc-slats, .fc-slats table").css('width', (calwidth - minuswidth));
      $("colgroup col").css('width', '10px');
    }


  });


</script>
<!-- end js -->
<?php include('end.php'); ?>
