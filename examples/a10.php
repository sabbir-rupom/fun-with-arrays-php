<?php

/**
 * Array problem 10
 * 
 * Suppose you are in a mobile game development project called `GOT` and you have been assigned a task for showing the point table of users.
 * If some of the users are blocked by admin, show the point table of active user in highest point to lowest order from user database.
 * 
 * Used array-functions:
 * -- array_column()
 * -- array_filter()
 * -- array_diff_key()
 * -- uasort()
 */


$users = getUserData();
$blockedUsers = array_filter(array_column($users, 'blocked', 'name'));
$userPoints = array_column($users, 'point', 'name');

$activeUserPoints = array_diff_key($userPoints, $blockedUsers);

uasort($activeUserPoints, function($a, $b) {
    return $b - $a;
});

echo '<pre>';
print_r($activeUserPoints);

function getUserData() {
    return [
        ['name' => 'John', 'point' => 80, 'blocked' => 0],
        ['name' => 'Danny', 'point' => 70, 'blocked' => 1],
        ['name' => 'Raegal', 'point' => 60, 'blocked' => 1],
        ['name' => 'Drogon', 'point' => 100, 'blocked' => 0],
        ['name' => 'Viserion', 'point' => 20, 'blocked' => 1],
        ['name' => 'Cersei', 'point' => 90, 'blocked' => 1],
        ['name' => 'Tyrion', 'point' => 75, 'blocked' => 0],
        ['name' => 'Arya', 'point' => 99, 'blocked' => 0],
        ['name' => 'Ned', 'point' => 5, 'blocked' => 1],
        ['name' => 'Podric', 'point' => 50, 'blocked' => 0]
    ];
}
