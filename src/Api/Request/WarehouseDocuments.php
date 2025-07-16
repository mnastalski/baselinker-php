<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Client;
use Baselinker\Api\Response\Response;

class WarehouseDocuments extends Client
{
    public function getInventoryDocuments(array $data = []): Response
    {
        return new Response(
            $this->post('getInventoryDocuments', $data)
        );
    }

    public function getInventoryDocumentItems(int $documentId, ?int $page = null): Response
    {
        return new Response(
            $this->post('getInventoryDocumentItems', [
                'document_id' => $documentId,
                'page' => $page,
            ])
        );
    }

    public function getInventoryDocumentSeries(): Response
    {
        return new Response(
            $this->post('getInventoryDocumentSeries')
        );
    }
}
