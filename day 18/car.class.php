<?php

class car
{
    public $color = null;

   public $manufacturer = 'Skoda';

    public $model = null;

    public $price = null;

    public $nr_of_wheels = 4;

    public $fuel_type = 'petrol';

    public $tire_type = null;

    public $owner = 'manufacturer';

    public $current_speed = 0;

    public function speed_up()
    {
        $this->current_speed += 10;     
    }

    public function brake()
    {
        $this->current_speed -= 10;
    }

    public function __construct($color, $manufacturer, $model)
    {
        $this -> color = $color;
        $this -> manufacturer = $manufacturer;
        $this -> model = $model;
    }

    public function get_stolen()
    {
        $this->owner = 'chop-shop';
    }

    public function be_bought($new_owner)
    {
        $this->owner = $new_owner;
    }


// get method 
    public function getManufacturer(){
        // check if user has permission to view manufacturer
        return $this-> manufacturer;
    }
}



// no car was made yet


$new_car = new car(); // a new car is created
//$new_car->setManufacturer('Skoda'); // it got it's manufacturers mark
$new_car->model = 'Favorit'; // it got it's brand

echo $new_car -> getManufacturer();

// echoing public property
//echo $new_car -> manufacturer;

$new_car->price = 400000; // the car is given a price

$new_car->price = 1000000; // the car is on sale

$new_car->be_bought('Jan'); // I buy the car

$new_car->speed_up(); // $new_car->speed == 10
$new_car->speed_up(); // $new_car->speed == 20
$new_car->speed_up(); // $new_car->speed == 30
$new_car->speed_up(); // I sped up to 40 (kmph)

$new_car->brake(); // $new_car->speed == 30
$new_car->brake(); // $new_car->speed == 20
$new_car->brake(); // $new_car->speed == 10
$new_car->brake(); // $new_car->speed == 0 - I stopped

$new_car->get_stolen();

$new_car->nr_of_wheels = 0; // the wheels are chopped off


$my_car = new car('red', 'Skoda','Favorit'); // new car with red color,skoda, favorit

echo $my_car->manufacturer;