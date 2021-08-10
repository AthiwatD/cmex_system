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
	// [Athwiat][16/07/2564][Set CMEx Defuat.]
	const arrCHKB=["salary_period[]","salary_fee[]","ot_period[]","center[]","department[]","position[]"];
	const arrTB_CHKB=[ ["sly_salary","salary_period[]"],
					   ["sly_salary_fee","salary_fee[]"],
					   ["sly_ot","ot_period[]"],
					   ["sev_center","center[]"],
					   ["tb_department","department[]"],
					   ["sev_position","position[]"] ];
	const icon_close="<i class='fa fa-times'></i>";

	// [Athiwat][09/08/2564][Set Global variables]
	var checkStu=false;
	var df_center=1;
	var statusLatestSly=false;
	var statusLatestOt=false;
	
	let stu_salary_period=[false,"กรุณาเลือกรายการ ช่วงเวลาเงินเดือน","salary_period[]"];
	let stu_salary_fee=[false,"กรุณาเลือกรายการ รายละเอียดเงินเดือน","salary_fee[]"];
	let stu_ot_period=[false,"กรุณาเลือกรายการ ช่วงเวลา OT","ot_period[]"];
	let stu_department=[false,"กรุณาเลือกรายการ แผนก","department[]"];
	let stu_position=[false,"กรุณาเลือกรายการ ตำแหน่ง","position[]"];
	let stu_center=[false,"กรุณาเลือกรายการ หน่วยงาน","center[]"];

	// [Athiwat][23/04/2564][add script backtoindex for recruit view]
	<?php 
		echo 'var base_url="'.base_url().'";';
		echo 'var shrotcutMenu_base_url="'.base_url().'Shcmenu/index/back";';  // [Athiwat][27/07/2564][add var shrotcutMenu_base_url]
	?>

	// [Athiwat][09/08/2564][add method checkBtnLatest]
	function checkBtnLatest(name){
		var ckb = $('input[name="'+name+'"]');
		//|--------------------------------------------------------------------------------------------------
		//| process latest
		//|--------------------------------------------------------------------------------------------------
		//| 1.check latest && !latest
		//| 2.set checkbox
		//| 3.set status latest sly and ot
		//| 4.set value = 0
		//| 5.insert db
		//| 6.set check value = 0 > checkbox = latest in callback formView
		//|--------------------------------------------------------------------------------------------------
		if(name=="salary_period[]"){
	    	if(!statusLatestSly){
				for(let[k,v] of Object.entries(ckb)){
			    	if(k==0) ckb.eq(k).prop('checked',true);
			    	else ckb.eq(k).prop('checked',false);
			    }
			    statusLatestSly=true;
				$("span.btnSlyLatest").removeClass("badge-primary");
				$("span.btnSlyLatest").addClass("badge-success");
			}else{
				for(let[k,v] of Object.entries(ckb)){
			    	ckb.eq(k).prop('checked',false);
			    }
			    statusLatestSly=false;
				$("span.btnSlyLatest").removeClass("badge-success");
				$("span.btnSlyLatest").addClass("badge-primary");
			}
	    }
	    if(name=="ot_period[]"){
	    	if(!statusLatestOt){
	    		for(let[k,v] of Object.entries(ckb)){
			    	if(k==0) ckb.eq(k).prop('checked',true);
			    	else ckb.eq(k).prop('checked',false);
			    }
			    statusLatestOt=true;
				$("span.btnOtLatest").removeClass("badge-primary");
				$("span.btnOtLatest").addClass("badge-success");
			}else{
				for(let[k,v] of Object.entries(ckb)){
			    	ckb.eq(k).prop('checked',false);
			    }
			    statusLatestOt=false;
				$("span.btnOtLatest").removeClass("badge-success");
				$("span.btnOtLatest").addClass("badge-primary");
			}
	    }
		
	}
		
	$("#form_manage_shcmenu").on("submit",function(e){
		e.preventDefault();
		var $this=$(e);
		if(checkNull(checkStu,arrCHKB)){
			var formData=new FormData(this); // [Athiwat][09/08/2564][add var formData]
			
			// [Athiwat][09/08/2564][add latest Sly and Ot Period.]
			if(statusLatestSly){ formData.append("statusLatestSly",statusLatestSly); }
			if(statusLatestOt){ formData.append("statusLatestOt",statusLatestOt); }

			$.ajax({
				type:"POST",
				dataType:"json",
				data:formData,
				url: base_url+"Shcmenu/addeShcmenuProcess",
				contentType:false,
				processData:false,
				cache:false,
				success:function(res){
					if(res["process_status"]){
						swal({title: 'เพิ่มข้อมูลเรียบร้อยแล้ว !',text: 'คลิกปุ่ม OK เพื่อกลับสู่หน้าหลัก',type: 'success',timer: 9500});
						setTimeout(function(){location.href=shrotcutMenu_base_url},6500);
					}else{
						swal({title: 'เพิ่มข้อมูลไม่สำเร็จ !',text: 'กรุณาตรวจสอบข้อมูลฟอร์ม',type: 'warning',timer: 9500});
					}
				},error:function(xhr,textSatus,errorThrown,res){
					alert("Get form_manage_shcmenu\nStatus: "+textSatus+"\nError: "+errorThrown+"\nFunction: form_manage_shcmenu");
				}
			});
		}
		
		
	});

	function showResult(name,key,value){
		var id="formViewResultHrcost";
		var form = document.getElementById(id);
		var tag='<div class="form-group"><div class="row"><label for="resulthr0" class="col-sm-3 col-form-label text-al-r">'+key+'</label><div class="col-sm-9"><p class="'+name+'"></p></div></div></div>';
		form.innerHTML = tag;
	}

	function checkBtnAll(name){
		var ckb = $('input[name="'+name+'"]');
	    var ckb_all = $('input[name="'+name+'"]:checkbox').length;
	    var ckb_checked = $('input[name="'+name+'"]:checked').length;
	    if(ckb_checked<ckb_all) $(ckb).prop('checked', true);
	    else $(ckb).prop('checked', false);
	}

	function checkedBtnAll(name){
		var ckb = $('input[name="'+name+'"]');
		$(ckb).prop('checked', true);
	}

	function checkedNullBtnAll(name){
		var ckb = $('input[name="'+name+'"]');
		$(ckb).prop('checked', false);
	}

	function checkNull(checkStu,arrCHKB){
		checkAll(arrCHKB);
		if(!stu_salary_period[0]){
			$(".menunameError").html(icon_close+stu_salary_period[1]).addClass("msgerr");
			$(".menuname_Error").removeClass("hide");
			setResultZero(5);
		}else if(!stu_salary_fee[0]){
			$(".menunameError").html(icon_close+stu_salary_fee[1]).addClass("msgerr");
			$(".menuname_Error").removeClass("hide");
			setResultZero(5);
		
		// [Athiwat][09/08/2564][access query ot and center]
		// }else if(!stu_ot_period[0]){
		// 	$(".menunameError").html(icon_close+stu_ot_period[1]).addClass("msgerr");
		// 	$(".menuname_Error").removeClass("hide");
		// 	setResultZero(5);
		// }else if(!stu_center[0]){
		// 	$(".menunameError").html(icon_close+stu_center[1]).addClass("msgerr");
		// 	$(".menuname_Error").removeClass("hide");
		// 	setResultZero(5);

		}else{
			checkStu=true;
			$(".menunameError").html("").removeClass("msgerr");
			$(".menuname_Error").addClass("hide");
			stu_salary_period[0]=checkStu;
			stu_salary_fee[0]=checkStu;
			// [Athiwat][09/08/2564][access query ot and center]
			// stu_ot_period[0]=checkStu;
			// stu_center[0]=checkStu;
		}
		return checkStu;
	}
	
	function checkAll(arrCHKB){
		let len_checked=0;
		for(let i=0;i<arrCHKB.length;i++){
			len_checked = $('input[name="'+arrCHKB[i]+'"]:checked').length;
			if(len_checked<=0){
				if(arrCHKB[i]=="salary_period[]") stu_salary_period[0]=false;
				else if(arrCHKB[i]=="salary_fee[]") stu_salary_fee[0]=false;
				else if(arrCHKB[i]=="ot_period[]") stu_ot_period[0]=false;
				else if(arrCHKB[i]=="center[]") stu_center[0]=false;
			}else{
				if(arrCHKB[i]=="salary_period[]") stu_salary_period[0]=true;
				else if(arrCHKB[i]=="salary_fee[]") stu_salary_fee[0]=true;
				else if(arrCHKB[i]=="ot_period[]") stu_ot_period[0]=true;
				else if(arrCHKB[i]=="center[]") stu_center[0]=true;
			}
		}
	}

	function setResultZero(count){
		let sly=".resulthr";
		let ot=".resultot";
		let val=0;
		for(let i=0;i<count;i++){
			$(sly+i).html(val);
			$(ot+i).html(val);
		}
	}

	function setCenter(e,id,row){
		var ckb_center = $('input[name="'+arrCHKB[3]+'"]');

		var $this = $(e);
		var span = $this.children();
		let shc_menu = 7;
		let tmp = 0;
		
		for(let i = 0;i<shc_menu;i++){
			tmp=i+1;
			if(row==tmp){
				$("span.shc_menu"+tmp).removeClass("badge-dark");
				$("span.shc_menu"+tmp).addClass("badge-primary");
				$("span.shc_menu"+tmp).addClass("flashing");
			}else{
				$("span.shc_menu"+tmp).removeClass("badge-primary");
				$("span.shc_menu"+tmp).removeClass("flashing");
				$("span.shc_menu"+tmp).addClass("badge-dark");
			}
		}

		// ---------------------------- this process
		df_center=id;
		for(let [k,v] of Object.entries(ckb_center)){
			if(k==0 && df_center ==1){ ckb_center.eq(k).prop('checked',true); }
			else if(k==2 && df_center ==3){ ckb_center.eq(k).prop('checked',true); }
			else if(k==3 && df_center ==4){ ckb_center.eq(k).prop('checked',true); }
			else if(k==5 && df_center ==6){ ckb_center.eq(k).prop('checked',true); }
			else if(k==4 && df_center ==5){ ckb_center.eq(k).prop('checked',true); }
			else if(k==6 && df_center ==7){ ckb_center.eq(k).prop('checked',true); }
			else if(k==10 && df_center ==11){ ckb_center.eq(k).prop('checked',true); }
			else{ ckb_center.eq(k).prop('checked',false); }
		}
		checkedNullBtnAll("department[]");
		checkedNullBtnAll("position[]");
	}

	function setCheckBox(e,row,id){
		// |--------------------------------------------------------------------------------------------------
		// | Funtion Process.
		// |--------------------------------------------------------------------------------------------------
		// | 1.set period id = lastest.
		// | 2.set otid = lastest.
		// | 3.set all fee.
		// | 4.set center id = center id was defined.
		// | 5.set department id = department id was defined.
		// | 6.set null position.
		// --------------------------------------------------------------------------------------------------
		var $this=$(e);
		var ckb_salary_period = $('input[name="'+arrCHKB[0]+'"]');
		var ckb_ot_period = $('input[name="'+arrCHKB[2]+'"]');
		var ckb_center = $('input[name="'+arrCHKB[3]+'"]');
		var ckb_department = $('input[name="'+arrCHKB[4]+'"]');
		// --------------------------------------------------------------------------------------------------
		// console.log("ckb : "+ckb); console.log("chkb : "+checkboxes);
		// --------------------------------------------------------------------------------------------------


		// ------------------------------------------------- 1.Set Salary fee.
		checkedBtnAll("salary_fee[]");
		// ------------------------------------------------- 2.Set Salary Period.
		for(let [k,v] of Object.entries(ckb_salary_period)){
			if(k==0){
				ckb_salary_period.eq(k).prop('checked',true);
			}else{
				ckb_salary_period.eq(k).prop('checked',false);
			}
		}
		// ------------------------------------------------- 3.Set OT Period.
		for(let [k,v] of Object.entries(ckb_ot_period)){
			if(k==0){
				ckb_ot_period.eq(k).prop('checked',true);
			}else{
				ckb_ot_period.eq(k).prop('checked',false);
			}
		}
		// ------------------------------------------------- 4.Set Center.
		for(let [k,v] of Object.entries(ckb_center)){
			if(k==0 && df_center ==1) ckb_center.eq(k).prop('checked',true);
			else if(k==2 && df_center ==3) ckb_center.eq(k).prop('checked',true);
			else if(k==3 && df_center ==4) ckb_center.eq(k).prop('checked',true);
			else if(k==4 && df_center ==5) ckb_center.eq(k).prop('checked',true);
			else if(k==5 && df_center ==6) ckb_center.eq(k).prop('checked',true);
			else if(k==6 && df_center ==7) ckb_center.eq(k).prop('checked',true);
			else if(k==10 && df_center ==11) ckb_center.eq(k).prop('checked',true);
			else ckb_center.eq(k).prop('checked',false);
		}
		// ------------------------------------------------- 5.Set Department.
		for(let [k,v] of Object.entries(ckb_department)){
			if(k==(row-1)) ckb_department.eq(k).prop('checked',true);
			else ckb_department.eq(k).prop('checked',false);
		}
		// ------------------------------------------------- 6.set null position.
		checkedNullBtnAll("position[]");
	}

	function clearForm(e){
		var $this=$(e);
		$("#menu_name").val("");

		checkedNullBtnAll("salary_period[]");
		checkedNullBtnAll("salary_fee[]");
		checkedNullBtnAll("ot_period[]");
		checkedNullBtnAll("center[]");
		checkedNullBtnAll("department[]");
		checkedNullBtnAll("position[]");
	}

	
	function setFormMenu(e,hdid,url="Shcmenu/setFormMenu/"){
		var $this=$(e);
		var url_c= base_url+url+hdid;
		$.ajax({
			dataType:"JSON",
			type:"POST",
			data:{hdid:hdid},
			url:url_c,
			success:function(res){
				// |--------------------------------------------------------------------------
				// | Funtion Process.
				// |--------------------------------------------------------------------------
				// | 1.Clear all checkbox.
				// | 2.Set shrotcut menu name.
				// | 3.Set center of menu.
				// | 4.Get Obj checkbox main 6 menu.
				// | 5.Loop set value to checkbox wite javascript.
				// |--------------------------------------------------------------------------
				if(res["status_GetData"]){
					var checkbox;
					clearForm(); 																// ------- 1.Clear checkbox.
					$("#menu_name").val(res["menuhd_name"]); 									// ------- 2.Set shrotcut menu name.
					$("#menucenter").val(res["center_id"]).change();							// ------- 3.Set center of menu.

					for(let i=0;i<res["resultDT"].length;i++){
						for(let j=0;j<arrTB_CHKB.length;j++){
							if(arrTB_CHKB[j][0]==res["resultDT"][i]["table_name"]){
								checkbox = $('input[name="'+arrTB_CHKB[j][1]+'"]'); 					// ------- 4.Get Obj checkbox main 6 menu.
							 	for(let [k,v] of Object.entries(checkbox)){								// ------- 5.Loop set value to checkbox wite javascript.									
									if(k==0 && res["resultDT"][i]["value_id"]==0){ 					  	// [Athiwat][10/08/2564][add set latest period to form]
										checkbox.eq(k).prop('checked',true);
									}else if(checkbox.eq(k).val()==(res["resultDT"][i]["value_id"])){ 	// [Athiwat][30/07/2564][Change to use value_id]
										checkbox.eq(k).prop('checked',true);
									}
								}
							}
						}
					}

				}else{ //Note : response error (Have not menu hd.)
					swal({title:"ไม่มีข้อมูลนี้ !",text:"กรุณาตรวจสอบใหม่อีกครั้ง",type:"warning",timer:9500});
					setTimeout(function(){document.location.reload(true)},6500);
				}
			},error:function(xhr,textSatus,errorThrown,res){
				alert("Get form_setFormMenu\nStatus: "+textSatus+"\nError: "+errorThrown+"\nFunction: form_setFormMenu");
			}

		});
	}

	function deleteMenu(url_del){
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
	                $.ajax({type:"POST",
				url:url_del,
				dataType:'json',
				cache:false,
				contentType:false,
				processData:false,
				success:function(response){
					console.log("success : "+response);
					if(response["delete_status"]){
						swal({title: 'ลบข้อมูลเรียบร้อยแล้ว !',text: 'คลิกปุ่ม OK เพื่อกลับสู่หน้าหลัก',type: 'success',timer: 9500});
						setTimeout(function(){document.location.reload(true)},4500);
					}
				},error: function (xhr, textStatus, errorThrown,response){
		        		alert("deleteMenu\nStatus: " + textStatus + '\nError: ' + errorThrown + '\nFunction: deleteMenu');
				}
			});
        	}else{swal("ยกเลิก", "ยกเลิก การลบเรียบร้อย !", "success", 9500);}
        });
	}

</script>
