<?php

namespace Bangadam\LaravelValidation\Tests;

use Bangadam\LaravelValidation\Rules\ValidUuid;

class ValidUuidTest extends BaseTest
{
    /**
     * It sets up the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /** @test 
     * `->passes('uuid', 'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a11')` should return `true`
     * 
     */
    public function uuid_is_valid()
    {
        $rules = ['uuid' => [new ValidUuid()]];
        $data = ['uuid' => '123e4567-e89b-12d3-a456-426655440000'];
        $passes = $this->app['validator']->make($data, $rules)->passes();

        $this->assertTrue($passes);
    }

    /** @test
     * `uuid_is_invalid` should return false when the uuid is invalid
     */
    public function uuid_is_invalid()
    {
        $rule = ['uuid' => [new ValidUuid()]];
        $data = ['uuid' => '123'];
        $passes = $this->app['validator']->make($data, $rule)->passes();

        $this->assertFalse($passes);
    }
}
