<?php

namespace Baselinker;

use Baselinker\Api\Request\BaselinkerConnect;
use Baselinker\Api\Request\CourierShipments;
use Baselinker\Api\Request\ExternalStorages;
use Baselinker\Api\Request\OrderReturns;
use Baselinker\Api\Request\Orders;
use Baselinker\Api\Request\ProductCatalog;

class Baselinker
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
    public function productCatalog(): ProductCatalog
    {
        return new ProductCatalog($this->config);
    }

    /**
     * @inheritDoc
     */
    public function externalStorages(): ExternalStorages
    {
        return new ExternalStorages($this->config);
    }

    /**
     * @inheritDoc
     */
    public function orders(): Orders
    {
        return new Orders($this->config);
    }

    /**
     * @inheritDoc
     */
    public function orderReturns(): OrderReturns
    {
        return new OrderReturns($this->config);
    }

    /**
     * @inheritDoc
     */
    public function courierShipments(): CourierShipments
    {
        return new CourierShipments($this->config);
    }

    /**
     * @inheritDoc
     */
    public function baselinkerConnect(): BaselinkerConnect
    {
        return new BaselinkerConnect($this->config);
    }
}
