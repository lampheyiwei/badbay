<?php
    use app\assets\AdminAppAsset;
    use yii\web\View;
    use yii\helpers\Url;

    AdminAppAsset::registerJsFile('statics/admin/js.js/Chart.min.js',['depends'=>'yii\web\YiiAsset','position'=>\yii\web\View::POS_END]);
?>