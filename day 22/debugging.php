<?php
// basic settings 
// u can use these 
ini_set ('display_errors', 'on');  
ini_set('error_reporting , E_ALL');
// display errors on , on production server swithed off
// , to not give away secret data


// show errors including strict errors(for development)
error_reporting(E_ALL | E_STRITCT);

// for production / server 
error_reporting(E_ALL | ~E_NOTICE);


function dd($value)
{
    var_dump($value);
    die();

}




