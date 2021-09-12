<script>
    <?php 
        if($method == "update"){
    ?>
            load_item();
    <?php
        }
    ?>
    

    function new_item(){
            var div_score_criterias = $("#div_score_criterias");
            var node = document.createElement("div");     
            var txt_criteria = document.createElement("input"); 
            var txt_min_score = document.createElement("input");         
            var txt_max_score = document.createElement("input");       
            var txt_meaning = document.createElement("input");
            var txt_color_code = document.createElement("input");
            var btn_item_delete = document.createElement("img"); 

        
            $(node).attr({
                "class" : "div_item combo col-12 border border-dark row",
                "name" : "div_item",
                "width" : "100%",
            });


            
            $(txt_criteria).attr({
                "name" : "criteria[]",
                "type" : "text",
                "class" : "form-control",
                "style" : "margin: 5px;",
                "placeholder" : "เกณฑ์",
            });

            $(txt_min_score).attr({
                "name" : "min_score[]",
                "type" : "text",
                "class" : "form-control",
                "style" : "margin: 5px;",
                "placeholder" : "คะแนนน้อยสุด",
            });

            $(txt_max_score).attr({
                "name" : "max_score[]",
                "type" : "text",
                "class" : "form-control",
                "style" : "margin: 5px;",
                "placeholder" : "ตะแนนมากสุด",
            });

            $(txt_meaning).attr({
                "name" : "meaning[]",
                "type" : "text",
                "class" : "form-control",
                "style" : "margin: 5px;",
                "placeholder" : "ความหมาย",
            });

            $(txt_color_code).attr({
                "name" : "color_code[]",
                "type" : "text",
                "class" : "form-control",
                "style" : "margin: 5px;",
                "placeholder" : "รหัสสี 16 bit(มี #) หรือ RGBA",
            });

            $(btn_item_delete).attr({
                "class" : "btn_item_delete trigger",
                "src" : "<?php echo base_url(); ?>../common/assets/images/close.png",
                "onclick" : "del_item(this.parentElement)",
                "style" : "top: -10px; right:-10px",
            });
            $(node).append($(txt_criteria));
            $(node).append($(txt_min_score));
            $(node).append($(txt_max_score));
            $(node).append($(txt_meaning));
            $(node).append($(txt_color_code));
            $(node).append($(btn_item_delete));
            $(div_score_criterias).append($(node));

    }

    function del_item(node){
        if(confirm("คุณต้องการ ลบ?")){
            node.remove();
        }
    }


    function load_item(){
        var div_score_criterias = $("#div_score_criterias");
        var item = "<?php echo $scoreCriteria->criterias; ?>";
        var criterias = item.split("(.)");

        item = "<?php echo $scoreCriteria->min_scores; ?>";
        var min_scores = item.split("(.)");

        item = "<?php echo $scoreCriteria->max_scores; ?>";
        var max_scores = item.split("(.)");

        item = "<?php echo $scoreCriteria->meanings; ?>";
        var meanings = item.split("(.)");

        item = "<?php echo $scoreCriteria->color_codes; ?>";
        var color_codes = item.split("(.)");
        
        criterias.forEach(function(item, index){
            var node = document.createElement("div");     
            var txt_criteria = document.createElement("input"); 
            var txt_min_score = document.createElement("input");         
            var txt_max_score = document.createElement("input");       
            var txt_meaning = document.createElement("input");
            var txt_color_code = document.createElement("input");
            var btn_item_delete = document.createElement("img"); 

        
            $(node).attr({
                "class" : "div_item combo col-12 border border-dark row",
                "name" : "div_item",
                "width" : "100%",
            });

            
            $(txt_criteria).attr({
                "name" : "criteria[]",
                "type" : "text",
                "class" : "form-control",
                "style" : "margin: 5px;",
                "placeholder" : "เกณฑ์",
                "value" : criterias[index],
            });

            $(txt_min_score).attr({
                "name" : "min_score[]",
                "type" : "text",
                "class" : "form-control",
                "style" : "margin: 5px;",
                "placeholder" : "คะแนนน้อยสุด",
                "value" : min_scores[index],
            });

            $(txt_max_score).attr({
                "name" : "max_score[]",
                "type" : "text",
                "class" : "form-control",
                "style" : "margin: 5px;",
                "placeholder" : "ตะแนนมากสุด",
                "value" : max_scores[index],
            });

            $(txt_meaning).attr({
                "name" : "meaning[]",
                "type" : "text",
                "class" : "form-control",
                "style" : "margin: 5px;",
                "placeholder" : "ความหมาย",
                "value" : meanings[index],
            });

            $(txt_color_code).attr({
                "name" : "color_code[]",
                "type" : "text",
                "class" : "form-control",
                "style" : "margin: 5px;",
                "placeholder" : "รหัสสี 16 bit(มี #) หรือ RGBA",
                "value" : color_codes[index],
            });

            $(btn_item_delete).attr({
                "class" : "btn_item_delete trigger",
                "src" : "<?php echo base_url(); ?>../common/assets/images/close.png",
                "onclick" : "del_item(this.parentElement)",
                "style" : "top: -10px; right:-10px",
            });
            $(node).append($(txt_criteria));
            $(node).append($(txt_min_score));
            $(node).append($(txt_max_score));
            $(node).append($(txt_meaning));
            $(node).append($(txt_color_code));
            $(node).append($(btn_item_delete));
            $(div_score_criterias).append($(node));
        });
    }
    
</script>