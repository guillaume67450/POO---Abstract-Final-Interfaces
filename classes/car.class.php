<?php

class Car extends Vehicle implements LightableInterface
{
  public function __construct()
  {

  }

  function switchOn()
  {
    return true;
  }

  function switchOff()
  {
    return false;
  }
}