<?php
$float = 3.12345;                    
echo (string) $float . "<br>";
echo strval($float) . "<br>";
$str = "12";
$variable = (int) $str;
if (is_int($variable)){
    echo "Its integer. <br>";
}
echo $variable . "<br>"; 

/**
3.12345
3.12345
Its integer.
12
 */