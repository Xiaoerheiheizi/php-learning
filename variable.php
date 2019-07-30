<?php

$hi    = 'Hi';
$hello = 'Hello';

function sayHi()
{
	global $hi;
	echo $hi;
}

function sayHello($hello)
{
	echo $hello;
}

// 静态变量仅在局部函数域中存在，但当程序执行离开此作用域时，其值并不丢失，否则会丢失
function test()
{
	static $static = 0;
	echo $static . PHP_EOL;
	$static++;
}

test();
test();

sayHi();
sayHello($hello);

$a = 'b';
$b = 'c';
$c = 'd';

$$$$a = 'bcd';
var_dump($d);
