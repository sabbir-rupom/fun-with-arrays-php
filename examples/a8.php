<?php

/**
 * Array problem 8
 * 
 * A simple problem from hackerrank.  
 * Given 'n' names and phone numbers, assemble a phone book that maps friend's names to their respective phone numbers. 
 * You will then be given an unknown number of names to query your phone book for. For each queried, print the associated entry 
 * from your phone book on a new line in the form ' name=phoneNumber '; if an entry for is not found, print ' Not found ' instead. 
 * 
 * Used array-functions:
 * -- explode()
 * -- count()
 * -- array_key_exists()
 * -- current()
 * -- next()
 */

$search = ['fwdramuth', 'nqcrxplje', 'kdffsmn', 'eksy', 'jdfjned', 'abnjnewie'];

$arrDictionary = [];
$i = $m = 0;

foreach (dictionary() as $v) {
    $v1 = explode(' ', trim($v));
    if (count($v1) == 2) {
        $arrDictionary[$v1[0]] = $v1[1];
    }
}

while (!empty(current($search))) {
    $input = current($search);
    if (array_key_exists($input, $arrDictionary)) {
        echo $input . '=' . $arrDictionary[$input] . '<br>';
    } else {
        echo 'Not found <br>';
    }
    next($search);
}

function dictionary() {
    return [
        'alaoulsmc 26362627',
        'dkbxbxipn 64441384',
        'fwdramuth 18481410',
        'wovoqvkmm 50262253',
        'eksy 56257547',
        'kydc 21088471',
        'rhpovbaux 28346885',
        'nqcrxplje 56424553',
        'dmjbqcauv 60018360',
        'abnjnewie 87405213',
        'nntkvxjod 38031053',
        'gchqlkvvs 72611137',
    ];
}
