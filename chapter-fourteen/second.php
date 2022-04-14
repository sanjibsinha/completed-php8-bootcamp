<?php

class ExampleOfMixedType
{
    protected mixed $exampleOfMixedProperty;

    public function getMixedProperty(mixed $exampleOfMixedProperty): mixed
    {
        return $exampleOfMixedProperty;
    }
}

$firstInstanceOfMixedType = new ExampleOfMixedType();

$secondInstanceOfMixedType = new ExampleOfMixedType();

echo($firstInstanceOfMixedType->getMixedProperty('John'));
echo('<br>');
echo($secondInstanceOfMixedType->getMixedProperty(100));


/**
John
100
 */
