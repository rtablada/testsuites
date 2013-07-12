<?php namespace Rtablada\Testsuites;

class TestRunner
{
	/**
	 * Runs a raw passthru of phpunit
	 * @return
	 */
	public function run()
	{
		$this->passthru('phpunit');
	}

	/**
	 * Runs a passthru of phpunit for the specified suite
	 * @param  string $suite
	 * @return
	 */
	public function runSuite($suite)
	{
		$suitePath = app_path() . '/tests/' . $suite;
		return $this->passthru('phpunit ' . $suitePath);
	}

	/**
	 * Wrapper for passthru for testing
	 * @param  string $command
	 * @return
	 */
	public function passthru($command)
	{
		passthru($command);
	}
}
