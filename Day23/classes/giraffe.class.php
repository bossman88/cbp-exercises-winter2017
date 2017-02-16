<?php


class giraffe extends animal
{
    public static $number_of_giraffes = 0;

    public static $giraffes_in_forest = 0;

    public static $giraffes_by_the_pond = 0;

    public $is_thirsty = true;

    public $is_hungry = true;


    public $name = 'Micky';

    public $location = 'forest';

    public function __construct($name, $location = 'forest')
    {
        $this->name = $name;
        static::$number_of_giraffes +=1;

        $this->location = $location;
     

        switch($this->location)
        {
            case 'forest':
                static::$giraffes_in_forest +=1;
                break;
            case 'pond':
                static::$giraffes_by_the_pond +=1;
                break;
                default:
                break;
        }
    }

    public function drink()
    {
        $this->is_thirsty = false;
    }

    public function eat()
    {
        $this->is_hungry = false;
    }

    public function canItFly()
    {
        if($this->can_fly)
        {
            echo "It can fly";
        }
        else{
            echo "It can not fly";
        }
    }

    public function sleep()
    {
        $this->is_thirsty = true;
        $this->is_hungry = true;
    }


    public function go_to_forest()
    {

        

        $this->location = 'forest';
        static::$giraffes_in_forest +=1;
    }

    public function go_to_pond()
    {
        $this->location = 'pond';
        static::$giraffes_by_the_pond +=1;
    }



}