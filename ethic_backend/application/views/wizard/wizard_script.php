<script>
    var method = "<?php echo $method; ?>";
    var form_arr = new Array();
    var form_detail_arr = new Array();
    var form_detail_item_arr = new Array();
    var category_arr = new Array();
    var question_group_arr = new Array();
    var question_arr = new Array();
    var choice_groups = <?php echo json_encode($choice_groups); ?>;
    var count_form_detail_number = 0;
    var count_category_number = 0;
    var count_question_group_number = 0;
    var count_question_number = 0;
    //alert("TEST");
    
    function new_form_detail(){
        var div_form_detail_list = document.getElementById("div_form_detail_list");
        var node = document.createElement("div");              
        var lbl_form_detail_number = document.createElement("label");    
        var txt_form_detail_number = document.createElement("input"); 
        var lbl_form_detail_name = document.createElement("label"); 
        var txt_form_detail_name = document.createElement("input"); 
        var btn_form_detail_delete = document.createElement("img"); 

        var btn_new_form_detail_item = document.createElement("button");

        var div_form_detail_item = document.createElement("div");

        count_form_detail_number++;

        $(node).attr({
            "class" : "div_choice combo row div_form_detail",
            "name" : "div_form_detail",
        });


        lbl_form_detail_number.innerHTML = "ข้อ";
        $(lbl_form_detail_number).attr({
            "class" : "form-control-label col-1",
            "style" : "text-align: right; vertical-align: middle;",
        });
        $(txt_form_detail_number).attr({
            "name" : "form_detail_number[]",
            "type" : "text",
            "class" : "form-control col-1 form_detail_number",
            "style" : "margin-right: 15px;",
            "required" : "required",
            "value" : count_form_detail_number,
        });

        lbl_form_detail_name.innerHTML = "คำถาม";
        $(lbl_form_detail_name).attr({
            "class" : "form-control-label col-1",
            "style" : "text-align: right; vertical-align: middle;",
        });
        $(txt_form_detail_name).attr({
            "name" : "form_detail_name[]",
            "type" : "text",
            "class" : "form-control col-8 form_detail_name",
            "required" : "required",
        });
        
        $(btn_form_detail_delete).attr({
            "class" : "btn_choice_delete",
            "src" : "<?php echo base_url(); ?>../common/assets/images/close.png",
            "onclick" : "del_item(this.parentElement)",
        });

        $(div_form_detail_item).attr({
            "class" : "div_choice combo col-12",
            "name" : "div_form_detail_items",
            "id" :  "div_form_detail_item" + count_form_detail_number,
        });

        $(btn_new_form_detail_item).attr({
            "class" : "btn btn-success",
            "type" : "button",
            "onclick" : `new_form_detail_item("div_form_detail_item` + count_form_detail_number + `")`,
        });
        $(btn_new_form_detail_item).html("เพิ่มคำตอบ");
        $(node).append($(lbl_form_detail_number));
        $(node).append($(txt_form_detail_number));
        $(node).append($(lbl_form_detail_name));
        $(node).append($(txt_form_detail_name));
        $(node).append($(btn_form_detail_delete));
        $(node).append($(div_form_detail_item));
        $(node).append($(btn_new_form_detail_item));

        
        $(div_form_detail_list).append($(node));

    }

    function new_form_detail_item(id){
            var div_form_detail_item = document.getElementById(id);
            var node = document.createElement("div");      
            var lbl_form_detail_item = document.createElement("label");               
            var txt_form_detail_item = document.createElement("input"); 
            var btn_item_delete = document.createElement("img"); 

        
        $(node).attr({
            "class" : "div_item combo row div_form_detail_item",
            "name" : "div_form_detail_item"
        });


        lbl_form_detail_item.innerHTML = "คำตอบ";
        $(lbl_form_detail_item).attr({
            "class" : "form-control-label col-1",
            "style" : "text-align: right; vertical-align: middle;",
        });
            $(txt_form_detail_item).attr({
                "name" : "form_detail_item[]",
                "type" : "text",
                "class" : "form-control col-10 form_detail_item_name",
            });

            
            $(btn_item_delete).attr({
                "class" : "btn_item_delete trigger",
                "src" : "<?php echo base_url(); ?>../common/assets/images/close.png",
                "onclick" : "del_item(this.parentElement)",
            });
            $(node).append($(lbl_form_detail_item));
            $(node).append($(txt_form_detail_item));
            $(node).append($(btn_item_delete));
            $(div_form_detail_item).append($(node));

    }
    

    function new_category(){
        var div_category_list = document.getElementById("div_category_list");
        var node = document.createElement("div");              
        var lbl_category_number = document.createElement("label");    
        var txt_category_number = document.createElement("input"); 
        var lbl_category_name = document.createElement("label"); 
        var txt_category_name = document.createElement("input"); 
        var btn_category_delete = document.createElement("img"); 

       
        var btn_new_question_group = document.createElement("button");

        var div_question_group = document.createElement("div");

        count_category_number++;

        $(node).attr({
            "class" : "div_choice combo row div_category",
            "name" : "div_category",
        });


        lbl_category_number.innerHTML = "ข้อ";
        $(lbl_category_number).attr({
            "class" : "form-control-label col-1",
            "style" : "text-align: right; vertical-align: middle;",
        });
        $(txt_category_number).attr({
            "name" : "category_number[]",
            "type" : "text",
            "class" : "form-control col-1 category_number",
            "style" : "margin-right: 15px;",
            "required" : "required",
            "value" : count_category_number,
        });

        lbl_category_name.innerHTML = "Category";
        $(lbl_category_name).attr({
            "class" : "form-control-label col-2",
            "style" : "text-align: right; vertical-align: middle;",
        });
        $(txt_category_name).attr({
            "name" : "category_name[]",
            "type" : "text",
            "class" : "form-control col-7 category_name",
            "required" : "required",
        });
        
        

        $(btn_category_delete).attr({
            "class" : "btn_choice_delete",
            "src" : "<?php echo base_url(); ?>../common/assets/images/close.png",
            "onclick" : "del_item(this.parentElement)",
        });

        $(div_question_group).attr({
            "class" : "div_choice combo col-12 ",
            "name" : "div_question_group",
            "id" :  "div_question_group" + count_category_number,
        });

        $(btn_new_question_group).attr({
            "class" : "btn btn-success",
            "type" : "button",
            "onclick" : `new_question_group("div_question_group` + count_category_number + `")`,
        });
        $(btn_new_question_group).html("เพิ่มกลุ่มคำถาม");

        $(node).append($(lbl_category_number));
        $(node).append($(txt_category_number));
        $(node).append($(lbl_category_name));
        $(node).append($(txt_category_name));
        $(node).append($(btn_category_delete));
        $(node).append($(div_question_group));
        $(node).append($(btn_new_question_group));

        
        $(div_category_list).append($(node));

    }

    

    function new_question_group(id){
        var div_question_group = document.getElementById(id);
        var node = document.createElement("div");   
        var lbl_question_group_number = document.createElement("label");               
        var txt_question_group_number = document.createElement("input");   
        var lbl_question_group_name = document.createElement("label");               
        var txt_question_group_name = document.createElement("input"); 
        var lbl_choice_group = document.createElement("label");         
        var select_choice_group = document.createElement("select"); 
        var btn_item_delete = document.createElement("img"); 

        var btn_new_question = document.createElement("button");
        var div_question = document.createElement("div");

        count_question_group_number++;

        $(node).attr({
            "class" : "div_choice combo row div_question_group",
            "name" : "div_question_group"
        });


        lbl_question_group_number.innerHTML = "ข้อ";
        $(lbl_question_group_number).attr({
            "class" : "form-control-label col-1",
            "style" : "text-align: right; vertical-align: middle;",
        });
        $(txt_question_group_number).attr({
            "name" : "question_group_number[]",
            "type" : "text",
            "class" : "form-control col-1 question_group_number",
            "required" : "required",
        });

        lbl_question_group_name.innerHTML = "กลุ่มคำถาม";
        $(lbl_question_group_name).attr({
            "class" : "form-control-label col-2",
            "style" : "text-align: right; vertical-align: middle;",
        });
        $(txt_question_group_name).attr({
            "name" : "question_group_name[]",
            "type" : "text",
            "class" : "form-control col-7 question_group_name",
            "required" : "required",
        });

        lbl_choice_group.innerHTML = "เลือกกลุ่มคำตอบ ";
        $(lbl_question_group_name).attr({
            "class" : "form-control-label col-3",
            "style" : "text-align: right; vertical-align: middle;",
        });
        $(select_choice_group).attr({
            "name" : "choice_group_id[]",
            "type" : "text",
            "class" : "form-control col-9 question_group_choice_group",
        });
        $.each(choice_groups, function(i, value) {
            $(select_choice_group).append($('<option>').text(choice_groups[i].choice_group_name).attr('value', choice_groups[i].choice_group_id));
        });

        $(btn_item_delete).attr({
            "class" : "btn_item_delete trigger",
            "src" : "<?php echo base_url(); ?>../common/assets/images/close.png",
            "onclick" : "del_item(this.parentElement)",
        });

        $(div_question).attr({
            "class" : "div_choice combo col-12",
            "name" : "div_form_detail_item",
            "id" :  "div_question_" + count_question_group_number,
        });

        $(btn_new_question).attr({
            "class" : "btn btn-success",
            "type" : "button",
            "onclick" : `new_question("div_question_` + count_question_group_number + `")`,
        });
        $(btn_new_question).html("เพิ่มคำถาม");

        $(node).append($(lbl_question_group_number));
        $(node).append($(txt_question_group_number));
        $(node).append($(lbl_question_group_name));
        $(node).append($(txt_question_group_name));
        $(node).append($(lbl_choice_group));
        $(node).append($(select_choice_group));
        $(node).append($(btn_item_delete));
        $(node).append($(div_question));
        $(node).append($(btn_new_question));
        $(div_question_group).append($(node));

    }

    function new_question(id){
        var div_question = document.getElementById(id);
        var node = document.createElement("div");              
        var lbl_question_number = document.createElement("label");    
        var txt_question_number = document.createElement("input"); 
        var lbl_question_name = document.createElement("label"); 
        var txt_question_name = document.createElement("input"); 
        var btn_question_delete = document.createElement("img"); 

        var btn_new_question_group = document.createElement("button");

        var div_question_group = document.createElement("div");

        count_question_number++;

        $(node).attr({
            "class" : "div_item combo row div_question",
            "name" : "div_question",
        });


        lbl_question_number.innerHTML = "ข้อ";
        $(lbl_question_number).attr({
            "class" : "form-control-label col-1",
            "style" : "text-align: right; vertical-align: middle;",
        });
        $(txt_question_number).attr({
            "name" : "question_number[]",
            "type" : "text",
            "class" : "form-control col-1 question_number",
            "style" : "margin-right: 15px;",
            "required" : "required",
            "value" : count_question_number,
        });

        lbl_question_name.innerHTML = "คำถาม";
        $(lbl_question_name).attr({
            "class" : "form-control-label col-2",
            "style" : "text-align: right; vertical-align: middle;",
        });
        $(txt_question_name).attr({
            "name" : "question_name[]",
            "type" : "text",
            "class" : "form-control col-7 question_name",
            "required" : "required",
        });
        
        $(btn_question_delete).attr({
            "class" : "btn_choice_delete",
            "src" : "<?php echo base_url(); ?>../common/assets/images/close.png",
            "onclick" : "del_item(this.parentElement)",
        });

    
        $(node).append($(lbl_question_number));
        $(node).append($(txt_question_number));
        $(node).append($(lbl_question_name));
        $(node).append($(txt_question_name));
        $(node).append($(btn_question_delete));

        
        $(div_question).append($(node));

    }

    function del_item(node){
        if(confirm("คุณต้องการ ลบ?")){
            node.remove();
        }
    }

    function update_item_arr(){
        
        var cat_list = document.getElementById('div_category_list');// document.getElementsByTagName('mysection')[0];
        var form_details = {};
        var categories = {};
        form_arr = {};
        form_detail_arr = {};
        form_detail_item_arr = {};
        category_arr = {};
        question_group_arr = {};
        question_arr = {};

        var form_name = document.getElementById("txt_form_name").value;
        var form_description = document.getElementById("txt_form_description").value;
        form_arr = {"name": form_name, "description": form_description};


        var div_form_details = document.getElementById("div_form_detail_list");
        form_details = div_form_details.getElementsByClassName("div_form_detail");
        for(var i=0;i<form_details.length;i++){
            form_detail_arr[i] = {};
            form_detail_item_arr[i] = {};
            var fd_num_arr = form_details[i].getElementsByClassName("form_detail_number");
            form_detail_arr[i]["number"] = fd_num_arr[0].value;
            var fd_name_arr = form_details[i].getElementsByClassName("form_detail_name");
            form_detail_arr[i]["name"] = fd_name_arr[0].value;

            
            var div_form_detail_items = form_details[i].getElementsByTagName("div");
            form_detail_items = div_form_detail_items[0].getElementsByClassName("div_form_detail_item");
            for(var j=0;j<form_detail_items.length;j++){
                form_detail_item_arr[i][j] = {};
                var fd_item_arr = form_detail_items[j].getElementsByClassName("form_detail_item_name");
                form_detail_item_arr[i][j]["item"] = fd_item_arr[0].value;
            }
            
        }



        categories = cat_list.getElementsByClassName("div_category");
        for(var i=0;i<categories.length;i++){
            category_arr[i] = {};
            question_group_arr[i] = {};
            question_arr[i] = {};

            var cat_num_arr = categories[i].getElementsByClassName("category_number");
            category_arr[i]["number"] = cat_num_arr[0].value;
            var cat_name_arr = categories[i].getElementsByClassName("category_name");
            category_arr[i]["name"] = cat_name_arr[0].value;

            var div_question_groups = categories[i].getElementsByTagName("div");
            question_groups = div_question_groups[0].getElementsByClassName("div_question_group");
            for(var j=0;j<question_groups.length;j++){
                question_group_arr[i][j] = {};
                question_arr[i][j] = {};

                var qg_num_arr = question_groups[j].getElementsByClassName("question_group_number");
                question_group_arr[i][j]["number"] = qg_num_arr[0].value;
                var qg_name_arr = question_groups[j].getElementsByClassName("question_group_name");
                question_group_arr[i][j]["name"] = qg_name_arr[0].value;
                var qg_cg_id_arr = question_groups[j].getElementsByClassName("question_group_choice_group");
                question_group_arr[i][j]["choice_group_id"] = qg_cg_id_arr[0].options[qg_cg_id_arr[0].selectedIndex].value;  

                var div_questions = question_groups[j].getElementsByTagName("div");
                questions = div_questions[0].getElementsByClassName("div_question");
                for(var k=0;k<questions.length;k++){
                    question_arr[i][j][k] = {};

                    var q_num_arr = questions[k].getElementsByClassName("question_number");
                    question_arr[i][j][k]["number"] = q_num_arr[0].value;
                    var q_name_arr = questions[k].getElementsByClassName("question_name");
                    question_arr[i][j][k]["name"] = q_name_arr[0].value;
                }
            }
            
        }
        
        // var str = JSON.stringify(form_detail_item_arr);
        // $("#print_array_area").html(str);
    }

    function add_wizard(){
        if(confirm("คุณต้องการ บันทึก?")){
            update_item_arr();
            var ourObj = {};
            ourObj.form = form_arr;
            ourObj.form_details = form_detail_arr;
            ourObj.form_detail_items = form_detail_item_arr;
            ourObj.categories = category_arr;
            ourObj.question_groups = question_group_arr;
            ourObj.questions = question_arr;
            
            //alert(JSON.stringify(ourObj));
            var points = JSON.stringify(ourObj);
            console.log(points);
            $.ajax({
                url:'Wizard/addWizardDo',
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: {
                    ready: 'ready',
                },
                data:  points,
                contentType: "application/json; charset=utf-8",
                dataType: 'JSON',
                success: function(response){
                    console.log(response);
                    alert("บันทึกสำเร็จ");
                },
                error: function (xhr, textStatus, errorThrown) {
                    alert("Status: " + textStatus + '\nError: ' + errorThrown);
                },
            });
            
        }
        
    }
</script>