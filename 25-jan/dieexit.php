<?php

/*echo 'Hello ' ;
die('die() terminated script');
echo 'World!!';*/

/*echo 'Hello ' ;
die('exit() terminated script');
echo 'World!!';*/

/*mysqli_connect('localhost','root','') or die('Not able to connect database');
echo 'Connected';*/

/*mysqli_connect('localhost','root','') or exit('Not able to connect database');
echo 'Connected';*/

@mysqli_connect('localhost','bhumi','') or die('Not able to connect database');
echo 'Connected';
?>