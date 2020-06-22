<?php

namespace Baselinker;

use Baselinker\Api\Request\Orders;
use Baselinker\Api\Request\OrdersInterface;

class Baselinker implements BaselinkerInterface
{
    /**
     * @var \Baselinker\Config
     */
    private $config;

    /**
     * @param array $parameters
     */
    public function __construct(array $parameters)
    {
        $this->config = new Config($parameters);
    }

    /**
     * @inheritDoc
     */
    public function orders(): OrdersInterface
    {
        return new Orders($this->config);
    }
}
