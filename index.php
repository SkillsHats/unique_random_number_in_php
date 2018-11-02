<?php

// It will return an array
function UniqueRandomNumbers($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}

$min = 0;
$max = 100;
$quantity = 10   // Number of result

print_r( UniqueRandomNumbers($min, $max, $quantity) );
