                <!-- Type Casting (Converting one data type to another) -->

<!-- Type casting is converting a variable or value into desired data type.
This is very useful when preforming arithmetic computations that require variables 
to be of same data type.
Type casting in PHP is done by the interpreter. 1+1.1 = 2.01 (automatic casting in php by default).
PHP also allows you to cast the data type. This is known as explicit casting.

Data Types define the type of data a variable can store. PHP data types are loosely coupled.
The type of the data is decided at runtime by PHP depending on the context in which that variable is used.
PHP supports TEN primitive types.

To check type&value of a expression use var_dump() predefined function.
To get a human-readable representation of a type for debugging, use the "gettype()" function. ("For DEBUGGING purpose only").
To check for a certain type, do NOT use gettype(), but rather the is_type (is_int, is_array, ) functions

* Scalar variables are those containing an int, float, string or bool. Types array, object, resource and null are not scalar.
is_scalar — Finds whether a variable is a scalar ->  is_scalar(mixed $value): bool

is_numeric — Finds whether a variable is a number or a numeric string
is_numeric(mixed $value): bool
Returns true if value is a number or a numeric string, false otherwise. -->

<!-- Four scalar or simple datatypes
1. bool
2. int
3. float (floating-point number)
4. string
Four compound types:
5. array
6. object
7. callable
8. iterable
And finally two special types:
9. resource
10. NULL -->