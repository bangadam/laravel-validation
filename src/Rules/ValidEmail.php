<?php

namespace Bangadam\LaravelValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidEmail implements Rule
{
    /**
     * It returns true if the value is a valid email, and false if it is not
     * 
     * @param attribute The name of the attribute being validated.
     * @param value The value of the field under validation.
     * 
     * @return A boolean value.
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $value);
    }

    /**
     * > The `message()` function returns a string that is the translation of the
     * `laravel-validation.email` key
     * 
     * @return The message that will be returned if the validation fails.
     */
    public function message()
    {
        return __('laravel-validation.email');
    }
}
