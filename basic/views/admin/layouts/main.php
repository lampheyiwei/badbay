<?php
use app\assets\AdminAppAsset;
use yii\web\View;
/**
 * @var \yii\web\View $this
 * @var string $content
 */
AdminAppAsset::register($this);

//AdminAppAsset::addScript($this,'/statics/css/admin/21222222.js',View::POS_END);
//AdminAppAsset::addCss($this,'/statics/css/admin/select2_metro.css',View::POS_END);


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->context->headerInfo['title'] ?></title>
    <?php $this->head() ?>
    <?php ?>
</head>
<body class="page-header-fixed">


    <?php $this->beginBody() ?>
    <!-- 头部header-->
    <?php include __DIR__.'./header.tpl'; ?>

    <div class="page-container">
        <!-- 左侧导航leftNav-->
        <?php include  __DIR__.'./leftNav.tpl'; ?>
        <!--面包屑-->
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div id="portlet-config" class="modal hide">
                <div class="modal-header">
                    <button data-dismiss="modal" class="close" type="button"></button>
                    <h3>Widget Settings</h3>
                </div>
                <div class="modal-body">
                    Widget settings form goes here
                </div>
            </div>
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

            <!-- BEGIN PAGE CONTAINER-->
            <div class="container-fluid">
                <!-- BEGIN PAGE HEADER-->
                <div class="row-fluid">
                    <div class="span12">
                        <!-- BEGIN STYLE CUSTOMIZER -->
                        <div class="color-panel hidden-phone">
                            <div class="color-mode-icons icon-color">
                            </div>
                            <div class="color-mode-icons icon-color-close">
                            </div>
                            <div class="color-mode">
                                <p>
                                    THEME COLOR
                                </p>
                                <ul class="inline">
                                    <li class="color-black current color-default" data-style="default"></li>
                                    <li class="color-blue" data-style="blue"></li>
                                    <li class="color-brown" data-style="brown"></li>
                                    <li class="color-purple" data-style="purple"></li>
                                    <li class="color-grey" data-style="grey"></li>
                                    <li class="color-white color-light" data-style="light"></li>
                                </ul>
                                <label>
                                    <span>Layout</span>
                                    <select class="layout-option m-wrap small">
                                        <option value="fluid" selected="">Fluid</option>
                                        <option value="boxed">Boxed</option>
                                    </select>
                                </label>
                                <label>
                                    <span>Header</span>
                                    <select class="header-option m-wrap small">
                                        <option value="fixed" selected="">Fixed</option>
                                        <option value="default">Default</option>
                                    </select>
                                </label>
                                <label>
                                    <span>Sidebar</span>
                                    <select class="sidebar-option m-wrap small">
                                        <option value="fixed">Fixed</option>
                                        <option value="default" selected="">Default</option>
                                    </select>
                                </label>
                                <label>
                                    <span>Footer</span>
                                    <select class="footer-option m-wrap small">
                                        <option value="fixed">Fixed</option>
                                        <option value="default" selected="">Default</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <!-- END BEGIN STYLE CUSTOMIZER -->
                        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                        <h3 class="page-title">
                            Dashboard
                            <small>statistics and more</small>
                        </h3>
                        <ul class="breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">Home</a>
                                <i class="icon-angle-right"></i>
                            </li>
                            <li><a href="#">Dashboard</a></li>
                            <li class="pull-right no-text-shadow">
                                <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range" style="display: block;">
                                    <i class="icon-calendar"></i>
                                    <span>June 15, 2016 - July 14, 2016</span>
                                    <i class="icon-angle-down"></i>
                                </div>
                            </li>
                        </ul>
                        <!-- END PAGE TITLE & BREADCRUMB-->
                    </div>
                </div>
                    <!-- 主题内容content-->
                    <?= $content ?>
            </div>
            <!-- END PAGE CONTAINER-->
        </div>
    </div>

    <!-- 尾部footer-->
    <?php include  __DIR__.'./footer.tpl'; ?>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
