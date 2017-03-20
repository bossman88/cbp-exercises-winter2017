<?php

/*--- write your code ONLY between here ---*/

  // your code

/*--- and here ---*/

use \food as basic_food;

class food extends basic_food
{
  protected $name = 'leaves';

  public function __toString()
  {
    return $this->name;
  }
}