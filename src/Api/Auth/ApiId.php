<?php

declare(strict_types=1);

namespace SmsRu\Api\Auth;

class ApiId implements AuthInterface
{
    /**
     * @var string
     */
    protected $apiId;

    /**
     * ApiId constructor.
     * @param string $apiId
     */
    public function __construct(string $apiId)
    {
        $this->apiId = $apiId;
    }

    /**
     * @return string[]
     */
    public function getData(): array
    {
        return [
            "api_id" => $this->apiId
        ];
    }
}
