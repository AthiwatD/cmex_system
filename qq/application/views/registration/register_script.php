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
        
		$claims_arr = array();
		$count=0;
		foreach($claims as $claim){
			$claims_arr[$count] = $claim->claim_name_show;
			$count++;
		}

		$staffs_arr = array();
		$count=0;
		foreach($staffs as $staff){
			$staffs_arr[$count] = $staff->staff_fname . " " . $staff->staff_lname;
			$count++;
		}

		echo 'var claims = ', js_array($claims_arr), ';';
		echo 'var staffs = ', js_array($staffs_arr), ';';
    ?>

	autocomplete(document.getElementById("input_claim"), claims);
	autocomplete(document.getElementById("input_staff"), staffs);
        

	$( document ).ready(function() {
		listRegisteredLimit();
	});

	$(function () {
		$("#table_registered").DataTable({
			"responsive": true, 
			"lengthChange": false, 
			"autoWidth": false,
			"searching": true,
			"ordering": false,
			"info": true,
		}).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
    
  	});
  
	$("#input_register_hn").on('keydown', function (e) {
		if (e.key === 'Enter' || e.keyCode === 13) {
			get_data_by_hn();
		}
	});


	function get_data_by_hn(){
		var hn = document.getElementById("input_register_hn").value;

		if(hn != ""){

			// var param = `{"method":"GET_DEMOGRAPHIC_BY_HN_ALL","hn":"` + hn + `","output":"json"}`;
			// var points = param; 
			$.ajax({
				url: '<?php echo base_url() . "Service/getDataByHn/"; ?>' + hn, 
				method: 'GET',
				body: JSON.stringify({
					ready: 'ready'
				}),
				// data: points,
				contentType: "application/json; charset=utf-8",
				// dataType: 'JSON',
				success: function(response){
					console.log(response);
					response = JSON.parse(response);
					var txt = "";
					var patient = response._value;
					if(patient != []){
						pid = patient[0].pid;
						
						title_name = patient[0].title_nm;
						fname = patient[0].fnm;
						lname = patient[0].lnm;
						sex = patient[0].sex;
						birth_date = patient[0].birthdate;
						age = patient[0].age;
						right_code_old = patient[0].right;
						right_name_old = patient[0].title_nm;
						tel_old = patient[0].tel;
						allergic = patient[0].allergic;

						// alert(fname + " " + lname);
						$("#input_patient_name").val(title_name + fname + " " + lname);
						$("#lbl_patient_name").html("ชื่อ-นามสกุล: " + title_name + fname + " " + lname);
						$("#lbl_sex").html("เพศ: " + sex);
						$("#lbl_birth_date").html("วันเกิด: " + birth_date);
						$("#lbl_age").html("อายุ: " + age);
						$("#input_tel_old").val(tel_old);
						$("#lbl_tel_old").html("โทรศัพท์: " + tel_old);
						$("#lbl_allergic").html("แพ้ยา: " + allergic);
					}
					
				},
				error: function (xhr, textStatus, errorThrown) {
					alert("Status: " + textStatus + '\nError: ' + errorThrown+ '\nFunction: get_patient_data_by_hn');
				},
			});

		}

	}

	function pack_patient_arr(){
		var patient_arr = {};
		patient_arr["register_hn"] = $("#input_register_hn").val();
		patient_arr["register_name"] = $("#input_patient_name").val();
		// patient_arr["register_type"] = $("#select_register_type").children("option:selected").val();
		patient_arr["path_id"] = $("#select_register_path").children("option:selected").val();
		patient_arr["claim"] = $("#input_claim").val();
		patient_arr["staff"] = $("#input_staff").val();
		patient_arr["site_id"] = <?php echo $site_id; ?>;
		patient_arr["telephone"] = $("#input_tel_old").val();
		patient_arr["documents"] = {};
		var count = 0;
		var document_name_show = document.getElementsByName("document_name_show");

		for(var i=0;i<document_name_show.length;i++){
			if(document_name_show[i].checked){
				patient_arr["documents"][count] = document_name_show[i].value;
				count++;
			}
		}
		return patient_arr;
	}


	function register(){
		if(confirm("ยืนยันการลงทะเบียน?")){
			var ourObj = {};

			ourObj = pack_patient_arr();
				
			var points = JSON.stringify(ourObj);
			$.ajax({
				url: "<?php echo base_url(); ?>Registration/serviceAddRegister",
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
					// alert("ลงทะเบียนสำเร็จ dddd");
					listRegisteredLimit();
					print_queue_json(response);
				},
				error: function (xhr, textStatus, errorThrown) {
					//console.error(xhr, textStatus, errorThrown);
					console.log(xhr);
					alert("Status: " + textStatus + ' \nError: ' + errorThrown);
				},
			});
			
		}


	}

	function listRegisteredLimit(){
		
		var ourObj = {};

		ourObj['site_id'] = <?php echo $site_id; ?>;
		ourObj['limit'] = <?php echo SHOW_REGISTERED_LIMIT; ?>;

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
						txt += `<td><button class='btn-warning' onclick='print_queue_json(` ; //<button class="btn-danger" onclick='delete_register("` + datas[i].register_id + `")'>ลบ</button> 
						txt +=  JSON.stringify(datas[i]);
						txt += `)'>พิมพ์</button></td>`;
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
</script>
