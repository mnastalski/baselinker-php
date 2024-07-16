<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Response\Response;

interface BaselinkerConnectInterface
{
    /**
     * @return \Baselinker\Api\Response\Response
     */
    public function getConnectIntegrations(): Response;

    /**
     * @param int $tokenId
     * @return \Baselinker\Api\Response\Response
     */
    public function getConnectIntegrationContractors(int $tokenId): Response;

    /**
     * @param int $contractorId
     * @return \Baselinker\Api\Response\Response
     */
    public function getConnectContractorCreditHistory(int $contractorId): Response;

    /**
     * @param int $contractorId
     * @param float $amount
     * @param string $message
     * @return \Baselinker\Api\Response\Response
     */
    public function addConnectContractorCredit(int $contractorId, float $amount, string $message): Response;
}
