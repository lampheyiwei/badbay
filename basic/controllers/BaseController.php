<?php

/**
 * Created by PhpStorm.
 * User: Heyiwei
 * Date: 2016/7/14
 * Time: 15:32
 */
namespace app\controllers;

use Yii;
use yii\helpers\Html;
use app\commands\WwwController;

class BaseController extends WwwController
{
     public $headerInfo = [
	    'cn'=>[
    		'title' => '菲沐盛(山西)材料科技有限公司',
	     ],

	     'en'=>[
	     	'title' => 'feimusheng',
	     ]
    ];


    public function init()
    {
        parent::init();
        //默认layouts模版文件
        $this->module->layoutPath = '@app/views/layouts';

        $this->defaultHeaderInfo();
    }


    //根据语言选择默认meta信息
    public function defaultHeaderInfo()
    {

    	if($this->nativeLang == 'cn'){

    		$this->headerInfo = $this->headerInfo['cn'];
    	}else{

    		$this->headerInfo = $this->headerInfo['en'];
    	}
    }
}