<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Client;
use Baselinker\Api\Response\Response;

class InventorySuppliers extends Client
{
    public function getInventorySuppliers(array $filters = []): Response
    {
        return new Response(
            $this->post('getInventorySuppliers', $filters)
        );
    }

    public function addInventorySupplier(array $data): Response
    {
        return new Response(
            $this->post('addInventorySupplier', $data)
        );
    }

    public function deleteInventorySupplier(int $supplierId): Response
    {
        return new Response(
            $this->post('deleteInventorySupplier', [
                'supplier_id' => $supplierId,
            ])
        );
    }
}
