<?php

// Data Types define the type of data a variable can store. PHP data types are loosely coupled.
// The type of the data is decided at runtime by PHP depending on the context in which that variable is used.
// PHP supports TEN primitive types.

// Four scalar or simple data types
// 1. int
// 2. float (floating-point number)
// 3. bool (true/false)
// 4. string

// Four compound types:
// 5. array
// 6. object
// 7. callable

// And finally two special types:
// 8. resource
// 9. NULL



// To check type&value of a expression use var_dump() predefined function.
// To get a human-readable representation of a type for debugging, use the "gettype()" function. ("For DEBUGGING purpose only").
// To check for a certain type, do NOT use gettype(), but rather the is_type like syntax (is_int, is_array, is_null ) functions

// Type casting is converting a variable or value into desired data type.
// This is very useful when preforming arithmetic computations that require variables 
// to be of same data type.
// Type casting in PHP is done by the interpreter. 1+1.1 = 2.01 (automatic casting in php by default).
// PHP also allows you to cast the data type. This is known as explicit casting.




// settype() and gettype() functions in php 

// settype — Set the type of a variable. settype(mixed &$var, string $type): bool
// Possibles values of type are:
// "boolean" or "bool"
// "integer" or "int"
// "float" or "double"
// "string"
// "array"
// "object"
// "null"

// gettype — Get the type of a variable. gettype(mixed $value): string



// $var = 2+ (int) 3.2;
// var_dump($var);

// $data = '32';
// $data = (integer) '32';
// $data = 32.98456;

// settype($data, 'integer');
// settype($data, 'string');
// settype($data, 'double');

// echo is_string($data);
// echo is_float($data);
// echo is_double($data);
// echo gettype($data); //for debugging purpose only


// NULL or null datatype
// The special null value represents a variable with no value.
// It has not been difined yet or unset
// There is only one value of type null, and that is the case-insensitive constant null.
// var_dump(is_null(''));  //false
// var_dump(is_null(nuLL));  //true


// A bool or boolean expresses a truth value. It can be either true or false. 
// Boolean data types are used in conditional testing. 
// To specify a bool literal, use the constants true or false. Both are case-insensitive.

// An int is a number of the set ℤ = {..., -2, -1, 0, 1, 2, ...}.
// The range of integers must lie between -2^31 to 2^31. 
// integer literals
// $a = 1234; // decimal number base(10)
// $a = 0123; // octal number base(8)  (equivalent to 83 decimal)
// $a = 0o123; // octal number base(8)  (as of PHP 8.1.0)
// $a = 0x1A; // hexadecimal number base(16)  (equivalent to 26 decimal)
// $a = 0b11111111; // binary number base(2) (equivalent to 255 decimal)
// $a = 1_234_567; // decimal number (as of PHP 7.4.0)

// There is no int division operator in PHP, to achieve this use the intdiv() function.
// intdiv(dividend, divisor) --> Returns the integer quotient of the division
// intval — Get the integer value of a variable --> Returns the int value of value, using the specified base for the conversion (the default is base 10)
// intval(mixed $value, int $base = 10): int

// round() - Rounds a float
// ceil() - Round fractions up
// floor() -  Round fractions down

// boolval() - Get the boolean value of a variable
// floatval() - Get float value of a variable
// strval() - Get string value of a variable

// A value can be converted to a string using the (string) cast or the strval() function.




// Heredoc
$username = "Raju Kumar";

$text = <<<TEXT
Line 1
line 2
$username
line 3
'line4'
"line5"
TEXT;

$html = <<<HTML
<ul>
<li>Line1</li>
<li>line 2</li>
</ul>
<h3>$username</h3> 

line 3    lineSpaceee &nbsp&nbsp&nbsp spacceee
'line4'
"line5"
HTML;


// echo $text;
echo $html;
echo "<br>";

// Nowdoc

$nowdocText = <<<'TEXT'
Line 1
line 2
$username
line 3
'line4'
"line5"
TEXT;

echo $nowdocText;




// callable datatype 
// callbacks are denoted by the callable type declaration
// callable type can accept both anonymous(clousure) and named functions



// resource datatype
// A resource is a special variable, holding a reference to an external resource. 
// Resources are created and used by special functions