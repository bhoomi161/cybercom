<?php
$str = 'We are checking for preg_match()';

if (preg_match('/()/',$str)) {
	echo 'Yes,match found...';
} else {
	echo 'No,match not found..';
}

?>