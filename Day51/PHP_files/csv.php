<?php
if(!empty($_POST['save']))
{
    $data = array(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['born'],
        $_POST['occupation'],
    );
}

$fh = fopen('test.csv', 'r');
$records = array();
while($line = fgetcsv($fh, 0, ';', '"'))    // 0  reads entire line   
{

    $records = $line;   // while there are lines in file we var dump them
}
fclose($fh);


var_dump($records);

