<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerService();
        $this->registerModel();
        $this->registerRepository();
    }

    private function registerService()
    {
        //
    }

    /*
    * Register Model for Ioc
    */
    private function registerModel()
    {
        //
    }

    /*
    * Register Repository for Ioc
    */
    private function registerRepository()
    {
        $this->app->bind('App\Repository\Contracts\UserInterface', 'App\Repository\Eloquent\UserRepository');
    }
}
