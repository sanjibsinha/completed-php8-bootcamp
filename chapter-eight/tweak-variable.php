<h2>
    How to retain value in Function
</h2>

<?php

//normally function does not change value
// the value inside them is reset every time you call it

function NormalFunction()
{

    $value = 0;
    $value++;
    return $value;

}

// now if we call this function many times, each time the value is reset to
// the old value

echo NormalFunction();
echo '<br>';
echo NormalFunction();
echo '<br>';
echo NormalFunction();
echo '<br>';
echo NormalFunction();
echo '<br>';

// how can we solve this problem?
// the first way, using global
echo 'Using Global';
function GlobalFunction()
{

    global $globalvalue;
    $globalvalue++;
    return $globalvalue;

}

echo '<br>';
echo GlobalFunction();
echo '<br>';
echo '<br>';
echo GlobalFunction();
echo '<br>';
echo '<br>';
echo GlobalFunction();
echo '<br>';
echo '<br>';
echo GlobalFunction();
echo '<br>';

// the second way, using static

echo 'Using Static';
function StaticValueFunction()
{

    static $staicValue = 0;
    $staicValue++;
    return $staicValue;

}

echo '<br>';
echo StaticValueFunction();
echo '<br>';
echo '<br>';
echo StaticValueFunction();
echo '<br>';
echo '<br>';
echo StaticValueFunction();
echo '<br>';
echo '<br>';
echo StaticValueFunction();
echo '<br>';
?>

