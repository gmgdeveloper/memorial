<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MaxWordCount implements Rule
{
    protected $maxWords;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($maxWords)
    {
        $this->maxWords = $maxWords;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
       // Split the string into words
       $words = str_word_count($value, 0);
       // Check if the number of words is less than or equal to the maximum allowed words
       return $words <= $this->maxWords;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "The :attribute cannot exceed {$this->maxWords} words.";
    }
}
