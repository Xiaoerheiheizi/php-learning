<?php

const HELLO     = 'Hello';
const SHIYANLOU = 'shiyanlou';

class Test
{
	public function sayHi()
	{
		// 常量声明后无法重新赋值或取消
		define(HELLO, 'Hi');
		echo HELLO;
	}
}

$t = new Test();
$t->sayHi();
