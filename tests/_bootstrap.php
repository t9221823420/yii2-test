<?php
/**
 * Created by PhpStorm.
 * User: bw_dev
 * Date: 14.06.2018
 * Time: 21:35
 */

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');
defined('YII_APP_BASE_PATH') or define('YII_APP_BASE_PATH', __DIR__.'/../../../../');

require_once YII_APP_BASE_PATH . DIRECTORY_SEPARATOR . 'vendor/autoload.php';
require_once YII_APP_BASE_PATH . DIRECTORY_SEPARATOR .  'vendor/yiisoft/yii2/Yii.php';
require YII_APP_BASE_PATH . DIRECTORY_SEPARATOR .  'backend/config/bootstrap.php';

\Yii::setAlias('@tests', __DIR__);
\Yii::setAlias('@data', __DIR__ . DIRECTORY_SEPARATOR . '_data');
