<?php

$config = [
    'id' => 'app',
    'name' => 'Application',
    'basePath' => dirname(__DIR__),
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'runtimePath' => dirname(dirname(__DIR__)) . '/runtime',
    'layoutPath' => dirname(__DIR__) . '/views/templates',
    'defaultRoute' => 'default/index',
    'bootstrap' => ['log'],
    'language'=> 'ru',
    'components' => [
//        'assetManager' => [
//            'bundles' => [
//                'nullref\admin\assets\AdminAsset' => [
//                    'js' => [
//                        'js/tools.js',
//                        'js/admin/scripts.js',
//                    ],
//                ],
//            ],
//        ],
//        'formatter' => [
//            'class' => 'app\components\Formatter',
//        ],
        'request' => [
            'cookieValidationKey' => 'RiAveGUdUaddfdWZddHVevMJRGd5Rij8uh',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'default/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => YII_ENV_DEV,
        ],
        'i18n' => [
            'translations' => [
                '*' => ['class' => 'yii\i18n\PhpMessageSource'],
                include('locale.php')
            ],
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
        'view' => [
            'theme' => [
                'basePath' => '@app/styles',
                'baseUrl' => '@web/styles',
                'pathMap' => [ '@app/views' => '@app/styles' ]
            ],
//            'class' => 'yii\web\View',
//            'renderers' => [
//                'twig' => [
//                    'class' => 'yii\twig\ViewRenderer',
//                    'cachePath' => '@runtime/Twig/cache',
//                    'options' => [ 'auto_reload' => true ],
//                    'globals' => [
//                        'html' => [ 'class' => '\yii\helpers\Html' ]
//                    ]
//                ]
//            ]
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
//    'modules' => $modules,
//    'params' => $params,
];

if (YII_ENV_DEV) {
    //$config['bootstrap'][] = 'gii';
    //$config['modules']['gii'] = [ 'class' => 'yii\gii\Module' ];
}

return $config;