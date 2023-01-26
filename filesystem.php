<?php
echo "<h4 style='text-align:center'>Files and Paths</h4>";
echo '<pre>';

echo 'File : '.__FILE__.'<br>'; // C:\xampp\htdocs\php-coding\filesystem.php or /var/www/html/php-coding/filesystem.php
echo 'Dir : '.__DIR__.'<br>'; // C:\xampp\htdocs\php-coding or /var/www/html/php-coding
echo 'basename of dir : '.basename(__DIR__).'<br>'; // php-coding
echo 'basename of file : '.basename(__FILE__).'<br>'; // filesystem.php
echo 'basename of file without extension : '.basename(__FILE__, '.php').'<br><br>'; //filesystem
echo 'dirname of dir : '.dirname(__DIR__).'<br>'; // /var/www/html
echo 'dirname of file : '.dirname(__FILE__).'<br><br>'; // /var/www/html/php-coding

echo 'realpath of dir : '.realpath(__DIR__).'<br>'; // /var/www/html/php-coding
echo 'realpath of file : '.realpath(__FILE__).'<br><br>'; // /var/www/html/php-coding/filesystem.php

echo 'DIR pathinfo : <br>';
print_r(pathinfo(__DIR__));
// Array
// (
//     [dirname] => /var/www/html
//     [basename] => php-coding
//     [filename] => php-coding
// )

echo "<br>";
echo 'FILE pathinfo : <br>';
print_r(pathinfo(__FILE__)).'<br><br>';
// Array
// (
//     [dirname] => C:\xampp\htdocs\php-coding
//     [basename] => filesystem.php
//     [extension] => php
//     [filename] => filesystem
// )  or 

// Array
// (
//     [dirname] => /var/www/html/php-coding
//     [basename] => filesystem.php
//     [extension] => php
//     [filename] => filesystem
// )


?>
