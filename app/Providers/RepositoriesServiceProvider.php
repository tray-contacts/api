<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Contracts\IContactRepository', 'App\Repositories\ContactRepository');
        $this->app->bind('App\Contracts\ISocialRepository', 'App\Repositories\SocialRepository');
        $this->app->bind('App\Contracts\ITelephoneRepository', 'App\Repositories\TelephoneRepository');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
