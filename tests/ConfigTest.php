<?php

namespace Baselinker\Tests;

use Baselinker\Config;
use InvalidArgumentException;
use Iterator;
use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    public function testGetToken(): void
    {
        $config = new Config([
            'token' => 'foo',
        ]);

        $this->assertEquals('foo', $config->getToken());
    }

    /**
     * @dataProvider invalidConfigDataProvider
     */
    public function testSetWithInvalidTokenThrowsException(array $config): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Parameter "token" must be provided in the configuration.');

        new Config($config);
    }

    public static function invalidConfigDataProvider(): Iterator
    {
        yield 'empty config' => [
            [],
        ];

        yield 'null as token' => [
            [
                'token' => null,
            ]
        ];

        yield 'empty string as token' => [
            [
                'token' => '',
            ]
        ];
    }
}
