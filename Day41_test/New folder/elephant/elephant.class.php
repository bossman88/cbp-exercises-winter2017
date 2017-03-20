<?php

/*--- write your code ONLY between here ---*/

  // your code

/*--- and here ---*/

class elephant extends animal
{
  public function feed()
  {
    $food = new food();

    $this->stomach[] = $food;
  }
}