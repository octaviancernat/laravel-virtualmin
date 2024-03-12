<?php

namespace TheApp\Virtualmin;

use Illuminate\Support\ServiceProvider;

class VirtualminServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('virtualmin', function () {
            return new Virtualmin(
                config('services.virtualmin'),
            );
        });
    }


    public function boot(): void
    {
        //
    }
}
