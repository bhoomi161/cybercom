<?php
//declaring variables
$no1=10;
$no2=20;

//creating function with argument
function add ($num1,$num2) {
	echo $num1 + $num2;
}

//calling a function and passing arguments
add($no1,$no2);

//creating another function
function displayDate($day,$month,$year){
	echo '<br>'.$day .'-'. $month .'-'. $year;
}
//calling function
displayDate(25,'January',2021);
?>