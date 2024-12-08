<?php

namespace Baselinker\Api\Response;

use Psr\Http\Message\ResponseInterface;

trait HasResponse
{
    protected readonly ResponseInterface $response;

    private ?string $contents = null;

    private ?array $array = null;

    public function response(): ResponseInterface
    {
        return $this->response;
    }

    public function contents(): string
    {
        if ($this->contents) {
            return $this->contents;
        }

        return $this->contents = (string) $this->response->getBody();
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
}
