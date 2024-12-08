<?php

namespace Baselinker\Api;

use Baselinker\Config;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;

class Client
{
    public const URL_LIVE = 'https://api.baselinker.com/';

    private ?ClientInterface $client = null;

    public function __construct(
        private readonly Config $config,
    ) {}

    protected function post(string $function, array $parameters = []): ResponseInterface
    {
        return $this->client()->post('connector.php', [
            RequestOptions::HEADERS => [
                'X-BLToken' => $this->config->token(),
            ],
            RequestOptions::FORM_PARAMS => [
                'method' => $function,
                'parameters' => json_encode($parameters),
            ],
        ]);
    }

    protected function client(): ClientInterface
    {
        if ($this->client) {
            return $this->client;
        }

        return $this->client = new GuzzleClient([
            'base_uri' => $this->getApiUrl(),
            RequestOptions::CONNECT_TIMEOUT => 10,
            RequestOptions::TIMEOUT => 30,
        ]);
    }

    private function getApiUrl(): string
    {
        return self::URL_LIVE;
    }
}
