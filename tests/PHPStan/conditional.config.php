<?php
declare(strict_types = 1);

$config = [];

if (PHP_VERSION_ID < 8_00_00) {
	// Change of signature in PHP 8.0
	$config['parameters']['ignoreErrors'][] = [
		'message' => '~Else branch is unreachable because ternary operator condition is always true.~',
		'path' => '../../src/Entities/EntityFactory.php',
		'count' => 1,
	];
	$config['parameters']['ignoreErrors'][] = [
		'message' => '~Strict comparison using !== between array and false will always evaluate to true.~',
		'path' => '../../src/Entities/EntityFactory.php',
		'count' => 1,
	];
}

return $config;