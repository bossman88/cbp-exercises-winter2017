<?php

$files = scandir('classes');
foreach($files as $file)
{

    if($file == '.' || $file == '..') continue;
    if(pathinfo($file, PATHINFO_EXTENSION)== 'php')
    {
        require_once('classes/' . $file);
    }
}


$rupert = new giraffe('Rupert');
$dongo = new giraffe('Dongo');
$bob = new giraffe('Bob', 'pond');


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

       <<h1> Mature report</h1>


       <p> Currently there are <?php echo giraffe::$number_of_giraffes;    ?> giraffes in the world. </p>


       <p> <?php echo giraffe::$giraffes_in_forest; ?> of them are in the forest,
        <?php echo giraffe::$giraffes_by_the_pond; ?> are at the pond. </p> 

       <p> Thre is a giraffe called <?php echo $rupert->name; ?> </p>
       <p> It <?php echo ($rupert->is_hungry ? 'is' : 'is not'); ?> hungry and it is not thirsty</P>
       <p>It is in the forest/ at the pond</p>



    
    </body>
</html>