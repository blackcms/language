<?php

namespace BlackCMS\Language\Facades;

use BlackCMS\Language\LanguageManager;
use Illuminate\Support\Facades\Facade;

class LanguageFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return LanguageManager::class;
    }
}
