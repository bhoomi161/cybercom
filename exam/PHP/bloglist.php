<!DOCTYPE html>
<html>
<head>
	<title>Blog list</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../JS/bloglist.js"></script>
</head>
<body>
	<div id="listbutton">
		<!--<input type="submit" name="mcategory" id="mcategory" value="Manage Category" >&nbsp;&nbsp;
		<input type="submit" name="myprofile" id="myprofile" value="My Profile">&nbsp;&nbsp;
		<input type="submit" name="logout" id="logout" value="Logout" onclick="location:logout.php">-->
		<a href="categorylist.php">Manage Category</a>
		<a href="#">My Profile</a>
		<a href="logout.php">Logout</a>

	</div>

	<h3>Blog Posts</h3>
	<form action='addblogpost.php'>
		<input type="submit" name="addpost" id="addpost" value="Add Blog Post" >
		<table border=1 style="width:700px">
			<tr>
				<th>Post Id</th>
				<th>Category Name</th>
				<th>Title</th>
				<th>Published Date</th>
				<th>Actions</th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><a href="editblog.php">Edit</a>&nbsp;&nbsp;
					<a href="deleteblog.php">delete</a>&nbsp;&nbsp;
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	session_start();
	echo $_SESSION['id'];
?>