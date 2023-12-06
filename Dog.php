<?php 
include_once "Animal.php";
    class Dog {
        public $name;
        private $age;

        public function __constuct($name, $age) {
            $this->name=$name;
            $this->age=$age;
        }

        public function birthday($one) {
            $this->age += $one ;
        }
        static function woof() {
            echo "Woof Woof";
        }
    }
?>