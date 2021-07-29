
<div class="content-wrapper" <?php if($system=="frontend") echo "style='margin-left:0px !important'"; ?> >
  
  <?php //echo "system : ".$system; ?>
  <?php //echo "method : ".$method; ?>
  <?php //echo "iframe : ".$iframe; ?>
  <?php //echo "user_link : ".$user_link; ?>
  <?php //echo "base_rul : ".base_url(); ?>
    
    <?php if(isset($iframe)){ ?>
      <div class="content-header" style="padding: 0px .0rem !important">
    <?php }else{ ?>
      <div class="content-header">
    <?php } ?>
    
      <div class="container-fluid">
        <div class="row mb-2">

          <!-- [Athiwat][28/06/2564][add comment] -->
          <?php // if(!isset($iframe) || (!$iframe)) echo "<br><br>"; ?>
            
          <div class="col-12">
            <div class="row">
              <?php
              if($system=="frontend" && $method=="view"){
              ?>
                <div class="col-6">
                  <!-- <span class="badge badge-pill badge-light"><?php echo "ยินดีต้อนรับ"; ?></span><br> -->
                  <span class="badge badge-pill badge-light"><?php echo $session_position_name; ?></span><br>
                  <span class="badge badge-pill badge-light"><?php echo $session_name; ?></span>
                </div>
              <?php
              }else{
              ?>
                <div class="col-6"><h1 class="m-0 text-dark"><?php echo $head_title; ?></h1></div>
              <?php
              }
              ?>
              <div class="col-6" style="text-align: right;">
                <?php if($system=="frontend"){ ?>
                  <?php if($method=="view"){ ?>
                    <?php //if(!isset($iframe) || (!$iframe)){ ?>
                        <a href="<?php echo base_url(); ?>Home/frontend_logout"> <span class="badge badge-pill badge-light"><i class="nav-icon fas fa-power-off"></i> ออกจากระบบ</span></a>
                    <?php //} ?>
                  <?php } ?>
                <?php } ?>

              </div>
            </div>
          </div>
          <?php if(!empty($breadcrumb)){ ?>
            <br><br>
            <div class="col-12">
              <?php echo $breadcrumb; ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
    