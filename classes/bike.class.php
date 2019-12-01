<?php

class Bike extends Vehicle implements LightableInterface
{
  public function __construct()
  {

  }

  function switchOn() : bool
  {
    if ($this->getCurrentSpeed() > 10)
    {
      return true;
    }
    return false;
  }

  function switchOff() : bool
  {
    return false;
  }
}