<script>

	function load_lab_meaning(lab_id, value, input_id){
        points = {'lab_id':lab_id, 'value':value};
        $.ajax({
            // url:'http://hosweb.med.cmu.ac.th/gateway/fu/move/clinic',
            url:'<?php echo base_url(); ?>Record/serviceGetLabMeaning/' + lab_id + '/' + value,
            method: 'POST',
            body: JSON.stringify({
                ready: 'ready'
            }),
            data: JSON.stringify(points),
			// body: points,
			// data: points,
            // contentType: "application/json; charset=utf-8",
            dataType: 'JSON',
            success: function(response){
				// alert("Success");
                obj = response;
				console.log(obj);
                $("#" + input_id).val(obj);
            },
            error: function (xhr, textStatus, errorThrown) {
                alert("Status: " + textStatus + '\nError: ' + errorThrown + '\nFunction: load_lab_meaning');
            },
        });
    
	}

	function load_lab_result(){

        var ourObj = {};
		ourObj.checkup_id = <?php echo $checkup_id; ?>;
        // var points = JSON.stringify(ourObj);
		var points = ourObj;
        $.ajax({
            url:'<?php echo base_url(); ?>Record/serviceGetLab/<?php echo $checkup_id; ?>',
            method: 'POST',
            data:  points,
            dataType: 'JSON',
            success: function(response){
                console.log(response);
                //var res = JSON.parse(response);
                // alert("Status: " + response.e);
				lab_arr = JSON.parse(response);
				txt = "";
				for(i=0;i<lab_arr.length;i++){
					if(lab_arr[i].tag=="TEXTAREA"){
						//alert("TEXTAREA");
						// txt += lab_arr[i].alt + ": ";
						for(j=0;j<lab_arr[i].value.length;j++){
							if(lab_arr[i].value[j]!=""){
								txt += lab_arr[i].value[j] + "\n";
							}
						}
						txt += "\n";
					}	
				}
				$("#exam_lab_detail").val(txt);
            },
            error: function (xhr, textStatus, errorThrown) {
                alert("Status: " + textStatus + '\nError: ' + errorThrown + '\nFunction: load_lab_result');
            },
        });
	}
</script>
