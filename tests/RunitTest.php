<?php

namespace Toggenation\Play\Tests;

use PHPUnit\Framework\TestCase;
use Toggenation\Play\Runit;

class RunitTest extends TestCase
{
    public function testItHasTheRightOutput()
    {
        Runit::run();
        $this->expectOutputString("Hi"  . PHP_EOL);
    }
}
