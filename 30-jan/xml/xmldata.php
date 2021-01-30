<?php

$xml = simplexml_load_file('xmlfile.xml');

foreach ($xml->producer as $producer) {
    echo $producer->name.' is '.$producer->age.'<br>';
}

?>