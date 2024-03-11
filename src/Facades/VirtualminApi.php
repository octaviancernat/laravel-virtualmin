<?php

namespace TheApp\Virtualmin\Facades;

use Illuminate\Support\Facades\Facade;
use TheApp\Virtualmin\Virtualmin;

class VirtualminApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Virtualmin::class;
    }
}