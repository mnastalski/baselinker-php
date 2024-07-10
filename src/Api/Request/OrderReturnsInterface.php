<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Response\Response;

interface OrderReturnsInterface
{
    /**
     * @param int $lastLogId
     * @param array|int[] $logsTypes
     * @param int|null $returnId
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrderReturnJournalList(int $lastLogId, array $logsTypes, ?int $returnId = null): Response;

    /**
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function addOrderReturn(array $data): Response;

    /**
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrderReturnExtraFields(): Response;

    /**
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrderReturns(array $data): Response;

    /**
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrderReturnStatusList(): Response;

    /**
     * @param int $returnId
     * @param bool $showFullHistory
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrderReturnPaymentsHistory(int $returnId, bool $showFullHistory = false): Response;

    /**
     * @param int $returnId
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function setOrderReturnFields(int $returnId, array $data): Response;

    /**
     * @param int $returnId
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function addOrderReturnProduct(int $returnId, array $data): Response;

    /**
     * @param int $returnId
     * @param int $orderReturnProductId
     * @param array $data
     * @return \Baselinker\Api\Response\Response
     */
    public function setOrderReturnProductFields(int $returnId, int $orderReturnProductId, array $data): Response;

    /**
     * @param int $returnId
     * @param int $orderReturnProductId
     * @return \Baselinker\Api\Response\Response
     */
    public function deleteOrderReturnProduct(int $returnId, int $orderReturnProductId): Response;

    /**
     * @param int $returnId
     * @param float $orderRefundDone
     * @param int $refundDate
     * @param string $refundComment
     * @param string|null $externalRefundId
     * @return \Baselinker\Api\Response\Response
     */
    public function setOrderReturnRefund(int $returnId, float $orderRefundDone, int $refundDate, string $refundComment,  ?string $externalRefundId = null): Response;

    /**
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrderReturnReasonsList(): Response;

    /**
     * @param int $returnId
     * @param int $statusId
     * @return \Baselinker\Api\Response\Response
     */
    public function setOrderReturnStatus(int $returnId, int $statusId): Response;

    /**
     * @param array|int[] $returnIds
     * @param int $statusId
     * @return \Baselinker\Api\Response\Response
     */
    public function setOrderReturnStatuses(array $returnIds, int $statusId): Response;

    /**
     * @param int $returnId
     * @param int $triggerId
     * @return \Baselinker\Api\Response\Response
     */
    public function runOrderReturnMacroTrigger(int $returnId, int $triggerId): Response;

    /**
     * @return \Baselinker\Api\Response\Response
     */
    public function getOrderReturnProductStatuses(): Response;
}
