<?php

declare(strict_types = 1);

namespace Elasticsearch6\ConnectionPool;

use Elasticsearch6\Common\Exceptions\NoNodesAvailableException;
use Elasticsearch6\ConnectionPool\Selectors\SelectorInterface;
use Elasticsearch6\Connections\Connection;
use Elasticsearch6\Connections\ConnectionFactoryInterface;

class StaticNoPingConnectionPool extends AbstractConnectionPool implements ConnectionPoolInterface
{
    /**
     * @var int
     */
    private $pingTimeout    = 60;

    /**
     * @var int
     */
    private $maxPingTimeout = 3600;

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
        $total = count($this->connections);
        while ($total--) {
            /** @var Connection $connection */
            $connection = $this->selector->select($this->connections);
            if ($connection->isAlive() === true) {
                return $connection;
            }

            if ($this->readyToRevive($connection) === true) {
                return $connection;
            }
        }

        throw new NoNodesAvailableException("No alive nodes found in your cluster");
    }

    public function scheduleCheck()
    {
    }

    /**
     * @param \Elasticsearch6\Connections\Connection $connection
     *
     * @return bool
     */
    private function readyToRevive(Connection $connection)
    {
        $timeout = min(
            $this->pingTimeout * pow(2, $connection->getPingFailures()),
            $this->maxPingTimeout
        );

        if ($connection->getLastPing() + $timeout < time()) {
            return true;
        } else {
            return false;
        }
    }
}
