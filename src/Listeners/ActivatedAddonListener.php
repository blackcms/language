<?php

namespace BlackCMS\Language\Listeners;

use BlackCMS\Language\Addon;
use Exception;

class ActivatedAddonListener
{
    /**
     * Handle the event.
     *
     * @return void
     */
    public function handle()
    {
        try {
            Addon::activated();
        } catch (Exception $exception) {
            info($exception->getMessage());
        }
    }
}
