<?php

namespace App\Providers;

use App\FormFields\CreateFormField;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Voyager::addFormField(CreateFormField::class);
        $this->app->bind('path.public', function() {
            return '/home/bero.tech/sub/reg-platform';
        });
        $this->app->bind('path.storage', function() {
            return '/home/bero.tech/sub/reg-platform/storage';
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
