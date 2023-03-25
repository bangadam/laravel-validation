<?php

namespace Bangadam\LaravelValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidSlug implements Rule
{
    /**
     * It returns true if the value is a valid slug, and false if it is not
     * 
     * @param attribute The name of the attribute being validated.
     * @param value The value of the field under validation.
     * 
     * @return A boolean value.
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $value);
    }

    /**
     * > The `message()` function returns a string that is the translation of the
     * `laravel-validation.slug` key
     * 
     * @return The message that will be returned if the validation fails.
     */
    public function message()
    {
        return __('laravel-validation.slug');
    }
}
