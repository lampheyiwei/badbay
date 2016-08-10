<?php
/**
 * Created by PhpStorm.
 * User: Heyiwei
 * Date: 2016/7/30
 * Time: 10:40
 */

namespace app\controllers\admin;

use Yii;
use yii\helpers\UploadFile;
use app\models\BannerModel;

class BannerController extends BaseController
{

    public function init()
    {
        parent::init();
        $this->headerInfo['title'] = 'Banner管理';
    }

    //banner管理首页
    public function actionIndex()
    {
        return $this->render('index.php');
    }

    //banner添加显示页面
    public function actionBannerAdd()
    {
        return $this->render('add.php');

    }
    //banner添加
    public function actionAdd()
    {
        $res = array(
            'title'             => $this->request->post('title',''),
            'title_en'          => $this->request->post('title_en',''),
            'order'             => $this->request->post('order',''),
            'description'       => $this->request->post('description',''),
            'description_en'    => $this->request->post('description_en',''),
            'start_time'        => $this->request->post('start_time', ''),
            'end_time'          => $this->request->post('end_time', ''),
            'url'               => $this->request->post('url', ''),
        );

        //图片上传
        $file = $_FILES;
        $saveRule = date('YmdHis',time()).'_banner';
        $savePath =  Yii::$app->basePath.'\web\statics\image\banner\\';

        $res['image'] = '/statics/image/banner/'.$this->uploadBanner( $file, $saveRule, $savePath)[0];

        //跳转url简单处理
        if( strpos( $res['url'], 'http://') === false && !empty($res['url']) ){
            $res['url'] = 'http://'.$res['url'];
        }

        //添加数据并返回操作成功或失败信息
        $msg = ( new BannerModel() )->add( $res );

        //判断是否操作成功
        if( $msg ){

            echo "<script> alert('数据添加操作成功');history.go(-1)</script>";
        }else{

            //返回错误信息并返回上一页
            echo '<script> alert('.$msg.');history.go(-1)</script>';
        }
    }

    //banner编辑
    public function actionEdit()
    {

    }

    //banner删除
    public function actionDel()
    {

    }

    //文件上传
    function uploadBanner( $file, $saveRule, $savePath ){
        $upload = ( new UploadFile() );
        $upload->savePath = $savePath;

        $upload = new UploadFile();
        //设置上传文件大小
        $upload->maxSize=1024*1024*2;//最大2M
        //设置上传文件类型
        $upload->allowExts  = explode(',','jpg,gif,png,bmp');

        //设置附件上传目录

        $upload->saveRule = $saveRule;

        if(!$upload->upload( $savePath,$file ))
        {
            //捕获上传异常
           return $upload->getErrorMsg();
        }
        else
        {
            //取得成功上传的文件信息
           return $upload->getUploadFileInfo();
        }
    }
}