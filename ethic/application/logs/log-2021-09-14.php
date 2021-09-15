<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2021-09-14 08:45:05 --> Config Class Initialized
INFO - 2021-09-14 08:45:05 --> Hooks Class Initialized
DEBUG - 2021-09-14 08:45:05 --> UTF-8 Support Enabled
INFO - 2021-09-14 08:45:05 --> Utf8 Class Initialized
INFO - 2021-09-14 08:45:05 --> URI Class Initialized
DEBUG - 2021-09-14 08:45:05 --> No URI present. Default controller set.
INFO - 2021-09-14 08:45:05 --> Router Class Initialized
INFO - 2021-09-14 08:45:05 --> Output Class Initialized
INFO - 2021-09-14 08:45:05 --> Security Class Initialized
DEBUG - 2021-09-14 08:45:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 08:45:05 --> Input Class Initialized
INFO - 2021-09-14 08:45:05 --> Language Class Initialized
INFO - 2021-09-14 08:45:05 --> Loader Class Initialized
INFO - 2021-09-14 08:45:05 --> Helper loaded: html_helper
INFO - 2021-09-14 08:45:05 --> Helper loaded: url_helper
INFO - 2021-09-14 08:45:05 --> Helper loaded: form_helper
INFO - 2021-09-14 08:45:05 --> Helper loaded: file_helper
DEBUG - 2021-09-14 08:45:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 08:45:05 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 08:45:05 --> Database Driver Class Initialized
ERROR - 2021-09-14 08:45:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/1049): Unknown database 'question' D:\xampp\htdocs\cmex_system\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2021-09-14 08:45:05 --> Unable to connect to the database
DEBUG - 2021-09-14 08:45:05 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 08:45:05 --> Form Validation Class Initialized
INFO - 2021-09-14 08:45:05 --> Controller Class Initialized
DEBUG - 2021-09-14 08:45:05 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 08:45:05 --> Helper loaded: cookie_helper
INFO - 2021-09-14 08:45:05 --> User Agent Class Initialized
INFO - 2021-09-14 08:45:05 --> Helper loaded: ../../common/helpers/thai_date_helper
INFO - 2021-09-14 08:45:05 --> Helper loaded: ../../common/helpers/remote_file_exists_helper
INFO - 2021-09-14 08:45:05 --> Model "EvaluatePerson_model" initialized
INFO - 2021-09-14 08:45:05 --> Model "Evaluation_model" initialized
INFO - 2021-09-14 08:45:05 --> Model "Answer_model" initialized
ERROR - 2021-09-14 08:45:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/1049): Unknown database 'question' D:\xampp\htdocs\cmex_system\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2021-09-14 08:45:05 --> Unable to connect to the database
ERROR - 2021-09-14 08:45:05 --> Query error: Unknown database 'question' - Invalid query: SELECT *
                    FROM qstn_evaluate_person ep
                    JOIN qstn_evaluation e ON ep.evaluation_id = e.evaluation_id
                    WHERE (ep.person_id = '61018'
                    AND ep.evaluate_time = '0000-00-00 00:00:00')
                    AND (DATE('2021-09-14') between  e.date_start AND e.date_end
                    OR (STRCMP(e.date_start,'0000-00-00') = 0
                    AND STRCMP(e.date_end,'0000-00-00') = 0))
ERROR - 2021-09-14 08:45:05 --> Severity: error --> Exception: Call to a member function result() on bool D:\xampp\htdocs\cmex_system\ethic\application\models\EvaluatePerson_model.php 46
ERROR - 2021-09-14 08:45:05 --> Severity: Warning --> include(D:\xampp\htdocs\cmex_system\ethic\application\views\errors\html\error_exception.php): Failed to open stream: No such file or directory D:\xampp\htdocs\cmex_system\system\core\Exceptions.php 219
ERROR - 2021-09-14 08:45:05 --> Severity: Warning --> include(): Failed opening 'D:\xampp\htdocs\cmex_system\ethic\application\views\errors\html\error_exception.php' for inclusion (include_path='D:\xampp\php\PEAR') D:\xampp\htdocs\cmex_system\system\core\Exceptions.php 219
INFO - 2021-09-14 08:45:30 --> Config Class Initialized
INFO - 2021-09-14 08:45:30 --> Hooks Class Initialized
DEBUG - 2021-09-14 08:45:30 --> UTF-8 Support Enabled
INFO - 2021-09-14 08:45:30 --> Utf8 Class Initialized
INFO - 2021-09-14 08:45:30 --> URI Class Initialized
DEBUG - 2021-09-14 08:45:30 --> No URI present. Default controller set.
INFO - 2021-09-14 08:45:30 --> Router Class Initialized
INFO - 2021-09-14 08:45:30 --> Output Class Initialized
INFO - 2021-09-14 08:45:30 --> Security Class Initialized
DEBUG - 2021-09-14 08:45:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 08:45:30 --> Input Class Initialized
INFO - 2021-09-14 08:45:30 --> Language Class Initialized
INFO - 2021-09-14 08:45:30 --> Loader Class Initialized
INFO - 2021-09-14 08:45:30 --> Helper loaded: html_helper
INFO - 2021-09-14 08:45:30 --> Helper loaded: url_helper
INFO - 2021-09-14 08:45:30 --> Helper loaded: form_helper
INFO - 2021-09-14 08:45:30 --> Helper loaded: file_helper
DEBUG - 2021-09-14 08:45:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 08:45:30 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 08:45:30 --> Database Driver Class Initialized
DEBUG - 2021-09-14 08:45:30 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 08:45:30 --> Form Validation Class Initialized
INFO - 2021-09-14 08:45:30 --> Controller Class Initialized
DEBUG - 2021-09-14 08:45:30 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 08:45:30 --> Helper loaded: cookie_helper
INFO - 2021-09-14 08:45:30 --> User Agent Class Initialized
INFO - 2021-09-14 08:45:30 --> Helper loaded: ../../common/helpers/thai_date_helper
INFO - 2021-09-14 08:45:30 --> Helper loaded: ../../common/helpers/remote_file_exists_helper
INFO - 2021-09-14 08:45:30 --> Model "EvaluatePerson_model" initialized
INFO - 2021-09-14 08:45:30 --> Model "Evaluation_model" initialized
INFO - 2021-09-14 08:45:30 --> Model "Answer_model" initialized
INFO - 2021-09-14 08:45:30 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/header.php
INFO - 2021-09-14 08:45:30 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/navbar.php
INFO - 2021-09-14 08:45:30 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/sidebar.php
INFO - 2021-09-14 08:45:30 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/main_head.php
INFO - 2021-09-14 08:45:30 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php
INFO - 2021-09-14 08:45:30 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/footer.php
INFO - 2021-09-14 08:45:30 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/end.php
INFO - 2021-09-14 08:45:30 --> Final output sent to browser
DEBUG - 2021-09-14 08:45:30 --> Total execution time: 0.0265
INFO - 2021-09-14 08:45:35 --> Config Class Initialized
INFO - 2021-09-14 08:45:35 --> Hooks Class Initialized
DEBUG - 2021-09-14 08:45:35 --> UTF-8 Support Enabled
INFO - 2021-09-14 08:45:35 --> Utf8 Class Initialized
INFO - 2021-09-14 08:45:35 --> URI Class Initialized
INFO - 2021-09-14 08:45:35 --> Router Class Initialized
INFO - 2021-09-14 08:45:35 --> Output Class Initialized
INFO - 2021-09-14 08:45:35 --> Security Class Initialized
DEBUG - 2021-09-14 08:45:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 08:45:35 --> Input Class Initialized
INFO - 2021-09-14 08:45:35 --> Language Class Initialized
INFO - 2021-09-14 08:45:35 --> Loader Class Initialized
INFO - 2021-09-14 08:45:35 --> Helper loaded: html_helper
INFO - 2021-09-14 08:45:35 --> Helper loaded: url_helper
INFO - 2021-09-14 08:45:35 --> Helper loaded: form_helper
INFO - 2021-09-14 08:45:35 --> Helper loaded: file_helper
DEBUG - 2021-09-14 08:45:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 08:45:35 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 08:45:35 --> Database Driver Class Initialized
DEBUG - 2021-09-14 08:45:35 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 08:45:35 --> Form Validation Class Initialized
INFO - 2021-09-14 08:45:35 --> Controller Class Initialized
DEBUG - 2021-09-14 08:45:35 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 08:45:35 --> Helper loaded: cookie_helper
INFO - 2021-09-14 08:45:35 --> User Agent Class Initialized
INFO - 2021-09-14 08:45:35 --> Helper loaded: ../../common/helpers/thai_date_helper
INFO - 2021-09-14 08:45:35 --> Helper loaded: ../../common/helpers/remote_file_exists_helper
INFO - 2021-09-14 08:45:35 --> Model "EvaluatePerson_model" initialized
INFO - 2021-09-14 08:45:35 --> Model "Evaluation_model" initialized
INFO - 2021-09-14 08:45:35 --> Model "Answer_model" initialized
INFO - 2021-09-14 08:45:35 --> Config Class Initialized
INFO - 2021-09-14 08:45:35 --> Hooks Class Initialized
DEBUG - 2021-09-14 08:45:35 --> UTF-8 Support Enabled
INFO - 2021-09-14 08:45:35 --> Utf8 Class Initialized
INFO - 2021-09-14 08:45:35 --> URI Class Initialized
INFO - 2021-09-14 08:45:35 --> Router Class Initialized
INFO - 2021-09-14 08:45:35 --> Output Class Initialized
INFO - 2021-09-14 08:45:35 --> Security Class Initialized
DEBUG - 2021-09-14 08:45:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 08:45:35 --> Input Class Initialized
INFO - 2021-09-14 08:45:35 --> Language Class Initialized
INFO - 2021-09-14 08:45:35 --> Loader Class Initialized
INFO - 2021-09-14 08:45:35 --> Helper loaded: html_helper
INFO - 2021-09-14 08:45:35 --> Helper loaded: url_helper
INFO - 2021-09-14 08:45:35 --> Helper loaded: form_helper
INFO - 2021-09-14 08:45:35 --> Helper loaded: file_helper
DEBUG - 2021-09-14 08:45:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 08:45:35 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 08:45:35 --> Database Driver Class Initialized
DEBUG - 2021-09-14 08:45:35 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 08:45:35 --> Form Validation Class Initialized
INFO - 2021-09-14 08:45:35 --> Controller Class Initialized
DEBUG - 2021-09-14 08:45:35 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 08:45:35 --> Helper loaded: cookie_helper
INFO - 2021-09-14 08:45:35 --> Config Class Initialized
INFO - 2021-09-14 08:45:35 --> Hooks Class Initialized
DEBUG - 2021-09-14 08:45:35 --> UTF-8 Support Enabled
INFO - 2021-09-14 08:45:35 --> Utf8 Class Initialized
INFO - 2021-09-14 08:45:35 --> URI Class Initialized
INFO - 2021-09-14 08:45:35 --> Router Class Initialized
INFO - 2021-09-14 08:45:35 --> Output Class Initialized
INFO - 2021-09-14 08:45:35 --> Security Class Initialized
DEBUG - 2021-09-14 08:45:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 08:45:35 --> Input Class Initialized
INFO - 2021-09-14 08:45:35 --> Language Class Initialized
INFO - 2021-09-14 08:45:35 --> Loader Class Initialized
INFO - 2021-09-14 08:45:35 --> Helper loaded: html_helper
INFO - 2021-09-14 08:45:35 --> Helper loaded: url_helper
INFO - 2021-09-14 08:45:35 --> Helper loaded: form_helper
INFO - 2021-09-14 08:45:35 --> Helper loaded: file_helper
DEBUG - 2021-09-14 08:45:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 08:45:35 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 08:45:35 --> Database Driver Class Initialized
DEBUG - 2021-09-14 08:45:35 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 08:45:35 --> Form Validation Class Initialized
INFO - 2021-09-14 08:45:35 --> Controller Class Initialized
INFO - 2021-09-14 08:45:35 --> User Agent Class Initialized
DEBUG - 2021-09-14 08:45:35 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 08:45:35 --> Helper loaded: inflector_helper
INFO - 2021-09-14 08:45:35 --> Helper loaded: cookie_helper
INFO - 2021-09-14 08:45:35 --> Model "Login_model" initialized
INFO - 2021-09-14 08:45:35 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\login_view.php
INFO - 2021-09-14 08:45:35 --> Final output sent to browser
DEBUG - 2021-09-14 08:45:35 --> Total execution time: 0.0432
INFO - 2021-09-14 08:45:43 --> Config Class Initialized
INFO - 2021-09-14 08:45:43 --> Hooks Class Initialized
DEBUG - 2021-09-14 08:45:43 --> UTF-8 Support Enabled
INFO - 2021-09-14 08:45:43 --> Utf8 Class Initialized
INFO - 2021-09-14 08:45:43 --> URI Class Initialized
INFO - 2021-09-14 08:45:43 --> Router Class Initialized
INFO - 2021-09-14 08:45:43 --> Output Class Initialized
INFO - 2021-09-14 08:45:43 --> Security Class Initialized
DEBUG - 2021-09-14 08:45:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 08:45:43 --> Input Class Initialized
INFO - 2021-09-14 08:45:43 --> Language Class Initialized
INFO - 2021-09-14 08:45:43 --> Loader Class Initialized
INFO - 2021-09-14 08:45:43 --> Helper loaded: html_helper
INFO - 2021-09-14 08:45:43 --> Helper loaded: url_helper
INFO - 2021-09-14 08:45:43 --> Helper loaded: form_helper
INFO - 2021-09-14 08:45:43 --> Helper loaded: file_helper
DEBUG - 2021-09-14 08:45:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 08:45:43 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 08:45:43 --> Database Driver Class Initialized
DEBUG - 2021-09-14 08:45:43 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 08:45:43 --> Form Validation Class Initialized
INFO - 2021-09-14 08:45:43 --> Controller Class Initialized
INFO - 2021-09-14 08:45:43 --> User Agent Class Initialized
DEBUG - 2021-09-14 08:45:43 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 08:45:43 --> Helper loaded: inflector_helper
INFO - 2021-09-14 08:45:43 --> Helper loaded: cookie_helper
INFO - 2021-09-14 08:45:43 --> Model "Login_model" initialized
INFO - 2021-09-14 08:45:43 --> Config Class Initialized
INFO - 2021-09-14 08:45:43 --> Hooks Class Initialized
DEBUG - 2021-09-14 08:45:43 --> UTF-8 Support Enabled
INFO - 2021-09-14 08:45:43 --> Utf8 Class Initialized
INFO - 2021-09-14 08:45:43 --> URI Class Initialized
INFO - 2021-09-14 08:45:43 --> Router Class Initialized
INFO - 2021-09-14 08:45:43 --> Output Class Initialized
INFO - 2021-09-14 08:45:43 --> Security Class Initialized
DEBUG - 2021-09-14 08:45:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 08:45:43 --> Input Class Initialized
INFO - 2021-09-14 08:45:43 --> Language Class Initialized
INFO - 2021-09-14 08:45:43 --> Loader Class Initialized
INFO - 2021-09-14 08:45:43 --> Helper loaded: html_helper
INFO - 2021-09-14 08:45:43 --> Helper loaded: url_helper
INFO - 2021-09-14 08:45:43 --> Helper loaded: form_helper
INFO - 2021-09-14 08:45:43 --> Helper loaded: file_helper
DEBUG - 2021-09-14 08:45:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 08:45:43 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 08:45:43 --> Database Driver Class Initialized
DEBUG - 2021-09-14 08:45:43 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 08:45:43 --> Form Validation Class Initialized
INFO - 2021-09-14 08:45:43 --> Controller Class Initialized
DEBUG - 2021-09-14 08:45:43 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 08:45:43 --> Helper loaded: cookie_helper
INFO - 2021-09-14 08:45:43 --> User Agent Class Initialized
INFO - 2021-09-14 08:45:43 --> Helper loaded: ../../common/helpers/thai_date_helper
INFO - 2021-09-14 08:45:43 --> Helper loaded: ../../common/helpers/remote_file_exists_helper
INFO - 2021-09-14 08:45:43 --> Model "EvaluatePerson_model" initialized
INFO - 2021-09-14 08:45:43 --> Model "Evaluation_model" initialized
INFO - 2021-09-14 08:45:43 --> Model "Answer_model" initialized
INFO - 2021-09-14 08:45:43 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/header.php
INFO - 2021-09-14 08:45:43 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/navbar.php
INFO - 2021-09-14 08:45:43 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/sidebar.php
INFO - 2021-09-14 08:45:43 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/main_head.php
INFO - 2021-09-14 08:45:43 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php
INFO - 2021-09-14 08:45:43 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/footer.php
INFO - 2021-09-14 08:45:43 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/end.php
INFO - 2021-09-14 08:45:43 --> Final output sent to browser
DEBUG - 2021-09-14 08:45:43 --> Total execution time: 0.0419
INFO - 2021-09-14 09:31:39 --> Config Class Initialized
INFO - 2021-09-14 09:31:39 --> Hooks Class Initialized
DEBUG - 2021-09-14 09:31:39 --> UTF-8 Support Enabled
INFO - 2021-09-14 09:31:39 --> Utf8 Class Initialized
INFO - 2021-09-14 09:31:39 --> URI Class Initialized
INFO - 2021-09-14 09:31:39 --> Router Class Initialized
INFO - 2021-09-14 09:31:39 --> Output Class Initialized
INFO - 2021-09-14 09:31:39 --> Security Class Initialized
DEBUG - 2021-09-14 09:31:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 09:31:39 --> Input Class Initialized
INFO - 2021-09-14 09:31:39 --> Language Class Initialized
INFO - 2021-09-14 09:31:39 --> Loader Class Initialized
INFO - 2021-09-14 09:31:39 --> Helper loaded: html_helper
INFO - 2021-09-14 09:31:39 --> Helper loaded: url_helper
INFO - 2021-09-14 09:31:39 --> Helper loaded: form_helper
INFO - 2021-09-14 09:31:39 --> Helper loaded: file_helper
DEBUG - 2021-09-14 09:31:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 09:31:40 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 09:31:40 --> Database Driver Class Initialized
DEBUG - 2021-09-14 09:31:40 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 09:31:40 --> Form Validation Class Initialized
INFO - 2021-09-14 09:31:40 --> Controller Class Initialized
DEBUG - 2021-09-14 09:31:40 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 09:31:40 --> Helper loaded: cookie_helper
INFO - 2021-09-14 09:31:40 --> User Agent Class Initialized
INFO - 2021-09-14 09:31:40 --> Helper loaded: ../../common/helpers/thai_date_helper
INFO - 2021-09-14 09:31:40 --> Helper loaded: ../../common/helpers/remote_file_exists_helper
ERROR - 2021-09-14 09:31:40 --> Severity: error --> Exception: Unable to locate the model you have specified: EvaluatePerson_model D:\xampp\htdocs\cmex_system\system\core\Loader.php 348
ERROR - 2021-09-14 09:31:40 --> Severity: Warning --> include(D:\xampp\htdocs\cmex_system\ethic\application\views\errors\html\error_exception.php): Failed to open stream: No such file or directory D:\xampp\htdocs\cmex_system\system\core\Exceptions.php 219
ERROR - 2021-09-14 09:31:40 --> Severity: Warning --> include(): Failed opening 'D:\xampp\htdocs\cmex_system\ethic\application\views\errors\html\error_exception.php' for inclusion (include_path='D:\xampp\php\PEAR') D:\xampp\htdocs\cmex_system\system\core\Exceptions.php 219
INFO - 2021-09-14 09:34:55 --> Config Class Initialized
INFO - 2021-09-14 09:34:55 --> Hooks Class Initialized
DEBUG - 2021-09-14 09:34:55 --> UTF-8 Support Enabled
INFO - 2021-09-14 09:34:55 --> Utf8 Class Initialized
INFO - 2021-09-14 09:34:55 --> URI Class Initialized
INFO - 2021-09-14 09:34:55 --> Router Class Initialized
INFO - 2021-09-14 09:34:55 --> Output Class Initialized
INFO - 2021-09-14 09:34:55 --> Security Class Initialized
DEBUG - 2021-09-14 09:34:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 09:34:55 --> Input Class Initialized
INFO - 2021-09-14 09:34:55 --> Language Class Initialized
INFO - 2021-09-14 09:34:55 --> Loader Class Initialized
INFO - 2021-09-14 09:34:55 --> Helper loaded: html_helper
INFO - 2021-09-14 09:34:55 --> Helper loaded: url_helper
INFO - 2021-09-14 09:34:55 --> Helper loaded: form_helper
INFO - 2021-09-14 09:34:55 --> Helper loaded: file_helper
DEBUG - 2021-09-14 09:34:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 09:34:55 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 09:34:55 --> Database Driver Class Initialized
DEBUG - 2021-09-14 09:34:55 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 09:34:55 --> Form Validation Class Initialized
INFO - 2021-09-14 09:34:55 --> Controller Class Initialized
DEBUG - 2021-09-14 09:34:55 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 09:34:55 --> Helper loaded: cookie_helper
INFO - 2021-09-14 09:34:55 --> User Agent Class Initialized
INFO - 2021-09-14 09:34:55 --> Helper loaded: ../../common/helpers/thai_date_helper
INFO - 2021-09-14 09:34:55 --> Helper loaded: ../../common/helpers/remote_file_exists_helper
ERROR - 2021-09-14 09:34:55 --> Severity: error --> Exception: D:\xampp\htdocs\cmex_system\ethic\application\models/EvaluaterPerson_model.php exists, but doesn't declare class EvaluaterPerson_model D:\xampp\htdocs\cmex_system\system\core\Loader.php 340
ERROR - 2021-09-14 09:34:55 --> Severity: Warning --> include(D:\xampp\htdocs\cmex_system\ethic\application\views\errors\html\error_exception.php): Failed to open stream: No such file or directory D:\xampp\htdocs\cmex_system\system\core\Exceptions.php 219
ERROR - 2021-09-14 09:34:55 --> Severity: Warning --> include(): Failed opening 'D:\xampp\htdocs\cmex_system\ethic\application\views\errors\html\error_exception.php' for inclusion (include_path='D:\xampp\php\PEAR') D:\xampp\htdocs\cmex_system\system\core\Exceptions.php 219
INFO - 2021-09-14 09:35:00 --> Config Class Initialized
INFO - 2021-09-14 09:35:00 --> Hooks Class Initialized
DEBUG - 2021-09-14 09:35:00 --> UTF-8 Support Enabled
INFO - 2021-09-14 09:35:00 --> Utf8 Class Initialized
INFO - 2021-09-14 09:35:00 --> URI Class Initialized
INFO - 2021-09-14 09:35:00 --> Router Class Initialized
INFO - 2021-09-14 09:35:00 --> Output Class Initialized
INFO - 2021-09-14 09:35:00 --> Security Class Initialized
DEBUG - 2021-09-14 09:35:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 09:35:00 --> Input Class Initialized
INFO - 2021-09-14 09:35:00 --> Language Class Initialized
INFO - 2021-09-14 09:35:00 --> Loader Class Initialized
INFO - 2021-09-14 09:35:00 --> Helper loaded: html_helper
INFO - 2021-09-14 09:35:00 --> Helper loaded: url_helper
INFO - 2021-09-14 09:35:00 --> Helper loaded: form_helper
INFO - 2021-09-14 09:35:00 --> Helper loaded: file_helper
DEBUG - 2021-09-14 09:35:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 09:35:00 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 09:35:00 --> Database Driver Class Initialized
DEBUG - 2021-09-14 09:35:00 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 09:35:00 --> Form Validation Class Initialized
INFO - 2021-09-14 09:35:00 --> Controller Class Initialized
DEBUG - 2021-09-14 09:35:00 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 09:35:00 --> Helper loaded: cookie_helper
INFO - 2021-09-14 09:35:00 --> User Agent Class Initialized
INFO - 2021-09-14 09:35:00 --> Helper loaded: ../../common/helpers/thai_date_helper
INFO - 2021-09-14 09:35:00 --> Helper loaded: ../../common/helpers/remote_file_exists_helper
ERROR - 2021-09-14 09:35:00 --> Severity: error --> Exception: D:\xampp\htdocs\cmex_system\ethic\application\models/EvaluaterPerson_model.php exists, but doesn't declare class EvaluaterPerson_model D:\xampp\htdocs\cmex_system\system\core\Loader.php 340
ERROR - 2021-09-14 09:35:00 --> Severity: Warning --> include(D:\xampp\htdocs\cmex_system\ethic\application\views\errors\html\error_exception.php): Failed to open stream: No such file or directory D:\xampp\htdocs\cmex_system\system\core\Exceptions.php 219
ERROR - 2021-09-14 09:35:00 --> Severity: Warning --> include(): Failed opening 'D:\xampp\htdocs\cmex_system\ethic\application\views\errors\html\error_exception.php' for inclusion (include_path='D:\xampp\php\PEAR') D:\xampp\htdocs\cmex_system\system\core\Exceptions.php 219
INFO - 2021-09-14 09:36:21 --> Config Class Initialized
INFO - 2021-09-14 09:36:21 --> Hooks Class Initialized
DEBUG - 2021-09-14 09:36:21 --> UTF-8 Support Enabled
INFO - 2021-09-14 09:36:21 --> Utf8 Class Initialized
INFO - 2021-09-14 09:36:21 --> URI Class Initialized
INFO - 2021-09-14 09:36:21 --> Router Class Initialized
INFO - 2021-09-14 09:36:21 --> Output Class Initialized
INFO - 2021-09-14 09:36:21 --> Security Class Initialized
DEBUG - 2021-09-14 09:36:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 09:36:21 --> Input Class Initialized
INFO - 2021-09-14 09:36:21 --> Language Class Initialized
INFO - 2021-09-14 09:36:21 --> Loader Class Initialized
INFO - 2021-09-14 09:36:21 --> Helper loaded: html_helper
INFO - 2021-09-14 09:36:21 --> Helper loaded: url_helper
INFO - 2021-09-14 09:36:21 --> Helper loaded: form_helper
INFO - 2021-09-14 09:36:21 --> Helper loaded: file_helper
DEBUG - 2021-09-14 09:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 09:36:21 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 09:36:21 --> Database Driver Class Initialized
DEBUG - 2021-09-14 09:36:21 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 09:36:21 --> Form Validation Class Initialized
INFO - 2021-09-14 09:36:21 --> Controller Class Initialized
DEBUG - 2021-09-14 09:36:21 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 09:36:21 --> Helper loaded: cookie_helper
INFO - 2021-09-14 09:36:21 --> User Agent Class Initialized
INFO - 2021-09-14 09:36:21 --> Helper loaded: ../../common/helpers/thai_date_helper
INFO - 2021-09-14 09:36:21 --> Helper loaded: ../../common/helpers/remote_file_exists_helper
INFO - 2021-09-14 09:36:21 --> Model "EvaluaterPerson_model" initialized
INFO - 2021-09-14 09:36:21 --> Model "Evaluation_model" initialized
INFO - 2021-09-14 09:36:21 --> Model "Answer_model" initialized
INFO - 2021-09-14 09:36:21 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/header.php
INFO - 2021-09-14 09:36:21 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/navbar.php
INFO - 2021-09-14 09:36:21 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/sidebar.php
INFO - 2021-09-14 09:36:21 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/main_head.php
INFO - 2021-09-14 09:36:21 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php
INFO - 2021-09-14 09:36:21 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/footer.php
INFO - 2021-09-14 09:36:21 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/end.php
INFO - 2021-09-14 09:36:21 --> Final output sent to browser
DEBUG - 2021-09-14 09:36:21 --> Total execution time: 0.1073
INFO - 2021-09-14 09:39:49 --> Config Class Initialized
INFO - 2021-09-14 09:39:49 --> Hooks Class Initialized
DEBUG - 2021-09-14 09:39:49 --> UTF-8 Support Enabled
INFO - 2021-09-14 09:39:49 --> Utf8 Class Initialized
INFO - 2021-09-14 09:39:49 --> URI Class Initialized
INFO - 2021-09-14 09:39:49 --> Router Class Initialized
INFO - 2021-09-14 09:39:49 --> Output Class Initialized
INFO - 2021-09-14 09:39:49 --> Security Class Initialized
DEBUG - 2021-09-14 09:39:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 09:39:49 --> Input Class Initialized
INFO - 2021-09-14 09:39:49 --> Language Class Initialized
INFO - 2021-09-14 09:39:49 --> Loader Class Initialized
INFO - 2021-09-14 09:39:49 --> Helper loaded: html_helper
INFO - 2021-09-14 09:39:49 --> Helper loaded: url_helper
INFO - 2021-09-14 09:39:49 --> Helper loaded: form_helper
INFO - 2021-09-14 09:39:49 --> Helper loaded: file_helper
DEBUG - 2021-09-14 09:39:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 09:39:49 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 09:39:49 --> Database Driver Class Initialized
DEBUG - 2021-09-14 09:39:49 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 09:39:49 --> Form Validation Class Initialized
INFO - 2021-09-14 09:39:49 --> Controller Class Initialized
DEBUG - 2021-09-14 09:39:49 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 09:39:49 --> Helper loaded: cookie_helper
INFO - 2021-09-14 09:39:49 --> User Agent Class Initialized
INFO - 2021-09-14 09:39:49 --> Helper loaded: ../../common/helpers/thai_date_helper
INFO - 2021-09-14 09:39:49 --> Helper loaded: ../../common/helpers/remote_file_exists_helper
INFO - 2021-09-14 09:39:49 --> Model "EvaluaterPerson_model" initialized
INFO - 2021-09-14 09:39:49 --> Model "Evaluation_model" initialized
INFO - 2021-09-14 09:39:49 --> Model "Answer_model" initialized
INFO - 2021-09-14 09:39:49 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/header.php
INFO - 2021-09-14 09:39:49 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/navbar.php
INFO - 2021-09-14 09:39:49 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/sidebar.php
INFO - 2021-09-14 09:39:49 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/main_head.php
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
ERROR - 2021-09-14 09:39:49 --> Severity: Warning --> Undefined property: stdClass::$id D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php 21
INFO - 2021-09-14 09:39:49 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php
INFO - 2021-09-14 09:39:49 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/footer.php
INFO - 2021-09-14 09:39:49 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/end.php
INFO - 2021-09-14 09:39:49 --> Final output sent to browser
DEBUG - 2021-09-14 09:39:49 --> Total execution time: 0.0325
INFO - 2021-09-14 09:40:00 --> Config Class Initialized
INFO - 2021-09-14 09:40:00 --> Hooks Class Initialized
DEBUG - 2021-09-14 09:40:00 --> UTF-8 Support Enabled
INFO - 2021-09-14 09:40:00 --> Utf8 Class Initialized
INFO - 2021-09-14 09:40:00 --> URI Class Initialized
INFO - 2021-09-14 09:40:00 --> Router Class Initialized
INFO - 2021-09-14 09:40:00 --> Output Class Initialized
INFO - 2021-09-14 09:40:00 --> Security Class Initialized
DEBUG - 2021-09-14 09:40:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 09:40:00 --> Input Class Initialized
INFO - 2021-09-14 09:40:00 --> Language Class Initialized
INFO - 2021-09-14 09:40:00 --> Loader Class Initialized
INFO - 2021-09-14 09:40:00 --> Helper loaded: html_helper
INFO - 2021-09-14 09:40:00 --> Helper loaded: url_helper
INFO - 2021-09-14 09:40:00 --> Helper loaded: form_helper
INFO - 2021-09-14 09:40:00 --> Helper loaded: file_helper
DEBUG - 2021-09-14 09:40:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 09:40:00 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 09:40:00 --> Database Driver Class Initialized
DEBUG - 2021-09-14 09:40:00 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 09:40:00 --> Form Validation Class Initialized
INFO - 2021-09-14 09:40:00 --> Controller Class Initialized
DEBUG - 2021-09-14 09:40:00 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 09:40:00 --> Helper loaded: cookie_helper
INFO - 2021-09-14 09:40:00 --> User Agent Class Initialized
INFO - 2021-09-14 09:40:00 --> Helper loaded: ../../common/helpers/thai_date_helper
INFO - 2021-09-14 09:40:00 --> Helper loaded: ../../common/helpers/remote_file_exists_helper
INFO - 2021-09-14 09:40:00 --> Model "EvaluaterPerson_model" initialized
INFO - 2021-09-14 09:40:00 --> Model "Evaluation_model" initialized
INFO - 2021-09-14 09:40:00 --> Model "Answer_model" initialized
INFO - 2021-09-14 09:40:00 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/header.php
INFO - 2021-09-14 09:40:00 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/navbar.php
INFO - 2021-09-14 09:40:00 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/sidebar.php
INFO - 2021-09-14 09:40:00 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/main_head.php
INFO - 2021-09-14 09:40:00 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php
INFO - 2021-09-14 09:40:00 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/footer.php
INFO - 2021-09-14 09:40:00 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/end.php
INFO - 2021-09-14 09:40:00 --> Final output sent to browser
DEBUG - 2021-09-14 09:40:00 --> Total execution time: 0.0481
INFO - 2021-09-14 09:41:40 --> Config Class Initialized
INFO - 2021-09-14 09:41:40 --> Hooks Class Initialized
DEBUG - 2021-09-14 09:41:40 --> UTF-8 Support Enabled
INFO - 2021-09-14 09:41:40 --> Utf8 Class Initialized
INFO - 2021-09-14 09:41:40 --> URI Class Initialized
INFO - 2021-09-14 09:41:40 --> Router Class Initialized
INFO - 2021-09-14 09:41:40 --> Output Class Initialized
INFO - 2021-09-14 09:41:40 --> Security Class Initialized
DEBUG - 2021-09-14 09:41:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 09:41:40 --> Input Class Initialized
INFO - 2021-09-14 09:41:40 --> Language Class Initialized
INFO - 2021-09-14 09:41:40 --> Loader Class Initialized
INFO - 2021-09-14 09:41:40 --> Helper loaded: html_helper
INFO - 2021-09-14 09:41:40 --> Helper loaded: url_helper
INFO - 2021-09-14 09:41:40 --> Helper loaded: form_helper
INFO - 2021-09-14 09:41:40 --> Helper loaded: file_helper
DEBUG - 2021-09-14 09:41:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 09:41:40 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 09:41:40 --> Database Driver Class Initialized
DEBUG - 2021-09-14 09:41:40 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 09:41:40 --> Form Validation Class Initialized
INFO - 2021-09-14 09:41:40 --> Controller Class Initialized
DEBUG - 2021-09-14 09:41:40 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 09:41:40 --> Helper loaded: cookie_helper
INFO - 2021-09-14 09:41:40 --> User Agent Class Initialized
INFO - 2021-09-14 09:41:40 --> Helper loaded: ../../common/helpers/thai_date_helper
INFO - 2021-09-14 09:41:40 --> Helper loaded: ../../common/helpers/remote_file_exists_helper
INFO - 2021-09-14 09:41:40 --> Model "EvaluaterPerson_model" initialized
INFO - 2021-09-14 09:41:40 --> Model "Evaluation_model" initialized
INFO - 2021-09-14 09:41:40 --> Model "Answer_model" initialized
INFO - 2021-09-14 09:41:40 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/header.php
INFO - 2021-09-14 09:41:40 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/navbar.php
INFO - 2021-09-14 09:41:40 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/sidebar.php
INFO - 2021-09-14 09:41:40 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/main_head.php
INFO - 2021-09-14 09:41:40 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php
INFO - 2021-09-14 09:41:40 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/footer.php
INFO - 2021-09-14 09:41:40 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/end.php
INFO - 2021-09-14 09:41:40 --> Final output sent to browser
DEBUG - 2021-09-14 09:41:40 --> Total execution time: 0.0579
INFO - 2021-09-14 10:32:13 --> Config Class Initialized
INFO - 2021-09-14 10:32:13 --> Hooks Class Initialized
DEBUG - 2021-09-14 10:32:13 --> UTF-8 Support Enabled
INFO - 2021-09-14 10:32:13 --> Utf8 Class Initialized
INFO - 2021-09-14 10:32:13 --> URI Class Initialized
INFO - 2021-09-14 10:32:13 --> Router Class Initialized
INFO - 2021-09-14 10:32:13 --> Output Class Initialized
INFO - 2021-09-14 10:32:13 --> Security Class Initialized
DEBUG - 2021-09-14 10:32:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 10:32:13 --> Input Class Initialized
INFO - 2021-09-14 10:32:13 --> Language Class Initialized
INFO - 2021-09-14 10:32:13 --> Loader Class Initialized
INFO - 2021-09-14 10:32:13 --> Helper loaded: html_helper
INFO - 2021-09-14 10:32:13 --> Helper loaded: url_helper
INFO - 2021-09-14 10:32:13 --> Helper loaded: form_helper
INFO - 2021-09-14 10:32:13 --> Helper loaded: file_helper
DEBUG - 2021-09-14 10:32:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 10:32:13 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 10:32:13 --> Database Driver Class Initialized
DEBUG - 2021-09-14 10:32:13 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 10:32:13 --> Form Validation Class Initialized
INFO - 2021-09-14 10:32:13 --> Controller Class Initialized
DEBUG - 2021-09-14 10:32:13 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 10:32:13 --> Helper loaded: cookie_helper
INFO - 2021-09-14 10:32:13 --> User Agent Class Initialized
INFO - 2021-09-14 10:32:13 --> Helper loaded: ../../common/helpers/thai_date_helper
INFO - 2021-09-14 10:32:13 --> Helper loaded: ../../common/helpers/remote_file_exists_helper
INFO - 2021-09-14 10:32:13 --> Model "EvaluaterPerson_model" initialized
INFO - 2021-09-14 10:32:13 --> Model "Evaluation_model" initialized
INFO - 2021-09-14 10:32:13 --> Model "Answer_model" initialized
INFO - 2021-09-14 10:32:13 --> Config Class Initialized
INFO - 2021-09-14 10:32:13 --> Hooks Class Initialized
DEBUG - 2021-09-14 10:32:13 --> UTF-8 Support Enabled
INFO - 2021-09-14 10:32:13 --> Utf8 Class Initialized
INFO - 2021-09-14 10:32:13 --> URI Class Initialized
INFO - 2021-09-14 10:32:13 --> Router Class Initialized
INFO - 2021-09-14 10:32:13 --> Output Class Initialized
INFO - 2021-09-14 10:32:13 --> Security Class Initialized
DEBUG - 2021-09-14 10:32:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 10:32:13 --> Input Class Initialized
INFO - 2021-09-14 10:32:13 --> Language Class Initialized
INFO - 2021-09-14 10:32:13 --> Loader Class Initialized
INFO - 2021-09-14 10:32:13 --> Helper loaded: html_helper
INFO - 2021-09-14 10:32:13 --> Helper loaded: url_helper
INFO - 2021-09-14 10:32:13 --> Helper loaded: form_helper
INFO - 2021-09-14 10:32:13 --> Helper loaded: file_helper
DEBUG - 2021-09-14 10:32:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 10:32:13 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 10:32:13 --> Database Driver Class Initialized
DEBUG - 2021-09-14 10:32:13 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 10:32:13 --> Form Validation Class Initialized
INFO - 2021-09-14 10:32:13 --> Controller Class Initialized
DEBUG - 2021-09-14 10:32:13 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 10:32:13 --> Helper loaded: cookie_helper
INFO - 2021-09-14 10:32:13 --> User Agent Class Initialized
INFO - 2021-09-14 10:32:13 --> Helper loaded: ../../common/helpers/thai_date_helper
INFO - 2021-09-14 10:32:13 --> Helper loaded: ../../common/helpers/remote_file_exists_helper
INFO - 2021-09-14 10:32:13 --> Model "EvaluaterPerson_model" initialized
INFO - 2021-09-14 10:32:13 --> Model "Evaluation_model" initialized
INFO - 2021-09-14 10:32:13 --> Model "Answer_model" initialized
INFO - 2021-09-14 10:32:13 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/header.php
INFO - 2021-09-14 10:32:13 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/navbar.php
INFO - 2021-09-14 10:32:13 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/sidebar.php
INFO - 2021-09-14 10:32:13 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/main_head.php
INFO - 2021-09-14 10:32:13 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php
INFO - 2021-09-14 10:32:13 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/footer.php
INFO - 2021-09-14 10:32:13 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/end.php
INFO - 2021-09-14 10:32:13 --> Final output sent to browser
DEBUG - 2021-09-14 10:32:13 --> Total execution time: 0.0412
INFO - 2021-09-14 10:36:28 --> Config Class Initialized
INFO - 2021-09-14 10:36:28 --> Hooks Class Initialized
DEBUG - 2021-09-14 10:36:28 --> UTF-8 Support Enabled
INFO - 2021-09-14 10:36:28 --> Utf8 Class Initialized
INFO - 2021-09-14 10:36:28 --> URI Class Initialized
INFO - 2021-09-14 10:36:28 --> Router Class Initialized
INFO - 2021-09-14 10:36:28 --> Output Class Initialized
INFO - 2021-09-14 10:36:28 --> Security Class Initialized
DEBUG - 2021-09-14 10:36:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 10:36:28 --> Input Class Initialized
INFO - 2021-09-14 10:36:28 --> Language Class Initialized
INFO - 2021-09-14 10:36:28 --> Loader Class Initialized
INFO - 2021-09-14 10:36:28 --> Helper loaded: html_helper
INFO - 2021-09-14 10:36:28 --> Helper loaded: url_helper
INFO - 2021-09-14 10:36:28 --> Helper loaded: form_helper
INFO - 2021-09-14 10:36:28 --> Helper loaded: file_helper
DEBUG - 2021-09-14 10:36:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 10:36:28 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 10:36:28 --> Database Driver Class Initialized
DEBUG - 2021-09-14 10:36:28 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 10:36:28 --> Form Validation Class Initialized
INFO - 2021-09-14 10:36:28 --> Controller Class Initialized
DEBUG - 2021-09-14 10:36:28 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 10:36:28 --> Helper loaded: cookie_helper
INFO - 2021-09-14 10:36:28 --> User Agent Class Initialized
INFO - 2021-09-14 10:36:28 --> Helper loaded: ../../common/helpers/thai_date_helper
INFO - 2021-09-14 10:36:28 --> Helper loaded: ../../common/helpers/remote_file_exists_helper
INFO - 2021-09-14 10:36:28 --> Model "EvaluaterPerson_model" initialized
INFO - 2021-09-14 10:36:28 --> Model "Evaluation_model" initialized
INFO - 2021-09-14 10:36:28 --> Model "Answer_model" initialized
INFO - 2021-09-14 10:36:28 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/header.php
INFO - 2021-09-14 10:36:28 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/navbar.php
INFO - 2021-09-14 10:36:28 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/sidebar.php
INFO - 2021-09-14 10:36:28 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/main_head.php
INFO - 2021-09-14 10:36:28 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php
INFO - 2021-09-14 10:36:28 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/footer.php
INFO - 2021-09-14 10:36:28 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/end.php
INFO - 2021-09-14 10:36:28 --> Final output sent to browser
DEBUG - 2021-09-14 10:36:28 --> Total execution time: 0.0483
INFO - 2021-09-14 10:37:24 --> Config Class Initialized
INFO - 2021-09-14 10:37:24 --> Hooks Class Initialized
DEBUG - 2021-09-14 10:37:24 --> UTF-8 Support Enabled
INFO - 2021-09-14 10:37:24 --> Utf8 Class Initialized
INFO - 2021-09-14 10:37:24 --> URI Class Initialized
INFO - 2021-09-14 10:37:24 --> Router Class Initialized
INFO - 2021-09-14 10:37:24 --> Output Class Initialized
INFO - 2021-09-14 10:37:24 --> Security Class Initialized
DEBUG - 2021-09-14 10:37:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 10:37:24 --> Input Class Initialized
INFO - 2021-09-14 10:37:24 --> Language Class Initialized
INFO - 2021-09-14 10:37:24 --> Loader Class Initialized
INFO - 2021-09-14 10:37:24 --> Helper loaded: html_helper
INFO - 2021-09-14 10:37:24 --> Helper loaded: url_helper
INFO - 2021-09-14 10:37:24 --> Helper loaded: form_helper
INFO - 2021-09-14 10:37:24 --> Helper loaded: file_helper
DEBUG - 2021-09-14 10:37:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 10:37:24 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 10:37:24 --> Database Driver Class Initialized
DEBUG - 2021-09-14 10:37:24 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 10:37:24 --> Form Validation Class Initialized
INFO - 2021-09-14 10:37:24 --> Controller Class Initialized
DEBUG - 2021-09-14 10:37:24 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 10:37:24 --> Helper loaded: cookie_helper
INFO - 2021-09-14 10:37:24 --> User Agent Class Initialized
INFO - 2021-09-14 10:37:24 --> Helper loaded: ../../common/helpers/thai_date_helper
INFO - 2021-09-14 10:37:24 --> Helper loaded: ../../common/helpers/remote_file_exists_helper
INFO - 2021-09-14 10:37:24 --> Model "EvaluaterPerson_model" initialized
INFO - 2021-09-14 10:37:24 --> Model "Evaluation_model" initialized
INFO - 2021-09-14 10:37:24 --> Model "Answer_model" initialized
INFO - 2021-09-14 10:37:24 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/header.php
INFO - 2021-09-14 10:37:24 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/navbar.php
INFO - 2021-09-14 10:37:24 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/sidebar.php
INFO - 2021-09-14 10:37:24 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/main_head.php
INFO - 2021-09-14 10:37:24 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php
INFO - 2021-09-14 10:37:24 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/footer.php
INFO - 2021-09-14 10:37:24 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/end.php
INFO - 2021-09-14 10:37:24 --> Final output sent to browser
DEBUG - 2021-09-14 10:37:24 --> Total execution time: 0.0342
INFO - 2021-09-14 10:37:39 --> Config Class Initialized
INFO - 2021-09-14 10:37:39 --> Hooks Class Initialized
DEBUG - 2021-09-14 10:37:39 --> UTF-8 Support Enabled
INFO - 2021-09-14 10:37:39 --> Utf8 Class Initialized
INFO - 2021-09-14 10:37:39 --> URI Class Initialized
INFO - 2021-09-14 10:37:39 --> Router Class Initialized
INFO - 2021-09-14 10:37:39 --> Output Class Initialized
INFO - 2021-09-14 10:37:39 --> Security Class Initialized
DEBUG - 2021-09-14 10:37:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 10:37:39 --> Input Class Initialized
INFO - 2021-09-14 10:37:39 --> Language Class Initialized
INFO - 2021-09-14 10:37:39 --> Loader Class Initialized
INFO - 2021-09-14 10:37:39 --> Helper loaded: html_helper
INFO - 2021-09-14 10:37:39 --> Helper loaded: url_helper
INFO - 2021-09-14 10:37:39 --> Helper loaded: form_helper
INFO - 2021-09-14 10:37:39 --> Helper loaded: file_helper
DEBUG - 2021-09-14 10:37:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 10:37:39 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 10:37:39 --> Database Driver Class Initialized
DEBUG - 2021-09-14 10:37:39 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 10:37:39 --> Form Validation Class Initialized
INFO - 2021-09-14 10:37:39 --> Controller Class Initialized
DEBUG - 2021-09-14 10:37:39 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 10:37:39 --> Helper loaded: cookie_helper
INFO - 2021-09-14 10:37:39 --> User Agent Class Initialized
INFO - 2021-09-14 10:37:39 --> Helper loaded: ../../common/helpers/thai_date_helper
INFO - 2021-09-14 10:37:39 --> Helper loaded: ../../common/helpers/remote_file_exists_helper
INFO - 2021-09-14 10:37:39 --> Model "EvaluaterPerson_model" initialized
INFO - 2021-09-14 10:37:39 --> Model "Evaluation_model" initialized
INFO - 2021-09-14 10:37:39 --> Model "Answer_model" initialized
INFO - 2021-09-14 10:37:39 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/header.php
INFO - 2021-09-14 10:37:39 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/navbar.php
INFO - 2021-09-14 10:37:39 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/sidebar.php
INFO - 2021-09-14 10:37:39 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/main_head.php
INFO - 2021-09-14 10:37:39 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php
INFO - 2021-09-14 10:37:39 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/footer.php
INFO - 2021-09-14 10:37:39 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/end.php
INFO - 2021-09-14 10:37:39 --> Final output sent to browser
DEBUG - 2021-09-14 10:37:39 --> Total execution time: 0.0428
INFO - 2021-09-14 10:37:53 --> Config Class Initialized
INFO - 2021-09-14 10:37:53 --> Hooks Class Initialized
DEBUG - 2021-09-14 10:37:53 --> UTF-8 Support Enabled
INFO - 2021-09-14 10:37:53 --> Utf8 Class Initialized
INFO - 2021-09-14 10:37:53 --> URI Class Initialized
INFO - 2021-09-14 10:37:53 --> Router Class Initialized
INFO - 2021-09-14 10:37:53 --> Output Class Initialized
INFO - 2021-09-14 10:37:53 --> Security Class Initialized
DEBUG - 2021-09-14 10:37:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 10:37:53 --> Input Class Initialized
INFO - 2021-09-14 10:37:53 --> Language Class Initialized
INFO - 2021-09-14 10:37:53 --> Loader Class Initialized
INFO - 2021-09-14 10:37:53 --> Helper loaded: html_helper
INFO - 2021-09-14 10:37:53 --> Helper loaded: url_helper
INFO - 2021-09-14 10:37:53 --> Helper loaded: form_helper
INFO - 2021-09-14 10:37:53 --> Helper loaded: file_helper
DEBUG - 2021-09-14 10:37:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 10:37:53 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 10:37:53 --> Database Driver Class Initialized
DEBUG - 2021-09-14 10:37:53 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 10:37:53 --> Form Validation Class Initialized
INFO - 2021-09-14 10:37:53 --> Controller Class Initialized
DEBUG - 2021-09-14 10:37:53 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 10:37:53 --> Helper loaded: cookie_helper
INFO - 2021-09-14 10:37:53 --> User Agent Class Initialized
INFO - 2021-09-14 10:37:53 --> Helper loaded: ../../common/helpers/thai_date_helper
INFO - 2021-09-14 10:37:53 --> Helper loaded: ../../common/helpers/remote_file_exists_helper
INFO - 2021-09-14 10:37:53 --> Model "EvaluaterPerson_model" initialized
INFO - 2021-09-14 10:37:53 --> Model "Evaluation_model" initialized
INFO - 2021-09-14 10:37:53 --> Model "Answer_model" initialized
INFO - 2021-09-14 10:37:53 --> Config Class Initialized
INFO - 2021-09-14 10:37:53 --> Hooks Class Initialized
DEBUG - 2021-09-14 10:37:53 --> UTF-8 Support Enabled
INFO - 2021-09-14 10:37:53 --> Utf8 Class Initialized
INFO - 2021-09-14 10:37:53 --> URI Class Initialized
INFO - 2021-09-14 10:37:53 --> Router Class Initialized
INFO - 2021-09-14 10:37:53 --> Output Class Initialized
INFO - 2021-09-14 10:37:53 --> Security Class Initialized
DEBUG - 2021-09-14 10:37:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-14 10:37:53 --> Input Class Initialized
INFO - 2021-09-14 10:37:53 --> Language Class Initialized
INFO - 2021-09-14 10:37:53 --> Loader Class Initialized
INFO - 2021-09-14 10:37:53 --> Helper loaded: html_helper
INFO - 2021-09-14 10:37:53 --> Helper loaded: url_helper
INFO - 2021-09-14 10:37:53 --> Helper loaded: form_helper
INFO - 2021-09-14 10:37:53 --> Helper loaded: file_helper
DEBUG - 2021-09-14 10:37:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2021-09-14 10:37:53 --> Session: Class initialized using 'files' driver.
INFO - 2021-09-14 10:37:53 --> Database Driver Class Initialized
DEBUG - 2021-09-14 10:37:53 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 10:37:53 --> Form Validation Class Initialized
INFO - 2021-09-14 10:37:53 --> Controller Class Initialized
DEBUG - 2021-09-14 10:37:53 --> Session class already loaded. Second attempt ignored.
INFO - 2021-09-14 10:37:53 --> Helper loaded: cookie_helper
INFO - 2021-09-14 10:37:53 --> User Agent Class Initialized
INFO - 2021-09-14 10:37:53 --> Helper loaded: ../../common/helpers/thai_date_helper
INFO - 2021-09-14 10:37:53 --> Helper loaded: ../../common/helpers/remote_file_exists_helper
INFO - 2021-09-14 10:37:53 --> Model "EvaluaterPerson_model" initialized
INFO - 2021-09-14 10:37:53 --> Model "Evaluation_model" initialized
INFO - 2021-09-14 10:37:53 --> Model "Answer_model" initialized
INFO - 2021-09-14 10:37:53 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/header.php
INFO - 2021-09-14 10:37:53 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/navbar.php
INFO - 2021-09-14 10:37:53 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/sidebar.php
INFO - 2021-09-14 10:37:53 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/main_head.php
INFO - 2021-09-14 10:37:53 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\home_view.php
INFO - 2021-09-14 10:37:53 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/footer.php
INFO - 2021-09-14 10:37:53 --> File loaded: D:\xampp\htdocs\cmex_system\ethic\application\views\common/end.php
INFO - 2021-09-14 10:37:53 --> Final output sent to browser
DEBUG - 2021-09-14 10:37:53 --> Total execution time: 0.0223
