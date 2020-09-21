<div class="card">
    <div class="card-header">
    
    <h1 class="card-title" style="font-size: 28pt"><?php echo $evaluation->evaluation_name; ?></h1>

    <?php
        if(!empty($evaluation->evaluation_by)){
    ?>
            <br><br><p style="font-size: 22pt"><?php echo $evaluation->evaluation_by; ?></p>
    <?php
        }
    ?>
    <?php
        if(!empty($evaluation->evaluation_description)){
    ?>
            <br><Br><p style="font-size: 22pt"><?php echo $evaluation->evaluation_description; ?></p>
    <?php
        }
    ?>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        
            <!-- Guage Summary -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">สรุปผลคะแนนเฉลี่ย</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    </div>

                </div>
                <div class="card-body row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 canvas-holder" style='width:100%'>
                        <canvas id="chart_guage_tatal_average" class="chart_guage"></canvas>
                    </div> 
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 canvas-holder" style='width:100%'>
                        <canvas id="chart_guage_evaluate_person_percent" class="chart_guage"></canvas>
                    </div> 
                </div>

                <div class="card-body row">
                    
                </div>
                <!-- /.card-body -->

            </div>

            

            <!-- Category BAR CHART -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Category</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    </div>

                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="category_chart" name="category_chart" style="max-height: <?php echo $category_chart_height; ?>px; max-width: 100%; max-height: 100%;"></canvas>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- BAR CHART -->

        
            <!-- Question Group BAR CHART -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">กลุ่มคำถาม</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    </div>

                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="question_group_chart" name="question_group_chart" style="max-height: <?php echo $question_group_chart_height; ?>px; max-width: 100%"></canvas>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- BAR CHART -->


            <?php 
                for($i=0;$i<sizeof($report_question_data);$i++){
            ?>
                    <!-- Question BAR CHART -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">กลุ่มคำถาม: <?php echo $report_question_group_label[$i]; ?></h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="question_chart_<?php echo $i; ?>" name="question_chart_<?php echo $i; ?>" style="max-height: <?php echo $question_chart_height[$i]; ?>px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- BAR CHART -->
            <?php        
                }
            ?>
            
            <!-- Suggestion -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">ข้อคิดเห็น / ข้อเสนอแนะ</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    </div>

                </div>
                <div class="card-body">
                    <ul>
                        <?php
                            for($i=0;$i<sizeof($report_suggestion);$i++){ 
                                if(!empty($report_suggestion[$i]->suggestion_detail)){
                        ?>
                                    <li><?php echo $report_suggestion[$i]->suggestion_detail; ?></li>
                        <?php
                                }
                            }
                        ?>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
                    <!-- Suggestion -->
    </div>
    <!-- /.card-body -->
</div>