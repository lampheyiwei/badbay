<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\BannerModel;

class HomeController extends BaseController
{

	public function actionIndex()
	{
		//获取首页banner轮播图
		$bannerList = ( new BannerModel() )->getBannerList();

		$res = array(
			'banner' => $bannerList,
		);

		return $this->render('index',$res);
	}


}