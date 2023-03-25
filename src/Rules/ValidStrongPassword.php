<?php

namespace Bangadam\LaravelValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidStrongPassword implements Rule
{
    /**
     * It returns true if the value is a valid strong_password, and false if it is not
     * 
     * @param attribute The name of the attribute being validated.
     * @param value The value of the field under validation.
     * 
     * @return A boolean value.
     */
    public function passes($attribute, $value)
    {
        return preg_match('#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#', $value);
    }

    /**
     * > The `message()` function returns a string that is the translation of the
     * `laravel-validation.strong_password` key
     * 
     * @return The message that will be returned if the validation fails.
     */
    public function message()
    {
        return __('laravel-validation.strong_password');
    }
}
