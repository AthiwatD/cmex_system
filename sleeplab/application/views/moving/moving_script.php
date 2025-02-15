
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


        echo 'var operation_rooms = ', js_array($operation_rooms), ';';
        echo 'var operation_room_colors = ', js_array($operation_room_colors), ';';
        echo 'var change_reasons = ', js_array($change_reasons), ';';
        // echo 'var cancel_reasons = ', js_array($cancel_reasons), ';';
    ?>

        autocomplete(document.getElementById("txt_operation_room_new"), operation_rooms);
        autocomplete(document.getElementById("txt_change_reason"), change_reasons);
        // autocomplete(document.getElementById("txt_cancel_reason"), cancel_reasons);

        // autocomplete(document.getElementById("txt_test_type"), test_types);
        
        // autocomplete(document.getElementById("txt_change_reason"), change_reasons);
        
        // autocomplete(document.getElementById("txt_symtom"), symtoms);

    check_searching();

    function save(){
        var patient_id = document.getElementById("txt_patient_id").value;

        if(patient_id == ""){
            if(confirm("คุณต้องการ เพิ่มข้อมูลการนัดใหม่")){
                addBooking();
            }
        }
        else{
            if(confirm("คุณต้องการ แก้ไขข้อมูลการนัด")){
                updateBooking();
            }
        }
    }

    function check_searching(){
      <?php 
        if(!empty($searching)){
      ?>
          $("#txt_patient_id").val("<?php echo $searching->patient_id; ?>");
          $("#txt_fname").val("<?php echo $searching->fname; ?>");
          $("#txt_lname").val("<?php echo $searching->lname; ?>");
          $("#txt_hn").val("<?php echo $searching->hn; ?>");
          $("#txt_birth_date").val("<?php echo $searching->birth_date; ?>");
          $("#txt_tel_1").val("<?php echo $searching->tel_1; ?>");
          $("#txt_tel_2").val("<?php echo $searching->tel_2; ?>");
          $("#txt_booking_id").val("<?php echo $searching->booking_id; ?>");
          $("#txt_receiving_date").val("<?php echo $searching->receiving_date; ?>");
          $("#txt_booking_date").val("<?php echo $searching->booking_date; ?>");
          $("#txt_doctor").val("<?php echo $searching->doctor; ?>");
          $("#txt_test_type").val("<?php echo $searching->test_type; ?>");
          $("#txt_operation_room").val("<?php echo $searching->operation_room; ?>");
          $("#txt_appointment_from").val("<?php echo $searching->appointment_from; ?>");
          $("#txt_channel").val("<?php echo $searching->channel; ?>");
          $("#txt_note").val("<?php echo $searching->note; ?>");
          <?php
            if($searching->two_staff == true){
          ?>
              $("#txt_two_staff").val("1");
          <?php
            }
            else{
          ?>
              $("#txt_two_staff").val("0");
          <?php
            }
          ?>

      <?php
        }
      ?>
    }

    function clear_patient(){
        $("#txt_patient_id").val("");
        $("#txt_fname").val("");
        $("#txt_lname").val("");
        $("#txt_hn").val("");
        $("#txt_birth_date").val("");
        $("#txt_tel_1").val("");
        $("#txt_tel_2").val("");
        $("#txt_booking_id").val("");
        $("#txt_receiving_date").val("");
        $("#txt_booking_date").val("");
        $("#txt_doctor").val("");
        $("#txt_test_type").val("");
        $("#txt_operation_room").val("");
        $("#txt_appointment_from").val("");
        $("#txt_channel").val("");
        $("#txt_note").val("");
        $("#txt_two_staff").val("0");
    }

    function getBookingService(booking_id){
        points = JSON.stringify(booking_id);
        $.ajax({
            // url:'http://hosweb.med.cmu.ac.th/gateway/fu/move/clinic',
            url:'<?php echo base_url(); ?>Booking/getBookingService/' + booking_id,
            method: 'POST',
            body: JSON.stringify({
                ready: 'ready'
            }),
            data: points,
            contentType: "application/json; charset=utf-8",
            dataType: 'JSON',
            success: function(response){
                console.log(response);
                obj = response;
                $("#txt_patient_id").val(obj.patient_id);
                $("#txt_fname").val(obj.fname);
                $("#txt_lname").val(obj.lname);
                $("#txt_hn").val(obj.hn);
                $("#txt_birth_date").val(obj.birth_date);
                $("#txt_tel_1").val(obj.tel_1);
                $("#txt_tel_2").val(obj.tel_2);
                $("#txt_receiving_date").val(obj.receiving_date);
                $("#txt_booking_id").val(obj.booking_id);
                $("#txt_booking_date").val(obj.booking_date);
                $("#txt_booking_date_old").val(obj.booking_date);
                $("#txt_doctor").val(obj.doctor);
                $("#txt_test_type").val(obj.test_type);
                $("#txt_operation_room").val(obj.operation_room);
                $("#txt_appointment_from").val(obj.appointment_from);
                $("#txt_channel").val(obj.channel);
                $("#txt_note").val(obj.note);
                $("#txt_two_staff").val(obj.two_staff);
            },
            error: function (xhr, textStatus, errorThrown) {
                alert("Status: " + textStatus + '\nError: ' + errorThrown + '\nFunction: getBookingService');
            },
        });
    }

    function getClosingService(closing_id){

      points = JSON.stringify(closing_id);
      $.ajax({
          url:'<?php echo base_url(); ?>Closing/getClosingService/' + closing_id,
          method: 'POST',
          body: JSON.stringify({
              ready: 'ready'
          }),
          data: points,
          contentType: "application/json; charset=utf-8",
          dataType: 'JSON',
          success: function(response){
              console.log(response);
              obj = response;
              // $("#txt_closing_id").val(obj.booking_id);
              // $("#txt_closing_id_2").val(obj.booking_id);
              $("#txt_booking_date").val(obj.booking_date);
              $("#txt_operation_room").val(obj.operation_room);
              $("#txt_note").val(obj.note);
          },
          error: function (xhr, textStatus, errorThrown) {
              alert("Status: " + textStatus + '\nError: ' + errorThrown + '\nFunction: getClosingService');
          },
      });
    }

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
                    if(($booking->booking_date) && ($booking->operation_room)){
                        $tmp = explode("-", $booking->booking_date);
                        $year = $tmp[0];
                        $month = $tmp[1] - 1;
                        $day = $tmp[2];
                        $txt .= "{";
                        $txt .= "title : '";
                        if($booking->two_staff){
                          $txt .= "*";
                        }
                        $txt .= $booking->operation_room . " " . $booking->fname; 
                        $txt .= "',"; 
                        $txt .= "start : new Date(" . $year . "," . $month . "," . $day . "),";
                        $txt .= "allDay : true,";     
                        $txt .= "url : 'javascript:getBookingService(" . $booking->booking_id . ");',";      
                        if(!empty($operation_room_colors[$booking->operation_room])) {
                          $txt .= "backgroundColor : '" . $operation_room_colors[$booking->operation_room] . "',";  
                          $txt .= "borderColor : '" . $operation_room_colors[$booking->operation_room] . "',";  
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
            <?php
                $txt = "";
                foreach($closings as $closing){
                    if(($closing->booking_date) && ($closing->operation_room)){
                        $tmp = explode("-", $closing->booking_date);
                        $year = $tmp[0];
                        $month = $tmp[1] - 1;
                        $day = $tmp[2];
                        $txt .= "{";
                        $txt .= "title : '" . $closing->operation_room . " CLOSED',"; 
                        $txt .= "start : new Date(" . $year . "," . $month . "," . $day . "),";
                        $txt .= "allDay : true,";     
                        $txt .= "url : 'javascript:getClosingService(" . $closing->booking_id . ");',";      
                        $txt .= "backgroundColor : '#FF5555',";  
                        $txt .= "borderColor : '#FF5555',";  
                        $txt .= "},";  
                    }
                }
                echo $txt;
            ?>
      ],
    //   editable  : true,
    //   droppable : true, // this allows things to be dropped onto the calendar !!!
    //   drop      : function(info) {
    //     // is the "remove after drop" checkbox checked?
    //     if (checkbox.checked) {
    //       // if so, remove the element from the "Draggable Events" list
    //       info.draggedEl.parentNode.removeChild(info.draggedEl);
    //     }
    //   }    
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