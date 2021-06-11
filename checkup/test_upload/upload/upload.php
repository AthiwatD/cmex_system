<?php
    include "template_session.php";
    include "../config_db.php";
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
                                <div>Form Upload
                                    <div class="page-title-subheading">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Upload File</h5>
                                            <div>
                                                <h3>คำเตือน</h3>
                                                    1. จัดเรียงคอลัมน์ข้อมูลเรียงลำดับตามนี้ <br>
                                                    วันที่บันทึก | HN | เลขที่เอกสาร | รายการ | สุทธิ | ชื่อผู้ป่วย | Staff Name
                                                    <br> 
                                                    2. วันที่บันทึก ต้องมีฟอร์แมตเป็น  "วัน/เดือน/ปี(ค.ศ.)" เท่านั้น   <br>
                                                    3. ตรวจสอบภายในไฟล์จะต้องไม่มีเครื่องหมาย "," อยู่ภายในไฟล์เลย <br>           
                                                    4. บันทึกชื่อไฟล์เป็นภาษาอังกฤษเท่านั้น <br>
                                                    5. บันทึกไฟล์นามสกุล CSV UTF-8 (Comma delemited) (*.csv) เท่านั้น <br>
                                                        
                                            </div>
                                            <br>
                                            <form method="POST" action="upload_do.php" enctype="multipart/form-data">
                                                <div class="position-relative form-group"><label for="exampleSelect" class="">เลือกศูนย์</label>
                                                    <select name="department_id" id="department_id" class="form-control" required>
                                                    <option selected disabled >เลือกศูนย์ที่ต้องการ *</option>
                                                        <?php
                                                            $sql ="SELECT * 
                                                                    FROM df_department";
                                                            //echo $sql;
                                                            $result = mysqli_query($db_connect, $sql);

                                                            if(!$result){
                                                                echo "ERROR QUERY!<br>";
                                                                exit;
                                                            }else{
                                                                $count = 0;
                                                                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                                                    $count++;
                                                                    $department_id = stripslashes($row['department_id']);
                                                                    $department_abbre = stripslashes($row['department_abbre']);
                                                                    $department_name = stripslashes($row['department_name']);          
                                                        ?>
                                                                    <option value="<?php echo $department_id; ?>"><?php echo $department_abbre . " " . $department_name; ?></option>
                                                        <?php
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label for="exampleFile" class="">ไฟล์ *</label>
                                                    <input name="file" id="file" type="file" class="form-control-file" required>
                                                    <small class="form-text text-muted">
                                                        
                                                    </small>
                                                </div>
                                                <input type="submit" name="submit" />
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Uploaded Files</h5>
                                            <div>
                                                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>วัน/เวลา</th>
                                                            <th>ชื่อไฟล์</th>
                                                            <th>ลบ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                <!--    
                                                <?php

                                                    if ($handle = opendir('../upload/')) {

                                                        while (false !== ($entry = readdir($handle))) {
                                                    
                                                            if ($entry != "." && $entry != "..") {
                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <a href="../upload/<?php echo $entry; ?>"><?php echo $entry; ?></a>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo date("Y-m-d H:i:s.", filemtime("../upload/" . $entry)); ?>
                                                                    </td>
                                                                </tr>
                                                <?php
                                                            }
                                                        }
                                                    
                                                        closedir($handle);
                                                    }
                                                    
                                                ?>
                                                -->
                                                
                                                    <?php
                                                        $sql = "SELECT DISTINCT file_name, create_time
                                                                FROM df_detail
                                                                ORDER BY create_time DESC";
                                                        $result = mysqli_query($db_connect, $sql);

                                                        if(!$result){
                                                            echo "ERROR QUERY! : " . $result . "<br>";
                                                            exit;
                                                        }else{
                                                            $count = 0;
                                                            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                                                $count++;
                                                                $file_name = stripslashes($row['file_name']);
                                                                $create_time = stripslashes($row['create_time']);
                                                                
                                                    ?>
                                                                <tr>
                                                                    <td><?php echo $create_time; ?></td>
                                                                    <td><a href="../upload/<?php echo $entry; ?>"><?php echo $file_name; ?></a></td>
                                                                    <td><a href="delete_do.php?file_name=<?php echo $file_name; ?>&create_time=<?php echo $create_time; ?>" 
                                                                        onclick="return confirm('คุณต้องการลบข้อมูล ใช่ หรือ ไม่')">
                                                                        <button class="form-control">ลบ</button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                    <?php
                                                            }
                                                        }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
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