<?php

use yozh\base\components\db\Migration;
use yozh\base\components\db\Schema;
use yozh\base\components\helpers\ArrayHelper;

/**
 * Class m180305_040759_tablename_table_dev
 */
class m000000_000000_020_yozh_sub_test_dev extends Migration
{
	protected static $_table = 'yozh_sub_test';
	
	/**
	 * {@inheritdoc}
	 */
	public function safeUp( $params = [] )
	{
		
		parent::safeUp( $params );
		
	}
	
	public function getColumns( $columns = [] )
	{
		$enum = [ 'No', 'Yes', ];
		$set  = [ 'Zero', 'One', 'Two', 'Three', 'Four', ];
		
		return parent::getColumns( [
			'id'               => $this->primaryKey(),
			'yozh_sub_test_id' => $this->integer(),
			'value'            => $this->string(),
			'enabled'          => $this->boolean()->defaultValue( false ),
		] );
	}
	
	public function getReferences( $references = [] )
	{
		return ArrayHelper::merge( [
			
			[
				'refTable'   => 'yozh_test',
				'refColumns' => 'id',
				'columns'    => 'yozh_sub_test_id',
				'onDelete'   => self::CONSTRAINTS_ACTION_RESTRICT,
			],
		
		], $references );
	}
	
}
