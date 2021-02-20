<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/fullcalendar/main.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/fullcalendar-interaction/main.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/fullcalendar-bootstrap/main.min.js"></script>
<!-- Page specific script -->

<script>
    <?php
        function js_str($s)
        {
            return '"' . addcslashes($s, "\0..\37\"\\") . '"';
        }
        
        function js_array($array)
        {
            $temp = array_map('js_str', $array);
            return '[' . implode(',', $temp) . ']';
        }
        
        echo 'var doctors = ', js_array($doctors), ';';
        echo 'var doctor_colors = ', js_array($doctor_colors), ';';
        echo 'var operation_rooms = ', js_array($operation_rooms), ';';
        echo 'var operation_room_colors = ', js_array($operation_room_colors), ';';

    ?>


$(function () {

/* initialize the external events
 -----------------------------------------------------------------*/
function ini_events(ele) {
  ele.each(function () {

    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
    // it doesn't need to have a start or end
    var eventObject = {
      title: $.trim($(this).text()) // use the element's text as the event title
    }

    // store the Event Object in the DOM element so we can get to it later
    $(this).data('eventObject', eventObject)

    // make the event draggable using jQuery UI
    $(this).draggable({
      zIndex        : 1070,
      revert        : true, // will cause the event to go back to its
      revertDuration: 0  //  original position after the drag
    })

  })
}

ini_events($('#external-events div.external-event'))

/* initialize the calendar
 -----------------------------------------------------------------*/
//Date for the calendar events (dummy data)
var date = new Date()
var d    = date.getDate(),
    m    = date.getMonth(),
    y    = date.getFullYear()

var Calendar = FullCalendar.Calendar;
var Draggable = FullCalendarInteraction.Draggable;

var containerEl = document.getElementById('external-events');
var checkbox = document.getElementById('drop-remove');
var calendarEl = document.getElementById('calendar');

// initialize the external events
// -----------------------------------------------------------------

new Draggable(containerEl, {
  itemSelector: '.external-event',
  eventData: function(eventEl) {
    console.log(eventEl);
    return {
      title: eventEl.innerText,
      backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
      borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
      textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
    };
  }
});

var calendar = new Calendar(calendarEl, {
  plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
  header    : {
    left  : 'prev,next today',
    center: 'title',
    // right : 'dayGridMonth,timeGridWeek,timeGridDay'
    right : 'dayGridMonth'
  },
  'themeSystem': 'bootstrap',
  //Random default events
  events    : [
            <?php
                $txt = "";
                foreach($bookings as $booking){
                    if((!empty($booking->booking_date)) && (!empty($booking->operation_room))){
                        $tmp = explode("-", $booking->booking_date);
                        $year = $tmp[0];
                        $month = $tmp[1] - 1;
                        $day = $tmp[2];
                        $txt .= "{";
                        $txt .= "title : '" . $booking->operation_room . " " . $booking->fname . "',"; 
                        $txt .= "start : new Date(" . $year . "," . $month . "," . $day . "),";
                        $txt .= "allDay : true,";     
                        if(!empty($doctor_colors[$booking->doctor])) {
                          $txt .= "backgroundColor : '" . $doctor_colors[$booking->doctor] . "',";  
                          $txt .= "borderColor : '" . $doctor_colors[$booking->doctor] . "',";  
                        }
                        else{
                          $txt .= "backgroundColor : '#5555FF',";  
                          $txt .= "borderColor : '#5555FF',"; 
                        }
                        $txt .= "},";  
                    }
                }
                echo $txt;
            ?>
      ],
 
});

calendar.render();
// $('#calendar').fullCalendar()

/* ADDING EVENTS */
var currColor = '#3c8dbc' //Red by default
//Color chooser button
var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
        e.preventDefault()
        //Save color
        currColor = $(this).css('color')
        //Add color effect to button
        $('#add-new-event').css({
            'background-color': currColor,
            'border-color'    : currColor
        })
    })
    $('#add-new-event').click(function (e) {
    e.preventDefault()
    //Get value and make sure it is not null
    var val = $('#new-event').val()
    if (val.length == 0) {
        return
    }

    //Create events
    var event = $('<div />')
    event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
    }).addClass('external-event')
    event.html(val)
    $('#external-events').prepend(event)

    //Add draggable funtionality
    ini_events(event)

    //Remove event from text input
    $('#new-event').val('')
    })
});



</script>