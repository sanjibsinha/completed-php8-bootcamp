<?php

$num = 4;

//we want to square the value in a variable
//will that change the original value?
//the answer is NO
function squarer($number)
{

    $number *= $number;
    return $number;
}
//before the function call
echo "The original value - " . $num;
echo '<br>';
squarer($num);
echo '<br>';
//after the function call
echo "After the function call, the original value remains same - " . $num;
echo '<br>';

/*
* our conclusion:
* the function could not change the original value
* a copy of that value was passed and the original value remained unchanged
* But, if we pass the value by reference, the original value is also changed
 */

function passByRef(&$param)
{

    $param *= $param;
    return $param;
}

passByRef($num);
//after the new function call
echo "After passing data by reference, the original value takes the new value - " . $num;

/**
 * 
The original value - 4

After the function call, the original value remains same - 4
After passing data by reference, the original value takes the new value - 16
 */