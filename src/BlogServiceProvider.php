<?php

namespace Jeffpereira\Blog;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->make("JPAddress\Controllers\Api\Address\CountryController");
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
        // $this->loadMigrationsFrom(__DIR__ . '/migrations');
    }
}
