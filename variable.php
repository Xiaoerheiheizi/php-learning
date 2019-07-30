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

sayHi();
sayHello($hello);
