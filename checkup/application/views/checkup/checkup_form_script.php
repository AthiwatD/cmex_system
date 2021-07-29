<script>

    var input_txt_hn = document.getElementById("txt_hn");

    // Execute a function when the user releases a key on the keyboard
    input_txt_hn.addEventListener("keyup", function(event) {
    // Number 13 is the "Enter" key on the keyboard
    if (event.keyCode === 13) {
        // Cancel the default action, if needed
        event.preventDefault();
        // Trigger the button element with a click
        document.getElementById("btn_get_data_from_hn").click();
    }
    });

    function get_data_from_hn(){

        var hn = document.getElementById("txt_hn").value;
        if(hn!=""){
            var ourObj = {};
            ourObj.method = "GET_DEMOGRAPHIC_BY_HN_ALL";
            ourObj.hn = hn;
			ourObj.output = "json";
            var points = JSON.stringify(ourObj);
            console.log(points);
            $.ajax({
                url:'http://hosweb.med.cmu.ac.th/s-api/main.php',
                method: 'POST',
                body: points,
                data:  points,
                dataType: 'JSON',
                success: function(response){
                    console.log(response);
                    // var res = JSON.parse(response);
                    // alert("Status: " + response.e);
                    // var lbl_patient = document.getElementById("lbl_patient_detail");
                    // lbl_patient.innerHTML = "<b>HN: " + response.v.hn + "&nbsp;&nbsp;" + response.v.pt_name + "&nbsp;&nbsp;อายุ: " + response.v.age + "</b>";
					$("#txt_pid").val(response._value[0].pid);
					$("#txt_title_name").val(response._value[0].title_nm);
					$("#txt_first_name").val(response._value[0].fnm);
					$("#txt_last_name").val(response._value[0].lnm);
					if(response._value[0].sex == "ช"){
						$("#txt_sex").val("ชาย");
					}
					else if(response._value[0].sex == "ญ"){
						$("#txt_sex").val("หญิง");
					}
					$("#date_birthdate").val(response._value[0].birthdate);
					$("#txt_age").val(response._value[0].age);
					$("#txt_tel").val(response._value[0].tel);
					$("#txt_address").val(response._value[0].addr);
					$("#txt_zip_code").val(response._value[0].zip);
					$("#txt_allergic").val(response._value[0].allergic);
                },
                error: function (xhr, textStatus, errorThrown) {
                    alert("Status: " + textStatus + '\nError: ' + errorThrown);
                },
            });
        }
    }
        
</script>
