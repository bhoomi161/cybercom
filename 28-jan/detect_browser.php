<?php

$browser = get_browser(null, true);
print_r($browser);

$browser = strtolower($browser['browser']);

if ($browser != 'chrome') {
    echo "<br>".'You are not using chrome browser..';
}

?>