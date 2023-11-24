<?php
// include "Bird.php";

//Uztaisi objektu
// $myBird = new Bird("black", 543);
// // $myBird->color="black";

// // echo $myBird->color ." ";
// echo $myBird->fly() ." ";
include "Car.php";

$Car1 = new Car("BMW", 300);
$Car2 = new Car("Volvo", 1000);
// echo $Car1;
echo $Car2->increaseMileage(240);
?>