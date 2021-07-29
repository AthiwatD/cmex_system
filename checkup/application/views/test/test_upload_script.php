<script>


    $('#my_div').pastableNonInputable();

    $('#my_text').pastableTextarea();

    $('#my_data').pastableContenteditable();

    $('html').on('pasteImage', function (event, data){
        add_img(data);

    }).on('pasteImageError', function(ev, data){
        alert('Oops: ' + data.message);
        if(data.url){
            alert('But we got its url anyway:' + data.url)
        }
    }).on('pasteText', function (ev, data){
        console.log("text: " + data.text);
    });

    function add_img(data){
        // console.log(data.dataURL);
        var div_fields = $("#div_images");
        var node = document.createElement("div");                 // Create a <li> node
        var img_node = document.createElement("img"); 
        var file_node = document.createElement("input"); 
        var btn_del_node = document.createElement("img"); 
        
        $(node).attr({
                    "class" : "form-row div-input-node",
        });

        $(img_node).attr({
                    "class" : "form-control input-node-with-delete",
                    "src" : data.dataURL,
                    "style" : "width : 40%; height: 40%;",
        });

        $(file_node).attr({
                    "type" : "hidden",
                    "name" : "base_64_image[]",
                    "value" : data.dataURL,
        });

        $(btn_del_node).attr({
                    "class" : "btn-node-delete",
                    "style" : "display:block",
                    "src" : "<?php echo base_url(); ?>../common/assets/images/close.png",
                    "onclick" : "del_node_value(this)",
                    "style" : "width : 32px; height: 32px;",
        });
        $(node).append($(img_node));
        $(node).append($(file_node));
        $(node).append($(btn_del_node));
        $(div_fields).append($(node));
    }

    function del_node_value(btn_del_node){
        btn_del_node.parentElement.remove();
    }

    function upload_file_with_ajax(){

        var eles = document.getElementsByName("base_64_image[]");
        var base_64_image = [];

        eles.forEach(function(item, index){
            // alert(item.getAttribute("src"));
            base_64_image.push(item.getAttribute("value"));
        });
            
        // var serializedData = base_64_images.serialize();

        // var src_json = JSON.stringify(base_64_images);
        // var src_json = base_64_images.serialize();

        $.ajax('<?php echo base_url(); ?>Record/serviceTestUpload' , {
            type: 'POST',
            data: {base_64_image: base_64_image},
            error: function() {
                console.log("error");
                alert("error");
            },
            success: function(res) {
                console.log("ok");
                alert("success: " + res);
            }
        });
    }
</script>