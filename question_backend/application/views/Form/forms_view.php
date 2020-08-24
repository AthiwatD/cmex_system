<div class="card">
    <div class="card-header">
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
        <a href="addForm"><button type="button" class="btn btn-success">เพิ่ม</button></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="table_data" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ชื่อฟอร์ม</th>
                    <th width="50px">View</th>
                    <th width="50px">Edit</th>
                    <th width="50px">Deleted</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($forms as $form){
                        echo "<tr>";
                        echo "<td><a href='form/" . $form->form_id . "'>" . $form->form_name . "</a></td>";
                        echo "<td style='text-align: center;'><a href='form/" . $form->form_id . "'><img src='" . base_url() . "../common/assets/images/document_view.png' width='32px'></a></td>";
                        echo "<td style='text-align: center;'><a href='updateForm/" . $form->form_id . "'><img src='" . base_url() . "../common/assets/images/document_edit.png' width='32px'></a></td>";
                        echo "<td style='text-align: center;'><a href='deleteFormDo/" . $form->form_id . "' onclick='confirm(\"คุณต้องการ ลบ?\")'><img src='" . base_url() . "../common/assets/images/document_delete.png' width='32px'></a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    <!-- /.card-body -->
</div>