<?php


$pattern = '#a#i';   //pattern matches any string contains an a 
$string = 'cat';

$result = preg_match($pattern, $string, $matches);

var_dump($result);