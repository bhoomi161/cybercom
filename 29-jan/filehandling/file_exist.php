<?php

$filename='test.txt';

if(file_exists($filename)){
	echo 'File already exist..';
} else {
	$handle=fopen($filename,'w');
	fwrite($handle,'Nothing');
	fclose($handle);
}
?>