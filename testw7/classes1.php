<?php

class address
{
    protected $name  =null;
    protected $street  =null;
    protected $house_nr  =null;
    protected $city  =null;
    protected $country  =null;
    protected $postal_code  =null;
    protected static $local_country = null;

    public static function setLocalCountry($name){
        static::$local_country = $name;
    }

    

   public function __construct (){

   }
}


//$lol = new address();


//$lol::setLocalCountry('Belgium');
//echo $lol::$local_country;     Not worked cause of protected 
