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
    public $db = '';
    public function init()
    {
        parent::init();

        $this->db = new Query();
        $this->db = $this->db->from('banner');
    }

    //获取banner列表详情
    public function getBannerList()
    {
        try{
            $bannerList = $this->db->all();

        }catch (Exception $e){
            return array();
        }

        return $bannerList;
    }
}