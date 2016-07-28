<?php 

namespace app\widget\nav;

use Yii;
use yii\base\Widget;
use app\models\NavModel;

class NavWidget extends Widget
{
	public function init()
	{
		parent::init();

	}

	//获取导航栏列表
	public function run()
	{
		$navList = ( new NavModel() )->getList();

		return $this->render( 'nav.php', array(
			'nav'=> $navList
		));
	}

}
