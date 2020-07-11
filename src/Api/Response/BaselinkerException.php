<?php

namespace Baselinker\Api\Response;

use Exception;
use Throwable;

class BaselinkerException extends Exception implements Throwable
{
    /**
     * @var string
     */
    private $responseMessage;

    /**
     * @var string
     */
    private $responseCode;

    /**
     * @param string $responseMessage
     * @param string $responseCode
     */
    public function __construct(string $responseMessage, string $responseCode)
    {
        parent::__construct("[{$responseCode}] {$responseMessage}");

        $this->responseMessage = $responseMessage;
        $this->responseCode = $responseCode;
    }

    /**
     * @return string
     */
    public function responseMessage(): string
    {
        return $this->responseMessage;
    }

    /**
     * @return string
     */
    public function responseCode(): string
    {
        return $this->responseCode;
    }
}
