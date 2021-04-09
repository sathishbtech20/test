<?php
require 'App\Interfaces\TestIn.php';

use App\Interfaces\TestIn as TestIn;

class Test implements TestIn {
	
	public function testme() {
		echo 'Hi this is test';
	}

	public function onemore() {
		echo 'Next trial';
	}
	public function foo() {
	}
}


class Second 
{
	private $test;
	public function __construct(Test $test) {
		$this->test = $test;
	}
	public function checking() {		
		$this->test->testme();
		$this->test->onemore();
	}
}
$test = new test;
$second = new Second($test);
$second->checking();