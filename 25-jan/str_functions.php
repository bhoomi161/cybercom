<?php

$string ="This is an example of string";

//str_shuffled() generates the random string from the given string as an input.
$str_shuffled=str_shuffle($string);
echo $str_shuffled;

//strlen() returns the length of the string.
echo '<br>'.strlen($string);

//substr() return the sub string from the specified string.
echo '<br>'.substr($string,4,10);

//strrev() prints the reverse string.
echo '<br>'.strrev($string);

//similar_text() shows the similarity between two strings.
$str_one = 'This is first string';
$str_two = 'This is second string';

similar_text($str_one,$str_two,$result);
echo '<br>'.$result;

//trim() isused to remove the space or predefined characters from both the ends.
$str='This is the string!';
echo '<br>'.$str;
echo '<br>'.trim($str,'Tg!');

//rtrim is used to remove from the right side.
//ltrim is used to remove from the left side.

$str_add='This is a <img src="image.jpg"> string.';
$str_slashes=htmlentities(addslashes($str_add));

echo '<br>'.$str_add;
echo '<br>'.stripslashes($str_slashes);
?>