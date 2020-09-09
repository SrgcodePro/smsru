<?php

declare(strict_types=1);

namespace SmsRu;

use SmsRu\Api\ApiInterface;
use SmsRu\Auth\AuthInterface;
use SmsRu\Client\Client;
use SmsRu\Client\ClientInterface;

class Component
{
    /**
     * @var AuthInterface
     */
    protected $auth;

    /**
     * @var ClientInterface
     */
    protected $client;

    public function __construct(AuthInterface $auth, ClientInterface $client = null)
    {
        $this->auth = $auth;
        $this->client = $client;
        if (!$this->client) {
            $this->client = new Client();
        }
    }

    /**
     * @param ApiInterface $api
     */
    public function call(ApiInterface $api): void
    {
    }
}
