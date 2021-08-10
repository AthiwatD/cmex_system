<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

# define constant, serialize array 
define ("AUTHENTICATIONS", serialize (array ("ไม่มี", "token before", "token after", "location_before"))); 
define ("SATISFY_CATEGORIES", serialize (array ("ไม่มี", "N", "NDetail", "P", "PDetail", "Doctor", "Nurse", "all", "return"))); 
define ("CATEGORIES", serialize (array ("ไม่มี", "สิ่งแวดล้อมในการบริการ", "พฤติกรรมบริการ", "ระบบบริการ", "ภาพรวม")));

/*
|--------------------------------------------------------------------------
| //[Athiwat][22/06/2564][add constants bookonline status]
|--------------------------------------------------------------------------*/
define ("PUBLISH_STATUSES", serialize (array ("ด่วน","ด่วนมาก","ด่วนที่สุด")));

/*
|--------------------------------------------------------------------------
| [Athiwat][28/06/2564][add active user for this system]
| [Users : arintaya = ผอ.อรินทยา พรหมินธิกุล 61001 = แพรว กุลธิดา ,61018 พี่อธิป ,64027 อธิวัฒน์]
|--------------------------------------------------------------------------*/
define("ACTIVE_USERS",serialize(array("arintaya","61001","61018","64027")));

/*
|--------------------------------------------------------------------------
| //[Athiwat][30/06/2564][add constants max && min for php function substr]
|--------------------------------------------------------------------------*/
define ("SUBSTR_MAXIMUM", 200);
define ("SUBSTR_MINIMUM", 0);
define ("SUBSTR_FILETYPE", 4);
define ("CHA_UTF8","UTF-8");

/*
|--------------------------------------------------------------------------
| //[Athiwat][30/06/2564][add constants tooltip]
|--------------------------------------------------------------------------*/
define ("TT_READED","คุณอ่านแล้วเมื่อ");
define ("TT_NOTREAD","คุณยังไม่ได้อ่านประกาศนี้ ,คลิ๊กอ่านเลย!");

//[Athiwat][02/07/2564][add url path images employee.]
define("URL_IMG_EMP","http://excellent.med.cmu.ac.th/employee/images/person/");
define("PATH_IMG_EMP","../../employee/images/person/");
define("PATH_IMG_AVATAR","../../../assets/img/avatar.jpg");
define("PATH_IMG_PERSON","../common/assets/images/person_img.png");

//[Athiwat][02/07/2564][master data Hrcost project.]
define("IS_PJNAME","ระบบค่าใช้จ่ายฝ่ายบุคคล");
define("IS_PJNAME_DT","ค่าใช้จ่ายฝ่ายบุคคล");
define("IS_PJNAME_DETAIL","ฟอร์มคำนวณค่าใช้จ่ายฝ่ายบุคคล");
define("IS_PATHINDEX","Hrcost/index/");

//[Athiwat][19/07/2564][add constant salary fee.]
define("SLY_FREE",serialize(array("salary"=>"เงินเดือน",
							      "experience_fee"=>"ค่าประสบการณ์",
							      "license_fee"=>"ค่าใบประกอบวิชาชีพ",
							      "risk_fee"=>"ค่าความเสี่ยง",
							      "work_load_fee"=>"ค่าภาระงาน",
							      "position_fee"=>"ค่าตำแหน่ง",
							      "certificate_fee"=>"ค่าใบประกาศนียบัตร",
							      "tok_berk_fee"=>"เงินตกเบิก") ));

//[Athiwat][16/07/2564][Add btn group constant department.]
define("DEPARTMENTS_CMEX",serialize(array(
							    array(9,10900,"เก็บเงินศูนย์ฯ"),
							    array(18,10910,"นักแปล"),
							    array(17,10909,"เภสัชกรรม"),
							    array(12,10904,"บริการทั่วไป"),
							    array(11,10903,"การพยาบาลผู้ป่วยนอก"),
							    array(16,10908,"ปฏิบัติการกลาง(LAB)"),
							    array(14,10906,"ผู้ช่วยทางการแพทย์ ผู้ป่วยนอก"),
							    array(1,10100,"บัญชี"),
							    array(2,10200,"จัดซื้อ"),
							    array(3,10300,"ธุรการ"),
							    array(6,10600,"การเงิน"),
							    array(8,10800,"ซ่อมบำรุง"),
							    array(5,10500,"สารสนเทศ"),
							    array(15,10907,"ยานพาหนะ"),
							    array(19,10912,"พัฒนาคุณภาพ"),
							    array(4,10400,"ทรัพยากรมนุษย์"),
							    array(7,10700,"สำนักงานบริหาร(แพทย์)"),
							    array(13,10905,"การตลาดและประชาสัมพันธ์")) ));

define("DEPARTMENTS_GMC",serialize(array(array(35,30112,"แผนกแปล"),
						       array(37,30114,"เก็บเงินศูนย์ฯ"),
						       array(25,30100,"ธุรการ"),
						       array(30,30105,"แผนกเภสัชกรรม"),
						       array(36,30113,"แผนกยานพาหนะ"),
						       array(38,30115,"แผนกโภชนาการ"),
						       array(33,30109,"แผนกบริการทั่วไป"),
						       array(32,30107,"แผนกกายภาพบำบัด"),
						       array(27,30102,"การพยาบาลผู้ป่วยใน"),
						       array(26,30101,"การพยาบาลผู้ป่วยนอก"),
						       array(34,30110,"แผนกนักรังสีการแพทย์"),
						       array(28,30103,"ผู้ช่วยการแพทย์ ผู้ป่วยนอก"),
						       array(31,30106,"แผนกปฏิบัติการกลาง(LAB)"),
						       array(39,30116,"แผนกวิเคราะห์สุขภาพการนอนหลับ")) ));

define("DEPARTMENTS_TTCM",serialize(array(array(20,20100,"ธุรการ"),
							    array(24,20110,"บริการทั่วไป"),
							    array(22,20104,"แพทย์แผนจีน"),
							    array(21,20103,"แพทย์แผนไทย"),
							    array(23,20105,"ผู้ช่วยทางการแพทย์")) ));

define("DEPARTMENT_LASIK",serialize(array(array(41,40100,"ศูนย์ LASIK")) ));
define("DEPARTMENT_WH",serialize(array(array(43,70100,"ศูนย์ WH")) ));
define("DEPARTMENT_PCT",serialize(array(array(42,60100,"ศูนย์ PCC")) ));
define("DEPARTMENT_BABY",serialize(array(array(44,90000,"ศูนย์การแพทย์เพื่อการมีบุตร")) ));

//[Athiwat][21/07/2564][add constant Shcmenu.]
define("IS_SHCMENU","จัดการเมนูลัด");
define("IS_FORM_SHCMENU","ฟอร์มเมนูลัด");
