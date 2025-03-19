<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Client;
use Baselinker\Api\Response\Response;

class ProductCatalog extends Client
{
    public function addInventoryPriceGroup(string $name, ?string $description = null, string $currency = 'PLN'): Response
    {
        return new Response(
            $this->post('addInventoryPriceGroup', [
                'name' => $name,
                'description' => $description,
                'currency' => $currency,
            ])
        );
    }

    public function updateInventoryPriceGroup(int $priceGroupId, string $name, ?string $description = null, string $currency = 'PLN'): Response
    {
        return new Response(
            $this->post('addInventoryPriceGroup', [
                'price_group_id' => $priceGroupId,
                'name' => $name,
                'description' => $description,
                'currency' => $currency,
            ])
        );
    }

    public function deleteInventoryPriceGroup(int $priceGroupId): Response
    {
        return new Response(
            $this->post('deleteInventoryPriceGroup', [
                'price_group_id' => $priceGroupId,
            ])
        );
    }

    public function getInventoryPriceGroups(): Response
    {
        return new Response(
            $this->post('getInventoryPriceGroups')
        );
    }

    public function addInventoryWarehouse(string $name, ?string $description = null, bool $stockEdition = true): Response
    {
        return new Response(
            $this->post('addInventoryWarehouse', [
                'name' => $name,
                'description' => $description,
                'stock_edition' => $stockEdition,
            ])
        );
    }

    public function updateInventoryWarehouse(int $warehouseId, string $name, ?string $description = null, bool $stockEdition = true): Response
    {
        return new Response(
            $this->post('addInventoryWarehouse', [
                'warehouse_id' => $warehouseId,
                'name' => $name,
                'description' => $description,
                'stock_edition' => $stockEdition,
            ])
        );
    }

    public function deleteInventoryWarehouse(int $warehouseId): Response
    {
        return new Response(
            $this->post('deleteInventoryWarehouse', [
                'warehouse_id' => $warehouseId,
            ])
        );
    }

    public function getInventoryWarehouses(): Response
    {
        return new Response(
            $this->post('getInventoryWarehouses')
        );
    }

    public function addInventory(array $data): Response
    {
        return new Response(
            $this->post('addInventory', $data)
        );
    }

    public function deleteInventory(int $inventoryId): Response
    {
        return new Response(
            $this->post('deleteInventory', [
                'inventory_id' => $inventoryId,
            ])
        );
    }

    public function getInventories(): Response
    {
        return new Response(
            $this->post('getInventories')
        );
    }

    public function addInventoryCategory(string $name, int $parentId = 0, ?int $inventoryId = null): Response
    {
        return new Response(
            $this->post('addInventoryCategory', [
                'name' => $name,
                'parent_id' => $parentId,
                'inventory_id' => $inventoryId,
            ])
        );
    }

    public function updateInventoryCategory(int $categoryId, string $name, int $parentId = 0): Response
    {
        return new Response(
            $this->post('addInventoryCategory', [
                'category_id' => $categoryId,
                'name' => $name,
                'parent_id' => $parentId,
            ])
        );
    }

    public function deleteInventoryCategory(int $categoryId): Response
    {
        return new Response(
            $this->post('deleteInventoryCategory', [
                'category_id' => $categoryId,
            ])
        );
    }

    public function getInventoryCategories(?int $inventoryId = null): Response
    {
        return new Response(
            $this->post('getInventoryCategories', [
                'inventory_id' => $inventoryId,
            ])
        );
    }

    public function addInventoryManufacturer(string $name): Response
    {
        return new Response(
            $this->post('addInventoryManufacturer', [
                'name' => $name,
            ])
        );
    }

    public function updateInventoryManufacturer(int $manufacturerId, string $name): Response
    {
        return new Response(
            $this->post('addInventoryManufacturer', [
                'manufacturer_id' => $manufacturerId,
                'name' => $name,
            ])
        );
    }

    public function deleteInventoryManufacturer(int $manufacturerId): Response
    {
        return new Response(
            $this->post('deleteInventoryManufacturer', [
                'manufacturer_id' => $manufacturerId,
            ])
        );
    }

    public function getInventoryManufacturers(): Response
    {
        return new Response(
            $this->post('getInventoryManufacturers')
        );
    }

    public function getInventoryExtraFields(): Response
    {
        return new Response(
            $this->post('getInventoryExtraFields')
        );
    }

    public function getInventoryIntegrations(int $inventoryId): Response
    {
        return new Response(
            $this->post('getInventoryIntegrations', [
                'inventory_id' => $inventoryId,
            ])
        );
    }

    public function getInventoryAvailableTextFieldKeys(int $inventoryId): Response
    {
        return new Response(
            $this->post('getInventoryIntegrations', [
                'inventory_id' => $inventoryId,
            ])
        );
    }

    public function addInventoryProduct(array $data): Response
    {
        return new Response(
            $this->post('addInventoryProduct', $data)
        );
    }

    public function updateInventoryProduct(int $productId, array $data): Response
    {
        $data['product_id'] = $productId;

        return new Response(
            $this->post('addInventoryProduct', $data)
        );
    }

    public function deleteInventoryProduct(int $productId): Response
    {
        return new Response(
            $this->post('deleteInventoryProduct', [
                'product_id' => $productId,
            ])
        );
    }

    public function getInventoryProductsData(
        int $inventoryId,
        array $products = [],
        ?bool $includeErpUnits = null,
        ?bool $includeWmsUnits = null,
        ?bool $includeAdditionalEans = null
    ): Response {
        return new Response(
            $this->post('getInventoryProductsData', [
                'inventory_id' => $inventoryId,
                'products' => $products,
                'include_erp_units' => $includeErpUnits,
                'include_wms_units' => $includeWmsUnits,
                'include_additional_eans' => $includeAdditionalEans,
            ])
        );
    }

    public function getInventoryProductsList(int $inventoryId, array $filters = []): Response
    {
        $filters['inventory_id'] = $inventoryId;

        return new Response(
            $this->post('getInventoryProductsList', $filters)
        );
    }

    public function getInventoryProductsStock(int $inventoryId, ?int $page = null): Response
    {
        return new Response(
            $this->post('getInventoryProductsStock', [
                'inventory_id' => $inventoryId,
                'page' => $page,
            ])
        );
    }

    public function updateInventoryProductsStock(int $inventoryId, array $products = []): Response
    {
        return new Response(
            $this->post('updateInventoryProductsStock', [
                'inventory_id' => $inventoryId,
                'products' => $products,
            ])
        );
    }

    public function getInventoryProductsPrices(int $inventoryId, ?int $page = null): Response
    {
        return new Response(
            $this->post('getInventoryProductsPrices', [
                'inventory_id' => $inventoryId,
                'page' => $page,
            ])
        );
    }

    public function updateInventoryProductsPrices(int $inventoryId, array $products): Response
    {
        return new Response(
            $this->post('updateInventoryProductsPrices', [
                'inventory_id' => $inventoryId,
                'products' => $products,
            ])
        );
    }

    public function getInventoryProductLogs(int $productId, array $filters = []): Response
    {
        $filters['product_id'] = $productId;

        return new Response(
            $this->post('getInventoryProductLogs', $filters)
        );
    }

    public function runProductMacroTrigger(int $productId, int $triggerId): Response
    {
        return new Response(
            $this->post('runProductMacroTrigger', [
                'product_id' => $productId,
                'trigger_id' => $triggerId,
            ])
        );
    }
}
