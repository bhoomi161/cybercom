<?php
include 'conn.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog Category</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../JS/bloglist.js"></script>
</head>
<body>
	<div id="listbutton">
		<a href="categorylist.php">Manage Category</a>
		<a href="#">My Profile</a>
		<a href="logout.php">Logout</a>

	</div>

	<h3>Blog Posts</h3>
	<form action='addcategory.php'>
		<input type="submit" name="addpost" id="addpost" value="Add Blog Post" >

</form>
<?php
	$query="select * from category";
	echo '<table border="1" width="70%">';
			echo '<tr>
				
				<th>Category ID</th>
				<th>Category Image</th>
				<th>Category Name</th>
				<th>Created Date</th>
				<th>Actions</th>
				
			</tr>
		';

	if($query_run=@mysqli_query($mysql_conn,$query)){

		//checking for records
		if(@mysqli_num_rows($query_run)==NULL){
				echo '<br>No results found';
		} else {
		
		while($query_row=@mysqli_fetch_assoc($query_run)){

		$id=$query_row['id'];
		$img=$query_row['img'];
		$name=$query_row['title'];
		$created=$query_row['created_at'];
	
		echo '<tr>';
		echo '<td>'.$id.'</td>';
		echo '<td>'.$img.'</td>';
		echo '<td>'.$name.'</td>';
		echo '<td>'.$created.'</td>';
		echo '<td><a href="editcategory.php"myid= echo $id;>Edit</a>&nbsp;&nbsp;
			<a href="deletecategory.php">delete</a></td>';
	}	
		}
	}
	
?>

	
	
<?php
	session_start();
	echo $_SESSION['id'];
?>




</body>
</html>