<?php

namespace WisdomDiala\Cryptocap\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class CryptocapServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        App::bind('Cryptocap', function() {
            return new \WisdomDiala\Cryptocap\Cryptocap;
        });
    }
}
