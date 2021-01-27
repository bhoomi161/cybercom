<?php
//multidimensional array

$food = array('Healthy'=>
						array('Fruits','Vegetables','Salad'),
			  'Unhealthy'=>
			  			array('Fastfood','Colddrinks'));

print_r($food);

echo "<br>".$food['Healthy'][1];
echo "<br>".$food['Unhealthy'][0];
?>