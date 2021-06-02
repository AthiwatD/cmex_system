<div class="card">
    <div class="card-header">
    <a href="<?php echo base_url(); ?>Checkup/addCheckup"><button type="button" class="btn btn-success">เพิ่ม</button></a>
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped my_table_data_desc">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>HN</th>
                    <th>ชื่อ-สกุล</th>
                    <th>เพศ</th>
					<th>อายุ</th>
					<th>แพคเกจ</th>
					<th>วันที่ตรวจ</th>
					<th>ศูนย์</th>
					<th>ดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                <?php 
					$count = 0;
                    foreach($checkups as $checkup){
						$count++;
                        echo "<tr>";
						echo "<td>" . $count . "</td>";
						echo "<td>" . $checkup->hn . "</td>";
                        echo "<td>" . $checkup->title_name . " " . $checkup->first_name . " " . $checkup->last_name . "</td>";
						if($checkup->sex == "ช" ){
							$sex = "ชาย";
						}
						elseif ($checkup->sex == "ญ" ){
							$sex = "หญิง";
						}
						echo "<td>" . $checkup->sex . "</td>";
						echo "<td>" . $checkup->age . "</td>";
						echo "<td>" . $checkup->package_name . "</td>";
						echo "<td>" . $checkup->checkup_date . "</td>";
						echo "<td>" . $checkup->location_abbre . "</td>";
                        echo "<td width='250'>";
                        // echo "<a href='" . base_url() . "Checkup/checkup/" . $checkup->checkup_id . "' class='btn btn-primary btn-sm'><i class='fas fa-folder'></i> ดู</a> ";
                        // echo "<a href='" . base_url() . "Checkup/checkupSendToPersons/" . $checkup->checkup_id . "' class='btn btn-info btn-sm' target='_blank'><i class='fas fa-folder'></i> เอกสาร</a> ";
						echo "<a href='" . base_url() . "Record/records/" . $checkup->checkup_id . "' class='btn btn-primary btn-sm'><i class='fas fa-folder'></i> ตรวจสุขภาพ</a> ";
                        echo "<a href='" . base_url() . "Checkup/updateCheckup/" . $checkup->checkup_id . "' class='btn btn-warning btn-sm'><i class='fas fa-pencil-alt'></i> แก้ไข</a> ";
                        echo "<a href='" . base_url() . "Checkup/deleteCheckupDo/" . $checkup->checkup_id . "' class='btn btn-danger btn-sm' onclick='return confirm(\"คุณต้องการ ลบ?\")'><i class='fas fa-trash'></i> ลบ</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    <!-- /.card-body -->
</div>
