<script>

	setInterval(getWaitingHn(), <?php echo INTERVAL_TIME_NODE; ?>);
	$("#div_popup_information").fadeOut(0);

	function getWaitingHn(){
		
		
		var ourObj = {};

		ourObj['site_id'] = <?php echo $department->site_id; ?>;
		ourObj['department_id'] = <?php echo $department->department_id; ?>;
		ourObj['channel_id'] = <?php echo $channel_id; ?>;

		var points = JSON.stringify(ourObj);
		$.ajax({
			url: "<?php echo base_url(); ?>Node/serviceWaitingHn",
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
					
					/////////////////////////////////////////////
					//
					//	รับ
					//
					/////////////////////////////////////////////
					if(datas["received"].length == 0){
						document.getElementById("tbody_received").innerHTML = "";
					}
					for(var i=0; i<datas["received"].length; i++){
						var date_time = datas["received"][i].send_datetime.split(" ");
						var sender = datas["received"][i].send_by_department_name;
							if((sender == null) || (sender == 0)){
								sender = "เวชระเบียน";
							}
						txt += "<tr>";
						txt += "<td style='padding:0px; vertical-align: middle;' class='text-center'>" + sender + "</td>";
						txt += "<td style='padding:0px; vertical-align: middle; width:85px;' class='text-center'>" + date_time[1] + "</td>";
						txt += `<td style='padding:0px;' class='text-center'>
									<button class="form-control btn btn-success" type="button"
										onclick="call_number('` + datas["received"][i].waiting_id + `'` +
															`)">` 
										+ datas["received"][i].register_type + datas["received"][i].register_number + `</button></td>`;
						txt += `<td style='padding:0px; width:85px;' class='text-center'><button class="form-control btn btn-primary" 
									id="button_waiting_id_` + datas["received"][i].waiting_id + `" 
									onclick='copy_to_clipboard("button_waiting_id_` + datas["received"][i].waiting_id + `", "div_popup_information")'>`+ 
										datas["received"][i].register_hn + `</button></td>`;
						txt += "</tr>";
					}
					document.getElementById("tbody_received").innerHTML = txt;


					/////////////////////////////////////////////
					//
					//	เรียก
					//
					/////////////////////////////////////////////
					txt="";
					if(datas["called"].length == 0){
						document.getElementById("tbody_called").innerHTML = "";
					}
					for(var i=0; i<datas["called"].length; i++){
						var date_time = datas["called"][i].call_datetime.split(" ");
						var channel = 0;
						
						if(datas["called"][i].call_by_channel_number){
							channel = datas["called"][i].call_by_channel_number;
						}
						else{
							channel = "ช่อง";
						}

						txt += "<tr>";
						txt += `<td style='padding:0px; vertical-align: middle;' class='text-center'>
									<button class="form-control btn btn-danger" type="button" 
											id="button_send_time_register_` + datas["called"][i].register_type + `_` + datas["called"][i].register_number + `" 
											onclick='requeue("` + datas["called"][i].waiting_id + `")'>` + date_time[1] + `</button></td>`;
						txt += `<td style='padding:0px; vertical-align: middle;' class='text-center'>
									<button class="form-control btn btn-warning" type="button"
											onclick="call_repeat('` + datas["called"][i].waiting_id + `'` +
																	`)">`
																	+ datas["called"][i].call_by_channel_name + `</button></td>`;
						txt += `<td style='padding:0px;' class='text-center'>
									<button class="form-control btn btn-success" type="button"
										onclick="copy_register('` + datas["called"][i].register_id + `','` 
																	+ datas["called"][i].register_type + `','`
																	+ datas["called"][i].register_number + `','`
																	+ datas["called"][i].register_hn + `','`
																	+ datas["called"][i].waiting_id + `'` +
															`)">` 
										+ datas["called"][i].register_type + datas["called"][i].register_number + `</button></td>`;
						txt += `<td style='padding:0px;' class='text-center'><button class="form-control btn btn-primary" 
									id="button_waiting_id_` + datas["called"][i].waiting_id + `" 
									onclick='copy_to_clipboard("button_waiting_id_` + datas["called"][i].waiting_id + `", "div_popup_information")'>`+ 
										datas["called"][i].register_hn + `</button></td>`;
						txt += "</tr>";
					}
					
					document.getElementById("tbody_called").innerHTML = txt;

				}       

				////////////////////////////////////////////
				//
				//	ส่ง
				//
				/////////////////////////////////////////////
				txt="";
				if(datas["send"].length == 0){
					document.getElementById("tbody_send").innerHTML = "";
				}
				for(var i=0; i<datas["send"].length; i++){
					var date_time = datas["send"][i].call_datetime.split(" ");
					var channel = 0;
					
					if(datas["send"][i].call_by_channel_number){
						channel = datas["send"][i].call_by_channel_number;
					}
					else{
						channel = "ช่อง";
					}

					txt += "<tr>";
					txt += `<td style='padding:0px; vertical-align: middle;' class='text-center'>
								<button class="form-control btn-danger" 
									id="button_cancel_send_id_` + datas["send"].waiting_id + `" 
									onclick='cancel_send("` + datas["send"].waiting_id + `")'>`+ time +`</button></td>`;
					txt += `<td style='padding:0px; vertical-align: middle;' class='text-center'>
								` + datas["send"][i].register_type + datas["send"][i].register_number + `</td>`;
					txt += `<td style='padding:0px;' class='text-center'>
					<button class="form-control btn btn-primary" 
									id="button_waiting_id_` + datas["send"][i].waiting_id + `" 
									onclick='copy_to_clipboard("button_waiting_id_` + datas["send"][i].waiting_id + `", "div_popup_information")'>`+ 
										datas["send"][i].register_hn + `</button></td>`;
					txt += `<td style='padding:0px;' class='text-center'>`
									+ datas["send"][i].receive_by_department_name +
							`</td>`;
					txt += "</tr>";
				}
				
				document.getElementById("tbody_send").innerHTML = txt;
				
			},
			error: function (xhr, textStatus, errorThrown) {
				//console.error(xhr, textStatus, errorThrown);
				console.log(xhr);
				alert("Status: " + textStatus + ' \nError: ' + errorThrown);
			},
		});
			
	}


	function send_register(){

		var ourObj = {};

		ourObj['waiting_id'] = $("#input_waiting_id").val();
		ourObj['register_id'] = $("#input_register_id").val();
		ourObj['register_type'] = $("#input_register_type").val();
		ourObj['register_number'] = $("#input_register_number").val();
		ourObj['register_hn'] = $("#input_register_hn").val();
		ourObj['site_id'] = <?php echo $site->site_id; ?>;
		ourObj['channel_id'] = <?php echo $channel_id; ?>;
		ourObj['register'] = $("#input_register").val();
		ourObj['send_by_department_id'] = <?php echo $department->department_id; ?>;
		ourObj['receive_by_department_id'] = document.getElementById("select_receive_by_department_id").value;

		var points = JSON.stringify(ourObj);
		$.ajax({
			url: "<?php echo base_url(); ?>Node/serviceSendRegister",
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
				getWaitingHn();
			},
			error: function (xhr, textStatus, errorThrown) {
				//console.error(xhr, textStatus, errorThrown);
				console.log(xhr);
				alert("Status: " + textStatus + ' \nError: ' + errorThrown);
			},
		});

	}


	function call_number(waiting_id){
		var ourObj = {};

		ourObj['waiting_id'] = waiting_id;
		ourObj['channel_id'] = <?php echo $channel_id; ?>;

		var points = JSON.stringify(ourObj);
		$.ajax({
			url: "<?php echo base_url(); ?>Node/serviceCallNumber",
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
				getWaitingHn();
			},
			error: function (xhr, textStatus, errorThrown) {
				//console.error(xhr, textStatus, errorThrown);
				console.log(xhr);
				alert("Status: " + textStatus + ' \nError: ' + errorThrown);
			},
		});
			
	}


	function call_repeat(waiting_id){
		var ourObj = {};

		ourObj['waiting_id'] = waiting_id;
		ourObj['channel_id'] = <?php echo $channel_id; ?>;

		var points = JSON.stringify(ourObj);
		$.ajax({
			url: "<?php echo base_url(); ?>Node/serviceCallRepeat",
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
				getWaitingHn();
			},
			error: function (xhr, textStatus, errorThrown) {
				//console.error(xhr, textStatus, errorThrown);
				console.log(xhr);
				alert("Status: " + textStatus + ' \nError: ' + errorThrown);
			},
		});
			
	}

	function requeue(waiting_id){  
		if(confirm("คุณต้องการยกเลิกการเรียก ใช่ หรือ ไม่?")){  
			var ourObj = {};

			ourObj['waiting_id'] = waiting_id;
			// ourObj['channel_id'] = <?php echo $channel_id; ?>;

			var points = JSON.stringify(ourObj);
			$.ajax({
				url: "<?php echo base_url(); ?>Node/serviceRequeue",
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
					getWaitingHn();
				},
				error: function (xhr, textStatus, errorThrown) {
					//console.error(xhr, textStatus, errorThrown);
					console.log(xhr);
					alert("Status: " + textStatus + ' \nError: ' + errorThrown);
				},
			});
		}
		
	}


	function cancel_send(id){
		if(confirm("คุณต้องการยกเลิกการส่ง ใช่ หรือ ไม่?")){
			var ourObj = {};

			ourObj['waiting_id'] = waiting_id;
			// ourObj['channel_id'] = <?php echo $channel_id; ?>;

			var points = JSON.stringify(ourObj);
			$.ajax({
				url: "<?php echo base_url(); ?>Node/serviceCancelSend",
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
					getWaitingHn();
				},
				error: function (xhr, textStatus, errorThrown) {
					//console.error(xhr, textStatus, errorThrown);
					console.log(xhr);
					alert("Status: " + textStatus + ' \nError: ' + errorThrown);
				},
			});
		}
	}

	function copy_register(register_id, register_type, register_number, register_hn, waiting_id){
		$("#input_register_id").val(register_id);
		$("#input_register_type").val(register_type);
		$("#input_register_number").val(register_number);
		$("#input_register_hn").val(register_hn);

		$("#input_register").val(register_type + register_number);
		$("#input_waiting_id").val(waiting_id);
		$("#select_receive_by_department_id").focus();

	}

	function copy_to_clipboard(id, id_popup) {
		// alert(val);
		// document.getElementById(id_target).value = val;
	
		var range = document.createRange();
			range.selectNode(document.getElementById(id));
			window.getSelection().removeAllRanges(); // clear current selection
			window.getSelection().addRange(range); // to select text
			document.execCommand("copy");
			window.getSelection().removeAllRanges();// to deselect
			$("#" + id_popup).html("Copy Successful");
			$("#" + id_popup).fadeIn(500, function(){
				$("#" + id_popup).fadeOut(500);
			});
	
			
			//paste_from_clipboard(id_target);
	}
</script>
