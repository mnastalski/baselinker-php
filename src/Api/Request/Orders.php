<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Client;
use Baselinker\Api\Response\Response;

class Orders extends Client
{
    public function getJournalList(int $orderId, array $logsTypes, ?int $lastLogId = null): Response
    {
        return new Response(
            $this->post('getJournalList', [
                'last_log_id' => $lastLogId,
                'logs_types' => $logsTypes,
                'order_id' => $orderId,
            ])
        );
    }

    public function addOrder(array $data): Response
    {
        return new Response(
            $this->post('addOrder', $data)
        );
    }

    public function getOrderSources(): Response
    {
        return new Response(
            $this->post('getOrderSources')
        );
    }

    public function getOrderExtraFields(): Response
    {
        return new Response(
            $this->post('getOrderExtraFields')
        );
    }

    public function getOrders(array $data): Response
    {
        return new Response(
            $this->post('getOrders', $data)
        );
    }

    public function getOrderTransactionDetails(int $orderId): Response
    {
        return new Response(
            $this->post('getOrderTransactionDetails', [
                'order_id' => $orderId,
            ])
        );
    }

    public function getOrderTransactionData(int $orderId): Response
    {
        return new Response(
            $this->post('getOrderTransactionData', [
                'order_id' => $orderId,
            ])
        );
    }

    public function getOrdersByEmail(string $email): Response
    {
        return new Response(
            $this->post('getOrdersByEmail', [
                'email' => $email,
            ])
        );
    }

    public function getOrdersByPhone(string $phone): Response
    {
        return new Response(
            $this->post('getOrdersByPhone', [
                'phone' => $phone,
            ])
        );
    }

    public function addInvoice(int $orderId, int $seriesId, $vatRate = null): Response
    {
        return new Response(
            $this->post('addInvoice', [
                'order_id' => $orderId,
                'series_id' => $seriesId,
                'vat_rate' => $vatRate,
            ])
        );
    }

    public function getInvoices(array $data): Response
    {
        return new Response(
            $this->post('getInvoices', $data)
        );
    }

    public function getSeries(): Response
    {
        return new Response(
            $this->post('getSeries')
        );
    }

    public function getOrderStatusList(): Response
    {
        return new Response(
            $this->post('getOrderStatusList')
        );
    }

    public function getOrderPaymentsHistory(int $orderId, bool $showFullHistory = false): Response
    {
        return new Response(
            $this->post('getOrderPaymentsHistory', [
                'order_id' => $orderId,
                'show_full_history' => $showFullHistory,
            ])
        );
    }

    public function getOrderPickPackHistory(int $orderId, ?int $actionType = null): Response
    {
        return new Response(
            $this->post('getOrderPickPackHistory', [
                'order_id' => $orderId,
                'action_type' => $actionType,
            ])
        );
    }

    public function getNewReceipts(int $seriesId): Response
    {
        return new Response(
            $this->post('getNewReceipts', [
                'series_id' => $seriesId,
            ])
        );
    }

    public function getReceipt(array $data): Response
    {
        return new Response(
            $this->post('getReceipt', $data)
        );
    }

    public function setOrderFields(array $data): Response
    {
        return new Response(
            $this->post('setOrderFields', $data)
        );
    }

    public function addOrderProduct(array $data): Response
    {
        return new Response(
            $this->post('addOrderProduct', $data)
        );
    }

    public function setOrderProductFields(array $data): Response
    {
        return new Response(
            $this->post('setOrderProductFields', $data)
        );
    }

    public function deleteOrderProduct(int $orderId, int $orderProductId): Response
    {
        return new Response(
            $this->post('deleteOrderProduct', [
                'order_id' => $orderId,
                'order_product_id' => $orderProductId,
            ])
        );
    }

    public function setOrderPayment(int $orderId, float $paymentDone, ?int $paymentDate = null, ?string $paymentComment = null, ?string $externalPaymentId = null): Response
    {
        return new Response(
            $this->post('setOrderPayment', [
                'order_id' => $orderId,
                'payment_done' => $paymentDone,
                'payment_date' => $paymentDate,
                'payment_comment' => $paymentComment,
                'external_payment_id' => $externalPaymentId,
            ])
        );
    }

    public function setOrderStatus(int $orderId, int $statusId): Response
    {
        return new Response(
            $this->post('setOrderStatus', [
                'order_id' => $orderId,
                'status_id' => $statusId,
            ])
        );
    }

    public function setOrderStatuses(array $orderIds, int $statusId): Response
    {
        return new Response(
            $this->post('setOrderStatuses', [
                'order_ids' => $orderIds,
                'status_id' => $statusId,
            ])
        );
    }

    public function setOrderReceipt(int $receiptId, string $receiptNr, int $date, bool $printerError = false, ?string $printerName = null): Response
    {
        return new Response(
            $this->post('setOrderReceipt', [
                'order_id' => $receiptId,
                'receipt_nr' => $receiptNr,
                'date' => $date,
                'printer_error' => $printerError,
                'printer_name' => $printerName,
            ])
        );
    }

    public function addOrderInvoiceFile(int $invoiceId, string $file, string $externalInvoiceNumber): Response
    {
        return new Response(
            $this->post('addOrderInvoiceFile', [
                'invoice_id' => $invoiceId,
                'file' => $file,
                'external_invoice_number' => $externalInvoiceNumber,
            ])
        );
    }

    public function addOrderReceiptFile(int $receiptId, string $file, string $externalReceiptNumber): Response
    {
        return new Response(
            $this->post('addOrderInvoiceFile', [
                'receipt_id' => $receiptId,
                'file' => $file,
                'external_receipt_number' => $externalReceiptNumber,
            ])
        );
    }

    public function getInvoiceFile(int $invoiceId): Response
    {
        return new Response(
            $this->post('getInvoiceFile', [
                'invoice_id' => $invoiceId,
            ])
        );
    }

    public function runOrderMacroTrigger(int $orderId, int $triggerId): Response
    {
        return new Response(
            $this->post('runOrderMacroTrigger', [
                'order_id' => $orderId,
                'trigger_id' => $triggerId,
            ])
        );
    }
}
