<?php

/**
 * Array problem 6
 * 
 * Suppose the students of science department in college have been assigned to required respective subjects. Now they have to choose the optional subject.
 * They are Higher Math and ICT, both can't be acquired by same student. If the distribution of higher math subject is already finished 
 * Find the students name and roll who have chosen the ICT subject 
 * 
 * Used array-functions:
 * -- array_column()
 * -- array_diff_assoc()
 */
$science = [
    ['id' => 1, 'name' => 'John'],
    ['id' => 2, 'name' => 'Shafi'],
    ['id' => 3, 'name' => 'Karim'],
    ['id' => 4, 'name' => 'Rana'],
    ['id' => 5, 'name' => 'Jihan'],
    ['id' => 6, 'name' => 'Sakib'],
];

$hMath = [
    ['id' => 2, 'name' => 'Shafi'],
    ['id' => 4, 'name' => 'Rana'],
    ['id' => 5, 'name' => 'Jihan']
];


$scienceArr = array_column($science, 'name', 'id');
$hMathArr = array_column($hMath, 'name', 'id');

$ictArr = array_diff_assoc($scienceArr, $hMathArr);

foreach ($ictArr as $key => $value) {
    echo "Name: {$value}, Roll: {$key} <br>";
}