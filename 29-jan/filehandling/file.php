<?php

$handle = fopen("names.txt","w");

fwrite($handle,'Billy'."\n");
fwrite($handle, 'Alex'."\n");

fclose($handle);

echo "Written";
?>