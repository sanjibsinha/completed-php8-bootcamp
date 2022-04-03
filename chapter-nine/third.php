<?php

$arrayWithKey = [

    "name" => "Mutudu",
    "age" => "14",
    "location" => "London",
    "phone" => 123456,
    "hobby" => "gardening"

];
$arrayWithAnotherKey = [

    "name" => "Mutudu",
    "age" => "14",
    "location" => "London",
    "phone" => 123456,
    "hobby" => "gardening"

];


// Accessing array elements using for each loop
foreach($arrayWithKey as $key) {
    echo $key . "<br>"; 
}

//array operators are little bit different than normal operators
if ($arrayWithKey === $arrayWithAnotherKey) {

    echo 'These two arrays are identical.';

}
else {

    echo 'They are not identical.';
}
?>  
               
/**

 Mutudu
14
London
123456
gardening

 These two arrays are identical.

*/               