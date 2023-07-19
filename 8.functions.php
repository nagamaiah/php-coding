<?php
declare(strict_types=1);
echo "<h3>PHP Functions</h3>";

// Function is piece of a code that performs a task or process. We can reuse a function once defined. (code reusability)
// Types of functions
// 1. Named Functions
// 2. Anonymous Functions (or) Lambda Functions
// 3. Arrow Functions


// 1. Named Functions

function something(){
	return "something";
}
// echo something();


// 2. Anonymous Functions 
// A function which has no name is called anonymous function. Anonymous function is an instance or object of \Closure class
// Give access to global scope variables using `use` language construct
// Anonymous functions are should end with semicolon; otherwise give syntax or parse error.
// echo get_class(function(){}); // Closure
// echo get_class(fn()=>"something"); // Closure
// echo "<br>";

$name = "samm";
$getEverything = function() use ($name){
	return "everything {$name}";
};
// echo $getEverything();


// 3. Arrow Functions 
// Improved or Concise syntax for anonymous functions
// Arrow functions introduced in php7.4 version
// Using arrow functions we can directly use global variables inside function
// Arrow functions in PHP have the form fn (argument_list) => expr. 
// You can only have a single expression in the body of the function.
// If you really need multiple expressions, then you can simply use anonymous function.
// The usage of multiple expressions is not allowed, according to the RFC

$getSomething = fn()=>"something";
// echo $getSomething();

$fistname = "raj";
$lastname = "bhai";

$getFullname = fn() => $fistname." ".$lastname;
// echo $getFullname();
// echo "<br>";


// Different ways of passing data to functions (arguments or parameters)
// 1. Pass by value
// 2. Pass by reference 
// 3. Default Values
// 4. Named Parameters



// 1. Pass by value  && Default Values

function getNumbers($a=null, $b=2, $c=null, $d=4 ){

	// return func_num_args();
	return func_get_args();
}

// print_r(getNumbers(1,3,4,5));


// 2. Pass by reference using & char

$data = "something";

function getData(&$dt){
	$dt .= " --> Everything";
	return $dt;
}

getData($data);

// echo $data;


// 4. Named Parameters


function getFullName(string $fname, string $mname, string $lname): string
{
	return $fname." ". $mname." ".$lname;
}

echo getFullName(lname:'raasi', fname:'simha', mname:'MN');