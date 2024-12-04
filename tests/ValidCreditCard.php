<?php

namespace Bangadam\LaravelValidation\Tests;

use Bangadam\LaravelValidation\Rules\ValidCreditCard;

class ValidCreditCardTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function test_credit_card_is_valid()
    {
        $rules = ['credit_card' => [new ValidCreditCard()]];
        $data = ['credit_card' => '4111111111111111'];
        $passes = $this->app['validator']->make($data, $rules)->passes();

        $this->assertTrue($passes);
    }

    public function test_credit_card_is_invalid()
    {
        $rule = ['credit_card' => [new ValidCreditCard()]];
        $data = ['credit_card' => '4111111111111112'];
        $passes = $this->app['validator']->make($data, $rule)->passes();

        $this->assertFalse($passes);
    }
}
