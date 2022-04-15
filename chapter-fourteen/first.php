<?php

class ExampleOfUnionType
{
    private int|float $foo = 23.8;
    public function squareAndAdd(float|int $bar): int|float
    {
        return $bar ** 2 + $this->foo;
    }
}

$exampleOfUnionType = new ExampleOfUnionType();

echo($exampleOfUnionType->squareAndAdd(120));

echo('<br>');

echo($exampleOfUnionType->squareAndAdd(120.87));

/**
14423.8
14633.3569
 */
