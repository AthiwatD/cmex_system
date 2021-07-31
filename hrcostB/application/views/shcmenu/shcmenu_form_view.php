<!-- [Athiwat][19/07/2564][Declare arrCenter,arrDepartment] -->
<script>
	<?php
		foreach($Centers as $inx => $cen){
			echo "var arrCenter$inx = [$inx,$cen->center_id,'$cen->center_name','$cen->center_abbre'];";
		}
		foreach($Departments as $inx => $dep){
			echo "var arrDepartment$inx = [$inx,$dep->department_id,'$dep->department_name'];";
		}
	?>
	// console.log(arrCenter0);
	// console.log(arrDepartment0[2]);
</script>

<!-- Main section content-->
<section class="content">
  <div class="container-fluid form_repass">

  	<form id="form_manage_shcmenu" class="needs-validation form-horizontal form-input m0" role="form" enctype="multipart/form-data" method="POST">

  	<div class="row">
  	<!-- Start right zone-->
    <div class="col-lg-12">
      <div class="card card-primary">
      	
	        <!-- start head content-->
					<div class="card-header" style="background-color:#343a40;">
						<div class="row">
						  <!-- <div class="col-lg-6">
					      <div style="float:left; padding:7px !important;"><h5 class="card-title"><?php //echo IS_FORM_SHCMENU; ?></h5></div>
						  </div> -->
						  <div class="col-lg-8"></div>
						  <div class="col-lg-4">
					  		<div style="" class="row">
					  			<button type="submit" class="btn btn-success text-al-c" style="width:50% !important;" data-toggle="collapse" data-target="#collapseResult" aria-expanded="false" aria-controls="collapseResult"><h5 class="card-title"><i class='fa fa-save'></i> บันทึก</h5></button>
						  		<button type="button" class="btn btn-primary text-al-c" style="width:50% !important;" onclick="clearForm(this)"><h5 class="card-title"><i class='fa fa-plus'></i> สร้างใหม่</h5></button>
					  		</div>
						  </div>
					  </div>
					</div>
					<!-- End head content-->
					<!-- start form content-->
					
		    	<div class="form-group">
		    		<div class="row" style="margin-top: 20px !important;">
		            <label for="menu_name" class="col-sm-2 col-form-label text-al-r">หน่วยงาน</label>
		            <div class="col-sm-10">
		                <select id="menucenter" name="menucenter" class="form-control " style="max-width:95%;" required>
	                    <?php
	                    foreach($Centers as $center){
	                    	echo "<option value='$center->center_id'>$center->center_name</option>";
	                    }
	                    ?>
			                </select>
		                <div class="col-12 menucenter_Error"><p class="menuCenterError"></p></div>
		            </div>
		        </div>
		        <div class="row" style="">
		            <label for="menu_name" class="col-sm-2 col-form-label text-al-r">ชื่อเมนู</label>
		            <div class="col-sm-10">
		                <input type="text" class="form-control" id="menu_name" name="menu_name" style="max-width:95%;" placeholder="กรุณากรอกชื่อเมนู" required>
		                <div class="col-12 menuname_Error"><p class="menunameError"></p></div>
		            </div>
		        </div>
			    </div>
					<!-- end form content-->

      </div>
    </div>
    <!-- End right zone-->
  	</div>


    <div class="row">
    	<!-- Start left zone-->
      <div class="col-lg-12">
        <div class="card card-primary">
        <!-- start head content-->
					<div class="card-header" style="background-color:#343a40;">
						<div class="row">
						  <div class="col-lg-12"></div>
					  </div>
					</div>
					<!-- End head content-->

          <div class="card-body" style="padding: 10px !important;">
						<div class="form-group">
						
						<input type="hidden" id="hidden_numot" name="hidden_numot" value="<?php echo $session_username; ?>">
						
						<div class="row">
							<div class="col-sm-4 npl npr"><div class="row"><h5 style="">ช่วงเวลา เงินเดือน</h5><a href='#' onclick='checkBtnAll("salary_period[]");' class="m3"><span class="badge badge-pill badge-primary"><i class='fa fa-check'></i> ทั้งหมด</span></a></div></div>
							<div class="col-sm-4 npl npr"><div class="row"><h5 style="">รายละเอียดเงินเดือน</h5><a href='#' onclick='checkBtnAll("salary_fee[]");' class="m3"><span class="badge badge-pill badge-primary"><i class='fa fa-check'></i> ทั้งหมด</span></a></div></div>
							<div class="col-sm-4 npl npr"><div class="row"><h5 style="">ช่วงเวลา OT</h5><a href='#' onclick='checkBtnAll("ot_period[]");' class="m3"><span class="badge badge-pill badge-primary"><i class='fa fa-check'></i> ทั้งหมด</span></a></div></div>
						</div>

			    	<div class="row">
			    	<!-- col one -->
		    		<div class="col-sm-4">
		    			<?php $count=0; ?>
		    			<?php foreach($Salarys as $salary){ ?>
							<div class="form-group form-inline nmb">
								<div class="form-check div-checkbox pt5" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data ckbox_salary_period"
											name="salary_period[]"
											value="<?php echo $salary->salary_id; ?>">
											<?php echo "ปี ".($salary->salary_year+543)." เดือน ".$salary->salary_month;?>
									</label>
								</div>
							</div>
							<?php $count+=1; ?>
							<?php } ?>
		    		</div>
		    		<!-- col two -->
		    		<div class="col-sm-4">
		    			<?php $count=0; //print_r(SLY_FREE);
		    			foreach(unserialize(SLY_FREE) as $ind => $val){ ?>
		    				<div class="form-group form-inline nmb">
								<div class="form-check div-checkbox pt5" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data ckbox_salary_fee"
											name="salary_fee[]"
											value="<?php echo $ind; ?>">
											<?php echo $val;?>
									</label>
								</div>
							</div><?php $count+=1;
		    			}
		    			?>
		    		</div>
		    		<!-- col three -->
		    		<div class="col-sm-4">
		    			<?php
		    			$count=0;
		    			foreach($Ots as $ot){ ?>
		    				<div class="form-group form-inline nmb">
								<div class="form-check div-checkbox pt5" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data ckbox_ot_period"
										  name="ot_period[]"
											value="<?php echo $ot->ot_id; ?>">
											<?php echo "ปี ".($ot->ot_year+543)." เดือน ".$ot->ot_month;?>
									</label>
								</div>
							</div><?php $count+=1;
		    			}
		    			?>
		    		</div>
		    	</div>
			    
			    <div class="col-sm-12"><hr></div>
			    
		    	<div class="row">
						<div class="col-sm-4 npl npr"><div class="row"><h5 style="">หน่วยงาน</h5><a href='#' onclick='checkBtnAll("center[]");' class="m3"><span class="badge badge-pill badge-primary"><i class='fa fa-check'></i> ทั้งหมด</span></a></div></div>
						<div class="col-sm-4 npl npr"><div class="row"><h5 style="">แผนก</h5><a href='#' onclick='checkBtnAll("department[]");' class="m3"><span class="badge badge-pill badge-primary"><i class='fa fa-check'></i> ทั้งหมด</span></a></div></div>
						<div class="col-sm-4 npl npr"><div class="row"><h5 style="">ตำแหน่ง</h5><a href='#' onclick='checkBtnAll("position[]");' class="m3"><span class="badge badge-pill badge-primary"><i class='fa fa-check'></i> ทั้งหมด</span></a></div></div>
					</div>
					
					<div class="row">
						<!-- col one -->
		    		<div class="col-sm-4">
		    			<?php $count=0;
		    			foreach($Centers as $center){ ?>
		    				<div class="form-group form-inline nmb">
								<div class="form-check div-checkbox pt5" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data ckbox_center"
										  name="center[]"
											value="<?php echo $center->center_id; ?>">
											<?php echo $center->center_name; ?>
									</label>
								</div>
							</div><?php $count+=1;
		    			}
		    			?>
		    		</div>

		    		<!-- col two -->
		    		<div class="col-sm-4">
		    			<?php $count=0; ?>
		    			<?php foreach($Departments as $department){ ?>
							<div class="form-group form-inline nmb">
								<div class="form-check div-checkbox pt5">
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data ckbox_department"
										  name="department[]"
											value="<?php echo $department->department_id; ?>">
											<?php echo $department->department_name;?>
									</label>
								</div>
							</div><?php $count+=1;
							} ?>
		    		</div>
		    		<!-- col three -->
		    		<div class="col-sm-4">
		    			<?php $count=0;
		    			foreach($Positions as $position){ ?>
		    				<div class="form-group form-inline nmb">
								<div class="form-check div-checkbox pt5" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data ckbox_position"
										  name="position[]"
											value="<?php echo $position->position_id; ?>">
											<?php echo $position->position_name;?>
									</label>
								</div>
							</div><?php $count+=1;
		    			}
		    			?>
		    		</div>
		    	</div>
		    </div>
       </div>
      </div>
    </div>
    <!-- End left zone-->

    
    </form>
    <!-- start head content-->





		
    <div class="col-lg-12">
    	<div class="card card-primary">

	    	 <!-- start head content-->
					<div class="card-header" style="background-color:#343a40;">
						<div class="row">
						  <div class="col-lg-12"></div>
					  </div>
					</div>
					<!-- End head content-->

		    	<div class="card-body">
		        <table class="table table-bordered table-striped my_table_data" style="width:99% !important;">
		          <thead>
		              <tr>
		                  <th style="min-width: 75px;">ลำดับ</th>
		                  <th style="">เมนู</th>
		                  <th style="">หน่วยงาน</th>
		                  <th style="min-width: 75px;">จัดการ</th>
		              </tr>
		          </thead>
		          <tbody>
	              <?php
                  //[ton][19/04/2564][add session status]
                  $success=$this->session->userdata('success');
                  $failure=$this->session->userdata('failure');
                  if($success!=""){ ?> <div class="alert alert-success" role="alert" style="text-align:center;"><?php echo $success; ?></div><?php }
                  if($failure!=""){ ?> <div class="alert alert-danger" role="alert" style="text-align:center;"><?php echo $failure; ?></div><?php }
                  $count_page=1;
                  foreach($MenuHDs as $MenuHD){
                    if($system=="backend"){
                    	// $link_setFormMenu=base_url()."Shcmenu/setFormMenu/".$MenuHD->menuhd_id;
                    	$url_del=base_url()."Shcmenu/deleteMenuProcess/".$MenuHD->menuhd_id."/".$session_username;
                      echo "<tr>"; ?>
                          <td><a href="javascript:void(0)" class='' onclick="setFormMenu(this,<?php echo $MenuHD->menuhd_id ?>)" ><?php echo $count_page; ?></a></td>
                        	<td><a href="javascript:void(0)" class='' onclick="setFormMenu(this,<?php echo $MenuHD->menuhd_id ?>)" ><?php echo $MenuHD->menuhd_name; ?></a></td>
                        	<td><a href="javascript:void(0)" class='' onclick="setFormMenu(this,<?php echo $MenuHD->menuhd_id ?>)" ><?php
                        		foreach($Centers as $center){
				                    	if($center->center_id==$MenuHD->center_id) echo $center->center_name;
				                    }?>
                        	</a></td><?php
                        	echo "<td>";
                          echo "<button type='button' class='btn btn-danger btn-sm' onclick=\"deleteMenu('$url_del')\" ><i class='fas fa-minus'></i></button>";
                          echo "</td>";
                      echo "</tr>";
                      $count_page+=1;
                    }
                  }
	              ?>
		      	</tbody>
		     </table>
				</div>
	    </div>
	  </div>
  </div>
</section>
<!-- /Main section content -->
