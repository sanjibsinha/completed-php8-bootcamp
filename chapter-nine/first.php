<h2>
 For Loop for Arrays
</h2>               
<?php
$array = ["baba", "ma", "chele", "meye"];

for ($index = 0; $index < count($array); $index++) {
    if ($index == 1) {
        echo $array[$index];
    }
}
?>

/**
output:
For Loop for Arrays
ma
*/