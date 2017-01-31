<?php
//  arguments exercise N2

function validate_value($value, $messages)
{
    if(!$value)
    {
        //array_push($messages, 'The value is invalid')
        $message[]= 'The value is invalid';
    }

}

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
    

        <?php $messages = array(); ?>
        <?php validate_value(0 ,$messages); ?>


        <?php var_dump($messages); ?>




    </body>
</html>
