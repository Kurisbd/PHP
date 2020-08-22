<?php
//Example #1 Defining and using a constant

class MyClass {
	const CONSTANT = 'constant value';

	function showConstant() {
		echo self::CONSTANT . "\n";
	}
}

echo MyClass::CONSTANT . "\n";

$classname = "MyClass";
echo $classname::CONSTANT . "\n"; // As of PHP 5.3.0

$class = new MyClass();
$class->showConstant();
echo $class::CONSTANT . "\n"; // As of PHP 5.3.0

//Example #2 Static data example

class foo {
	// As of PHP 5.3.0
	const BAR = <<<'EOT'
bar
EOT;
	// As of PHP 5.3.0
	const BAZ = <<<EOT
baz
EOT;
}
//Example #3 Namespaced ::class example

//namespace foo {
//	class bar {
//	}
//	echo bar::class; // foo\bar
//}

//Example #4 Constant expression example
const ONE = 1;
class fooo {
	// As of PHP 5.6.0
	const TWO = ONE * 2;
	const THREE = ONE + self::TWO;
	const SENTENCE = 'The value of THREE is '.self::THREE;
}

//Example #5 Class constant visibility modifiers
//class Foo_ {
//	// As of PHP 7.1.0
//	public const BAR = 'bar';
//	private const BAZ = 'baz';
//}
//echo Foo_::BAR, PHP_EOL;
//echo Foo_::BAZ, PHP_EOL;
