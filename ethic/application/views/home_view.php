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
                    <th>ผู้ถูกประเมิณ</th>
                    <th>สถานะ</th>
                    <th>การดำเนินการ</th>
                    <!-- <th >สถานะ</th> -->
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($evaluates as $evaluate){
                        echo "<tr>";
                        echo "<td>" . $evaluate->evaluation_name . "</td>";
                        echo "<td>" . $evaluate->person_id . " " . $evaluate->person_fname . " " . $evaluate->person_lname .  "</td>";
                        
                        if(!empty($evaluate->status)){
                            echo "<td>ประเมิณแล้ว</td>";
                            echo "<td>&nbsp;</td>";
                        }else{
                            echo "<td>ยังไม่ได้ประเมิณ</td>";
                            echo "<td><a href='" . base_url() . "Home/form/" . $evaluate->evaluation_id . "/" . $this->session->username . "/" . $evaluate->person_id . "'><button class='btn btn-success'>ประเมิณ</button<</a></td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    <!-- /.card-body -->
</div>