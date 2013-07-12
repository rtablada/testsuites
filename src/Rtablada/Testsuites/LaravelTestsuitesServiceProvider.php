<?php namespace Rtablada\Testsuites;

use Illuminate\Support\ServiceProvider;

class TestsuitesServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['testsuites'] = $this->app->share(function($app)
        {
            return new TestSuiteCommand(new TestRunner);
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('testsuites');
	}

}
