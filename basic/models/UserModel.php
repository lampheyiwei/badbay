<?php
/**
 * Created by PhpStorm.
 * User: Heyiwei
 * Date: 2016/7/14
 * Time: 23:27
 */

namespace app\models;
use yii\db\Query;
use Yii;
use yii\base\Exception;
use yii\db\ActiveRecord;

class UserModel extends BaseModel
{
    public $db = '';
    public $limit = '';

    //合法字段
    public $correctField = array('id', 'pageSize', 'pageNum', 'username', 'keyword', 'username', 'created_at','updated_at','role');


    public function init(){
        parent::init();
        $this->db = new Query();

        $this->db = $this->db->from('user');
        $activeRecord = new ActiveRecord();
    }

    //检测是否是合法字段
    public function isLegalField( $req )
    {
        foreach( $req as $k => $v){
            if(!in_array($k,$this->correctField)){
                return false;
            }else{
                return true;
            }
        }
    }

    //获取用户信息列表
    public function getUserList( $req )
    {
        //合法字段检测
        $isLegal = $this->isLegalField($req);
        //异常处理
        if(!$isLegal){
            throw new Exception("错误MYSQL字段灌入");
        }

        //模糊查询
        if( !empty( $req['keyword'] )){
            $this->db->where(['like', 'username', $req['keyword']])->orwhere(['like','email',$req['keyword']]);
        }

        $userList = $this->db->all();

        return $userList;
    }

    //获取用户详情
    public function getUserInfo( $id )
    {

    }

    //修改用户信息
    public function setUserInfo( $req )
    {
        if(!empty($req['id'])){

            $code = $this->activeRecord->updateAll('user', array('username' => 'Tester'), 'id=:id', array(':id' => $req['id']))->execute();

            var_dump($code);die;
        }else{

            throw new Exception("没有指定的ID修改");
        }
    }

    //删除用户信息
    public function delUser( $id )
    {

    }
}