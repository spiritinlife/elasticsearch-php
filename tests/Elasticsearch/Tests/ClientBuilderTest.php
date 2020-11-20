<?php

declare(strict_types = 1);

namespace Elasticsearch6\Tests;

use Elasticsearch6\ClientBuilder;
use Elasticsearch6\Common\Exceptions\InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class ClientBuilderTest extends TestCase
{

    public function testClientBuilderThrowsExceptionForIncorrectLoggerClass()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('$logger must implement \Psr\Log\LoggerInterface!');

        ClientBuilder::create()->setLogger(new \Elasticsearch6\Tests\ClientBuilder\DummyLogger());
    }

    public function testClientBuilderThrowsExceptionForIncorrectTracerClass()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('$tracer must implement \Psr\Log\LoggerInterface!');

        ClientBuilder::create()->setTracer(new \Elasticsearch6\Tests\ClientBuilder\DummyLogger());
    }
}
