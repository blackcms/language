<?php

namespace BlackCMS\Language\Repositories\Caches;

use BlackCMS\Support\Repositories\Caches\CacheAbstractDecorator;
use BlackCMS\Language\Repositories\Interfaces\LanguageInterface;

class LanguageCacheDecorator extends CacheAbstractDecorator implements
    LanguageInterface
{
    /**
     * {@inheritDoc}
     */
    public function getActiveLanguage($select = ["*"])
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultLanguage($select = ["*"])
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
