<?php
$time = time();
//$actual_time = date('H:i:s',$time);
//$actual_time = date('D M Y',$time);
//$actual_time = date('d/m/Y',$time);
$actual_time = date(' D M Y @H:i:s',$time);
$time_modified = date('d m Y @ H:i:s', strtotime('+1 week 2 hours 30 seconds'));

echo " The Current date/time:".$actual_time;
echo 'The time modified is :'.$time_modified;
?>