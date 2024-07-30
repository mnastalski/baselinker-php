<?php

namespace Baselinker\Tests;

use Baselinker\Api\Request\CourierShipments;
use Baselinker\Api\Request\ExternalStorages;
use Baselinker\Api\Request\OrderReturns;
use Baselinker\Api\Request\Orders;
use Baselinker\Api\Request\ProductCatalog;
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

        $this->assertInstanceOf(ProductCatalog::class, $productCatalog);
    }

    public function testExternalStorages(): void
    {
        $baselinker = new Baselinker([
            'token' => 'foo',
        ]);

        $externalStorages = $baselinker->externalStorages();

        $this->assertInstanceOf(ExternalStorages::class, $externalStorages);
    }

    public function testOrders(): void
    {
        $baselinker = new Baselinker([
            'token' => 'foo',
        ]);

        $orders = $baselinker->orders();

        $this->assertInstanceOf(Orders::class, $orders);
    }

    public function testOrderReturns(): void
    {
        $baselinker = new Baselinker([
            'token' => 'foo',
        ]);

        $orderReturns = $baselinker->orderReturns();

        $this->assertInstanceOf(OrderReturns::class, $orderReturns);
    }

    public function testCourierShipments(): void
    {
        $baselinker = new Baselinker([
            'token' => 'foo',
        ]);

        $courierShipments = $baselinker->courierShipments();

        $this->assertInstanceOf(CourierShipments::class, $courierShipments);
    }
}
