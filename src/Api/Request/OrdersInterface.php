<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Response\Response;

interface OrdersInterface
{
    /**
     * @param int $orderId
     * @param array $logsTypes
     * @param int|null $lastLogId
     * @return \Baselinker\Api\Response\Response
     */
    public function getJournalList(int $orderId, array $logsTypes, ?int $lastLogId = null): Response;

    /**
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function addOrder(array $data): Response;

    /**
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrderSources(): Response;

    /**
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrderExtraFields(): Response;

    /**
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrders(array $data): Response;

    /**
     * @deprecated 0.6.0
     * @use \Baselinker\Api\Request\OrdersInterface::getOrderTransactionData
     *
     * @param int $orderId
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrderTransactionDetails(int $orderId): Response;

    /**
     * @param int $orderId
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrderTransactionData(int $orderId): Response;

    /**
     * @param string $email
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrdersByEmail(string $email): Response;

    /**
     * @param string $phone
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrdersByPhone(string $phone): Response;

    /**
     * @param int $orderId
     * @param int $seriesId
     * @param string|int|float|null $vatRate
     * @return \Baselinker\Api\Response\Response
     */
    public function addInvoice(int $orderId, int $seriesId, $vatRate = null): Response;

    /**
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function getInvoices(array $data): Response;

    /**
     * @return \Baselinker\Api\Response\Response
     */
    public function getSeries(): Response;

    /**
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrderStatusList(): Response;

    /**
     * @param int $orderId
     * @param bool $showFullHistory
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrderPaymentsHistory(int $orderId, bool $showFullHistory = false): Response;

    /**
     * @param int $orderId
     * @param int|null $actionType
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrderPickPackHistory(int $orderId, ?int $actionType = null): Response;

    /**
     * @param int $seriesId
     * @return \Baselinker\Api\Response\Response
     */
    public function getNewReceipts(int $seriesId): Response;

    /**
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function getReceipt(array $data): Response;

    /**
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function setOrderFields(array $data): Response;

    /**
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function addOrderProduct(array $data): Response;

    /**
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function setOrderProductFields(array $data): Response;

    /**
     * @param int $orderId
     * @param int $orderProductId
     * @return \Baselinker\Api\Response\Response
     */
    public function deleteOrderProduct(int $orderId, int $orderProductId): Response;

    /**
     * @param int $orderId
     * @param float $paymentDone
     * @param int|null $paymentDate
     * @param string|null $paymentComment
     * @param string|null $externalPaymentId
     * @return \Baselinker\Api\Response\Response
     */
    public function setOrderPayment(int $orderId, float $paymentDone, ?int $paymentDate = null, ?string $paymentComment = null, ?string $externalPaymentId = null): Response;

    /**
     * @param int $orderId
     * @param int $statusId
     * @return \Baselinker\Api\Response\Response
     */
    public function setOrderStatus(int $orderId, int $statusId): Response;

    /**
     * @param array|int[] $orderIds
     * @param int $statusId
     * @return \Baselinker\Api\Response\Response
     */
    public function setOrderStatuses(array $orderIds, int $statusId): Response;

    /**
     * @param int $receiptId
     * @param string $receiptNr
     * @param int $date
     * @param bool $printerError
     * @param string|null $printerName
     * @return \Baselinker\Api\Response\Response
     */
    public function setOrderReceipt(int $receiptId, string $receiptNr, int $date, bool $printerError = false, ?string $printerName = null): Response;

    /**
     * @param int $invoiceId
     * @param string $file
     * @param string $externalInvoiceNumber
     * @return \Baselinker\Api\Response\Response
     */
    public function addOrderInvoiceFile(int $invoiceId, string $file, string $externalInvoiceNumber): Response;

    /**
     * @param int $invoiceId
     * @return \Baselinker\Api\Response\Response
     */
    public function getInvoiceFile(int $invoiceId): Response;
}
