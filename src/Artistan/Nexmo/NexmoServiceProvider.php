<?php namespace Artistan\Nexmo;

use Illuminate\Support\ServiceProvider;
use Artistan\Nexmo\Service\Account;
use Artistan\Nexmo\Service\Receipt;
use Artistan\Nexmo\Service\Message\Sms as MessageSms;

class NexmoServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        // Receipt
        $this->app['nexmoreceipt'] = $this->app->share(function($app)
        {
            return new Account();
        });

        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('NexmoReceipt', 'Artistan\Nexmo\Facades\Receipt');
        });

        // Account
        $this->app['nexmoaccount'] = $this->app->share(function($app)
        {
            return new Account();
        });

        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('NexmoAccount', 'Artistan\Nexmo\Facades\Account');
        });

        // SMS Message
        $this->app['nexmosmsmessage'] = $this->app->share(function($app)
        {
            return new MessageSms();
        });

        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('NexmoSmsMessage', 'Artistan\Nexmo\Facades\Message\Sms');
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('nexmosmsmessage','nexmoreceipt','nexmoaccount');
	}

}
