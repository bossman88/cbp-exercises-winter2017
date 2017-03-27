<?php

// if the form was submitted
if(!empty($_POST['save']))
{
    // prepare an array of data from data from $_POST
    $data = array(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['yob'],
        $_POST['occupation']
    );
    
    // open a file for appending
    $fh = fopen('test.csv', 'a');

    // write an array as CSV string
    fputcsv($fh, $data, ';', '"');

    // close the file
    fclose($fh);

    // redirect (good practice, PRG pattern!!)
    header('Location: csv.php');
}

// open the CSV file
$fh = fopen('test.csv', 'r');

$records = array();
// read through all the lines and parse them as CSV
while($line = fgetcsv($fh, 0, ';', '"'))
{
    // build the array $records of these parsed lines
    $records[] = $line;
}

// close the file
fclose($fh);


var_dump($records);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSV file</title>
</head>
<body>
    
    <form action="" method="post">
        First name: <input type="text" name="first_name" /><br />
        Last name: <input type="text" name="last_name" /><br />
        YOB: <input type="text" name="yob" /><br />
        Occupation: <input type="text" name="occupation" /><br />
        <input type="submit" name="save" value="Save" />
    </form>

</body>
</html>