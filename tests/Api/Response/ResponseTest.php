<?php

namespace Baselinker\Tests\Api\Response;

use Baselinker\Api\Response\BaselinkerException;
use Baselinker\Api\Response\Response;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

class ResponseTest extends TestCase
{
    public function testGetters(): void
    {
        $body = json_encode([
            'status' => 'SUCCESS',
            'list' => [
                'foo' => 'bar',
            ],
        ]);

        $response = new Response(
            new GuzzleResponse(200, [], $body)
        );

        $this->assertInstanceOf(ResponseInterface::class, $response->response());

        $this->assertEquals('{"status":"SUCCESS","list":{"foo":"bar"}}', $response->contents());

        $this->assertEquals([
            'status' => 'SUCCESS',
            'list' => [
                'foo' => 'bar',
            ],
        ], $response->toArray());

        $this->assertEquals([
            'foo' => 'bar',
        ], $response->getParameter('list'));
    }

    public function testWithErrorThrowsException(): void
    {
        $body = json_encode([
            'status' => 'ERROR',
            'error_code' => 'CODE',
            'error_message' => 'Message',
        ]);

        $this->expectException(BaselinkerException::class);
        $this->expectExceptionMessage('[CODE] Message');

        new Response(
            new GuzzleResponse(200, [], $body)
        );
    }
}
