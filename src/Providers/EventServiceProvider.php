<?php

namespace BlackCMS\Language\Providers;

use BlackCMS\Base\Events\CreatedContentEvent;
use BlackCMS\Base\Events\DeletedContentEvent;
use BlackCMS\Base\Events\UpdatedContentEvent;
use BlackCMS\Language\Listeners\ActivatedAddonListener;
use BlackCMS\Language\Listeners\AddHrefLangListener;
use BlackCMS\Language\Listeners\CreatedContentListener;
use BlackCMS\Language\Listeners\DeletedContentListener;
use BlackCMS\Language\Listeners\ThemeRemoveListener;
use BlackCMS\Language\Listeners\UpdatedContentListener;
use BlackCMS\Addon\Events\ActivatedAddonEvent;
use BlackCMS\Theme\Events\RenderingSingleEvent;
use BlackCMS\Theme\Events\ThemeRemoveEvent;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        UpdatedContentEvent::class => [UpdatedContentListener::class],
        CreatedContentEvent::class => [CreatedContentListener::class],
        DeletedContentEvent::class => [DeletedContentListener::class],
        ThemeRemoveEvent::class => [ThemeRemoveListener::class],
        ActivatedAddonEvent::class => [ActivatedAddonListener::class],
        RenderingSingleEvent::class => [AddHrefLangListener::class],
    ];
}
