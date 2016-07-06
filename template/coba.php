<?php
$text   = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
//var_dump($text, $binary, $hello);

//print "\n";

$trimmed = trim($text);
//var_dump($trimmed);
echo $trimmed;
?>