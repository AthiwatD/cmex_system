<script>
    var method = "<?php echo $method; ?>";
    var forms = <?php echo json_encode($forms); ?>;
    var categories = <?php echo json_encode($categories); ?>;
    var question_groups = <?php echo json_encode($question_groups); ?>;

    if(method == "update"){
        var question = <?php echo json_encode($question); ?>;
    }
    show_categories();
    show_question_groups();

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
                    if(categories[index].category_id == question.category_id){
                        txt += ` selected `;
                    }
                }
                txt += `>` + categories[index].category_number + ". " + categories[index].category_name + `</option>`;
            }
        });
        select_category_id.innerHTML = txt;
    }

    function show_question_groups(){
        var select_form_id = document.getElementById("select_form_id");
        var form_id = select_form_id.options[select_form_id.selectedIndex].value;    
        var select_category_id = document.getElementById("select_category_id");
        var category_id = select_category_id.options[select_category_id.selectedIndex].value;  
        var select_question_group_id = document.getElementById("select_question_group_id");
        var txt = "";
        select_question_group_id.innerHTML = "";
        question_groups.forEach(function(item, index){
            if(question_groups[index].category_id == category_id){
                txt += `<option value="` + question_groups[index].question_group_id + `" `;
                if(method == "update"){
                    if(question_groups[index].question_group_id == question.question_group_id){
                        txt += ` selected `;
                    }
                }
                txt += `>` + question_groups[index].question_group_number + ". " + question_groups[index].question_group_name + `</option>`;
            }
        });
        select_question_group_id.innerHTML = txt;
    }

</script>