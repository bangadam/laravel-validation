<?php

namespace Bangadam\LaravelValidation\Tests;

use Bangadam\LaravelValidation\Rules\ValidEmail;

class ValidEmailTest extends BaseTest
{
    /**
     * It sets up the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * It tests that the email is valid
     */
    public function test_email_is_valid()
    {
        $rules = ['email' => [new ValidEmail()]];
        $data = ['email' => 'test@gmail.com'];
        $passes = $this->app['validator']->make($data, $rules)->passes();

        $this->assertTrue($passes);
    }

    /**
     * It tests that the email is invalid
     */
    public function test_email_is_invalid()
    {
        $rule = ['email' => [new ValidEmail()]];
        $data = ['email' => 'test.csdas'];
        $passes = $this->app['validator']->make($data, $rule)->passes();

        $this->assertFalse($passes);
    }
}
