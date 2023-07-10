<?php
//Crear un array de 10 números

$numbers = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

//Obtén el largo del array e imprime en pantalla y consola

$numbers = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
var_dump(count($numbers));

//Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla

array_push($numbers,"Mary");
print_r($numbers);

//Ahora agrega 2 elementos más a tu array e imprime en pantalla

array_push($numbers, "red","black" );
print_r($numbers);

//Crea un nuevo array y concaténalo con el anterior e imprime en pantalla

$countries = ["Belgium","Spain","England"];
print_r($countries);
$concatenation = array_merge($numbers, $countries);
var_export($concatenation);

//Crear una función que imprima en consola y pantalla todos los números de un array en una lista

$randomnumbers = [22, 33, 44, 55, 66, 77, 88, 99, 110];

function printarray($array) {
	var_dump($array);
}

echo printarray($randomnumbers);

//Crear una función que añade un número al array

function onenumber($array, $a) {
	$array[] = $a;
    echo json_encode($array);
}

var_dump($randomnumbers, 6);

//Crear una función que elimine los números pares de ese array

//Crear una función que devuelva el número mayor de un array

//Crear una función que devuelva el número menor de un array

//Crear un función que convierta en minúsculas todas las letras de un texto

//Crear una función que convierta en mayúsculas todas las letras de un texto

//Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre en mayúscula

//Crear una clase coche con sus atributos y un atributo puede ser de tipo array

//Crear una función que devuelva la marca del carro

//Crear una función que devuelva la cantidad de puertas que tiene el carro

//Crear una función que devuelva un atributo del array
?>