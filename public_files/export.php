
<?php  
include '../lib/common.php';
include '../lib/db.php';

define('CRLF', "\r\n");

// retrieve all events
// 检索所有事件
$query = sprintf('SELECT EVENT_NAME, UNIX_TIMESTAMP(EVENT_TSTAMP) AS EVENT_TSTAMP, NOTIFY FROM %sCALENDAR ORDER BY EVENT_TSTAMP ASC, EVENT_NAME ASC', DB_TBL_PREFIX);

echo $query;exit();

$result = mysql_query($query, $GLOBALS['DB']);

// generate iCalendar
// ob_start();
echo 'BEGIN:VCALENDAR'.CRLF;



?>