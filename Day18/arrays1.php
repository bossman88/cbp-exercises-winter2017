<?php
        $cars_i_want = array(
            'Porshe' => 2000000,
            'Ferrari' => 2500000,
            'Aston Martin' => 2800000,
            'Lamborghini' => 3500000,
            'Bugatti' => 16000000
        );

        $cars_my_wife_wants = array(
            'Smart' => 320000,
            'Mercedes' => 620000,
            'Toyota' => 480000,
            'Ford Mustang' => 1200000
        );
        $cars_i_cant_stand = array(
            'Smart'
        );



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
         
            <?php 


            $result = array_merge($cars_i_want, $cars_my_wife_wants);
            var_show($merged);













            ?>  

    </body>
</html>