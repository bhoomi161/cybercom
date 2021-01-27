<?php
//multidimensional array

$food = array('Healthy'=>
						array('Fruits','Vegetables','Salad'),
			  'Unhealthy'=>
			  			array('Fastfood','Colddrinks'));
//printing array using foreach

foreach ($food as $element => $inner_array) {
	echo "<b>".$element." => </b>";
	foreach ($inner_array as $item) {
		echo $item." ";
	}
	echo "<br>";
}
?>