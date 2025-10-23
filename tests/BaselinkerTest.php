<?php

namespace Baselinker\Tests;

use Baselinker\Api\Request\BaselinkerConnect;
use Baselinker\Api\Request\CourierShipments;
use Baselinker\Api\Request\ExternalStorages;
use Baselinker\Api\Request\InventoryDocuments;
use Baselinker\Api\Request\InventoryPayers;
use Baselinker\Api\Request\InventoryPurchaseOrders;
use Baselinker\Api\Request\InventorySuppliers;
use Baselinker\Api\Request\OrderReturns;
use Baselinker\Api\Request\Orders;
use Baselinker\Api\Request\ProductCatalog;
use Baselinker\Api\Request\WarehouseDocuments;
use Baselinker\Api\Request\WarehousePurchaseOrders;
use Baselinker\Baselinker;
use PHPUnit\Framework\TestCase;

class BaselinkerTest extends TestCase
{
    public function testProductCatalog(): void
    {
        $baselinker = new Baselinker('token');

        $productCatalog = $baselinker->productCatalog();

        $this->assertInstanceOf(ProductCatalog::class, $productCatalog);
    }

    public function testWarehouseDocuments(): void
    {
        $baselinker = new Baselinker('token');

        $warehouseDocuments = $baselinker->warehouseDocuments();

        $this->assertInstanceOf(WarehouseDocuments::class, $warehouseDocuments);
    }

    public function testWarehousePurchaseOrders(): void
    {
        $baselinker = new Baselinker('token');

        $warehousePurchaseOrders = $baselinker->warehousePurchaseOrders();

        $this->assertInstanceOf(WarehousePurchaseOrders::class, $warehousePurchaseOrders);
    }

    public function testInventoryDocuments(): void
    {
        $baselinker = new Baselinker('token');

        $inventoryDocuments = $baselinker->inventoryDocuments();

        $this->assertInstanceOf(InventoryDocuments::class, $inventoryDocuments);
    }

    public function testInventoryPurchaseOrders(): void
    {
        $baselinker = new Baselinker('token');

        $inventoryPurchaseOrders = $baselinker->inventoryPurchaseOrders();

        $this->assertInstanceOf(InventoryPurchaseOrders::class, $inventoryPurchaseOrders);
    }

    public function testInventorySuppliers(): void
    {
        $baselinker = new Baselinker('token');

        $inventorySuppliers = $baselinker->inventorySuppliers();

        $this->assertInstanceOf(InventorySuppliers::class, $inventorySuppliers);
    }

    public function testInventoryPayers(): void
    {
        $baselinker = new Baselinker('token');

        $inventoryPayers = $baselinker->inventoryPayers();

        $this->assertInstanceOf(InventoryPayers::class, $inventoryPayers);
    }

    public function testExternalStorages(): void
    {
        $baselinker = new Baselinker('token');

        $externalStorages = $baselinker->externalStorages();

        $this->assertInstanceOf(ExternalStorages::class, $externalStorages);
    }

    public function testOrders(): void
    {
        $baselinker = new Baselinker('token');

        $orders = $baselinker->orders();

        $this->assertInstanceOf(Orders::class, $orders);
    }

    public function testOrderReturns(): void
    {
        $baselinker = new Baselinker('token');

        $orderReturns = $baselinker->orderReturns();

        $this->assertInstanceOf(OrderReturns::class, $orderReturns);
    }

    public function testCourierShipments(): void
    {
        $baselinker = new Baselinker('token');

        $courierShipments = $baselinker->courierShipments();

        $this->assertInstanceOf(CourierShipments::class, $courierShipments);
    }

    public function testBaselinkerConnect(): void
    {
        $baselinker = new Baselinker('token');

        $baselinkerConnect = $baselinker->baselinkerConnect();

        $this->assertInstanceOf(BaselinkerConnect::class, $baselinkerConnect);
    }
}
