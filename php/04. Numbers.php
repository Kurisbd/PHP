<?php
//PHP Numbers
// 01. PHP Integers
// 02. PHP Floats
// 03. PHP Infinity
// 04. PHP NaN
// 05. PHP Numerical Strings
// 06. PHP casting strings and floats to integers
$value = 0147;

is_numeric();
intval($value);
intval($value);
(int)($value);
floatval($value);
$int = (int)"10";
$double = (double)"10.12";
$float = (float)"10.12";

// 01. PHP Integers

is_int($value);
is_integer($value);
is_long($value);

// 02. PHP Floats
is_float($value);
is_double($value);


echo intval(42);                      // 42
echo intval(4.2);                     // 4
echo intval('42');                    // 42
echo intval('+42');                   // 42
echo intval('-42');                   // -42
echo intval(042);                     // 34 (octal as starts with zero)
echo intval('042');                   // 42
echo intval(1e10);                    // 1410065408
echo intval('1e10');                  // 1
echo intval(0x1A);                    // 26 (hex as starts with 0x)
echo intval(42000000);                // 42000000
echo intval(420000000000000000000);   // 0
echo intval('420000000000000000000'); // 2147483647
echo intval(42, 8);                   // 42
echo intval('42', 8);                 // 34
echo intval(array());                 // 0
echo intval(array('foo', 'bar'));     // 1