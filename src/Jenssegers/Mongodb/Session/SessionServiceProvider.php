<?php namespace Jenssegers\Mongodb\Session;

use Illuminate\Support\ServiceProvider;

class SessionServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    	$this->app['session.manager']->extend('mongodb', function($app)
        {
        	$manager = new SessionManager($app);
        	$manager->driver('mongodb');
        });
    }

}