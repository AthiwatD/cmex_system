<!-- [manage bookonline list] -->
<?php
    $count=1;
    // echo "system : ".$system;
    // echo "method : ".$method;
?>
<div class="card">
    <div class="card-header" style="text-align: right;">
        <?php if($system=="backend"){ ?>
            <a href='<?php echo base_url()."Bookonline/addBookonline/".$system; ?>' /><button type="button" class="btn btn-success"><i class="nav-icon fas fa-plus"></i> เพิ่ม</button></a>
        <?php } ?>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped my_table_data table-hover">
            <thead>
                <tr>
                    <th style="min-width:40px;">ลำดับ</th>
                    <th style="min-width:120px;"> สถานะ</th>
                    <th style="">ชื่อประกาศ</th>
                    <th style="">หน่วยงาน</th>
                    <th style="min-width:85px;">หมวด</th>
                    <th style="min-width:110px;">วันที่ประกาศ</th>
                    <th style="min-width:50px;">ผู้อ่าน</th>
                    <!-- <th style="">ประกาศโดย</th> -->
                    <?php
                        if($system=="frontend"){ ?>
                            <th style="min-width:100px;">รายละเอียด</th><?php
                         }else{ ?>
                            <th style="min-width:80px;">จัดการ</th> <?php
                         } 
                    ?>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    //[Athiwat][19/04/2564][add session status]
                    $success=$this->session->userdata('success');
                    $failure=$this->session->userdata('failure');
                    if($success!=""){ ?> <div class="alert alert-success" role="alert" style="text-align:center;"><?php echo $success; ?></div><?php }
                    if($failure!=""){ ?> <div class="alert alert-danger" role="alert" style="text-align:center;"><?php echo $failure; ?></div><?php }

                    // ------------------------------ [check variable or status system] ------------------------------
                    // echo "baseurl : ".base_url();
                    // echo "session : ".$session_username;
                    // echo "method : ".$method."<br>";
                    // echo "system : ".$system;
                    // echo "system : ".$sys;
                    // echo date("Y-m-d H:i:s");
                    // echo date("Y-m-d")-"2021-04-20";
                    // print_r($Bookonlines);
                    // print_r($Types);
                    // print_r($locations);

                    // ------------------------------ [Start check substr upload file to web server] ------------------------------
                    /*$var0="แต่งตั้งคณะกรรมการพัฒนาคุณภาพ_CMEx_(ฉบับแก้ไขล่าสุด).pdf";
                    $var1="ประกาศรายชื่อแต่งตั้งบุคคลให้ดำรงตำแหน่งผู้ช่วยหัวหน้าศูนย์การแพทย์แผนไทยและการแพทย์ผสมผสาน.pdf";
                    $var2="ยกเลิกและแต่งตั้งหัวหน้าสำนักงานบริหาร เลขานุการ หัวหน้าฝ่าย หัวหน้างาน หัวหน้าหน่วยงาน และ หัวหน้าหอผู้ป่วย.pdf";

                    $max0=strlen($var0);
                    $max1=strlen($var1);
                    $max2=strlen($var2);

                    $type0=strlen($var0)-4;
                    $type1=strlen($var1)-4;
                    $type2=strlen($var2)-4;

                    $filetype0=substr($var0,$type0,$max0); $name0=substr($var0,SUBSTR_MINIMUM,$type0);
                    $filetype1=substr($var1,$type1,$max1); $name1=substr($var1,SUBSTR_MINIMUM,$type1);
                    $filetype2=substr($var2,$type2,$max2); $name2=substr($var2,SUBSTR_MINIMUM,$type2);
                    

                    if(strlen($name0) > 150) $filename0=mb_substr(substr($name0,SUBSTR_MINIMUM,SUBSTR_MAXIMUM),SUBSTR_MINIMUM,mb_strlen(substr($name0,SUBSTR_MINIMUM,SUBSTR_MAXIMUM))-1,CHA_UTF8 );
                    else $filename0=mb_substr(substr($name0,SUBSTR_MINIMUM,SUBSTR_MAXIMUM),SUBSTR_MINIMUM,mb_strlen(substr($name0,SUBSTR_MINIMUM,SUBSTR_MAXIMUM)),CHA_UTF8 );

                    if(strlen($name1) > 150) $filename1=mb_substr(substr($name1,SUBSTR_MINIMUM,SUBSTR_MAXIMUM),SUBSTR_MINIMUM,mb_strlen(substr($name1,SUBSTR_MINIMUM,SUBSTR_MAXIMUM))-1,CHA_UTF8 );
                    else $filename1=mb_substr(substr($name1,SUBSTR_MINIMUM,SUBSTR_MAXIMUM),SUBSTR_MINIMUM,mb_strlen(substr($name1,SUBSTR_MINIMUM,SUBSTR_MAXIMUM)),CHA_UTF8 );
                    
                    if(strlen($name2) > 150) $filename2=mb_substr(substr($name2,SUBSTR_MINIMUM,SUBSTR_MAXIMUM),SUBSTR_MINIMUM,mb_strlen(substr($name2,SUBSTR_MINIMUM,SUBSTR_MAXIMUM))-1,CHA_UTF8 );
                    else $filename2=mb_substr(substr($name2,SUBSTR_MINIMUM,SUBSTR_MAXIMUM),SUBSTR_MINIMUM,mb_strlen(substr($name2,SUBSTR_MINIMUM,SUBSTR_MAXIMUM)),CHA_UTF8 );

                    $filename0=$filename0."".$filetype0;
                    $filename1=$filename1."".$filetype1;
                    $filename2=$filename2."".$filetype2;

                    echo "max : ".$max0; echo "</br>";
                    echo "type : ".$type0; echo "</br>";
                    echo "file type : ".$filetype0; echo "</br>";
                    echo "name : ".$name0; echo "</br>";
                    echo "fname : ".$filename0; echo "</br>";
                    echo "</br>";

                    echo "max : ".$max1; echo "</br>";
                    echo "type : ".$type1; echo "</br>";
                    echo "file type : ".$filetype1; echo "</br>";
                    echo "name : ".$name1; echo "</br>";
                    echo "fname : ".$filename1; echo "</br>";
                    echo "</br>";

                    echo "max : ".$max2; echo "</br>";
                    echo "type : ".$type2; echo "</br>";
                    echo "file type : ".$filetype2; echo "</br>";
                    echo "name : ".$name2; echo "</br>";
                    echo "fname : ".$filename2; echo "</br>";
                    echo "</br>"; */
                    // ------------------------------ [finish check substr upload file to web server] ------------------------------

                    $count_page=1;
                    $path_img=base_url()."assets/img/news.gif"; //[Athiwat][26/06/2564][add new status system]
                    foreach($Bookonlines as $bookonline){
                        // print_r($Bookonline);
                        $create_date=explode(" ",$bookonline->create_datetime);
                        $seconds_create_date=(time()-strtotime($bookonline->create_datetime)); //[Athiwat][29/04/2564][add check new = less than 7 days.]
                        // ---------------------------------------------------- [Frontend] ----------------------------------------------------
                        if($system=="frontend"){   //[Athiwat][delete date("Y-m-d H:i:s")<$bookonline->end_date && ]
                            echo "<tr>";
                                echo "<td style='text-align:center;'>" .$count_page. "</td>";
                                
                                //[Athiwat][26/06/2564][add urgent status system]
                                if($bookonline->publish_status=="ด่วน" || $bookonline->publish_status=="ด่วนมาก" || $bookonline->publish_status=="ด่วนที่สุด")
                                    echo "<td style='text-align:left; color:red;'><div class='row'>";
                                else 
                                    echo "<td style='text-align:left;'><div class='row'>";
                                    
                                    //[Athiwat][26/06/2564][add new status system]
                                    if($seconds_create_date <=604800){ ?>
                                        <img src="<?php echo $path_img; ?>" style="margin:-3px 0px 0px 3px !important;" height="25px">&nbsp; <?php
                                    }
                                    //[Athiwat][26/06/2564][add pin status system]
                                    if($bookonline->publish_pin_status==1){  $path=base_url()."assets/img/flag.gif"; ?>
                                        <img src='<?php echo $path; ?>' alt="ปักหมุดประกาศนี้" style="margin:-3px 5px 0px 3px !important;" height="25px"; />
                                    <?php }
                                    if(!empty($bookonline->publish_status)){
                                        switch($bookonline->publish_status){
                                            case "ด่วน" : echo "<p class='nmb fontb'>".$bookonline->publish_status."</p>"; break;
                                            case "ด่วนมาก" : echo "<p class='nmb fontb'>".$bookonline->publish_status."</p>"; break;
                                            case "ด่วนที่สุด" : echo "<p class='nmb fontb'>".$bookonline->publish_status."</p>"; break;
                                            default : echo "<p class='nmb fontb'>".$bookonline->publish_status."</p>"; break;
                                        }
                                    }

                                    echo "</div></td>";
                                echo "<td style='text-align:left;'>".$bookonline->publish_name."</td>";
                                
                                foreach($locations as $location){
                                    if($location->ward_code == $bookonline->ward_code) echo "<td style='text-align:left;'>".$location->ward_name1."</td>";
                                }
                                
                                foreach($Types as $type){
                                    if($bookonline->publish_type_id==$type->publish_type_id) echo "<td style='text-align:left;'>" .$type->publish_type_name. "</td>";
                                }

                                ?>
                                <td style='text-align:center;'>
                                    <div class="row"> <?php  echo convert_std_format_thai_datetime_two($bookonline->publish_datetime); ?> </div>
                                </td> <?php
                                echo "<td style='text-align:right;'>" .$bookonline->viewed. "</td>"; 
                                echo "<td style='text-align:center;'>";
                                    
                                    //[Athiwat][25/06/2564][add system viewed]
                                    if($this->BookonlineModel->checkBookonlineViewed($bookonline->publish_hd_id,$session_username)){
                                        $BookonlineViewed=$this->BookonlineModel->getBookonlineViewed($bookonline->publish_hd_id,$session_username);
                                        $tooltip_txt=TT_READED." ".convert_std_format_thai_datetime_two($BookonlineViewed->viewed_datetime);
                                        echo '<div class="tooltip_m">';
                                        echo "<a href='" . base_url() . "Bookonline/bookonline/" . $bookonline->publish_hd_id ."/".$system."/".$session_username."' class='btn btn-dark btn-sm br10'><i class='fa fa-eye'></i></a>";
                                        echo '<span class="tooltiptext">'.$tooltip_txt.'</span>';
                                        echo '</div>';
                                    }else{
                                        echo '<div class="tooltip_nr">';
                                        echo "<a href='" . base_url() . "Bookonline/bookonline/" . $bookonline->publish_hd_id ."/".$system."/".$session_username."' class='btn btn-info btn-sm notread'><i class='fa fa-search'></i></a>";
                                        echo '<span class="tooltiptext">'.TT_NOTREAD.'</span>';
                                        echo '</div>';
                                    }
                                    
                                echo "</td>";
                            echo "</tr>";
                            $count_page+=1;
                        // ---------------------------------------------------- [Backend] ----------------------------------------------------
                        }else if($system=="backend"){
                            echo "<tr>";
                                echo "<td style='text-align:center;'>" .$count_page. "</td>";

                                if($bookonline->publish_status=="ด่วน" || $bookonline->publish_status=="ด่วนมาก" || $bookonline->publish_status=="ด่วนที่สุด")
                                    echo "<td style='text-align:left; color:red;'><div class='row'>";
                                else echo "<td style='text-align:left;'><div class='row'>";
                                    
                                    //[Athiwat][26/06/2564][add new status system]
                                    if($seconds_create_date <=604800){ ?>
                                        <img src="<?php echo $path_img; ?>" style="margin:-3px 0px 0px 3px !important;" height="25px">&nbsp; <?php
                                    }
                                    if($bookonline->publish_pin_status==1){  $path=base_url()."assets/img/flag.gif"; ?>
                                        <img src='<?php echo $path; ?>' alt="ปักหมุดประกาศนี้" style="margin:-3px 5px 0px 3px !important;" height="25px"; />
                                    <?php }
                                    if(!empty($bookonline->publish_status)){
                                        switch($bookonline->publish_status){
                                           case "ด่วน" : echo "<p class='nmb fontb'>".$bookonline->publish_status."</p>"; break;
                                            case "ด่วนมาก" : echo "<p class='nmb fontb'>".$bookonline->publish_status."</p>"; break;
                                            case "ด่วนที่สุด" : echo "<p class='nmb fontb'>".$bookonline->publish_status."</p>"; break;
                                            default : echo "<p class='nmb fontb'>".$bookonline->publish_status."</p>"; break;
                                        } 
                                    }

                                    echo "</div></td>";
                                echo "<td style='text-align:left;'>".$bookonline->publish_name."</td>";
                                
                                foreach($locations as $location){
                                    if($location->ward_code == $bookonline->ward_code) echo "<td style='text-align:left;'>".$location->ward_name1."</td>";
                                }
                                
                                foreach($Types as $type){
                                    if($bookonline->publish_type_id==$type->publish_type_id) echo "<td style='text-align:left;'>" .$type->publish_type_name. "</td>";
                                }

                                ?>
                                <td style='text-align:center;'>
                                    <div class="row"> <?php  echo convert_std_format_thai_datetime_two($bookonline->publish_datetime); ?> </div>
                                </td> <?php
                                echo "<td style='text-align:right;'>" .$bookonline->viewed. "</td>";
                                echo "<td style='text-align:center;'>";
                                    echo "<a href='" . base_url() . "Bookonline/bookonline/" . $bookonline->publish_hd_id ."/".$system."/".$session_username."' class='btn btn-info btn-sm'><i class='fa fa-search'></i></a>";
                                    if($system=="backend"){
                                        echo "<a href='" . base_url() . "Bookonline/updateBookonline/" . $bookonline->publish_hd_id ."/".$system."/".$session_username."' class='btn btn-warning btn-sm'><i class='fa fa-cogs'></i></a>";
                                        $url_del=base_url()."Bookonline/deletebookonlineProcess/";
                                        echo "<button type='button' class='btn btn-danger btn-sm' onclick=\"del_publish('$url_del','$bookonline->publish_hd_id','$session_username')\" ><i class='fas fa-minus'></i></button>";
                                    }
                                echo "</td>";
                            echo "</tr>";
                            $count_page+=1;
                        }
                    }

                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- [Athiwat][20/04/2564][add clear session status] -->
<?php $this->session->set_flashdata('success',''); $this->session->set_flashdata('failure',''); ?>
