<script>


    // $('#my_div').pastableNonInputable();

    // $('#my_text').pastableTextarea();

    $('#div_lab_images').pastableContenteditable();
    $("#div_lab_images").on('pasteImage', function (event, data){
        add_img("div_lab_images", data);

    }).on('pasteImageError', function(ev, data){
        alert('Oops: ' + data.message);
        if(data.url){
            alert('But we got its url anyway:' + data.url)
        }
    }).on('pasteText', function (ev, data){
        console.log("text: " + data.text);
    });

    $('#div_xray_images').pastableContenteditable();
    $("#div_xray_images").on('pasteImage', function (event, data){
        add_img("div_xray_images", data);

    }).on('pasteImageError', function(ev, data){
        alert('Oops: ' + data.message);
        if(data.url){
            alert('But we got its url anyway:' + data.url)
        }
    }).on('pasteText', function (ev, data){
        console.log("text: " + data.text);
    });

    $('#div_ekg_images').pastableContenteditable();
    $("#div_ekg_images").on('pasteImage', function (event, data){
        add_img("div_ekg_images", data);

    }).on('pasteImageError', function(ev, data){
        alert('Oops: ' + data.message);
        if(data.url){
            alert('But we got its url anyway:' + data.url)
        }
    }).on('pasteText', function (ev, data){
        console.log("text: " + data.text);
    });

    function add_img(div_id, data){
        // console.log(div_id);
        var div_fields = $("#" + div_id);
        // alert(div_id);
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
                    "style" : "width: 90%; height: 250px; padding: 5px; margin: 5px;",
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

    function upload_file_with_ajax(checkup_id, tab_id){
        var eles = document.getElementById("div_" + tab_id + "_images").getElementsByTagName("input");
        var base_64_image = [];

        // eles.forEach(function(item, index){
        //     // alert(item.getAttribute("src"));
        //     base_64_image.push(item.getAttribute("value"));
        // });
        
        for (var i = 0; i < eles.length; i++) {
            base_64_image.push(eles[i].getAttribute("value"));
        }

        $.ajax('<?php echo base_url(); ?>Record/serviceUploadImageFiles' , {
            type: 'POST',
            data: {
                    base_64_image: base_64_image,
                    checkup_id: checkup_id,
                    tab_id: tab_id
                },
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

    function button_disable(ele){
        ele.disabled = true;
        setTimeout(function(){ele.disabled = false;},5000);
    }
</script>