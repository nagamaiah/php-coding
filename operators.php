
<!-- ternary and Null coalescing(from php7) operator

ternary operater is conditional operator
ternary --  (expression)? expression1 : expression2
if expression is true -> evalueate to expression1
if expression is false -> evalueate to expression2

The null coalescing operator is available since PHP 7.0. It similar to the ternary operator, but will behave like isset on the lefthand operand 
instead of just using its boolean value. This makes this operator especially useful for arrays and assigning defaults when a variable is not set.
   $unassigned;
   $unassigned ?? 'fallback'; // 'fallback'

   $assigned = 'foo';
   $assigned ?? 'fallback'; // 'foo'

	'' ?? 'fallback'; // ''
	'foo' ?? 'fallback'; // 'foo'
	'0' ?? 'fallback'; // '0'
	0 ?? 'fallback'; // 0
	false ?? 'fallback'; // false
	null ?? 'fallback'; // 'fallback' -->



    <!-- PHP 5.6 added the splat operator (...) which is used to unpack arrays to be used as function arguments. -->

    
    <!-- Nullsafe operator  ?-> -->