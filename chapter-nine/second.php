<?php

$friends = [

    "Babu" => [
        "age" => 12,
        "hobby" => "singing"
    ],
    "Mana" => [
        "age" => 9,
        "hobby" => "dancing"
    ],
    "Babua" => [
        "age" => 10,
        "hobby" => "peeping"
    ],
    "Bappa" => [
        "age" => 12,
        "hobby" => "reading"
    ],
    "Anju" => [
        "age" => 8,
        "hobby" => "playing"
    ],

];


// print_r($friends);

foreach ($friends as $key => $value) {
    echo $key . "<br>";
    foreach ($value as $key => $element) {
        echo $key . "=" . $element . "<br>";

    }

    echo '<br>';

}
?>  

/**
 Babu
age=12
hobby=singing

Mana
age=9
hobby=dancing

Babua
age=10
hobby=peeping

Bappa
age=12
hobby=reading

Anju
age=8
hobby=playing

*/