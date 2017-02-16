<?php



//1
$num = 12.6666;

//2
$country_names = [

    'cz' => 'Czechia',
    'de' => 'Germany',
    'fr' => 'France'
];

//3
$this_country = $country_names;

//4
$country_gdp = [
    'cz' => 189982000000,
    'de' => 3371000000000,
    'fr' => 2422000000000
];

//5
$money = 123456789000000;
//var_dump($money);

//6
echo  'The amount is ' . $money. 'USD <br';

//7
echo  'The amount is ' . ($money/1000). 'thousand USD <br';
//million
echo  'The amount is ' . ($money/1000000). 'million USD <br';


//8
echo  'The amount is ' . ($money/1000000000) . 'billion USD <br';

//9
echo round($money);
echo  'The amount is ' . (round($money/1000000000)) . 'billion USD <br';


echo  'The amount is ' . (round($money/1000000000)) . 'billion USD <br';


//11
echo  'The amount is ' . (floor($money / 1000000000)) . 'billion USD <br';


//12
echo  'The amount is ' . (ceil($money / 1000000000)) . 'billion USD <br';