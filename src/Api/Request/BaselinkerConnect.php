<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Client;
use Baselinker\Api\Response\Response;

class BaselinkerConnect extends Client
{
    public function getConnectIntegrations(): Response
    {
        return new Response(
            $this->post('getConnectIntegrations')
        );
    }

    public function getConnectIntegrationContractors(int $tokenId): Response
    {
        return new Response(
            $this->post('getConnectIntegrationContractors', [
                'token_id' => $tokenId,
            ])
        );
    }

    public function getConnectContractorCreditHistory(int $contractorId): Response
    {
        return new Response(
            $this->post('getConnectContractorCreditHistory', [
                'contractor_id' => $contractorId,
            ])
        );
    }

    public function addConnectContractorCredit(int $contractorId, float $amount, string $message): Response
    {
        return new Response(
            $this->post('addConnectContractorCredit', [
                'contractor_id' => $contractorId,
                'amount' => $amount,
                'message' => $message,
            ])
        );
    }
}
