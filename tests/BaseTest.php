<?php

namespace Bangadam\LaravelValidation\Tests;

use Bangadam\LaravelValidation\LaravelValidationServiceProvider;
use Orchestra\Testbench\TestCase;

// ignore the class name, it's just a base class for all the tests
class BaseTest extends TestCase
{
    /**
     * It sets up the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * It loads the package service provider.
     */
    protected function getPackageProviders($app)
    {
        return [LaravelValidationServiceProvider::class];
    }

    /**
     * It loads the package aliases.
     */
    protected function getPackageAliases($app)
    {
        return [
            'LaravelValidation' => 'Bangadam\LaravelValidation\Facades\LaravelValidation',
        ];
    }
}
