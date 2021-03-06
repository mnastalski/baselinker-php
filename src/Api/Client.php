<?php

namespace Baselinker\Api;

use Baselinker\Config;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;

class Client
{
    /**
     * @var string
     */
    public const URL_LIVE = 'https://api.baselinker.com/';

    /**
     * @var \Baselinker\Config
     */
    private $config;

    /**
     * @var \GuzzleHttp\ClientInterface
     */
    private $client;

    /**
     * @param \Baselinker\Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @param string $function
     * @param array $parameters
     * @return \Psr\Http\Message\ResponseInterface
     */
    protected function post(string $function, array $parameters = []): ResponseInterface
    {
        return $this->client()->post('connector.php', [
            'form_params' => [
                'token' => $this->config->getToken(),
                'method' => $function,
                'parameters' => json_encode($parameters),
            ],
        ]);
    }

    /**
     * @return \GuzzleHttp\ClientInterface
     */
    protected function client(): ClientInterface
    {
        if (!$this->client) {
            $this->client = new GuzzleClient([
                'base_uri' => $this->getApiUrl(),
            ]);
        }

        return $this->client;
    }

    /**
     * @return string
     */
    private function getApiUrl(): string
    {
        return self::URL_LIVE;
    }
}
