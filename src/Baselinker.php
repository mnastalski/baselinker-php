<?php

namespace Baselinker;

use Baselinker\Api\Request\CourierShipments;
use Baselinker\Api\Request\CourierShipmentsInterface;
use Baselinker\Api\Request\ExternalStorages;
use Baselinker\Api\Request\ExternalStoragesInterface;
use Baselinker\Api\Request\Orders;
use Baselinker\Api\Request\OrdersInterface;
use Baselinker\Api\Request\ProductCatalog;
use Baselinker\Api\Request\ProductCatalogInterface;

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
    public function productCatalog(): ProductCatalogInterface
    {
        return new ProductCatalog($this->config);
    }

    /**
     * @inheritDoc
     */
    public function externalStorages(): ExternalStoragesInterface
    {
        return new ExternalStorages($this->config);
    }

    /**
     * @inheritDoc
     */
    public function orders(): OrdersInterface
    {
        return new Orders($this->config);
    }

    /**
     * @inheritDoc
     */
    public function courierShipments(): CourierShipmentsInterface
    {
        return new CourierShipments($this->config);
    }
}
