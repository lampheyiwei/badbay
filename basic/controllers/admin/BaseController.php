<?php

/**
 * Created by PhpStorm.
 * User: Heyiwei
 * Date: 2016/7/14
 * Time: 15:32
 */
namespace app\controllers\admin;

use Yii;
use yii\helpers\Html;
use app\commands\WwwController;

class BaseController extends WwwController
{
    public $headerInfo = [];
    public $request = null;

    public function init(){
        parent::init();

        $this->module->layoutPath = '@app/views/admin/layouts';
        $this->request = Yii::$app->request;
    }
}