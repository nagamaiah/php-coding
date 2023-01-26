<?php
echo "<h4 style='text-align:center'>Files and Paths</h4>";
echo '<pre>';

echo 'File : '.__FILE__.'<br>'; // C:\xampp\htdocs\coding\App\index.php
echo 'Dir : '.__DIR__.'<br>'; // C:\xampp\htdocs\coding\App
echo 'basename of dir : '.basename(__DIR__).'<br>'; // App
echo 'basename of file : '.basename(__FILE__).'<br>'; // index.php
echo 'basename of file without extension : '.basename(__FILE__, '.php').'<br><br>'; //index

echo 'DIR pathinfo : <br>';
print_r(pathinfo(__DIR__));
// Array
// (
//     [dirname] => C:\xampp\htdocs\coding
//     [basename] => App
//     [filename] => App
// )

echo "<br>";
echo 'FILE pathinfo : <br>';
print_r(pathinfo(__FILE__)).'<br><br>';
// Array
// (
//     [dirname] => C:\xampp\htdocs\coding\App
//     [basename] => index.php
//     [extension] => php
//     [filename] => index
// )


















?>




?>