<?php

namespace EmtiazZahid\UserLike;

use Illuminate\Support\ServiceProvider;

class UserLikeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/userlike.php' => config_path('userlike.php'),
        ], 'config');
    }

    /**
     * {@inheritDoc}
     */
    public function register()
    {
        //
    }
}
