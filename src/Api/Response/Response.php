<?php

namespace Baselinker\Api\Response;

use Psr\Http\Message\ResponseInterface;

class Response
{
    use HasResponse;

    public function __construct(
        ResponseInterface $response,
    ) {
        $this->response = $response;

        if ($this->hasError()) {
            throw new BaselinkerException($this->response);
        }
    }

    private function hasError(): bool
    {
        $status = $this->getParameter('status');

        return strtolower($status) !== 'success';
    }
}
