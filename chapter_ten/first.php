<?php

//if there are more than one possibilities
$low = 10;
$high = 30;
$temp = 20;

/// false or false comes false

if ($temp < $low or $temp > $high){
    echo 'Stay inside';
}
else{
    echo 'Nice temperature out.';
}

// nice temperature out

//we can also write it using ternary operator
$ter = ($temp < $low || $temp > $high) ? "Stay in" : "Go out";
echo $ter;

// Go out