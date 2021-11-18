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




    <?php
        
    ?>
    
    <?php
        echo "var form_detail_answer = {};\n";
        echo "var form_detail_count = {};\n";
        foreach($report_form_detail_label as $index => $form_detail){
            $report_form_detail_answer[$index] = json_encode($report_form_detail_answer[$index]);
            echo "form_detail_answer[$index] = ". $report_form_detail_answer[$index] . ";\n";
            $report_form_detail_count[$index] = json_encode($report_form_detail_count[$index]);
            echo "form_detail_count[$index] = ". $report_form_detail_count[$index] . ";\n";

    ?>
            var donutData        = {
                labels: form_detail_answer[<?php echo $index; ?>],
                datasets: [
                    {
                    data: form_detail_count[<?php echo $index; ?>],
                    backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                    }
                ]
            }
            var donutOptions     = {
                maintainAspectRatio : false,
                responsive : true,
            }

            setup_pie_chart($("#chart_pie_form_detail_<?php echo $index; ?>"), donutData);
    <?php
        }
    ?>
    
    //-------------
    //- PIE CHART -
    //-------------
    function setup_pie_chart(element, chartData){
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $(element).get(0).getContext('2d')
        var pieData        = donutData;
        var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var pieChart = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions      
        });
    }   











    <?php

		$report_by_center_label = json_encode($report_by_center_label);
		echo "var center_label = ". $report_by_center_label . ";\n";
		$report_by_center_data = json_encode($report_by_center_data);
		echo "var center_data = ". $report_by_center_data . ";\n";
		$report_by_center_max_point = json_encode($report_by_center_max_point);
		echo "var center_max_point = ". $report_by_center_max_point . ";\n";

        $report_category_label = json_encode($report_category_label);
        echo "var category_label = ". $report_category_label . ";\n";
        $report_category_data = json_encode($report_category_data);
        echo "var category_data = ". $report_category_data . ";\n";
        $report_category_max_point = json_encode($report_category_max_point);
        echo "var category_max_point = ". $report_category_max_point . ";\n";
    ?>

	var centerChartData = {
        
        labels  : center_label, // Criteria(category name, question group name. question name)
        datasets: [
            {
                label               : 'คะแนนเฉลี่ย',
                backgroundColor     : 'rgba(146,224,208,0.4)',
                borderWidth         : 1,
                borderColor         : 'rgba(33,175,144,1.0)',
                pointRadius          : false,
                pointColor          : '#21af90',
                pointStrokeColor    : 'rgba(102,212,189,0.6)',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(102,212,189,0.6)',
                data                : center_data,
            },

        ]
    }

    var categoryChartData = {
        
        labels  : category_label, // Criteria(category name, question group name. question name)
        datasets: [
            {
                label               : 'คะแนนเฉลี่ย',
                backgroundColor     : 'rgba(146,224,208,0.4)',
                borderWidth         : 1,
                borderColor         : 'rgba(33,175,144,1.0)',
                pointRadius          : false,
                pointColor          : '#21af90',
                pointStrokeColor    : 'rgba(102,212,189,0.6)',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(102,212,189,0.6)',
                data                : category_data,
            },

        ]
    }

	setup_chart($("#center_chart"), centerChartData, center_max_point);
    setup_chart($("#category_chart"), categoryChartData, category_max_point);

    <?php
        $report_question_group_label = json_encode($report_question_group_label);
        echo "var question_group_label = ". $report_question_group_label . ";\n";
        $report_question_group_data = json_encode($report_question_group_data);
        echo "var question_group_data = ". $report_question_group_data . ";\n";
    ?>
    var questionGroupChartData = {
        
        labels  : question_group_label, // Criteria(category name, question group name. question name)
        datasets: [
            {
                label               : 'คะแนนเฉลี่ย %',
                backgroundColor     : 'rgba(146,224,208,0.4)',
                borderWidth         : 1,
                borderColor         : 'rgba(33,175,144,1.0)',
                pointRadius          : false,
                pointColor          : '#21af90',
                pointStrokeColor    : 'rgba(102,212,189,0.6)',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(102,212,189,0.6)',
                data                : question_group_data,
            },

        ]
    }
    setup_percent_chart($("#question_group_chart"), questionGroupChartData);

    <?php
        for($i=0;$i<sizeof($report_question_data);$i++){
            $report_question_label_arr = json_encode($report_question_label[$i]);
            echo "var question_label = ". $report_question_label_arr . ";\n";
            $report_question_data_arr = json_encode($report_question_data[$i]);
            echo "var question_data = ". $report_question_data_arr . ";\n";
        
        
    ?>
            var questionChartData = {
                
                labels  : question_label, // Criteria(category name, question group name. question name)
                datasets: [
                    {
                        label               : 'คะแนนเฉลี่ย %',
                        backgroundColor     : 'rgba(146,224,208,0.4)',
                        borderWidth         : 1,
                        borderColor         : 'rgba(33,175,144,1.0)',
                        pointRadius          : false,
                        pointColor          : '#21af90',
                        pointStrokeColor    : 'rgba(102,212,189,0.6)',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(102,212,189,0.6)',
                        data                : question_data,
                    },

                ]
            }
            setup_percent_chart($("#question_chart_<?php echo $i; ?>"), questionChartData);
    <?php   
        }
    ?>

    //-------------
    //- BAR CHART -
    //-------------
    function setup_percent_chart(element, chartData){
        var barChartCanvas = $(element).get(0).getContext('2d');
        var barChartData = jQuery.extend(true, {}, chartData);
        var temp0 = chartData.datasets[0];
        //var temp1 = areaChartData.datasets[1];
        barChartData.datasets[0] = temp0;

        var barChart = new Chart(barChartCanvas, {
            type: 'horizontalBar', 
            data: barChartData,
            options: {
                responsive              : true,
                maintainAspectRatio     : true,
                datasetFill             : true,

                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'คะแนนเฉลี่ย',
                        },
                        ticks: {
                            beginAtZero:true,
                            min: 0,
                            max: 100,
                        }
                    }],
                    yAxes: [{
                        display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'หัวข้อ',
                            },
                    }],
                },
                    
            },
        });
    }
    
    function setup_chart(element, chartData, maxPoint){
        var barChartCanvas = $(element).get(0).getContext('2d');
        var barChartData = jQuery.extend(true, {}, chartData);
        var temp0 = chartData.datasets[0];
        //var temp1 = areaChartData.datasets[1];
        barChartData.datasets[0] = temp0;

        var max_point = maxPoint[0];

        var barChart = new Chart(barChartCanvas, {
            type: 'horizontalBar', 
            data: barChartData,
            options: {
                responsive              : true,
                maintainAspectRatio     : false,
                datasetFill             : false,

                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'คะแนน',
                        },
                        ticks: {
                            beginAtZero:true,
                            min: 0,
                            max: max_point,
                        }
                    }],
                    yAxes: [{
                        display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'หัวข้อ',
                            },
                    }],
                },
            }
        });
    }

    
});

    

</script>
