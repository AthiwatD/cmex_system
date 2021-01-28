<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                  <div class="row">
                    <div class="col-lg-8">
                      <p class="mb-0">
                          <?php  
                              if((!empty($error)) && ($error["code"]!=0)){
                                  foreach($error as $err){
                          ?>
                                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                          <span class="alert-text"><strong>Error!</strong> 
                                              <?php echo $err; ?> </span>
                                      </div>
                          <?php
                                  }
                              }
                          ?>
                      </p>
                    </div>
                  </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <?php 
                    // if($method == "add"){
                    //     echo form_open_multipart('Person/addPersonDo', array('id' => 'demo-form2', 'class' => 'form-horizontal form-label-left needs-validation'));
                    // }else if($method == "update"){
                    //     echo form_open_multipart('Person/updatePersonDo', array('id' => 'demo-form2', 'class' => 'form-horizontal form-label-left needs-validation')); 
                    // }
                ?> 

              <form role="form" enctype="multipart/form-data" class="needs-validation" method="POST"
                <?php
                    if($method == "add"){
                        echo " action='" . base_url() . "Person/addPersonDo' ";
                    }else if($method == "update"){
                        echo " action='" . base_url() . "Person/updatePersonDo' ";
                    }
                ?>
                >
                <div class="card-body">
                

                
                        
                    <div class="form-group">
                        <label for="exampleInputEmail1">รหัสพนักงาน *</label>
                        <input type="text" class="form-control" id="person_id" name="person_id" placeholder="กรุณากรอกรหัสพนักงาน" value="<?php
                                            if($method == "update"){
                                                echo $person->NUM_OT;
                                            }
                                        ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">รหัสผ่าน *</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="กรุณากรอกรหัสผ่าน" value="<?php
                                            if($method == "update"){
                                                echo $person->Upass;
                                            }
                                        ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อ *</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="กรุณากรอกชื่อ" value="<?php
                                            if($method == "update"){
                                                echo $person->Fname;
                                            }
                                        ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">นามสกุล *</label>
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="กรุณากรอกนามสกุล" value="<?php
                                            if($method == "update"){
                                                echo $person->Lname;
                                            }
                                        ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">เพศ</label>
                        
                        <select class="form-control" id="select_sex" name="sex" required>
                            <option disabled selected>โปรดเลือกเพศ</option>
                            <option value="m"
                                <?php
                                    if (!empty($person->sex)) {
                                        if($person->sex == "m"){
                                            echo " selected ";
                                        }
                                    }
                                ?>
                            >ชาย</option>
                            <option value="f" 
                                <?php
                                    if (!empty($person->sex)) {
                                        if($person->sex == "y"){
                                            echo " selected ";
                                        }
                                    }
                                ?>
                            >หญิง</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">ตำแหน่ง</label>
                        
                        <select class="form-control" id="select_position" name="position_id" required>
                            <option disabled selected>โปรดเลือกตำแหน่ง</option>
                            <?php
                                foreach($positions as $index => $position){
                            ?>
                                   <option value="<?php echo $position->position_code; ?>"
                                        <?php
                                            if (!empty($person->PP)) {
                                                if($person->PP == $position->position_code){
                                                    echo " selected ";
                                                }
                                            }
                                        ?>
                                        ><?php 

                                            echo $position->position_name; 
                                        
                                        ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">สถานที่</label>
                        
                        <select class="form-control" id="select_location" name="location_id" required>
                            <option disabled selected>โปรดเลือกสถานที่</option>
                            <?php
                                foreach($locations as $index => $location){
                            ?>
                                   <option value="<?php echo $location->Ward_code; ?>"
                                        <?php
                                            if (!empty($person->Ward_code)) {
                                                if($person->Ward_code == $location->Ward_code){
                                                    echo " selected ";
                                                }
                                            }
                                        ?>
                                        ><?php 

                                            echo $location->ward_name; 
                                        
                                        ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
              </form>
            </div>  
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->