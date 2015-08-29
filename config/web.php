<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'assetManager' => [
                'bundles' => false
            ],

        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            // 'enableStrictParsing' => true,
            'rules' => array(
                    '/home' => '/',

                    '/imb' => '/izinmendirikanbangunan/index',
                    '/imb/<id:\d+>' => '/izinmendirikanbangunan/view',
                    '/imb/<action:\w+>/<id:\d+>' => '/izinmendirikanbangunan/<action>',
                    '/imb/<action:\w+>' => '/izinmendirikanbangunan/<action>',

                    '/imj' => '/izinmenutupjalan/index',
                    '/imj/<id:\d+>' => '/izinmenutupjalan/view',
                    '/imj/<action:\w+>/<id:\d+>' => '/izinmenutupjalan/<action>',
                    '/imj/<action:\w+>' => '/izinmenutupjalan/<action>',

                    '/ipr' => '/izinreklame/index',
                    '/ipr/<id:\d+>' => '/izinreklame/view',
                    '/ipr/<action:\w+>/<id:\d+>' => '/izinreklame/<action>',
                    '/ipr/<action:\w+>' => '/izinreklame/<action>',

                    '/ipd' => '/izinpengumpulandana/index',
                    '/ipd/<id:\d+>' => '/izinpengumpulandana/view',
                    '/ipd/<action:\w+>/<id:\d+>' => '/izinpengumpulandana/<action>',
                    '/ipd/<action:\w+>' => '/izinpengumpulandana/<action>',

                    '/siup' => '/suratizinusahaperdagangan/index',
                    '/siup/<id:\d+>' => '/suratizinusahaperdagangan/view',
                    '/siup/<action:\w+>/<id:\d+>' => '/suratizinusahaperdagangan/<action>',
                    '/siup/<action:\w+>' => '/suratizinusahaperdagangan/<action>',

                    '/tdp' => '/tandadaftarperusahaan/index',
                    '/tdp/<id:\d+>' => '/tandadaftarperusahaan/view',
                    '/tdp/<action:\w+>/<id:\d+>' => '/tandadaftarperusahaan/<action>',
                    '/tdp/<action:\w+>' => '/tandadaftarperusahaan/<action>',

                    '<controller:\w+>/<id:\d+>' => '/<controller>/view',
                    '<controller:\w+>/<action:\w+>/<id:\d+>' => '/<controller>/<action>',
                    '<controller:\w+>/<action:\w+>' => '/<controller>/<action>',
                    
            ),
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'WOrspzkIorGi5Ev6F_j_vChhynz7EVb9',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    // $config['bootstrap'][] = 'debug';
    // $config['modules']['debug'] = [
    //     'class' => 'yii\debug\Module',
    // ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
