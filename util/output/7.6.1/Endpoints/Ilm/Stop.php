<?php
declare(strict_types = 1);

namespace Elasticsearch7\Endpoints\Ilm;

use Elasticsearch7\Endpoints\AbstractEndpoint;

/**
 * Class Stop
 * Elasticsearch API name ilm.stop
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch7\Endpoints\Ilm
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Stop extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_ilm/stop";
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }
}
