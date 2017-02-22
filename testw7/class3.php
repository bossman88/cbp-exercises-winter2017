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

    
public function isLocal(){
    if($this->country == static::$local_country){
        return true;
    }else {
        return false;
    }
}
  
}
