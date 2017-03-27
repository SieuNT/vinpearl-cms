<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/bootstrap-reset.css',
        'css/animate.css',
        'css/font-awesome.min.css',
        'css/ionicons.min.css',
        'css/style.css',
        'css/helper.css',
    ];
    public $js = [
        'js/pace.min.js',
        'js/modernizr.min.js',
        'js/wow.min.js',
        'js/jquery.nicescroll.js',
        'js/jquery.app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
