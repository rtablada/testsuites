<?php namespace Rtablada\Testsuites;

use Symfony\Component\Console\Tester\CommandTester;
use Mockery as m;

class TestSuiteCommandTest extends \PHPUnit_Framework_Testcase
{
	public function setup()
	{
		$this->testRunner = m::mock('Rtablada\Testsuites\TestRunner');
		$this->command = new TestSuiteCommand($this->testRunner);
		$this->tester = new CommandTester($this->command);
	}

	public function test_can_call_all_tests()
	{
		$this->testRunner->shouldReceive('run')
			->once();

		$this->tester->execute(array());
	}

	public function test_can_call_test_suite()
	{
		$this->testRunner->shouldReceive('runSuite')
			->once()
			->with('unit');

		$this->tester->execute(array('suite' => 'unit'));
	}

	public function teardown()
	{
		m::close();
	}
}
