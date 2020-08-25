<div class="card">
    <div class="card-header">
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
        <a href="<?php echo base_url(); ?>FormDetail/addFormDetail"><button type="button" class="btn btn-success">เพิ่ม</button></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped my_table_data">
            <thead>
                <tr>
                    <th>ชื่อฟอร์ม</th>
                    <th>ข้อ</th>
                    <th>คำถาม</th>
                    <th>คำตอบ</th>
                    <th >การดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($form_details as $form_detail){
                        echo "<tr>";
                        echo "<td>" . $form_detail->form_name . "</td>";
                        echo "<td>" . $form_detail->form_detail_number . "</td>";
                        echo "<td>" . $form_detail->form_detail_name . "</td>";
                        $form_detail_items = explode("#&#", $form_detail->form_detail_items);
                        echo "<td><ul>";
                        foreach($form_detail_items as $form_detail_item){
                            if($form_detail_item == ""){
                                echo "<li>โปรดระบุ...</li>";
                            }else{
                                echo "<li>" . $form_detail_item . "</li>";
                            }
                        }
                        echo "</ul></td>";
                        echo "<td width='250'>";
                        echo "<a href='" . base_url() . "FormDetail/formDetail/" . $form_detail->form_detail_id . "' class='btn btn-primary btn-sm'><i class='fas fa-folder'></i>View</a> ";
                        echo "<a href='" . base_url() . "FormDetail/updateFormDetail/" . $form_detail->form_detail_id . "' class='btn btn-warning btn-sm'><i class='fas fa-pencil-alt'></i>Edit</a> ";
                        echo "<a href='" . base_url() . "FormDetail/deleteFormDetailDo/" . $form_detail->form_detail_id . "' class='btn btn-danger btn-sm' onclick='confirm(\"คุณต้องการ ลบ?\")'><i class='fas fa-trash'></i>Delete</a> </td>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    <!-- /.card-body -->
</div>