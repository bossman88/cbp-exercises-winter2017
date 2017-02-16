<?php

$country_gdp = array(
    'cz' => 189982000000,
    'de' => 3371000000000,
    'fr' => 2422000000000
);

$country_names   = array(
    'cz' => 'Czechia',
    'de' => 'Germany',
    'fr' => 'France'
);


//13

//foreach($country_names as $country_code -> $country_name)
//{
    
//}

class country {
    protected $name = null;

    protected $gdb = null;

   public function __construct ($name, $gdp){
       $this->name = $name;
        $this->gdp = $gdp;
   }

public function getName(){
    return $this->name;
}

public function getGdp(){
    return round($this->gdp/10000000);
}

}

$countries = [];