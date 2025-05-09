<?php 

return [
	'frontend' => [
		// Enrich the response
		'nnhelpers/resolver' => [
			'target' => \Nng\Nnhelpers\Middleware\ModifyResponse::class,
			'before' => [
				'typo3/cms-frontend/site',
			],
		],
		// save the global request for usage
		'nnhelpers/requestparser' => [
			'target' => \Nng\Nnhelpers\Middleware\RequestParser::class,
			'before' => [
				'typo3/cms-frontend/timetracker',
			],
		],
	]
];