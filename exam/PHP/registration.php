<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<script src="../JS/register.js"></script>
</head>
<body>
	<h1>REGISTER</h1>
	<form action="insertuser.php" method="POST">
		<table>
			<tr>
				<td>Prefix</td>
				<td>
					<select name="prefix" id="prefix">
						<option value="">Mr.</option>
						<option value="Mr." id="Mr." name="Mr.">Mr.</option>
						<option value="Mrs." id="Mrs." name="Mrs.">Mrs.
						</option>
						<option value="Ms." id="Ms." name="Ms.">Ms.
						</option>
					</select>
				</td>
				<td><label name="prefixerror" id="prefixerror"></td>
			</tr>
			<tr>
				<td>First Name</td>
				<td><input type="text" name="fname" id="fname"></td>
				<td><label name="fnameerror" id="fnameerror"></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="lname" id="lname"></td>
				<td><label name="lnameerror" id="lnameerror"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" id="email"></td>
				<td><label name="emailerror" id="emailerror"></td>

			</tr>
			<tr>
				<td>Mobile Number</td>
				<td><input type="number" name="phone" id="phone"></td>
				<td><label name="phoneerror" id="phoneerror"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" id="password"></td>
				<td><label name="passworderror" id="passworderror"></td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="password" name="cpassword" id="cpassword"></td>
				<td><label name="cpassworderror" id="cpassworderror"></td>
			</tr>
			<tr>
				<td>Information</td>
				<td><textarea name="information" id="information" rows="4" cols="22"></textarea></td>
				<td><label name="informationerror" id="informationerror"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" id="agree" name="agree">Hereby, I Accept Terms & condition</td></td>
				<td><label name="agreeerror" id="agreeerror"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" id="submit" value="SUBMIT" onclick="validate();"></td>
			</tr>
		</table>
	</form>
</body>
</html>