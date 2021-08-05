<script>
    


	function pack_tab_id_array(tab_id){
        var input_arr = document.getElementById(tab_id).getElementsByClassName("input_data");
        var obj = {};
        for(i=0;i<input_arr.length;i++){
			obj[i] = {};
			obj[i]["id"] = input_arr[i].id;
            obj[i]["tag"] = input_arr[i].tagName;
			obj[i]["type"] = input_arr[i].type;
			obj[i]["alt"] = input_arr[i].alt;
            obj[i]["placeholder"] = input_arr[i].placeholder;
			obj[i]["value"] = input_arr[i].value;
			if (input_arr[i].tagName == "TEXTAREA") {
				obj[i]["value"] = input_arr[i].value.split('\n');
			}

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
        var ourObj = {};
		ourObj.checkup_id = <?php echo $checkup_id; ?>;
		ourObj.tab_id = tab_id;
        ourObj.data = pack_tab_id_array(tab_id);

        // var points = JSON.stringify(ourObj);
		var points = ourObj;
        $.ajax({
            url:'<?php echo base_url(); ?>Record/serviceUpdateTab/',
            method: 'POST',
            //body: points,
            data:  points,
            dataType: 'TEXT',
            success: function(response){
                console.log(response);
				alert("Saved Succelful");
            },
            error: function (xhr, textStatus, errorThrown) {
                alert("Status: " + textStatus + '\nError: ' + errorThrown + '\nFunction: save_tab_data');
            },
        });
	}

	$(document).ready(function() {
        var history_tab = <?php echo $history_tab; ?>;
		var exam_tab = <?php echo $exam_tab; ?>;
		var input_lab_tab = <?php echo $input_lab_tab; ?>;
		var exam_result_tab = <?php echo $exam_result_tab; ?>;
		var exam_lab_tab = <?php echo $exam_lab_tab; ?>;
		var exam_xray_tab = <?php echo $exam_xray_tab; ?>;
		var exam_ekg_tab = <?php echo $exam_ekg_tab; ?>;
		var suggest_tab = <?php echo $suggest_tab; ?>;

        // if(history_tab.length>0){
			// console.log(history_tab);
        	retrieve_data(history_tab);
			retrieve_data(exam_tab);
			retrieve_data(input_lab_tab);
			retrieve_data(exam_result_tab);
			retrieve_data(exam_lab_tab);
			retrieve_data(exam_xray_tab);
			retrieve_data(exam_ekg_tab);
			retrieve_data(suggest_tab);
        // }
    });

	function retrieve_data(data){
		for(i=0;i<data.length;i++){
			$("#"+data[i].id).val(data[i]['value']);

			if(data[i]['tag'] == "TEXTAREA"){
				var txt = "";
				if(Array.isArray(data[i]['value'])){
					for(j=0;j<data[i]['value'].length;j++){
						txt += data[i]['value'][j] + '\n';
					}
					$("#"+data[i].id).val(txt);
				}
			}

			
			if(data[i]['tag'] == "INPUT"){
				if(data[i]['type'] == "checkbox"){
					// alert("test checkbox");
					if(data[i]['checked'] == "true"){
						// alert("test checkbox");
						$("#"+data[i].id).prop( "checked", true );
					}
					else{
						$("#"+data[i].id).prop( "checked", false );
					}
				}
				else if(data[i]['type'] == "radio"){
					if(data[i]['checked'] == "true"){
						$("#"+data[i].id).prop( "checked", true );
					}
					else{
						$("#"+data[i].id).prop( "checked", false );
					}
				}
			}
		}


    }
</script>
