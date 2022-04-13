<?php

$name = "babu";
$location = "nabagram";
$hobby = "singing";

$array1 = [

    'name', 'location', 'hobby'

];

$age = 10;

$array2 = compact('age', $array1);

print_r($array2);

if (array_key_exists('name', $array2)) {

    echo $array2['name'];
}

echo '<hr>';

/* 
 * i want to create a function where i will pass key and array to test
 * whether it exists, if it exists then it will render the value
 * 
 */

$array = [

    "name" => "bappa",
    "location" => "nabagram",
    "age" => 10

];

class ClassName
{

    public $key;
    public $name;
    public $array = [];

    function __construct($key, $array)
    {

        $this->key = $key;
        $this->array = $array;
    }

    function functionName($name)
    {

        $this->name = $name;

        if (array_key_exists($this->name, $this->array)) {

            return $this->array["{$this->name}"];
        } else {

            return FALSE;
        }
    }
}

$className = new ClassName('location', $array);
echo $className->functionName('location');


/**
Array ( [age] => 10 [name] => babu [location] => nabagram [hobby] => singing ) babunabagram
 */