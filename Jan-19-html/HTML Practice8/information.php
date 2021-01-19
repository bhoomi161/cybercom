<!DOCTYPE html>
<html>
<head>
	<title>PHP File</title>
</head>
<body>
	<?php

		$fnm=$_POST["firstname"];
		$lnm=$_POST["lastname"];
		$day=$_POST["day_list"];
		$month=$_POST["month_list"];
		$year=$_POST["year_list"];
		$gender=$_POST["gender"];
		$email=$_POST["email"];
		$pwd=$_POST["pwd"];
		$sques=$_POST["sques"];
		$ans=$_POST["answer"];
		$address=$_POST["address"];
		$city=$_POST["city"];
		$state=$_POST["state"];
		$zipcode=$_POST["zipcode"];
		$phone=$_POST["phone"];


	?>
	<h1>Data you have submitted is as per below:</h1>
	<table border="1">
		<tr>
			<th>First Name:</th>
			<td><?php echo $fnm; ?></td>
		</tr>
		<tr>
			<th>Last Name:</th>
			<td><?php echo $lnm; ?></td>
		</tr>
		<tr>
			<th>Date of Birth:</th>
			<td><?php echo $day."-".$month."-".$year; ?></td>
		</tr>
		<tr>
			<th>Gender:</th>
			<td><?php echo $gender; ?></td>
		</tr>
		<tr>
			<th>Email:</th>
			<td><?php echo $email; ?></td>
		</tr>
		<tr>
			<th>Password:</th>
			<td><?php echo $pwd; ?></td>
		</tr>
		<tr>
			<th>Security Question:</th>
			<td><?php echo $sques; ?></td>
		</tr>
		<tr>
			<th> Security Answer:</th>
			<td><?php echo $ans; ?></td>
		</tr>
		<tr>
			<th>Address:</th>
			<td><?php echo $address; ?></td>
		</tr>
		<tr>
			<th>City:</th>
			<td><?php echo $city; ?></td>
		</tr>
		<tr>
			<th>State:</th>
			<td><?php echo $state; ?></td>
		</tr>
		<tr>
			<th>Zipcode:</th>
			<td><?php echo $zipcode; ?></td>
		</tr>
		<tr>
			<th>Phone:</th>
			<td><?php echo $phone; ?></td>
		</tr>
	</table>
</body>
</html>