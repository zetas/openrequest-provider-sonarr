<?php

namespace Zetas\OpenrequestProviderSonarr;

use Illuminate\Support\ServiceProvider;

class OpenrequestProviderSonarrServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'openrequest-provider-sonarr');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'openrequest-provider-sonarr');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('openrequest-provider-sonarr.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/openrequest-provider-sonarr'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/openrequest-provider-sonarr'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/openrequest-provider-sonarr'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'openrequest-provider-sonarr');

        // Register the main class to use with the facade
        $this->app->singleton('openrequest-provider-sonarr', function () {
            return new OpenrequestProviderSonarr;
        });
    }
}
