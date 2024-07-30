<?php

namespace Baselinker;

class Config
{
    public function __construct(
        private readonly string $token,
    ) {}

    public function token(): string
    {
        return $this->token;
    }
}
