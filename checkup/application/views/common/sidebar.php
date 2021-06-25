<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url(); ?>" class="brand-link">
      <img src="<?php echo base_url(); ?>../common/assets/images/logo_cmex_small.png" alt="CMEx Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ระบบตรวจสุขภาพ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image" style="padding-left: 0px;">
          <?php
            $img_file_path = base_url() . '../common/assets/images/person_img.png';
          
            // if (remote_file_exists('http://excellent.med.cmu.ac.th/employee/images/person/'.$session_username.'.png')) {
              // $img_file_path = 'http://excellent.med.cmu.ac.th/employee/images/person/'.$session_username.'.png';
            // }
            
            
          ?>
          <img src="<?php echo $img_file_path; ?>" class="img-circle elevation-2" alt="User Image" style="margin-top: 10px;">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php echo $session_name; ?> <br>
            <span style="font-size: 10pt;">
              <?php echo $session_position_name; ?>
            </span>
          </a>

        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item has-treeview">
            <a href="<?php echo base_url(); ?>Home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
              </p>
            </a>
          </li> -->

          <li class="nav-item has-treeview">
            <a href="<?php echo base_url(); ?>Checkup" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
              <p>
                ตรวจสุขภาพ
								<i class="fas fa-angle-left right"></i>
              </p>
            </a>
						<ul class="nav nav-treeview ">
						<li class="nav-item">
                <a href="<?php echo base_url(); ?>Checkup" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ทั้งหมด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Checkup/checkupsLocation/1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CMEx</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Checkup/checkupsLocation/2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>GMC</p>
                </a>
              </li>
						</ul>
          </li>

        
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url(); ?>Home/do_logout" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
              <p>
                ออกจากระบบ
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

