<?php

namespace Baselinker\Tests\Api\Response;

use Baselinker\Api\Response\BaselinkerException;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

class BaselinkerExceptionTest extends TestCase
{
    public function testGetters(): void
    {
        $response = new GuzzleResponse(200, [], json_encode([
            'status' => 'ERROR',
            'error_code' => 'CODE',
            'error_message' => 'Message',
        ]));

        $exception = new BaselinkerException($response);

        $this->assertInstanceOf(ResponseInterface::class, $exception->response());

        $this->assertEquals('{"status":"ERROR","error_code":"CODE","error_message":"Message"}', $exception->contents());

        $this->assertEquals([
            'status' => 'ERROR',
            'error_code' => 'CODE',
            'error_message' => 'Message',
        ], $exception->toArray());

        $this->assertEquals('CODE', $exception->getParameter('error_code'));

        $this->assertEquals('CODE', $exception->responseCode());
        $this->assertEquals('Message', $exception->responseMessage());
    }
}
