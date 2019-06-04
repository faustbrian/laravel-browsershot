<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Browsershot.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Tests\Browsershot;

use Artisanry\Browsershot\BrowsershotServiceProvider;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;

class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return BrowsershotServiceProvider::class;
    }
}
