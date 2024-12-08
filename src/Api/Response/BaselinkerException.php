<?php

namespace Baselinker\Api\Response;

use Exception;
use Psr\Http\Message\ResponseInterface;

class BaselinkerException extends Exception
{
    use HasResponse;

    private string $responseCode;

    private string $responseMessage;

    public function __construct(
        ResponseInterface $response,
    ) {
        $this->response = $response;
        $this->responseCode = $this->getParameter('error_code');
        $this->responseMessage = $this->getParameter('error_message');

        parent::__construct("[{$this->responseCode}] {$this->responseMessage}");
    }

    public function responseCode(): string
    {
        return $this->responseCode;
    }

    public function responseMessage(): string
    {
        return $this->responseMessage;
    }
}
