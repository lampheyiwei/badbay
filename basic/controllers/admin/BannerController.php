<?php
/**
 * Created by PhpStorm.
 * User: Heyiwei
 * Date: 2016/7/30
 * Time: 10:40
 */

namespace app\controllers\admin;

class BannerController extends BaseController
{
    public function init()
    {
        parent::init();
    }

    //banner管理首页
    public function actionIndex()
    {

        return $this->render('index.php');
    }
}