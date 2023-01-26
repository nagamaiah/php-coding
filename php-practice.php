<?php 

// $example = ['one' => 1,'two'=>2,'three'=>3,'four'=>4,'five'=>5,'nine'=>9,'ten'=>10];
// $example2 = [10,3,5,4,3,6,7,4,3,3,3,3,3,6,57,46,7,4567,45,6754,5,7,8,9,6,8,4,2,3,9,10,22];


// echo '<pre>';
// print_r(sizeof($example2));


// break  -- jump out of loop or terminate loop
// continue -- skip iteration 

// foreach ($example2 as $key => $value) {
// 	// if($value%2 != 0){
// 	// 	continue;
// 	// }
// 	echo $value."<br>";
// }


// for ($i = 1; $i < 10; $i++) {
//     if ($i % 2 == 0) {
//         continue;
//     }
//     echo $i . " ";
// }


// for ($i = 1; $i < 10; $i++) {
//     if ($i == 5) {
//        break;
//     }
//     echo $i . " ";
// }
// echo "somedkshf";


// function Sum()
// {
// 	$a = 100;
// 	$b = 100;
	
// } 

// $a = 1;
// $b = 2;

// echo '<pre>';
// print_r($GLOBALS);
// function Sum()
// {
// 	// global $a,$b;
//     $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
//     // echo $a+$b;
// } 
// Sum();
// echo $b;

// for($j=0; $j<3; $j++)
// {
//      if($j == 1)
//         $a = 4;
// }
// function test()
// {
// 	$GLOBALS['a']=10;
// }
// test();
// echo $a;

// $date = date(' \d\a\t\e \i\s dS F Y h:i:s');  escaping chars;
// echo $date;

// echo "Today's date in various formats:" . "<br>";
//   echo date("d/m/Y h:i:s a") . "<br>";

// $date = "23-02-2022 8:04:17";
// echo date('dS-m-Y H:i:s A',strtotime($date));

// echo mktime();

// $date1 = "1998-11-24";
// $date2 = "1997-03-26";
  
// // Use comparison operator to 
// // compare dates
// if ($date1 > $date2)
//     echo "$date1 is latest than $date2";
// else
    // echo "$date1 is older than $date2";


// $date1 = "12-Feb-26";
// $date2 = "2011-10-24";
// echo var_dump(strtotime($date1));

// $date  = new DateTime("");
// date_default_timezone_set('UTC');
// date_default_timezone_set('Asia/Kolkata');

// $date  = new DateTime();
// echo '<pre>';
// print_r($date);

// $date = date_default_timezone_set('Asia/Kolkata');
// $currentTimezone = date_default_timezone_get();

//If you want Day,Date with time AM/PM
// echo $today = date("F j, Y, g:i a T");

// echo date('h:i:s',$_SERVER['REQUEST_TIME']);

// date_default_timezone_set('Asia/Kolkata');
// $date = new DateTime();
// print_r($date->format('dS M Y h:iA'));

// $date = DateTime::createFromFormat('d/F/Y','23/March/2013');
// echo $date->format('dS F Y h:i:s a T');


/***** PHP variables and data types *******/

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

// $a = [2,4,5];
// unset($a);


// var_dump($a);
// echo is_null($a);


// if(-1){
// var_dump(true);
// } else {
// var_dump(false);
// }
//var_dump(0 == 'all');  true


// $large_number = 21474836485656755756;
// var_dump($large_number); 

// $large_number = 9223372036854775808;
// var_dump($large_number); 

// var_dump(49.16/7);
// var_dump(intdiv(dividend, divisor));

// $juice = "apple";

// echo "He drank some juice made of {$juice}.";
// echo "He drank some juice made of ${juice}.";
// echo $juice[-5];

//null is always converted to an empty string.
// var_dump(strval(null)); // return empty string

// $data = ['A','B','R','G','J','K'];
// var_dump(serialize($data));
// var_dump(unserialize(serialize($data)));



// PHP arrays -----
// $list = ['A','B','R','G','J','K'];
// function remove_element($element,$array)
// {
// 	$index = array_search($element, $array);
// 	if($index != false){
// 		unset($array[$index]);
// 	}
// 	return $array;
// }
// $updatedArray = remove_element('J',$list);
// print_r($updatedArray);

// If multiple elements in the array declaration use the same key, 
// only the last one will be used as all others are overwritten.
// $array = array(
//     1    => "a",
//     "1"  => "b",
//     1.5  => "c",
//     true => "d",
// );

// The count() function can be used to count the number of items in an array.

// $array = array(
//     "foo" => "bar",
//     350,
//     "bar" => "foo",
//     100   => -100,
//     200,
//     -100  => 100,
//     400
// );

// unset($array);
// $data = ['name'=>'nafug','name'=>'nffag','name'=>'nadg','name'=>'nfag'];
// print_r($array);
// $values = array_values($array);
// $keys = array_keys($array);
// print_r($values);


// isset() vs empty() php built in function
// isset() checks if a variable has a value including (False, 0 or empty string), but not NULL.
// Returns TRUE if var exists; FALSE otherwise.
// It returns TRUE if var exists (and) its value is not equal to NULL.
// It returns FALSE if var doesn't exist (or) value is equal to NULL.

// $result = false;
// if(isset($result)){
// echo 'yes'; //it will be printed
// }else{
// echo 'No';
// }
// $value = null;
// var_dump(isset($value));


// On the other hand the empty() function checks if the variable has an empty value empty string, 0, NULL or False. Returns FALSE if var has a non-empty and non-zero value."


// $value = [];
// var_dump(empty($value));



// PHP objects
echo '<pre>';

class Person 
{
	const NAME = 'person';
	public static $age = 45;
	public $place = 'Bengaluru';

	public static function getData()
	{
		return __METHOD__." David Oxford"; //Person::getData David Oxford
	}

	public static function getClassName()
	{
		return "Class name is ".__CLASS__;
	}

	public function getMethodName()
	{
		return "Method name is ".__LINE__.__METHOD__;
	}			

}

class Men extends Person
{
	const NAME = 'men';

	public static function getClassName()
	{
		return "Class name is ".__CLASS__;
	}

	public function getParentClassName()
	{
		return parent::getClassName();
		// return $this->getClassName();
	}

	public function getThisClassName()
	{
		return self::getClassName();

	}

}


// echo Person::getData();
// $personObject = new Person();
// echo Person::NAME;
// echo Men::NAME;
$menObject = new Men();
// echo $personObject->getMethodName();
// var_dump($menObject);
// print_r($menObject);
// echo $menObj->place;
// echo Men::NAME;
// echo $menObj instanceof Person;
// var_dump($menObj instanceof Person);
// echo $menObject->getThisClassName();
// echo $menObject->getClassName();
// echo $menObject->getParentClassName();
// echo Men::$age; // accessing static properties



/** PHP stdClass class. The stdClass is the empty class in PHP which is used to cast other types to object. */
//A generic empty class with dynamic properties.
// This class has no methods or default properties.
// It is useful in dynamic object.
// It is used to set 'dynamic properties' etc.
// $obj = new stdClass();
// $obj->name = 'nag';
// $obj->age = 29;

// $newArray = ['name'=>'nag','age'=>45];

// $toArray = (array) $obj;
// $toObject = (object) $toArray;
// var_dump($obj);
// print_r($toArray);
// echo '<br>';
// print_r($toObject);

// echo is_object($data);
// echo "output is ".$data2 instanceof Person;
// echo Person::$age;
// var_dump($data->getData());


// Scope Resolution Operator(::) allows access to static, constant, and overridden properties or methods of a class.
// var_dump(Person::getData());
// var_dump(Person::NAME);



?>
<script type="text/javascript">
// alert(new Date()); output -> Fri Oct 28 2022 14:59:43 GMT+0530 (India Standard Time)
// 	let date = new Date("2017-01-26");
// alert(date);
// console.log('<?php echo $currentTimezone; ?>');
</script>


