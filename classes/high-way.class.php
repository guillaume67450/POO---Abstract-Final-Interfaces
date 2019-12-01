<?php

// NOTE Can only be inherited by another class
abstract class HighWay
{
  /** @var array */
  protected $currentVehicles;
  /** @var int */
  protected $nbLane;
  /** @var int */
  protected $maxSpeed;

  public function __construct()
  {

  }

  abstract function addVehicule($vehicule);

  /**
   * Get the value of currentVehicles
   */
  public function getCurrentVehicles() : array
  {
    return $this->currentVehicles;
  }

  /**
   * Set the value of currentVehicles
   */
  public function setCurrentVehicles($currentVehicles) : void
  {
    $this->currentVehicles = $currentVehicles;
  }

  /**
   * Get the value of nbLane
   */ 
  public function getNbLane() : int
  {
    return $this->nbLane;
  }

  /**
   * Set the value of nbLane
   */
  public function setNbLane(int $nbLane) : void
  {
    $this->nbLane = $nbLane;
  }

  /**
   * Get the value of maxSpeed
   */
  public function getMaxSpeed() : int
  {
    return $this->maxSpeed;
  }

  /**
   * Set the value of maxSpeed
   */
  public function setMaxSpeed(int $maxSpeed) : void
  {
    $this->maxSpeed = $maxSpeed;
  }
}