 <!--Main content-->
<section class="content">
      <div class="container-fluid form_Bookonline">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">

						<div class="card-header" style="background-color:#343a40;">
						  <div class="row">
						    <div class="col-lg-8">
						      <p class="mb-0">
						          <?php  if((!empty($error)) && ($error["code"]!=0)){
						                  foreach($error as $err){  ?>
					                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
					                          <span class="alert-icon"><i class="ni ni-like-2"></i></span>
					                          <span class="alert-text"><strong>Error!</strong> <?php echo $err; ?> </span>
					                      </div>
						          <?php 	}
						              }
						          ?>
						      </p>
						      <h6></h6>
						    </div>
						  </div>
						</div>
        <?php
        	// print_r($locations);
        	// print_r($method);
        	// print_r($system);
        	// echo $session_username;

          if($method == "update"){ $update=1; echo '<script> var check_update_hd ="'.$update.'";</script>'; }
          else{ $update=0; echo '<script> var check_update_hd ="'.$update.'";</script>'; }
        ?>

				<form id="form_publish" role="form" enctype="multipart/form-data" class="needs-validation" method="POST"
				<?php if($method == "add") echo " action='" . base_url() . "Bookonline/addBookonlineProcess/$session_username' ";
					 	  else if($method == "update") echo " action='" . base_url() . "Bookonline/updateBookonlineProcess/$BookonlineHd->publish_hd_id/$session_username' "; ?>  >
          <div class="card-body">
					<!-- ================================ HD ================================ -->
					<div class="form-group">
			    	<div class="row">
			    		<label for="start_date" class="col-sm-3 col-form-label text-al-r">วันที่ประกาศ</label>
			    		<div class="col-sm-9" style="float:right;">
              		<div class="row">
              			<?php
              				if($method=="update"){ 
              					if(!empty($BookonlineHd->publish_datetime)){
              						$exp=explode(" ",$BookonlineHd->publish_datetime);?>
              						<input type="date" class="form-control col-6" id="start_date" name="start_date" required value="<?php echo $exp[0]; ?>"> <p class="start_dateError"></p>
                    			<input type="time" class="form-control col-6" id="start_time" name="start_time" required value="<?php echo $exp[1]; ?>"> <p class="start_timeError"></p> <?php
              					}
              				}else if($method=="add"){ ?>
              					<input type="date" class="form-control col-6" id="start_date" name="start_date" required> <p class="start_dateError"></p>
                    		<input type="time" class="form-control col-6" id="start_time" name="start_time" required> <p class="start_timeError"></p> <?php
              				}
              			?>
                	</div>
            	</div>
          	</div>
        	</div>

					<div class="form-group">
		        <div class="row">
		            <label for="ward_code" class="col-sm-3 col-form-label text-al-r">หน่วยงาน</label>
		            <div class="col-sm-9">
                <?php
	                $row0="-------------------------------- กรุณาเลือกข้อมูล --------------------------------";
	                if($method == "update"){ ?>
	                	<select id="ward_code" name="ward_code" class="form-control " style="max-width:100%;" required> 
	                			<option value=''><?php echo $row0; ?></option><?php
	                    foreach ($locations as $row) { ?>
	                    	<option value='<?php echo $row->ward_code; ?>' <?php if($row->ward_code==$BookonlineHd->ward_code) echo "selected"; ?>><?php echo $row->ward_name1; ?></option>";<?php
	                    }?>
	                  </select><?php
	                }else if($method=="add"){ ?>
	                	<select id="ward_code" name="ward_code" class="form-control " style="max-width:100%;" required>
	                			<option value=''><?php echo $row0; ?></option><?php
	                  	foreach ($locations as $row) { ?>
	                  		<option value='<?php echo $row->ward_code; ?>'><?php echo $row->ward_name1; ?></option><?php
	                  	}?>
	                	</select><?php
	                }
                ?>
		            <p class="wardcodeError"></p>
		            </div>
		        </div>
			    </div>

			    <div class="form-group">
		        <div class="row">
		            <label for="ward_code" class="col-sm-3 col-form-label text-al-r">ประเภทเอกสาร</label>
		            <div class="col-sm-9">
                <?php
	                if($method == "update"){ ?>
	                	<select id="publish_types" name="publish_types" class="form-control " style="max-width:100%;" required> 
	                			<option value=''><?php echo $row0; ?></option><?php
	                    foreach ($types as $row) { ?>
	                    	<option value='<?php echo $row->publish_type_id; ?>' <?php if($row->publish_type_id==$BookonlineHd->publish_type_id) echo "selected"; ?>><?php echo $row->publish_type_name; ?></option>";<?php
	                    }?>
	                  </select><?php
	                }else if($method=="add"){ ?>
	                	<select id="publish_types" name="publish_types" class="form-control " style="max-width:100%;" required>
	                			<option value=''><?php echo $row0; ?></option><?php
	                  	foreach ($types as $row) { ?>
	                  		<option value='<?php echo $row->publish_type_id; ?>'><?php echo $row->publish_type_name; ?></option><?php
	                  	}?>
	                	</select><?php
	                }
                ?>
		            <p class="wardcodeError"></p>
		            </div>
		        </div>
			    </div>

        	<div class="form-group">
			        <div class="row mb-3">
			            <label for="publish_name" class="col-sm-3 col-form-label text-al-r">ชื่อประกาศ</label>
			            <div class="col-sm-9">
			                <input type="text" class="form-control" id="publish_name" name="publish_name" placeholder="กรุณากรอกชื่อประกาศ" <?php if(!empty($BookonlineHd->publish_name)) echo "value='$BookonlineHd->publish_name' ";?> required>
			                <p class="docunoError"></p>
			            </div>
			        </div>
			    </div>

			    <div class="form-group">
				        <div class="row mb-3">
				            <label for="pin_status" class="col-sm-3 col-form-label"></label>
				            <div class="col-sm-9">
				                <div class="col-sm-9 checkbox" >
				                    <input type="checkbox" class="form-check-input ml5" id="pin_status" name="pin_status" <?php if(!empty($BookonlineHd->publish_pin_status)) {if($BookonlineHd->publish_pin_status==1) echo "checked";} ?>>
				                    <label class="form-check-label m_t5_l30" for="pin_status"><b>ปุกหมุดเอกสาร</b></label>
				                    <p class="exam1statusError"></p>
				                </div>
				            </div>
				        </div>
				    </div>

			    <div class="form-group">
			    	<div class="row">
			    		<label for="publish_status" class="col-sm-3 col-form-label text-al-r">สถานะประกาศ</label>
			    		<div class="col-sm-9">
			    			<div class="autocomplete width100p" style="width: 100%;">
			    				<input type="text" class="form-control" id="publish_status" name="publish_status" placeholder="กรุณากรอกสถานะประกาศ" <?php if(!empty($BookonlineHd->publish_status)) echo "value='$BookonlineHd->publish_status' ";?> >
			    			</div>
			    		</div>
			    	</div>
			    </div>

			    <!-- Text area -->
			    <div class="form-group">
			        <div class="row mb-3">
			            <label for="publish_remark" class="col-sm-3 col-form-label text-al-r">หมายเหตุ</label>
			            <div class="col-sm-9">
			              <textarea class="form-control" id="publish_remark" name="publish_remark" placeholder="หมายเหตุ"><?php if(!empty($BookonlineHd->publish_remark)) echo "$BookonlineHd->publish_remark";?></textarea>
			              <p class="hdremarkError"></p>
			          </div>
			        </div>
			    </div>

			    <?php if($method=="update" && count(array_filter($BookonlineFile))>0){ ?>
			    <!-- ================================ DT for view ================================ --><hr>
			    <div class="form-group pl30_pr30">
				    <div class="row">
				    	<label class="col-sm-3 col-form-label" for="">เอกสารประกาศ</label>
				    	<div class="col-sm-3 publishDt" style="float:left;"><p class="publishviewDtError" style="font-weight: bold; font-size:16px;"></p></div>
              <div class="col-sm-6" style="text-align: right; padding-bottom:5px;"></div>
				    </div>
              <table id="table_view_publish_dt" class="table table-flush table-striped table-bordered table-hover col-12">
                  <thead class="thead-light">
                      <tr>
                          <th>ชื่อเอกสาร</th>
                          <th style="width:110px;">จัดการ</th>
                      </tr>
                  </thead>
                  <tbody id="tbody_view_publish_dt">
                    <?php
                		for($i=0;$i<count(array_filter($BookonlineFile));$i++){ 
                			$trclass="tr_view_publish_dt_".$BookonlineHd->publish_hd_id."_".$BookonlineFile[$i]->publish_file_id;  ?>
                			<tr class="<?php echo $trclass; ?>"> <?php
							$fol=(date("Y")+543);
							$patchfile= base_url()."uploads/".$fol."/".$BookonlineFile[$i]->publish_file;
							?>
                    		<td><a href="<?php echo $patchfile; ?>" class="" target="_blank" ><?php echo $BookonlineFile[$i]->publish_filename; ?></a></td>
                    		<td><a href="<?php echo $patchfile; ?>" class="btn btn-info btn-sm" target="_blank"><i class="nav-icon fas fa-sticky-note"></i></a><a href="javascript:void(0);" onclick="formedit_delete_publish_file('<?php echo $BookonlineHd->publish_hd_id; ?>','<?php echo $BookonlineFile[$i]->publish_file_id; ?>','<?php echo $session_username; ?>');" class="btn btn-danger btn-sm"><i class="fas fa-minus"></i></a>
                    			</td> <?php
                    		echo "</tr>";
	              		}
	                  ?>
                </tbody>
            </table>
          </div>
          <?php } ?>

			    <!-- ================================ DT for add new ================================ --><hr>
			    <div class="form-group pl30_pr30">
				    <div class="row">
				    	<?php if($method=="add"){ ?>
				    		<label class="col-sm-3 col-form-label" for="">รายละเอียดประกาศ</label>
				    	<?php } ?>
				    	<div class="col-sm-3 publishDt" style="float:left;">
				    		<p class="publishDtError" style="font-weight: bold; font-size:16px;"></p>
				    	</div>
            	<div class='<?php if($method=="add") echo"col-sm-6"; else echo"col-sm-9";?>' style="text-align: right; padding-bottom:5px;">
            		<button type="button" class="btn btn-success" onclick="add_publish_dt()"><i class="nav-icon fas fa-plus"></i> เอกสาร</button>
            	</div>	
				    </div>

            <table id="table_publish_dt" class="table table-flush table-striped table-bordered table-hover col-12">
                <thead class="thead-light">
                  <tr>
                    <th>ชื่อเอกสาร</th>
                    <th>ไฟล์</th>
                    <th style="width:100px;">จัดการ</th>
                  </tr>
                </thead>
                <tbody id="tbody_publish_dt"></tbody>
            </table>
          </div>
          <hr>

          <div class="card-footer" style="text-align:right; float:right;">
          	<div class="row">
          		<button type="button" class="btn btn-secondary" onclick="goback_index()">ยกเลิก</button>
          		<div id="form_submit" style="margin-left:2px;"><button type="submit" class="btn btn-primary">บันทึก</button></div>
          	</div>
          </div>

         </form>
      	</div>
    	</div>

      <div class="col-md-6"></div>

    </div>
  </div>
</section>
