<?php

/**
 * Created by PhpStorm.
 * User: Heyiwei
 * Date: 2016/7/14
 * Time: 15:31
 */
namespace app\controllers\admin;


class IndexController extends BaseController
{
    public $defaultAction = 'index';

    public function actionIndex()
    {
        $this->headerInfo['title'] = '后台管理';

        return $this->render('index');
    }
}