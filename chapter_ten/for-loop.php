<?php

for ($index = 0; $index < 3; $index++) {

    if ($index == 0) {
        continue;
    }
    echo "1/$index : " . 1 / $index . "<br>";
    //$index++;

}

/**
 * 
1/1 : 1
1/2 : 0.5

 */

for ($index = 0; $index < 3; $index++) {
    echo "$index : " . $index . "<br>";
}

/**
0 : 0
1 : 1
2 : 2
 
 */

