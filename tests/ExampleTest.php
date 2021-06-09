<?php

namespace   Epmnzava\LaravelCms\Tests;

use Orchestra\Testbench\TestCase;
use Epmnzava\LaravelCms\LaravelCmsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelCmsServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
