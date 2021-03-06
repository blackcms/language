<?php

namespace BlackCMS\Language\Providers;

use BlackCMS\Language\Commands\RouteCacheCommand;
use BlackCMS\Language\Commands\RouteClearCommand;
use BlackCMS\Language\Commands\SyncOldDataCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([SyncOldDataCommand::class]);

        $this->app->extend("command.route.cache", function () {
            return new RouteCacheCommand($this->app["files"]);
        });

        $this->app->extend("command.route.clear", function () {
            return new RouteClearCommand($this->app["files"]);
        });
    }
}
