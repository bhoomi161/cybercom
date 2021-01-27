<?php

function chk_space($str){
	if (preg_match('/ /',$str)) {
		return true;
	}else {
		return false;
	}
}
$string ="Thisstringdoesn\'tcontainanyspace";

if(chk_space($string)){
	echo 'Yes string contains space';
} else {
	echo 'No string does not contain any space';
}
?>