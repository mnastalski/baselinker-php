<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Client;
use Baselinker\Api\Response\Response;
use Baselinker\Config;
use GuzzleHttp\ClientInterface;

class ProductCatalog extends Client implements ProductCatalogInterface
{
 
    /**
     * @param \Baselinker\Config $config
     * @param \GuzzleHttp\ClientInterface|null $client
     */
    public function __construct(Config $config, ?ClientInterface $client = null)
    {
        parent::__construct($config, $client);
    }

    /**
     * @inheritDoc
     */
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

    /**
     * @inheritDoc
     */
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

    /**
     * @inheritDoc
     */
    public function deleteInventoryPriceGroup(int $priceGroupId): Response
    {
        return new Response(
            $this->post('deleteInventoryPriceGroup', [
                'price_group_id' => $priceGroupId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getInventoryPriceGroups(): Response
    {
        return new Response(
            $this->post('getInventoryPriceGroups')
        );
    }

    /**
     * @inheritDoc
     */
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

    /**
     * @inheritDoc
     */
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

    /**
     * @inheritDoc
     */
    public function deleteInventoryWarehouse(int $warehouseId): Response
    {
        return new Response(
            $this->post('deleteInventoryWarehouse', [
                'warehouse_id' => $warehouseId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getInventoryWarehouses(): Response
    {
        return new Response(
            $this->post('getInventoryWarehouses')
        );
    }

    /**
     * @inheritDoc
     */
    public function addInventory(array $data): Response
    {
        return new Response(
            $this->post('addInventory', $data)
        );
    }

    /**
     * @inheritDoc
     */
    public function deleteInventory(int $inventoryId): Response
    {
        return new Response(
            $this->post('deleteInventory', [
                'inventory_id' => $inventoryId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getInventories(): Response
    {
        return new Response(
            $this->post('getInventories')
        );
    }

    /**
     * @inheritDoc
     */
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

    /**
     * @inheritDoc
     */
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

    /**
     * @inheritDoc
     */
    public function deleteInventoryCategory(int $categoryId): Response
    {
        return new Response(
            $this->post('deleteInventoryCategory', [
                'category_id' => $categoryId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getInventoryCategories(?int $inventoryId = null): Response
    {
        return new Response(
            $this->post('getInventoryCategories', [
                'inventory_id' => $inventoryId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function addInventoryManufacturer(string $name): Response
    {
        return new Response(
            $this->post('addInventoryManufacturer', [
                'name' => $name,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function updateInventoryManufacturer(int $manufacturerId, string $name): Response
    {
        return new Response(
            $this->post('addInventoryManufacturer', [
                'manufacturer_id' => $manufacturerId,
                'name' => $name,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function deleteInventoryManufacturer(int $manufacturerId): Response
    {
        return new Response(
            $this->post('deleteInventoryManufacturer', [
                'manufacturer_id' => $manufacturerId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getInventoryManufacturers(): Response
    {
        return new Response(
            $this->post('getInventoryManufacturers')
        );
    }

    /**
     * @inheritDoc
     */
    public function getInventoryExtraFields(): Response
    {
        return new Response(
            $this->post('getInventoryExtraFields')
        );
    }

    /**
     * @inheritDoc
     */
    public function getInventoryIntegrations(int $inventoryId): Response
    {
        return new Response(
            $this->post('getInventoryIntegrations', [
                'inventory_id' => $inventoryId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getInventoryAvailableTextFieldKeys(int $inventoryId): Response
    {
        return new Response(
            $this->post('getInventoryIntegrations', [
                'inventory_id' => $inventoryId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function addInventoryProduct(array $data): Response
    {
        return new Response(
            $this->post('addInventoryProduct', $data)
        );
    }

    /**
     * @inheritDoc
     */
    public function updateInventoryProduct(int $productId, array $data): Response
    {
        $data['product_id'] = $productId;

        return new Response(
            $this->post('addInventoryProduct', $data)
        );
    }

    /**
     * @inheritDoc
     */
    public function deleteInventoryProduct(int $productId): Response
    {
        return new Response(
            $this->post('deleteInventoryProduct', [
                'product_id' => $productId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getInventoryProductsData(int $inventoryId, array $products = [], ?bool $includeErpUnits = null): Response
    {
        return new Response(
            $this->post('getInventoryProductsData', [
                'inventory_id' => $inventoryId,
                'products' => $products,
                'include_erp_units' => $includeErpUnits,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getInventoryProductsList(int $inventoryId, array $filters = []): Response
    {
        $filters['inventory_id'] = $inventoryId;

        return new Response(
            $this->post('getInventoryProductsList', $filters)
        );
    }

    /**
     * @inheritDoc
     */
    public function getInventoryProductsStock(int $inventoryId, ?int $page = null): Response
    {
        return new Response(
            $this->post('getInventoryProductsStock', [
                'inventory_id' => $inventoryId,
                'page' => $page,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function updateInventoryProductsStock(int $inventoryId, array $products = []): Response
    {
        return new Response(
            $this->post('updateInventoryProductsStock', [
                'inventory_id' => $inventoryId,
                'products' => $products,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getInventoryProductsPrices(int $inventoryId, ?int $page = null): Response
    {
        return new Response(
            $this->post('getInventoryProductsPrices', [
                'inventory_id' => $inventoryId,
                'page' => $page,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function updateInventoryProductsPrices(int $inventoryId, array $products): Response
    {
        return new Response(
            $this->post('updateInventoryProductsPrices', [
                'inventory_id' => $inventoryId,
                'products' => $products,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getInventoryProductLogs(int $productId, array $filters = []): Response
    {
        $filters['product_id'] = $productId;

        return new Response(
            $this->post('getInventoryProductLogs', $filters)
        );
    }

    /**
     * @inheritDoc
     */
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
