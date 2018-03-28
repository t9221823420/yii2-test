<?php

namespace yozh\test;

class AssetBundle extends \yozh\base\AssetBundle
{

    public $sourcePath = __DIR__ .'/../assets/';

    public $css = [
        //'css/yozh-test.css',
	    //['css/yozh-test.print.css', 'media' => 'print'],
    ];
	
    public $js = [
        //'js/yozh-test.js'
    ];
	
	public $publishOptions = [
		//'forceCopy'       => true,
	];
	
}