<?php
$name = @$_FILES['filetoupload']['name'];
$size = @$_FILES['filetoupload']['size'];
$type = @$_FILES['filetoupload']['type'];
$tmp_name = @$_FILES['filetoupload']['tmp_name'];
$extension=strtolower(substr($name,strpos($name,'.')+1));
$max_size=2097152;
//$error = $_FILES['filetoupload']['error'];

if(isset($name)){
	if(!empty($name)){
		if(($extension=='jpeg' || $extension=='jpg')&& ($type=='image/jpg' || $type=='image/jpeg') && $size<=$max_size){
				$location = 'upload/';
			if(move_uploaded_file($tmp_name,$location.$name)){
				echo 'Uploaded';
			} else {
				echo 'There was an error';
			} 
		} else {
			echo 'File must be jpeg/jpg and size must be 2mb or less';
		}
		
	} else {
		echo 'Please choose a file';
	}
}
?>
<form  action='upload.php' method='POST' enctype="multipart/form-data">
	<input type='file' name='filetoupload'><br><br>
	<input type='submit' value='Submit' name='submit'>
</form>