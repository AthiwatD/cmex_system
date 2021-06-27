<a href="<?php echo base_url() . "Record/recordAddFiles/" . $checkup_id; ?>">
    <button type="button" class="form-control btn btn-success">เพิ่ม</button>
</a>
<div class="row" style="padding: 20px">
    <div class="form-group" style="width:30%; margin:3px">
        <div class="form-inline" >
            <h3>ผล Lab</h3>
        </div>
        <div id="div_lab_images" class="active border"  style="height: 250px;" contenteditable>
        </div>
    </div>

    <div class="form-group" style="width:30%; margin:3px">
        <div class="form-inline">
            <h3>ผล X-ray</h3>
        </div>
        <div id="div_xray_images" class="active border demo"  style="height: 250px;" contenteditable></div>
    </div>

    <div class="form-group" style="width:30%; margin:3px">
        <div class="form-inline">
            <h3>ผล EKG</h3>
        </div>
        <div id="div_ekg_images" class="active border demo"  style="height: 250px;" contenteditable></div>
    </div>
</div>