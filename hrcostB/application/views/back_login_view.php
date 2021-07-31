<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ระบบหนังสือเวียนออนไลน์ | Log in</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>../common/assets/images/favicon.ico">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">

  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>ระบบหนังสือเวียนออนไลน์</b>
  </div>
  
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"></p>
      
      <?php
        //echo "session : ".$session_username;
        // echo base_url();
        // echo "<br>";
        // echo $sys;
        // echo $system;
      ?>
      
      <form role="form" method="POST" action='<?php echo base_url()."Login/process/".$sys; ?>'>
        <input type="hidden" name="user_link" value="<?php echo $user_link; ?>">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="รหัสพนักงาน">
          <div class="input-group-append">
            <div class="input-group-text">
            <ion-icon name="person-circle-outline"></ion-icon>
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">เข้าสู่ระบบ</button>
          </div>
          <!-- <div class="col-12" id="div_msg"><?php echo $msg; ?></div> -->
          <div class="col-12" id="div_msg">
            <?php echo $msg; ?>
            <!-- [ton][01/07/2564][add session status] -->
            <?php 
              $failure=$this->session->userdata('failure');
              $msg_failure="<font color=red>{$failure}</font><br />";
              if($failure!=""){
                echo $msg_failure;
                $this->session->sess_destroy();
              } 
            ?>    
          </div>

        </div>

        <div style="margin-top:30px; text-align:center;">
            <?php
              $img1=base_url()."assets/img/cmex_logo2.png";
              $img2=base_url()."assets/img/med_logo.png";
              $img3=base_url()."assets/img/cmu_logo.png";
            ?>
            <img src='<?php echo $img1; ?>' height="23">
            <img src='<?php echo $img2; ?>' height="23">
            <img src='<?php echo $img3; ?>' height="23">
        </div>

      </form>
      <?php $this->session->set_flashdata('failure',''); ?> <!-- [ton][01/07/2564][add clear session status] -->
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>

</body>
</html>
