<?php

echo "<h3>PHP arrays and array methods</h3>";

// An array is data structure that holds multiple values of different types under a single variable name

// Types of arrays in php 
// 1. Simple Array (numerical indexed)  (index starts with 0)  Ex: ["raju", 23, "hyd"];
// 2. Associative Array (associative indexed) (key value pair)   EX: ["name"=>"raju", "age"=>23, "location"=>"Hyd"];

$simpleArray = ["raju", 23, "hyd", 34.3, true];
$AssocArray = ["name"=>"raju", "age"=>23, "temperature"=>25.4, "location"=>"Hyd"];
$numbers = [3,4,5,6,5,3,2,6,12,34,4,23,2,4];

// print_r(array_keys($AssocArray));
// print_r(array_keys($simpleArray));

// print_r(array_values($simpleArray));

// echo count($simpleArray);

// add or push elements to array
$simpleArray[] = null;
$simpleArray[] = [34,'gh',67.67];

array_push($simpleArray, 'asdf',45,'sadf asdf',[34,'df',false]);

echo "<pre>";
print_r($simpleArray);




$keys = ["name", "age", "place"];
$values = ["sam", 33, "Chennai"];

// print_r(array_combine($keys, $values));
// var_dump(array_key_exists("age", $AssocArray));
// var_dump(array_key_exists(3, $simpleArray));


// var_dump(in_array("hyd", $simpleArray));
// var_dump(array_search(34.3, $simpleArray));


$evens = array_filter($numbers, function($value){
    return ($value%2 == 0);
});

echo "<pre>";
// print_r($evens);

// array_walk() — Apply a user supplied function to every member of an array

// array_walk($AssocArray, function($a, $b){
//     echo $b." - ".$a;
//     echo "<br>";
// });

