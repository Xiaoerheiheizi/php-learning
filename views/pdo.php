<?php

try {

	$pdo = new PDO("mysql:host=192.168.1.21;dbname=erhei_test", 'markzhao', 'MarkZhao*23s5U');

} catch (PDOException $e) {
	die('Error: ' . $e->getMessage());
}

// 查看表中所有数据, 还未执行
// $statement = $pdo->prepare('select * from todos');
$statement = $pdo->prepare('create table test()');

// 执行
$statement->execute();

// 查看所有记录
var_dump($statement->fetchAll(PDO::FETCH_OBJ));
