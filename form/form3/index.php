<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body onload="addOption_data()">
	<div id="yellow">
			Sign Up
	</div>
	<div id="blue">
	
	<form id="form3" name="form3" action="success.php" method="POST">
		<table>
			<tr>
				<td>First Name</td>
				<td><input type="text" id="fname" name="fname"></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="lname" id="lname"></td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td>
					<select id="day_list" name="day_list">
						<option value="">Date</option>
					</select>
					<select id="month_list" name="month_list">
						<option value="">Month</option>
					</select>
					<select id="year_list" name="year_list">
						<option value="">Year</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" id="male" value="male">Male
					<input type="radio" name="gender" id="female" value="female">Female
				</td>
			</tr>
			<tr>
				<td>Country</td>
				<td>
					<select id="country" name="country">
						<option value="">Country</option>
						<option value="Afghanistan">Afghanistan</option>
						<option value="Australia">Australia</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="Bhutan">Bhutan</option>
						<option value="Brazil">Brazil</option>
						<option value="Canada">Canada</option>
						<option value="China">China</option>
						<option value="India">India</option>

					</select>
				</td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><input type="email" name="email" id="email"></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="number" name="phone" id="phone"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" id="password"></td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="password" name="cpassword" id="cpassword"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="checkbox" id="agree" name="agree">I Agree to the Terms of use</td>
			</tr>
		</table>
		</div>
		<div id="yellow">
			
		<input type="submit" value="Submit" name="submit" id="submit" onclick="validateForm();">
		<input type="reset" Value="Cancel">
				
		</div>

	</form>
</body>
</html>

<?php
 
   
require 'conn.inc.php';

//selecting data from table
$select_query="select * from registration";

//executing select query
if($query_run=@mysqli_query($mysql_conn,$select_query)){

	//checking for records
	if(@mysqli_num_rows($query_run)==NULL){
			echo '<br>No results found';
	} else {
	
	//displaying records of tables		
	echo '<table border="1"><tr><th>ID</th><th>FIRST NAME</th><th>LAST NAME</th><th>D.O.B</th><th>GENDER</th><th>COUNTRY</th><th>EMAIL</th><th>PHONE</th><th>PASSWORD</th><th>CONFIRM PASSWORD</th></tr>';
	while($query_row=@mysqli_fetch_assoc($query_run)){

		$id=$query_row['id'];
		$firstname=$query_row['firstname'];
		$lastname=$query_row['lastname'];
		$dob=$query_row['dateofbirth'];
		$gender=$query_row['gender'];
		$country=$query_row['country'];
		$email=$query_row['email'];
		$phone=$query_row['phone'];
		$password=$query_row['password'];
		$cpassword=$query_row['confirmpassword'];

		echo '<tr>';
		echo '<td>'.$id.'</td>';
		echo '<td>'.$firstname.'</td>';
		echo '<td>'.$lastname.'</td>';

		echo '<td>'.$dob.'</td>';
		echo '<td>'.$gender.'</td>';
		echo '<td>'.$country.'</td>';

		echo '<td>'.$email.'</td>';
		echo '<td>'.$phone.'</td>';
		echo '<td>'.$password.'</td>';
		echo '<td>'.$cpassword.'</td>';

		echo '</tr>';
	}
	echo '</table>';
	}
}

?>