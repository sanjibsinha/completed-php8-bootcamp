<?php
declare(strict_types=1);

function sum($a, $b): int {
    return $a + $b;
}

echo sum(3, 4);

echo '<br>';

function greet($name) : string {
    return $name;
}

try {
    echo greet(1);
} catch (TypeError $e) {
    echo 'Error: ', $e->getMessage();
}

/**
7
Error: greet(): Return value must be of type string, int returned
 */