<?php 
include_once "Vehicle.php";
    class Train extends Vehicle {

        public $trackGauge;

        public function __construct($brand, $trackGauge, $mileage) {
            parent::__construct($brand, $mileage);
            $this->trackGauge=$trackGauge;

        }
        public function __destruct() {
            echo $this->brand ." is dead at mileage " .$this->mileage;
        }
        public function increaseMileage($amount) {
            $this->mileage = $this->mileage + $amount ;
        }
      static function makeNoise() {
            echo "Choo, Choo!";
        }
    }
?>