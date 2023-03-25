<?php

namespace Bangadam\LaravelValidation;

use Illuminate\Support\ServiceProvider;

class LaravelValidationServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'laravel-validation');
    }
}
