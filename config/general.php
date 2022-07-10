<?php

return [
    // List supported modules or addons
    "supported" => [
        "BlackCMS\Page\Models\Page",
        "BlackCMS\Menu\Models\Menu",
        "BlackCMS\Menu\Models\MenuLocation",
    ],

    // If LaravelLocalizationRedirectFilter is active and hideDefaultLocaleInURL
    // is true, the url would not have the default application language
    //
    // IMPORTANT - When hideDefaultLocaleInURL is set to true, the unlocalized root is treated as the applications default locale "app.locale".
    // Because of this language negotiation using the Accept-Language header will NEVER occur when hideDefaultLocaleInURL is true.
    //
    "hideDefaultLocaleInURL" => env(
        "LANGUAGE_HIDE_DEFAULT_LOCALE_IN_URL",
        true
    ),

    "localesMapping" => [],
];
