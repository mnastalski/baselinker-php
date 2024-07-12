<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Response\Response;

interface ProductCatalogInterface
{
    /**
     * @param string $name
     * @param string|null $description
     * @param string $currency
     * @return \Baselinker\Api\Response\Response
     */
    public function addInventoryPriceGroup(string $name, ?string $description = null, string $currency = 'PLN'): Response;

    /**
     * @param int $priceGroupId
     * @param string $name
     * @param string|null $description
     * @param string $currency
     * @return \Baselinker\Api\Response\Response
     */
    public function updateInventoryPriceGroup(int $priceGroupId, string $name, ?string $description = null, string $currency = 'PLN'): Response;

    /**
     * @param int $priceGroupId
     * @return \Baselinker\Api\Response\Response
     */
    public function deleteInventoryPriceGroup(int $priceGroupId): Response;

    /**
     * @return \Baselinker\Api\Response\Response
     */
    public function getInventoryPriceGroups(): Response;

    /**
     * @param string $name
     * @param string|null $description
     * @param bool $stockEdition
     * @return \Baselinker\Api\Response\Response
     */
    public function addInventoryWarehouse(string $name, ?string $description = null, bool $stockEdition = true): Response;

    /**
     * @param int $warehouseId
     * @param string $name
     * @param string|null $description
     * @param bool $stockEdition
     * @return \Baselinker\Api\Response\Response
     */
    public function updateInventoryWarehouse(int $warehouseId, string $name, ?string $description = null, bool $stockEdition = true): Response;

    /**
     * @param int $warehouseId
     * @return \Baselinker\Api\Response\Response
     */
    public function deleteInventoryWarehouse(int $warehouseId): Response;

    /**
     * @return \Baselinker\Api\Response\Response
     */
    public function getInventoryWarehouses(): Response;

    /**
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function addInventory(array $data): Response;

    /**
     * @param int $inventoryId
     * @return \Baselinker\Api\Response\Response
     */
    public function deleteInventory(int $inventoryId): Response;

    /**
     * @return \Baselinker\Api\Response\Response
     */
    public function getInventories(): Response;

    /**
     * @param int|null $inventoryId
     * @param string $name
     * @param int $parentId
     * @return \Baselinker\Api\Response\Response
     */
    public function addInventoryCategory(string $name, int $parentId = 0, ?int $inventoryId = null): Response;

    /**
     * @param int $categoryId
     * @param string $name
     * @param int $parentId
     * @return \Baselinker\Api\Response\Response
     */
    public function updateInventoryCategory(int $categoryId, string $name, int $parentId = 0): Response;

    /**
     * @param int $categoryId
     * @return \Baselinker\Api\Response\Response
     */
    public function deleteInventoryCategory(int $categoryId): Response;

    /**
     * @param int|null $inventoryId
     * @return \Baselinker\Api\Response\Response
     */
    public function getInventoryCategories(?int $inventoryId = null): Response;

    /**
     * @param string $name
     * @return \Baselinker\Api\Response\Response
     */
    public function addInventoryManufacturer(string $name): Response;

    /**
     * @param int $manufacturerId
     * @param string $name
     * @return \Baselinker\Api\Response\Response
     */
    public function updateInventoryManufacturer(int $manufacturerId, string $name): Response;

    /**
     * @param int $manufacturerId
     * @return \Baselinker\Api\Response\Response
     */
    public function deleteInventoryManufacturer(int $manufacturerId): Response;

    /**
     * @return \Baselinker\Api\Response\Response
     */
    public function getInventoryManufacturers(): Response;

    /**
     * @return \Baselinker\Api\Response\Response
     */
    public function getInventoryExtraFields(): Response;

    /**
     * @param int $inventoryId
     * @return \Baselinker\Api\Response\Response
     */
    public function getInventoryIntegrations(int $inventoryId): Response;

    /**
     * @param int $inventoryId
     * @return \Baselinker\Api\Response\Response
     */
    public function getInventoryAvailableTextFieldKeys(int $inventoryId): Response;

    /**
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function addInventoryProduct(array $data): Response;

    /**
     * @param int $productId
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function updateInventoryProduct(int $productId, array $data): Response;

    /**
     * @param int $productId
     * @return \Baselinker\Api\Response\Response
     */
    public function deleteInventoryProduct(int $productId): Response;

    /**
     * @param int $inventoryId
     * @param array $products
     * @param bool|null $includeErpUnits
     * @return \Baselinker\Api\Response\Response
     */
    public function getInventoryProductsData(int $inventoryId, array $products = [], ?bool $includeErpUnits = null): Response;

    /**
     * @param int $inventoryId
     * @param array $filters
     * @return \Baselinker\Api\Response\Response
     */
    public function getInventoryProductsList(int $inventoryId, array $filters = []): Response;

    /**
     * @param int $inventoryId
     * @param int|null $page
     * @return \Baselinker\Api\Response\Response
     */
    public function getInventoryProductsStock(int $inventoryId, ?int $page = null): Response;

    /**
     * @param int $inventoryId
     * @param array $products
     * @return \Baselinker\Api\Response\Response
     */
    public function updateInventoryProductsStock(int $inventoryId, array $products = []): Response;

    /**
     * @param int $inventoryId
     * @param int|null $page
     * @return \Baselinker\Api\Response\Response
     */
    public function getInventoryProductsPrices(int $inventoryId, ?int $page = null): Response;

    /**
     * @param int $inventoryId
     * @param array $products
     * @return \Baselinker\Api\Response\Response
     */
    public function updateInventoryProductsPrices(int $inventoryId, array $products): Response;

    /**
     * @param int $productId
     * @param array $filters
     * @return \Baselinker\Api\Response\Response
     */
    public function getInventoryProductLogs(int $productId, array $filters = []): Response;
}
