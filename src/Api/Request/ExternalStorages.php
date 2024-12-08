<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Client;
use Baselinker\Api\Response\Response;

class ExternalStorages extends Client
{
    public function getExternalStoragesList(): Response
    {
        return new Response(
            $this->post('getExternalStoragesList')
        );
    }

    public function getExternalStorageCategories(string $storageId): Response
    {
        return new Response(
            $this->post('getExternalStorageCategories', [
                'storage_id' => $storageId,
            ])
        );
    }

    public function getExternalStorageProductsData(string $storageId, array $products): Response
    {
        return new Response(
            $this->post('getExternalStorageProductsData', [
                'storage_id' => $storageId,
                'products' => $products,
            ])
        );
    }

    public function getExternalStorageProductsList(string $storageId, array $filters = [], ?int $page = null): Response
    {
        $filters['storage_id'] = $storageId;
        $filters['page'] = $page;

        return new Response(
            $this->post('getExternalStorageProductsList', $filters)
        );
    }

    public function getExternalStorageProductsQuantity(string $storageId, ?int $page = null): Response
    {
        return new Response(
            $this->post('getExternalStorageProductsQuantity', [
                'storage_id' => $storageId,
                'page' => $page,
            ])
        );
    }

    public function getExternalStorageProductsPrices(string $storageId, ?int $page = null): Response
    {
        return new Response(
            $this->post('getExternalStorageProductsPrices', [
                'storage_id' => $storageId,
                'page' => $page,
            ])
        );
    }

    public function updateExternalStorageProductsQuantity(string $storageId, array $products): Response
    {
        return new Response(
            $this->post('updateExternalStorageProductsQuantity', [
                'storage_id' => $storageId,
                'products' => $products,
            ])
        );
    }
}
