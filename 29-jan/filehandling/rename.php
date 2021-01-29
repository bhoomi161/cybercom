<?php

$filename='filetorename.txt';
$rand=rand(1000,9999);

if(@rename($filename,$rand.'.txt')){
	echo 'File <strong>'.$filename.' </strong> has been renamed to <strong>'. $rand .'.txt</strong>';
} else {
	echo 'Error renaming';
}
?>