<?php

declare(strict_types=1);

namespace SmsRu\Client;

class Client implements ClientInterface
{
    /**
     * @var string
     */
    private $baseUrl = "https://sms.ru/";
    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    /**
     * Client constructor.
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->client = new \GuzzleHttp\Client($config);
    }

    /**
     * @param string $method
     * @param array $queryParams
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function call(string $method, array $queryParams = [])
    {
        $response = $this->client->get($this->baseUrl.$method, ['query'=>$queryParams]);
        return $response;
    }
}
