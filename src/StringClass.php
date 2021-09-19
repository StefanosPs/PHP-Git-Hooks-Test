<?php

declare(strict_types=1);

namespace App;

/**
 * A basic String class.
 *
 * @package App
 */
class StringClass
{
    private string $value;

    /**
     * Initializes a newly created StringClass object so that it represents an empty character sequence.
     *
     * @param string $str
     *
     * @return void
     */
    public function __construct(string $str)
    {
        $this->value = $str;
    }

    /**
     * Returns the char value at the specified index.
     *
     * @return string
     */
    public function charAt(int $index): string
    {
        return substr($this->value, $index, 1);
    }
}
