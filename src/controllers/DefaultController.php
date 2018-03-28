<?php

namespace yozh\test\controllers;

use yozh\crud\traits\CRUDTrait;
use yozh\test\models\BaseModel;
use yozh\test\AssetBundle;
use yozh\base\controllers\DefaultController as Controller;


class DefaultController extends Controller
{
	use CRUDTrait {
		actionIndex as protected traitActionIndex;
	}
	
	protected static function defaultModel()
	{
		return BaseModel::className();
	}
	
	public function actionIndex()
	{
		//AssetBundle::register( $this->view );
		return $this->traitActionIndex();
	}
	
}
