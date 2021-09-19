<?php

declare(strict_types=1);

namespace Tests\App;

class StringClassTest extends \PHPUnit\Framework\TestCase
{
    public function testCharAt(): void
    {
        $string = new \App\StringClass("abcdefg");
        $this->assertEquals($string->charAt(0), 'a');
    }
}
