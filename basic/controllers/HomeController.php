<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class HomeController extends BaseController
{

	public function actionIndex()
	{

		
		return $this->render('index');
	}


}