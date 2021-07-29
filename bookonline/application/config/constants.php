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
| [Users : 59043 = พี่.วัชรี ,63002	พี่เพียรทิพย์ ,61018 พี่อธิป ,64027 อธิวัฒน์]
|--------------------------------------------------------------------------*/
define("ACTIVE_USERS",serialize(array("59043","63002","61018","64027")));

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

//[Athiwat][02/07/2564][add url path images employee]
define("URL_IMG_EMP","http://excellent.med.cmu.ac.th/employee/images/person/");
define("PATH_IMG_EMP","../../employee/images/person/");
define("PATH_IMG_AVATAR","../../../assets/img/avatar.jpg");
define("PATH_IMG_PERSON","../common/assets/images/person_img.png");