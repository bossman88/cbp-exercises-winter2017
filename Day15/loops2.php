<?php
$order = array(
    array (
        'item' => 'macbook air',
        'prices' => 234567,
    ),
    array (
        'item' => 'apple tv',
        'prices' => 2345,
    ),
    array (
        'item' => 'router',
        'prices' => 234,
    ),
    array (
        'item' => 'green dude',
        'prices' => 23,
    ),
);
    
foreach($order as $prod){
    echo "buying " . $prod['item'] . "<br>";
}

// prod is an array if we go through order!!!




?>