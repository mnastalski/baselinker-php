<?php

namespace Baselinker\Tests;

use Baselinker\Config;
use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    public function testToken(): void
    {
        $config = new Config('foo');

        $this->assertEquals('foo', $config->token());
    }
}
