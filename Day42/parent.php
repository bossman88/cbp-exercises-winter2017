<?php

class  animal
{
    public function sleep()
    {
        echo " zZZZZZZZZzzzzz";
    }
}


class cat extends animal
{
    public function sleep()
    {
        echo "Purrs<br>";

        parent::sleep();
    }
}

$oliver = new cat();
$oliver->sleep();