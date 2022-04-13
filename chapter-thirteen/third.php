<?php
//we're going to return simple value like addition 
//of two numbers
function addition($param1, $param2)
{
    $total = 0;
    $total = $param1 + $param2;
    return $total;
}
echo addition(10, 20);
echo '<br>';
//returning arrays                    
function createArray($number)
{
    for ($index = 0; $index <= $number; $index++) {
        $array[] = $index;
    }
    $newArray = array_shift($array);
    var_dump($array);
}
createArray(4);

/**
30
array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) } 
 */
