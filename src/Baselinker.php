<?php

namespace Baselinker;

use Baselinker\Api\Request\BaselinkerConnect;
use Baselinker\Api\Request\CourierShipments;
use Baselinker\Api\Request\ExternalStorages;
use Baselinker\Api\Request\InventoryPayers;
use Baselinker\Api\Request\OrderReturns;
use Baselinker\Api\Request\Orders;
use Baselinker\Api\Request\ProductCatalog;
use Baselinker\Api\Request\WarehouseDocuments;
use Baselinker\Api\Request\WarehousePurchaseOrders;

class Baselinker
{
    private Config $config;

    public function __construct(string $token)
    {
        $this->config = new Config($token);
    }

    public function productCatalog(): ProductCatalog
    {
        return new ProductCatalog($this->config);
    }

    public function warehouseDocuments(): WarehouseDocuments
    {
        return new WarehouseDocuments($this->config);
    }

    public function warehousePurchaseOrders(): WarehousePurchaseOrders
    {
        return new WarehousePurchaseOrders($this->config);
    }

    public function inventoryPayers(): InventoryPayers
    {
        return new InventoryPayers($this->config);
    }

    public function externalStorages(): ExternalStorages
    {
        return new ExternalStorages($this->config);
    }

    public function orders(): Orders
    {
        return new Orders($this->config);
    }

    public function orderReturns(): OrderReturns
    {
        return new OrderReturns($this->config);
    }

    public function courierShipments(): CourierShipments
    {
        return new CourierShipments($this->config);
    }

    public function baselinkerConnect(): BaselinkerConnect
    {
        return new BaselinkerConnect($this->config);
    }
}
