<?php

namespace MyanmarCyberYouths\Laravel\MongoDB\Facades;

use Illuminate\Support\Facades\Facade;

class Passport extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \MyanmarCyberYouths\Laravel\MongoDB\Passport::class;
    }
}
