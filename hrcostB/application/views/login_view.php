<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ระบบค่าใช้จ่ายฝ่ายบุคคล | Log in</title>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>../common/assets/images/favicon.ico">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">

  <!-- [Athwiat][01/06/2564][add style] -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_new.css">
  <noscript><link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/noscript.css" /></noscript>
  
  <style>
    .fpass{
      float:right !important; 
      margin-top:5px !important;
    }
  </style>
  <?php //echo base_url(); ?>
</head>


<body class="is-preload">

  <div id="wrapper">
    <section id="main">
        <!-- <p class="tc-back font-b mb0">ข้อมูลผู้ใช้</p><hr class="mt2"> -->
        <p class="tc-back font-b mb0 mt5 fs20">ระบบค่าใช้จ่ายฝ่ายบุคคล</p>
        <br>
        <!-- <br><p class="tc-back font-b mb0">ตั้งรหัสผ่านใหม่</p><hr class="mt2"> -->
        <form role="form" method="POST" action="<?php echo base_url(); ?>Login/process">
        <input type="hidden" name="user_link" value="<?php echo $user_link; ?>">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="รหัสพนักงาน">
            <div class="input-group-text">
          <div class="input-group-append">
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
           
          <div class="col-12" id="div_msg"><?php echo $msg; ?></div>
        </div>

        <div style="margin-top:30px;">
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
    </section>
  </div>
  <!-- Footer -->
  <footer id="footer">
    <ul class="copyright">
      <a href="http://excellent.med.cmu.ac.th">
      <li>&copy; ศูนย์ความเป็นเลิศทางการแพทย์</li><li>คณะแพทยศาสตร์ มหาวิทยาลัยเชียงใหม่</li>
      </a>
    </ul>
  </footer>

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>

<!-- Scripts -->
<script>
  if ('addEventListener' in window) {
    window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
    document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
  }
</script>

</body>
</html>
