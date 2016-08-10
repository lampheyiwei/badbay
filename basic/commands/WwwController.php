<?php
/**
 * Created by PhpStorm.
 * User: Heyiwei
 * Date: 2016/7/20
 * Time: 20:58
 */

namespace app\commands;


use yii\console\Controller;
use yii\helpers\Url;
use yii\helpers\Json;

class WwwController extends Controller
{
	//是否为国内ip
	public $nativeLang = '';
    public $hasHeader = true;

    public function init()
    {
        parent::init();
        $this->nativeLang = 'cn';
//       	$this->nativeLang = $this->clientNativeLang();

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
    /**
     * 页面跳转方法
     *
     * @param string $url  需要跳转到的url
     * @param string $msg  跳转前显示的消息
     * @param int    $time 设置几秒后跳转 默认3秒
     *
     * @return null
     *
     */
    public function redirect($url, $msg = null, $time = 3)
    {
        if($time == 0){
            header('location:'.$url);
            exit;
        }


        if(!isset($this->hasHeader))
            $this->hasHeader = true;


        $tpl = '/base/redirect.php';
        $msg .= sprintf( "系统将在%s秒自动跳转到%s", $time, $url );

        $url = (strpos( $url, 'http' ) === false) ? Url::to( [$url] ) : $url;

        $time = $time * 1000;

        echo $this->render( $tpl, array(
            'url'  => $url,
            'msg'  => $msg,
            'time' => $time,
        ) );
        exit;
    }

    /**
     * 成功信息针对不同的提交方式进行处理显示
     *
     * @param string                       $msg  传入要返回的提示信息
     * @param null|string|int|boolen|array $data 传入ajax需要返回的data数据结构，如果不需要，则为null即可
     * @param string                       $url  处理后跳转到的页面
     *
     * @return string 如果是ajax提交则返回json结构体   如果是其他方式提交则不返回
     *
     */
    public function success($msg, $data = null, $url = null, $isAjax = false)
    {
        if ( $this->request->isAjax || $isAjax === true ) {
            $data = array(
                'status' => 1,
                'msg'    => $msg,
                'data'   => $data
            );
            echo Json::encode( $data );
            exit;
        }
        $this->redirect( $url, $msg );
    }

    /**
     * 错误信息针对不同的提交方式进行处理显示
     *
     * @param string                       $msg  传入要返回的提示信息
     * @param null|string|int|boolean|array $data 传入ajax需要返回的data数据结构，如果不需要，则为null即可
     * @param string                       $url  处理后跳转到的页面
     * @param boolean 强制ajax
     * @param $status 强制错误状态返回   错误状态小于或=0
     *
     * @return string 如果是ajax提交则返回json结构体   如果是其他方式提交则不返回
     *
     */
    public function error($msg, $data = null, $url = null, $isAjax = false, $status = 0)
    {
        if ( $this->request->isAjax || $isAjax === true ) {
            $data = array(
                'status' => $status,
                'msg'    => $msg,
                'data'   => $data
            );
            echo Json::encode( $data );
            exit;
        }
        $this->redirect( $url, $msg );
    }


}