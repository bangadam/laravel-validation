<?php

namespace Bangadam\LaravelValidation\Tests;

use Bangadam\LaravelValidation\Rules\ValidSlug;

class ValidSlugTest extends BaseTest
{
    /**
     * It sets up the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function test_slug_is_valid()
    {
        $rules = ['slug' => [new ValidSlug()]];
        $data = ['slug' => 'test-slug'];
        $passes = $this->app['validator']->make($data, $rules)->passes();

        $this->assertTrue($passes);
    }

    public function test_slug_is_not_valid()
    {
        $rule = ['slug' => [new ValidSlug()]];
        $data = ['slug' => 'test slug'];
        $passes = $this->app['validator']->make($data, $rule)->passes();

        $this->assertFalse($passes);
    }
}
