<?php
session_start();
//echo $_SESSION['name'];

if(isset($_SESSION['username']) && isset($_SESSION['age'])){
	echo 'Welcome, '.$_SESSION['username'].' You are '.$_SESSION['age'].
	' years old!!';
} else {
	echo 'Please log in';
}
//echo 'Welcome, '.$_SESSION['username'].' You are '.$_SESSION['age'].'years old!!';
?>