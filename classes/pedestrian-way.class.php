<?php

final class PedestrianWay extends HighWay
{
  public function __construct()
  {

  }

  public function addVehicule($vehicule)
  {
    if ($vehicule instanceof Bike || $vehicule instanceof Skateboard)
      $this->currentVehicles[] = $vehicule;
  }
}