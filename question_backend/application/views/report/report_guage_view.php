<div >
    <form role="form" class="needs-validation" method="POST" action="<?php echo base_url() . 'Report/reportGuage/'; ?>">
        <input type="hidden" name="evaluation_id" value="<?php echo $evaluation_id; ?>">    
        <div class="form-group row col-12" style="margin: 10px"> 
            <select name="score_criteria_id col-sm-10 col-md-10 col-lg-10 col-xl-10" class="" >
                <?php
                    foreach($scoreCriterias as $score_criteria){
                ?>
                        <option value="<?php echo $score_criteria->score_criteria_id; ?>"><?php echo $score_criteria->score_criteria_name; ?></option>
                <?php
                    }
                ?>
            </select>
            <button type="button" class="btn btn-info">รายงานเกจ</button>
        </div>
    </form>
    
</div>

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
                        <canvas id="category_chart" name="category_chart" style="min-height: <?php echo $category_chart_height; ?>px; max-width: 100%;"></canvas>
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
                        <canvas id="question_group_chart" name="question_group_chart" style="min-height: <?php echo $question_group_chart_height; ?>px; max-width: 100%"></canvas>
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
                                <canvas id="question_chart_<?php echo $i; ?>" name="question_chart_<?php echo $i; ?>" style="min-height: <?php echo $question_chart_height[$i]; ?>px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- BAR CHART -->
            <?php        
                }
            ?>
            
            
    </div>
    <!-- /.card-body -->
</div>