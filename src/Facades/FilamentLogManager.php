<?php

namespace DrkMode\FilamentLogManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DrkMode\FilamentLogManager\FilamentLogManager
 */
class FilamentLogManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \DrkMode\FilamentLogManager\FilamentLogManager::class;
    }
}
