<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Response\Response;

interface OrdersInterface
{
    /**
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function addOrder(array $data): Response;

    /**
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrders(array $data): Response;

    /**
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrderStatusList(): Response;
}
