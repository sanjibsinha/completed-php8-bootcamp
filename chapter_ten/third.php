<?php


$variable = 45;

switch ($variable) {
    case 5:
    case 10:
    case 14:
        echo 'Too cold.';
        break;
    case 15:
    case 20:
    case 22:
        echo 'Moderate.';
        break;
    case 30:
    case 35:
    case 40:
        echo 'Too hot.';
        break;
    default:
        echo 'If all cases fail, this will be the final value: it is not good out.';
        break;
}

// If all cases fail, this will be the final value: it is not good out.