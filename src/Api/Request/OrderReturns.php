<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Client;
use Baselinker\Api\Response\Response;
use Baselinker\Config;
use GuzzleHttp\ClientInterface;

class OrderReturns extends Client implements OrderReturnsInterface
{
 
    /**
     * @param \Baselinker\Config $config
     * @param \GuzzleHttp\ClientInterface|null $client
     */
    public function __construct(Config $config, ?ClientInterface $client = null)
    {
        parent::__construct($config, $client);
    }

    /**
     * @inheritDoc
     */
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

    /**
     * @inheritDoc
     */
    public function addOrderReturn(array $data): Response
    {
        return new Response(
            $this->post('addOrderReturn', $data)
        );
    }

    /**
     * @inheritDoc
     */
    public function getOrderReturnExtraFields(): Response
    {
        return new Response(
            $this->post('getOrderReturnExtraFields')
        );
    }

    /**
     * @inheritDoc
     */
    public function getOrderReturns(array $data): Response
    {
        return new Response(
            $this->post('getOrderReturns', $data)
        );
    }

    /**
     * @inheritDoc
     */
    public function getOrderReturnStatusList(): Response
    {
        return new Response(
            $this->post('getOrderReturnStatusList')
        );
    }

    /**
     * @inheritDoc
     */
    public function getOrderReturnPaymentsHistory(int $returnId, bool $showFullHistory = false): Response
    {
        return new Response(
            $this->post('getOrderReturnPaymentsHistory', [
                'return_id' => $returnId,
                'show_full_history' => $showFullHistory,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function setOrderReturnFields(int $returnId, array $data): Response
    {
        $data['return_id'] = $returnId;

        return new Response(
            $this->post('setOrderReturnFields', $data)
        );
    }

    /**
     * @inheritDoc
     */
    public function addOrderReturnProduct(int $returnId, array $data): Response
    {
        $data['return_id'] = $returnId;

        return new Response(
            $this->post('addOrderReturnProduct', $data)
        );
    }

    /**
     * @inheritDoc
     */
    public function setOrderReturnProductFields(int $returnId, int $orderReturnProductId, array $data): Response
    {
        $data['return_id'] = $returnId;
        $data['order_return_product_id'] = $orderReturnProductId;

        return new Response(
            $this->post('setOrderReturnProductFields', $data)
        );
    }

    /**
     * @inheritDoc
     */
    public function deleteOrderReturnProduct(int $returnId, int $orderReturnProductId): Response
    {
        return new Response(
            $this->post('deleteOrderReturnProduct', [
                'return_id' => $returnId,
                'order_return_product_id' => $orderReturnProductId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
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

    /**
     * @inheritDoc
     */
    public function getOrderReturnReasonsList(): Response
    {
        return new Response(
            $this->post('getOrderReturnReasonsList')
        );
    }

    /**
     * @inheritDoc
     */
    public function setOrderReturnStatus(int $returnId, int $statusId): Response
    {
        return new Response(
            $this->post('setOrderReturnStatus', [
                'return_id' => $returnId,
                'status_id' => $statusId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function setOrderReturnStatuses(array $returnIds, int $statusId): Response
    {
        return new Response(
            $this->post('setOrderReturnStatuses', [
                'return_ids' => $returnIds,
                'status_id' => $statusId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function runOrderReturnMacroTrigger(int $returnId, int $triggerId): Response
    {
        return new Response(
            $this->post('runOrderReturnMacroTrigger', [
                'return_id' => $returnId,
                'trigger_id' => $triggerId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getOrderReturnProductStatuses(): Response
    {
        return new Response(
            $this->post('getOrderReturnProductStatuses')
        );
    }
}
