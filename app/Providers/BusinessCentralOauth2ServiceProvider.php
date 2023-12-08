<?php

namespace Modules\BusinessCentralOauth2\app\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\BusinessCentralOauth2\app\Auth\BusinessCentralProvider;
use Modules\BusinessCentralOauth2\app\Auth\Grants\ScopedClientCredentials;

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
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }

    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/config.php', $this->moduleNameLower);

        $provider = new BusinessCentralProvider([
            'clientId' => config($this->moduleNameLower . '.client_id'),
            'clientSecret' => config($this->moduleNameLower . '.client_secret'),
            'redirectUri' => config($this->moduleNameLower . '.redirect_uri'),
            'urlAccessToken' => config($this->moduleNameLower . '.url_access_token'),
        ]);

        // dd($provider);

        $accessToken = $provider->getAccessToken(new ScopedClientCredentials, ['scope' => config($this->moduleNameLower . '.scope')]);

        $request = $provider->getAuthenticatedRequest("GET", "https://api.businesscentral.dynamics.com/v2.0/ae53686e-02ce-4e9c-9186-2855d6afcdab/DEV-221123/ODataV4/Company('Norty Ltd')/liviBrands", $accessToken);

        $response = $provider->getParsedResponse($request);

        dd($response);
    }

    /**
     * Register config.
     */
    protected function registerConfig(): void
    {
        $this->publishes([__DIR__ . '/../../config/config.php' => config_path($this->moduleNameLower.'.php')], 'config');
    }
}
