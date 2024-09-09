<?php

namespace Baselinker\Api\Response;

use Psr\Http\Message\ResponseInterface;

class Response
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    /**
     * @var string
     */
    private $contents;

    /**
     * @var array
     */
    private $array;

    /**
     * @param  \Psr\Http\Message\ResponseInterface $response
     * @throws \Baselinker\Api\Response\BaselinkerException
     */
    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;

        if ($this->hasError()) {
            $data = $this->toArray();

            $errorMessage = $data['error_message'] ?? 'Unknown error';
            $errorCode = $data['error_code'] ?? 0;

            throw new BaselinkerException($errorMessage, $errorCode);
        }
    }

    /**
     * Return the response's body as a `string`.
     *
     * @return string
     */
    public function contents(): string
    {
        if (!$this->contents) {
            $this->contents = $this->response->getBody()->getContents();
        }

        return $this->contents;
    }

    /**
     * Return the response as an `array`.
     *
     * @return array
     */
    public function toArray(): array
    {
        if (!$this->array) {
            $this->array = json_decode($this->contents(), true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                $this->array = [];
            }
        }

        return $this->array;
    }

    /**
     * Return the provided parameter's value from the response's JSON.
     *
     * @param  string $parameter
     * @return mixed
     */
    public function getParameter(string $parameter)
    {
        return $this->toArray()[$parameter] ?? null;
    }

    /**
     * Return `true` if response status isn't "success".
     *
     * @return bool
     */
    private function hasError(): bool
    {
        $status = $this->getParameter('status');

        return $status === null || strtolower($status) !== 'success';
    }
}

