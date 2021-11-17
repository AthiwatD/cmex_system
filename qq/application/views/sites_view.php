    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
			<?php 
				foreach($sites as $site){
			?>
				
					<div class="col-lg-6">
						<div class="card card-primary card-outline">
						<div class="card-header">
							<h5 class="card-title m-0"><?php echo $site->site_code; ?></h5><h6 class="card-title">(<?php echo $site->site_name; ?>)</h6>
						</div>
						<div class="card-body">
							<a href="<?php echo base_url() .'Home/departments/' . $site->site_id; ?>" class="btn btn-success">เลือกแผนก</a>
							<a href="<?php echo base_url() .'Registration/register/' . $site->site_id; ?>" class="btn btn-warning">เวชระเบียน</a>
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
