<?php 
$conn_error='Could not connect.';

//defining variable
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';

$mysql_db='form';

//connecting to the user
$mysql_conn=@mysqli_connect($mysql_host,$mysql_user,$mysql_pass);

//selecting database
$mysql_database=@mysqli_select_db($mysql_conn,$mysql_db);

if(!$mysql_conn || !$mysql_database){
	die($conn_error);
}else {
	echo 'Connected sucessfully...<br>';
}


?>