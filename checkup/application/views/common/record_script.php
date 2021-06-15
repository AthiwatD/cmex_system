<script>
    // $(document).ready(function() {
    //     var form_data = <?php echo json_encode($form_data); ?>;
    //     if(form_data.length>0){
    //         retrieve_data(JSON.parse(form_data[0].data_json));
    //     }
    // });


	function pack_tab_id_array(tab_id){
        var input_arr = document.getElementById(tab_id).getElementsByClassName("input_data");
        var obj = {};
        for(i=0;i<input_arr.length;i++){
			obj[i] = {};
			obj[i]["id"] = input_arr[i].id;
            obj[i]["tag"] = input_arr[i].tagName;
			obj[i]["type"] = input_arr[i].type;
            obj[i]["alt"] = input_arr[i].alt;
            obj[i]["value"] = input_arr[i].value;

            if (input_arr[i].tagName == "INPUT") {

                if (input_arr[i].type == "checkbox") {
                    if (input_arr[i].checked) {
                        obj[i]["checked"] = true;
                    }else{
                        obj[i]["checked"] = false;
                    }
                }
                else if (input_arr[i].type == "radio") {
                    if (input_arr[i].checked) {
                        obj[i]["checked"] = true;
                    }else{
                        obj[i]["checked"] = false;
                    }
                }
                
            }
            
        }
        return obj;
    }

   
        
	function save_tab_data(tab_id){
		// alert("save_tab_data");
		var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = yyyy + "-" + mm + "-" + dd;

        var ourObj = {};
		ourObj.checkup_id = <?php echo $checkup_id; ?>;
		ourObj.tab_id = tab_id;
        ourObj.data = pack_tab_id_array(tab_id);

        var points = JSON.stringify(ourObj);
        $.ajax({
            url:'<?php echo base_url(); ?>Record/serviceUpdateTab/<?php echo $checkup_id; ?>/' + tab_id,
            method: 'POST',
            body: points,
            data:  points,
            dataType: 'JSON',
            success: function(response){
                console.log(response);
                //var res = JSON.parse(response);
                // alert("Status: " + response.e);
            },
            error: function (xhr, textStatus, errorThrown) {
                alert("Status: " + textStatus + '\nError: ' + errorThrown + '\nFunction: save_tab_data');
            },
        });
	}


	function retrieve_data(data_json){
        //var data_json = form_data.data_json;
        data_json_keys = Object.keys(data_json);
        console.log(data_json_keys);
        data_json_values = Object.values(data_json);
        console.log(data_json_values);
        var input_arr = document.getElementsByClassName("input_data");
        for(i=0;i<input_arr.length;i++){
            if(input_arr[i].tagName == "INPUT"){
                
                if (input_arr[i].type == "checkbox") {
                    if (data_json_values[i] == true) {
                        input_arr[i].checked = true;
                    }else{
                        input_arr[i].checked = false;
                    }
                }
                else if (input_arr[i].type == "radio") {
                    if (data_json_values[i] == true) {
                        input_arr[i].checked = true;
                    }else{
                        input_arr[i].checked = false;
                    }
                }
                else{
                    input_arr[i].value = data_json_values[i];
                }
            }
            else{
                input_arr[i].value = data_json_values[i];
            }
        }
    }
</script>
