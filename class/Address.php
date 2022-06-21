<?php

trait Address{
  private $street;
  public $street_number;
  public $city;
  public $state;
  public $postal_code;

  // getter e setter...

  public function setStreet($_street){
    $this->street = $_street;
  }

  public function getFullAddress(){
    return $this->street . ' ' . $this->street_number;
  }

  public function getStreet(){
    return $this->street;
  }
}