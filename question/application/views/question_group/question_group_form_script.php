<script>
    var method = "<?php echo $method; ?>";
    var forms = <?php echo json_encode($forms); ?>;
    var categories = <?php echo json_encode($categories); ?>;
    var choice_groups = <?php echo json_encode($choice_groups); ?>;
    if(method == "update"){
        var question_group = <?php echo json_encode($question_group); ?>;
    }
    var count_question_number = 0;
    show_categories();
    load_question();

    function show_categories(){
        var select_form_id = document.getElementById("select_form_id");
        var form_id = select_form_id.options[select_form_id.selectedIndex].value;    
        var select_category_id = document.getElementById("select_category_id");
        var txt = "";
        select_category_id.innerHTML = "";
        categories.forEach(function(item, index){

            if(categories[index].form_id == form_id){
                txt += `<option value="` + categories[index].category_id + `" `;
                if(method == "update"){
                    if(categories[index].category_id == question_group.category_id){
                        txt += ` selected `;
                    }
                }
                txt += `>` + categories[index].category_number + ". " + categories[index].category_name + `</option>`;
            }
        });
        select_category_id.innerHTML = txt;
    }

    function new_question(){
            var div_question_list = $("#div_question_list");
            var node = document.createElement("div");              
            var lbl_question_number = document.createElement("label");    
            var txt_question_number = document.createElement("input"); 
            var lbl_question_name = document.createElement("label"); 
            var txt_question_name = document.createElement("input"); 
            var btn_question_delete = document.createElement("img"); 

            count_question_number++;

            $(node).attr({
                "class" : "div_choice combo row",
                "name" : "div_item"
            });


            lbl_question_number.innerHTML = "ข้อ";
            $(lbl_question_number).attr({
                "class" : "form-control-label col-1",
                "style" : "text-align: right; vertical-align: middle;",
            });
            $(txt_question_number).attr({
                "name" : "question_number[]",
                "type" : "text",
                "class" : "form-control col-1",
                "style" : "margin-right: 15px;",
                "value" : count_question_number,
            });

            lbl_question_name.innerHTML = "คำถาม";
            $(lbl_question_name).attr({
                "class" : "form-control-label col-1",
                "style" : "text-align: right; vertical-align: middle;",
            });
            $(txt_question_name).attr({
                "name" : "question_name[]",
                "type" : "text",
                "class" : "form-control col-8",
            });
            
            $(btn_question_delete).attr({
                "class" : "btn_choice_delete",
                "src" : "<?php echo base_url(); ?>../common/assets/images/close.png",
                "onclick" : "del_question(this.parentElement)",
            });
            $(node).append($(lbl_question_number));
            $(node).append($(txt_question_number));
            $(node).append($(lbl_question_name));
            $(node).append($(txt_question_name));
            $(node).append($(btn_question_delete));
            $(div_question_list).append($(node));

    }

    function del_question(node){
        if(confirm("คุณต้องการ ลบ?")){
            node.remove();
        }
    }

    function load_question(){
        var method = "<?php echo $method; ?>";
        if(method == "update"){
            var div_question_list = $("#div_question_list");
            var questions = `<?php echo json_encode($questions); ?>`;

            // // preserve newlines, etc - use valid JSON
            // questions = questions.replace(/\\n/g, "\\n")  
            //             .replace(/\\'/g, "\\'")
            //             .replace(/\\"/g, '\\"')
            //             .replace(/\\&/g, "\\&")
            //             .replace(/\\r/g, "\\r")
            //             .replace(/\\t/g, "\\t")
            //             .replace(/\\b/g, "\\b")
            //             .replace(/\\f/g, "\\f");
            // // remove non-printable and other non-valid JSON chars
            // questions = questions.replace(/[\u0000-\u0019]+/g,""); 
            questions = valid_json_char(questions);

            questions = JSON.parse(questions);

            questions.forEach(function(item, index){
                var node = document.createElement("div");  
                var txt_question_id = document.createElement("input");             
                var lbl_question_number = document.createElement("label");    
                var txt_question_number = document.createElement("input"); 
                var lbl_question_name = document.createElement("label"); 
                var txt_question_name = document.createElement("input"); 
                //var btn_question_delete = document.createElement("img"); 

                count_question_number++;

                $(node).attr({
                    "class" : "div_choice combo row",
                    "name" : "div_item"
                });

                $(txt_question_id).attr({
                    "name" : "question_id[]",
                    "type" : "hidden",
                    "class" : "form-control col-1",
                    "style" : "margin-right: 15px;",
                    "value" : questions[index].question_id,
                });

                lbl_question_number.innerHTML = "ข้อ";
                $(lbl_question_number).attr({
                    "class" : "form-control-label col-1",
                    "style" : "text-align: right; vertical-align: middle;",
                });
                $(txt_question_number).attr({
                    "name" : "question_number[]",
                    "type" : "text",
                    "class" : "form-control col-1",
                    "style" : "margin-right: 15px;",
                    "value" : questions[index].question_number,
                });

                lbl_question_name.innerHTML = "คำถาม";
                $(lbl_question_name).attr({
                    "class" : "form-control-label col-1",
                    "style" : "text-align: right; vertical-align: middle;",
                });
                $(txt_question_name).attr({
                    "name" : "question_name[]",
                    "type" : "text",
                    "class" : "form-control col-8",
                    "value" : questions[index].question_name,
                });
                
                $(node).append($(txt_question_id));
                $(node).append($(lbl_question_number));
                $(node).append($(txt_question_number));
                $(node).append($(lbl_question_name));
                $(node).append($(txt_question_name));
                $(div_question_list).append($(node));
            });
        }
    }
</script>