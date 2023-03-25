<?php

namespace Bangadam\LaravelValidation\Tests;

use Bangadam\LaravelValidation\Rules\ValidUsername;

class ValidUsernameTest extends BaseTest
{
    /**
     * It sets up the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * It tests that the username is valid
     */
    public function test_username_is_valid()
    {
        $rules = ['username' => [new ValidUsername()]];
        $data = ['username' => 'bangadam'];
        $passes = $this->app['validator']->make($data, $rules)->passes();

        $this->assertTrue($passes);
    }

    /**
     * It tests that the username is invalid
     */
    public function test_username_is_invalid()
    {
        $rule = ['username' => [new ValidUsername()]];
        $data = ['username' => 'bangadam!'];
        $passes = $this->app['validator']->make($data, $rule)->passes();

        $this->assertFalse($passes);
    }
}
