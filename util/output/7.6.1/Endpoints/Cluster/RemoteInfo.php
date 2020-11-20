<?php
declare(strict_types = 1);

namespace Elasticsearch6\Endpoints\Cluster;

use Elasticsearch6\Endpoints\AbstractEndpoint;

/**
 * Class RemoteInfo
 * Elasticsearch API name cluster.remote_info
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch6\Endpoints\Cluster
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class RemoteInfo extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_remote/info";
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
