<?php

require 'conn.inc.php';
//check if the submit button is clicked or not
if(isset($_POST['submit'])){
 $fname = @$_POST['fname'];
    $lname = @$_POST['lname'];
    $day = @$_POST['day_list'];
    $month = @$_POST['month_list'];
    $year = @$_POST['year_list'];
    $gender = @$_POST['gender'];
    $country = @$_POST['country'];
    $email = @$_POST['email'];
    $phone = @$_POST['phone'];
    $password = @$_POST['password'];
    $cpassword = @$_POST['cpassword'];
    $agree = @$_POST['agree'];
    $dob="";

    //defing pattern that must be matched
  	$namepattern="/^[A-Za-z]*[A-Za-z]$/";
	$pwdpattern="/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/";
	$emailPattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
	$phonepattern="/^\d{10}$/";

 //Check if all the fields are not empty and satisfied all the condition otherwise print the error message

    if (!empty($fname) && preg_match($namepattern, $fname) &&
    !empty($lname) && preg_match($namepattern,$lname) &&
    !empty($email) && preg_match($emailPattern,$email) &&
    !empty($password) && preg_match($pwdpattern, $password) &&
    !empty($cpassword) && $cpassword === $password &&
    !empty($phone) && preg_match($phonepattern,$phone) && !empty($gender) && !empty($country) 
    && !empty($day) && !empty($month) && !empty($year) && !empty($agree)) {

        $dob=$day.'/'.$month.'/'.$year;
		$password=md5($password);
        $cpassword=md5($cpassword);

		//query for inserting data
		$query = "INSERT INTO registration (firstname,lastname,dateofbirth,gender,country,email,phone,password,confirmpassword) VALUES('$fname','$lname','$dob','$gender','$country','$email',$phone,'$password','$cpassword')";

		//executing query
		if(@mysqli_query($mysql_conn,$query)){
			echo '<br>Inserted Successfully';
			//if record is inserted then redirected to the original page
			header("location:index.php");
		} else {
			echo '<br>Some problem in insertion';
		} 
    }  else {
        echo 'Enter proper data.';
    }
}
?>
<form action="index.php" method="POST">
	<input type="submit" name="submit" value="Back to Form">
</form>