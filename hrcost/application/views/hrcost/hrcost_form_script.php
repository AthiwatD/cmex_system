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
	// [Athwiat][16/07/2564][Set Global variables][Set CMEx Defuat]
	var df_center=1;
	var statusLatestSly=false;
	var statusLatestOt=false;
	
	/*salary_period[] salary_fee[] ot_period[] center[] department[] position[]*/
	var arrCHKB=["salary_period[]","salary_fee[]","ot_period[]","center[]","department[]","position[]"];
	var icon_close="<i class='fa fa-times'></i>";
	var checkStu=false;

	let stu_salary_period=[false,"กรุณาเลือกรายการ ช่วงเวลาเงินเดือน","salary_period[]"];
	let stu_salary_fee=[false,"กรุณาเลือกรายการ รายละเอียดเงินเดือน","salary_fee[]"];
	let stu_ot_period=[false,"กรุณาเลือกรายการ ช่วงเวลา OT","ot_period[]"];
	let stu_center=[false,"กรุณาเลือกรายการ หน่วยงาน","center[]"];
	let stu_department=[false,"กรุณาเลือกรายการ แผนก","department[]"];
	let stu_position=[false,"กรุณาเลือกรายการ ตำแหน่ง","position[]"];

	// [Athiwat][31/07/2564][add arrTB_CHKB]
	const arrTB_CHKB=[ ["sly_salary","salary_period[]"],
					   ["sly_salary_fee","salary_fee[]"],
					   ["sly_ot","ot_period[]"],
					   ["sev_center","center[]"],
					   ["tb_department","department[]"],
					   ["sev_position","position[]"] ];

	// [ton][23/04/2564][add script backtoindex for recruit view]
	<?php 
		echo 'var base_url="'.base_url().'";';
	?>

	//[Athiwat][10/08/2564][clear form result cost]
	function clearFormResult(classname,count=5,val=0.00){
		for(let i=0;i<count;i++){
			$("."+classname+i).html(val);
		}
	}
	
	//[Athiwat][10/08/2564][loop set value]
	function setFormResult(result,classname){
		let count=0;
		for(let [key, value] of Object.entries(result)){
			$(classname+count).html(value);
			count+=1;
		}
	}
	
	$("#form_hrcost").on("submit",function(e){
		e.preventDefault();
		var $this=$(e);
		if(checkNull(checkStu,arrCHKB)){
			$.ajax({
				type:"POST",
				dataType:"json",
				url: base_url+"Hrcost/costProcess",
				data:new FormData(this),
				contentType:false,
				processData:false,
				cache:false,
				success:function(res){
					//[Athiwat][06/08/2564][access query ot and center]
						// if(res["process_sly_status"] && res["process_ot_status"]){
					if(res["process_sly_status"]){
						//[Athiwat][10/08/2564][clear form result cost]
						clearFormResult("resulthr");
						clearFormResult("resultot");
						//[Athiwat][10/08/2564][loop set value]
						if(res["process_sly_status"]){
							setFormResult(res['result_sly'],".resulthr");
						}
						if(res["process_ot_status"]){
							setFormResult(res['result_ot'],".resultot");
						}
						$("form").prev().removeClass("hide");
					}
				},error:function(xhr,textSatus,errorThrown,res){
					alert("Get form_hrcost\nStatus: "+textSatus+"\nError: "+errorThrown+"\nFunction: form_hrcost");
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
			$(".costhrError").html(icon_close+stu_salary_period[1]).addClass("msgerr");
			$(".costhr_error").removeClass("hide");
			setResultZero(5);
		}else if(!stu_salary_fee[0]){
			$(".costhrError").html(icon_close+stu_salary_fee[1]).addClass("msgerr");
			$(".costhr_error").removeClass("hide");
			setResultZero(5);

			// [Athiwat][06/08/2564][access query ot and center]
				// }else if(!stu_ot_period[0]){
				// 	$(".costhrError").html(icon_close+stu_ot_period[1]).addClass("msgerr");
				// 	$(".costhr_error").removeClass("hide");
				// 	setResultZero(5);
				// }else if(!stu_center[0]){
				// 	$(".costhrError").html(icon_close+stu_center[1]).addClass("msgerr");
				// 	$(".costhr_error").removeClass("hide");
				// 	setResultZero(5);

				// [Athiwat][17/05/2564][access query department and position]
				// }else if(!stu_department[0]){
				// 	$(".costhrError").html(icon_close+stu_department[1]).addClass("msgerr");
				// 	$(".costhr_error").removeClass("hide");
				// 	setResultZero(5);
				// }else if(!stu_position[0]){
				// 	$(".costhrError").html(icon_close+stu_position[1]).addClass("msgerr");
				// 	$(".costhr_error").removeClass("hide");
				// 	setResultZero(5);

		}else{
			checkStu=true;
			$(".costhrError").html("").removeClass("msgerr");
			$(".costhr_error").addClass("hide");
			stu_salary_period[0]=checkStu;
			stu_salary_fee[0]=checkStu;

			// [Athiwat][06/08/2564][access query ot and center]
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

				// [Athiwat][06/08/2564][access query ot and center]
				// else if(arrCHKB[i]=="ot_period[]") stu_ot_period[0]=false;
				// else if(arrCHKB[i]=="center[]") stu_center[0]=false;

				// [Athiwat][17/05/2564][access query department and position]
				// else if(arrCHKB[i]=="department[]") stu_department[0]=false;
				// else if(arrCHKB[i]=="position[]") stu_position[0]=false;

			}else{
				if(arrCHKB[i]=="salary_period[]") stu_salary_period[0]=true;
				else if(arrCHKB[i]=="salary_fee[]") stu_salary_fee[0]=true;

				// [Athiwat][06/08/2564][access query ot and center]
				// else if(arrCHKB[i]=="ot_period[]") stu_ot_period[0]=true;
				// else if(arrCHKB[i]=="center[]") stu_center[0]=true;

				// [Athiwat][17/05/2564][access query department and position]
				// else if(arrCHKB[i]=="department[]") stu_department[0]=true;
				// else if(arrCHKB[i]=="position[]") stu_position[0]=true;
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
		let shc_menu = 9;
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
		// df_center : id from onclick function.
		// k : index in table sev_center.
		// ----------------------------

		df_center=id;
		// console.log("df_center :"+df_center);
		for(let [k,v] of Object.entries(ckb_center)){
			if(k==0 && df_center ==1){ ckb_center.eq(k).prop('checked',true); }
			else if(k==2 && df_center ==3){ ckb_center.eq(k).prop('checked',true); }
			else if(k==3 && df_center ==4){ ckb_center.eq(k).prop('checked',true); }
			else if(k==5 && df_center ==6){ ckb_center.eq(k).prop('checked',true); }
			else if(k==6 && df_center ==7){ ckb_center.eq(k).prop('checked',true); }
			else if(k==10 && df_center ==11){ ckb_center.eq(k).prop('checked',true); }
			// [Athiwat][31/07/2564][add new]
			else if(k==7 && df_center ==5){ ckb_center.eq(k).prop('checked',true); }
			else if(k==4 && df_center ==8){ ckb_center.eq(k).prop('checked',true); }
			else if(k==1 && df_center ==2){ ckb_center.eq(k).prop('checked',true); }
			else{ ckb_center.eq(k).prop('checked',false); }
		}
		checkedNullBtnAll("department[]");
		checkedNullBtnAll("position[]");
	}

	function clearForm(e){
		var $this=$(e);
		checkedNullBtnAll("salary_period[]");
		checkedNullBtnAll("salary_fee[]");
		checkedNullBtnAll("ot_period[]");
		checkedNullBtnAll("center[]");
		checkedNullBtnAll("department[]");
		checkedNullBtnAll("position[]");
	}

	function setFormMenu(e,hdid,url="Hrcost/setFormMenu/"){
		var $this=$(e);
		var url_c= base_url+url+hdid;
		$.ajax({
			dataType:"JSON",
			type:"POST",
			data:{hdid:hdid},
			url:url_c,
			success:function(res){
			// |--------------------------------------------------------------------------
			// | 1.Clear all checkbox.
			// | 2.Get Obj checkbox main 6 menu.
			// | 3.Loop set value to checkbox wite javascript.
			// |--------------------------------------------------------------------------
				if(res["status_GetData"]){
					var checkbox;
					clearBtnLatest();																		// [Athiwat][10/08/2564][add clearBtnLatest]
					clearForm(); 																		// ------- 1.Clear checkbox.
					for(let i=0;i<res["resultDT"].length;i++){
						for(let j=0;j<arrTB_CHKB.length;j++){
							if(arrTB_CHKB[j][0]==res["resultDT"][i]["table_name"]){
								checkbox = $('input[name="'+arrTB_CHKB[j][1]+'"]'); 					// ------- 2.Get Obj checkbox main 6 menu.
							 	for(let [k,v] of Object.entries(checkbox)){								// ------- 3.Loop set value to checkbox wite javascript.
							 		// [Athiwat][10/08/2564][add set latest period to form]
									if(k==0 && res["resultDT"][i]["value_id"]==0){
										if(res["resultDT"][i]["table_name"]=="sly_salary" && res["resultDT"][i]["value_id"]==0){ checkBtnLatest(arrTB_CHKB[j][1]); }
										if(res["resultDT"][i]["table_name"]=="sly_ot" && res["resultDT"][i]["value_id"]==0){ checkBtnLatest(arrTB_CHKB[j][1]); }
										checkbox.eq(k).prop('checked',true);
									}else if(checkbox.eq(k).val()==(res["resultDT"][i]["value_id"])){ 	// [Athiwat][30/07/2564][Change to use value_id]
										checkbox.eq(k).prop('checked',true);
									}
								}
							}
						}
					}
				}else{
					swal({title:"ไม่มีข้อมูลนี้ !",text:"กรุณาตรวจสอบใหม่อีกครั้ง",type:"warning",timer:9500});
					setTimeout(function(){document.location.reload(true)},6500);
				}
			},error:function(xhr,textSatus,errorThrown,res){
				alert("Get form_setFormMenu(hrcost)\nStatus: "+textSatus+"\nError: "+errorThrown+"\nFunction: form_setFormMenu(hrcost)");
			}
		});
	}

	// var arrCHKB=["salary_period[]","salary_fee[]","ot_period[]","center[]","department[]","position[]"];
	function setCheckBox(e,row,id){
		// --------------------------------------------------------------------------------------------------
		// 1.set period id = lastest.
		// 2.set otid = lastest.
		// 3.set all fee.
		// 4.set center id = center id was defined.
		// 5.set department id = department id was defined.
		// 6.set null position.
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
			else if(k==2 && df_center ==3){ ckb_center.eq(k).prop('checked',true); }
			else if(k==3 && df_center ==4){ ckb_center.eq(k).prop('checked',true); }
			else if(k==5 && df_center ==6){ ckb_center.eq(k).prop('checked',true); }
			else if(k==6 && df_center ==7){ ckb_center.eq(k).prop('checked',true); }
			else if(k==10 && df_center ==11){ ckb_center.eq(k).prop('checked',true); }
			// [Athiwat][31/07/2564][add new]
			else if(k==7 && df_center ==5){ ckb_center.eq(k).prop('checked',true); }
			else if(k==4 && df_center ==8){ ckb_center.eq(k).prop('checked',true); }
			else if(k==1 && df_center ==2){ ckb_center.eq(k).prop('checked',true); }
			else ckb_center.eq(k).prop('checked',false);
		}
		// ------------------------------------------------- 5.Set Department.
		for(let [k,v] of Object.entries(ckb_department)){
			if(k==(row-1)) ckb_department.eq(k).prop('checked',true);
			else ckb_department.eq(k).prop('checked',false);
			// console.log("key : "+k+" ,value : "+v);
		}
		// ------------------------------------------------- 6.set null position.
		checkedNullBtnAll("position[]");
	}

	function checkBtnLatest(name){
		// --------------------------------------------------------------------------------------------------
		//process latest
		// --------------------------------------------------------------------------------------------------
		//1.check latest && !latest
		//2.set checkbox
		//3.set status latest sly and ot
		//4.set value = 0
		//5.insert db
		//6.set check value = 0 > checkbox = latest in callback formView
		// --------------------------------------------------------------------------------------------------

		var ckb = $('input[name="'+name+'"]');

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

	function clearBtnLatest(){
		$("span.btnSlyLatest").removeClass("badge-success");
		$("span.btnSlyLatest").addClass("badge-primary");
		$("span.btnOtLatest").removeClass("badge-success");
		$("span.btnOtLatest").addClass("badge-primary");
	}

</script>