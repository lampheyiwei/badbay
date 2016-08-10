<?php
/**
 * Created by PhpStorm.
 * User: Heyiwei
 * Date: 2016/7/30
 * Time: 10:13
 */

namespace app\models;

use Yii;
use yii\db\Query;
use yii\base\Exception;
use yii\db\ActiveRecord;

class BannerModel extends BaseModel
{
    public $tableName = '';
    public function init()
    {
        parent::init();
        $this->tableName = 'banner';


    }

    //获取banner列表详情
    public function getBannerList()
    {

        try{

            $bannerList = (new Query())->from( $this->tableName )->all();

        }catch (Exception $e){
            return array();
        }
        return $bannerList;
    }

    //写入数据库
    public function add( $res )
    {
        try{
            Yii::$app->db->createCommand()->insert( $this->tableName ,
                array(
                    'title'             => $res['title'],
                    'title_en'          => $res['title_en'],
                    'order'             => $res['order'],
                    'description'       => $res['description'],
                    'description_en'    => $res['description_en'],
                    'start_time'        => $res['start_time'],
                    'end_time'          => $res['end_time'],
                    'image'             => $res['image'],
                    'url'               => $res['url']
                )

            )->execute();

            return true;

        }catch (Exception $e){

            return 'MySql错误，请联系管理员';
        }


    }
}