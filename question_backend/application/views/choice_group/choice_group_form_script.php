<script>
    var choice_count = 0;
    <?php 
        if($method == "update"){
    ?>
            load_choice();
    <?php
        }
    ?>
    
    
    function new_choice(){
        choice_count++;
        var div_choice_list = $("#div_choice_list");
        var node = document.createElement("div");       
        var lbl_choice_number = document.createElement("label"); 
        var txt_choice_number = document.createElement("input"); 
        var lbl_choice_name = document.createElement("label"); 
        var txt_choice_name = document.createElement("input");     
        var lbl_choice_point = document.createElement("label");       
        var txt_choice_point = document.createElement("input"); 
        var btn_choice_delete = document.createElement("img"); 

    
        $(node).attr({
            "class" : "div_choice combo",
            "name" : "div_item"
        });


        $(lbl_choice_number).attr({
                    "class" : "form-control-label",
                    
        });
        $(lbl_choice_number).html("ลำดับ");
        $(txt_choice_number).attr({
            "name" : "choice_number[]",
            "type" : "number",
            "class" : "form-control",
            "value" : choice_count,
            "required" : "required",
        });

        
        $(lbl_choice_name).attr({
            "class" : "form-control-label",
                    
        });
        $(lbl_choice_name).html("คำตอบ");
        $(txt_choice_name).attr({
            "name" : "choice_name[]",
            "type" : "text",
            "class" : "form-control",
            "required" : "required",
        });

        $(lbl_choice_name).attr({
            "class" : "form-control-label",
                    
        });
        $(lbl_choice_point).html("คะแนน");
        $(txt_choice_point).attr({
            "name" : "choice_point[]",
            "type" : "text",
            "class" : "form-control",
            "required" : "required",
        });

        $(btn_choice_delete).attr({
            "class" : "btn_choice_delete",
            "src" : "<?php echo base_url(); ?>../common/assets/images/close.png",
            "onclick" : `del_choice(this.parentElement)`,
        });

        $(node).append($(lbl_choice_number));
        $(node).append($(txt_choice_number));

        $(node).append($(lbl_choice_name));
        $(node).append($(txt_choice_name));

        $(node).append($(lbl_choice_point));
        $(node).append($(txt_choice_point));

        $(node).append($(btn_choice_delete));
        $(div_choice_list).append($(node));
        
    }

    function del_choice(node){
        if(confirm("คุณต้องการ ลบ?")){
            node.remove();
        }
        
    }

    function load_choice(){
        var div_choice_list = $("#div_choice_list");
        
        var item = `<?php echo json_encode($choice_group); ?>`;
        var items = JSON.parse(item);
        items.forEach(function(item, index){

                choice_count++;
                var node = document.createElement("div");       
                var lbl_choice_number = document.createElement("label"); 
                var txt_choice_id = document.createElement("input");
                var txt_choice_number = document.createElement("input"); 
                var lbl_choice_name = document.createElement("label"); 
                var txt_choice_name = document.createElement("input");     
                var lbl_choice_point = document.createElement("label");       
                var txt_choice_point = document.createElement("input"); 

            
                $(node).attr({
                    "class" : "div_choice combo",
                    "name" : "div_item"
                });

                $(txt_choice_id).attr({
                    "name" : "choice_id[]",
                    "type" : "hidden",
                    "value" : items[index].choice_id,
                    "required" : "required",
                });

                $(lbl_choice_number).html("ลำดับ");
                $(txt_choice_number).attr({
                    "name" : "choice_number[]",
                    "type" : "number",
                    "class" : "form-control",
                    "value" :  items[index].choice_number,
                    "required" : "required",
                });

                
                $(lbl_choice_name).attr({
                    "class" : "form-control-label",
                            
                });
                $(lbl_choice_name).html("คำตอบ");
                $(txt_choice_name).attr({
                    "name" : "choice_name[]",
                    "type" : "text",
                    "class" : "form-control",
                    "value" : items[index].choice_name,
                    "required" : "required",
                });

                $(lbl_choice_name).attr({
                    "class" : "form-control-label",
                            
                });
                $(lbl_choice_point).html("คะแนน");
                $(txt_choice_point).attr({
                    "name" : "choice_point[]",
                    "type" : "text",
                    "class" : "form-control",
                    "value" : items[index].choice_point,
                    "required" : "required",
                });

                $(node).append($(txt_choice_id));
                $(node).append($(lbl_choice_number));
                $(node).append($(txt_choice_number));

                $(node).append($(lbl_choice_name));
                $(node).append($(txt_choice_name));

                $(node).append($(lbl_choice_point));
                $(node).append($(txt_choice_point));

                $(div_choice_list).append($(node));
        
        });
        

    }
</script>