<?php
//Valid property types
//1. bool
//int
//float
//string
//array





//Example #1 property declarations
class SimpleClass {
	// valid as of PHP 5.6.0:
	public $var1 = 'hello ' . 'world';

	// valid as of PHP 5.3.0:
	public $var2 = <<<EOD
	hello world
EOD;

	// valid as of PHP 5.6.0:
	public $var3 = 1 + 2;

	// invalid property declarations:
//	public $var4 = self::myStaticMethod();
//	public $var5 = $myVar;

	// valid property declarations:
	public $var6 = myConstant;
	public $var7 = array( true, false );

	// valid as of PHP 5.3.0:
	public $var8 = <<<'EOD'
	hello world
EOD;

}

//Example #2 Example of using a nowdoc to initialize a property
class foo {
	// As of PHP 5.3.0
	public $bar = <<<'EOT'
bar
EOT;
	public $baz = <<<EOT
baz
EOT;
}

//Example #3 Example of typed properties

class User {
	public int $id;
	public ?string $name;

	public function __construct( int $id, ?string $name ) {
		$this->id   = $id;
		$this->name = $name;
	}
}

$user = new User( 1234, null );

var_dump( $user->id );
var_dump( $user->name );

//Example #4 Accessing properties

class Shape {
	public int $numberOfSides;
	public string $name;

	public function setNumberOfSides( int $numberOfSides ): void {
		$this->numberOfSides = $numberOfSides;
	}

	public function setName( string $name ): void {
		$this->name = $name;
	}

	public function getNumberOfSides(): int {
		return $this->numberOfSides;
	}

	public function getName(): string {
		return $this->name;
	}
}

$triangle = new Shape();
$triangle->setName( "triangle" );
$triangle->setNumberofSides( 3 );
var_dump( $triangle->getName() );
var_dump( $triangle->getNumberOfSides() );

$circle = new Shape();
$circle->setName( "circle" );
var_dump( $circle->getName() );
var_dump( $circle->getNumberOfSides() );
?>
