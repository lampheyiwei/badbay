<?php 

namespace app\controllers;

use app\commands\WwwController;
use app\models\NavModel;
class NavController extends WwwController
{

	//获取导航栏列表
	public function actionIndex()
	{
		$navList = ( new NavModel() )->getList();

		$res = [
			'nav' => $navList,
		];

        return $this->render('../layouts/'.$this->nativeLang.'/_nav.php',$res);
	}

}
