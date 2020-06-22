<?php

namespace Baselinker;

use Baselinker\Api\Request\OrdersInterface;

interface BaselinkerInterface
{
    /**
     * @return \Baselinker\Api\Request\OrdersInterface
     */
    public function orders(): OrdersInterface;
}
