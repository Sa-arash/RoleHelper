<?php

namespace SaArash\Rolehelper;

use Illuminate\Support\ServiceProvider;
use SaArash\Rolehelper\Facades\roleHelper;

class roleHelperProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/roleHelper.php', 'RoleConfig'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind('RoleHelper', function () {
            return new roleHelper();
        });
        $this->publishes([
            __DIR__.'/config/roleHelper.php' => config_path('RoleConfig.php'),
        ],'RoleHelper');
    }
}
