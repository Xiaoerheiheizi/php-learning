<?php
$a = TRUE;
$b = "foo";
$c = 0.1;
$d = 12;

if(is_string($b)){
	echo "$b 是字符串".PHP_EOL;
}

if(is_int($c)){
	echo "$c 是整数".PHP_EOL;
}

var_dump($a);
var_dump($b);
echo gettype($c).PHP_EOL;
echo gettype($d);
