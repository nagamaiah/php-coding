<?php
echo '<pre>';

function sampleData(int $number = 3, array $data = ['name' => 'default'], Car $car)
{
	echo $number.PHP_EOL;
	echo $data['name'];
	var_dump($car);
}

// sampleData(5, ['name' => 'custom']);


class Car
{
	public $wheels = 4;

	public function __construct()
	{
		// echo __LINE__.' ==> '.__METHOD__;
		// echo __CLASS__;
		echo "Car instantiated \n";
	}

	public function carInfo()
	{
		return "Black color car with 5 seater";
	}


}

// classData(new Car());
sampleData(4,['name'=>'carInstance'],new Car());

function classData(Car $car)
{
	var_dump($car instanceof Car);
	// var_dump($car);
	// echo $car->carInfo();
}




// -- Type Hinting is method by which we can force function to accept the desired data type.
// -- Type hinting is a concept that provides hints to function for the expected data type of arguments.
// --   Type hinting can also be used to force a function to get an argument of type Object. For this purpose,  
//         we put the name of the class in front of the argument name in the function.
// --   PHP5 doesn’t allow type hinting for basic data types (int, float, string and bool), 
//         PHP7 does support scalar type hinting.