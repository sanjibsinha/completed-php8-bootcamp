<?php

function findTheAverage()
{

    $parameters = func_get_args();

    $data = 0;

    for ($index = 0; $index < func_num_args(); $index++) {

        $data .= $parameters[$index];
    }

    $res = str_split($data);
    function average($array)
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
        $finalCount = $NumberOfNUmbers - 1;
        //if there is no input
        if (count($array) > 0) {
            //we'll get some verage value
            $average = $TotalOfTheNumbers / $finalCount;
            return $average;
        } else {
            echo 'No input';
        }
    }
    return average($res);
}

echo findTheAverage(1, 2, 3, 4, 5);

// output: 3