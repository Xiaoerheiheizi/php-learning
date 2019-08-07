<?php

// 获取get 请求方式的方法
$name = $_GET['name'];

$greeting = "Hello $name";

$array = [
	'h',
	'ha',
	'hahaha',
];

$person = [
	'age'  => '25',
	'hair' => 'black',
	'skin' => 'yellow',
];

$person['name'] = 'Jelly';  // 添加数据
$person[] = 'Jeff';
unset($person['hair']);     // 删除数据

var_dump($person);

require('get.view.php');
