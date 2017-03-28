<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'vi-VN',
    'sourceLanguage' => 'en-US',
    'timezone' => 'Asia/Ho_Chi_Minh',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'formatter' => [
            'dateFormat' => 'php:d-m-Y',
            'datetimeFormat' => 'php:d-m-Y H:i:s',
            'timeFormat' => 'php:H:i:s',
            'currencyCode' => 'VNĐ',
            'locale' => 'vi-VN',
            'defaultTimeZone' => 'Asia/Ho_Chi_Minh',
        ],
        'fileStorage' => [
            'class' => \trntv\filekit\Storage::className(),
            'baseUrl' => '/uploads',
            'filesystem'=> function() {
                $adapter = new \League\Flysystem\Adapter\Local(Yii::getAlias('@frontend/web/uploads'));
                return new League\Flysystem\Filesystem($adapter);
            }
        ],
    ],
];
