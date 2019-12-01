<?php

final class MotorWay extends HighWay
{
  public function __construct()
  {

  }

  public function addVehicule($vehicule)
  {
    if ($vehicule instanceof Car)
      $this->currentVehicles[] = $vehicule;
  }
}