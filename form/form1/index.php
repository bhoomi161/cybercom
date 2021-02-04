<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="success.php" method="POST" name="form1">
		<table border="1" align="center">
			<tr class="h1">
				<td colspan="2" align="center"><h1>User Form</h1></td>
			</tr>
			<tr>
				<td>Enter Name:</td>
				<td><input type="text" name="name" id="name"></td>
			</tr>
			<tr>
				<td>Enter Password</td>
				<td><input type="password" name="password" id="password"></td>
			</tr>
			<tr>
				<td>Enter Address:</td>
				<td><textarea name="address" id="address" rows="4" cols="40"></textarea></td>
			</tr>
			<tr>
				<td>Select Game:</td>
				<td>
					<input type="checkbox" name="game[]" id="hocky" value="hocky">Hocky<br>
					<input type="checkbox" name="game[]" id="football" value="football">football<br>
					<input type="checkbox" name="game[]" id="badminton" value="badminton">Badminton<br>
					<input type="checkbox" name="game[]" id="cricket" value="cricket">Cricket<br>
					<input type="checkbox" name="game[]" id="vollyball" value="vollyball">Vollyball<br>
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
				<td>Select ur age</td>
				<td>
					<select name="age" id="age">
						<option value="">select</option>
						<option value="less18" id="less18">less than 18</option>
						<option value="18to50" id="18to50">In between 18 to 50
						</option>
						<option value="greater50" id="greater50">greater than 50
						</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="file" name="file" id="file">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="reset" value="Reset">
					<input type="submit" id="submit" name="submit" value="Submit Form" onclick="validateForm();">
				</td>
			</tr>
		</table>
			<script src="script.js"></script>

</form>
</body>
</html>
<?php

require 'conn.inc.php';

//selecting data from table
$select_query="select * from userform";

//executing select query
if($query_run=@mysqli_query($mysql_conn,$select_query)){

	//checking for records
	if(@mysqli_num_rows($query_run)==NULL){
			echo '<br>No results found';
	} else {
	
	//displaying records of tables		
	echo '<table border="1"><tr><th>ID</th><th>NAME</th><th>PASSWORD</th><th>ADDRESS</th><th>GAME</th><th>GENDER</th><th>AGE</th><th>FILE</th></tr>';
	while($query_row=@mysqli_fetch_assoc($query_run)){

		$id=$query_row['id'];
		$name=$query_row['name'];
		$password=$query_row['password'];
		$address=$query_row['address'];
		$game=$query_row['game'];
		$gender=$query_row['gender'];
		$age=$query_row['age'];
		$file=$query_row['file'];

		echo '<tr>';
		echo '<td>'.$id.'</td>';
		echo '<td>'.$name.'</td>';
		echo '<td>'.$password.'</td>';
		echo '<td>'.$address.'</td>';
		echo '<td>'.$game.'</td>';
		echo '<td>'.$gender.'</td>';
		echo '<td>'.$age.'</td>';
		echo '<td>'.$file.'</td>';
		echo '</tr>';
	}
	echo '</table>';
	}
}
?>