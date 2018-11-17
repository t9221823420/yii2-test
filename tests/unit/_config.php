<?php
/**
 * Created by PhpStorm.
 * User: bw_dev
 * Date: 14.06.2018
 * Time: 21:36
 */
return [
	'id' => 'app-console',
	'class' => 'yii\console\Application',
	'basePath' => \Yii::getAlias('@tests'),
	'runtimePath' => \Yii::getAlias('@tests/_output'),
	'bootstrap' => [],
	'components' => [
		'db' => [
			'class' => '\yii\db\Connection',
			'dsn' => 'sqlite:'.\Yii::getAlias('@tests/_output/temp.db'),
			'username' => '',
			'password' => '',
		]
	]
];