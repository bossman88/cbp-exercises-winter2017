<?php


$course_name = 'Coding Bootcamp';

$my_name = 'Vladimir';

$result = 11 - 3;

$instructors =[ 
'1' => 'Jan',
'2' => 'Daniel',
'3' => 'Michal',
'4' => 'Jakub'


];

//5
function greet_me() 
{ echo 'Good morning Prague';}
//6
greet_me();

//7
$my_greeting = '<br>'.'Good morning' . $my_name;
//8
echo $my_greeting;
//9
sort($instructors);
//10
foreach($instructors as $name){
    echo greet_someone($name);
}

//11
function greet_someone($name){
    return '<br>'.'Good morning'.$name.'<br>';
}
