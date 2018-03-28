<?php

namespace yozh\test;

use yozh\base\Module as BaseModule;

class Module extends BaseModule
{

	const MODULE_ID = 'test';
	
	public $controllerNamespace = 'yozh\\' . self::MODULE_ID . '\controllers';
	
}
