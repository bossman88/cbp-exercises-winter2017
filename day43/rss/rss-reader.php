<?php


//get contents of the file and returns in a string
function downloadNYTimesRSS()
{
$contents = file_get_contents('http://rss.nytimes.com/services/xml/rss/nyt/World.xml');
file_put_contents('nytimes-rss.xml', $contents);
}
//if the cache file does not exist
if(!file_exists('nytimes-rss.xml'))
{
    // download it from NYTimes
    donwloadNYTimesRSS();
}


$contents = file_get_contents('nytimes-rss.xml');

//read the string and form  an simple XMLelement object out of it
$simplexml_object = simplexml_load_string($contents);

//foreach($simplexml_object->channel->item as $one_item)
//{
    // var_dump($one_item->title);
    //$contents = (string)$one_item->title;
    //echo $contents . '<br />';
 //   
//}

//var_dump($simplexml_object->channel->getName());

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
        <ol>
            <?php foreach($simplexml_object->channel->item as $one_item) : ?>
                <li>
                    <h3><?php echo $one_item->title; ?></h3>
                    Published at: <time><?php echo $one_item->pubDate; ?> </time>
                </li>
                <?php enforeach; ?>
        </ol>
    
    </body>
</html>


