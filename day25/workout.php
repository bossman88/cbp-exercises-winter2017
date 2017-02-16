<?php

//11
$movie_name = "Arrival";


//2
$ratings = [
   'user642' => 69,
   'user214' => 95,
    'user013' => 82
    ];

//3 & 7 
foreach($ratings as $rating => $user_id){
 echo $user_id.'<br>';
}

//4&5
function print_rating($rating)
{
    echo $rating . ' %';
}

//5
print_rating($rating);

//6

//8
$user_names = array(
    'user642' => 'Bob',
    'user214' => 'Stuart',
    'user013' => 'Kevin'
);

$user_name = $user_names['user214'];


/*
//9
function get_username($user_id){
     $user_names = array(
    'user642' => 'Bob',
    'user214' => 'Stuart',
    'user013' => 'Kevin'
);

echo $user_names[$user_id];
}

get_username('user642');

*/
//9v2


function get_username($user_id)
{
    global $user_names;

    return $user_names[$user_id];
}

//extra
$key_for_stuart = array_search('Stuart', $user_names);
//var_dump($key_for_stuart);

//10ewrite the loop above to now use the function 
//get_username and print a string like Kevin gave the movie a 82 % rating
//
foreach($ratings as $user_id => $rating){
    
 echo  '<br>' . get_username($user_id) . ' gave the movie a ' . $rating . ' % rating'.'<br>';
}