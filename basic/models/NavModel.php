<?php 
namespace app\models;

use Yii;
use yii\db\Query;
use yii\base\Exception;
use yii\db\ActiveRecord;
class NavModel extends BaseModel
{
	public $db = '';
	public function init()
	{
		parent::init();
        $this->db = new Query();
        $this->db = $this->db->from('nav');

        $activeRecord = new ActiveRecord();
	}
	//获取navList
	public function getList()
	{
        $navList = $this->db->all();

       	return $navList;
	} 

}




 ?>