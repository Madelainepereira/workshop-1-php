<?php
//string
$name = "Madelaine Pereira";
echo $name;
//integer
$age = 28;
echo $age;
//float
$randomNumber = 10.080;
echo $randomNumber;
//boolean
$iAmVenezuelan = true;
var_dump($iAmVenezuelan);
//array
$hobbies = ['Train','Swim','Read'];
var_dump($hobbies);
//object
class Car {
	public $color;
	public $model;
	public function __construct($color, $model) {
	  $this->color = $color;
	  $this->model = $model;
	}
	public function message() {
	  return "My car is a " . $this->color . " " . $this->model . "!";
	}
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();
//NULL Value
$x = null;
var_dump($x);
?>
