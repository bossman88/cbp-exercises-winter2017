<?php

class food
{
  protected $name = 'unknown';

  public function __toString()
  {
    return $this->name;
  }
}