<?php

require 'conn.inc.php';

//checking if submit button is clicked
if(isset($_POST['submit'])){
	//fetching data from form
	$name=@$_POST['name'];
	$password=@$_POST['password'];
	$address=@$_POST['address'];
	$age=@$_POST['age'];
	$file=@$_POST['file'];
	$gender=@$_POST['gender'];
	$game=@$_POST['game'];
	$data="";

	//patten for name and password
	$NamePattern="/^[A-Za-z]*[A-Za-z]$/";
	$PasswordPattern="/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/";

	//checking for fields value 
	if(isset($name) && !empty($name) && preg_match($NamePattern,$name)
 	&& isset($password) && !empty($password)  && preg_match($PasswordPattern,$password) && isset($address) && !empty($address) && isset($game) && !empty($game) && isset($gender) && !empty($gender) && isset($age)&& !empty($age) && isset($file) && !empty($file)){

		echo '<h2>Successfully redirected....</h2><br>';
		echo 'Name:'.$name."<br>";
		echo 'Password:'.$password."<br>";
		echo 'Address:'.$address."<br>";
		echo 'Game:';
		foreach($game as $selected){
			echo $selected." ";
			$data=$data." ".$selected;
		}
		echo "<br>Gender:".$gender;
		echo "<br>Age:".$age;
		echo "<br>File:".$file;
		$password=md5($password);
		//query for inserting data
		$query = "INSERT INTO userform (name, password, address,game, gender, age, file) VALUES('$name', '$password', '$address','$data','$gender', '$age', '$file')";

		//executing query
		if(@mysqli_query($mysql_conn,$query)){
			echo '<br>Inserted Successfully';
			//if record is inserted then redirected to the original page
			header("location:index.php");
		} else {
			echo '<br>Some problem in insertion';
		} 
	}else {
		echo 'Please fill all the fields..';
	}
}
?>
<form action="index.php" method="POST">
	<input type="submit" name="submit" value="Back to Form">
</form>