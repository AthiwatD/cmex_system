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

<!-- Main content-->
<section class="content">
  <div class="container-fluid form_repass">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
				<div class="card-header" style="background-color:#343a40;">
				  <div class="row">
				    <div class="col-lg-8">
				      <p class="mb-0">
			          <?php
			          	if((!empty($error)) && ($error["code"]!=0)){
	                  foreach($error as $err){  ?>
	                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
	                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
	                        <span class="alert-text"><strong>Error!</strong> <?php echo $err; ?> </span>
	                    </div><?php
			           		}
			            }
			          ?>
				      </p>
				      <h6></h6>
				    </div>
				  </div>
				</div>
				<?php //print_r(CENTERS); ?>
				<!-- [Athiwat][15/07/2564][add Collapse menu chose easy process] -->
				<div id="accordion">
					<!-- card one -->
			    <div class="card-header" id="headingOne" style="padding:0px !important;">
			      <h5 class="mb-0">
			        <button class="btn btn-link collapsed" onclick="setCenter(this,arrCenter0[1],1);" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			          <span class="badge badge-pill badge-dark shc_menu1"><b>เมนูลัดศูนย์ความเป็นเลิศทางการแพทย์</b></span>
			        </button>
			      </h5>
			    </div>

			    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
			      <div class="card-body">
		       	<?php //---------------------------------- view
		       		// print_r($CmexMenus);
		       		// echo count($CmexMenus);
		       		if(count($CmexMenus)>0){
		       			$mod=6;
				       	for($inx=0;$inx<count($CmexMenus);$inx++){
				       		if($inx==0) echo '<div class="row pb5">';
				       		if($inx==$mod){ echo '<div class="row pb5">'; $mod+=6; } ?>
				        	<div class="col-2 col-sm-2">
				        		<a href="#" onclick="setFormMenu(this,<?php echo $CmexMenus[$inx]->menuhd_id; ?>);">
				        			<span class="badge badge-pill badge-primary"><?php echo $CmexMenus[$inx]->menuhd_name; ?></span>
				        		</a>
				        	</div><?php
				          if($inx==($mod-1)){echo '</div>';}
				          else if($inx == (count($CmexMenus)-1)) {echo '</div>';}
				       	}
		       		}
			      ?>
			      </div>
			    </div>
				  
				  <!-- card two -->
				  <div>
				    <div class="card-header" id="headingTwo" style="padding:0px !important;">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" onclick="setCenter(this,arrCenter2[1],2);" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          <span class="badge badge-pill badge-dark shc_menu2"><b>เมนูลัดศูนย์เวชศาสตร์ผู้สูงอายุ</b></span>
				        </button>
				      </h5>
				    </div>
				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				      <div class="card-body">
				      	<?php
				       		if(count($GmcMenus)>0){
				       			$mod=6;
						       	for($inx=0;$inx<count($GmcMenus);$inx++){
						       		if($inx==0) echo '<div class="row pb5">';
						       		if($inx==$mod){ echo '<div class="row pb5">'; $mod+=6; } ?>
						        	<div class="col-2 col-sm-2">
						        		<a href="#" onclick="setFormMenu(this,<?php echo $GmcMenus[$inx]->menuhd_id; ?>);">
						        			<span class="badge badge-pill badge-primary"><?php echo $GmcMenus[$inx]->menuhd_name; ?></span>
						        		</a>
						        	</div><?php
						          if($inx==($mod-1)){echo '</div>';}
						          else if($inx == (count($GmcMenus)-1)) {echo '</div>';}
						       	}
				       		}
					      ?>
				      </div>
				    </div>
				  </div>
				  <!-- card three -->
				  <div>
				    <div class="card-header" id="headingThree" style="padding:0px !important;">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" onclick="setCenter(this,arrCenter5[1],3);" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          <span class="badge badge-pill badge-dark shc_menu3"><b>เมนูลัดศูนย์การแพทย์แผนไทยและการแพทย์ผสมผสาน</b></span>
				        </button>
				      </h5>
				    </div>
				    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
				      <div class="card-body">
				      	<?php
				       		if(count($TtcmMenus)>0){
				       			$mod=6;
						       	for($inx=0;$inx<count($TtcmMenus);$inx++){
						       		if($inx==0) echo '<div class="row pb5">';
						       		if($inx==$mod){ echo '<div class="row pb5">'; $mod+=6; } ?>
						        	<div class="col-2 col-sm-2">
						        		<a href="#" onclick="setFormMenu(this,<?php echo $TtcmMenus[$inx]->menuhd_id; ?>);">
						        			<span class="badge badge-pill badge-primary"><?php echo $TtcmMenus[$inx]->menuhd_name; ?></span>
						        		</a>
						        	</div><?php
						          if($inx==($mod-1)){echo '</div>';}
						          else if($inx == (count($TtcmMenus)-1)) {echo '</div>';}
						       	}
				       		}
					      ?>
				      </div>
				    </div>
				  </div>

				  <!-- card nine -->
			    <!-- view array -->
				  <!-- <script>console.log(arrCenter1);  console.log(arrCenter1[1]);</script> -->
				  <div>
				    <div class="card-header" id="headingNine" style="padding:0px !important;">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" onclick="setCenter(this,arrCenter1[1],9);" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
				          <span class="badge badge-pill badge-dark shc_menu9"><b>เมนูลัดศูนย์วิเคราะห์สุขภาพการนอนหลับ</b></span>
				        </button>
				      </h5>
				    </div>
				    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
				      <div class="card-body">
				      	<?php
				       		if(count($SdcMenus)>0){
				       			$mod=6;
						       	for($inx=0;$inx<count($SdcMenus);$inx++){
						       		if($inx==0) echo '<div class="row pb5">';
						       		if($inx==$mod){ echo '<div class="row pb5">'; $mod+=6; } ?>
						        	<div class="col-2 col-sm-2">
						        		<a href="#" onclick="setFormMenu(this,<?php echo $SdcMenus[$inx]->menuhd_id; ?>);">
						        			<span class="badge badge-pill badge-primary"><?php echo $SdcMenus[$inx]->menuhd_name; ?></span>
						        		</a>
						        	</div><?php
						          if($inx==($mod-1)){echo '</div>';}
						          else if($inx == (count($SdcMenus)-1)) {echo '</div>';}
						       	}
				       		}
					      ?>
				      </div>
				    </div>
			    </div>

			    <!-- card eight -->
				  <!-- <script>console.log(arrCenter7);  console.log(arrCenter7[1]);</script> -->
				  <div>
				    <div class="card-header" id="headingEight" style="padding:0px !important;">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" onclick="setCenter(this,arrCenter7[1],8);" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
				          <span class="badge badge-pill badge-dark shc_menu8"><b>เมนูลัดศูนย์เลสิค</b></span>
				        </button>
				      </h5>
				    </div>
				    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
				      <div class="card-body">
					      <?php
					      if(count($LasMenus)>0){
				       			$mod=6;
						       	for($inx=0;$inx<count($LasMenus);$inx++){
						       		if($inx==0) echo '<div class="row pb5">';
						       		if($inx==$mod){ echo '<div class="row pb5">'; $mod+=6; } ?>
						        	<div class="col-2 col-sm-2">
						        		<a href="#" onclick="setFormMenu(this,<?php echo $LasMenus[$inx]->menuhd_id; ?>);">
						        			<span class="badge badge-pill badge-primary"><?php echo $LasMenus[$inx]->menuhd_name; ?></span>
						        		</a>
						        	</div><?php
						          if($inx==($mod-1)){echo '</div>';}
						          else if($inx == (count($LasMenus)-1)) {echo '</div>';}
						       	}
				       		}
					      ?>
				      </div>
				    </div>
			    </div>
				  
			    <!-- card five -->
			    <div>
				    <div class="card-header" id="headingFive" style="padding:0px !important;">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" onclick="setCenter(this,arrCenter6[1],5);" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
				          <span class="badge badge-pill badge-dark shc_menu5"><b>ศูนย์สุขภาพสตรี</b></span>
				        </button>
				      </h5>
				    </div>
				    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
				      <div class="card-body">
				      	<?php
				       		if(count($WhMenus)>0){
				       			$mod=6;
						       	for($inx=0;$inx<count($WhMenus);$inx++){
						       		if($inx==0) echo '<div class="row pb5">';
						       		if($inx==$mod){ echo '<div class="row pb5">'; $mod+=6; } ?>
						        	<div class="col-2 col-sm-2">
						        		<a href="#" onclick="setFormMenu(this,<?php echo $WhMenus[$inx]->menuhd_id; ?>);">
						        			<span class="badge badge-pill badge-primary"><?php echo $WhMenus[$inx]->menuhd_name; ?></span>
						        		</a>
						        	</div><?php
						          if($inx==($mod-1)){echo '</div>';}
						          else if($inx == (count($WhMenus)-1)) {echo '</div>';}
						       	}
				       		}
					      ?>
				      </div>
				    </div>
				  </div>

				  

				  <!-- card six -->
			    <div>
				    <div class="card-header" id="headingSix" style="padding:0px !important;">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" onclick="setCenter(this,arrCenter3[1],6);" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
				          <span class="badge badge-pill badge-dark shc_menu6"><b>ศูนย์เพทซีที และไซโคลตรอน</b></span>
				        </button>
				      </h5>
				    </div>
				    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
				      <div class="card-body">
				      	<?php
				       		if(count($PccMenus)>0){
				       			$mod=6;
						       	for($inx=0;$inx<count($PccMenus);$inx++){
						       		if($inx==0) echo '<div class="row pb5">';
						       		if($inx==$mod){ echo '<div class="row pb5">'; $mod+=6; } ?>
						        	<div class="col-2 col-sm-2">
						        		<a href="#" onclick="setFormMenu(this,<?php echo $PccMenus[$inx]->menuhd_id; ?>);">
						        			<span class="badge badge-pill badge-primary"><?php echo $PccMenus[$inx]->menuhd_name; ?></span>
						        		</a>
						        	</div><?php
						          if($inx==($mod-1)){echo '</div>';}
						          else if($inx == (count($PccMenus)-1)) {echo '</div>';}
						       	}
				       		}
					      ?>
				      </div>
				    </div>
				  </div>
				  <!-- card seven -->
			    <div>
				    <div class="card-header" id="headingSeven" style="padding:0px !important;">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" onclick="setCenter(this,arrCenter10[1],7);" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
				          <span class="badge badge-pill badge-dark shc_menu7"><b>ศูนย์การแพทย์เพื่อการมีบุตร</b></span>
				        </button>
				      </h5>
				    </div>
				    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
				      <div class="card-body">
				      	<?php
				       		if(count($CfcMenus)>0){
				       			$mod=6;
						       	for($inx=0;$inx<count($CfcMenus);$inx++){
						       		if($inx==0) echo '<div class="row pb5">';
						       		if($inx==$mod){ echo '<div class="row pb5">'; $mod+=6; } ?>
						        	<div class="col-2 col-sm-2">
						        		<a href="#" onclick="setFormMenu(this,<?php echo $CfcMenus[$inx]->menuhd_id; ?>);">
						        			<span class="badge badge-pill badge-primary"><?php echo $CfcMenus[$inx]->menuhd_name; ?></span>
						        		</a>
						        	</div><?php
						          if($inx==($mod-1)){echo '</div>';}
						          else if($inx == (count($CfcMenus)-1)) {echo '</div>';}
						       	}
				       		}
					      ?>
				      </div>
				    </div>
				  </div>
				  

			    <!-- <script>console.log(arrCenter4);  console.log(arrCenter4[1]);</script> -->
			    <!-- card four -->
				  <div>
				    <div class="card-header" id="headingFour" style="padding:0px !important;">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" onclick="setCenter(this,arrCenter4[1],4);" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				          <span class="badge badge-pill badge-dark shc_menu4"><b>เมนูลัดศูนย์เลเซอร์ต้อกระจกเชียงใหม่</b></span>
				        </button>
				      </h5>
				    </div>
				    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
				      <div class="card-body">
				      	<?php
				       		if(count($ClcsMenus)>0){
				       			$mod=6;
						       	for($inx=0;$inx<count($ClcsMenus);$inx++){
						       		if($inx==0) echo '<div class="row pb5">';
						       		if($inx==$mod){ echo '<div class="row pb5">'; $mod+=6; } ?>
						        	<div class="col-2 col-sm-2">
						        		<a href="#" onclick="setFormMenu(this,<?php echo $ClcsMenus[$inx]->menuhd_id; ?>);">
						        			<span class="badge badge-pill badge-primary"><?php echo $ClcsMenus[$inx]->menuhd_name; ?></span>
						        		</a>
						        	</div><?php
						          if($inx==($mod-1)){echo '</div>';}
						          else if($inx == (count($ClcsMenus)-1)) {echo '</div>';}
						       	}
				       		}
					      ?>
				      </div>
				    </div>
			    </div>

			    

			    

				</div>
				
				<!-- [ton][13/07/2564][add custom js script] -->
				<form id="form_view_hrcost" class="form-horizontal form_view_hrcost hide" role="form" method="post" enctype="multipart/form-data">
					<div id="view_hrcost">
					<div class="collapse" id="collapseResult">
					  <div class="card card-body">
						 <!-------------------------------------------------------------------------------
							| //[Athiwat][14/07/2564][add collapseResult]
							|------------------------------------------------------------------------------>
					  	<div class="form-group has-success">
                <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> สรุปต้นทุนเงินเดือน</label>
              </div>
					  	<!-- row One -->
						  <div class="row">
				        <div class="col-md-3 col-sm-6 col-xs-12">
				          <div class="info-box bg-primary">
				            <span class="info-box-icon"><i class="fa fa-calculator"></i></span>
				            <div class="info-box-content">
				              <span class="info-box-text">ทั้งหมด/รายการ</span>
				              <span class="info-box-number resulthr0"></span>
				              <div class="progress">
				                <div class="progress-bar" style="width: 0%"></div>
				              </div>
				              <span class="progress-description"></span>    
				            </div>
				          </div>
				        </div>

				        <div class="col-md-3 col-sm-6 col-xs-12">
				          <div class="info-box bg-primary">
				            <span class="info-box-icon"><i class="fa fa-calculator"></i></span>
				            <div class="info-box-content">
				              <span class="info-box-text">ยอดรวม/บาท</span>
				              <span class="info-box-number resulthr1"></span>

				              <div class="progress">
				                <div class="progress-bar" style="width: 0%"></div>
				              </div>
				              <span class="progress-description"></span>
				            </div>
				          </div>
				        </div>

				        <div class="col-md-3 col-sm-6 col-xs-12">
				          <div class="info-box bg-primary">
				            <span class="info-box-icon"><i class="fa fa-calculator"></i></span>

				            <div class="info-box-content">
				              <span class="info-box-text">เฉลี่ย/บาท</span>
				              <span class="info-box-number resulthr2"></span>

				              <div class="progress">
				                <div class="progress-bar" style="width: 0%"></div>
				              </div>
				              <span class="progress-description"></span>
				            </div>
				          </div>
				        </div>

				        <div class="col-md-3 col-sm-6 col-xs-12">
				          <div class="info-box bg-primary">
				            <span class="info-box-icon"><i class="fa fa-calculator"></i></span>

				            <div class="info-box-content">
				              <span class="info-box-text">ค่ามากสุด/บาท</span>
				              <span class="info-box-number resulthr3">41,410</span>

				              <div class="progress">
				                <div class="progress-bar" style="width: 0%"></div>
				              </div>
				              <span class="progress-description"></span>
				            </div>
				          </div>
				        </div>
				      </div>
				      <!-- row Two -->
				      <div class="row">
				      	<div class="col-md-3 col-sm-6 col-xs-12"></div>
				      	<div class="col-md-3 col-sm-6 col-xs-12"></div>
				      	<div class="col-md-3 col-sm-6 col-xs-12"></div>
				      	<div class="col-md-3 col-sm-6 col-xs-12">
				          <div class="info-box bg-primary">
				            <span class="info-box-icon"><i class="fa fa-calculator"></i></span>

				            <div class="info-box-content">
				              <span class="info-box-text">ค่าน้อยสุด/บาท</span>
				              <span class="info-box-number resulthr4"></span>
				              <div class="progress">
				                <div class="progress-bar" style="width: 0%"></div>
				              </div>
				              <span class="progress-description"></span>
				            </div>
				          </div>
				        </div>
				      </div>

				      <div class="form-group has-success">
                <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> สรุปต้นทุนค่าล่วงเวลา</label>
              </div>
              <!-- row One -->
						  <div class="row">
				        <div class="col-md-3 col-sm-6 col-xs-12">
				          <div class="info-box bg-info">
				            <span class="info-box-icon"><i class="fa fa-clock"></i></span>
				            <div class="info-box-content">
				              <span class="info-box-text">ทั้งหมด/รายการ</span>
				              <span class="info-box-number resultot0"></span>

				              <div class="progress">
				                <div class="progress-bar" style="width: 0%"></div>
				              </div>
				              <span class="progress-description"></span>    
				            </div>
				          </div>
				        </div>

				        <div class="col-md-3 col-sm-6 col-xs-12">
				          <div class="info-box bg-info">
				            <span class="info-box-icon"><i class="fa fa-clock"></i></span>
				            <div class="info-box-content">
				              <span class="info-box-text">ยอดรวม/บาท</span>
				              <span class="info-box-number resultot1"></span>

				              <div class="progress">
				                <div class="progress-bar" style="width: 0%"></div>
				              </div>
				              <span class="progress-description"></span>
				            </div>
				          </div>
				        </div>

				        <div class="col-md-3 col-sm-6 col-xs-12">
				          <div class="info-box bg-info">
				            <span class="info-box-icon"><i class="fa fa-clock"></i></span>

				            <div class="info-box-content">
				              <span class="info-box-text">เฉลี่ย/บาท</span>
				              <span class="info-box-number resultot2"></span>

				              <div class="progress">
				                <div class="progress-bar" style="width: 0%"></div>
				              </div>
				              <span class="progress-description"></span>
				            </div>
				          </div>
				        </div>

				        <div class="col-md-3 col-sm-6 col-xs-12">
				          <div class="info-box bg-info">
				            <span class="info-box-icon"><i class="fa fa-clock"></i></span>

				            <div class="info-box-content">
				              <span class="info-box-text">ค่ามากสุด/บาท</span>
				              <span class="info-box-number resultot3">41,410</span>

				              <div class="progress">
				                <div class="progress-bar" style="width: 0%"></div>
				              </div>
				              <span class="progress-description"></span>
				            </div>
				          </div>
				        </div>
				      </div>
				      <!-- row Two -->
				      <div class="row">
				      	<div class="col-md-3 col-sm-6 col-xs-12"></div>
				      	<div class="col-md-3 col-sm-6 col-xs-12"></div>
				      	<div class="col-md-3 col-sm-6 col-xs-12"></div>
				      	<div class="col-md-3 col-sm-6 col-xs-12">
				          <div class="info-box bg-info">
				            <span class="info-box-icon"><i class="fa fa-clock"></i></span>

				            <div class="info-box-content">
				              <span class="info-box-text">ค่าน้อยสุด/บาท</span>
				              <span class="info-box-number resultot4"></span>
				              <div class="progress">
				                <div class="progress-bar" style="width: 0%"></div>
				              </div>
				              <span class="progress-description"></span>
				            </div>
				          </div>
				        </div>
				      </div>

					  </div>
					</div>

	      	</div>
      	</form>

				<form id="form_hrcost" class="needs-validation form-horizontal form-input m0" role="form" enctype="multipart/form-data" method="POST"
				<?php
					// if($method == "form") echo "action='".base_url()."Hrcost/costProcess'";
				?>
				>
          <div class="card-body" style="padding: 10px !important;">
						<div class="form-group">
						<div class="row">
							<input type="hidden" id="hidden_numot" name="hidden_numot" value="<?php echo $session_username; ?>">
							<!-- <div class="col-sm-3 npl npr"></div><div class="col-sm-3 npl npr"></div><div class="col-sm-3 npl npr"></div> -->
							<div class="col-sm-12 npl npr">
								<div id="form_submit">
									<div class="row">
										<!-- badge badge-pill badge-dark flashing -->
										<div class="col-12 costhr_error"><p class="costhrError"></p></div>
										<button type="submit" class="btn btn-primary flashing" style="width:100%; margin:0px 5px 0px 5px !important;" data-toggle="collapse" data-target="#collapseResult" aria-expanded="false" aria-controls="collapseResult"> คำนวณ</button>
									</div>
      					</div>
							</div>
						</div>
						<br>
						<!-- <div class="col-sm-12"><hr></div> -->
						
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
										<input type="checkbox" class="form-check-input big-checkbox input_data"
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
										<input type="checkbox" class="form-check-input big-checkbox input_data"
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
										<input type="checkbox" class="form-check-input big-checkbox input_data"
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
										<input type="checkbox" class="form-check-input big-checkbox input_data"
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
										<input type="checkbox" class="form-check-input big-checkbox input_data"
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
       </form>

       </div>
      </div>
      <!-- right column -->
      <div class="col-md-6"></div>
    </div>
  </div>
</section> <!--/Main content -->
