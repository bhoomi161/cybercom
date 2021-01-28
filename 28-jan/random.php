<?php

/*$rand=rand();
$max=getrandmax();

echo $rand.'/'.$max;*/
if(isset($_POST['roll'])){
	$rand=rand(1,6);
	echo "You rolled a ".$rand;
}

?>
<form action="random.php" method="POST">
	<input type="submit" name="roll" value="Roll dice">
</form>