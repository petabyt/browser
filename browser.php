<?php
$url =  $_GET['url'];
$url = base64_decode($url);

$contents = file_get_contents($url);
echo($contents);
?>
