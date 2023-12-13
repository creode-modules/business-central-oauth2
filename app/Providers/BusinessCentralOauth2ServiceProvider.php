<?php

namespace Modules\BusinessCentralOauth2\app\Providers;

use Illuminate\Support\ServiceProvider;
class BusinessCentralOauth2ServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'BusinessCentralOauth2';

    protected string $moduleNameLower = 'business-central-oauth2';

    /**
     * Boot the application events.
     */
    public function boot(): void
    {
        $this->registerConfig();
    }

    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/config.php', $this->moduleNameLower);
    }

    /**
     * Register config.
     */
    protected function registerConfig(): void
    {
        $this->publishes([__DIR__ . '/../../config/config.php' => config_path($this->moduleNameLower.'.php')], 'business-central-oauth2-config');
    }
}
