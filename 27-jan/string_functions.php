E_ALL & ~E_DEPRECATED & ~E_STRICT
<?php
//strlen() used to count the string length
$string="bhoomi";
$string_length=strlen($string);
echo "String length is:".$string_length;

//strtolower function is used to convert string into lowercase
$str="BHOOMI";
$str_lower=strtolower($str);
echo "<br>Original String:".$str." After converting to lowercase:".$str_lower;

//strtoupper function is used to convert string into uppercase
$str="bhoomi";
$str_upper=strtoupper($str);
echo "<br>Original String:".$str." After converting to uppercase:".$str_upper;

//strpos() return the position where first occurance of search string found
$str="This is string,it is used for storing no.of characters";
$find="is";
$find_length=strlen($find);
$offset=0;
//$str_pos=strpos($str,$find);
//echo "<br>is found at:".$str_pos." position";

while($str_pos=strpos($str,$find,$offset)){
	echo "<br>is found at:".$str_pos." position";
	$offset=$str_pos+$find_length;
}

//substr_replace() is used to change some portion of string
$str_updated=substr_replace($str,'useful',21,4);
echo "<br>".$str_updated;

//str_replace() is used to replace string
$find=array('This','is','used');
$replace=array('That','was','useful');

$str_new=str_replace($find,$replace,$str);
echo "<br>".$str_new;

?>