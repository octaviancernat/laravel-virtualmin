<?php

namespace TheApp\Virtualmin;

use Illuminate\Support\ServiceProvider;

class VirtualminServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(Virtualmin::class, function () {
            return new Virtualmin(
                config('virtualmin'),
            );
        });
    }


    public function boot(): void
    {
    }
}
