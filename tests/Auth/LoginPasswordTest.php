<?php

declare(strict_types=1);

namespace SmsRu\Tests\Auth;

use PHPUnit\Framework\TestCase;
use SmsRu\Auth\LoginPassword;

class LoginPasswordTest extends TestCase
{
    const LOGIN = "test";
    const PASSWORD = "password";

    public function testGetData(): void
    {
        $auth = new LoginPassword(self::LOGIN, self::PASSWORD);
        $getData = $auth->getData();
        $this->assertArrayHasKey('login', $getData);
        $this->assertArrayHasKey('password', $getData);
        $this->assertEquals(self::LOGIN, $getData["login"]);
        $this->assertEquals(self::PASSWORD, $getData["password"]);
    }
}
