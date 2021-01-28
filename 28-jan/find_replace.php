<?php
$offset=0;
if(isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith'])){
	$text=$_POST['text'];
	$find=$_POST['searchfor'];
	$replace=$_POST['replacewith'];
	$str_length=strlen($find);

	if(!empty($text)&&!empty($find)&&!empty($replace)){
		while($strpos=strpos($text,$find,$offset)){
			$text=substr_replace($text,$replace,$strpos,$str_length);
			$offset=$strpos+$str_length;

		}
	echo $text;
	} else {
		echo "Please fill up all the fields...";
	}
}

?>

<form action="find_replace.php" method="POST">
	<textarea name="text" rows="6" cols="30"></textarea><br><br>
	Search for:<br>
	<input type="text" name="searchfor"><br><br>
	Replace with:<br>
	<input type="text" name="replacewith"><br><br>
	<input type="submit" value="Find and Replace">
</form