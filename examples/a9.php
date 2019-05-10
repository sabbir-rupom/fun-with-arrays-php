<?php

/**
 * Array problem 9
 * 
 * Suppose a business organization provides various cards [ e.g platinum, gold ] to their users based on their subscription criteria. 
 * Each cards has unique id number with 2 capital letter prefix in each. Now, find all the customers whose cards are platinum 'PT' 
 * 
 * Used array-functions:
 * -- array_column()
 * -- array_filter()
 */

function getPlatinam($id) {
    return stristr($id, 'PT');
}

$customers = array_column(users(), 0, 1);

$result = array_filter($customers, 'getPlatinam', ARRAY_FILTER_USE_KEY );

echo '<pre>';
print_r($result);

function users() {
    return [
      [ 'John', 'PT8723' ],  
      [ 'Danny', 'GD9372' ],  
      [ 'Raegal', 'GD4023' ],  
      [ 'Drogon', 'PT7394' ],  
      [ 'Viserion', 'PT9213' ],  
      [ 'Cersei', 'GD3824' ],  
      [ 'Tyrion', 'GD9533' ],  
      [ 'Arya', 'PT4587' ],  
      [ 'Ned', 'GD7486' ],  
      [ 'Podric', 'PT0485' ]  
    ];
}