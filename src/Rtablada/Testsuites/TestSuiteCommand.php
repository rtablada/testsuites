<?php namespace Rtablada\Testsuites;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

use Illuminate\Filesystem\Filesystem as File;

class TestSuiteCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'test';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Runs tests for project or just a test suite by folder in tests.';

	/**
	 * Instance of the test runner
	 * @var Rtablada\TestSuites\TestRunner
	 */
	protected $testRunner;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct(TestRunner $testRunner)
	{
		$this->testRunner = $testRunner;
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		if ($suite = $this->argument('suite')) {
			return $this->testRunner->runSuite($suite);
		} else {
			return $this->testRunner->run();
		}
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('suite', InputArgument::OPTIONAL, 'The folder suite of tests to run.'),
		);
	}

}
