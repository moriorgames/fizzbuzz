<?php

use App\Dummy;
use PHPUnit\Framework\TestCase;

class DummyTest extends TestCase
{
    public function test_cool()
    {
        $service = new Dummy;

        $result = $service->getTrue();

        $this->assertTrue($result);
    }
}
