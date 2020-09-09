<?php
declare(strict_types=1);

namespace SmsRu\Tests\Auth;

use PHPUnit\Framework\TestCase;
use SmsRu\Auth\ApiId;

class ApiIdTest extends TestCase
{
    const API_ID = "72c49468-dcea-464d-bfd0-c8adf28b46ee";

    public function testGetData(): void
    {
        $auth = new ApiId(self::API_ID);
        $getData = $auth->getData();
        $this->assertArrayHasKey('api_id', $getData);
        $this->assertEquals(self::API_ID, $getData["api_id"]);
    }
}
