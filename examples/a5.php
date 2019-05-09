<?php

/**
 * Array problem 5
 * 
 * Suppose your coaching class has a lot of students having various nicknames. Among them some has same nicknames. 
 * Now find out those nicknames which has appeared more than once
 * 
 * Used array-functions:
 * -- array_column()
 * -- array_count_values()
 */
$students = [
    ['id' => 1, 'name' => 'Karim'],
    ['id' => 2, 'name' => 'Rony'],
    ['id' => 3, 'name' => 'Shaila'],
    ['id' => 4, 'name' => 'Monica'],
    ['id' => 5, 'name' => 'Rony'],
    ['id' => 6, 'name' => 'Chandan'],
    ['id' => 7, 'name' => 'Shaila'],
    ['id' => 8, 'name' => 'Rony'],
    ['id' => 9, 'name' => 'Shraboni'],
    ['id' => 10, 'name' => 'Jon'],
];

$arrNames = array_count_values(array_column($students, 'name'));

echo 'Nicknames which has appeared more than once are:' . '<br>';

$i = 1;
foreach ($arrNames as $key => $value) {
    if ($value > 1) {
        echo "{$i}) {$key} <br>";
        $i++;
    }
}