<?php

var_dump(__FILE__);

var_dump(__DIR__);

$info = pathinfo(__FILE__);
var_dump($info);

$txt_file = __DIR__ . '/a.file.with.dots.txt';
$info = pathinfo($txt_file);
var_dump($info);


$new_file_name = 'a_file_with_dots.' . pathinfo($txt_file, PATHINFO_EXTENSION);
var_dump($new_file_name);

var_dump(dirname($txt_file));