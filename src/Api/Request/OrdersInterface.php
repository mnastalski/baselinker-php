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

    /**
     * @param int $orderId
     * @param float $amount
     * @return \Baselinker\Api\Response\Response
     */
    public function setOrderPayment(int $orderId, float $amount): Response;

    /**
     * @param int $orderId
     * @param int $statusId
     * @return \Baselinker\Api\Response\Response
     */
    public function setOrderStatus(int $orderId, int $statusId): Response;
}
