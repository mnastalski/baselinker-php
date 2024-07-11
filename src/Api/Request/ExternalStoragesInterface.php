<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Response\Response;

interface ExternalStoragesInterface
{
    /**
     * @return \Baselinker\Api\Response\Response
     */
    public function getExternalStoragesList(): Response;

    /**
     * @param string $storageId
     * @return \Baselinker\Api\Response\Response
     */
    public function getExternalStorageCategories(string $storageId): Response;

    /**
     * @param string $storageId
     * @param array $products
     * @return \Baselinker\Api\Response\Response
     */
    public function getExternalStorageProductsData(string $storageId, array $products): Response;

    /**
     * @param string $storageId
     * @param array $filters
     * @return \Baselinker\Api\Response\Response
     */
    public function getExternalStorageProductsList(string $storageId, array $filters = [], ?int $page = null): Response;

    /**
     * @param string $storageId
     * @param int|null $page
     * @return \Baselinker\Api\Response\Response
     */
    public function getExternalStorageProductsQuantity(string $storageId, ?int $page = null): Response;

    /**
     * @param string $storageId
     * @param int|null $page
     * @return \Baselinker\Api\Response\Response
     */
    public function getExternalStorageProductsPrices(string $storageId, ?int $page = null): Response;

    /**
     * @param string $storageId
     * @param array $products
     * @return \Baselinker\Api\Response\Response
     */
    public function updateExternalStorageProductsQuantity(string $storageId, array $products): Response;
}
