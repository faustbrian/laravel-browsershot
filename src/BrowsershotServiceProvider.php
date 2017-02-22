<?php

/*
 * This file is part of Laravel Browsershot.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Browsershot;

use BrianFaust\ServiceProvider\AbstractServiceProvider;
use Intervention\Image\ImageServiceProvider;

class BrowsershotServiceProvider extends AbstractServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->publishViews();

        $this->loadViews();
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        parent::register();

        $this->mergeConfig();

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

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return array_merge(parent::provides(), [
            ImageServiceProvider::class,
        ]);
    }

    /**
     * Get the default package name.
     *
     * @return string
     */
    public function getPackageName(): string
    {
        return 'browsershot';
    }
}
