<?php

namespace Baselinker\Api\Response;

use Exception;
use Throwable;

class BaselinkerException extends Exception implements Throwable
{
    /**
     * @var string
     */
    private $responseCode;

    /**
     * @param string $message
     * @param string $responseCode
     */
    public function __construct(string $message, string $responseCode)
    {
        parent::__construct($message);

        $this->responseCode = $responseCode;
    }

    /**
     * @return string
     */
    public function responseCode(): string
    {
        return $this->responseCode;
    }
}
