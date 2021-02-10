<?php
include 'conn.inc.php';

if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];

	$password=md5($password);
	
	$query="select id from register where email='$email' and passwordhash='$password'";
	$row=mysqli_query($mysql_conn,$query);
	
	if($row){
		while($query_row=@mysqli_fetch_assoc($row)){
			$id=$query_row['id'];
			
			session_start();
			$_SESSION['id']=$id;
			//echo $_SESSION['id'];
		}
		

		header("Location:bloglist.php");
	}else{
		echo 'Invalid email password combination';
	}


}

?>