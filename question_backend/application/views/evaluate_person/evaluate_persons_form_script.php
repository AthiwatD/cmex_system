<script>
    var method = "<?php echo $method; ?>";
    var evaluation_id = "<?php echo $evaluation_id; ?>";
    var persons_arr = {};

    $(document).ready(function(){
        load_evaluate_persons();
    });

    function select_list_all(){
        var tbl_chks = document.getElementsByName("table_check");
        tbl_chks.forEach(function(item, index){
            item.checked = true;
        });
    }

    function select_list_cancel(){
        var tbl_chks = document.getElementsByName("table_check");
        tbl_chks.forEach(function(item, index){
            item.checked = false;
        });
    }

    function select_list(number){
        select_list_cancel();
        var tbl_chks = document.getElementsByName("table_check");
        var count = number;
        tbl_chks.forEach(function(item, index){
            if(count>0){
                item.checked = true;
                count--;
            }
        });
    }


    function update_item_arr(){

        persons_arr = {};
        var person_ids = document.getElementsByName("person_id");
        var chk_persons = document.getElementsByName("table_check");
        var index = 0;
        for(var i=0;i<chk_persons.length;i++){
            var chk_item = chk_persons[i].checked;
            if(chk_item == true){
                persons_arr[index] = {};
                persons_arr[index]["person_id"] = person_ids[i].value;
                index++;
            }
        }
    }

    
    function update_evaluate_persons(){
        if(confirm("คุณต้องการ บันทึก?")){
            update_item_arr();
            //var evaluation_id = {"evaluation_id" : <?php echo $evaluation_id; ?>};
            var ourObj = {};

            ourObj.evaluation_id = evaluation_id;
            ourObj.persons = persons_arr;
            var points = JSON.stringify(ourObj);
            // points = valid_json_char(points);
            // console.log(points);
            $.ajax({
                url: "<?php echo base_url(); ?>EvaluatePerson/updateEvaluatePersonsDo",
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                body: {
                    ready: 'ready',
                },
                data: points,
                contentType: "application/json; charset=utf-8",
                dataType: 'JSON',
                success: function(response){
                    //console.log(response);
                    alert("บันทึกสำเร็จ");
                },
                error: function (xhr, textStatus, errorThrown) {
                    //console.error(xhr, textStatus, errorThrown);
                    console.log(xhr);
                    alert("Status: " + textStatus + ' \nError: ' + errorThrown);
                },
            });
            
        }
    }

    function load_evaluate_persons(){
        var evaluate_persons = `<?php echo json_encode($evaluate_persons); ?>`;
        var persons = `<?php echo json_encode($persons); ?>`;
        var chk_persons = document.getElementsByName("table_check");

        evaluate_persons = valid_json_char(evaluate_persons);
        evaluate_persons = JSON.parse(evaluate_persons);

        persons = valid_json_char(persons);
        persons = JSON.parse(persons);

        for(var i=0;i<persons.length;i++){
            for(var j=0;j<evaluate_persons.length;j++){
                if(persons[i].person_id == evaluate_persons[j].person_id){
                    chk_persons[i].checked = true;
                }
            }
        }
    }
</script>