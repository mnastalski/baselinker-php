<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Client;
use Baselinker\Api\Response\Response;

class CourierShipments extends Client
{
    public function createPackage(int $orderId, string $courierCode, array $fields, array $packages, ?int $accountId = null): Response
    {
        return new Response(
            $this->post('createPackage', [
                'order_id' => $orderId,
                'courier_code' => $courierCode,
                'fields' => $fields,
                'packages' => $packages,
                'account_id' => $accountId,
            ])
        );
    }

    public function createPackageManual(int $orderId, string $courierCode, string $packageNumber, int $pickupDate, bool $returnShipment = false): Response
    {
        return new Response(
            $this->post('createPackageManual', [
                'order_id' => $orderId,
                'courier_code' => $courierCode,
                'package_number' => $packageNumber,
                'pickup_date' => $pickupDate,
                'return_shipment' => $returnShipment,
            ])
        );
    }

    public function getCouriersList(): Response
    {
        return new Response(
            $this->post('getCouriersList')
        );
    }

    public function getCourierFields(string $courierCode): Response
    {
        return new Response(
            $this->post('getCourierFields', [
                'courier_code' => $courierCode,
            ])
        );
    }

    public function getCourierServices(string $courierCode, string $packageNumber, array $fields, array $packages, ?int $accountId = null): Response
    {
        return new Response(
            $this->post('getCourierServices', [
                'courier_code' => $courierCode,
                'package_number' => $packageNumber,
                'fields' => $fields,
                'packages' => $packages,
                'account_id' => $accountId,
            ])
        );
    }

    public function getCourierAccounts(string $courierCode): Response
    {
        return new Response(
            $this->post('getCourierAccounts', [
                'courier_code' => $courierCode,
            ])
        );
    }

    public function getLabel(string $courierCode, array $data): Response
    {
        $data['courier_code'] = $courierCode;

        return new Response(
            $this->post('getLabel', $data)
        );
    }

    public function getProtocol(string $courierCode, array $data, int $accountId): Response
    {
        $data['courier_code'] = $courierCode;
        $data['account_id'] = $accountId;

        return new Response(
            $this->post('getProtocol', $data)
        );
    }

    public function getOrderPackages(int $orderId): Response
    {
        return new Response(
            $this->post('getOrderPackages', [
                'order_id' => $orderId,
            ])
        );
    }

    public function getCourierPackagesStatusHistory(array $packageIds): Response
    {
        return new Response(
            $this->post('getCourierPackagesStatusHistory', [
                'package_ids' => $packageIds,
            ])
        );
    }

    public function deleteCourierPackage(string $courierCode, array $data, bool $forceDelete = false): Response
    {
        $data['courier_code'] = $courierCode;
        $data['force_delete'] = $forceDelete;

        return new Response(
            $this->post('deleteCourierPackage', $data)
        );
    }

    public function requestParcelPickup(string $courierCode, array $data, int $accountId, array $fields = []): Response
    {
        $data['courier_code'] = $courierCode;
        $data['account_id'] = $accountId;
        $data['fields'] = $fields;

        return new Response(
            $this->post('requestParcelPickup', $data)
        );
    }

    public function getRequestParcelPickupFields(string $courierCode): Response
    {
        return new Response(
            $this->post('getRequestParcelPickupFields', [
                'courier_code' => $courierCode,
            ])
        );
    }
}
