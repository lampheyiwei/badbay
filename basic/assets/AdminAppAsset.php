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
class AdminAppAsset extends AssetBundle
{
    public $basePath = '@webroot/statics/';
    public $baseUrl = '@web/statics/';
    public $css = [
        'css/admin/bootstrap.min.css',
        'css/admin/bootstrap-responsive.min.css',
        'css/admin/font-awesome.min.css',
        'css/admin/style-metro.css',
        'css/admin/style.css',
        'css/admin/style-responsive.css',
        'css/admin/default.css',
        'css/admin/uniform.default.css',
        'css/admin/jquery.gritter.css',
    ];
    public $js = [
        'js/admin/jquery-1.10.1.min.js',
        'js/admin/jquery-migrate-1.2.1.min.js',
        'js/admin/jquery-ui-1.10.1.custom.min.js',
        'js/admin/bootstrap.min.js',
        'js/admin/jquery.slimscroll.min.js',
        'js/admin/jquery.blockui.min.js',
        'js/admin/jquery.cookie.min.js',
        'js/admin/jquery.uniform.min.js',
//        'media/js/jquery.vmap.js',
//        'media/js/jquery.vmap.russia.js',
//        'media/js/jquery.vmap.world.js',
//        'media/js/jquery.vmap.europe.js',
//        'media/js/jquery.vmap.germany.js',
//        'media/js/jquery.vmap.usa.js',
//        'media/js/jquery.vmap.sampledata.js',
//        'media/js/jquery.flot.js',
//        'media/js/jquery.flot.resize.js',
//        'media/js/jquery.pulsate.min.js',
//        'media/js/date.js',
//        'media/js/daterangepicker.js',
//        'media/js/jquery.gritter.js',
//        'media/js/fullcalendar.min.js',
//        'media/js/jquery.easy-pie-chart.js',
//        'media/js/jquery.sparkline.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];

    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
