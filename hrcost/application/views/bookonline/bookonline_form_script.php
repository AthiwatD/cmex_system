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
	// [Athiwat][25/06/2564][add code links echo system backend && frontend]
	var ls_system="";
	var ls_sys="";
	var url_index="";

	<?php
		if(isset($system) && !empty($system)){ echo 'ls_system = "'.$system.'";'; }
	?>

	if(ls_system=="frontend") ls_sys="front";
	else if(ls_system=="backend") ls_sys="back";
	
	if(ls_system!=="" && ls_system!==undefined && ls_system!==null){
		let path_index="Bookonline/index/";
		url_index="<?php echo base_url() ?>"+path_index+ls_sys;
	}

	// [setting hd status]
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

	// [19/04/2564][ton][setting check method add && update of btn submit]
	var check_add_dt = 0;
	$("#form_submit").hide();
	check_publish_dt();

	// ------------------------------ [form update] ------------------------------
	function formedit_delete_publish_file(hd_id,file_id,numot){
		swal({ title: "คุณจะลบข้อมูลหรือไม่ ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "ใช่, ลบข้อมูล !",
                cancelButtonText: "ยกเลิก",
                closeOnConfirm: false,
                closeOnCancel: false,
                timer: 9500
        },function(isConfirm){
        	if(isConfirm){
	                var path=hd_id+"/"+file_id+"/"+numot;
	                //console.log(path);
	                $.ajax({
				type:"POST",
				url:'<?php echo base_url()."Bookonline/deleteBookonlineFile/" ?>'+path,
				dataType:'json',
				cache:false,
				contentType:false,
				processData:false,
				success:function(response){
					// console.log("success : "+response);
					if(response["delete_status"]){
						var trclass="tr_view_publish_dt_"+hd_id+"_"+file_id;
						$("."+trclass).hide();
						swal({title: 'ลบข้อมูลเรียบร้อยแล้ว !',text: 'คลิกปุ่ม OK เพื่อกลับสู่หน้าหลัก',type: 'success',timer: 9500});
					}
				},error: function (xhr, textStatus, errorThrown,response){
					// console.log("error : "+response);
			        	alert("Get deleteRecruitDt\nStatus: " + textStatus + '\nError: ' + errorThrown + '\nFunction: deleteRecruitDt');
				}
			});
        	}else{swal("ยกเลิก", "ยกเลิก การลบเรียบร้อย !", "success", 9500);}
        });

	}

	// ------------------------------ [form add] ------------------------------
	function add_publish_dt(){
		var tb_publish_dt = document.getElementById("tbody_publish_dt");
		var tr=document.createElement("tr");
		
		var publish_file_id=document.createElement("input");
		var publish_dt_name=document.createElement("input");
		var publish_dt_date=document.createElement("input"); publish_dt_date.type="date";
		var publish_dt_time=document.createElement("input"); publish_dt_time.type="time";
		var publish_dt_file=document.createElement("input"); publish_dt_file.type="file";
		var btn_del=document.createElement("button");

		var td_publish_file_id=document.createElement("td");
		var td_publish_dt_name=document.createElement("td");
		var td_publish_dt_date=document.createElement("td");
		var td_publish_dt_time=document.createElement("td");
		var td_publish_dt_file=document.createElement("td");
		var td_btn_del=document.createElement("td");
		
		$(tr).attr({});
		$(publish_file_id).attr({
			"name":"publish_file_id[]",
			"type":"hidden",
			"value":"0",
		});
		$(publish_dt_name).attr({
			"name":"publish_dt_name[]",
			"type":"text",
			"class":"form-control",
			"required" : "required",
		});
		$(publish_dt_file).attr({			
			"name":"publish_dt_file[]",
			"type":"file",
			"class":"form-control",
			"required" : "required",
			"style" : "padding:3px; !important",
		});
		$(btn_del).attr({
			"class":"btn btn-danger btn-sm",
			"type":"button",
			"onclick":"delete_publish_dt(this)",
		});
		$(btn_del).html("<i class='fas fa-minus'></i>");
		$(td_publish_dt_name).attr({});
		// $(td_publish_dt_date).attr({});
		// $(td_publish_dt_time).attr({});
		$(td_publish_dt_file).attr({});
		$(btn_del).attr({});
		$(td_publish_dt_name).append($(publish_dt_name));
		// $(td_publish_dt_date).append($(publish_dt_date));
		// $(td_publish_dt_time).append($(publish_dt_time));
		$(td_publish_dt_file).append($(publish_dt_file));
		$(td_btn_del).append($(btn_del));
		$(tr).append($(publish_file_id));
		$(tr).append($(td_publish_dt_name));
		// $(tr).append($(td_publish_dt_date));
		// $(tr).append($(td_publish_dt_time));
		$(tr).append($(td_publish_dt_file));
		$(tr).append($(td_btn_del));
		$(tbody_publish_dt).append($(tr));
		check_add_dt+=1;
		check_publish_dt();
	}

	function delete_publish_dt(bt){
		var td=$(bt).parent();
		var tr=$(td).parent();
		$(tr).remove();
		check_add_dt-=1;
		check_publish_dt();
	}

	function reload_publish(){
		document.location.reload(true);
	}

	function goback_index(){
		// window.location.href="<?php echo base_url(); ?>";
		if(url_index != undefined) window.location.href=url_index;
	}

	function check_publish_dt(){
		if(check_add_dt > 0) $("#form_submit").show(); else $("#form_submit").hide();
		if(check_update_hd > 0 && check_add_dt == 0) $("#form_submit").show();
	}

	function check_version_jquery(){
		if(typeof jQuery != 'undefined') alert(jQuery.fn.jquery); // jQuery is loaded => print the version
	}

</script>
