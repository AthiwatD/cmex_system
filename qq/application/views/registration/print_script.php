<script>
	function print_queue_json(data_json){
		//var data_json = JSON.stringify(data_arr);
		console.log(data_json);
		var datas = data_json;
		var canvas = document.getElementById('canvas');
		var context = canvas.getContext('2d');
		var address = 'http://' + <?php echo "'" . $printer_ip . "'"; ?> + '/cgi-bin/epos/service.cgi?devid=local_printer&timeout=60000';

		// alert(address);
		var date_th = datas.register_datetime.split(" ");
		var time = date_th[1];
		date_th = thai_date_full(date_th[0]);

		var txt = `<epos-print xmlns="http://www.epson-pos.com/schemas/2011/03/epos-print">
		<feed unit="10"/>
		<text smooth="true"/>
		<text align="center"/>
		<image width="73" height="99" color="color_1" mode="mono">AAAAAVVAAAAAAAAAAAKqoAAAAAAAAAADVUAAAAAAAAA4AqqgDgAAAAAARgK1wBEAAAAAALkCqiA+gAAAAAFGAtXAQUAAAAACucMqob6gAAAABUYC1UJBUAAAAAq58SqFXqgAAAAVRgFVhKFUAAAAKrnwawVeqgAAAFVGACwFoVUAAACqufAgBV6qgAAAVUYAAAUhVQAAAKq58AAC3qqAAAAqhgAABSFVAAAAFXnwAAVeqgAAAAqGAAACoVQAAAAKufAABV6oAAAAAqYAAAKhUAAAAAFZ4AAFXqAAAAAAggAAACAAAAAAAAAAAAAAAAAAAVQAAAAAADSAAAKqAAAAAABLYAAFVQAAAAAA9JAAAquAAAAAAQtgAAXcQAAAAAL0oAACI6AAAAAFC0AABdxwAAAABXWwAAIjgAAAAALKQAAF3OAAAAACtqAAAmcAAAAAAUnQAAWYgAAAAAC2IAACZwAAAAAAS8AAA5oAAAAAADQgAAAgAAAAAAAAQAAAAAAAAAAAAAAAAAL/4AAD/8AAAAACgAAABAAAAAAABV/wAAf/8AAAAA1QAAAEAAgAAAASr/AABf/0AAAAPVAAAAUACgAAAEKt8AAE//UAAAC9UgAABQAKgAAAwq3wGAX/9QAAAD1SACYFAAoAAABCrfBZCr/1AAAAPVIApoVACgAAAAKt8VlCv+gAAAANUgKmoqAgAAAAAqrBW0Ff4AAAAAFVAqSgoAAAAAAAqgFbYF2AAAAAAKQCqoAiAAAAAABYA1VgHQAAAAAAAACqoAAAAAAAAAADdUAAAAAAAAAAAY6gAAAAAAAAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFUAAAABJIAAAAOqx8AB5ttwAAAEVSAgAhEkkAAAC6rHwAXi22AAABRASDAFBUSQAAAXAAPACvKAAAAAFAAIOBUDQAAAACoAB8gVYoAAAAAUAAA4KpVAAAAAKgAHhlVigAAAABQABFkogsAAAAAqAAOG0XK/4UDAFAAESSCDREDhgCoAB4bBZLuggkAUAAABIZNEQHOAKgAHwsFigABMABQACAEBAsAAMwAqAAOAAXUAAAwAFAAEQAFCwAAUACoAB4AAooAAKgAUAABAAVKAABUACwBHgAGjQABrABTqhEABRL/4UoALFWOAATNQAKKAAuqkAAFCr/lBYAAVA4AAoVAAgIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFVRIFEpBBapEAIACEoEgICgAkQAVVEAURIEBSQQA</image>
		<feed unit="14"/>
		<text lang="en"/>
		<text width="2" height="2"/>
		<text font="font_b"/>
		<text><?php echo $site->site_name; ?>&#10;</text>
		<feed unit="10"/>
		<text dw="true" dh="true"/>
		<text width="1" height="1"/>
		<text>หมายเลขของท่าน&#10;</text>
		<feed unit="10"/>
		<text width="8" height="8"/>
		<text>` + datas.register_type + " " + datas.register_number + `&#10;</text>
		<feed unit="10"/>
		<text width="1" height="1"/>
		<text>` + date_th + `&#10;</text>
		<feed unit="10"/>
		<text>เวลา ` + time + `&#10;</text>
		<feed unit="10"/>
		<text width="3" height="3"/>
		<text>HN: ` + datas.register_hn + `&#10;</text>
		<feed unit="10"/>
		<text width="1" height="1"/>
		<text>ชื่อ: ` + datas.register_name + `&#10;</text>

		<feed unit="10"/>
		<barcode type="code39" hri="below" font="font_a" width="3" height="70">` + datas.register_hn + `</barcode>
		<feed unit="10"/>
		<text align="left"/>
		<text x="20"/>
		<text width="2" height="2"/>
		<text>เบอร์โทรศัพท์: ` + datas.telephone + `&#10;</text>

		`;


		

		var claim_text = "";
		if(datas.claim_name_show == "อื่น ๆ"){
			claim_text = datas.claim_name_show + "(" + datas.claim_other + ")";
		}else{
			claim_text = datas.claim_name_show;
		}

		var documents = datas.document_name_shows.split("<?php echo SEPERATE_STR; ?>"); 
		var document_text =  "";
		if((documents.length > 0) && (documents[0]!="")){
			for(var i=0;i<documents.length;i++){
				var num = i + 1;
				document_text += `<text x="20"/>`;
				document_text += `<text>` + num + ". " + documents[i] + "&#10;</text>";
			}
		}

		/*
		var departments = department_names.split(";");
		var department_text =  "";
		if(departments.length > 0){
			for(var i=0;i<departments.length;i++){
				var num = i + 1;
				department_text += `<text x="20"/>`;
				department_text += `<text>` + num + ". " + departments[i] + "&#10;</text>";
			}
		}
		*/

		var locations = datas.location_name_shows.split("<?php echo SEPERATE_STR; ?>");
		var location_text =  "";
		if(locations.length > 0){
			for(var i=0;i<locations.length;i++){
				var num = i + 1;
				location_text += `<text x="20"/>`;
				location_text += `<text>` + num + ". " + locations[i] + "&#10;</text>";
				
			}
		}

		var txt_xml_1 = txt + `
		<feed unit="30"/>
		<text smooth="true"/>
		<text width="1" height="1"/>
		<text align="left"/>
		<text x="20"/>
		<text>สิทธิการรักษา: ` + datas.claim_name_show + `&#10;</text>
		<feed unit="5"/>
		<text align="center"/>
		<text>_________________________&#10;</text>`;

		if(document_text != ""){
			txt_xml_1 += `<feed unit="15"/>
						<text align="left"/>
						<text x="20"/>
						<text>เอกสารแนบ: &#10;</text>` + document_text + `
						<feed unit="5"/>
						<text align="center"/>
						<text>_________________________&#10;</text>`;
		}
		
		txt_xml_1 += `<feed unit="15"/>
						<text align="left"/>
						<text x="20"/>
						<text>พบแพทย์: ` + datas.staff + `&#10;</text>
						<feed unit="5"/>
						<text align="center"/>
						<text>_________________________&#10;</text>`;

		txt_xml_1 += `<feed unit="15"/>
						<text align="left"/>
						<text x="20"/>
						<text>รับบริการ: ` + datas.path_name + `&#10;</text>
						<feed unit="5"/>
						<text align="center"/>
						<text>_________________________&#10;</text>`;

		txt_xml_1 += `
		<feed unit="15"/>
		<text align="left"/>
		<text x="20"/>
		<text>ลำดับบริการ: &#10;</text>` + location_text + `
		<feed unit="5"/>
		<text align="center"/>
		<text>_________________________&#10;</text>
		<feed unit="15"/>
		<cut type="feed"/>
		</epos-print>`;
		
		// console.log(txt_xml_1);

		var txt_xml_2 = txt + `
		<feed unit="30"/>
		<text smooth="true"/>
		<text width="2" height="2"/>
		<text align="left"/>
		<text x="20"/>
		<text>สิทธิการรักษา: ` + claim_text + `&#10;</text>
		<feed unit="5"/>
		<text align="center"/>
		<text>_________________________&#10;</text>`;
		if(document_text != ""){
			txt_xml_2 += `<feed unit="15"/>
							<text align="left"/>
							<text x="20"/>
							<text>เอกสารแนบ: &#10;</text>` + document_text + `
							<feed unit="5"/>
							<text align="center"/>
							<text>_________________________&#10;</text>`;
		}
		txt_xml_2 += `<feed unit="15"/>
							<text align="left"/>
							<text x="20"/>
							<text>พบแพทย์: ` + datas.staff + `&#10;</text>
							<feed unit="5"/>
							<text align="center"/>
							<text>_________________________&#10;</text>`;

		txt_xml_2 += `<feed unit="15"/>
							<text align="left"/>
							<text x="20"/>
							<text>รับบริการ: ` + datas.path_name + `&#10;</text>
							<feed unit="5"/>
							<text align="center"/>
							<text>_________________________&#10;</text>`;

		txt_xml_2 += `
		<feed unit="15"/>
		<text align="left"/>
		<text x="20"/>
		<text>ลำดับบริการ: &#10;</text>` + location_text + `
		<feed unit="5"/>
		<text align="center"/>
		<text>_________________________&#10;</text>
		<feed unit="15"/>
		<feed unit="10"/>
		<text width="1" height="1"/>
		<text>แสกน QR Code เพื่อดูรายละเอียด</text>
		<feed unit="10"/>
		<symbol type="qrcode_model_2" level="default" width="7" height="0" size="0">` + <?php echo "`" . base_url() . "Registration/registeredDetail/`"; ?> + datas.register_id + `</symbol>
		<feed unit="30"/>
		<cut type="feed"/>
		</epos-print>`;

		
		
		var epos = new epson.ePOSPrint(address);

		epos.onreceive = function (res) {  
			//alert('Response: ' + res.success);  
		};
		epos.onerror = function (err) { alert('Error Status : ' + err.status); };
		epos.oncoveropen = function () { alert('Cover Open'); };
		//epos.send(builder.toString());
		epos.send(txt_xml_1);
		// alert("print 1 complete");
		epos.send(txt_xml_2);
		// alert("print 2 complete");

		// var ourObj = {};

		// ourObj['printer_ip'] = "<?php echo $printer_ip;?>";
		// // ourObj['printer_data'] = {};
		// ourObj['printer_data'] = txt_xml_1;
		// // ourObj['printer_data'][1] = txt_xml_2;
		
		// // console.log(ourObj);

		// var points = JSON.stringify(ourObj);
		// $.ajax({
		// 	// url: "<?php echo base_url(); ?>Service/printRegistered",
		// 	url: "http://localhost:8888/print_service/example/print_register.php",
		// 	method: 'POST',
		// 	// headers: {
		// 	// 	'Accept': 'application/json',
		// 	// 	'Content-Type': 'application/json',
		// 	// },
		// 	// body: {
		// 	// 	ready: 'ready',
		// 	// },
		// 	// enctype: 'multipart/form-data',
		// 	data: points,
		// 	// contentType: "application/json; charset=utf-8",
		// 	// dataType: 'json',
		// 	success: function(response){
		// 		console.log(response);
		// 		// alert("พิมพ์สำเร็จ");

		// 	},
		// 	error: function (xhr, textStatus, errorThrown) {
		// 		//console.error(xhr, textStatus, errorThrown);
		// 		console.log(xhr);
		// 		alert("Status: " + textStatus + ' \nError: ' + errorThrown);
		// 	},
		// });
	}
</script>
