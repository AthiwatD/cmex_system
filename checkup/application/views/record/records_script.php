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
            contentType: "application/json; charset=utf-8",
            dataType: 'JSON',
            success: function(response){
				// alert("Success");
                obj = response;
				console.log(obj);
                $("#" + input_id).html(obj);
            },
            error: function (xhr, textStatus, errorThrown) {
                alert("Status: " + textStatus + '\nError: ' + errorThrown + '\nFunction: load_lab_meaning');
            },
        });
    
	}
</script>
