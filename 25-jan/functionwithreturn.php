<?php

function add ($no1,$no2) {
	$result = $no1 + $no2;
	return $result;
}

function divide ($no1,$no2) {
	$result=$no1/$no2;
	return $result;
}

$sum=divide (add(10,20),add(3,2));
echo $sum;

?>