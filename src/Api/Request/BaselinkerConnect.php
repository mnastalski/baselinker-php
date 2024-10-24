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

    public function getConnectIntegrationContractors(int $connectIntegrationId): Response
    {
        return new Response(
            $this->post('getConnectIntegrationContractors', [
                'connect_integration_id' => $connectIntegrationId,
            ])
        );
    }

    public function getConnectContractorCreditHistory(int $connectContractorId): Response
    {
        return new Response(
            $this->post('getConnectContractorCreditHistory', [
                'connect_contractor_id' => $connectContractorId,
            ])
        );
    }

    public function addConnectContractorCredit(int $connectContractorId, float $amount, string $message): Response
    {
        return new Response(
            $this->post('addConnectContractorCredit', [
                'connect_contractor_id' => $connectContractorId,
                'amount' => $amount,
                'message' => $message,
            ])
        );
    }
}
