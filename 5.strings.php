<?php

// string and string functions with examples

// String Functions ::
// strlen()             — Get string length
// stripslashes()       — Un-quotes a quoted string
// strip_tags()         — Strip HTML and PHP tags from a string
// htmlspecialchars()   — Convert special characters to HTML entities
// html_entity_decode() — Convert HTML entities to their corresponding characters
// trim()               — Strip whitespace (or other characters) from the beginning and end of a string
// ltrim()              — Strip whitespace (or other characters) from the beginning of a string
// rtrim()              — Strip whitespace (or other characters) from the end of a string
// explode()            — Split a string by a string
// implode()            — Join array elements with a string
// ucfirst()            — Make a string's first character uppercase
// lcfirst()            — Make a string's first character lowercase
// ucwords()            — Uppercase the first character of each word in a string (Pascal Case or Studly Caps)
// strtolower()         — Make a string lowercase
// strtoupper()         — Make a string uppercase
// strrev()             — Reverse a string
// strstr()             — Find the first occurrence of a string
// stristr()            — Case-insensitive strstr()
// strpos()             — Find the position of the first occurrence of a substring in a string
// strrpos()            — Find the position of the last occurrence of a substring in a string
// strripos()           — Find the position of the last occurrence of a case-insensitive substring in a string
// str_starts_with()    — Checks if a string starts with a given substring. Performs a case-sensitive check.
// str_ends_with()      — Checks if a string ends with a given substring. Performs a case-sensitive check.
// str_contains()       — Determine if a string contains a given substring. Performs a case-sensitive check.
// str_replace()       — Replace all occurrences of the search string with the replacement string
// str_ireplace()       — Case-insensitive version of str_replace()

$name = "Sunny Leone Lion";

// echo strlen($name);

// echo strrev($name);

// echo str_word_count($name);


// str_contains() vs strpos()

// var_dump(strpos($name, 'Leo')); // int(6)
// var_dump(strpos($name, 'leo')); // bool(false)
// var_dump(stripos($name, 'leo')); // int(6)
// var_dump(strrpos($name, 'Leo')); // int(6)
// var_dump(strripos($name, 'leo')); // int(6)

// echo str_contains($name, 'Leo'); // 1 
// var_dump(str_contains($name, 'Leo')); // bool(true)
// var_dump(str_contains($name, 'leo')); // bool(false) - only case-sensitive check


$email = "tester.gmail@gmail.com";

// echo str_replace(" ", "_", $name);
// echo str_replace("@gmail", "@yahoo", $email);
echo str_replace($search, $replace, $subject);

var_dump(str_ends_with(needle:'Lion', haystack:$name));


