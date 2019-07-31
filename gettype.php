<?php

$a_bool = true;
$a_str  = "foo";
$a_str2 = 'foo';
$an_int = 12;

echo gettype($a_bool);
echo gettype($a_str);

// 如果是整型，就加上 4
if (is_int($an_int)) {
	$an_int += 4;
}

// 如果 $bool 是字符串，就打印出来
// (啥也没打印出来)
if (is_string($a_bool)) {
	echo "String: $a_bool";
}
?>
