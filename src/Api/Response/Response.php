<?php

namespace Baselinker\Api\Response;

use Psr\Http\Message\ResponseInterface;

class Response
{
    private ?string $contents = null;

    private ?array $array = null;

    public function __construct(
        private readonly ResponseInterface $response,
    ) {
        if ($this->hasError()) {
            throw new BaselinkerException(
                $this->getParameter('error_message'),
                $this->getParameter('error_code'),
            );
        }
    }

    public function contents(): string
    {
        if ($this->contents) {
            return $this->contents;
        }

        return $this->contents = $this->response->getBody()->getContents();
    }

    public function toArray(): array
    {
        if ($this->array) {
            return $this->array;
        }

        $array = json_decode($this->contents(), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            $array = [];
        }

        return $this->array = $array;
    }

    public function getParameter(string $parameter): mixed
    {
        return $this->toArray()[$parameter];
    }

    private function hasError(): bool
    {
        $status = $this->getParameter('status');

        return strtolower($status) !== 'success';
    }
}
