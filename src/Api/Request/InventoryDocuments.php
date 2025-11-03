<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Client;
use Baselinker\Api\Enum\InventoryDocumentType;
use Baselinker\Api\Response\Response;

class InventoryDocuments extends Client
{
    public function addInventoryDocument(int $warehouseId, InventoryDocumentType $documentType, array $data = []): Response
    {
        $data['warehouse_id'] = $warehouseId;
        $data['document_type'] = $documentType->value;

        return new Response(
            $this->post('addInventoryDocument', $data)
        );
    }

    public function setInventoryDocumentStatusConfirmed(int $documentId): Response
    {
        return new Response(
            $this->post('setInventoryDocumentStatusConfirmed', [
                'document_type' => $documentId,
            ])
        );
    }

    public function getInventoryDocuments(array $filters = []): Response
    {
        return new Response(
            $this->post('getInventoryDocuments', $filters)
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

    public function addInventoryDocumentItems(int $documentId, array $items): Response
    {
        return new Response(
            $this->post('addInventoryDocumentItems', [
                'document_id' => $documentId,
                'items' => $items,
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
