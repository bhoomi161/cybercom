<?php

include 'conn.inc.php';
//check if the submit button is clicked or not
if(isset($_POST['submit'])){
    $prefix=@$_POST['prefix'];
    $fname = @$_POST['fname'];
    $lname = @$_POST['lname'];
    $email = @$_POST['email'];
    $phone = @$_POST['phone'];
    $password = @$_POST['password'];
    $cpassword = @$_POST['cpassword'];
    $information=@$_POST['information'];
    $agree = @$_POST['agree'];
    

    //defing pattern that must be matched
  	$namepattern="/^[A-Za-z]*[A-Za-z]$/";
	$pwdpattern="/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/";
	$emailPattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
	$phonepattern="/^\d{10}$/";

 //Check if all the fields are not empty and satisfied all the condition otherwise print the error message

    if (!empty($prefix) && !empty($fname) && preg_match($namepattern, $fname) &&
    !empty($lname) && preg_match($namepattern,$lname) &&
    !empty($email) && preg_match($emailPattern,$email) &&
    !empty($password) && preg_match($pwdpattern, $password) &&
    !empty($cpassword) && $cpassword === $password &&
    !empty($phone) && preg_match($phonepattern,$phone)&& !empty($information) && !empty($agree))
    {

       echo 'Hello';
		$password=md5($password);
        $created=date("Y/m/d h:i:sa");
        
		//query for inserting data
		$query="insert into register (prefix,firstname,lastname,email,phone,passwordhash,information,created_at) values('$prefix','$fname','$lname','$email',$phone,'$password','$information','$created')";
        
		//executing query
		if(@mysqli_query($mysql_conn,$query)){
			echo '<br>Inserted Successfully';
			//if record is inserted then redirected to the original page
			//header("location:login.php");
		} else {
			echo '<br>Some problem in insertion';
		} 
    }  else {
        echo 'Enter proper data.';
    }
}
?>
<form action="registration.php" method="POST">
	<input type="submit" name="submit" value="Back to Form">
</form>