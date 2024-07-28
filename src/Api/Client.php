<?php

namespace Baselinker\Api;

use Baselinker\Config;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\RequestOptions;
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
     * @param \GuzzleHttp\ClientInterface|null $client
     */
    public function __construct(Config $config, ?ClientInterface $client = null)
    {
        $this->config = $config;
        $this->client = $client ?: new GuzzleClient([
            'base_uri' => $this->getApiUrl(),
            RequestOptions::CONNECT_TIMEOUT => 10,
            RequestOptions::TIMEOUT => 30,
        ]);
    }

    /**
     * @param string $function
     * @param array $parameters
     * @return \Psr\Http\Message\ResponseInterface
     */
    protected function post(string $function, array $parameters = []): ResponseInterface
    {
        return $this->client->post('connector.php', [
            RequestOptions::HEADERS => [
                'X-BLToken' => $this->config->getToken(),
            ],
            RequestOptions::FORM_PARAMS => [
                'method' => $function,
                'parameters' => json_encode($parameters),
            ],
        ]);
    }

    /**
     * @return string
     */
    private function getApiUrl(): string
    {
        return self::URL_LIVE;
    }
}
