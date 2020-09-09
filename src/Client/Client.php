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
     * @param array<string> $config
     */
    public function __construct(array $config = [])
    {
        $this->client = new \GuzzleHttp\Client($config);
    }

    /**
     * @param string $method
     * @param array<string,int> $queryParams
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function call(string $method, array $queryParams = [])
    {
        $response = $this->client->get($this->getUrl($method), ['query'=>$queryParams]);
        return $response;
    }

    /**
     * @param string $method
     * @return string
     */
    public function getUrl(string $method): string
    {
        return $this->baseUrl . $method;
    }
}
