<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<script src="../JS/login.js"></script>
</head>
<body>
	<h1>LOGIN</h1>
	<form method="POST" action="checkuser.php">
		<table>
			<tr>
				<td>Email</td>
			</tr>
			<tr>
				<td><input type="email" name="email" id="email"></td>
				<td><label name="emailerror" id="emailerror"></td>
			</tr>
			<tr>
				<td>Password</td>
			</tr>
			<tr>
				<td><input type="password" name="password" id="password"></td>
				<td><label name="passworderror" id="passworderror"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" id="submit" value="LOGIN" onclick="validate();">&nbsp;&nbsp;
				<a href="registration.php">REGISTER</a>
			</td>
			</tr>
		</table>
	</form>
</body>
</html>
