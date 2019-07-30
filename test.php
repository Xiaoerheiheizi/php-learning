<?php
/*$a = true;
$b = "foo";
$c = 0.1;
$d = 12;

if (is_string($b)) {
	echo "$b 是字符串" . PHP_EOL;
}

if (is_int($c)) {
	echo "$c 是整数" . PHP_EOL;
}

var_dump($a);
var_dump($b);
echo gettype($c) . PHP_EOL;
echo gettype($d);*/

$e = [
	'b' => 'bb',
	'c' => 'cc',
];

$f = [
	'bb',
	'cc',
];

$g = [
	'bb',
	'cc',
	'a' => $e,
	'b' => $f,
];

var_dump($e);
var_dump($e[0]);
var_dump($f);
var_dump($f['b']);
var_dump($g['a']['b']);
