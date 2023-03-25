<?php

namespace Bangadam\LaravelValidation\Tests;

use Bangadam\LaravelValidation\Rules\ValidStrongPassword;

class ValidStrongPasswordTest extends BaseTest
{
    /**
     * It sets up the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function test_password_is_strong()
    {
        $rules = ['password' => [new ValidStrongPassword()]];
        $data = ['password' => 'Password1!'];
        $passes = $this->app['validator']->make($data, $rules)->passes();

        $this->assertTrue($passes);
    }

    public function test_password_is_not_strong()
    {
        $rule = ['password' => [new ValidStrongPassword()]];
        $data = ['password' => 'password'];
        $passes = $this->app['validator']->make($data, $rule)->passes();

        $this->assertFalse($passes);
    }
}
