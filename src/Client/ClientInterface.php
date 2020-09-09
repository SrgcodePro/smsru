<?php

declare(strict_types=1);

namespace SmsRu\Client;

interface ClientInterface
{
    /**
     * @param string $method
     * @param array<string,int> $queryParams
     * @return mixed
     */
    public function call(string $method, array $queryParams = []);
}
