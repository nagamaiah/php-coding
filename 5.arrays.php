<?php

echo "<h3>PHP arrays and array methods</h3>";

// An array is data structure that holds multiple values of different types under a single variable name

// Types of arrays in php 
// 1. Simple Array (numerical indexed)  (index starts with 0)  Ex: ["raju", 23, "hyd"];
// 2. associative Array (associative indexed) (key value pair)   EX: ["name"=>"raju", "age"=>23, "location"=>"Hyd"];

$simpleArray = ["raju", 23, "hyd", 34.3, true];
$assocArray = ["name"=>"raju", "age"=>23, "temperature"=>25.4, "location"=>"Hyd"];
$numbers = [3,4,5,6,5,3,2,6,12,34,4,23,2,4];

// PHP Array Functions ::
// array() - 
// array_keys()
// array_values()
// array_chunk()
// array_combine()
// array_flip()
// array_filter()
// array_key_exists() — Checks if the given key or index exists in the array
// array_key_first() — Gets the first key of an array
// array_key_last() — Gets the last key of an array
// array_map() — Applies the callback to the elements of the given arrays
// array_pop — Pop the element off the end of array
// array_push — Push one or more elements onto the end of array
// array_reverse 
// array_search 
// array_sum
// array_walk 
// array_walk_recursive 
// in_array()
// count()
// compact()
// extract()


//  Array sorting functions
// 	1. sort() -- ascending order sorting 
// 	2. rsort() -- descending order sorting 
// 	3. asort() -- ascending order sorting in terms of value
// 	4. ksort() -- ascending order sorting in terms of key
// 	5. arsort() -- descending order sorting in terms of value
// 	6. krsort() -- descending order sorting in terms of key

echo "<pre>";

// print_r(array_keys($assocArray));
// print_r(array_keys($simpleArray));

// print_r(array_values($simpleArray));
// print_r(array_values($assocArray));

// echo count($simpleArray);
// echo count($assocArray);

// add or push elements to array
$simpleArray[] = null;
$simpleArray[] = [34,'gh',67.67];

array_push($simpleArray, 'asdf',45,'sadf asdf',[34,'df',false]);

// print_r($simpleArray);
// var_dump($simpleArray[5]); // null


$keys = ["name", "age", "place"];
$values = ["sam", 33, "Chennai"];

// Fatal error:  Uncaught ValueError: array_combine(): Argument #1 ($keys) and argument #2 ($values) must have the same number of elements
print_r(array_combine($keys, $values));
// var_dump(array_key_exists("age", $assocArray));
// var_dump(array_key_exists(3, $simpleArray));


// var_dump(in_array("hyd", $simpleArray));
// var_dump(array_search(34.3, $simpleArray));


$evens = array_filter($numbers, function($value){
    return ($value%2 == 0);
});

echo "<pre>";
// print_r($evens);

// array_walk() — Apply a user supplied function to every member of an array

// array_walk($assocArray, function($a, $b){
//     echo $b." - ".$a;
//     echo "<br>";
// });



// compact() and extract()
// PHP provides two functions, extract( ) and compact( ), that convert between arrays and variables.
// The compact() function is used to create an array from variables and their values.
// PHP extract() function does array to variable transformation. It changes over array keys into variable names and array values into variables values.


$username = "max";
$password = "many";
$age = "31";
  
$NAME = array("username", "password");
  
$result = compact($NAME, "age");
      
// print_r($result);


$person = array('name' => 'Fred', 'age' => 35, 'wife' => 'Betty');
extract($person);
// echo $name."<br/>";
// echo $age."<br/>";
// echo $wife;


// The list() function is used to assign values to a list of variables in one operation.
// list($one, $two, $three) = ['one', 'two', 'three'];





$fruits = ['apple', 'grapes', 'mangos', 'watermelon', 'pamegranate'];

$user = ['username' => 'sam bro', 'email' => 'sam123@gmail.com', 'phone' => '9344565676'];


echo "<pre>";

// in_array() vs array_search()

// var_dump(in_array(haystack:$user, needle:"username"));  // returns true or false
// var_dump(in_array(haystack:$fruits, needle:"mangos"));

// if(array_search("apple", $fruits) !== false){      // returns index/false
//     echo $fruits[array_search("apple", $fruits)];
// } else {
//     echo "ele not found";
// }


// array_merge() vs array_combine()

$keys = ['username', 'age', 'email'];
$values = ['ram', 23, 'tester123@gmail.com'];

// print_r(array_combine($keys, $values)); // combines keys and values forms a associative array
// print_r(array_merge($keys, $values));   // merges all elements in a single array

// print_r(array_chunk($fruits, 2, true));
// print_r(array_chunk($user, 1));
// print_r(array_chunk($user, 1, true));


// print_r(array_keys($user, '9344565676'));
// print_r(array_keys($fruits, 'mangos'));

 

// array destructuring 
// list($fruit1, $fruit2, $fruit3, $fruit4, $fruit5) = $fruits;
// [$fruit1, $fruit2, $fruit3, $fruit4, $fruit5] = $fruits;
// var_dump($fruit5);







