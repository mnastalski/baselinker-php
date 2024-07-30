<?php

namespace Api\Response;

use Baselinker\Api\Response\BaselinkerException;
use PHPUnit\Framework\TestCase;

class BaselinkerExceptionTest extends TestCase
{
    public function testGetters(): void
    {
        $exception = new BaselinkerException('Message', 'CODE');

        $this->assertEquals('Message', $exception->responseMessage());
        $this->assertEquals('CODE', $exception->responseCode());
    }
}
