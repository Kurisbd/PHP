<?php

//Example #1 :: from outside the class definition

class MyClass {
	const CONST_VALUE = 'A constant value';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE; // As of PHP 5.3.0
echo MyClass::CONST_VALUE;

//Example #2 :: from inside the class definition

class OtherClass extends MyClass {
	public static $my_static = 'static var';

	public static function doubleColon() {
		echo parent::CONST_VALUE . "\n";
		echo self::$my_static . "\n";
	}
}

$classname = 'OtherClass';
$classname::doubleColon(); // As of PHP 5.3.0

OtherClass::doubleColon();

//Example #3 Calling a parent's method
class MyClass2 {
	protected function myFunc() {
		echo "MyClass2::myFunc()\n";
	}
}

class OtherClass2 extends MyClass2 {
	// Override parent's definition
	public function myFunc() {
		// But still call the parent function
		parent::myFunc();
		echo "OtherClass2::myFunc()\n";
	}
}

$class = new OtherClass2();
$class->myFunc();
