<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Client;
use Baselinker\Api\Response\Response;

class OrderReturns extends Client
{
    public function getOrderReturnJournalList(int $lastLogId, array $logsTypes, ?int $returnId = null): Response
    {
        return new Response(
            $this->post('getOrderReturnJournalList', [
                'last_log_id' => $lastLogId,
                'logs_types' => $logsTypes,
                'return_id' => $returnId,
            ])
        );
    }

    public function addOrderReturn(array $data): Response
    {
        return new Response(
            $this->post('addOrderReturn', $data)
        );
    }

    public function getOrderReturnExtraFields(): Response
    {
        return new Response(
            $this->post('getOrderReturnExtraFields')
        );
    }

    public function getOrderReturns(array $data): Response
    {
        return new Response(
            $this->post('getOrderReturns', $data)
        );
    }

    public function getOrderReturnStatusList(): Response
    {
        return new Response(
            $this->post('getOrderReturnStatusList')
        );
    }

    public function getOrderReturnPaymentsHistory(int $returnId, bool $showFullHistory = false): Response
    {
        return new Response(
            $this->post('getOrderReturnPaymentsHistory', [
                'return_id' => $returnId,
                'show_full_history' => $showFullHistory,
            ])
        );
    }

    public function setOrderReturnFields(int $returnId, array $data): Response
    {
        $data['return_id'] = $returnId;

        return new Response(
            $this->post('setOrderReturnFields', $data)
        );
    }

    public function addOrderReturnProduct(int $returnId, array $data): Response
    {
        $data['return_id'] = $returnId;

        return new Response(
            $this->post('addOrderReturnProduct', $data)
        );
    }

    public function setOrderReturnProductFields(int $returnId, int $orderReturnProductId, array $data): Response
    {
        $data['return_id'] = $returnId;
        $data['order_return_product_id'] = $orderReturnProductId;

        return new Response(
            $this->post('setOrderReturnProductFields', $data)
        );
    }

    public function deleteOrderReturnProduct(int $returnId, int $orderReturnProductId): Response
    {
        return new Response(
            $this->post('deleteOrderReturnProduct', [
                'return_id' => $returnId,
                'order_return_product_id' => $orderReturnProductId,
            ])
        );
    }

    public function setOrderReturnRefund(int $returnId, float $orderRefundDone, int $refundDate, string $refundComment, ?string $externalRefundId = null): Response
    {
        return new Response(
            $this->post('setOrderReturnRefund', [
                'return_id' => $returnId,
                'order_refund_done' => $orderRefundDone,
                'refund_date' => $refundDate,
                'refund_comment' => $refundComment,
                'external_refund_id' => $externalRefundId,
            ])
        );
    }

    public function getOrderReturnReasonsList(): Response
    {
        return new Response(
            $this->post('getOrderReturnReasonsList')
        );
    }

    public function setOrderReturnStatus(int $returnId, int $statusId): Response
    {
        return new Response(
            $this->post('setOrderReturnStatus', [
                'return_id' => $returnId,
                'status_id' => $statusId,
            ])
        );
    }

    public function setOrderReturnStatuses(array $returnIds, int $statusId): Response
    {
        return new Response(
            $this->post('setOrderReturnStatuses', [
                'return_ids' => $returnIds,
                'status_id' => $statusId,
            ])
        );
    }

    public function runOrderReturnMacroTrigger(int $returnId, int $triggerId): Response
    {
        return new Response(
            $this->post('runOrderReturnMacroTrigger', [
                'return_id' => $returnId,
                'trigger_id' => $triggerId,
            ])
        );
    }

    public function getOrderReturnProductStatuses(): Response
    {
        return new Response(
            $this->post('getOrderReturnProductStatuses')
        );
    }
}
