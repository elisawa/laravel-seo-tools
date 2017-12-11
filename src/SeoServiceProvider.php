<?php

namespace SEO;

use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'seo');
        $this->publishes([
            __DIR__ . '/../config/seo.php' => config_path('seo.php'),
            __DIR__ . '/../resources/views' => resource_path('views/vendor/seo')
        ]);
    }

    /**
     *
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/seo.php', 'seo'
        );
    }

    /**
     * To register seo as first level command. E.g. seo:model
     *
     * @return array
     */
    public function provides()
    {
        return ['seo'];
    }

}