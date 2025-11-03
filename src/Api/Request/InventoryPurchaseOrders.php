<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Client;
use Baselinker\Api\Enum\InventoryPurchaseOrderStatus;
use Baselinker\Api\Response\Response;

class InventoryPurchaseOrders extends Client
{
    public function getInventoryPurchaseOrders(array $data = []): Response
    {
        return new Response(
            $this->post('getInventoryPurchaseOrders', $data),
        );
    }

    public function getInventoryPurchaseOrderItems(int $orderId, ?int $page = null): Response
    {
        return new Response(
            $this->post('getInventoryPurchaseOrderItems', [
                'order_id' => $orderId,
                'page' => $page,
            ]),
        );
    }

    public function getInventoryPurchaseOrderSeries(int $warehouseId): Response
    {
        return new Response(
            $this->post('getInventoryPurchaseOrderSeries', [
                'warehouse_id' => $warehouseId,
            ]),
        );
    }

    public function addInventoryPurchaseOrder(int $warehouseId, int $supplierId, int $payerId, string $currency = 'PLN', array $data = []): Response
    {
        $data['warehouse_id'] = $warehouseId;
        $data['supplier_id'] = $supplierId;
        $data['payer_id'] = $payerId;
        $data['currency'] = $currency;

        return new Response(
            $this->post('addInventoryPurchaseOrder', $data),
        );
    }

    public function addInventoryPurchaseOrderItems(int $orderId, array $items): Response
    {
        return new Response(
            $this->post('addInventoryPurchaseOrderItems', [
                'order_id' => $orderId,
                'items' => $items,
            ]),
        );
    }

    public function setInventoryPurchaseOrderStatus(int $orderId, InventoryPurchaseOrderStatus $status, array $completedItems = []): Response
    {
        return new Response(
            $this->post('setInventoryPurchaseOrderStatus', [
                'order_id' => $orderId,
                'status' => $status->value,
                'completed_items' => $completedItems,
            ]),
        );
    }
}
