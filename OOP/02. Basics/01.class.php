<?php

//Example #1 Simple Class definition
class SimpleClass {
	// property declaration
	public $var = 'a default value';

	//examples of the $this pseudo-variable
	function foo() {
		if ( isset( $this ) ) {
			echo get_class( $this );
		} else {
			echo "this is not defined";
		}
	}

	// method declaration
	public function displayVar() {
		echo $this->var;
	}
}

//Property access vs. method call
$instance = new SimpleClass();
$instance->var;
$instance->foo();
$instance->displayVar();

//
//Creating an instance #01
$instance      = new SimpleClass();
$instance->var = '$assigned will have this value';

//Creating an instance #02
$className = 'SimpleClass';
$instance  = new $className();
$instance->$className;

//Example #2
class ExtendClass extends SimpleClass {
	// Redefine the parent method
	function displayVar() {
		echo "Extending class\n";
		parent::displayVar();
	}
}

$extended = new ExtendClass();
$extended->displayVar();
?>
