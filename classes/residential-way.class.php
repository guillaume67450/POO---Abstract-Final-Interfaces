<?php

final class ResidentialWay extends HighWay
{
  public function __construct()
  {

  }

  public function addVehicule($vehicule)
  {
    $this->currentVehicles[] = $vehicule;
  }
}