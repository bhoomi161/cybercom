<?php

$name='BHOOMI';
$age=18;

if (strtolower($name)==='bhoomi'){
	echo 'Yes ';
	if ($age>=18){
		echo ' You \'re over 18';
	}
} else {
	echo "You are not bhoomi..";
}

?>