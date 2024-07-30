<?php

namespace Baselinker;

use InvalidArgumentException;

class Config
{
    /**
     * @var string
     */
    private $token;

    /**
     * @param array $parameters
     */
    public function __construct(array $parameters)
    {
        $this->set($parameters);
    }

    /**
     * @param array $parameters
     * @return \Baselinker\Config
     */
    public function set(array $parameters): self
    {
        if (empty($parameters['token'])) {
            throw new InvalidArgumentException('Parameter "token" must be provided in the configuration.');
        }

        $this->token = $parameters['token'];

        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
}
