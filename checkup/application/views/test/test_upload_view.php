<div class="demo demo-noninputable" id="my_div">
    I'm a div, using `$('.demo-noninputable').pastableNonInputable()`.
</div>
<textarea class="demo demo-textarea" id="my_text">
    I'm a textarea, using `$('.demo-textarea').pastableTextarea()`.
</textarea>

<form id="base64_file_form" method="POST" action="<?php echo base_url(); ?>Record/testUploadDo">
    <button type="button" class="btn btn-success" onclick="upload_file_with_ajax()">Save</button>
    <button type="submit" class="btn btn-success" >Upload</button>
    <div class="active demo demo-contenteditable border border-info" id="my_data"
        style="height: 300px;" contenteditable>
        <div id="div_images">

        </div>
    </div>
    
</form>
