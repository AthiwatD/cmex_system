<?php
    include "../config_db.php";
    include "../thai_date.php";
    include "template_header.php";
    include "template_body_top.php";
?>  

<div class="app-main">
    <?php
        include "template_body_left_menu.php";
    ?>

            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-display1 icon-gradient bg-premium-dark"></i>
                                </div>
                                <div>Form Upload แปรผล Lab
                                    <div class="page-title-subheading">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="form-group">
                                <div class="col-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Upload File</h5>

                                            <form method="POST" action="upload_lab_meaning_do.php" enctype="multipart/form-data">
                                                    
                                                <div class="position-relative form-group">
                                                    <label for="exampleFile" class="">ไฟล์นามสกุล .xlsx *</label>
                                                    <input name="lab_meaning_file" id="file" type="file" class="form-control-file" 
                                                        accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" required>
                                                    <small class="form-text text-muted">
                                                        
                                                    </small>
                                                </div>
                                                <input type="submit" name="submit" class="btn btn-success" value="เพิ่ม" />
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                
                                
                            </div>
                        </div>
                    </div>
</div>
<?php
    include "template_script.php";
?>
</body>
</html>