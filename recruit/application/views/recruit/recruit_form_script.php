<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/fullcalendar/main.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/fullcalendar-interaction/main.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/fullcalendar-bootstrap/main.min.js"></script>

<script>
	<?php
		function js_str($s){
			return '"' . addcslashes($s, "\0..\37\"\\") . '"';
		}

		function js_array($array){
			$temp=array_map('js_str',$array);
			return '['.implode(',', $temp).']';
		}

		echo 'var publish_statuses = ',js_array($publish_statuses),';';
	?>
	
	autocomplete(document.getElementById("publish_status"), publish_statuses);

	function add_publish_dt(){
		var tb_publish_dt = document.getElementById("tbody_publish_dt");
		var tr=document.createElement("tr");
		
		var publish_dt_id=document.createElement("input");
		var publish_dt_name=document.createElement("input");
		var publish_dt_date=document.createElement("input"); publish_dt_date.type="date";
		var publish_dt_file=document.createElement("input"); publish_dt_file.type="file";
		var btn_del=document.createElement("button");

		var td_publish_dt_id=document.createElement("td");
		var td_publish_dt_name=document.createElement("td");
		var td_publish_dt_date=document.createElement("td");
		var td_publish_dt_file=document.createElement("td");
		var td_btn_del=document.createElement("td");
		
		$(tr).attr({});
		
		$(publish_dt_id).attr({
			"id":"publish_dt_id",
			"name":"publish_dt_id[]",
			"type":"hidden",
			"value":"0",
		});

		$(publish_dt_name).attr({
			"id":"publish_dt_name",
			"name":"publish_dt_name[]",
			"type":"text",
			"class":"form-control",
			"required" : "required",
		});

		$(publish_dt_date).attr({
			"id":"publish_dt_date",
			"name":"publish_dt_date[]",
			"type":"date",
			"class":"form-control",
			"required" : "required",
		});

		$(publish_dt_file).attr({
			"id":"publish_dt_file",
			"name":"publish_dt_file[]",
			"type":"file",
			"class":"form-control",
			"required" : "required",
			"style" : "padding:3px; !important",
		});

		$(btn_del).attr({
			"class":"btn btn-danger",
			"type":"button",
			"onclick":"delete_publish_dt(this)",
		});

		$(btn_del).html("ลบ");

		$(td_publish_dt_name).attr({});
		$(td_publish_dt_date).attr({});
		$(td_publish_dt_file).attr({});
		$(btn_del).attr({});

		$(td_publish_dt_name).append($(publish_dt_name));
		$(td_publish_dt_date).append($(publish_dt_date));
		$(td_publish_dt_file).append($(publish_dt_file));
		$(td_btn_del).append($(btn_del));

		$(tr).append($(publish_dt_id));
		$(tr).append($(td_publish_dt_name));
		$(tr).append($(td_publish_dt_date));
		$(tr).append($(td_publish_dt_file));
		$(tr).append($(td_btn_del));
		$(tbody_publish_dt).append($(tr));
	}


	function delete_publish_dt(bt){
		var td=$(bt).parent();
		var tr=$(td).parent();
		$(tr).remove();
	}

	function reload_publish(){
		document.location.reload(true);
	}

	function goback_index(){
		window.location.href="<?php echo base_url(); ?>";
	}

	$("body").on("submit","#form_add_publish",function(e){
		e.preventDefault();
		
		// var data = {
		//     from : from.val(),
		//     to : to.val(),
		//     speed : speed
		// };

		console.log("on submit");
		$.ajax({
			url:'<?php echo base_url().'Recruit/addRecruitProcess'; ?>',
			type:'GET',
			data:{},
			dataType:'json',
			success:function(response){
				// console.log(response);
				alert("come kk");
				console.log("success f");
				// $("#response").html(response['html']);
			},error: function (xhr, textStatus, errorThrown) {
                alert("Status: " + textStatus + '\nError: ' + errorThrown + '\nFunction: on submit form_add_publish');
            }
		});


		// $.ajax({
		// 	type:'POST',
		// 	url:'<?php echo base_url()."Recruit/addRecruitProcess"; ?>',
		// 	data:new FormData(this),
		// 	headers: {
  //               'Accept': 'application/json',
  //               'Content-Type': 'application/json'
  //           },
  //           body: JSON.stringify({
  //               ready: 'ready'
  //           }),
		// 	dataType:'json',
		// 	processData: false,
		// 	contentType:"application/json; charset=utf-8",
		// 	success:function(response){
		// 		console.log("success f");
		// 		console.log('<?php echo "url : ".base_url(); ?>');
		// 		// console.log(response);
		// 	},error:function(response){
		// 		console.log("error f");
		// 		// console.log(response);
		// 	}
		// });

		if($("#publish_dt_name").val()==undefined){
			$(".publishDtError").html("*** กรุณากรอก รายละเอียดประกาศ !").addClass('invalid-feedback d-block');
			$(".publishDtError").focus();
			$("#table_publish_dt").select();
		}else{
			$(".publishDtError").html(" ").removeClass('invalid-feedback d-block');
			$("#tbody_publish_dt").focus();
			$("#tbody_publish_dt").select();

			var publish_dt_id = $("#publish_dt_id").val();
			var publish_dt_name = $("#publish_dt_name").val();
			var publish_dt_date = $("#publish_dt_date").val();
			var publish_dt_file = $("#publish_dt_file").val();

			if(publish_dt_id != undefined && publish_dt_name != undefined && publish_dt_date != undefined && publish_dt_file !=undefined){

			}
			
		}

	});

</script>
