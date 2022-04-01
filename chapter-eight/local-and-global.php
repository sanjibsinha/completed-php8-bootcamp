<h2>
    Local and Global
</h2>                           
            <?php

$value = 12;

echo "We are calling value : " . $value . "<br>";

echo "Calling function that could not take outside value. <br>";
localFunc();
echo "Calling function that can take outside value. <br>";
globalFunc();

function localFunc()
{

    $value = 24;

    echo "This is inside value, defined differently : " . $value . "<br>";

}

function globalFunc()
{

    global $value;

    echo "We are accessing outside value through this function : " . $value . "<br>";

}
?>