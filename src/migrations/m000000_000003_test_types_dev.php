<?php

use yozh\base\components\Migration;
use backend\modules\helpdesk\models\HelpdeskReply;
use backend\modules\helpdesk\models\HelpdeskTicket;
use yozh\base\components\ArrayHelper;
use yii\caching\FileCache;

/**
 * Class m180301_142414_add_column_to_properties_table
 */
class m000000_000003_test_types_dev extends Migration
{
	protected static $_table = 'yozh_test';
	
	public function safeUp( $params = [] )
	{
		parent::safeUp( [
			'mode' => self::ALTER_MODE_UPDATE,
		] );
		
	}
	
	public function getColumns( $columns = [] )
	{
		return parent::getColumns( [
			'test' => $this->timestamp(null, false, false),
		] );
	}
	
}


