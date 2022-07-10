<?php

namespace BlackCMS\Language\Listeners;

use BlackCMS\Setting\Repositories\Interfaces\SettingInterface;
use BlackCMS\Theme\Events\ThemeRemoveEvent;
use BlackCMS\Widget\Repositories\Interfaces\WidgetInterface;
use Exception;
use Language;

class ThemeRemoveListener
{
    /**
     * Handle the event.
     *
     * @param ThemeRemoveEvent $event
     * @return void
     */
    public function handle(ThemeRemoveEvent $event)
    {
        try {
            $languages = Language::getActiveLanguage(["lang_code"]);

            foreach ($languages as $language) {
                app(WidgetInterface::class)->deleteBy([
                    "theme" => $event->theme . "-" . $language->lang_code,
                ]);

                app(SettingInterface::class)->deleteBy([
                    "key",
                    "like",
                    "theme-" .
                    $event->theme .
                    "-" .
                    $language->lang_code .
                    "-%",
                ]);
            }
        } catch (Exception $exception) {
            info($exception->getMessage());
        }
    }
}
