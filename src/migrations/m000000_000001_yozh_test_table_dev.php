<?php

use yozh\base\components\db\Migration;
use yozh\base\components\db\Schema;

/**
 * Class m180305_040759_tablename_table_dev
 */
class m000000_000001_yozh_test_table_dev extends Migration
{
	protected static $_table = 'yozh_test';
	
	/**
	 * {@inheritdoc}
	 */
	public function safeUp( $params = [] )
	{
		
		parent::safeUp([
			'mode' => static::ALTER_MODE_IGNORE,
		]);
		
	}
	
	public function getColumns( $columns = [] )
	{
		$enum = [ 'No', 'Yes', ];
		$set  = [ 'Zero', 'One', 'Two', 'Three', 'Four', ];
		
		return parent::getColumns( [
			'id' => $this->primaryKey(),
			
			'integer' => $this->integer(),
			'string'  => $this->string(),
			'boolean' => $this->boolean()->defaultValue( false ),
			
			'timestamp' => $this->timestamp(),
			'datetime'  => $this->dateTime()->notNull(),
			
			'enum' => $this->enum( $enum )->notNull()->defaultValue( reset( $enum ) ),
			'set'  => $this->set( $set )->notNull()->defaultValue( reset( $set ) ),
			
			'text' => $this->text(),
			'json' => $this->json(),
			'file' => $this->string( 512 ),
			
			'test' => $this->string(),
		] );
	}
	
	
}
