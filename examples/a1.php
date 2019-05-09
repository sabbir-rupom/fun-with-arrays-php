<?php

/**
 * Array problem 1
 * 
 * Create a multi-dimensional array from single-dimensional array and convert all string-based keys to uppercase
 * Used array-functions:
 * -- array_pop()
 * -- array_map()
 * -- array_change_key_case()
 */

/**
 * Recursive function to create multi-dimensional array
 */
function set_element(&$path, $data) {
    return ($key = array_pop($path)) ? set_element($path, array($key => $data)) : $data;
}

echo "<pre>";
$path = array('base', 'category', 'subcategory', 'item');

// Create multidimensional array starting from last index
$array = set_element($path, 'item_value');

/**
 * Recursive function to convert all array keys to uppercase
 * @param array $arr
 * @return array
 */
function array_change_key_case_recursive($arr) {
    return array_map(function($item) {
        if (is_array($item))
            $item = array_change_key_case_recursive($item);
        return $item;
    }, array_change_key_case($arr, CASE_UPPER));
}

print_r(array_change_key_case_recursive($array));
echo "</pre>";
