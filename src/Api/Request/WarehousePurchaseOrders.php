<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Client;
use Baselinker\Api\Response\Response;

class WarehousePurchaseOrders extends Client
{
    public function getInventoryPurchaseOrders(array $data = []): Response
    {
        return new Response(
            $this->post('getInventoryPurchaseOrders', $data)
        );
    }

    public function getInventoryPurchaseOrderItems(int $orderId, ?int $page = null): Response
    {
        return new Response(
            $this->post('getInventoryPurchaseOrderItems', [
                'order_id' => $orderId,
                'page' => $page,
            ])
        );
    }

    public function getInventoryPurchaseOrderSeries(int $warehouseId): Response
    {
        return new Response(
            $this->post('getInventoryPurchaseOrderSeries', [
                'warehouse_id' => $warehouseId,
            ])
        );
    }
}
