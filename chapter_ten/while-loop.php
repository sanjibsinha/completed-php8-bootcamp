<?php
$low = 10;
$high = 50;
while ($low < $high) {
    echo "It is hot, the temperature is $high <br>";
    $high = $high - 10;
}
echo "Now it is cold, the temperature is $high.";

/**

It is hot, the temperature is 50 
It is hot, the temperature is 40 
It is hot, the temperature is 30 
It is hot, the temperature is 20 
Now it is cold, the temperature is 10.

 */

$num = 1;
while ($num <= 10) {
    echo "Increment Number : $num <br />";
    $num  = $num  + 1;
}

/**
Increment Number : 1
Increment Number : 2
Increment Number : 3
Increment Number : 4
Increment Number : 5
Increment Number : 6
Increment Number : 7
Increment Number : 8
Increment Number : 9
Increment Number : 10 
 */
