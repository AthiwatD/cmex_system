<div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-history-tab" data-toggle="pill" href="#history_tab" role="tab" aria-controls="custom-tabs-four-history" aria-selected="false">ประวัติสุขภาพ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-exam-tab" data-toggle="pill" href="#exam_tab" role="tab" aria-controls="custom-tabs-four-exam" aria-selected="false">การตรวจสัญญาณชีพ</a>
                  </li>
									<li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-input_lab-tab" data-toggle="pill" href="#input_lab_tab" role="tab" aria-controls="custom-tabs-four-input_lab" aria-selected="false">กรอกผล Labs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-exam_result-tab" data-toggle="pill" href="#exam_result_tab" role="tab" aria-controls="custom-tabs-four-exam_result" aria-selected="false">ผลการตรวจร่างกาย</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " id="custom-tabs-four-exam_lab-tab" data-toggle="pill" href="#exam_lab_tab" role="tab" aria-controls="custom-tabs-four-exam_lab" aria-selected="true">ผล Labs</a>
                  </li>
				  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-exam_xray-tab" data-toggle="pill" href="#exam_xray_tab" role="tab" aria-controls="custom-tabs-four-exam_xray" aria-selected="true">ผล X-ray</a>
                  </li>
				  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-exam_ekg-tab" data-toggle="pill" href="#exam_ekg_tab" role="tab" aria-controls="custom-tabs-four-exam_ekg" aria-selected="true">ผล EKG</a>
                  </li>
				  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-suggest-tab" data-toggle="pill" href="#suggest_tab" role="tab" aria-controls="custom-tabs-four-suggest" aria-selected="true">คำแนะนำ</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
									<?php
										include "history_tab_view.php";
										include "exam_tab_view.php";
										include "input_lab_tab_view.php";
										include "exam_result_tab_view.php";
										include "exam_lab_tab_view.php";
										include "exam_xray_tab_view.php";
										include "exam_ekg_tab_view.php";
										include "suggest_tab_view.php";
										include "records_end_view.php";
									?>

                
