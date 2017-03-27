<?php
// for loop

/*
$a = array();
for ($i =2; $i < 10; $i++) {
   $a[$i] ='' ;
}

var_dump($a);
*/


// for each loop
// when user uploading filesize
// when user is buying something
$a = array(
    'name' => 'jack',
    'lastname' => 'daniels',
    'age' => '8',
    'color' => 'blue',
);


foreach ($a as $key => $value) {
    //echo $key;
    //echo ':  ';
   // echo $value;
    //echo '<br><hr>';
    echo $key . ': ' .  $value . '<br><hr>';
}