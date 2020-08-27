<?php

declare(strict_types=1);

namespace SmsRu\Api\Auth;

interface AuthInterface
{
    /**
     * @return string[]
     */
    public function getData(): array;
}
