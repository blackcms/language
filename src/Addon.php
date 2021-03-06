<?php

namespace BlackCMS\Language;

use BlackCMS\Addon\Abstracts\AddonOperationAbstract;
use Illuminate\Support\Facades\Schema;
use Setting;

class Addon extends AddonOperationAbstract
{
    public static function activated()
    {
        $addons = get_active_addons();

        if (($key = array_search("language", $addons)) !== false) {
            unset($addons[$key]);
        }

        array_unshift($addons, "language");

        Setting::set("activated_addons", json_encode($addons))->save();
    }

    public static function remove()
    {
        Schema::dropIfExists("languages");
        Schema::dropIfExists("language_meta");
    }
}
