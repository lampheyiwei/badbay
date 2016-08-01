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

//    /**
//     * banner图片上传
//     * @param null $file 上传文件
//     * @return object message  返回信息
//     */
//    public function actionUploadFile( $file = null )
//    {
//        $upload = ( new UploadFile() );
//        $upload->savePath = Yii::$app->basePath.'\web\statics\image\home\banner';
//        $message = $upload->_upload( $file );
//
//        return $message;
//    }

    //文件上传
    function actionUpload(){

        $file =  $_FILES;

        $upload = ( new UploadFile() );
        $upload->savePath = Yii::$app->basePath.'\web\statics\image\banner\\';

        $upload = new UploadFile();
        //设置上传文件大小
        $upload->maxSize=1024*1024*2;//最大2M
        //设置上传文件类型
        $upload->allowExts  = explode(',','jpg,gif,png,bmp');

        //设置附件上传目录
        $savePath = Yii::$app->basePath.'\web\statics\image\banner';
        $upload->saveRule = 'ruleTime';

        if(!$upload->upload( $savePath,$file ))
        {
            //捕获上传异常
            var_dump(1111);
        }
        else
        {
            //取得成功上传的文件信息
            var_dump( $upload->getUploadFileInfo());
        }
    }
}