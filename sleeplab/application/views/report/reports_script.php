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
        echo 'var test_types = ', js_array($test_types), ';';
        echo 'var operation_rooms = ', js_array($operation_rooms), ';';
        echo 'var operation_room_colors = ', js_array($operation_room_colors), ';';
        echo 'var test_types = ', js_array($test_types), ';';
        echo 'var appointment_froms = ', js_array($appointment_froms), ';';
        echo 'var change_reasons = ', js_array($change_reasons), ';';
        echo 'var channels = ', js_array($channels), ';';
        echo 'var symtoms = ', js_array($symtoms), ';';

    ?>

        autocomplete(document.getElementById("txt_report_by_doctor_doctor"), doctors);
        // autocomplete(document.getElementById("txt_test_type"), test_types);
        // autocomplete(document.getElementById("txt_operation_room"), operation_rooms);
        // autocomplete(document.getElementById("txt_appointment_from"), appointment_froms);
        // autocomplete(document.getElementById("txt_channel"), channels);
</script>