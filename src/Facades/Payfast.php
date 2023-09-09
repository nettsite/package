<?php

namespace NettSite\Payfast\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NettSite\Payfast\Payfast
 */
class Payfast extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \NettSite\Payfast\Payfast::class;
    }
}
