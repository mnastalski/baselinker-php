<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Client;
use Baselinker\Api\Response\Response;
use Baselinker\Config;
use GuzzleHttp\ClientInterface;

class BaselinkerConnect extends Client implements BaselinkerConnectInterface
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
    public function getConnectIntegrations(): Response
    {
        return new Response(
            $this->post('getConnectIntegrations')
        );
    }

    /**
     * @inheritDoc
     */
    public function getConnectIntegrationContractors(int $tokenId): Response
    {
        return new Response(
            $this->post('getConnectIntegrationContractors', [
                'token_id' => $tokenId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
    public function getConnectContractorCreditHistory(int $contractorId): Response
    {
        return new Response(
            $this->post('getConnectContractorCreditHistory', [
                'contractor_id' => $contractorId,
            ])
        );
    }

    /**
     * @inheritDoc
     */
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
