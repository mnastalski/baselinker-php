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
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrders(array $data): Response;

    /**
     * @param int $orderId
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrderTransactionDetails(int $orderId): Response;

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
     * @return \Baselinker\Api\Response\Response
     */
    public function addInvoice(int $orderId, int $seriesId): Response;

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
     * @param int $paymentDate
     * @param string $paymentComment
     * @param string|null $externalPaymentId
     * @return \Baselinker\Api\Response\Response
     */
    public function setOrderPayment(int $orderId, float $paymentDone, int $paymentDate, string $paymentComment, ?string $externalPaymentId = null): Response;

    /**
     * @param int $orderId
     * @param int $statusId
     * @return \Baselinker\Api\Response\Response
     */
    public function setOrderStatus(int $orderId, int $statusId): Response;

    /**
     * @param int $receiptId
     * @param string $receiptNr
     * @param int $date
     * @param bool $printerError
     * @return \Baselinker\Api\Response\Response
     */
    public function setOrderReceipt(int $receiptId, string $receiptNr, int $date, bool $printerError = false): Response;

    /**
     * @param int $invoiceId
     * @param string $file
     * @param string $externalInvoiceNumber
     * @return \Baselinker\Api\Response\Response
     */
    public function addOrderInvoiceFile(int $invoiceId, string $file, string $externalInvoiceNumber): Response;
}
