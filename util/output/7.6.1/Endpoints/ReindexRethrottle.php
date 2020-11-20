<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints;

use Elasticsearch7\Common\Exceptions\RuntimeException;
use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class ReindexRethrottle
 * Elasticsearch API name reindex_rethrottle
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ReindexRethrottle extends AbstractEndpoint
{
    protected $task_id;

    public function getURI(): string
    {
        $task_id = $this->task_id ?? null;

        if (isset($task_id)) {
            return "/_reindex/$task_id/_rethrottle";
        }
        throw new RuntimeException('Missing parameter for the endpoint reindex_rethrottle');
    }

    public function getParamWhitelist(): array
    {
        return [
            'requests_per_second'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setTaskId($task_id): ReindexRethrottle
    {
        if (isset($task_id) !== true) {
            return $this;
        }
        $this->task_id = $task_id;

        return $this;
    }
}
