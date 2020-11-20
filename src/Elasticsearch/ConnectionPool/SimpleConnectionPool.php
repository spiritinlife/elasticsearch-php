<?php

declare(strict_types = 1);

namespace Elasticsearch6\ConnectionPool;

use Elasticsearch6\ConnectionPool\Selectors\SelectorInterface;
use Elasticsearch6\Connections\Connection;
use Elasticsearch6\Connections\ConnectionFactoryInterface;

class SimpleConnectionPool extends AbstractConnectionPool implements ConnectionPoolInterface
{

    /**
     * {@inheritdoc}
     */
    public function __construct($connections, SelectorInterface $selector, ConnectionFactoryInterface $factory, $connectionPoolParams)
    {
        parent::__construct($connections, $selector, $factory, $connectionPoolParams);
    }

    /**
     * @param bool $force
     *
     * @return Connection
     * @throws \Elasticsearch6\Common\Exceptions\NoNodesAvailableException
     */
    public function nextConnection($force = false)
    {
        return $this->selector->select($this->connections);
    }

    public function scheduleCheck()
    {
    }
}
