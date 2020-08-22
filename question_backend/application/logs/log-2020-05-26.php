<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-26 09:09:54 --> Query error: Table 'happy.question' doesn't exist - Invalid query: SELECT *
                    FROM question
                    WHERE deleted = 0
                    ORDER BY question.question_id
ERROR - 2020-05-26 09:09:54 --> Severity: error --> Exception: Call to a member function result() on bool D:\xampp\htdocs\multi\happy\application\models\Question_model.php 17
ERROR - 2020-05-26 09:24:07 --> Query error: Table 'happy.question' doesn't exist - Invalid query: SELECT *
                    FROM question
                    WHERE deleted = 0
                    ORDER BY question_id
ERROR - 2020-05-26 09:24:07 --> Severity: error --> Exception: Call to a member function result() on bool D:\xampp\htdocs\multi\happy\application\models\Question_model.php 17
ERROR - 2020-05-26 09:24:38 --> Query error: Table 'happy.question' doesn't exist - Invalid query: SELECT *
                    FROM question
                    WHERE deleted = 0 
                    ORDER BY question_id
ERROR - 2020-05-26 09:24:38 --> Severity: error --> Exception: Call to a member function result() on bool D:\xampp\htdocs\multi\happy\application\models\Question_model.php 17
ERROR - 2020-05-26 09:43:39 --> Query error: Column 'deleted' in where clause is ambiguous - Invalid query: SELECT * 
                    FROM questions q
                    JOIN form f ON q.form_id = f.form_id 
                    JOIN choices c ON q.from_choice_id = c.choice_id 
                    WHERE deleted = 0 
                    ORDER BY question_id
ERROR - 2020-05-26 09:43:39 --> Severity: error --> Exception: Call to a member function result() on bool D:\xampp\htdocs\multi\happy\application\models\Question_model.php 19
ERROR - 2020-05-26 10:05:15 --> Query error: Unknown column 'c.deleted' in 'where clause' - Invalid query: SELECT *
                    FROM choices c
                    JOIN questions q ON c.question_id = q.question_id
                    WHERE c.deleted = 0
                    ORDER BY c.choice_id
ERROR - 2020-05-26 10:05:15 --> Severity: error --> Exception: Call to a member function result() on bool D:\xampp\htdocs\multi\happy\application\models\Choice_model.php 18
ERROR - 2020-05-26 10:08:06 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-05-26 10:08:06 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-05-26 10:08:06 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-05-26 10:09:49 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-05-26 10:09:49 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-05-26 10:09:49 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-05-26 10:14:09 --> 404 Page Not Found: Document/myDocuments
