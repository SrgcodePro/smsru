<?php

declare(strict_types=1);

namespace SmsRu\Auth;

interface AuthInterface
{
    /**
     * @return string[]
     */
    public function getData(): array;
}
