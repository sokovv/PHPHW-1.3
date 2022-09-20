<?php

// Основное задание
$variable = 3.14;
// $variable = 3;
// $variable = 'one';
// $variable = true;
// $variable = null;
// $variable = [];

echo 'Основное задание: ';
if (is_bool($variable)) {
    echo 'type is bool' . "\n";
} elseif (is_float($variable)) {
    echo 'type is float' . "\n";
} elseif (is_int($variable)) {
    echo 'type is int' . "\n";
} elseif (is_string($variable)) {
    echo 'type is string' . "\n";
} elseif (is_null($variable)) {
    echo 'type is null' . "\n";
} else {
    echo 'type is other' . "\n";
}

// Дополнительное задание

$variableNew = 'one';
echo 'Дополнительное задание: ';

switch
(gettype($variableNew)) {
    case
    'boolean':
        echo 'type is bool';
        break;
    case
    'string':
        echo 'type is string';
        break;
    case
    "integer":
        echo 'type is int';
        break;
    case
    "double":
        echo 'type is float';
        break;
    case
    "NULL":
        echo 'type is null';
        break;
    default:
        echo 'type is other';
}
