<script>
    <?php 
        if($method == "update"){
    ?>
            load_item();
    <?php
        }
    ?>
    

    function new_item(){
            var div_form_detail_item_list = $("#div_form_detail_item_list");
            var node = document.createElement("div");                 
            var txt_form_detail_item = document.createElement("input"); 
            var btn_item_delete = document.createElement("img"); 

        
            $(node).attr({
                "class" : "div_item combo",
                "name" : "div_item"
            });


            
            $(txt_form_detail_item).attr({
                "name" : "form_detail_item[]",
                "type" : "text",
                "class" : "form-control",
            });

            
            $(btn_item_delete).attr({
                "class" : "btn_item_delete trigger",
                "src" : "<?php echo base_url(); ?>../common/assets/images/close.png",
                "onclick" : "del_item(this.parentElement)",
            });
            $(node).append($(txt_form_detail_item));
            $(node).append($(btn_item_delete));
            $(div_form_detail_item_list).append($(node));

    }

    function del_item(node){
        if(confirm("คุณต้องการ ลบ?")){
            node.remove();
        }
    }

    function load_item(){
        var div_form_detail_item_list = $("#div_form_detail_item_list");
        var item = "<?php echo $form_detail->form_detail_items; ?>";
        var items = item.split("#&#");
        items.forEach(function(item, index){
            var node = document.createElement("div");                 
            var txt_form_detail_item = document.createElement("input"); 
            var btn_item_delete = document.createElement("img"); 
            $(node).attr({
                "class" : "div_item combo",
                "name" : "div_item"
            });

            $(txt_form_detail_item).attr({
                "name" : "form_detail_item[]",
                "type" : "text",
                "class" : "form-control",
                "value" : item,
            });

            $(btn_item_delete).attr({
                "class" : "btn_item_delete trigger",
                "src" : "<?php echo base_url(); ?>../common/assets/images/close.png",
                "onclick" : "del_item(this.parentElement)",
            });
            $(node).append($(txt_form_detail_item));
            $(node).append($(btn_item_delete));
            $(div_form_detail_item_list).append($(node));
        });
    }
</script>