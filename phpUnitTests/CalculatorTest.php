<?php
/**
 * Created by PhpStorm.
 * User: bw_dev
 * Date: 15.06.2018
 * Time: 7:42
 */

require 'Calculator.php';

class CalculatorTest extends PHPUnit\Framework\TestCase
{
	private $calculator;
	
	protected function setUp()
	{
		$this->calculator = new Calculator();
	}
	
	protected function tearDown()
	{
		$this->calculator = NULL;
	}
	
	public function testAdd()
	{
		$result = $this->calculator->add(1, 2);
		$this->assertEquals(3, $result);
	}
	
}