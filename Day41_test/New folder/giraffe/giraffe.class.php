<?php

/*--- write your code ONLY between here ---*/

  // your code

/*--- and here ---*/

class giraffe extends animal
{
  public function feed()
  {
    $food = new food();

    $this->stomach[] = $food;
  }
}