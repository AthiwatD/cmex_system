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
	// [Athwiat][16/07/2564][declare center]
	// Set CMEx Defuat.
	var df_center=1;
	
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

	// [ton][23/04/2564][add script backtoindex for recruit view]
	<?php 
		echo 'var base_url="'.base_url().'";';
	?>
	
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
					if(res["process_sly_status"] && res["process_ot_status"]){
						let count=0; let countot=0;
						for(let [key, value] of Object.entries(res['result_sly'])){
							$(".resulthr"+count).html(value);
							count+=1;
						}
						for(let [key,val] of Object.entries(res['result_ot'])){
							$(".resultot"+countot).html(val);
							countot+=1;
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
		}else if(!stu_ot_period[0]){
			$(".costhrError").html(icon_close+stu_ot_period[1]).addClass("msgerr");
			$(".costhr_error").removeClass("hide");
			setResultZero(5);
		}else if(!stu_center[0]){
			$(".costhrError").html(icon_close+stu_center[1]).addClass("msgerr");
			$(".costhr_error").removeClass("hide");
			setResultZero(5);
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
			stu_ot_period[0]=checkStu;
			stu_center[0]=checkStu;
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
				// [Athiwat][17/05/2564][access query department and position]
					// else if(arrCHKB[i]=="department[]") stu_department[0]=false;
					// else if(arrCHKB[i]=="position[]") stu_position[0]=false;
			}else{
				if(arrCHKB[i]=="salary_period[]") stu_salary_period[0]=true;
				else if(arrCHKB[i]=="salary_fee[]") stu_salary_fee[0]=true;
				else if(arrCHKB[i]=="ot_period[]") stu_ot_period[0]=true;
				else if(arrCHKB[i]=="center[]") stu_center[0]=true;
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
		// console.log("center id : "+df_center);
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
			// console.log("key : "+k+" ,value : "+v);
		}
		// ------------------------------------------------- 6.set null position.
		checkedNullBtnAll("position[]");
	}

</script>