<?php

return [
	'basePath' => dirname(__DIR__),
	
	'name' => 'Console App',

	'preload' => ['log'],

	'components' => [
		'db' => require __DIR__ . '/db.php',

		'log' => [
			'class' => 'CLogRouter',
			'routes' => [
				[
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning',
				],
			],
		],
	],
];