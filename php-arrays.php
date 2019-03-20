<?php

$cars = array("Toyota", "Honda", "Volkswagen");

$cars[0] = "Chevy";

$fullNames = array("John" => "Smith", "John" => "Doe", "Jane" => "Doe");

foreach($cars as $carBrand)
{
	echo $carBrand . '<br>';
}

foreach($fullNames as $key => $value)
{
	echo "My name is " . $key . " " . "$value";
	echo "<br>";
}	

print_r($cars);

$cars = array(0 => "Mitsubishi");

echo '<br>';

print_r($cars);

echo "<br>";

echo count($fullNames) . "<br>";

echo is_Array($fullNames) . "<br>";

ksort($fullNames);

print_r($fullNames);

?>
