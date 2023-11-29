<?php
 class Car {
     public $brand;
     private $mileage;
     static $describe ="I am mostly made out of metal <br>";

     public function __construct($b, $m){
        $this->brand=$b;
        $this->mileage=$m;
    }
    public function __destruct(){
        echo $this->brand ." is dead at mileage " .$this->mileage ." ";
    }
    public function increaseMileage($amount) {
        $this->mileage = $this->mileage + $amount ;
    }
    static function makeNoise() {
        echo "shmecko";
    }
 }
?>