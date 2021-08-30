<?php

namespace vildanbina\LaravelBlocker\Test;

use vildanbina\LaravelBlocker\LaravelBlockerFacade;
use vildanbina\LaravelBlocker\LaravelBlockerServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return vildanbina\LaravelBlocker\LaravelBlockerServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [LaravelBlockerServiceProvider::class];
    }

    /**
     * Load package alias.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'laravelblocker',
        ];
    }
}
