<?php

/*
 * This file is part of Laravel Browsershot.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Browsershot;

use Illuminate\Support\ServiceProvider;
use Intervention\Image\ImageServiceProvider;

class BrowsershotServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/laravel-browsershot'),
        ], 'views');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-browsershot');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-browsershot.php', 'laravel-browsershot');

        $this->app->register(ImageServiceProvider::class);

        $this->app->singleton(Browsershot::class, function ($app) {
            $config = $app->config->get('browsershot');

            return (new Browsershot($app->config, $app->filesystem))
                    ->setBinPath($config['bin'])
                    ->setPreset($config['preset'])
                    ->setQuality($config['quality'])
                    ->setBackgroundColor($config['background_color'])
                    ->setTimeout($config['timeout']);
        });
    }
}
