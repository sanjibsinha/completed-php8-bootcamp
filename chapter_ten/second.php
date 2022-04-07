<?php

//if there are more than one possibilities
$low = 10;
$high = 30;
$temp = 20;

if ($temp > $high) {
    echo "Don’t go out.";
} elseif ($temp < $low) {
    echo " Don’t go out.";
} else {
    echo " It is good outside.";
}

// it is good outside