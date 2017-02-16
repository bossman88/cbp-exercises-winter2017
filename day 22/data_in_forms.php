<?php


function print_radio($input_name, $values, $selected_values)
{   ?>
    <strong> HTML to output when the function is run </strong>
    <?php
}

//calling


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

        <form action="form.php" method="post">

Name
    <input type="text" name="name"><br>
Surname
    <input type="text" name="surname"><br>
    Foot 
<input type="radio" name="foot" value="left" id="foot-left"><label for="foot-left"> left </label>  
<input type="radio" name="foot" value="right" id="foot-right"><label for="foot-right"> right </label>   
    <br> Country:
    <select name="country">
        <option value:"CZ"> Brazil </option>
        <option value:"ARG">  Argentina </option>
        <option value:"SPA"> Spain</option>
        <option value:"GER"> Germany </option>
        <option value:"ENG"> England </option>
        <br><br>
        Injury prone
        <input type="checkbox" name="injury_prone" id="injury_prone"><label for="injury_prone">Injury prone</label>
        <br><br>
        <input type="submit" value="Submit this">


        </form>


    
    </body>
</html>