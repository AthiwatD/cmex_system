<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-10 05:37:30 --> Query error: Table 'happy_2.form' doesn't exist - Invalid query: SELECT *
                    FROM form f
                    JOIN department d ON f.department_id = d.department_id
                    ORDER BY f.form_id
ERROR - 2020-07-10 05:37:30 --> Severity: error --> Exception: Call to a member function result() on bool D:\xampp\htdocs\multi\happy\application\models\Form_model.php 17
ERROR - 2020-07-10 05:38:06 --> Query error: Table 'happy_2.form' doesn't exist - Invalid query: SELECT *
                    FROM form f
                    JOIN department d ON f.department_id = d.department_id
                    ORDER BY f.form_id
ERROR - 2020-07-10 05:38:06 --> Severity: error --> Exception: Call to a member function result() on bool D:\xampp\htdocs\multi\happy\application\models\Form_model.php 17
ERROR - 2020-07-10 05:38:11 --> Query error: Table 'happy_2.form' doesn't exist - Invalid query: SELECT *
                    FROM form f
                    JOIN department d ON f.department_id = d.department_id
                    ORDER BY f.form_id
ERROR - 2020-07-10 05:38:11 --> Severity: error --> Exception: Call to a member function result() on bool D:\xampp\htdocs\multi\happy\application\models\Form_model.php 17
ERROR - 2020-07-10 05:38:45 --> Query error: Table 'happy_2.form' doesn't exist - Invalid query: SELECT q.question_id, q.idx, q.question_name, q.question_sub_name, q.type, q.next_question_idx, q.from_choice_id, q.form_id, f.form_name, 
                        c.choice_id, c.choice_name, c.value, c.icon, c.text, c.label, c.category 
                    FROM questions q
                    JOIN form f ON q.form_id = f.form_id 
                    LEFT JOIN choices c ON q.from_choice_id = c.choice_id 
                    ORDER BY q.form_id, q.question_id
ERROR - 2020-07-10 05:38:45 --> Severity: error --> Exception: Call to a member function result() on bool D:\xampp\htdocs\multi\happy\application\models\Question_model.php 27
ERROR - 2020-07-10 05:39:48 --> 404 Page Not Found: Test%2015/index
ERROR - 2020-07-10 05:45:09 --> 404 Page Not Found: Test%2015/index
ERROR - 2020-07-10 05:57:02 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 05:57:02 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 05:57:02 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:03:22 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:03:22 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:03:22 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:04:16 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:04:16 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:04:16 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:21:23 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:21:23 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:21:23 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:46:17 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:46:17 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:46:17 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:50:36 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:50:36 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:50:36 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:51:18 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:51:18 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:51:18 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:58:05 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO questions
                                        VALUES ( '', '1', 'q1', 'q1', 'singleChoice', '2', '0', '19')
ERROR - 2020-07-10 06:58:05 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO questions
                                        VALUES ( '', '2', 'q2', 'q2', 'singleChoice', '0', '0', '19')
ERROR - 2020-07-10 06:58:05 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO choices
                                        VALUES ( '', '0', '0', 'c1', '1', '', '', '', '')
ERROR - 2020-07-10 06:58:05 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO choices
                                        VALUES ( '', '1', '0', 'c2', '2', '', '', '', '')
ERROR - 2020-07-10 06:58:08 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:58:08 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 06:58:08 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 07:59:19 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: UPDATE questions SET 
                        idx = '1',
                        question_name = 'ท่านรู้สึกอย่างไรเมื่อมาบริจาคโลหิตในวันนี้ qqqq',
                        question_sub_name = '',
                        type = 'singleChoiceWithIcon',
                        next_question_idx = '4',
                        from_choice_id = '',
                        form_id = '1'
                WHERE question_id = '1'
ERROR - 2020-07-10 08:03:28 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: UPDATE questions SET 
                        idx = '1',
                        question_name = 'ท่านรู้สึกอย่างไรเมื่อมาบริจาคโลหิตในวันนี้ 11111',
                        question_sub_name = '',
                        type = 'singleChoiceWithIcon',
                        next_question_idx = '4',
                        from_choice_id = '',
                        form_id = '1'
                WHERE question_id = '1'
ERROR - 2020-07-10 08:05:19 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: UPDATE questions SET 
                        idx = '1',
                        question_name = 'ท่านรู้สึกอย่างไรเมื่อมาบริจาคโลหิตในวันนี้ 11111',
                        question_sub_name = '',
                        type = 'singleChoiceWithIcon',
                        next_question_idx = '4',
                        from_choice_id = 'NULL',
                        form_id = '1'
                WHERE question_id = '1'
ERROR - 2020-07-10 08:05:38 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: UPDATE questions SET 
                        idx = '1',
                        question_name = 'ท่านรู้สึกอย่างไรเมื่อมาบริจาคโลหิตในวันนี้ 11111',
                        question_sub_name = '',
                        type = 'singleChoiceWithIcon',
                        next_question_idx = '4',
                        from_choice_id = 'NULL',
                        form_id = '1'
                WHERE question_id = '1'
ERROR - 2020-07-10 08:07:29 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: UPDATE questions SET 
                        idx = '1',
                        question_name = 'ท่านรู้สึกอย่างไรเมื่อมาบริจาคโลหิตในวันนี้ 111111',
                        question_sub_name = '',
                        type = 'singleChoiceWithIcon',
                        next_question_idx = '4',
                        from_choice_id = 'NULL',
                        form_id = '1'
                WHERE question_id = '1'
ERROR - 2020-07-10 08:07:51 --> 404 Page Not Found: %E0%B8%A1%E0%B8%B5%20icon/index
ERROR - 2020-07-10 08:13:32 --> 404 Page Not Found: %E0%B8%A1%E0%B8%B5%20icon/index
ERROR - 2020-07-10 08:14:06 --> 404 Page Not Found: %E0%B8%A1%E0%B8%B5%20icon/index
ERROR - 2020-07-10 08:14:33 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: INSERT INTO `questions` (`idx`, `question_name`, `question_sub_name`, `type`, `next_question_idx`, `from_choice_id`, `form_id`) VALUES ('1', 'q1', '', 'singleChoice', '', '', '1')
ERROR - 2020-07-10 08:16:34 --> 404 Page Not Found: %E0%B8%A1%E0%B8%B5%20icon/index
ERROR - 2020-07-10 08:21:31 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:21:31 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:21:31 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:23:04 --> 404 Page Not Found: %E0%B8%A1%E0%B8%B5%20icon/index
ERROR - 2020-07-10 08:23:10 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:23:10 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:23:10 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:25:04 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:25:04 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:25:04 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:29:20 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:29:20 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:29:20 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:29:30 --> 404 Page Not Found: Choice/%E0%B8%A1%E0%B8%B5%20icon
ERROR - 2020-07-10 08:29:35 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:29:35 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:29:35 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:29:39 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:29:39 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:29:39 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:29:46 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:29:46 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:29:46 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:29:51 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:29:51 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:29:51 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:29:53 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:29:53 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:29:53 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:31:07 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO questions
                                        VALUES ( '', '1', 'q1', '', 'singleChoice', '2', '0', '35')
ERROR - 2020-07-10 08:31:07 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO questions
                                        VALUES ( '', '2', 'q2', '', 'singleChoice', '3', '0', '35')
ERROR - 2020-07-10 08:31:07 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO questions
                                        VALUES ( '', '3', 'q3', '', 'singleChoice', '0', '0', '35')
ERROR - 2020-07-10 08:31:07 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO choices
                                        VALUES ( '', '0', '0', '1', '1', '', '', '', '0')
ERROR - 2020-07-10 08:31:07 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO choices
                                        VALUES ( '', '1', '0', '2', '2', '', '', '', '0')
ERROR - 2020-07-10 08:31:09 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:31:09 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:31:09 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:38:16 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:38:16 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:38:16 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:39:49 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: INSERT INTO `questions` (`idx`, `question_name`, `question_sub_name`, `type`, `next_question_idx`, `from_choice_id`, `form_id`) VALUES ('1', 'q1', '', 'singleChoice', 0, 0, '36')
ERROR - 2020-07-10 08:39:49 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: INSERT INTO `questions` (`idx`, `question_name`, `question_sub_name`, `type`, `next_question_idx`, `from_choice_id`, `form_id`) VALUES ('2', 'q2', '', 'singleChoice', 0, 0, '36')
ERROR - 2020-07-10 08:39:49 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: INSERT INTO `questions` (`idx`, `question_name`, `question_sub_name`, `type`, `next_question_idx`, `from_choice_id`, `form_id`) VALUES ('3', 'q3', '', 'singleChoice', 0, 0, '36')
ERROR - 2020-07-10 08:39:49 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`choices`, CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`)) - Invalid query: INSERT INTO `choices` (`question_id`, `choice_name`, `value`, `icon`, `text`, `label`, `category`) VALUES (0, '1', '1', '', '', '', '0')
ERROR - 2020-07-10 08:39:49 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`choices`, CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`)) - Invalid query: INSERT INTO `choices` (`question_id`, `choice_name`, `value`, `icon`, `text`, `label`, `category`) VALUES (0, '2', '2', '', '', '', '0')
ERROR - 2020-07-10 08:39:52 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:39:52 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:39:52 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:44:32 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:44:32 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:44:32 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:45:31 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: INSERT INTO `questions` (`idx`, `question_name`, `question_sub_name`, `type`, `next_question_idx`, `from_choice_id`, `form_id`) VALUES ('1', 'w1', '', 'singleChoice', '2', 0, '36')
ERROR - 2020-07-10 08:45:31 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: INSERT INTO `questions` (`idx`, `question_name`, `question_sub_name`, `type`, `next_question_idx`, `from_choice_id`, `form_id`) VALUES ('2', 'w2', '', 'singleChoice', '3', 0, '36')
ERROR - 2020-07-10 08:45:31 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: INSERT INTO `questions` (`idx`, `question_name`, `question_sub_name`, `type`, `next_question_idx`, `from_choice_id`, `form_id`) VALUES ('3', 'w3', '', 'singleChoice', '0', 0, '36')
ERROR - 2020-07-10 08:45:31 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`choices`, CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`)) - Invalid query: INSERT INTO `choices` (`question_id`, `choice_name`, `value`, `icon`, `text`, `label`, `category`) VALUES (0, 'e1', '', '', '', '', '0')
ERROR - 2020-07-10 08:45:31 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`choices`, CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`)) - Invalid query: INSERT INTO `choices` (`question_id`, `choice_name`, `value`, `icon`, `text`, `label`, `category`) VALUES (0, 'e2', '', '', '', '', '0')
ERROR - 2020-07-10 08:45:34 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:45:34 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:45:34 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:53:18 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:53:18 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:53:18 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:54:07 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO questions (idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '1', 'w1', '', 'singleChoice', '2', '0', '36')
ERROR - 2020-07-10 08:54:07 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO questions (idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '2', 'w2', '', 'singleChoice', '0', '0', '36')
ERROR - 2020-07-10 08:54:07 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO choices (id, question_id, choice_name, value, icon, text, label, category)
                                        VALUES ( '', '0', '0', 'e1', '', '', '', '', '0')
ERROR - 2020-07-10 08:54:07 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO choices (id, question_id, choice_name, value, icon, text, label, category)
                                        VALUES ( '', '1', '0', 'e2', '', '', '', '', '0')
ERROR - 2020-07-10 08:54:09 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:54:09 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:54:09 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:55:41 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:55:41 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:55:41 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:56:41 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO questions (idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '1', 'w1', '', 'singleChoice', '2', '0', '36')
ERROR - 2020-07-10 08:56:41 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO questions (idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '2', 'w2', '', '', '0', '0', '36')
ERROR - 2020-07-10 08:56:41 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO choices (id, question_id, choice_name, value, icon, text, label, category)
                                        VALUES ( '', '0', '0', 'w1', '', '', '', '', '0')
ERROR - 2020-07-10 08:56:41 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO choices (id, question_id, choice_name, value, icon, text, label, category)
                                        VALUES ( '', '1', '0', 'w2', '', '', '', '', '0')
ERROR - 2020-07-10 08:57:29 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:57:29 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:57:29 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 08:58:19 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO questions (idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '1', 'q1', '', '', '2', '0', '36')
ERROR - 2020-07-10 08:58:19 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO questions (idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '2', 'q2', '', '', '0', '0', '36')
ERROR - 2020-07-10 09:00:23 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:00:23 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:00:23 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:01:31 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO questions (idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '1', 'w1', '', 'singleChoice', '2', '0', '36')
ERROR - 2020-07-10 09:01:31 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO questions (idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '2', 'w2', '', '', '0', '0', '36')
ERROR - 2020-07-10 09:01:36 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:01:36 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:01:36 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:06:13 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO questions (idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '1', 'q1', '', '', '2', '0', '36')
ERROR - 2020-07-10 09:06:13 --> Query error: Column count doesn't match value count at row 1 - Invalid query: INSERT INTO questions (idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '2', 'q2', '', '', '0', '0', '36')
ERROR - 2020-07-10 09:08:09 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:08:09 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:08:09 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:08:52 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: INSERT INTO questions (question_id, idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '1', 'w1', '', 'singleChoice', '2', '0', '36')
ERROR - 2020-07-10 09:08:52 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: INSERT INTO questions (question_id, idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '2', 'w2', '', 'singleChoice', '0', '0', '36')
ERROR - 2020-07-10 09:08:52 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`choices`, CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`)) - Invalid query: INSERT INTO choices (choice_id, id, question_id, choice_name, value, icon, text, label, category)
                                        VALUES ( '', '0', '0', 'w1', '', '', '', '', '0')
ERROR - 2020-07-10 09:08:52 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`choices`, CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`)) - Invalid query: INSERT INTO choices (choice_id, id, question_id, choice_name, value, icon, text, label, category)
                                        VALUES ( '', '1', '0', 'w2', '', '', '', '', '0')
ERROR - 2020-07-10 09:12:26 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:12:26 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:12:26 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:12:29 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:12:29 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:12:29 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:13:05 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: INSERT INTO questions (question_id, idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '1', 'q1', '', 'singleChoice', '2', '', '36')
ERROR - 2020-07-10 09:13:05 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: INSERT INTO questions (question_id, idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '2', 'q2', '', 'singleChoice', '3', '', '36')
ERROR - 2020-07-10 09:13:05 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: INSERT INTO questions (question_id, idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '3', 'q3', '', 'singleChoice', '0', '', '36')
ERROR - 2020-07-10 09:13:05 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`choices`, CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`)) - Invalid query: INSERT INTO choices (choice_id, id, question_id, choice_name, value, icon, text, label, category)
                                        VALUES ( '', '0', '0', 'q1', '', '', '', '', '0')
ERROR - 2020-07-10 09:13:05 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`choices`, CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`)) - Invalid query: INSERT INTO choices (choice_id, id, question_id, choice_name, value, icon, text, label, category)
                                        VALUES ( '', '1', '0', 'q1', '', '', '', '', '0')
ERROR - 2020-07-10 09:13:07 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:13:07 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:13:07 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:13:43 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:13:43 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:13:43 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:14:12 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: INSERT INTO questions (question_id, idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '1', 'q1', '', 'singleChoice', '2', '', '36')
ERROR - 2020-07-10 09:14:12 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`questions`, CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`from_choice_id`) REFERENCES `choices` (`choice_id`)) - Invalid query: INSERT INTO questions (question_id, idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '2', 'q2', '', '', '0', '', '36')
ERROR - 2020-07-10 09:14:12 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`choices`, CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`)) - Invalid query: INSERT INTO choices (choice_id, id, question_id, choice_name, value, icon, text, label, category)
                                        VALUES ( '', '0', '0', 'q1', '', '', '', '', '0')
ERROR - 2020-07-10 09:14:12 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`choices`, CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`)) - Invalid query: INSERT INTO choices (choice_id, id, question_id, choice_name, value, icon, text, label, category)
                                        VALUES ( '', '1', '0', 'q2', '', '', '', '', '0')
ERROR - 2020-07-10 09:19:43 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:19:43 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:19:43 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:20:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '36')' at line 2 - Invalid query: INSERT INTO questions (question_id, idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '1', 'q1', '', 'singleChoice', '2',  NULL, ', '36')
ERROR - 2020-07-10 09:20:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '36')' at line 2 - Invalid query: INSERT INTO questions (question_id, idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '2', 'q2', '', 'singleChoice', '0',  NULL, ', '36')
ERROR - 2020-07-10 09:20:07 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`choices`, CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`)) - Invalid query: INSERT INTO choices (choice_id, id, question_id, choice_name, value, icon, text, label, category)
                                        VALUES ( '', '0', '0', 'q1', '', '', '', '', '0')
ERROR - 2020-07-10 09:20:07 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`choices`, CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`)) - Invalid query: INSERT INTO choices (choice_id, id, question_id, choice_name, value, icon, text, label, category)
                                        VALUES ( '', '1', '0', 'q2', '', '', '', '', '0')
ERROR - 2020-07-10 09:21:24 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:21:24 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:21:24 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:21:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '')' at line 2 - Invalid query: INSERT INTO questions (question_id, idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '1', 'q1', '', 'singleChoice', '2',  NULL, 36')
ERROR - 2020-07-10 09:21:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '')' at line 2 - Invalid query: INSERT INTO questions (question_id, idx, question_name, question_sub_name, type, next_question_idx, from_choice_id, form_id)
                                        VALUES ( '', '2', 'q2', '', 'singleChoice', '0',  NULL, 36')
ERROR - 2020-07-10 09:21:48 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`choices`, CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`)) - Invalid query: INSERT INTO choices (choice_id, id, question_id, choice_name, value, icon, text, label, category)
                                        VALUES ( '', '0', '0', 'q1', '', '', '', '', '0')
ERROR - 2020-07-10 09:21:48 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`happinometer`.`choices`, CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`)) - Invalid query: INSERT INTO choices (choice_id, id, question_id, choice_name, value, icon, text, label, category)
                                        VALUES ( '', '1', '0', 'q2', '', '', '', '', '0')
ERROR - 2020-07-10 09:22:42 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:22:42 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:22:42 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:23:50 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:23:50 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:23:50 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:24:35 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:24:35 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:24:35 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:25:35 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:25:35 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:25:35 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:25:37 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:25:37 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:25:37 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:25:40 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:25:40 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:25:40 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:25:43 --> 404 Page Not Found: %E0%B8%A1%E0%B8%B5%20icon/index
ERROR - 2020-07-10 09:25:47 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:25:47 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:25:47 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:59:11 --> 404 Page Not Found: %E0%B8%A1%E0%B8%B5%20icon/index
ERROR - 2020-07-10 09:59:13 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:59:13 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 09:59:13 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 10:00:08 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 10:00:08 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 10:00:08 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 10:00:24 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 10:00:24 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 10:00:24 --> 404 Page Not Found: Assets/vendor
ERROR - 2020-07-10 10:04:54 --> 404 Page Not Found: %E0%B8%A1%E0%B8%B5%20icon/index
