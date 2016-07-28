<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'defaultRoute' => 'home',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'badbay',
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
        
        //  //url路由优化
         'urlManager' => [
             'enablePrettyUrl' => true,
             'showScriptName' => false,
             'suffix' => '.html',   //url后缀添加
             'rules'=>[
             ],
         ],

        //防止csrf攻击配置
//        'request'=>array(
//            // Enable Yii Validate CSRF Token
//            'enableCsrfValidation' => false,
//        ),

         //smarty模板
//        'view' => [
//            'renderers' => [
//                'tpl' => [ // smarty模板的后缀名
//                    'class' => 'yii\smarty\ViewRenderer',
////                    'cachePath' => '@runtime/Smarty/cache',
//                ],
//            ],
//        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
