<?php

$name = 'James';

$name = 'James' . 'Bond';

$bond_info = array(
    'first_name' => 'James',
    'last_name' => 'Bond',
    'gun' => 'Walther PPK',
    'car' => 'Aston Martin',
    'enemy' => 'Stavro Blofeld',
    'relationship_status' => 'widower',
    'cases' => 24
);


//4

echo 'The name is ' . $bond_info['last_name'] . '.' .  $bond_info['first_name'] .' '. $bond_info['last_name'] . '.<br>' ;

echo 'One day when I was driving my ' . $bond_info['car'] . ' in the Alps ' . $bond_info['enemy']  . ' came along and made me a widower. If only I had my '. $bond_info['gun'] . ' with me!<br>';

//6
$bond_info['last_case'] = 'Spectre';


class onecase{
    protected $name = null;
    protected $year = null;
    protected $enemy = null;

    public function getName(){
        echo $this->name;

    }

     public function getYear(){
        echo $this->year;
    }

    public function getEnemy(){
        echo $this->enemy;
    }

    public function setName($name){
        $this-> name = $name;
    }

    public function setYear($year){
         $this-> year = $year;
    }

    public function setEnemy($enemy){
         $this-> enemy = $enemy;
    }

    public function __construct($year){
        $this->year = $year;
       static::$case_solved++;
      

    }

    public $girls = [];

    public function addGirl($name){
        $this->$girls[]=$name; 
         static::$girls_met++;
      //  $this->$girls[]='Estrella'; 
       // $this->$girls[]='Lucia Sciarra';
        //$this->$girls[]='Madeleine Swann ';
    }
    
    public static $case_solved = null;


    public static $girls_met = null;

    public static function getAvgGirlsPerCase(){
        return $avg =  (static::$girls_met/ static::$case_solved);

    }
}

$spectre = new onecase('2015');

$spectre ->setName('Spectre');
$spectre ->setEnemy('Ernst Stavro Blofeld');

$spectre->girls[]='Estrella';
$spectre->girls[]='Lucia Sciarra';
$spectre->girls[]='Madeleine Swann';

//14

$casino = new onecase('2006');
$casino->setName('Casino Royale');
$casino -> setEnemy('Le Chiffre ');

$casino->girls[]='Vesper Lynd';
$casino->girls[]='Solange Dimitrios ';

//20
echo 'On average Bond has met' . static::getAvgGirlsPerCase() . ' girls per case.';




