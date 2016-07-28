<?php
/**
 * Created by PhpStorm.
 * User: Heyiwei
 * Date: 2016/7/20
 * Time: 20:58
 */

namespace app\commands;


use yii\console\Controller;

class WwwController extends Controller
{
	//是否为国内ip
	public $nativeLang = '';

    public function init()
    {
        parent::init();
       	$this->nativeLang = $this->clientNativeLang();

    }

    //判断是否为国内ip
    public function clientNativeLang()
    {
    	$lang = file_get_contents("http://api.wipmania.com/");
    	if(strstr($lang,'cn') !==false || strstr($lang,'CN') !==false ){
    		
    		return 'cn';
    	}else{

    		return 'en';    		
    	}
    }

}