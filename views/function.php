<?php

$task = [
	'title'     => 'Go to shop',
	'completed' => true,
	'user'      => 'JellyBool',
];

function dumper($data)
{
	echo "<pre>";
	var_dump($data);
	die();
	echo "</pre>";
}

dumper($task);
