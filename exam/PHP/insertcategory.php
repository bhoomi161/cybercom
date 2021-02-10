<?php

include 'conn.inc.php';
//check if the submit button is clicked or not
if(isset($_POST['submit'])){
    $title=@$_POST['title'];
    $content = @$_POST['content'];
    $url = @$_POST['url'];
    $metatitle = @$_POST['metatitle'];
    $parentcategory = @$_POST['parentcategory'];
    $imageToUpload = @$_POST['imageToUpload'];
   

     //Check if all the fields are not empty 

    if (!empty($title) && !empty($content) && !empty($url) && !empty($metatitle) && !empty($parentcategory) && !empty($imageToUpload))
    {

       
        $created=date("Y/m/d h:i:sa");
        
		//query for inserting data
		$query="insert into category (parent_category_id,title,metatitle,url,content,created_at,img) values ($parentcategory,'$title','$metatitle','$url','$content','$created','$imageToUpload')";
        
		//executing query
		if(@mysqli_query($mysql_conn,$query)){
			echo '<br>Inserted Successfully';
			//if record is inserted then redirected to the original page
			header("location:categorylist.php");
		} else {
			echo '<br>Some problem in insertion';
		} 
    }  else {
        echo 'Enter proper data.';
    }
}
?>
<form action="addcategory.php" method="POST">
	<input type="submit" name="submit" value="Back to Form">
</form>