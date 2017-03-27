<?php

$iterator = 3;

while($iterator < 10)
{

    $iterator++;


    echo $iterator. '<br> ';
}


$lol = 0;
do {
    $lol++;
    echo $lol . '<br>';
}
while( $lol++ < 10);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

 <h2>For loop exercise</h2>
    <ol>
        <?php for($pig = 1; $pig <6;$pig++){
    echo "List item number $pig <br>";
} ?>
        
    </ol>

    <h2>Interrupting loops</h2>
        <ol>
            <li><?php for ($number = 10; $number > 0; $number--) : ?>
                if ($number <3) {
                    break;
                
                if($number == 3){
                    continue;
                }
            } echo "<li> List item number $number <br> </li>"; ?>
            </li>
        </ol>
    </body>
</html>
