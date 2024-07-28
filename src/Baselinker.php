<?php

namespace Baselinker;

use Baselinker\Api\Request\BaselinkerConnect;
use Baselinker\Api\Request\BaselinkerConnectInterface;
use Baselinker\Api\Request\CourierShipments;
use Baselinker\Api\Request\CourierShipmentsInterface;
use Baselinker\Api\Request\ExternalStorages;
use Baselinker\Api\Request\ExternalStoragesInterface;
use Baselinker\Api\Request\OrderReturns;
use Baselinker\Api\Request\OrderReturnsInterface;
use Baselinker\Api\Request\Orders;
use Baselinker\Api\Request\OrdersInterface;
use Baselinker\Api\Request\ProductCatalog;
use Baselinker\Api\Request\ProductCatalogInterface;
use GuzzleHttp\ClientInterface;

class Baselinker implements BaselinkerInterface
{
    /**
     * @var \Baselinker\Config
     */
    private $config;

    /**
     * @var \GuzzleHttp\ClientInterface
     */
    private $client;

    /**
     * @param array $parameters
     * @param \GuzzleHttp\ClientInterface|null $client
     */
    public function __construct(array $parameters, ?ClientInterface $client = null)
    {
        $this->config = new Config($parameters);
        $this->client = $client;
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
    public function orderReturns(): OrderReturnsInterface
    {
        return new OrderReturns($this->config);
    }

    /**
     * @inheritDoc
     */
    public function courierShipments(): CourierShipmentsInterface
    {
        return new CourierShipments($this->config);
    }

    /**
     * @inheritDoc
     */
    public function baselinkerConnect(): BaselinkerConnectInterface
    {
        return new BaselinkerConnect($this->config);
    }
}
