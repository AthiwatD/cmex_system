<script>
    function check_select_choice_of_question(){
        var sels = document.getElementsByName("choice_of_question[]");
        sels.forEach(function(index, item){
            if(item.options){
                var sel_value = item.options[item.selectedIndex].value;    
                if(sel_value == ""){
                    alert("โปรดเลือกคำตอบให้ครบถ้วน");
                    item.focus;
                    return false;
                }
            }
            
        });
        return true;
    }

    function check_send(){
        if(check_select_choice_of_question()){
            return confirm('ยืนยันการส่งแบบประเมิน');
        }
    }
</script>