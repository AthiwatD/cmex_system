    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
			<?php 
				for($i=0;$i<sizeof($departments);$i++){

				
			?>
				
					<div class="col-lg-6">
						<div class="card card-primary card-outline">
						<div class="card-header">
							<h3 class="card-title m-0" style="font-size:18pt;"><?php echo $departments[$i]->department_name; ?></h3>
							<span class="float-sm-right"><a href="<?php echo base_url() .'Monitor/screen/' . $departments[$i]->site_id . "/" . $departments[$i]->department_id; ?>" class="btn btn-info">จอแสดงผล</a></span>
						</div>
						<div class="card-body">
							<?php
								if(empty($departments[$i]->channel_id)){
							?>
									<a href="<?php echo base_url() .'Node/operate/'. $departments[$i]->site_id . "/" . $departments[$i]->department_id . "/0"; ?>" class="btn btn-success">เลือกแผนก</a>

							<?php
								}
								else{
									$index = 0;
									while($departments[$i + $index]->department_id == $departments[$i]->department_id){
							?>
										<a href="<?php echo base_url() .'Node/operate/' . $departments[$i + $index]->site_id . "/" . $departments[$i + $index]->department_id . "/" . $departments[$i + $index]->channel_id; ?>" class="btn btn-success"><?php echo $departments[$i + $index]->channel_name; ?></a>

							<?php
										$index++;
									}
									$i += $index - 1;
								}
							?>
							<br>
							
						</div>
						</div>
					</div>
			<?php
				}
			?>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
