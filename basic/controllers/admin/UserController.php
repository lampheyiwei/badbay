<?php

/**
 * Created by PhpStorm.
 * User: Heyiwei
 * Date: 2016/7/20
 * Time: 21:02
 */
namespace app\controllers\admin;


class UserController extends BaseController
{
    public function actionIndex()
    {
        $list = array(1,2,3,4,5);

        return $this->render('index',array(
            'list'=>$list
        ));
    }
}