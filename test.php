<?php
require 'App\Interfaces\TestIn.php';

use App\Interfaces\TestIn as TestIn;

class Test implements TestIn {
	
	public function testmethod() {
		echo 'Hi this is test';
	}
}


class Second 
{
	private $test;
	public function __construct(Test $test) {
		$this->test = $test;
	}
	public function checking() {		
		$this->test->testmethod();
	}
}
$test = new Test;
$second = new Second($test);
$second->checking();