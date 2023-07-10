<?php
//Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la variable original
$name = "Madelaine Pereira";
$name = strtoupper($name);
echo $name;

//Imprime en pantalla la longitud de la variable tipo string
$person = "Madelaine";
echo strlen($person);

//Imprime en pantalla la cantidad de palabras de la variable tipo string
$fullName = "Madelaine Jhoana Pereira Asuaje";
echo str_word_count("Madelaine Jhoana Pereira Asuaje");

//Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la variable original
$country = "Spain";
echo strrev("Spain");

//Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla
$pet = "cat";
$pet = "michi";
echo ($pet);

//Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla

$myage = 28;
$favoritenumber = 6;
var_dump ($myage, $favoritenumber);

//Suma ambas variables de tipo integer e imprime en pantalla

$myage = 28;
$favoritenumber = 6;
var_dump ($myage + $favoritenumber);

//Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y consola a las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato en pantalla y consola

$one = 1;
$zero = 0;
var_dump($one, $zero);

$one = true;
$zero = false;
var_dump($one, $zero);

//Crear función que reciba como parámetros dos números y que retorne la suma de ellos. Imprime en pantalla y por consola el resultado

function sumofvalues($a, $b) {
	return $a + $b;
}

echo sumofvalues(20, 20);

//Crear función que determine si un número es par o impar. Imprime por consola y pantalla

function oddOrEven($number) {
	if ($number % 2 == 0 )
	{
		echo "$number is even";
	}
	else{
		echo "$number is odd";
	}
}

echo oddOrEven(100);
echo oddOrEven(40);
echo oddOrEven(15);

function greaterOrLess($biggerNumber) {
	if ($biggerNumber > 10)
	{
		echo "$biggerNumber is greater than 10";
	}
	else if ($biggerNumber == 10)
	{
		echo "$biggerNumber is equal to 10";
	}
	else{
		echo "$biggerNumber is less than 10";
	}
}

echo greaterOrLess(12);
echo greaterOrLess(10);
?>