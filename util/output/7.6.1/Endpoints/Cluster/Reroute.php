<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Cluster;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class Reroute
 * Elasticsearch API name cluster.reroute
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Cluster
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Reroute extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_cluster/reroute";
    }

    public function getParamWhitelist(): array
    {
        return [
            'dry_run',
            'explain',
            'retry_failed',
            'metric',
            'master_timeout',
            'timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setBody($body): Reroute
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}
