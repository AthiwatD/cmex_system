<script>
    function get_board_persons(){
        if(check_board_select()){
            var e = document.getElementById("select_board");
            var board_id = e.options[e.selectedIndex].value;
            var board_name = e.options[e.selectedIndex].innerHTML;
            document.getElementById("hdn_board_name").value = board_name;

            $.ajax({
                url:'<?php echo base_url(); ?>Meeting/getBoardPersonsService/' + board_id,
                //url:'http://hosweb.med.cmu.ac.th/gateway/fu/clinic/OP11/date/2020-08-26',

                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    ready: 'ready'
                }),
                contentType: "application/json; charset=utf-8",
                dataType: 'JSON',
                success: function(response){
                    console.log(response);
                    //alert("ผ่าน");
                    var txt = "";
                    persons = response;
                    persons.forEach(function(item, index){
                        var no = index+1;
                        txt += "<tr>";
                        txt += `<input type='hidden' name='person_id[]' value='` + persons[index].person_id + `'>`;
                        txt += `<input type='hidden' name='person_name[]' value='` + persons[index].person_prefix + persons[index].person_fname + ` ` + persons[index].person_lname + `'>`;
                        txt += `<input type='hidden' name='position_name[]' value='` + persons[index].position_name + `'>`;
                        txt += `<td>` + persons[index].person_prefix + persons[index].person_fname + ` ` + persons[index].person_lname + `</td>`;
                        txt += `<td>` + persons[index].position_name + `</td>`;
                        txt += `<td><button type='button' class="btn btn-danger" onclick='delete_person(this)'>ลบ</button></td>`;
                        txt += "</tr>";
                    });
                        
                    document.getElementById("table_body_persons").innerHTML = txt;
                    
                },
                error: function (xhr, textStatus, errorThrown) {
                    alert("Get Persons\nStatus: " + textStatus + '\nError: ' + errorThrown + '\nFunction: get_board_persons');
                },
            });
        }
    }

    function check_board_select(){
        var e = document.getElementById("select_board");
        var board = e.options[e.selectedIndex].value;
        if(board.value != ""){
            return true;
        }
        return false;
    }

    function delete_person(bt){
        var td = $(bt).parent();
        var tr = $(td).parent();
        $(tr).remove();
    }

    function new_person(){
        var table_body_persons = document.getElementById("table_body_persons");
        var tr = document.createElement("tr");              
        var hdn_person_id = document.createElement("input"); 
        var txt_person_name = document.createElement("input"); 
        var txt_position_name = document.createElement("input"); 
        var td_person_name = document.createElement("td"); 
        var td_position_name = document.createElement("td"); 
        var td_deleted = document.createElement("td"); 
        var btn_deleted = document.createElement("button");

        $(tr).attr({
        });


        $(hdn_person_id).attr({
            "name" : "person_id[]",
            "type" : "hidden",
            "value" : "0",
        });

        $(txt_person_name).attr({
            "name" : "person_name[]",
            "type" : "text",
            "class" : "form-control",
            "required" : "required",
        });

        $(txt_position_name).attr({
            "name" : "position_name[]",
            "type" : "text",
            "class" : "form-control",
            "required" : "required",
        });

        $(btn_deleted).attr({
            "class" : "btn btn-danger",
            "type" : "button",
            "onclick" : "delete_person(this)",
        });
        $(btn_deleted).html("ลบ");
  
        $(td_person_name).attr({
        });

        $(td_position_name).attr({
        });

        $(td_deleted).attr({
        });

    

        $(td_person_name).append($(txt_person_name));
        $(td_position_name).append($(txt_position_name));
        $(td_deleted).append($(btn_deleted));

        $(tr).append($(hdn_person_id));
        $(tr).append($(td_person_name));
        $(tr).append($(td_position_name));
        $(tr).append($(td_deleted));

        
        $(table_body_persons).append($(tr));

    }
</script>