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
        $ip = $_SERVER['REMOTE_ADDR'];
    	$lang = file_get_contents("http://ip.taobao.com/service/getIpInfo.php?ip=".$ip);

        $lang = json_decode($lang)->data->country_id;

    	if($lang === 'CN' || $lang === 'IANA'){
    		
    		return 'cn';
    	}else{

    		return 'en';    		
    	}
    }

}