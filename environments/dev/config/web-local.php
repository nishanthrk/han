<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'hsMMVkD2xojzf92zrnXZcY3Vgk5mMBdj',
        ],
    ],
];

// configuration adjustments for 'dev' environment
$config['bootstrap'][] = 'debug';
$config['modules']['debug'] = [
    'class' => 'yii\debug\Module',
    'allowedIPs' => ['*']
];

$config['bootstrap'][] = 'gii';
$config['modules']['gii'] = 'yii\gii\Module';

return $config;
