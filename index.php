<?php
// include "Bird.php";
include "Tire.php";
include "Dog.php";
include "Cat.php";
include "Car.php";
include "Train.php";
include "Meth.php";
//Uztaisi objektu
// $myBird = new Bird("black", 543);
// // $myBird->color="black";

// // echo $myBird->color ." ";
// echo $myBird->fly() ." ";

// $Car1 = new Car("BMW", 300);
// $Car2 = new Car("Volvo", 1000);
// $Tire = new Tire(100, "Summer", "Good");
// $Reksis = new Dog("Reksis", 6);
// $Minis = new Cat("Minis", 2);
// $Bricis = new Cat("Brincis", 3);
// echo Car::$describe;
// echo $Tire->size ." " .$Tire->type ." ";
// echo $Reksis->birthday(1);
// echo Train::makeNoise();
// echo Dog::woof();
// echo Cat::woof();

// Meth::addTwo(4,9);
echo Meth::addTwo(4,9);
echo Meth::factiorial(10);
echo Meth::sum([4, 2]) ."<br>";
echo Meth::average([4, 2]);
echo Meth::average2([4, 2]);
// echo $og1;
// echo $Car2->increaseMileage(240);
?>