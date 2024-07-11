<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Client;
use Baselinker\Api\Response\Response;

class Orders extends Client implements OrdersInterface
{
    /**
     * @inheritDoc
     */
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

    /**
     * @inheritDoc
     */
    public function addOrder(array $data): Response
    {
        return new Response(
            $this->post('addOrder', $data)
        );
    }

    /**
     * @inheritDoc
     */
    public function getOrderSources(): Response
    {
        return new Response(
            $this->post('getOrderSources')
        );
    }

    /**
     * @inheritDoc
     */
    public function getOrders(array $data): Response
    {
        return new Response(
            $this->post('getOrders', $data)
        );
    }

    /**
     * @inheritDoc
     */
    public function getOrderTransactionDetails(int $orderId): Response
    {
        return new Response(
            $this->post('getOrderTransactionDetails', [
                'order_id' => $orderId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getOrderTransactionData(int $orderId): Response
    {
        return new Response(
            $this->post('getOrderTransactionData', [
                'order_id' => $orderId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getOrdersByEmail(string $email): Response
    {
        return new Response(
            $this->post('getOrdersByEmail', [
                'email' => $email,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getOrdersByPhone(string $phone): Response
    {
        return new Response(
            $this->post('getOrdersByPhone', [
                'phone' => $phone,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function addInvoice(int $orderId, int $seriesId): Response
    {
        return new Response(
            $this->post('addInvoice', [
                'order_id' => $orderId,
                'series_id' => $seriesId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getInvoices(array $data): Response
    {
        return new Response(
            $this->post('getInvoices', $data)
        );
    }

    /**
     * @inheritDoc
     */
    public function getSeries(): Response
    {
        return new Response(
            $this->post('getSeries')
        );
    }

    /**
     * @inheritDoc
     */
    public function getOrderStatusList(): Response
    {
        return new Response(
            $this->post('getOrderStatusList')
        );
    }

    /**
     * @inheritDoc
     */
    public function getOrderPaymentsHistory(int $orderId, bool $showFullHistory = false): Response
    {
        return new Response(
            $this->post('getOrderPaymentsHistory', [
                'order_id' => $orderId,
                'show_full_history' => $showFullHistory,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getOrderPickPackHistory(int $orderId, ?int $actionType = null): Response
    {
        return new Response(
            $this->post('getOrderPickPackHistory', [
                'order_id' => $orderId,
                'action_type' => $actionType,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getNewReceipts(int $seriesId): Response
    {
        return new Response(
            $this->post('getNewReceipts', [
                'series_id' => $seriesId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getReceipt(array $data): Response
    {
        return new Response(
            $this->post('getReceipt', $data)
        );
    }

    /**
     * @inheritDoc
     */
    public function setOrderFields(array $data): Response
    {
        return new Response(
            $this->post('setOrderFields', $data)
        );
    }

    /**
     * @inheritDoc
     */
    public function addOrderProduct(array $data): Response
    {
        return new Response(
            $this->post('addOrderProduct', $data)
        );
    }

    /**
     * @inheritDoc
     */
    public function setOrderProductFields(array $data): Response
    {
        return new Response(
            $this->post('setOrderProductFields', $data)
        );
    }

    /**
     * @inheritDoc
     */
    public function deleteOrderProduct(int $orderId, int $orderProductId): Response
    {
        return new Response(
            $this->post('deleteOrderProduct', [
                'order_id' => $orderId,
                'order_product_id' => $orderProductId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
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

    /**
     * @inheritDoc
     */
    public function setOrderStatus(int $orderId, int $statusId): Response
    {
        return new Response(
            $this->post('setOrderStatus', [
                'order_id' => $orderId,
                'status_id' => $statusId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function setOrderReceipt(int $receiptId, string $receiptNr, int $date, bool $printerError = false): Response
    {
        return new Response(
            $this->post('setOrderReceipt', [
                'order_id' => $receiptId,
                'receipt_nr' => $receiptNr,
                'date' => $date,
                'printer_error' => $printerError,
            ])
        );
    }

    /**
     * @inheritDoc
     */
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

    /**
     * @inheritDoc
     */
    public function getInvoiceFile(int $invoiceId): Response
    {
        return new Response(
            $this->post('getInvoiceFile', [
                'invoice_id' => $invoiceId,
            ])
        );
    }
}
