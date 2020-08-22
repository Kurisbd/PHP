<?php
//Example #1 Static method example
class Foo {
	public static function aStaticMethod() {
		// ...
	}
}

Foo::aStaticMethod();
$classname = 'Foo';
$classname::aStaticMethod(); // As of PHP 5.3.0
