<?php
$user_ip=$_SERVER['REMOTE_ADDR'];

function user_ipAddress(){

	global $user_ip;
	echo $user_ip;
}
user_ipAddress();
?>