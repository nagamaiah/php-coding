<?php
echo "<h4 style='text-align:center'>What's new in PHP 8.x</h4>";

// PHP 8.0
// 1. JIT Compiler (Just-In-Time Compilation)
// 2. Union Types
// 3. Named Arguments
// 4. Nullsafe Operator ->?
// 5. Match Expression
// 6. Constructor Property Promotion
// 7. Attributes

// PHP 8.1
// 1. Enumerations ->  i.e, Enums
// 2. Readonly properties
// 3. Pure intersection types
// 4. New never type

// PHP 8.2
// 1. Readonly classes
// 2. Disjunctive Normal Form (DNF) Types 
// 3. Allow null, false, and true as stand-alone types
// 4. Constants in traits

// PHP 8.3
// 1. Typed class constants 
// 2. Dynamic class constant fetch
// 3. New #[\Override] attribute
// 4. Deep-cloning of readonly properties
// 5. New json_validate() function
// 6. New Randomizer::getBytesFromString() method




// https://stitcher.io/blog/new-in-php-8
// https://kinsta.com/blog/php-8/
// https://www.atatus.com/blog/features-in-php-8/




// Match expression

// $status = 5;

// $result = match($status){
//     1 => "Male",
//     2 => "Female",
//     3 => "Bisexual",
//     default => "Others"
// };

// var_dump($result);


try {
    $statusCode = 404;

    $response = match($statusCode){
        200 => "Ok",
        401 => "Unauthenticated",
        403 => "Forbidden",
        404 => "Not Found",
        default => throw new \InvalidArgumentException('Invalid Argument provided')
    };

    // var_dump($response);
} catch (\Throwable $th) {
    echo $th->getMessage();
    // echo $th::class;
}


$condition = 5;

try {
    match ($condition) {
        1, 2 => foo(),
        3, 4 => bar(),
    };
} catch (\UnhandledMatchError $e) {
    echo "<pre>";
    // print_r($e->getMessage());
}


// 7. Attributes
// Attributes, commonly known as annotations in other languages, offers a way to add meta data to classes, 
// without having to parse docblocks.















