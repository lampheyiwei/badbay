<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use app\assets\common\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot/statics/';
    public $baseUrl = '@web/statics';
    public $css = [
        'css/home/style.css',
        'css/home/swipebox.css',
    ];
    public $js = [
        'js/home/jquery-1.11.1.min.js',
        'js/home/move-top.js',
        'js/home/easing.js',
        'js/home/responsiveslides.min.js',
        'js/home/jquery.flexisel.js',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
