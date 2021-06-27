<script>
    // $( document ).ready(function() {
        load_files();
    // });

    function load_files(){
        var record_files = <?php echo json_encode($record_files); ?>;
        for(i=0;i<record_files.length;i++){
            var div_fields = $("#div_" + record_files[i]["tab_id"] + "_images");
            // alert(div_id);
            var node = document.createElement("div");                 // Create a <li> node
            var img_node = document.createElement("img"); 
            var file_id_node = document.createElement("input"); 
            var btn_del_node = document.createElement("img");

            $(node).attr({
                    "class" : "form-row div-input-node",
            });

            $(img_node).attr({
                        "class" : "form-control input-node-with-delete",
                        "src" : "<?php echo base_url();?>" + "uploads/" + record_files[i]["tab_id"] + "/" + record_files[i]["file_name"],
                        "style" : "width: 90%; height: 250px; padding: 5px; margin: 5px;",
            });

            $(file_id_node).attr({
                        "type" : "hidden",
                        "name" : "file_id[]",
                        "value" : record_files[i]["file_id"],
            });

            $(btn_del_node).attr({
                        "class" : "btn-node-delete",
                        "style" : "display:block",
                        "src" : "<?php echo base_url(); ?>../common/assets/images/close.png",
                        "onclick" : "del_file(this,'" + record_files[i]["file_id"] +"')",
                        "style" : "width : 32px; height: 32px;",
            });
            $(node).append($(img_node));
            $(node).append($(file_id_node));
            $(node).append($(btn_del_node));
            $(div_fields).append($(node));
            
        }
    }
    
    function del_file(btn_del_node, file_id){
        // alert(file_id);
        $.ajax('<?php echo base_url(); ?>Record/serviceDeleteFile' , {
            type: 'POST',
            data: {
                    file_id: file_id,
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

        btn_del_node.parentElement.remove();
    }
</script>