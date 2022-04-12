<?php
declare(strict_types=1);
// suppose we have some numbers in array
// but we drclare int
// $numbers = 56;
$numbers = [2, 5, 6, 2, 1];
// echo average($numbers); // compile time error
// Expected type Array, found int

echo average($numbers);

function average(array $array)
{

    $TotalOfTheNumbers = 0;
    $average = 0;
    $NumberOfNUmbers = 0;

    foreach ($array as $value) {
        //the total of the numbers
        $TotalOfTheNumbers = $TotalOfTheNumbers + $value;
    }
    //how many numbers are there
    $NumberOfNUmbers = count($array);

    //if there is no input

    if (count($array) > 0) {

        //we'll get some average value
        $average = $TotalOfTheNumbers / $NumberOfNUmbers;
        return $average;
    } else {

        echo 'No input';
    }
}

// 3.2