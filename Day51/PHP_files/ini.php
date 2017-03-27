<?php

//read the  ini file

$contents = file_get_contents('test.ini');
$data_without_sections = parse_ini_string($contents, false);
$data_with_sections = parse_ini_string($contents, true);

var_dump($data_with_sections);
var_dump('-----------NO SECTION--------------');
var_dump($data_without_sections);



var_dump('--------FROM FILE------');

$data_from_file = parse_ini_file('test.ini');
var_dump($data_from_file);