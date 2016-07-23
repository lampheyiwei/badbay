<?php
/**
 * Created by PhpStorm.
 * User: Heyiwei
 * Date: 2016/7/14
 * Time: 21:03
 */

namespace app\controllers\admin;

use Yii;
use app\models\UserModel;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\base\Exception;

class UserController extends BaseController
{
    public function init(){
        parent::init();

    }
    //用户信息列表
    public function actionIndex()
    {

        $req = array(
            'pageNum' =>  $this->request->get('n',1),
            'pageSize' =>  $this->request->get('s',10),
            'keyword' => $this->request->get('k',''),
        );

        $this->headerInfo['title'] = '用户管理中心';

        //抛异常
        try{
            $userList = (new UserModel())->getUserList( $req );

        }catch ( Exception $e ){

            return 'Message: ' .$e->getMessage();
        }

        $list = array(
            'userList' => $userList
        );

        return $this->render('index', $list);
    }

    //获取用户详情
    public function actionGetUserInfo()
    {
        $id =$this->request->get('id',null);

        $info = ( new UserModel() )->getUserInfo( $id );

        return $this->render('detail',$info);
    }

    //修改用户信息
    public function actionSetUserInfo()
    {
        if( Yii::$app->request->isAjax){
             $req = array(
                 'id'           => $this->request->post( 'id',null ),
                 'username'     => $this->request->post( 'username',null ),
                 'email'        => $this->request->post( 'email',null ),
                 'created_at'    => $this->request->post( 'created_at',null ),
                 'updated_at'    => $this->request->post( 'updated_at',null ),
                 'role'         => $this->request->post( 'role',null ),
             );

            $code = ( new UserModel() )->setUserInfo( $req );

            return $this->success(null , $code);
        }

    }

    public function actionDelUserInfo()
    {
        if( $this->request->isAjax ){
            $id = $this->request->post( 'id' );

            $code = ( new UserModel() )->delUser( $id );

            return $this->success(null,$code);
        }
    }
}