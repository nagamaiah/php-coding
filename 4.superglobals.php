<?php
session_start();

echo "<h3>Superglobals</h3>";

// Superglobals are php's built-in variables that are always available in all scopes;

$username = "rajkumar";
$age = 30;
echo "<pre>";

// 1. $GLOBALS
// 2. $_SERVER
// 3. $_GET
// 4. $_POST
// 5. $_FILES
// 6. $_COOKIE
// 7. $_SESSION
// 8. $_REQUEST
// 9. $_ENV

// 1. $GLOBALS - References all variables available in global scope
// An associative array containing references to all variables which are currently defined in the global scope of the script. 
// The variable names are the keys of the array.

// print_r($GLOBALS);
// echo $GLOBALS['age']; //30

// 2. $_SERVER -- Server and execution environment information
// $_SERVER is an array containing information such as headers, paths, and script locations. 
// The entries in this array are created by the web server

// print_r($_SERVER);
// echo $_SERVER['REQUEST_TIME'];
// var_dump(date('Y-M-D h:i:s',$_SERVER['REQUEST_TIME']));

// $dateTime = new DateTime(strtotime($_SERVER['REQUEST_TIME']));
// var_dump($dateTime->format('Y-m-d h:i:s'));

// 3. $_GET - HTTP GET variables
// An associative array of variables passed to the current script via the URL parameters (or) query string.

// http://localhost/php-coding?name=raju&age=35
// print_r($_GET);


// 4. $_POST - HTTP POST variables
// An associative array of variables passed to the current script via the HTTP POST method when using 
// `application/x-www-form-urlencoded` or `multipart/form-data` as the HTTP Content-Type in the request.

// If you want to receive application/json post data in your script you can not use $_POST. $_POST does only handle form data.
// Read from php://input instead. You can use fopen or file_get_contents.
// $json = file_get_contents('php://input');  and  $data = json_decode($json);


// 5. $_FILES - HTTP File Upload variables
// An associative array of items uploaded to the current script via the HTTP POST method.
// $_FILES['my-image] -> name, size, tmp_name, type
// move_uploaded_file(filename, destination)
// to upload a file we need to use enctype="mutipart/form-data"

// 6. $_COOKIE - HTTP Cookies
// An associative array of variables passed to the current script via HTTP Cookies.
// print_r($_COOKIE);
// setcookie(name, value, expire, path, domain, secure, httponly);
// setcookie('username','jagguu');
// setcookie('customer', 'JohnDoe', time() + 3600, '/');
// setcookie('username','');  // to delete cookie


// echo $_COOKIE['username'];

// Unset (delete) a cookie:
// unset($_COOKIE['username']);
// setcookie('username', '', time() - 3600, '/');


// 7. $_SESSION - Used to set and get session in php
// use session_start() function at the top of script to init session
// use $_SESSION['username] = 'rajuu'  to get/set session 
// we can access session across multiple pages once you set session
// session is stored on server. We can also store in database if required.
// session_unset() and session_destroy() are used to unset and destroy session data


print_r($_SESSION);


// 8. $_REQUEST - HTTP Request variables
// An associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.



// 9. $_ENV - Environment variables
// An associative array of variables passed to the current script via the environment method.

// print_r($_ENV);


