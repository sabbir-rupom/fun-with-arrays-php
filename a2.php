<?php

/**
 * Array problem 2
 * 
 * Suppose you have a class of 15 students each having an unique roll. Now create groups of 3 students at random and show the rolls with associated student name of each group. 
 * Used array-functions:
 * -- array_keys()
 * -- shuffle()
 * -- array_chunk()
 */

$class10 = [
    1 => 'Rahim',
    'Karim', 'Johana', 'Rupa', 'Sazid', 'Rohan', 'Asad', 'Maya', 'Bashar', 'Kuddus', 'Jafor', 'Mishu', 'Shoma', 'Rajib', 'Mokles'
];

shuffle_with_keys($class10);

$groups = array_chunk($class10, 3, TRUE);

foreach ($groups as $k => $v) {
    $groupText = 'Group ' . ($k + 1);
    echo $groupText . '<br>';
    print str_repeat('-', strlen($groupText) * 2) . '<br>';

    if (is_array($v)) {
        foreach ($v as $roll => $name) {
            echo 'Roll: ' . $roll;
            printf(' [ %s ] ', $name);
            echo('<br>');
        }

        print '<br>';
    }
}

exit;

function shuffle_with_keys(&$array) {
    /* Auxiliary array to hold the new order */
    $aux = array();
    /* We work with an array of the keys */
    $keys = array_keys($array);
    /* We shuffle the keys */
    shuffle($keys);
    /* We iterate thru' the new order of the keys */
    foreach ($keys as $key) {
        /* We insert the key, value pair in its new order */
        $aux[$key] = $array[$key];
        /* We remove the element from the old array to save memory */
        unset($array[$key]);
    }
    /* The auxiliary array with the new order overwrites the old variable */
    $array = $aux;
}

// uksort($array, function() { return rand() > rand(); });
