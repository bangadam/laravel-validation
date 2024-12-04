<?php

namespace Bangadam\LaravelValidation\Tests;

use Bangadam\LaravelValidation\Rules\ValidPostalCode;

class ValidPostalCodeTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function test_postal_code_is_valid()
    {
        $rules = ['postal_code' => [new ValidPostalCode()]];
        $data = ['postal_code' => '12345'];
        $passes = $this->app['validator']->make($data, $rules)->passes();

        $this->assertTrue($passes);
    }

    public function test_postal_code_is_invalid()
    {
        $rule = ['postal_code' => [new ValidPostalCode()]];
        $data = ['postal_code' => '1234'];
        $passes = $this->app['validator']->make($data, $rule)->passes();

        $this->assertFalse($passes);
    }
}
