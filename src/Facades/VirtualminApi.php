<?php

namespace TheApp\Virtualmin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string checkConnection()
 **/
class VirtualminApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'virtualmin';
    }
}
