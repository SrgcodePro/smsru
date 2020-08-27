<?php

declare(strict_types=1);

namespace SmsRu\Api\Auth;

class LoginPassword implements AuthInterface
{
    /**
     * @var string
     */
    protected $login;

    /**
     * @var string
     */
    protected $password;

    /**
     * LoginPassword constructor.
     * @param string $login
     * @param string $password
     */
    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @return string[]
     */
    public function getData(): array
    {
        return [
            "login" => $this->login,
            "password" => $this->password
        ];
    }
}
