<script>
$(function () {
    
    
    /* //////////////////////////////////////////
    //
    //      Guage Chart
    //
    */ //////////////////////////////////////////
    <?php
        $report_form_value = json_encode($report_form_value);
        echo "var guage_value_total_average = ". $report_form_value . ";\n";

        $report_form_min_point = json_encode($report_form_min_point);
        echo "var report_form_min_point = ". $report_form_min_point . ";\n";

        $report_form_max_point = json_encode($report_form_max_point);
        echo "var report_form_max_point = ". $report_form_max_point . ";\n";
        
    ?>


    var guage_data = [];
    guage_data[0] = report_form_max_point * 0.25;
    guage_data[1] = report_form_max_point * 0.5;
    guage_data[2] = report_form_max_point * 0.75;
    guage_data[3] = report_form_max_point;


    var config_guage_total_average = {
        type: 'gauge',
        data: {
            //labels: ['Success', 'Warning', 'Warning', 'Error'],
            datasets: [{
                data: guage_data,
                value: guage_value_total_average,
                backgroundColor: ['rgba(255, 0, 034, 0.8)', 'rgba(255, 136, 034, 0.8)', 'rgba(255, 227, 034, 0.8)','rgba(085, 238, 017, 0.8)'],
                borderWidth: 2,
            }]
        },
        options: {
            responsive: true,
            title: {
            display: true,
            text: 'คะแนนเฉลี่ย'
            },
            layout: {
            padding: {
                bottom: 30
            }
            },
            needle: {
            // Needle circle radius as the percentage of the chart area width
            radiusPercentage: 2,
            // Needle width as the percentage of the chart area width
            widthPercentage: 3.2,
            // Needle length as the percentage of the interval between inner radius (0%) and outer radius (100%) of the arc
            lengthPercentage: 80,
            // The color of the needle
            color: 'rgba(0, 0, 0, 0.8)'
            },
            valueLabel: {
             //formatter: Math.round
            }
        }
    };

    <?php
        $report_person_evaluate = json_encode($report_person_evaluate);
        echo "var guage_value_person_evaluate = ". $report_person_evaluate . ";\n";
    ?>
    
    var config_guage_evaluate_person_percent = {
        type: 'gauge',
        data: {
            //labels: ['Success', 'Warning', 'Warning', 'Error'],
            datasets: [{
            data: [25,50,75,100], // guage_color
            value: guage_value_person_evaluate, // value and needle
            backgroundColor: ['rgba(255, 0, 034, 0.8)', 'rgba(255, 136, 034, 0.8)', 'rgba(255, 227, 034, 0.8)','rgba(085, 238, 017, 0.8)'],
            borderWidth: 3
            }]
        },
        options: {
            responsive: true,
            title: {
            display: true,
            text: 'จำนวนผู้ประเมิน %'
            },
            layout: {
            padding: {
                bottom: 30
            }
            },
            needle: {
            // Needle circle radius as the percentage of the chart area width
            radiusPercentage: 2,
            // Needle width as the percentage of the chart area width
            widthPercentage: 3.2,
            // Needle length as the percentage of the interval between inner radius (0%) and outer radius (100%) of the arc
            lengthPercentage: 80,
            // The color of the needle
            color: 'rgba(0, 0, 0, 0.8)'
            },
            valueLabel: {
            //formatter: Math.round
            }
        }
    };

    var ctx = document.getElementById('chart_guage_tatal_average').getContext('2d');
    window.myGauge = new Chart(ctx, config_guage_total_average);

    
    var ctx2 = document.getElementById('chart_guage_evaluate_person_percent').getContext('2d');
    window.myGauge = new Chart(ctx2, config_guage_evaluate_person_percent);

    


    var meanings = "<?php echo $meanings; ?>";
    meaning_arr = meanings.split("(.)");
    var guage_criteria_meaning = meaning_arr;

    var max_scores = "<?php echo $max_scores; ?>";
    max_score_arr = max_scores.split("(.)");
    var guage_criteria_data = max_score_arr;

    var color_codes = "<?php echo $color_codes; ?>";
    color_code_arr = color_codes.split("(.)");
    var guage_bg_color = color_code_arr;
    
    <?php
        $js_array = json_encode($report_question_group_label);
        echo "var question_group_label = ". $js_array . ";\n";
        $js_array = json_encode($report_question_group_data);
        echo "var question_group_data = ". $js_array . ";\n";
    ?>

    // var question_group_label = [<?php echo '"'.implode('","', $report_question_group_label).'"' ?>];
    // var question_group_data = [<?php echo '"'.implode('","', $report_question_group_data).'"' ?>];

    <?php
        $js_array = json_encode($report_question_data);
        echo "var question_data = ". $js_array . ";\n";
        $js_array = json_encode($report_question_label);
        echo "var question_label = ". $js_array . ";\n";
    ?>
    question_data.forEach(function(item_i, index_i){
        
        setup_guage_chart(document.getElementById('question_group_chart_' + index_i), question_group_data[index_i]);

        question_data[index_i].forEach(function(item_j, index_j){
            setup_guage_chart(document.getElementById('question_chart_' + index_i + '_' + index_j), question_data[index_i][index_j]);
        });

    });
    
    

    function setup_guage_chart(element, chartData){
        // alert(element + " " + chartData);
        


        var config_guage_score_criteria = {
            type: 'gauge',
            data: {
                labels: guage_criteria_meaning,
                datasets: [{
                    data: guage_criteria_data, // guage_color
                    value: chartData, // value and needle
                    backgroundColor: guage_bg_color,
                    borderWidth: 3
                }]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'คะแนน %'
                },
                layout: {
                    padding: {
                        bottom: 30
                    }
                },
                needle: {
                    // Needle circle radius as the percentage of the chart area width
                    radiusPercentage: 2,
                    // Needle width as the percentage of the chart area width
                    widthPercentage: 3.2,
                    // Needle length as the percentage of the interval between inner radius (0%) and outer radius (100%) of the arc
                    lengthPercentage: 80,
                    // The color of the needle
                    color: 'rgba(0, 0, 0, 0.8)'
                },
                valueLabel: {
                    //formatter: Math.round
                }
            }
        };

        var ctx3 = element.getContext('2d');
        window.myGauge = new Chart(ctx3, config_guage_score_criteria);
    }


    
    
});

    

</script>