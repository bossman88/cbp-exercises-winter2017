<?php

class animal
{
    protected $hungry = true;

    public function eat()
    {
        $this->hungry = false;
    }

}

class dog extends animal
{
    use domesticated;
}

class wolf extends animal
{

}
//if animal is domesticated it will have domesticated properties and functions
trait domesticated
{

    public $owners_mood = 'unhappy';

    public function beFed()
    {
        $this->hungry = false;

        $this->owners_mood = 'happy';
    }
}

trait understandsCommands
{
    public function sits(){
        echo 'sitting';
    }

    public $aport = true;
}




class baby
{
    use domesticated;

    use understandsCommands;
}

$ben = new dog();
$ben->eat();

$fang = new wolf();
$fang -> eat();

$billy = new baby();


var_dump($ben);
var_dump($fang);
var_dump($billy);

