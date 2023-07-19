<?php

// A variable is name given to a memory location that stores data at runtime. 
// Variables are used to store data and provide data when needed.

// variable should start with $ symbol
// variable name should start with letter or _(underscore)
// variable name doesn't contain special chars

$_34frfsNamd = "rajuu";
// echo $_34frfsNamd;


// The scope of a variable determines its visibility or accessability
// PHP has three different `variable` scopes:
// 1. local (inside functions and variable can be accessed inside function only)
// 2. global (outside function, can be used outside function. Use global keyword to access global variables in local scope)
// 3. static
// 	Normally, when a function is completed/executed, all of its variables are deleted. 
// 	However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
// 	To do this, use the static keyword when you first declare the variable:
// function myTest() {
//   static $x = 0;
//   echo $x;
//   $x++;
// }
// myTest(); 0
// myTest(); 1
// myTest(); 2


// constants are defined using php define() built-in function 

define('CUSTOMER_ORDER_STATUS','PAID');
const CUSTOMER_MAIL_STATUS = "DONE";


echo CUSTOMER_ORDER_STATUS; // (or)
echo constant('CUSTOMER_ORDER_STATUS');
var_dump(defined('CUSTOMER_ORDER_STATUS'));

echo "<br/>";

echo CUSTOMER_MAIL_STATUS; // (or)
echo constant('CUSTOMER_MAIL_STATUS');
var_dump(defined('CUSTOMER_MAIL_STATUS'));



