<?php ob_start(); ?>
<h1>My page</h1>
<?php
$redirect_page="http://google.co.uk";
$redirect=true;

if($redirect==true){
	header('Location:'.$redirect_page);
}
//ob_end_clean();
ob_end_flush();
?>