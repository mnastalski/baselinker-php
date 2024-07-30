<?php

namespace Baselinker\Tests;

use Baselinker\Api\Request\CourierShipmentsInterface;
use Baselinker\Api\Request\ExternalStoragesInterface;
use Baselinker\Api\Request\OrderReturnsInterface;
use Baselinker\Api\Request\OrdersInterface;
use Baselinker\Api\Request\ProductCatalogInterface;
use Baselinker\Baselinker;
use PHPUnit\Framework\TestCase;

class BaselinkerTest extends TestCase
{
    public function testProductCatalog(): void
    {
        $baselinker = new Baselinker([
            'token' => 'foo',
        ]);

        $productCatalog = $baselinker->productCatalog();

        $this->assertInstanceOf(ProductCatalogInterface::class, $productCatalog);
    }

    public function testExternalStorages(): void
    {
        $baselinker = new Baselinker([
            'token' => 'foo',
        ]);

        $externalStorages = $baselinker->externalStorages();

        $this->assertInstanceOf(ExternalStoragesInterface::class, $externalStorages);
    }

    public function testOrders(): void
    {
        $baselinker = new Baselinker([
            'token' => 'foo',
        ]);

        $orders = $baselinker->orders();

        $this->assertInstanceOf(OrdersInterface::class, $orders);
    }

    public function testOrderReturns(): void
    {
        $baselinker = new Baselinker([
            'token' => 'foo',
        ]);

        $orderReturns = $baselinker->orderReturns();

        $this->assertInstanceOf(OrderReturnsInterface::class, $orderReturns);
    }

    public function testCourierShipments(): void
    {
        $baselinker = new Baselinker([
            'token' => 'foo',
        ]);

        $courierShipments = $baselinker->courierShipments();

        $this->assertInstanceOf(CourierShipmentsInterface::class, $courierShipments);
    }
}
