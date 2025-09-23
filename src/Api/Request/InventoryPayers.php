<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Client;
use Baselinker\Api\Response\Response;

class InventoryPayers extends Client
{
    public function getInventoryPayers(array $filters = []): Response
    {
        return new Response(
            $this->post('getInventoryPayers', $filters),
        );
    }

    public function addInventoryPayer(string $name, array $data = []): Response
    {
        $data['name'] = $name;

        return new Response(
            $this->post('addInventoryPayer', $data),
        );
    }

    public function deleteInventoryPayer(int $payerId): Response
    {
        return new Response(
            $this->post('deleteInventoryPayer', [
                'payer_id' => $payerId,
            ]),
        );
    }
}
