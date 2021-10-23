<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Response\Response;

interface CourierShipmentsInterface
{
    /**
     * @param int $orderId
     * @param string $courierCode
     * @param array $fields
     * @param array $packages
     * @param int|null $accountId
     * @return \Baselinker\Api\Response\Response
     */
    public function createPackage(int $orderId, string $courierCode, array $fields, array $packages, ?int $accountId = null): Response;

    /**
     * @param int $orderId
     * @param string $courierCode
     * @param string $packageNumber
     * @param int $pickupDate
     * @return \Baselinker\Api\Response\Response
     */
    public function createPackageManual(int $orderId, string $courierCode, string $packageNumber, int $pickupDate): Response;

    /**
     * @return \Baselinker\Api\Response\Response
     */
    public function getCouriersList(): Response;

    /**
     * @param string $courierCode
     * @return \Baselinker\Api\Response\Response
     */
    public function getCourierFields(string $courierCode): Response;

    /**
     * @param string $courierCode
     * @param string $packageNumber
     * @param array $fields
     * @param array $packages
     * @param int|null $accountId
     * @return \Baselinker\Api\Response\Response
     */
    public function getCourierServices(string $courierCode, string $packageNumber, array $fields, array $packages, ?int $accountId = null): Response;

    /**
     * @param string $courierCode
     * @return \Baselinker\Api\Response\Response
     */
    public function getCourierAccounts(string $courierCode): Response;

    /**
     * @param string $courierCode
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function getLabel(string $courierCode, array $data): Response;

    /**
     * @param int $orderId
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrderPackages(int $orderId): Response;

    /**
     * @param array $packageIds
     * @return \Baselinker\Api\Response\Response
     */
    public function getCourierPackagesStatusHistory(array $packageIds): Response;

    /**
     * @param string $courierCode
     * @param array $data
     * @param bool $forceDelete
     * @return \Baselinker\Api\Response\Response
     */
    public function deleteCourierPackage(string $courierCode, array $data, bool $forceDelete = false): Response;
}
