<?php
echo "<h4 style='text-align:center'>What's new in PHP 8</h4>";

class Operations {


	public function __construct()
	{

	}

	public function addition(float $a, int $b): int|float
	{
		return $a+$b;
	}

	public function subtraction(float $a, float $b): float|int
	{
		return $a-$b;
	}

	public function multiplication(int|float $a, int|float $b): int
	{
		return $a*$b;
	}

	public function square(?int $value): int
	{
		return pow($value,2);
	}

	public function getValue(int|null $value = 25): int|null|string
	{
		return $value;
	}

	public function something(Product|Store $something)
	{
		// echo $something::class;
		// echo get_class($something);

		if ($something instanceof Product) {
			return $something->productName();
		}

		if ($something instanceof Store) {
			return $something->storeName();
		}
	}
}

class Product {

	public function __construct()
	{
		// echo  __CLASS__;
	}

	public function productName()
	{
		return "Washing Machine";
	}

}

class Store {

	public function __construct()
	{
		// echo  __CLASS__;
	}

	public function storeName()
	{
		return "My Store";
	}

}

// $operations = new Operations();
// echo get_class($operations);
// echo $operations::class;

// echo $operations->addition(3.3,3.0);
// echo $operations->subtraction(8, 4.1);
// echo $operations->multiplication(8, 4.1);
// echo $operations->getValue();  // 25
// echo $operations->getValue(null);  // null

// echo $operations->something(new Store());
// echo $operations->something(new Product());


// null coalescing operator since php7
// $value = null;
// $value = false;
// // $value = null;
// var_dump($value??"fallback");


//null coalescing assignment operator from php7.4
// function (array $parameters = []) {
//     $parameters['property'] ??= 'default';
// }
// $parameters['property'] = $parameters['property'] ?? 'default';


// Spaceship operator
// The spaceship operator, while having quite a peculiar name, can be very useful. It's an operator used for comparison. It will always return one of three values: 0, -1 or 1.

// 1 <=> 1; // returns 0
// 1 <=> 2; // returns -1




class NamedArguments {

	public function addition(float $a, int $b): int|float
	{
		return $a+$b;
	}

	public function getValue(int|null $value = 25): int|null|string
	{
		return $value;
	}

	public function getName(?string $name = "default"): ?string
	{
		if ($name == null) {
			var_dump($name);
		}
		return $name;
	}

	public function something(Product|Store $something)
	{
		// echo $something::class;
		// echo get_class($something);

		if ($something instanceof Product) {
			return $something->productName();
		}

		if ($something instanceof Store) {
			return $something->storeName();
		}
	}
}


$obj = new NamedArguments();


$first = 10;
$second = 12;
// echo $obj->addition(b:3,a:5);
// echo $obj->addition(b:$second, a:$first);
// echo $obj->getName();
// echo $obj->getName(null);
// echo $obj->getName("NULL");
// echo $obj->getName("nag");


// echo $obj->something(something : new Product());
// echo $obj->something(something : new Store());









?>