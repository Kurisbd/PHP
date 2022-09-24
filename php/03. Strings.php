<?php
$x = 'kinjal';
echo "Length of string is: ".strlen($x);
echo "<br>Count of word: ".str_word_count($x);
echo "<br>Reverse the string: ".strrev($x);
echo "<br>Position of string: ".strpos('Have a nice day!','nice');  //2 argument
echo "<br>String replace: ".str_replace('good','nice','have a good day!');  //3 argument
echo "<br>String convert to uppercase: ".strtoupper($x);
echo "<br>String convert to lowercase: ".strtolower($x);
echo "<br>convert first character into uppercase: ".ucfirst('good day');
echo "<br>convert first character into lowercase: ".lcfirst('Good noon');
echo "<br>convert first character of each word into uppercase: ".ucwords('keep going on!');
echo "<br>Remove space from left side: ".ltrim("        hi..");
echo "<br>Remove space from right side: ".rtrim("hello          ");
echo "<br>Remove both side of space: ".trim("       keep learning       ");
echo "<br>string encrypted with MD5: ".md5($x);
echo "<br>Compare both string: ".strcoll('Hello','Hello')."<br>".strcmp('kinjal',$x);
echo "<br>Return part of string: ".substr('Hello Everyone',2);