<?php

declare(strict_types = 1);

namespace Elasticsearch6\ConnectionPool\Selectors;

use Elasticsearch6\Connections\ConnectionInterface;

/**
 * Class RoundRobinSelector
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\ConnectionPool\Selectors\ConnectionPool
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class RoundRobinSelector implements SelectorInterface
{
    /**
     * @var int
     */
    private $current = 0;

    /**
     * Select the next connection in the sequence
     *
     * @param  ConnectionInterface[] $connections an array of ConnectionInterface instances to choose from
     *
     * @return \Elasticsearch6\Connections\ConnectionInterface
     */
    public function select($connections)
    {
        $returnConnection = $connections[$this->current % count($connections)];

        $this->current += 1;

        return $returnConnection;
    }
}
