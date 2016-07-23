<?php
use app\assets\AdminAppAsset;
use yii\web\View;

AdminAppAsset::addScript($this,['/statics/js/admin/app.js'],1);

$this->registerJs('App.init();');

?>

<!-- END PAGE HEADER-->
<div class="id="dashboard""></div>
