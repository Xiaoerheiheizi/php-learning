<?php
// 引用赋值
$arr1 = $arr2 = [1, 2, 3];

foreach ($arr1 as &$a) {
	$a++;
}

foreach ($arr2 as $a) {
	$a++;
}
print_r($arr1);
print_r($arr2);
