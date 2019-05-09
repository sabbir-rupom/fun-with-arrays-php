<?php

/**
 * Array problem 7
 * 
 * Create an array in tabular format where each row will have at-most 7 column and balance the column values vertically incremental way 
 * Used array-functions:
 * -- count()
 * -- array_shift()
 * -- range()
 */

header('Content-Type: text/plain');

$data = array_split_vertical(range(1, 31), 7);
foreach ($data as $row) {
    foreach ($row as $value) {
        printf('[%2s]', $value);
    }
    echo "\r\n";
}

function array_split_vertical($data, $columns) {
    $n = count($data);
    $per_column = floor($n / $columns);
    $rest = $n % $columns;

    // The map
    $per_columns = array();
    for ($i = 0; $i < $columns; $i++) {
        $per_columns[$i] = $per_column + ($i < $rest ? 1 : 0);
    }
    
    $tabular = [];
    foreach ($per_columns as $rows) {
        for ($i = 0; $i < $rows; $i++) {
            $tabular[$i][] = array_shift($data);
        }
    }

    return $tabular;
}