<?php
/**
 * Created by PhpStorm.
 * User: Heyiwei
 * Date: 2016/7/20
 * Time: 21:15
 */

namespace app\controllers\admin;


use app\commands\WwwController;

class BaseController extends WwwController
{
    public $layout = '';

    public function init()
    {
        parent::init();
        $this->layout = '@app/views/admin/layouts/main';
    }
}