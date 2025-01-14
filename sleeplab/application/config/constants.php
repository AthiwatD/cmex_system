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

defined('PROJECT_NAME')      OR define("PROJECT_NAME", "ระบบจองคิวตรวจการนอนหลับ");
# define constant, serialize array 
define ("DOCTORS", serialize (array ("ธีรกร ธีรกิตติกุล", "นันทพร ตียพันธ์")));
define ("DOCTOR_USERS", serialize (array ("user136", "user160")));
define ("DOCTOR_COLORS", serialize (array ("#FF8357", "#4CB817")));
define ("OPERATION_ROOMS", serialize (array ("621", "622", "623", "A")));
define ("OPERATION_ROOM_COLORS", serialize (array ("#00c0ef", "#0073ef", "#0033b7","#FDC12A")));
define ("TEST_TYPES", serialize (array ("PSG-split night", "PSG-full night", "PSG-PAP titration", "WatchPAT admit", "Home sleep WatchPAT", "Multiple Sleep Latency Test", "Maintenance of Wakefulness Test")));
define ("APPOINTMENT_FROMS", serialize (array ("OPD GMC", "OPD CMEx", "OPD ศรีพัฒน์", "OPD no.21", "OPD มหาราชนครเชียงใหม่","IPD ศรีพัฒน์", "IPD มหาราชนครเชียงใหม่", "คลินิก")));
define ("CHANGE_REASONS", serialize (array ("ขอตรวจเร็วขึ้น", "economics", "illness/accident", "no caregiver", "ติดธุระ/ประชุม", "ไม่สะดวกการเดินทาง เดินทางต่างประเทศ/ต่างจังหวัด", "ไม่ให้ความร่วมมือ", "ห้องตรวจไม่ว่าง", "เครื่องชำรุด", "Covid-19","เสียชีวิต")));
define ("CHANNELS", serialize (array ("ป้าย", "สื่อออนไลน์ (เฟสบุ๊ค เว็บไซต์)", "เพื่อน/ญาติ แนะนำ", "แพทย์ส่งตรวจ")));
define ("SYMTOMS", serialize (array ("DM", "HT", "DLP", "CAD", "DCM", "Stroke", "Asthma", "COPD", "AR", "Dementia", "CKD")));
define ("ACTIVE_USERS", serialize (array ("61018", "59007", "63027", "60025", "60054", "60055","64023")));
define ("PRIORITY_USERS", serialize (array ("61018", "59007")));

define ("TIME_PERIOD", serialize (array ("8.00-16.00", "16.00-20.00","18.00-20.00", "20.00-08.00")));
define ("JOB_BY_TIME_PERIOD", serialize (array (
                                            array("นัดหมาย/ประสานงาน", "ธุรการ/งานแม่บ้าน"), // "8.00-16.00",
                                            array("Screening", "Downloading SD Card", "CPAP Compliant", "trouble shooting", "D/C", "เบิกจ่ายอุปกรณ์", "เก็บเอกสาร"), // "16.00-20.00",
                                            array("นัดหมาย/ประสานงาน", "ธุรการ/งานแม่บ้าน"), // "18.00-20.00", 
                                            "20.00-08.00")));
// define ("FRUITS", serialize (array ("apple", "cherry", "banana"))); 
// $my_fruits = unserialize (FRUITS);
// $fruits = json_decode (FRUITS); var_dump($fruits);