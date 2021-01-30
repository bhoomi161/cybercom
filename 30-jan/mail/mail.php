<?php
$to='bhoomimehta161@gmail.com';
$subject="This is a email";
$body='Email for testing purpose';
$headers='From:dharatimunjyasara2000@gmail.com';

if(mail($to,$subject,$body,$headers)){
	echo 'Email has been sent to '.$to;
} else {
	echo 'There was an error sending the email';
}
?>