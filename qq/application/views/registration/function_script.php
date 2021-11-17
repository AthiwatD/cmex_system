<script>
	function listRegistered(){
		
		var ourObj = {};

		ourObj['site_id'] = <?php echo $site_id; ?>;

		var points = JSON.stringify(ourObj);
		$.ajax({
			url: "<?php echo base_url(); ?>Registration/serviceRegistered",
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
				console.log(response);

				var txt = "";
				if(response != ""){
					datas = response;
					
					for(var i=0; i<datas.length; i++){
						var date_time = datas[i].register_datetime.split(" ");
						txt += "<tr>";
						txt += "<td>" + date_time[1] + "</td>";
						txt += "<td>" + datas[i].register_type + " " + datas[i].register_number + "</td>";
						txt += "<td>" + datas[i].register_hn + "</td>";
						txt += "<td>" + datas[i].register_name + "</td>";
						txt += "<td>" + datas[i].path_name + "</td>";
						txt += "<td>" + datas[i].staff + "</td>";
						txt += "<td>" + datas[i].claim_name_show + "</td>";
						txt += "<td>" + datas[i].telephone + "</td>";
						txt += `<td><button class="btn-danger" onclick='delete_register("` + datas[i].register_id + `")'>ลบ</button> 
								<button class=" btn-warning" onclick='print_queue("` + JSON.stringify(datas[i]) + `")'>พิมพ์</button></td>`;
						txt += "</tr>";
					}
				}       
				document.getElementById("tbody_registered").innerHTML = txt;
			},
			error: function (xhr, textStatus, errorThrown) {
				//console.error(xhr, textStatus, errorThrown);
				console.log(xhr);
				alert("Status: " + textStatus + ' \nError: ' + errorThrown);
			},
		});
			
		

	}
	
	function delete_register(register_id){

		if(confirm("คุณต้องการลบลำดับคิวนี้ ใช่ หรือ ไม่?")){
			var ourObj = {};

			ourObj['register_id'] = register_id;
				
			var points = JSON.stringify(ourObj);
			$.ajax({
				url: "<?php echo base_url(); ?>Registration/serviceDeleteRegistered",
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
					console.log(response);
					// alert("ลงทะเบียนสำเร็จ");
					listRegistered();

				},
				error: function (xhr, textStatus, errorThrown) {
					//console.error(xhr, textStatus, errorThrown);
					console.log(xhr);
					alert("Status: " + textStatus + ' \nError: ' + errorThrown);
				},
			});
			
		}

	}
</script>
