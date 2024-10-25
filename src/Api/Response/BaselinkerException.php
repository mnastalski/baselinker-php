<?php

namespace Baselinker\Api\Response;

use Exception;

class BaselinkerException extends Exception
{
    public function __construct(
        private readonly string $responseMessage,
        private readonly string $responseCode,
    ) {
        parent::__construct("[{$responseCode}] {$responseMessage}");
    }

    public function responseMessage(): string
    {
        return $this->responseMessage;
    }

    public function responseCode(): string
    {
        return $this->responseCode;
    }
}
