<?php

abstract class Vehicle {
    public $brand;
    protected $mileage; 

    public function __construct($brand, $mileage) {
        $this->brand=$brand;
        $this->mileage=$mileage;
    }
    abstract static function makeNoise();
}



?>