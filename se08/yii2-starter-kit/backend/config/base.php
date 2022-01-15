<?php
return [
    'id' => 'backend',
    'name' => 'Se08-26.1',
    'basePath' => dirname(__DIR__),
    'components' => [
        'urlManager' => require __DIR__ . '/_urlManager.php',
        'frontendCache' => require Yii::getAlias('@frontend/config/_cache.php')
    ],
];
