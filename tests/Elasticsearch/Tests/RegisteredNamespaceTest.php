<?php

declare(strict_types = 1);

namespace Elasticsearch6\Tests;

use Elasticsearch;
use Elasticsearch6\ClientBuilder;
use Elasticsearch6\Serializers\SerializerInterface;
use Elasticsearch6\Transport;
use Mockery as m;

/**
 * Class RegisteredNamespaceTest
 *
 * @category   Tests
 * @package    Elasticsearch
 * @subpackage Tests
 * @author     Zachary Tong <zachary.tong@elasticsearch.com>
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link       http://elasticsearch.org
 */
class RegisteredNamespaceTest extends \PHPUnit\Framework\TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function testRegisteringNamespace()
    {
        $builder = new FooNamespaceBuilder();
        $client = ClientBuilder::create()->registerNamespace($builder)->build();
        $this->assertSame("123", $client->foo()->fooMethod());
    }

    public function testNonExistingNamespace()
    {
        $builder = new FooNamespaceBuilder();
        $client = ClientBuilder::create()->registerNamespace($builder)->build();

        $this->expectException(\Elasticsearch6\Common\Exceptions\BadMethodCallException::class);
        $this->expectExceptionMessage('Namespace [bar] not found');

        $client->bar()->fooMethod();
    }
}

// @codingStandardsIgnoreStart "Each class must be in a file by itself" - not worth the extra work here
class FooNamespaceBuilder implements Elasticsearch6\Namespaces\NamespaceBuilderInterface
{
    public function getName()
    {
        return "foo";
    }

    public function getObject(Transport $transport, SerializerInterface $serializer)
    {
        return new FooNamespace();
    }
}

class FooNamespace
{
    public function fooMethod()
    {
        return "123";
    }
}
// @codingStandardsIgnoreEnd
