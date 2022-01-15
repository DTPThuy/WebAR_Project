<?php
return [
    'id' => 'frontend',
    'name' => 'Se08-26.1',
    'basePath' => dirname(__DIR__),
    'components' => [
        'urlManager' => require(__DIR__ . '/_urlManager.php'),
        'cache' => require(__DIR__ . '/_cache.php'),
    ],
];
