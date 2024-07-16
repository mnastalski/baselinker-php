<?php

namespace Baselinker;

use Baselinker\Api\Request\BaselinkerConnectInterface;
use Baselinker\Api\Request\CourierShipmentsInterface;
use Baselinker\Api\Request\ExternalStoragesInterface;
use Baselinker\Api\Request\OrderReturnsInterface;
use Baselinker\Api\Request\OrdersInterface;
use Baselinker\Api\Request\ProductCatalogInterface;

interface BaselinkerInterface
{
    /**
     * @return \Baselinker\Api\Request\ProductCatalogInterface
     */
    public function productCatalog(): ProductCatalogInterface;

    /**
     * @return \Baselinker\Api\Request\ExternalStoragesInterface
     */
    public function externalStorages(): ExternalStoragesInterface;

    /**
     * @return \Baselinker\Api\Request\OrdersInterface
     */
    public function orders(): OrdersInterface;

    /**
     * @return \Baselinker\Api\Request\OrderReturnsInterface
     */
    public function orderReturns(): OrderReturnsInterface;

    /**
     * @return \Baselinker\Api\Request\CourierShipmentsInterface
     */
    public function courierShipments(): CourierShipmentsInterface;

    /**
     * @return \Baselinker\Api\Request\BaselinkerConnectInterface
     */
    public function baselinkerConnect(): BaselinkerConnectInterface;
}
