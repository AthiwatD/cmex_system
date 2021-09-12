<div class="card">
    <div class="card-header">
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
        <a href="<?php echo base_url(); ?>Category/addCategory"><button type="button" class="btn btn-success">เพิ่ม</button></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped my_table_data">
            <thead>
                <tr>
                    <th>ชื่อฟอร์ม</th>
                    <th>ลำดับ</th>
                    <th>ชื่อ Category</th>
                    <th >การดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($categories as $category){
                        echo "<tr>";
                        echo "<td>" . $category->form_name . "</td>";
                        echo "<td>" . $category->category_number . "</td>";
                        echo "<td>" . $category->category_name . "</td>";
                        echo "<td width='250'>";
                        echo "<a href='" . base_url() . "Category/Category/" . $category->category_id . "' class='btn btn-primary btn-sm'><i class='fas fa-folder'></i>View</a> ";
                        echo "<a href='" . base_url() . "Category/updateCategory/" . $category->category_id . "' class='btn btn-warning btn-sm'><i class='fas fa-pencil-alt'></i>Edit</a> ";
                        echo "<a href='" . base_url() . "Category/deleteCategoryDo/" . $category->category_id . "' class='btn btn-danger btn-sm' onclick='return confirm(\"คุณต้องการ ลบ?\")'><i class='fas fa-trash'></i>Delete</a> </td>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    <!-- /.card-body -->
</div>