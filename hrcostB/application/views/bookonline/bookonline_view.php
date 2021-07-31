<!--Main content -->
<section class="content">
<?php if($method=="view_detail") $cls="container-fluid view_detail"; else $cls="container-fluid";?>
  <div class="<?php echo $cls; ?>">
    <div class="row">
      
      <div class="col-md-12">
      	<?php
      	// 	echo "session : ".$session_username;
       //    echo "system : ".$system;
    			// echo "method : ".$method;
    			// echo "system : ".$sys;
    			// echo "url : ".base_url();
    		?>
        <div class="card card-primary">
          <div class="card-header" style="background-color:#343a40;">
              <div class="row">
                <div class="col-lg-8">
                  <p class="mb-0">
                      <?php
                          if((!empty($error)) && ($error["code"]!=0)){
                              foreach($error as $err){ ?>
                                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                      <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                      <span class="alert-text"><strong>Error!</strong> 
                                          <?php echo $err; ?> </span>
                                  </div><?php
                              }
                          }
                      ?>
                  </p>
                  <h6></h6>
                </div>
              </div>
          </div>

          <div class="card-body">
      	 		<?php if(!empty($BookonlineHd->publish_status)){?>
      	 		<div class="col-sm-12">
  	 				<div class="row mb-6">
			            <label for="publish_status" class="col-sm-2 col-form-label text-al-r" style="margin-top:2px !important;">สถานะประกาศ</label>
			            <div class="col-sm-9">
			                <?php 
			                	if(!empty($BookonlineHd->publish_status)){
			                		if($BookonlineHd->publish_status=="ด่วน" || $BookonlineHd->publish_status=="ด่วนมาก" || $BookonlineHd->publish_status=="ด่วนที่สุด")
			                			echo "<p style='font-weight: bold; color:red; margin-top:10px;'>".$BookonlineHd->publish_status."</p>";
			                		else
			                			echo "<p style='font-weight: bold; color:green; margin-top:10px;'>".$BookonlineHd->publish_status."</p>";
			                	} 
			                ?>
			            </div>
			        </div>
      	 		</div>
      	 		<?php } ?>

      	 		<?php if($BookonlineHd->publish_pin_status==1){?>
      	 		<div class="col-sm-12">
  	 				<div class="row mb-12">
			            <label for="publish_name" class="col-sm-2 col-form-label text-al-r">สถานะปุกหมุด</label>
			            <div class="col-sm-9"><?php
			            	if($BookonlineHd->publish_pin_status==1){  $path=base_url()."assets/img/flag.gif"; ?>
                        <img src='<?php echo $path; ?>' alt="ปักหมุดประกาศนี้" style="margin:-3px 0px 0px 3px;"width="5%" />
                    <?php } ?>
			                <!-- <input type="checkbox" class="form-check-input ml5" id="exam1_status" name="exam1_status" <?php if(!empty($BookonlineHd->publish_pin_status)) {if($BookonlineHd->publish_pin_status==1) echo "checked";} ?>> -->
			            </div>
			        </div>
      	 		</div>

      	 		<?php } ?>

      	 		<?php if(!empty($BookonlineHd->publish_status) || $BookonlineHd->publish_pin_status==1) echo "<hr>";?>
				
				<div class="col-sm-12">
 				<div class="row mb-12">
	            <label for="publish_name" class="col-sm-2 col-form-label text-al-r">หน่วยงาน</label>
	            <div class="col-sm-9">
                <?php
                  foreach ($locations as $row) {
                  	if($method == "view_detail"){ if($row->ward_code==$BookonlineHd->ward_code) echo "<p style=' color:#0400fff0; margin-top:10px;'>".$row->ward_name1."</p>"; }
                 	} ?>
	            </div>
	        </div>
  	 		</div>
				<div class="col-sm-12">
 				<div class="row mb-12">
	            <label for="publish_name" class="col-sm-2 col-form-label text-al-r">ชื่อประกาศ</label>
	            <div class="col-sm-9">
	                <?php if(!empty($BookonlineHd->publish_name)) echo "<p style=' color:#0400fff0; margin-top:10px;'>".$BookonlineHd->publish_name."</p>"; ?>	
	            </div>
	        </div>
  	 		</div>
  	 		
  	 		<div class="col-sm-12">
 				<div class="row mb-12">
	            <label for="publish_name" class="col-sm-2 col-form-label text-al-r">ประเภทเอกสาร</label>
	            <div class="col-sm-9">
	            <?php
								foreach($Types as $row){
									if($method=="view_detail"){ if($BookonlineHd->publish_type_id==$row->publish_type_id) echo "<p style=' color:#0400fff0; margin-top:10px;'>".$row->publish_type_name."</p>"; }
								}
              ?>
	            </div>
	        </div>
  	 		</div>

  	 		<div class="col-sm-12">
 				<div class="row mb-12">
	            <label for="publish_name" class="col-sm-2 col-form-label text-al-r">วันที่ประกาศ</label>
	            <div class="col-sm-9"><?php
                if($system=="backend"){
			            		echo "<p style=' color:#0400fff0; margin-top:10px;'>".convert_std_format_thai_datetime_two($BookonlineHd->publish_datetime)."</p>";
			            	}else if($system=="frontend"){
			            		echo "<p style=' color:#0400fff0; margin-top:10px;'>".convert_std_format_thai_datetime_two($BookonlineHd->publish_datetime)."</p>";
			          }?>
	            </div>
	        </div>
  	 		</div>

  	 		<?php if(!empty($BookonlineHd->publish_remark)){ ?>
  	 		<div class="col-sm-12">
 				<div class="row mb-12">
	            <label for="publish_name" class="col-sm-2 col-form-label text-al-r">หมายเหตุ</label>
	            <div class="col-sm-9">
	            <?php echo "<p style=' color:#0400fff0; margin-top:10px;'>".$BookonlineHd->publish_remark."</p>"; ?>
	            </div>
	        </div>
  	 		</div>
  	 		<?php } ?>

  	 		<div class="col-sm-12">
 				<div class="row mb-12">
	            <label for="publish_name" class="col-sm-2 col-form-label text-al-r">ประกาศโดย</label>
	            <div class="col-sm-9">
	                <?php
	                if(!empty($BookonlineHd->modify_by) && isset($BookonlineHd->modify_by)){
	                	foreach($Users as $user){
					            if($user->NUM_OT == $BookonlineHd->modify_by) $fullname="คุณ".$user->fname." ".$user->lname;
					        	}
	                }else{
	                	foreach($Users as $user){
					            if($user->NUM_OT == $BookonlineHd->create_by) $fullname="คุณ".$user->fname." ".$user->lname;
					        	}
	                }
	                
					        if(!empty($fullname)) echo "<p style=' color:#0400fff0; margin-top:10px;'>".$fullname."</p>";
	                ?>
	            </div>
	        </div>
  	 		</div>

        <?php
        		echo "<hr>"; ?>
            <!-- <label class="label-control" for="upl_files">เอกสาร</label> -->
            <div class="form-group pl30_pr30">
                <table id="table_files" class="table table-flush table-striped table-bordered table-hover col-12">
                    <thead>
                        <tr>
                            <th>ชื่อเอกสาร</th>
                            <th style="width:110px;">ไฟล์</th>
                        </tr>
                    </thead>
                    <tbody><?php
                        for($i=0;$i<count(array_filter($BookonlineFile));$i++){
                        	$fol=date("Y")+543;
                        	$patchfile= base_url()."uploads/".$fol."/".$BookonlineFile[$i]->publish_file;
                        	?>
                            <tr>
                                <td><a href="<?php echo $patchfile; ?>" target="_blank" ><p style=""><?php echo $BookonlineFile[$i]->publish_filename; ?> </p></a></td>
                                <td><a href="<?php echo $patchfile; ?>" class="btn btn-info btn-sm" target="_blank"><i class='fas fa-folder'></i></a></td>
                            </tr> <?php
                    	} ?>
                    </tbody>
                </table>
              <div>

	        <div class="card-footer" style="text-align:right; float:right;">
	        	<div class="row">
	        		<button type="button" class="btn btn-secondary" onclick="goback_index()">กลับหน้าหลัก</button>
	        	</div>
	        </div>
        </div>
      </div>
      <div class="col-md-6"></div>
    </div>
  </div>
</section>

<script type="text/javascript">
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
</script>
