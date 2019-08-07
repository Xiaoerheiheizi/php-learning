<?php

// 获取get 请求方式的方法
$name = $_GET['name'];

$greeting = "Hello $name";

require('get.view.php');
