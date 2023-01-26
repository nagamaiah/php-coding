<?php

// include 'code/person.php';
// include 'code/student.php';

function customAutoloader($class)
{
	$path = 'Code/'.$class.'.php';
	if(file_exists($path))
	{
		include $path;
	}
	

}

spl_autoload_register('customAutoloader');

$person = new Person();
echo '<br>';
$student = new Student();
echo '<br>';
// $data = new Data();