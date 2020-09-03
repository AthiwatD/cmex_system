<div class="card">
    <div class="card-header">
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped my_table_data">
            <thead>
                <tr>
                    <th>ชื่อแบบประเมิน</th>
                    <th>เริ่ม</th>
                    <th>สิ้นสุด</th>
                    <th>โดย</th>
                    <!-- <th >สถานะ</th> -->
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($evaluates as $evaluate){
                        echo "<tr>";
                        echo "<td><a href='" . base_url() . "Main/" . $evaluate->evaluation_id . "'>" . $evaluate->evaluation_name . "</a></td>";
                        echo "<td>" . $evaluate->date_start . "</td>";
                        echo "<td>" . $evaluate->date_end . "</td>";
                        echo "<td>" . $evaluate->evaluation_by . "</td>";
                        // echo "<td>";
                        // if($evaluate->evaluate_time != "0000-00-00 00:00:00"){
                        //     echo "สำเร็จ";
                        // }
                        // else{
                        //     echo "ยังไม่ได้ทำ";
                        // }
                        // echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    <!-- /.card-body -->
</div>