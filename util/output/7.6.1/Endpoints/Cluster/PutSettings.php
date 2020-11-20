<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Cluster;

use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class PutSettings
 * Elasticsearch API name cluster.put_settings
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Cluster
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PutSettings extends AbstractEndpoint
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
            'timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function setBody($body): PutSettings
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}
