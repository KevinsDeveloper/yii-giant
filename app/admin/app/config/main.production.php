<?php

/**
 * @copyright Copyright (c) 2017
 * @version  Beta 1.0
 * @author kevin
 */
require(__DIR__ . '/loader.php');

return [
    'id'           => 'admin',
    'basePath'     => dirname(__DIR__) . "/../",
    'defaultRoute' => 'site/index/index',
    'language'     => 'zh-CN',
    'bootstrap'    => ['log'],
    'modules'      => [
        'site' => ['class' => 'admin\modules\site\SiteModule'],
    ],
    'components'   => [
        'request'      => [
            'cookieValidationKey' => 'qw1r32q16we54tw65443236r1321dfa35s',
        ],
        'errorHandler' => [
            'errorAction' => 'index/error',
        ],
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => false,
                'yii\web\YiiAsset'    => false,
            ],
        ],
        'mailer'       => [
            'class'         => 'yii\swiftmailer\Mailer',
            'transport'     => [
                'class'      => 'Swift_SmtpTransport',
                'host'       => 'smtp.exmail.qq.com',
                'username'   => '',
                'password'   => '',
                'port'       => '25',
                'encryption' => 'tls',
            ],
            'messageConfig' => [
                'charset' => 'UTF-8',
                'from'    => ['' => '']
            ],
        ],
        'urlManager'   => [
            'class'           => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
            'suffix'          => '', //后缀
            'rules'           => require(__DIR__ . '/rules.php'),
        ],
        'log'          => [
            'targets' => [
                'file' => [
                    'class'      => 'yii\log\FileTarget',
                    'levels'     => ['error', 'warning', 'profile', 'info'],
                    'categories' => ['yii\*'],
                ],
            ],
        ],
        'log'          => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'cache'        => [
            'class' => 'yii\caching\FileCache',
        ],
        'view'         => [
            'theme'     => [
                'pathMap' => ['@app/views' => '@app/themes/views'],
                'baseUrl' => '@app/themes/views',
            ],
            'class'     => 'yii\web\View',
            'renderers' => [
                'tpl' => [
                    'class' => 'yii\smarty\ViewRenderer',
                //'cachePath' => '@runtime/Smarty/cache',
                ],
            ],
        ],
        'i18n'         => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                ]
            ],
        ],
    ],
    'params'       => require(__DIR__ . '/params.php'),
];
