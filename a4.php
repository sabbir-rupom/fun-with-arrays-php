<?php

/**
 * Array problem 4
 * 
 * Create an array from 2 arrays, where 1st array values will become the array keys of 2nd array values
 * Used array-functions:
 * -- count()
 * -- array_fill()
 * -- array_merge()
 * -- array_slice()
 * -- array_combine()
 */

$a = ['a', 'b', 'c', 'd'];
$b = ['w', 'x', 'y'];

$count_a = count($a);
$count_b = count($b);

if ($count_a > $count_b) {
//    $a = array_slice($a, 0, $count_b);
    $addArr = array_fill(0, $count_a - $count_b, null);
    $b = array_merge($b, $addArr);
    
} elseif ($count_a < $count_b) {
    $b = array_slice($b, 0, $count_a);
}

$res = array_combine(array_values($a), array_values($b));

echo '<pre>';
print_r($res);
