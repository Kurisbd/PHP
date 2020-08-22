<?php
//__construct ([ mixed $args = "" [, $... ]] ) : void

//Example #1 using new unified constructors
class BaseClass {
	function __construct() {
		print "In BaseClass constructor\n";
	}
}

class SubClass extends BaseClass {
	function __construct() {
		parent::__construct();
		print "In SubClass constructor\n";
	}
}

class OtherSubClass extends BaseClass {
	// inherits BaseClass's constructor
}

// In BaseClass constructor
$obj = new BaseClass();

// In BaseClass constructor
// In SubClass constructor
$obj = new SubClass();

// In BaseClass constructor
$obj = new OtherSubClass();

//Example #2 Constructors in namespaced classes
//namespace Foo;
//class Bar {
//	public function Bar() {
//		// treated as constructor in PHP 5.3.0-5.3.2
//		// treated as regular method as of PHP 5.3.3
//	}
//}


//__destruct ( void ) : void
//Example #3 Destructor Example

class MyDestructableClass
{
	function __construct() {
		print "In constructor\n";
	}

	function __destruct() {
		print "Destroying " . __CLASS__ . "\n";
	}
}

$obj = new MyDestructableClass();
