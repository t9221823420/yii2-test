<?php

namespace yozh\test\actions;

use Yii;
use yozh\base\actions\BaseAction as Action;
use yii\web\Response;
use app\modules\shop\components\FilterModelBase;
use yii\widgets\LinkPager;


class IndexAction extends Action
{
	public function process( $foo = null )
	{
		return [];
	}
	
	
	public function run( $foo )
	{
		
		$args = func_get_args();
		
		$foo = $this->process( $foo );
		
		return 1;
	}
	
}