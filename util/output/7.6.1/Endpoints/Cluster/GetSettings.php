<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Cluster;

use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class GetSettings
 * Elasticsearch API name cluster.get_settings
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Cluster
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetSettings extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_cluster/settings";
    }

    public function getParamWhitelist(): array
    {
        return [
            'flat_settings',
            'master_timeout',
            'timeout',
            'include_defaults'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
